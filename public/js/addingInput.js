


function myFunction() {
    var arr = document.getElementsByName('percentage[]');
    var tot = 0;
    for (var i = 0; i < arr.length; i++) {
        if (parseInt(arr[i].value))
            tot += parseInt(arr[i].value);
    }


    if(tot > 100){
        alert("Your percentage total exceed by "+(tot-100)+"%");
        return false;
    }
    else if (tot != 100){
        // document.getElementById('total').value = tot;
        alert("Percentage must be 100% your percentage total is: "+tot+"%");
        return false;
    }


    else{
        alert("You're good to go!");
        // document.getElementById('total').value = tot;
        return true;
}
}



$(document).ready(function(){



    var counter = 2;

    $("#addButton").click(function () {

        if(counter>10){
            alert("Only 10 inputs allowed");
            return false;
        }

        var newTextBoxDiv = $(document.createElement('div'))
            .attr({id: "TextBoxDiv" + counter, class: "calcform"});

        newTextBoxDiv.after().html('<h3>Category #'+ counter + ' : </h3>' +
            '<input type="text" name="category[]" class="form-control" placeholder="Category Name" required/>' + '<h4>Percentage #'+ counter + ' :</h4>' +
            '<input type="text" id="percentage" name="percentage[]" class="form-control" placeholder="Enter a number" required/>');



        newTextBoxDiv.appendTo("#TextBoxesGroup");


        counter++;
    });

    $("#removeButton").click(function () {
        if(counter==1){
            alert("No more inputs to remove");
            return false;
        }

        counter--;

        $("#TextBoxDiv" + counter).remove();

    });



});
