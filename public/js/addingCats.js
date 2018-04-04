





$(document).ready(function(){


    var counter = 2;




    $(".addButton").click(function () {
        var t = $(this).attr("id").split("_")[1];
        // var cat = $(this).attr("data-cat").split("_")[1];

        if(counter>10){
            alert("Only 10 inputs allowed");
            return false;
        }

        var newTextBoxDiv = $(document.createElement('div'))
            .attr("id", 'TextBoxDiv' + counter);

        newTextBoxDiv.after().html('<hr>Score:' +
            '<input type="number" name="score[]" id="score" class="form-control" value=" " /> Total:' +
            '<input type="number" name="total[]" id="total" class="form-control" value=" " />' +
            '<input type="hidden" name="cats_name[]" value="'+t+'" />'


             );

        newTextBoxDiv.appendTo("#TextBoxesGroup_"+t);

        counter++;
        console.log(counter);



    });

    $(".removeButton").click(function () {
        if(counter==2){
            alert("No more inputs to remove");
            return false;
        }

        counter--;

        $("#TextBoxDiv" + counter).remove();

    });





});
