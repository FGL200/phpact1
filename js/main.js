function goHome(){
    window.location.href = "..";
}

function goTo(){
    const link = document.getElementById("goto").value;
    window.location.href = link + ".php";
}

const MAIN = {
    /**
     * Return a string that an input:date can understand.
     * @param {Date} DATE 
     * @returns 
     */
    ToInputDate : function(DATE) {
        let today = DATE;
        let day = (today.getDate() < 10) ? "0" + today.getDate() : today.getDate() ;
        let month = (today.getMonth() + 1 < 10) ? "0" + (today.getMonth() + 1) : (today.getMonth() + 1);    
        let year = today.getFullYear();
        return `${year}-${month}-${day}`;
    }
}