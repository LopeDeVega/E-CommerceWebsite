// JavaScript Document

 $(document).ready(function() {
				//code for each button//function starts clicking the button
            	$("button").click(function(){
						//identify the i value every button has
                		var i = $(this).val();
					
					
    					var v = "#v"+i;
                        var p = "#p"+i;
                        var tot = "#tot"+i;
                        if ($(this).text() == "add") {
							//clicking the button add increase the number of items the user order
                            var q = parseInt($(v).val()) + 1;
                		};
							//clicking the button sub decrease the number of items the user order
                        if ($(this).text() == "sub") {
                        	var q = parseInt($(v).val());
							//if there is not item order dont get negative numbers //not allowing negative numbers
                            if (q > 0) {
                                q--;
                            } else {
                				q=0;
                            }
                		};
						//update the quantity 
            			$(v).val(q);
						//calcutating of the price
                        var t = (parseFloat($(p).val()) * q).toFixed(2);
                        $(tot).val(t);
                        var ct = parseInt($("#ti").text());
                        var gt = 0;
                        for (var x=0; x<ct; x++) {
                            var c = "#tot"+x;
                            gt = gt + (parseFloat($(c).val()));
                        }
                        gt = gt.toFixed(2);
                        $("#total").val(gt);
                        			
            });
        });
        