document.getElementById("add-task-btn").addEventListener("click", addTask);

function addTask() {
    const taskInput = document.getElementById("new-task");
    const taskText = taskInput.value.trim();

    if (taskText === "") {
        alert("Tugas tidak boleh kosong!");
        return;
    }

    const taskList = document.getElementById("task-list");

    // Membuat elemen li baru
    const li = document.createElement("li");

    // Membuat span untuk teks tugas
    const taskSpan = document.createElement("span");
    taskSpan.textContent = taskText;

    // Membuat container untuk tombol
    const buttonContainer = document.createElement("div");
    buttonContainer.className = "button-container";

    // Membuat tombol edit
    const editBtn = document.createElement("button");
    editBtn.textContent = "✏️";
    editBtn.className = "edit-btn";
    editBtn.onclick = () => editTask(taskSpan);

    // Membuat tombol delete
    const deleteBtn = document.createElement("button");
    deleteBtn.textContent = "🗑️";
    deleteBtn.className = "delete-btn";
    deleteBtn.onclick = () => li.remove();

    // Menyusun tombol-tombol dalam container
    buttonContainer.appendChild(editBtn);
    buttonContainer.appendChild(deleteBtn);

    // Menyusun elemen li
    li.appendChild(taskSpan);
    li.appendChild(buttonContainer);

    // Menambahkan tugas di bagian atas
    taskList.insertBefore(li, taskList.firstChild);

    // Reset input setelah menambah tugas
    taskInput.value = "";
}

function editTask(taskSpan) {
    const newTaskText = prompt("Edit tugas:", taskSpan.textContent);
    if (newTaskText !== null && newTaskText.trim() !== "") {
        taskSpan.textContent = newTaskText.trim();
    }
}
