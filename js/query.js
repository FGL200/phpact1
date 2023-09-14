async function getCols(e){
    const form = new FormData();
    form.append('table', e.value);

    await fetch("../php/getColumns.php", {
        method : "POST",
        body : form
    })
    .then(response => response.json())
    .then(data => {
        let options = "<option value='' selected diabled>--Show Columns--</option>";
        for(let i = 0; i < data.length; i++){
            options += "<option value='" + data[i] + "'>" + data[i] + "</option>";
        }
        document.getElementById("columns").innerHTML = options;
    });


    nQuery = "SELECT * FROM " + e.value;
    document.getElementById("query").value = nQuery;
    runQuery(nQuery);
}

function appendCol(e){
    const value = e.value;
}

async function runQuery(query){
    if($.fn.DataTable.isDataTable( '#dataTable' )){
        $('#dataTable').DataTable().destroy();
        $('#dataTable').html("");
    }

    const form = new FormData();
    form.append("query", query);
    await fetch("../php/runQuery.php", {
        method : "POST",
        body : form
    })
    .then(response => response.json())
    .then(loadTable)
    .catch(e => {
        alert("Invalid query!");
    });
}

function loadTable(data){
    if(data== 0) {
        alert("No Data Found");
        return;
    }

    const myTable = document.getElementById("dataTable");
    const cols = Object.keys(data[0]);

    let newContent = "";

    newContent = "<thead><tr>";
    for(let i = 0; i < cols.length; i++){
        newContent += "<th>" + cols[i] + "</th>";
    }
    newContent += "</tr></thead>";

    newContent += "<tbody>";
    for(let i = 0; i < data.length; i++){
        newContent += "<tr>";
        for(let j = 0; j < cols.length; j++){
            newContent += "<td>" + data[i][cols[j]] + "</td>";
        }
        newContent += "</tr>";
    }
    newContent += "</tbody>";
    myTable.innerHTML = newContent;

    $("#dataTable").DataTable();
}