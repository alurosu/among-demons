var totalSteps = 3;
var currentStep = 0;
$(document).ready(function(){
	console.log("7. loading.js: loaded");
	doLoading();
});

function updateLoadingBar() {
	currentStep++;
	var percent = currentStep/totalSteps*100;
	$('.loading .bar div').finish().animate({ width: percent+"%"}, 0, doLoading);
}

function doLoading() {
	switch(currentStep) {
		case 0:
			$('.loading .text').html('Loading profile');
			server('profile.php?session='+localStorage.session, function(data){
				data2profile(data);
			});
			
			updateLoadingBar();
			break;
		case 1:
			$('.loading .text').html('Loading map');
			loadPart("data/part/map.html", function(){
				getMapContent(function(){
					console.log('map loaded');
					updateLoadingBar();
				});
			});
			break;
		case 2:
			$('.loading .text').html('Loading chat');
			loadPart("data/part/chat.html", function(){
				addMessage('System', 'Welcome to the game. Type /help for more chat commands.', 'system');
				console.log('chat loaded');
				updateLoadingBar();
			});
			break;
		case 3:
			$('.loading').fadeOut(0);
			break;
	}
}