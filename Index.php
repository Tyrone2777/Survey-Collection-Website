<!DOCTYPE html>
<html>

<head>
  <title>FAVOURITE FOOD</title>
</head>

<body>
  <nav style="margin-bottom: 20px;">
    <a href="index.php">FILL OUT SURVEY</a> |
    <a href="index.php">VIEW SURVEY RESULTS</a>
  </nav>
  <form action="favfood.php" method="post">
    <label>_Surveys</label>
    <br>
    <br>
    <br>

    <label>Personal Details:</label>

    <div>
      <label>Full Names</label>
      <div>
        <input type="text" name="fullName" required>
      </div>
    </div>
    <br>

    <div>
      <label>E-Mail</label>
      <div>
        <input type="text" name='EMail' required>
      </div>
    </div>
    <br>

    <div>
      <label>Date of Birth</label>
      <div>
        <input type="date" name="DateofBirth" required>
      </div>
    </div>
    <br>

    <div>
      <label>Contact Number</label>
      <div>
        <input type="number" name="ContactNumber" value='ContactNumber' required>
      </div>
    </div>
    <br>
    <br>
    <br>

    <label>What is your favorite food? :</label>
    <br>


    <label>Pizza</label>
    <input type="checkbox" name="Pizza" value="Pizza" >


    <label>Pasta</label>
    <input type="checkbox" name="Pasta" value="Pasta">


    <label>Pap and wors</label>
    <input type="checkbox" name="Papandwors" value="Pap and wors">


    <label>Other</label>
    <input type="checkbox" name="Others" value="Others">
    <br>
    <br>

    <label>Please rate your level of agreement on a scale of 1 to 5, with 1 being "strongly agree" and 5 being "strongly
      disagree"</label>
    <br>
    <table>
      <tr bgcolor="lightgrey">
        <th width="400"></th>
        <th width="200">Strongly agree</th>
        <th width="200">agree</th>
        <th width="200">neutral</th>
        <th width="200">disagree</th>
        <th width="200">strongly disagree</th>
      </tr>

      <br>

      <tr>
        <td>I like to watch movies</td>
        <td><input type="radio" name="watch_movies" value="1"></td>
        <td><input type="radio" name="watch_movies" value="2"></td>
        <td><input type="radio" name="watch_movies" value="3"></td>
        <td><input type="radio" name="watch_movies" value="4"></td>
        <td><input type="radio" name="watch_movies" value="5"></td>

      </tr>

      <tr>
        <td>I like to listen to radio</td>
        <td><input type="radio" name="listen_radio" value="1"></td>
        <td><input type="radio" name="listen_radio" value="2"></td>
        <td><input type="radio" name="listen_radio" value="3"></td>
        <td><input type="radio" name="listen_radio" value="4"></td>
        <td><input type="radio" name="listen_radio" value="5"></td>

      </tr>


      <tr>
        <td>I like to eat out</td>
        <td><input type="radio" name="eat_out" value="1"></td>
        <td><input type="radio" name="eat_out" value="2"></td>
        <td><input type="radio" name="eat_out" value="3"></td>
        <td><input type="radio" name="eat_out" value="4"></td>
        <td><input type="radio" name="eat_out" value="5"></td>

      </tr>


      <tr>
        <td>I like to watch TV</td>
        <td><input type="radio" name="watch_tv" value="1"></td>
        <td><input type="radio" name="watch_tv" value="2"></td>
        <td><input type="radio" name="watch_tv" value="3"></td>
        <td><input type="radio" name="watch_tv" value="4"></td>
        <td><input type="radio" name="watch_tv" value="5"></td>

      </tr>


    </table>
    <br>
    <br>
    <br>
    <input type="Submit" value="Submit">
  </form>
</body>

</html>


</body>

</html>
     
