

        function myPlan() {
          var x = document.getElementById("choose-plan").value;
          var y = document.getElementById("quantityplan").value;

          var price = 0;
          
          document.getElementById("plan").innerHTML =  x;
          document.getElementById("quantity").innerHTML = y;

          /*Data plan */
          if (x == "Choose a plan"){
              price =0;
          }
          else if (x == "3 Months Plan - 3GB/month"){
          price = 75;
          }
          else if (x == "3 Months Plan - 9GB/month"){
              price = 135;
          }
          else if (x == "3 Months Plan - UNLIMITED"){
              price = 210;
          }

          else if (x == "6 Months Plan - 3GB/month"){
          price = 120;
          }
          else if (x == "6 Months Plan - 9GB/month"){
              price = 240;
          }
          else if (x == "6 Months Plan - UNLIMITED"){
              price = 390;
          }

          else if (x == "12 Months Plan - 3GB/month"){
          price = 180;
          }
          else if (x == "12 Months Plan - 9GB/month"){
              price = 420;
          }
          else if (x == "12 Months Plan - UNLIMITED"){
              price = 720;
          }
          else if (x == "PreVN15"){
            price = 45;
          }
          else if (x == "PreVN15+"){
            price = 65;
          }
          else if (x == "OmgABC 6"){
            price = 6;
          }
          else if (x == "OmgABC 36"){
            price = 36;
          }
          else if (x == "OmgABC 66"){
            price = 66;
          }
          
          document.getElementById("price").innerHTML =  price*y +".00";


      
            var a = document.getElementById("choose-phone-plan").value;
            var b = document.getElementById("quantity-phone").value;
            var pricephone = 0;

            document.getElementById("phoneplan").innerHTML =  a;
            document.getElementById("phonequantity").innerHTML = b;
          

              /*Phone Plan*/
          if (a == "Choose a plan"){
            pricephone =0;
            
          }
          else if (a == "IXiao 11"){
            pricephone = 1760;
            document.getElementById("phoneimage").innerHTML = '<img src="image/iphblue.png" alt="iphoneblue" height="350px"> <br> IXiao 11';
          }
          else if (a == "IShuang 12"){
            pricephone = 2720;
            document.getElementById("phoneimage").innerHTML = '<img src="image/iporange.jpeg" alt="iphoneorange" height="350px"> <br> IShuang 12';
          }
          else if (a == "IYuen 13"){
            pricephone = 3608;
            document.getElementById("phoneimage").innerHTML = '<img src="image/ipppurple.jpeg" alt="ippurple" height="350px"> <br> IYuen 13';
          }

          else if (a == "IKwong 3 Lite"){
            pricephone = 1508;
            document.getElementById("phoneimage").innerHTML = '<img src="image/iphblue.png" alt="iphoneblue" height="350px"> <br> IKwong 3 Lite';
          }
          else if (a == "IHean 7"){
            pricephone = 3288;
            document.getElementById("phoneimage").innerHTML = '<img src="image/iporange.jpeg" alt="iphoneorange" height="350px"> <br> IHean 7';
          }
          else if (a == "IJuan pro 30 MAX"){
            pricephone = 5000;
            document.getElementById("phoneimage").innerHTML = '<img src="image/ipppurple.jpeg" alt="ippurple" height="350px"> <br> IJuan pro 30 MAX';
          }
//
          else if (a == "12 Months Plan - IXiao 11"){
            pricephone = 1772;
            document.getElementById("phoneimage").innerHTML = '<img src="image/iphblue.png" alt="iphoneblue" height="350px"> <br> IXiao 11';
          }
          else if (a == "12 Months Plan - IShuang 12"){
            pricephone = 3122;
            document.getElementById("phoneimage").innerHTML = '<img src="image/iporange.jpeg" alt="iphoneorange" height="350px"> <br> IShuang 12';
          }
          else if (a == "12 Months Plan - IYuen 13"){
            pricephone = 3972;
            document.getElementById("phoneimage").innerHTML = '<img src="image/ipppurple.jpeg" alt="ippurple" height="350px"> <br> IYuen 13';
          }

          else if (a == "24 Months Plan - IKwong 3 Lite"){
            pricephone = 1614;
            document.getElementById("phoneimage").innerHTML = '<img src="image/iphblue.png" alt="iphoneblue" height="350px"> <br> IKwong 3 Lite';
          }
          else if (a == "24 Months Plan - IHean 7"){
            pricephone = 3724;
            document.getElementById("phoneimage").innerHTML = '<img src="image/iporange.jpeg" alt="iphoneorange" height="350px"> <br> IHean 7';
          }
          else if (a == "24 Months Plan - IJuan pro 30 MAX"){
            pricephone = 6184;
            document.getElementById("phoneimage").innerHTML = '<img src="image/ipppurple.jpeg" alt="ippurple" height="350px"> <br> IJuan pro 30 MAX';
          }

          else if (a == "36 Months Plan - IHean 7"){
            pricephone = 3066;
            document.getElementById("phoneimage").innerHTML = '<img src="image/iphblue.png" alt="iphoneblue" height="350px"> <br> IHean 7';
          }
          else if (a == "36 Months Plan - IJuan pro 30 MAX"){
            pricephone = 5796;
            document.getElementById("phoneimage").innerHTML = '<img src="image/iporange.jpeg" alt="iphoneorange" height="350px"> <br> IJuan pro 30 MAX';
          }
          else if (a == "36 Months Plan - IYuen 13"){
            pricephone = 5476;
            document.getElementById("phoneimage").innerHTML = '<img src="image/ipppurple.jpeg" alt="ippurple" height="350px"> <br> IYuen 13';
          }

          document.getElementById("phoneprice").innerHTML =  pricephone*b +".00";

          
          var quanplan = parseFloat(document.getElementById("quantityplan").value);
          var quanphone = parseFloat(document.getElementById("quantity-phone").value);

          var total = quanplan + quanphone;

          document.getElementById("quantitynumber").innerHTML = total;

          document.getElementById("dataproduct").innerHTML = x;
          document.getElementById("phoneproduct").innerHTML = a;

          
          document.getElementById("totaldata").innerHTML = price*y;
          document.getElementById("totalphone").innerHTML = pricephone*b;

          var totalcost = price*y + pricephone*b;

          document.getElementById("totalphonedata").innerHTML = totalcost;

        }

        /* Proceed */
    function validateForm() {
        var receiptInput = document.getElementById('receipt');
        var dataPlanSelect = document.getElementById('choose-plan');
        var dataPlanQuantity = document.getElementById('quantityplan');
        var phonePlanSelect = document.getElementById('choose-phone-plan');
        var phonePlanQuantity = document.getElementById('quantity-phone');

        if (receiptInput.files.length === 0) {
            alert('Please upload a receipt.');
            return false; // Prevent form submission
        }
        
        if ((dataPlanSelect.value === 'Choose a plan' && dataPlanQuantity.value == 0) && phonePlanSelect.value != 'Choose a phone plan' && phonePlanQuantity.value != 0){
            return true;
        }
        
        else if ((phonePlanSelect.value === 'Choose a phone plan' && phonePlanQuantity.value == 0) && dataPlanSelect.value != 'Choose a plan' && dataPlanQuantity.value != 0){
            return true;
        }
        
        else if((phonePlanSelect.value != 'Choose a phone plan' && phonePlanQuantity.value != 0) && dataPlanSelect.value != 'Choose a plan' && dataPlanQuantity.value != 0){
            return true;
        }
        
        else{
            alert('Please choose a plan or quantity.');
            return false
        }

    }




        

        

 


      
    
