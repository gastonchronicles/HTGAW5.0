$(document).ready(function(){
	$(document).on("click", ".like-post", likePost);
	$(document).on("click", ".follow", followUser);
	$(document).on("click", ".unfollow", unfollowUser);
});

function followUser(){
	var follow_btn = document.getElementById("follow");

	follow.className = "btn btn-danger unfollow";
	follow.innerHTML = "Unfollow";
	var user_id = $(this).attr("data-pg");
	$.ajax({
		url: "/profile/follow/"+user_id,
		type: "get",
		success:function(data){
			var followers = "";
			$.each(data, function(key, value){
				followers += "<div><a href='/profile/"+value['username']+"'>"+value['name']+"</a></div>";
			});

			$("#myModal0_"+user_id+" .modal-body").html(followers);
		}
	});

	
}


function unfollowUser(){
	var follow_btn = document.getElementById("follow");

	follow.className = "btn btn-success follow";
	follow.innerHTML = "Follow";

	var user_id = $(this).attr("data-pg");
	$.ajax({
		url: "/profile/unfollow/"+user_id,
		type: "get",
		success:function(data){
			console.log("helllo");
			var followers = "";
			$.each(data, function(key, value){
				followers += "<div><a href='/profile/"+value['username']+"'>"+value['name']+"</a></div>";
			});

			if(followers == ""){
				followers = "no followers";
			}

			$("#myModal0_"+user_id+" .modal-body").html(followers);
		}
	});

	
}


function likePost(){
	var post_id = $(this).attr("data-pg");
	$.ajax({
		url: "/posts/like/"+post_id,
		type: "get",
		success:function(data){
			var like_count = data.length;

			$("#like-count-"+post_id).html("<span class='btn btn-info btn-lg'>"+like_count+" likes</span>");

			var likers = "";
			$.each(data, function(key, value){
				likers += "<div><a href='/profile/"+value['username']+"'>"+value['name']+"</a></div>";
			});
			$("#myModal_"+post_id+" .modal-body").html(likers);
		}
	});
}