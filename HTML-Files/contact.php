<!DOCTYPE html>
<html>

<head>
  <title>HEES</title>
  <link rel="stylesheet" type="text/css" href="../CSS-Files/Homepage.css">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" type="text/css" href="../CSS-Files/contact.css" />
  <script type="text/javascript" src="../JavaScript-Files/Homepage.js"></script>
  <script src="../JavaScript-Files/contact.js"></script>

  <link href="https://fonts.googleapis.com/css?family=Adamina|Amatic+SC" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Special+Elite&display=swap" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Oswald&family=Special+Elite&display=swap" rel="stylesheet">
</head>

<body>
  <div id="navbar">
    <?php if(isset($_COOKIE['logedInUser'])) {?><a href="HomePage.php" id="button-form">Home</a><?php }?>
    <?php if(!isset($_COOKIE['logedInUser'])) {?><a href="../index.php" id="button-form">Home</a><?php }?>
    <?php if(isset($_COOKIE['logedInUser'])) {?><a href="News.php" id="button-form1">News</a><?php }?>
    <a href="Aboutus.php" id="button-form1">About us</a>
    <a href="contact.php" id="button-form1">Contact </a>
  </div>

  <div id="contact-me-div">


  </div>
  <div id="contact-me-div2">
    <script>
      var i = 0; //start point
      var images = [];
      var time = 4000;

      //image list

      images[0] = '../Pictures/mostafa-meraji-cyEpUehK1cs-unsplash.jpg'
      images[1] = '../Pictures/annie-spratt-1YnBzhJISg4-unsplash.jpg'
      images[2] = '../Pictures/doug-linstedt-jEEYZsaxbH4-unsplash.jpg'
      images[3] = '../Pictures/pexels-fillipe-gomes-2092872.jpg'

      //change image
      function changeimg() {
        document.slide.src = images[i];
        if (i < images.length - 1) {
          i++;
        } else {
          i = 0;
        }

        setTimeout("changeimg()", time);
      }
      window.onload = changeimg;
    </script>
    <img name="slide" id="imgstyle" style="filter: invert(0);">
  </div>

  <div class="comments-space">
      <div class="comment">
        <h3>Comments: So far from home</h3>
        <p> 
          By August 1921, the UK Save the Children had raised over £1,000,000, and conditions for children in Central Europe were improving due to their efforts. However, the Russian famine of 1921 made Jebb realise that Save the Children must be a permanent organisation and that children's rights constantly need to be protected.[11] Their mission was thus changed to "an international effort to preserve child life wherever it is menaced by conditions of economic hardship and distress"
          From 1921 to 1923, Save the Children created press campaigns, propaganda movies and feeding centres in Russia and in Turkey to feed and educate thousands of refugees. They began to work with several other organisations such as the Russian Famine Relief Fund and Nansen which resulted in recognition by the League of Nations. Although Russia was largely closed off to international relief and aid, Save the Children persuaded Soviet authorities to let them have a ground presence.
        </p>
      </div>
      <p class="comment">
        By August 1921, the UK Save the Children had raised over £1,000,000, and conditions for children in Central Europe were improving due to their efforts. However, the Russian famine of 1921 made Jebb realise that Save the Children must be a permanent organisation and that children's rights constantly need to be protected.[11] Their mission was thus changed to "an international effort to preserve child life wherever it is menaced by conditions of economic hardship and distress"
        From 1921 to 1923, Save the Children created press campaigns, propaganda movies and feeding centres in Russia and in Turkey to feed and educate thousands of refugees. They began to work with several other organisations such as the Russian Famine Relief Fund and Nansen which resulted in recognition by the League of Nations. Although Russia was largely closed off to international relief and aid, Save the Children persuaded Soviet authorities to let them have a ground presence.
      </p>
  </div>
  <div id="muzik-space">
    <audio controls autoplay>
      <source src="../Audio/Sam Tinnesz - Far From Home (The Raven) [Official Audio].mp3" style="color: white;" id="audio-1">
      Sam Tinnesz
    </audio>
  </div>
   <div id="contact-form" style="color: aliceblue;">
      <div id="error_message"></div>

      <form name="middleForm" action="contactData.php" onsubmit="return validateForm()" method="POST">

        <h3 id="name1">Name:</h3>
        <input type="text" placeholder="name" class="si" id="name12" name="name" aria-required="true" required>
        <h3 id="surname1">
          Surname:</h3>
        <input type="text" placeholder="surname " class="si" id="surname" name="surname" aria-required="true" required>
        <h3 id="email1">Email:</h3>
        <input type="text" placeholder="Email" class="si" id="email" name="email" aria-required="true" required>
        <h3 id="subject1">Subject:</h3>
        <input type="text" placeholder="Subject" class="si" id="subject" name="subject" aria-required="true" required>

        <div>
          <h3 id="text23">Your Comment:</h3><textarea rows="15" name="comment" id="textareas"></textarea>
        </div>
        <button type="submit" id="style234">Submit</button>
      </form>
      <br>

    </div>

    <div id="newdivvideotryout">
      <video id="video1" preload="" autoplay="" muted="" playsinline="" loop="">
        <source src="../Video/video.mp4" type="video/mp4">
      </video>

    </div>
    <!-- <div id="last">
      <div id="erestina">
        <div id="pic">
        </div>
        <div id="texter">
          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum
          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum


        </div>
      </div>
      <div id="edisona">
        <div id="pic1">

        </div>
        <div id="texter">
          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum
          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum


        </div>
      </div>

    </div> -->
</body>

</html>