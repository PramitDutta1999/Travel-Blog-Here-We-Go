<h1> Travel Blog Here We Go</h1>
<p>A complete blog website made from scratch. It has the option for user registration. The user can submit their post. An admin panel is also designed to edit/approve any post.It also has the option for comment approval. The post used in the website is just random post used for testing purpose.m</p>
<h2>Getting Started</h2>
<p>For building this website I used  XAMPP 3.2.1 earlier version  with PHP 5.6. Latest version of XAMPP with latest version of PHP support only mysqli where I used mysql. In case of latest version of XAMPP and PHP, the PHP code will be unchanged with a little change in mysql command. If you need this version of xamp just let me know: pramitduttaanik@gmail.com</p>
<h2>How To Set Up</h2>
<h5>Setting Up the database</h5>
<p>
  1. Clone the repository and install the above mentioned version of XAMPP.<br>
  2. Copy and paste the repository in htdocs which can be found in xamp installation directory.<br>
  3. Start XAMPP, start apache and MySQL. Then, go to your browser and type localhost/phpmyadmin.<br>
  4. Then in left panel click new. Name the database phpcms and create the database.<br> 
  5. Click the import tab and upload phpcms file from Database folder.<br>
  6. Go to browser and type localhost/your folder name.
</p>
<h5>Setting up local server for sending mail</h5>
1. Go to your XAMPP installation directory, find the php.ini, a configuration file in php folder.<br>
2. Replace the file with the file php.ini provided in the Setting up local server for sending mail folder in the repository.<br>
3. Then, from your XAMPP installation directory, find the sendmail.ini, a configuration file in sendmail folder.<br>
4. Replace the file with the file sendmail.ini provided in the Setting up local server for sending mail folder in the repository.<br>
5. Go to line 46 and 47. Give the mail id and password.<sup>*</sup><br>
<sup>*</sup>Sender mail id
<h5>Contact Us Page setup</h5>
<p>
  1. This page has a form for the user to send a mail.<br>
  2. Open the contactus.php file in a text editor. Go to line no. 14(receiver mail) and 15(sender mail)<sup>*</sup>. Give your desired mail id.<br>
  3. Here, the sender mail id will be the id used in local server set up<br>
  4. Customize the page by customizing 95, 96 and 97 no line with your address, phone number and email address.<br>
  <sup>*</sup>The sender and receiver mail can be same
</p>
<h5>User Registration Setup</h5>
<p>
  1.In case of signup and forget password, the system needs to send an email.<br> 
  2.Open signup.php. Go to line no. 37 and give your mail id.<br>
  3.Similarly, open recover.php. Go to line no. 25 and give your mail id.
</p>
<h5>Admin Panel Acess</h5>
<p>
1. Launch XAMPP and start Apache and MySQL.<br>
2. Go to browser and type localhost/yourfilename/home.php<br>
3. Select admin from your navigation bar.<br>
4. Username: admin and password:admin.
</p>
<h2>Built With</h2>
<p>
  Front-End: HTML, CSS, BOOTSTRAP and JAVASCRIPT<br>
  Back-End: PHP, MySQL
</P>
<h2>License</h2>
<p>This project is licensed under the MIT License - see the LICENSE file for details</p>
<h2>Acknowledgments</h2>
<p>This project was completed as part of the **CSE-380: Internet Programming** course at the **Chittagong University of Engineering and Technology**.</p>
