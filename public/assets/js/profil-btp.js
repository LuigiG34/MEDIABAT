let noteBtn = document.querySelector('.note');
let noteModal = document.querySelector('.note-modal');
let crossNote = document.querySelector('.cross-note');

noteBtn.addEventListener('click', () => {
    noteModal.classList.remove('d-none');
    crossNote.addEventListener('click', () =>{
        noteModal.classList.add('d-none');
    })
})