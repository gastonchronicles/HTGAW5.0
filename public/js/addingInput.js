




$(document).ready(function(){

        // document.getElementById('score').value = parseInt(document.getElementById('score1').value) + parseInt(document.getElementById('score2').value);
        // document.getElementById('total').value = parseInt(document.getElementById('total1').value) + parseInt(document.getElementById('total2').value);

    var counter = 2;

    $("#addButton").click(function () {

        if(counter>10){
            alert("Only 10 inputs allowed");
            return false;
        }

        var newTextBoxDiv = $(document.createElement('div'))
            .attr("id", 'TextBoxDiv' + counter);

        newTextBoxDiv.after().html('<h3>Category #'+ counter + ' : </h3>' +
            '<input type="text" name="category[]" class="form-control"/> Percentage #'+ counter + ' :' +
        '<input type="text" name="percentage[]" class="form-control"/><input type="hidden" name="category_id[]" value='+counter+' class="form-control"/>' );



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
