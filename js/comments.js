"use strict";

const API_URL="api/comments";

let form = document.getElementById("commentForm");
let app = new Vue({
    el: "#comments",
    data:{
        comments: []
    },
    methods: {
        deleteComment: function (id_btn) {
          deleteCommentById(id_btn);
        }
    }

});

window.addEventListener("load", getComments);

async function getComments(){
    try {
        let id_player = form.getAttribute('data-idItem');
        let response = await fetch(API_URL + "/" + id_player);
        let comments = await response.json();
        if(comments != []){
            console.log(comments);
            app.comments = comments;
        }

    } catch (error) {
        console.log(error);
    }
}
let btnagregar = document.getElementById("btn-agregar");
btnagregar.addEventListener("click", createComment);

async function createComment(){
    console.log("entra a createComment");
    let id_player = form.getAttribute('data-idItem');
    let comment = document.querySelector('#comment').value;
    let score = document.querySelector('#score').value;

    console.log(id_player);
    console.log(comment);
    console.log(score);

    let commentArray={  
        'comentario': comment,
        'puntaje':score,
        'id_jugador':id_player
    };

    try {
        let response= await fetch(API_URL,{
            "method": "POST",
            "mode": "cors",
            "headers": {"Content-type": "application/json"},
            "body":JSON.stringify(commentArray),
        });
        if(response.ok){
            console.log(response);
            getComments();
        }
    } catch (error) {
        console.log(error);
    }
}
let btndelete = document.getElementById("btn-delete");
btndelete.addEventListener("click", deleteComment);

async function deleteCommentById(id_btn){
    try{
        let response = await fetch(API_URL + "/"+ id_btn,{
        method: "DELETE",
        headers: {
        "Content-Type": "application/json"
        }
        });
        if(response.ok){
            getComments();
        }
    }
    catch(response){
        console.error(response);
    }
}