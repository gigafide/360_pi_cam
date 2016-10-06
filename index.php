<html>
	<head>
        <style>
		.button{
			background-color: #4CAF50;
			border: none;
			color: white;
			padding: 15px 32px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 16px;
			margin 4px 2px;
			cursor: pointer;
			border: 3px solid white;
		}
		#alerts{
			margin: auto;
			width: 50%;
			text-align: center;
			font-size: 24px;
		}
		#btn_list{
			margin: auto;
			width: 25%;
		}
		#cam_container{
			margin: auto;
			width: 50%;
		}
	</style>
	<script src="jquery-3.1.1.js"></script>
	<script type ="text/javascript">
                $(document).ready(function(){
			$('#record').click(function(){
				$('#response').text("Recording Started. Please wait...");
				$.ajax({
					type: 'Post',
					url: 'record_script.php',
					success: function(data3){
						$('#response').text(data3);
					}
				});
			});
			$('#cam_container').hide();
                        $('#stop_preview').click(function(){
                                $.ajax({
                                        type: 'Post',
                                        url : 'stop_script.php',
                                        success: function(data){
                                                $('#response').text(data);
						$('#cam_container').hide();
                                        }
                                });
                        });
			$('#start_preview').click(function(){
				$('#response').text("Starting camera. Please wait..");
				$.ajax({
					type: 'Post',
					url: 'start_script.php',
					success: function(data2){
						$('#cam_container').show();
						$('#cam_stream').attr('src', window.location.protocol + '//' + window.location.hostname + ':8090/stream');
						$('#response').text(data2);
					}
				/**$("#response").text("Preview Started");
				$('#cam_stream').attr('src', window.location.protocol + '//' + window.location.hostname + ':8090/stream');
				**/
				});
			});
		});
        </script>
	</head>
	<body>
		<div id="btn_list">
			<button id="start_preview" class="button" type="button">Start Preview</button>
			<button id="stop_preview" class="button" type="button">Stop Preview</button>
			<button id="record" class="button" type="button">Record</button>
		</div>
		<div id="alerts">
			<p id="response"></p>
		</div>
		<div id="cam_container">
			<img id="cam_stream" src="stream" width "640" height="480" />
		</div>
	</body>
</html>
