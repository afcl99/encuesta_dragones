<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
<script>
        function agregar(){
            if(document.getElementById("nuevoCorreo").value==""){
                alert("debe escribir un correo");
            }else{
                var tarea = document.getElementById("nuevoCorreo").value;
                escribir(tarea);
                location.reload();
                document.getElementById("nuevaCorreo").value="";
            }
        }
        function escribir(tarea){
            
        }
    </script>
<input type="text" class="txtBox" placeholder="Nuevo Correo..." id = "nuevaCorreo"><button onclick="agregar()">Agregar</button>