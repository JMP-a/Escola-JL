let button = document.getElementById("ButtonAdd");

button.addEventListener("click", AddTask);

function AddTask(){
    let taskCamp = document.getElementById("task");
    let taskText = taskCamp.value;
    let list = document.getElementById("list");
    let item = document.createElement("li");

    item.innerText = taskText;
    list.appendChild(item);

    taskCamp.value = "";
} 