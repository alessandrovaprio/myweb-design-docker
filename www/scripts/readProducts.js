
//funcione creata con i promise in modo da essere asincrona
function readProducts(target_table_id){
    return new Promise(resolve => {
        //api url a cui chiedere i dati
        url = 'http://localhost:3000/api/product/read.php';
        //var odd_even = false;
    //var tbl_body = document.createElement("div");
        var tbl_body = ""
        $.getJSON(url, function(data){
            //var indcol=1;
            var odd_even = false;
        //var tbl_row = tbl_body;
        $.each(data, function() {
        
            $.each(this, function(k , v) {
                
                tbl_body +="<img class=\"slide\" src="+"\""+v.image_path+"\" alt=\""+v.name+";"+v.description+"\">";
                //indcol++;
            })        
            //odd_even = !odd_even;               
            })
            $("#"+target_table_id).append(tbl_body);
            resolve("ok");
        //return tbl_body;
        });
        
      });
    
};
