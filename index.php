<?php
session_start();
if(!isset($_SESSION["user"])){
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Focus Engineering</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link
      rel="icon"
      type="image/icon"
      href="https://focusengineering.in/wp-content/uploads/2023/03/cropped-cropped-Focus-Engg-Logo.png"
    />
    <style>

      /* Add your custom styles here */
.container{
  background-image: url("https://freedesignfile.com/upload/2016/10/HD-picture-Smoke-like-color-background.jpg");
  border-radius:20px;
}

.title {
  font-size: 48px;
  font-weight: 600;
  color: black;
  font-weight: bold;
  text-shadow: 2px 2px 5px blue;
  text-align: center;
  animation: fadeIn 2s;
}

@keyframes fadeIn {
  from { opacity: 0; }
  to { opacity:1;}
}


      body {
        font-family: Arial, sans-serif;
        background-color: #f0f0f0;
      }

      #FeedbackFormPage {
        max-width: 600px;
        margin: 40px auto;
        padding: 20px;
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        background-image: url("https://t4.ftcdn.net/jpg/07/01/79/01/360_F_701790157_IJGLphUNUbs2TiSBqosOfPtGHG1Mnqvw.jpg");
      }

      h1 {
        text-align: center;
        margin-bottom: 20px;
        color: #333;
      }

      table {
        width: 100%;
        border-collapse: collapse;
      }

      th,
      td {
        padding: 10px;
        border: 1px solid #ddd;
      }

      label {
        font-weight: bold;
        font-size: 16px;
      }

      input[type="text"],
      input[type="email"] {
        width: 100%;
        padding: 10px;
        font-size: 16px;
        border: 1px solid #ccc;
        border-radius: 5px;
      }

      input[type="radio"] {
        margin-right: 10px;
      }

      .formbtn {
        background-color: #4caf50;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
      }

      .formbtn:hover {
        background-color: #3e8e41;
      }

      #remarks {
        width: 100%;
        padding: 10px;
        font-size: 16px;
        border: 1px solid #ccc;
        border-radius: 5px;
        margin-top: 20px;
      }

      .radiobutton {
        font-size: 16px;
        font-weight: bold;
      }

      @media only screen and (max-width: 768px) {
        #FeedbackFormPage {
          margin: 20px auto;
          padding: 10px;
        }
      }

      @media only screen and (max-width: 480px) {
        #FeedbackFormPage {
          margin: 10px auto;
          padding: 5px;
        }
      }
    </style>
    
</head>
<body>
    <div class="container">
        <h1 class="title">Focus Engineering</h1>
        <a href="logout.php" id="button" class="btn btn-primary" style="float: right">Logout</a>
    </div>
    <div id="FeedbackFormPage">
      <form id="myForm" method="post">
        <h1>Feedback Form</h1>
        <table>
          <tr>
            <td><label for="name">Name:</label></td>
            <td>
              <input
                type="text"
                placeholder="Enter Your UserName"
                required
                autofocus
                name="Name"
              />
            </td>
          </tr>
          <tr>
            <td><label for="Email">Email:</label></td>
            <td>
              <input
                type="email"
                id="Email"
                placeholder="Enter Your Email"
                required
                name="Email"
              />
            </td>
          </tr>
          <tr>
            <td><label>Location:</label></td>
            <td>
              <input
                list="list"
                placeholder="Enter Your Location"
                required
                name="Location"
              />
              <datalist id="list">
                <option value="Gudiyatham"></option>
                <option value="Vellore"></option>
                <option value="Ranipet"></option>
                <option value="K V Kuppam"></option>
                <option value="Katpadi"></option>
              </datalist>
            </td>
          </tr>
          <tr>
            <td><label for="WIP">WIN Number:</label></td>
            <td>
              <input
                type="text"
                id="WIP"
                placeholder="#WIP Number"
                required
                name="WIP Number"
              />
            </td>
          </tr>
          <tr>
            <td><label for="VIN">VIN Number:</label></td>
            <td>
              <input
                type="text"
                id="VIN"
                placeholder="#VIN Number"
                required
                name="VIN Number"
              />
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <h2>Are you satisfied with this work or not</h2>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <input
                type="radio"
                class="radiobutton"
                name="Satisfied"
                value="Yes"
              />
              <b>Yes, I am Satisfied</b>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <input
                type="radio"
                class="radiobutton"
                name="Satisfied"
                value="No"
              />
              <b>No, I am Not Satisfied</b>
            </td>
          </tr>
          <tr>
            <td>
              <input type="submit" value="Submit" class="formbtn" />
            </td>
            <td>
              <input type="reset" value="Reset" class="formbtn" />
            </td>
          </tr>
        </table>
      </form>
    </div>
    <script>
      const scriptURL =
        "https://script.google.com/macros/s/AKfycbxG_F0nuIUleJi94Pw09XAk_GRSELpBcshm805xRpyGhqOL2EQ8fwgg5IXS3_IeHyD-Ag/exec";
      const form = document.forms["myForm"];

      form.addEventListener("submit", (e) => {
        e.preventDefault();
        var choice = document.querySelector(
          'input[name="Satisfied"]:checked'
        ).value;

        fetch(scriptURL, {
          method: "POST",
          body: new FormData(form),
        })
          .then((response) => {
            alert("Thank you! your form is submitted successfully");
            if (choice === "Yes") {
              window.location.href = "Yes.html";
            } else if (choice === "No") {
              window.location.href = "No.html";
            }
          })
          .catch((error) => console.error("Error!", error.message));
      });
    </script>
</body>
</html>