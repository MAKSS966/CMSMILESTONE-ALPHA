<!-- HEAD BAR BEGIN -->
<div id="head-bar">
		<div class="wrapper">
			<div id="head-bar-logo">
				<img src="<?php echo URL::site( 'public/static/admin/css/image/cms-logo-icon.png' ); ?>" alt="Logo">
			</div>
            <div id="head-bar-user">
            	<ul id="head-bar-user-menu">
            		<li><a href="#" title="#" id="head-bar-user-drop"><?php echo Session::instance()->get('user_first_name').' '.Session::instance()->get('user_second_name');?></a>
                    	<div id="head-bar-user-dropdown">
                       		<div class="head-bar-user-dropdown-detail">
                            	<div id="head-bar-user-photo">
                                	<img src="upload/avatar/thumb/default.png" alt="Avatar"> <!--TO DO: dobry system uploadowania -->
                                </div>
                                <div id="head-bar-user-action">
                                	<ul>
                                    	<li><a href="<?php echo URL::site( 'admin/user/own_edit_profile' ); ?>" title="<?php echo __('Edit profile'); ?>"><?php echo __('Edit profile'); ?></a></li>
                                        <li><a href="<?php echo URL::site( 'admin/login/logout' ); ?>" title="<?php echo __('Logout') ;?>"><?php echo __('Logout') ;?></a></li>
                                   	</ul>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div id="head-bar-menu">
            	<ul id="head-bar-menu_ul">
                	<li><a href="<?php echo URL::site( 'admin/home/index' ); ?>" title="<?php echo __('Desktop'); ?>"><?php echo __('Desktop'); ?></a></li>
                    <li><a href="#" title="<?php echo __('Pages'); ?>"><?php echo __('Pages'); ?></a>
                    	<ul>
                        	<li><a href="#" title="<?php echo __('Add page'); ?>"><?php echo __('Add page'); ?></a></li>
                            <li><a href="#" title="<?php echo __('Edit page'); ?>"><?php echo __('Edit_page'); ?></a></li>
                        </ul>
                    </li>
                    <li><a href="#" title="<?php echo __('News'); ?>"><?php echo __('News'); ?></a>
                    	<ul>
                        	<li><a href="#" title="<?php echo __('Add news'); ?>"><?php echo __('Add news'); ?></a></li>
                            <li><a href="#" title="<?php echo __('Edit news'); ?>"><?php echo __('Edit news'); ?></a></li>
                            <li><a href="#" title="<?php echo __('Add page with news'); ?>"><?php echo __('Add page with news'); ?></a></li>
                        </ul>
                    </li>
                    <li><a href="#" title="<?php echo __('Settings'); ?>"><?php echo __('Settings'); ?></a>
                    	<ul>
                        	<li><a href="#" title="<?php echo __('Control panel'); ?>"><?php echo __('Control panel'); ?></a></li>
                           	<li><a href="#" title="<?php echo __('Edit style'); ?>"><?php echo __('Edit style'); ?></a></li>
                            <li><a href="#" title="<?php echo __('Edit template'); ?>"><?php echo __('Edit template'); ?></a></li>
                        </ul>
                   	</li>
                    <li><a href="#" title="<?php echo __('Users'); ?>"><?php echo __('Users'); ?></a>
                    	<ul>
                        	<li><a href="#" title="<?php echo __('Add user'); ?>"><?php echo __('Add user'); ?></a></li>
                            <li><a href="#" title="<?php echo __('Edit user'); ?>"><?php echo __('Edit user'); ?></a></li>
                       	</ul>
                    </li>
                    <li><a href="#" title="<?php echo __('Messages'); ?>"><?php echo __('Messages'); ?></a>
                    	<ul>
                        	<li><a href="#" title="<?php echo __('New message'); ?>"><?php echo __('New message'); ?></a></li>
                            <li><a href="#" title="<?php echo __('Outbox'); ?>"><?php echo __('Outbox'); ?></a></li>
                            <li><a href="#" title="<?php echo __('Inbox'); ?>"><?php echo __('Inbox'); ?></a></li>
                        </ul>
                   	</li>
                   	<li><a href="#" title="<?php echo __('Comments');?>"><?php echo __('Comments'); ?> </a>          		
                   	</li>
                </ul>
            </div>
		</div> 
</div>
    <!-- END HEAD BAR -->

