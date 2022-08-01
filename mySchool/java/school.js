function myFunctions() {
    document.getElementById("myDropdowns").classList.toggle("show");
    window.onclick = function(event){
        if(!event.target.matches('.dropbtns')){
            var dropdowns = document.getElementsByClassName("dropdowns-content");
            var i;
            for (i = 0; i < dropdowns.length; i++){
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                }
            }
        }
    }
}