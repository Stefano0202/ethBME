const express = require('express');
const multer = require('multer');
const path = require('path');
const fs = require('fs');

const app = express();
const PORT = 3000;

// Configurazione Multer per salvare i file in /img
const storage = multer.diskStorage({
    destination: function (req, file, cb) {
        cb(null, 'img/');
    },
    filename: function (req, file, cb) {
        const uniqueName = Date.now() + '-' + file.originalname;
        cb(null, uniqueName);
    }
});
const upload = multer({ storage: storage });

app.use(express.static(path.join(__dirname, 'public')));

// Endpoint per ricevere i file
app.post('/upload', upload.single('file'), (req, res) => {
    if (!req.file) {
        return res.status(400).json({ error: 'Nessun file caricato' });
    }
    res.json({ message: 'File caricato correttamente', filename: req.file.filename });
});

// Avvio del server
app.listen(PORT, () => {
    console.log(`Server attivo su http://localhost:${PORT}`);
});
