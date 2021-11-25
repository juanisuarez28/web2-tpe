{literal}
        <h2>Puntuacion y estado del jugador/a: </h2>
    <ul v-if="comments!=null">
        <li v-for="comment in comments"> Estado: {{ comment.comentario }} | Puntuacion: {{ comment.puntaje }}<button class="btn btn-danger" id="btn-delete" v-on:click.prevent='deleteComment(comment.id)'>eliminar Comentario</button></li>
    </ul>
    <div v-else> 
        <p >Aun no tiene puntaje y estado agregado.</p>
    </div>
{/literal}
