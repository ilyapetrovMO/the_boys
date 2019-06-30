function getNumberAjax(tableName) {
    if (tableName.length ==0 ) alert("nothing given to getNumberAjax");
    else {
        var xmlh = new XMLHttpRequest();
        xmlh.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200){
                document.getElementById('numberAjax').innerHTML = this.responseText;
            }
        };
        xmlh.open("GET","getNumber.php", true);
        xmlh.send();
    }
}
function getTableAjax(tableName) {
    if (tableName.length ==0 ) alert("nothing given to getTableAjax");
    else {
        var xmlh = new XMLHttpRequest();
        xmlh.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200){
                document.getElementById('tableAjax').innerHTML = this.responseText;
            }
        };
        xmlh.open("GET","getTable.php", true);
        xmlh.send();
    }
}
function getSelect() {
        var xmlh = new XMLHttpRequest();
        xmlh.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200){
                response = xmlh.responseText;
                document.getElementById('getSelectTarget').innerHTML = this.responseText;
                }
            }
        
        xmlh.open("GET","getSelect.php", true);
        xmlh.send();
}

function showHint(str) {
    if (str.length == 0 ) document.getElementById("txtHint").innerHTML = "";
    else {
        var xmlh = new XMLHttpRequest();
        xmlh.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200){
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlh.open("GET","showHint.php?q=" + str, true);
        xmlh.send();
    }
}