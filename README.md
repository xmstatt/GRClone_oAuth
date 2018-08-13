# GRClone_oAuth
Self replicating application project by Michael Stattelman

ZERO Installs, Dual file execution. 

# Prerequisites: 
1) Have a github account (https://github.com) 

**(HTML5, CSS, Javascript, Jquery, PHP and GitHub api calls.)**

# How it works: 
Upon entry of your username and password the the following occurs:

A- Click Authorize:

    1)  Your are authenticated with Github.
    
      1a- Redirected to Github with Authorization approval
      
      1b- Code is sent from Github to this application
      
      1c- Code is passed to index.php to get access_token.
      
B- Click Clone:      

    1) A repository gets created. 
    
    2) The 3(index.html,index.php,README.md) files get posted posted. This application replicates itself code and all to the users own  github repository for editing enhancements or updates.
    
C- Click View:

    1) You will be redirected to your new repository
    

# How to deploy:
1) Once executed and the repository has been created in your github account.
2) Got to your account on github and then click on the GRClone repository.
3) Browse the tabs at the top of the directory listing( Code | Issues | Pull requests | Projects | Wiki | Insights | Settings) and click on Settings.
4) Scroll Down to the GitHub Pages section.
5) In the source section you should see a dropdown list next to a save button (Currently it should read None).
6) Change that to master branch and click Save.
7) You will see a highlighted message that states Your site is ready to be published at and then a custom URL.
    Something like (https://yourusername.github.io/GRClone_oAuth/)
8) Click on that URL(initially you might see a site not found message). After about 10 minutes as the settings need to propogate through Githubs servers, refresh the page and it will mirror the one that created it.
9) Go to your Developer Settings page on GitHub (https://github.com/settings/developers)
10) Click new "oAuth App"
11) Name it whatever you want but in the Homepage URL and Callback URL use the URL from the GitHUb Pages you just set up.
12) You will be given a Client_id and a Client_Secret_Key. Copy and paste each of them into your index.php file before uploading it onto the secure web host you have. If you do not have one you can use (000webhostapp.com) its free for the 1st 2 sites.
```diff
- ***DO NOT POST YOUR CLIENT SECRET KEY ON GITHUB***
```
13) If you need a secure php host go to 000webhostapp.com and post the index.php (you edited with your Client_id and your Client Secret key) file there, once you have set up your account with that host

***oAuth requires you to have a secure web host account that can execute your index.php page ***
1) Upload the index.php page there. (after adding your cliend_id and client_secrey_key)
2) In the oAuth version (index.html) change the following:
line #191
<code>
$.get('https://grclone.000webhostapp.com/?code=' + thisOne, function (data) {
</code>

***change to:

<code>
$.get('https://your_hosted_url/?code=' + thisOne, function (data) {
</code>


## You are ready to go......
Go to your https://yourusername.github.io/GRClone_oAuth/ URL and test it out.

***Be sure to change the line #130 to something other than "GRClone_oAuth" to avoid collisions in your own repository as it already exists***
<code>
    var clreponame = "GRClone_oAuth";
</code>    





# Working Demo:
https://mstatt.github.io/GRClone_Application


