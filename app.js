document.getElementById("addWork").addEventListener("click",function(){
    var work = document.getElementById('workText').value;
    var error = document.getElementById("error");
    if(work != ""){
        error.style.display = "none";
        // document.getElementById("list").innerHTML += '<li>' + work + '<span class="material-icons delete-button">delete</span></li>';
        document.getElementById("list").innerHTML += '<li onclick = "removeWork(this)">' + work + '</li>';
        document.getElementById('workText').value = "";
    }
    else{
        error.style.display = "block";
    }
});

function removeWork(listItem){
    listItem.style.display = "none";
}