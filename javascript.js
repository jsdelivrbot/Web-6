var przycisk = document.getElementById("button"); // id button z HTML
var kontener = document.getElementById("container"); // container z div

function wylosuj()
{
    /* console.log("test"); wypisuje cos do konsoli */
    kontener.textContent = "dziala";
}

przycisk.addEventListener("click", wylosuj); //czeka na nacisniecie, "click" to klikniecie, wylosuj to funkcja