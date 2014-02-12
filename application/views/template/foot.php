<div id="footer">
	<div class="wrapper">
		<div id="foot_info">
			&copy; CMSMilestone 2014 powered by Rafał Kowalski Wesja: 10/02
		</div>
		<div id="lang_choice">
			<form method="post">
				<select name="cms_lang" onchange="this.form.submit()">
				<?php foreach($langs as $key => $lang)
					{
   						if( $_COOKIE['cms_lang'] == $key )
						{
					 		echo '<option value="'.$key.'" selected>'.$lang.'</option>'."\n";
						}
						else
						{
							echo '<option value="'.$key.'">'.$lang.'</option>'."\n";	
						}
					}
				?>
				</select>
			</form>
		</div>
	</div>
</div>