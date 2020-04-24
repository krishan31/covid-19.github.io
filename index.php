<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Corona Data Tracker</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
               
    <!-- custom stylesheet file -->
        
</head>
<body onload = "fetch()">
       
<div class="flex text-center">
        <h1>Corona Data Tracker</h1>

</div>
<br>
        <br>

<div class="table-responsive">
        <table class="table table-bordered table-striped text-center" id="tbval">
                <tr>
                        <th>Country</th>
                        <th>Total Confirmed</th>
                        <th>Total Recovered</th>
                        <th>Total Deaths</th>
                        <th>New Confirmed</th>
                        <th>New Recovered</th>
                        <th>New Deaths</th>
                </tr>
        </table>
        
</div>










<script>


function fetch(){

                $.get("https://api.covid19api.com/summary",
                
                        function (data){

                                // console.log(data['Countries'].length);
                             var tbval = document.getElementById('tbval');
                             for(var i=1; i<(data['Countries'].length); i++){
                                     var x = tbval.insertRow();
                                     x.insertCell(0);

                                     tbval.rows[i].cells[0].innerHTML = data['Countries'][i-1]['Country'];
                                     
                                     tbval.rows[i].cells[0].style.background = '#7a4a91';
                                     tbval.rows[i].cells[0].style.color = '#fff';

                                     x.insertCell(1);
                                     tbval.rows[i].cells[1].innerHTML = data['Countries'][i-1]['TotalConfirmed'];
                                     tbval.rows[i].cells[1].style.background = '#4bb7d8';

                                     x.insertCell(2);
                                     tbval.rows[i].cells[2].innerHTML = data['Countries'][i-1]['TotalRecovered'];
                                     tbval.rows[i].cells[2].style.background = '#4bb7d8';

                                     x.insertCell(3);
                                     tbval.rows[i].cells[3].innerHTML = data['Countries'][i-1]['TotalDeaths'];
                                     tbval.rows[i].cells[3].style.background = '#f36e23';

                                     x.insertCell(4);
                                     tbval.rows[i].cells[4].innerHTML = data['Countries'][i-1]['NewConfirmed'];
                                     tbval.rows[i].cells[4].style.background = '#4bb7d8';

                                     x.insertCell(5);
                                     tbval.rows[i].cells[5].innerHTML = data['Countries'][i-1]['NewRecovered'];
                                     tbval.rows[i].cells[5].style.background = '#9cc850';

                                     x.insertCell(6);
                                     tbval.rows[i].cells[6].innerHTML = data['Countries'][i-1]['NewDeaths'];
                                     tbval.rows[i].cells[6].style.background = '#f36e23';
                             }
                        }

                );
        }

</script>





<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>