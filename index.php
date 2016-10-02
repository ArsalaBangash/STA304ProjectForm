<?php

    if ($_POST) {


        $list = array (
            $year,
            $year1T,
            $year2T,
            $year3T,
            $year4T,
            $year5T,
            $year1U,
            $year2U,
            $year3U,
            $year4U,
            $year5U,
            $fullU,
            $summerU
        );

        $fp = fopen('project_data.csv', 'w');

        fputcsv($fp, $list);

        fclose($fp);
    }
?>

<html>
    <head>

        <title>STA304</title>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

        <style type="text/css">

            hr.style18:before {
                display: block;
                content: "";
                height: 30px;
                margin-top: -31px;
                border-style: solid;
                border-color: snow;
                border-width: 0 0 1px 0;
                border-radius: 20px;
            }

            .radioControl {
                color: deepskyblue;
                top: 2px;
                left: 0;
                width: 50px;
                height: 50px;
                background: deepskyblue;
            }

            hr.style13 {
                height: 10px;
                border: 0;
                box-shadow: 0 10px 10px -10px snow inset;
            }



            body {
                background: #00c6ff; /* fallback for old browsers */
                background: -webkit-linear-gradient(to left, #00c6ff , #0072ff); /* Chrome 10-25, Safari 5.1-6 */
                background: linear-gradient(to left, #00c6ff , #0072ff); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
                font-family: helvetica, sans-serif;
                font-size: 100%;
            }

            h3 {
                font-family: "Liberation Sans";
                text-align: center;
                color: snow;
                font-size: 250%;


            }

            input {
                padding: 5px 5px 12px 5px;
                font-size: 40px;
                border-radius: 5px;
                border: 1px solid snow;
                width: 500px;

            }

            button {
                font-family: helvetica, sans-serif;
                color: snow;
                padding: 5px 5px 12px 5px;
                font-size: 40px;
                border-radius: 5px;
                border: 1px solid snow;
                width: 500px;
            }

            label {
                font-size: 200%;
                color: snow;
            }

            #wrapper {
                width: 1000px;
                margin: 0 auto;
            }
        </style>




    </head>
    <body>

        <h3>STA304 PROJECT SURVEY</h3>
        <hr class="style13">


        <form method="post">
            <div id="wrapper">


                <label>Enter your year of Undergraduate Study</label>
                <br>
                <br>
                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;

                <label for="yearRadio">1</label> &emsp;&emsp;&emsp;
                <label for="yearRadio">2</label> &emsp;&emsp;&emsp;
                <label for="yearRadio">3</label> &emsp;&emsp;&emsp;
                <label for="yearRadio">4</label> &emsp;&emsp;&emsp;
                <label for="yearRadio">4+</label> <br>

                <input type="radio" id="yearRadio" value="1" name="yearRadio" class="radioControl">&emsp;&emsp;&nbsp;&nbsp;&nbsp;
                <input type="radio" id="yearRadio" value="2" name="yearRadio" class="radioControl">&emsp;&emsp;&nbsp;&nbsp;
                <input type="radio" id="yearRadio" value="3" name="yearRadio" class="radioControl">&emsp;&emsp;&nbsp;&nbsp;&nbsp;
                <input type="radio" id="yearRadio" value="4" name="yearRadio" class="radioControl">&emsp;&emsp;&nbsp;&nbsp;&nbsp;
                <input type="radio" id="yearRadio" value="5" name="yearRadio" class="radioControl"><br>
                <hr class="style18"> <br>

                <label>Select the Number of Re-Purchased T-Cards and their Respective Years of Study</label>
                <br>
                <br>
                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;

                <label for="yearRadio">0</label> &emsp;&emsp;&emsp;
                <label for="yearRadio">1</label> &emsp;&emsp;&emsp;
                <label for="yearRadio">2</label> &emsp;&emsp;&emsp;
                <label for="yearRadio">3</label> &emsp;&emsp;&emsp;
                <label for="yearRadio">3+</label> <br><br>

                <label for="year1TRadio">Year 1</label> &emsp;&emsp;&emsp;
                <input type="radio" id="year1TRadio" value="0" name="year1TRadio" class="radioControl">&emsp;&emsp;&nbsp;&nbsp;&nbsp;
                <input type="radio" id="year1TRadio" value="1" name="year1TRadio" class="radioControl">&emsp;&emsp;&nbsp;&nbsp;
                <input type="radio" id="year1TRadio" value="2" name="year1TRadio" class="radioControl">&emsp;&emsp;&nbsp;&nbsp;&nbsp;
                <input type="radio" id="year1TRadio" value="3" name="year1TRadio" class="radioControl">&emsp;&emsp;&nbsp;&nbsp;&nbsp;
                <input type="radio" id="year1TRadio" value="4" name="year1TRadio" class="radioControl"><br>
                <br>

                <label for="year2TRadio">Year 2</label> &emsp;&emsp;&emsp;
                <input type="radio" id="year2TRadio" value="0" name="year2TRadio" class="radioControl">&emsp;&emsp;&nbsp;&nbsp;&nbsp;
                <input type="radio" id="year2TRadio" value="1" name="year2TRadio" class="radioControl">&emsp;&emsp;&nbsp;&nbsp;
                <input type="radio" id="year2TRadio" value="2" name="year2TRadio" class="radioControl">&emsp;&emsp;&nbsp;&nbsp;&nbsp;
                <input type="radio" id="year2TRadio" value="3" name="year2TRadio" class="radioControl">&emsp;&emsp;&nbsp;&nbsp;&nbsp;
                <input type="radio" id="year2TRadio" value="4" name="year2TRadio" class="radioControl"><br>
                <br>

                <label for="year3TRadio">Year 3</label> &emsp;&emsp;&emsp;
                <input type="radio" id="year3TRadio" value="0" name="year3TRadio" class="radioControl">&emsp;&emsp;&nbsp;&nbsp;&nbsp;
                <input type="radio" id="year3TRadio" value="1" name="year3TRadio" class="radioControl">&emsp;&emsp;&nbsp;&nbsp;
                <input type="radio" id="year3TRadio" value="2" name="year3TRadio" class="radioControl">&emsp;&emsp;&nbsp;&nbsp;&nbsp;
                <input type="radio" id="year3TRadio" value="3" name="year3TRadio" class="radioControl">&emsp;&emsp;&nbsp;&nbsp;&nbsp;
                <input type="radio" id="year3TRadio" value="4" name="year3TRadio" class="radioControl"><br>
                <br>

                <label for="year4TRadio">Year 4</label> &emsp;&emsp;&emsp;
                <input type="radio" id="year4TRadio" value="0" name="year4TRadio" class="radioControl">&emsp;&emsp;&nbsp;&nbsp;&nbsp;
                <input type="radio" id="year4TRadio" value="1" name="year4TRadio" class="radioControl">&emsp;&emsp;&nbsp;&nbsp;
                <input type="radio" id="year4TRadio" value="2" name="year4TRadio" class="radioControl">&emsp;&emsp;&nbsp;&nbsp;&nbsp;
                <input type="radio" id="year4TRadio" value="3" name="year4TRadio" class="radioControl">&emsp;&emsp;&nbsp;&nbsp;&nbsp;
                <input type="radio" id="year4TRadio" value="4" name="year4TRadio" class="radioControl"><br>
                <br>

                <label for="year5TRadio">Year 4+</label> &emsp;&nbsp;&nbsp;&nbsp;
                <input type="radio" id="year5TRadio" value="0" name="year5TRadio" class="radioControl">&emsp;&emsp;&nbsp;&nbsp;&nbsp;
                <input type="radio" id="year5TRadio" value="1" name="year5TRadio" class="radioControl">&emsp;&emsp;&nbsp;&nbsp;
                <input type="radio" id="year5TRadio" value="2" name="year5TRadio" class="radioControl">&emsp;&emsp;&nbsp;&nbsp;&nbsp;
                <input type="radio" id="year5TRadio" value="3" name="year5TRadio" class="radioControl">&emsp;&emsp;&nbsp;&nbsp;&nbsp;
                <input type="radio" id="year5TRadio" value="4" name="year5TRadio" class="radioControl"><br>
                <hr class="style18"> <br>

                <label>Select the Number of Re-Purchased UPASSes and their Respective Years of Study</label> <br> <br>

                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;

                <label for="yearRadio">0</label> &emsp;&emsp;&emsp;
                <label for="yearRadio">1</label> &emsp;&emsp;&emsp;
                <label for="yearRadio">2</label> &emsp;&emsp;&emsp;
                <label for="yearRadio">3</label> &emsp;&emsp;&emsp;
                <label for="yearRadio">3+</label> <br><br>

                <label for="year1URadio">Year 1</label> &emsp;&emsp;&emsp;
                <input type="radio" id="year1URadio" value="0" name="year1URadio" class="radioControl">&emsp;&emsp;&nbsp;&nbsp;&nbsp;
                <input type="radio" id="year1URadio" value="1" name="year1URadio" class="radioControl">&emsp;&emsp;&nbsp;&nbsp;
                <input type="radio" id="year1URadio" value="2" name="year1URadio" class="radioControl">&emsp;&emsp;&nbsp;&nbsp;&nbsp;
                <input type="radio" id="year1URadio" value="3" name="year1URadio" class="radioControl">&emsp;&emsp;&nbsp;&nbsp;&nbsp;
                <input type="radio" id="year1URadio" value="4" name="year1URadio" class="radioControl"><br>
                <br>

                <label for="year2URadio">Year 2</label> &emsp;&emsp;&emsp;
                <input type="radio" id="year2URadio" value="0" name="year2URadio" class="radioControl">&emsp;&emsp;&nbsp;&nbsp;&nbsp;
                <input type="radio" id="year2URadio" value="1" name="year2URadio" class="radioControl">&emsp;&emsp;&nbsp;&nbsp;
                <input type="radio" id="year2URadio" value="2" name="year2URadio" class="radioControl">&emsp;&emsp;&nbsp;&nbsp;&nbsp;
                <input type="radio" id="year2URadio" value="3" name="year2URadio" class="radioControl">&emsp;&emsp;&nbsp;&nbsp;&nbsp;
                <input type="radio" id="year2URadio" value="4" name="year2URadio" class="radioControl"><br>
                <br>

                <label for="year3URadio">Year 3</label> &emsp;&emsp;&emsp;
                <input type="radio" id="year3URadio" value="0" name="year3URadio" class="radioControl">&emsp;&emsp;&nbsp;&nbsp;&nbsp;
                <input type="radio" id="year3URadio" value="1" name="year3URadio" class="radioControl">&emsp;&emsp;&nbsp;&nbsp;
                <input type="radio" id="year3URadio" value="2" name="year3URadio" class="radioControl">&emsp;&emsp;&nbsp;&nbsp;&nbsp;
                <input type="radio" id="year3URadio" value="3" name="year3URadio" class="radioControl">&emsp;&emsp;&nbsp;&nbsp;&nbsp;
                <input type="radio" id="year3URadio" value="4" name="year3URadio" class="radioControl"><br>
                <br>

                <label for="year4URadio">Year 4</label> &emsp;&emsp;&emsp;
                <input type="radio" id="year4URadio" value="0" name="year4URadio" class="radioControl">&emsp;&emsp;&nbsp;&nbsp;&nbsp;
                <input type="radio" id="year4URadio" value="1" name="year4URadio" class="radioControl">&emsp;&emsp;&nbsp;&nbsp;
                <input type="radio" id="year4URadio" value="2" name="year4URadio" class="radioControl">&emsp;&emsp;&nbsp;&nbsp;&nbsp;
                <input type="radio" id="year4URadio" value="3" name="year4URadio" class="radioControl">&emsp;&emsp;&nbsp;&nbsp;&nbsp;
                <input type="radio" id="year4URadio" value="4" name="year4URadio" class="radioControl"><br>
                <br>

                <label for="year5URadio">Year 4+</label> &emsp;&nbsp;&nbsp;&nbsp;
                <input type="radio" id="year5URadio" value="0" name="year5URadio" class="radioControl">&emsp;&emsp;&nbsp;&nbsp;&nbsp;
                <input type="radio" id="year5URadio" value="1" name="year5URadio" class="radioControl">&emsp;&emsp;&nbsp;&nbsp;
                <input type="radio" id="year5URadio" value="2" name="year5URadio" class="radioControl">&emsp;&emsp;&nbsp;&nbsp;&nbsp;
                <input type="radio" id="year5URadio" value="3" name="year5URadio" class="radioControl">&emsp;&emsp;&nbsp;&nbsp;&nbsp;
                <input type="radio" id="year5URadio" value="4" name="year5URadio" class="radioControl"><br>
                <hr class="style18"> <br>

                <label for="fullUpass">Number of U-Passes Re-Purchased in the Fall/Winter</label><br>
                <input type="text" name="fullUpass" id="fullUpass" placeholder="e.g 0-9">
                <br>
                <hr class="style18">
                <br>

                <label for="sumUpass">Number of U-Passes Re-Purchased in the Summer</label><br>
                <input type="text" name="sumUpass" id="sumUpass" placeholder="e.g 0-9">
                <br>
                <hr class="style18">
                <br>

                <input type="button" name="submitButton" id="submitButton" value="Submit Information">


            </div>
        </form>

        <script type="text/javascript">

            $('#submitButton').click(function() {

                var year = parseInt($("input[name=yearRadio]:radio:checked").val(), 10)
                var year1T = parseInt($("input[name=year1TRadio]:radio:checked").val(), 10)
                var year2T = parseInt($("input[name=year2TRadio]:radio:checked").val(), 10)
                var year3T = parseInt($("input[name=year3TRadio]:radio:checked").val(), 10)
                var year4T = parseInt($("input[name=year4TRadio]:radio:checked").val(), 10)
                var year5T = parseInt($("input[name=year5TRadio]:radio:checked").val(), 10)
                var year1U = parseInt($("input[name=year1URadio]:radio:checked").val(), 10)
                var year2U = parseInt($("input[name=year2URadio]:radio:checked").val(), 10)
                var year3U = parseInt($("input[name=year3URadio]:radio:checked").val(), 10)
                var year4U = parseInt($("input[name=year4URadio]:radio:checked").val(), 10)
                var year5U = parseInt($("input[name=year5URadio]:radio:checked").val(), 10)
                var totalT = year1T + year2T + year3T + year4T + year5T
                var totalU = year1U + year2U + year3U + year4U + year5U
                var fullU = $("#fullUpass").val()
                var summerU = $("#sumUpass").val()

                alert(year +", " +  year1T +", " +  year2T +", " +
                year3T +", " +  year4T +", " +  year5T +", " +
                year1U + ", " + year2U + ", " + year3U +", " +  year4U +", " +  year5U
                +", " +  fullU +", " +  summerU)
            });
        </script>
    </body>
</html>
