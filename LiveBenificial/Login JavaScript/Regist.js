const loginText = document.querySelector(".title-text .login");
const loginForm = document.querySelector("form.login");
const loginBtn = document.querySelector("label.login");
const signupBtn = document.querySelector("label.signup");
const signupLink = document.querySelector("form .signup-link a");




signupBtn.onclick = (()=>{
  loginForm.style.marginLeft = "-50%";
  loginText.style.marginLeft = "-50%";
});
loginBtn.onclick = (()=>{
  loginForm.style.marginLeft = "0%";
  loginText.style.marginLeft = "0%";
});
signupLink.onclick = (()=>{
  signupBtn.click();
  return false;
});


videojs.registerPlugin('backgroundPlaylistRandom', function() {
  // Get a reference to the player
  var myPlayer = this,
      counter = 0;

  // +++ Display the title and description +++
  myPlayer.on('loadstart', function() {
    videoTitle.textContent = myPlayer.mediainfo.name;
    videoDescription.textContent = myPlayer.mediainfo.description;
  });

  // +++ Shuffle (randomize) the videos +++
  myPlayer.on('duringplaylistchange', function() {
    myPlayer.playlist.shuffle();
  });

// +++ Set the playlist to repeat, but stop after 2 times through +++
  myPlayer.playlist.repeat(true);

   myPlayer.on('playlistitem',function(){
     counter ++;
     if (counter > 4){
       myPlayer.playlist.repeat(false);
     }
   })
});



    

	
