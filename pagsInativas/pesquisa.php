<!-- <!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="consulta.php" method="get">

<input type="search" id="pesquisar" name="nomeR">
<button onclick="searchData()" type="submit"></button>
</form>
</body>
<script>
    var search = document.getElementById('pesquisar');

    search.addEventListener("keydown", function(event){
    if (event.key === "Enter") {
            searchData();
        }
    })
       
    function searchData(){
        window.location = 'pesquisa.php?search='+search.value;
    }
</script>
</html> -->