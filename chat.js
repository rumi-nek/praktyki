const form = document.querySelector(".typing-area");
const inputField = form.querySelector("input[name='message']");
const chatBox = document.querySelector(".chat-box");

form.onsubmit = (e)=>{
    e.preventDefault();
}

form.addEventListener("submit", ()=>{

    let xhr = new XMLHttpRequest();
    xhr.open("POST", "insert-chat.php", true);

    xhr.onload = ()=>{
        inputField.value = "";
    }

    let formData = new FormData(form);
    xhr.send(formData);
});


setInterval(()=>{

    let xhr = new XMLHttpRequest();
    xhr.open("POST", "get-chat.php", true);

    xhr.onload = ()=>{
        if(xhr.status === 200){
            chatBox.innerHTML = xhr.response;
            chatBox.scrollTop = chatBox.scrollHeight;
        }
    }

    xhr.send();

}, 1000);