// Seleziona il bottone e l'input file
const uploadButton = document.getElementById('uploadButton');
const fileInput = document.getElementById('fileInput');

// Aggiungi un evento click al bottone per aprire il file picker
uploadButton.addEventListener('click', () => {
    fileInput.click();
});

// Aggiungi un evento change all'input file per gestire i file selezionati
fileInput.addEventListener('change', handleFiles);

// Aggiungi eventi dragover e dragleave al bottone per gestire lo stile durante il drag-and-drop
uploadButton.addEventListener('dragover', (event) => {
    event.preventDefault();
    uploadButton.style.backgroundColor = '#ddd';
});

uploadButton.addEventListener('dragleave', () => {
    uploadButton.style.backgroundColor = '';
});

// Aggiungi un evento drop al bottone per gestire i file trascinati
uploadButton.addEventListener('drop', (event) => {
    event.preventDefault();
    uploadButton.style.backgroundColor = '';
    const files = event.dataTransfer.files; 
    handleFiles({ target: { files } }); 
});

// Funzione per gestire i file selezionati o trascinati
function handleFiles(event) {
    const files = event.target.files;
    for (const file of files) {
        uploadFile(file); 
    }
    fileInput.value = ''; 
}

// Funzione per caricare un file al server
function uploadFile(file) {
    const formData = new FormData();
    formData.append('file', file);

    fetch('/upload', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        console.log('Success:', data); // Log del successo
    })
    .catch((error) => {
        console.error('Error:', error); // Log degli errori
    });
}
