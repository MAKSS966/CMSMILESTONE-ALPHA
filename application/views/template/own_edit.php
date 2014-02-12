<?php defined('SYSPATH') OR die('No direct access allowed.'); ?>
<div class="page_wrapper">
	<div id="boxes">
		<div id="own_edit_info">
			<div class="head_box">
				Edycja profilu
			</div>
			<?php if( Session::instance()->get('success_update') ) echo '<div class="success_message">'.Session::instance()->get('success_update').'</div>'; Session::instance()->delete('success_update') ?>
			<?php
				if(!empty( $errors_update ) )
				{
					echo '<div class="error_message"> Proszę naprawić następujące błędy:';
					echo '<ul>';
					foreach( $errors_update as $eu )
					{
						echo "<li>".$eu."</li>\n";
					}
					echo '</ul>';
					echo '</div>';
				}
			?>
			<div class="form_ocp">
				<?php echo Form::open( 'user/update_own' ); ?>
					<fieldset>
						<div>
							<label for="user_first_name">Imię:</label>
							<input type="text" name="user_first_name" id="user_first_name" value="<?php echo $user_first_name; ?>" />
						</div>
						<div>
							<label for="user_second_name">Nazwisko:</label>
							<input type="text" name="user_second_name" id="user_second_name" value="<?php echo $user_second_name; ?>" />
						</div>
						<div>
							<label for="email">E-mail:</label>
							<input type="mail" name="email" id="email" value="<?php echo $email; ?>" />
						</div>
						<input type="submit" name="update_own" value="Zapisz" class="button" />
					</fieldset>
				<?php echo Form::close( ); ?>
			</div>
		</div>
		<div id="own_change_pass">
			<div class="head_box">
				Zmiana hasła
			</div>
				<?php if( Session::instance()->get('success_change_password') ) echo '<div class="success_message">'.Session::instance()->get('success_change_password').'</div>'; Session::instance()->delete('success_change_password') ?>
			<?php
				if(!empty( $errors_change_password ) )
				{
					echo '<div class="error_message"> Proszę naprawić następujące błędy:';
					echo '<ul>';
					foreach( $errors_change_password as $ecp )
					{
						echo "<li>".$ecp."</li>\n";
					}
					echo '</ul>';
					echo '</div>';
				}
			?>
			<div class="form_ocp">
				<?php echo Form::open( 'user/change_own_pass' ); ?>
					<fieldset>
						<div>
							<label for="old_password">Stare hasło:</label>
							<input type="password" name="old_password" id="old_password" />
						</div>
						<div>
							<label for="password">Nowe hasło:</label>
							<input type="password" name="password" id="password" />
						</div>
						<div>
							<label for="confirm_password">Potwierdź nowe hasło:</label>
							<input type="password" name="confirm_password" id="confirm_password" />
						</div>
						<input type="submit" name="change_pass" class="button" value="Zapisz" />
					</fieldset>
				<?php echo Form::close( ); ?>
			</div>
		</div>
	</div>
</div>