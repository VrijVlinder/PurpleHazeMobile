<?php if (!defined('APPLICATION')) exit();
/*
Copyright 2008, 2009 Vanilla Forums Inc.
This file is part of Garden.
Garden is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.
Garden is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.
You should have received a copy of the GNU General Public License along with Garden.  If not, see <http://www.gnu.org/licenses/>.
Contact Vanilla Forums Inc. at support [at] vanillaforums [dot] com
*/

class PHMobileThemeHooks implements Gdn_IPlugin {
	
   public function Setup() {
		// Set the order for the modules (make sure new discussion module is after content).
		SaveToConfig('Modules.Vanilla.Content', array('Content', 'Ads', 'Notices','MessageModule', 'Notices', 'NewConversationModule', 'NewDiscussionModule'));
		SaveToConfig('Modules.Conversations.Content', array( 'Content', 'Ads','MessageModule', 'NewConversationModule', 'NewDiscussionModule'));
                   }

   public function OnDisable() {
      return TRUE;
   }
		
		
   public function CategoriesController_Render_Before($Sender) {

	
$this->_AddButton('Categories', T('Categories'), '/categories/all');
$this->_AddButton('Home', Img('themes/PurpleHazeMobile/design/images/hicon.png', array('title' => T('Home'))), 'http://www.yoursite.com',  array('class' => 'Button'));
$this->_AddButton('Games', Img('/themes/PurpleHazeMobile/design/images/smile.png', array('title' => T('Games'))), 'plugin/Games',  array('class' => 'Button'));
$this->_AddButton('NewDiscussion', Img('themes/PurpleHazeMobile/design/images/new.png', array('title' => T('Start New Discussion'))), 'post/discussion',  array('class' => 'Button'));		
$photo = UserPhoto(Gdn::Session()->User);
   


$this->_AddButton('User',  $photo,  '/profile/{UserID}/{Username}',array('Garden.SignIn.Allow'), array('class' => 'UserNotifications'));
}
   
   public function DiscussionsController_Render_Before($Sender) {

$this->_AddButton('Categories', T('Categories'), '/categories/all');
$this->_AddButton('Home', Img('themes/PurpleHazeMobile/design/images/hicon.png', array('title' => T('Home'))), 'http://www.yoursite.com',  array('class' => 'Button'));
$this->_AddButton('Games', Img('/themes/PurpleHazeMobile/design/images/smile.png', array('title' => T('Games'))), 'plugin/Games',  array('class' => 'Button'));
$this->_AddButton('NewDiscussion', Img('themes/PurpleHazeMobile/design/images/new.png', array('title' => T('Start New Discussion'))), 'post/discussion',  array('class' => 'Button'));		

                            $photo = UserPhoto(Gdn::Session()->User);
   


$this->_AddButton('User',  $photo,  '/profile/{UserID}/{Username}',array('Garden.SignIn.Allow'), array('class' => 'UserNotifications'));
}


   public function DiscussionController_Render_Before($Sender) {

$this->_AddButton('Categories', T('Categories'), '/categories/all');
$this->_AddButton('Home', Img('themes/PurpleHazeMobile/design/images/hicon.png', array('title' => T('Home'))), 'http://www.yoursite.com',  array('class' => 'Button'));
$this->_AddButton('Games', Img('/themes/PurpleHazeMobile/design/images/smile.png', array('title' => T('Games'))), 'plugin/Games',  array('class' => 'Button'));
$this->_AddButton('NewDiscussion', Img('themes/PurpleHazeMobile/design/images/new.png', array('title' => T('Start New Discussion'))), 'post/discussion',  array('class' => 'Button'));			
$photo = UserPhoto(Gdn::Session()->User);
   


$this->_AddButton('User',  $photo,  '/profile/{UserID}/{Username}',array('Garden.SignIn.Allow'), array('class' => 'UserNotifications')); 	
 
  }

   public function DraftsController_Render_Before($Sender) {

$this->_AddButton('Categories', T('Categories'), '/categories/all');
$this->_AddButton('Home', Img('themes/PurpleHazeMobile/design/images/hicon.png', array('title' => T('Home'))), 'http://www.yoursite.com',  array('class' => 'Button'));
$this->_AddButton('Games', Img('/themes/PurpleHazeMobile/design/images/smile.png', array('title' => T('Games'))), 'plugin/Games',  array('class' => 'Button'));
$this->_AddButton('NewDiscussion', Img('themes/PurpleHazeMobile/design/images/new.png', array('title' => T('Start New Discussion'))), 'post/discussion',  array('class' => 'Button'));		
$photo = UserPhoto(Gdn::Session()->User);
   


$this->_AddButton('User',  $photo,  '/profile/{UserID}/{Username}',array('Garden.SignIn.Allow'), array('class' => 'UserNotifications'));
   }
	
	public function MessagesController_Render_Before($Sender) {

$this->_AddButton('Categories', T('Categories'), '/categories/all');
$this->_AddButton('Home', Img('themes/PurpleHazeMobile/design/images/hicon.png', array('title' => T('Home'))), 'http://www.yoursite.com',  array('class' => 'Button'));
$this->_AddButton('Games', Img('/themes/PurpleHazeMobile/design/images/smile.png', array('title' => T('Games'))), 'plugin/Games',  array('class' => 'Button'));
$this->_AddButton('NewDiscussion', Img('themes/PurpleHazeMobile/design/images/new.png', array('title' => T('Start New Discussion'))), 'post/discussion',  array('class' => 'Button'));		
$photo = UserPhoto(Gdn::Session()->User);
   


$this->_AddButton('User',  $photo,  '/profile/{UserID}/{Username}',array('Garden.SignIn.Allow'), array('class' => 'UserNotifications'));	
	}
	
          public function ProfileController_Render_Before($Sender) {

$this->_AddButton('Categories', T('Categories'), '/categories/all');
$this->_AddButton('Home', Img('themes/PurpleHazeMobile/design/images/hicon.png', array('title' => T('Home'))), 'http://www.yoursite.com',  array('class' => 'Button'));
$this->_AddButton('Games', Img('/themes/PurpleHazeMobile/design/images/smile.png', array('title' => T('Games'))), 'plugin/Games',  array('class' => 'Button'));
$this->_AddButton('NewDiscussion', Img('themes/PurpleHazeMobile/design/images/new.png', array('title' => T('Start New Discussion'))), 'post/discussion',  array('class' => 'Button'));		
$photo = UserPhoto(Gdn::Session()->User);
   


$this->_AddButton('User',  $photo,  '/profile/{UserID}/{Username}',array('Garden.SignIn.Allow'), array('class' => 'UserNotifications'));	
	}

  public function ActivityController_Render_Before($Sender) {

$this->_AddButton('Categories', T('Categories'), '/categories/all');
$this->_AddButton('Home', Img('themes/PurpleHazeMobile/design/images/hicon.png', array('title' => T('Home'))), 'http://www.yoursite.com',  array('class' => 'Button'));
$this->_AddButton('Games', Img('/themes/PurpleHazeMobile/design/images/smile.png', array('title' => T('Games'))), 'plugin/Games',  array('class' => 'Button'));
$this->_AddButton('NewDiscussion', Img('themes/PurpleHazeMobile/design/images/new.png', array('title' => T('Start New Discussion'))), 'post/discussion',  array('class' => 'Button'));		
$photo = UserPhoto(Gdn::Session()->User);
   


$this->_AddButton('User',  $photo,  '/profile/{UserID}/{Username}',array('Garden.SignIn.Allow'), array('class' => 'UserNotifications'));	
	}
public function PluginController_Render_Before($Sender) {

$this->_AddButton('Categories', T('Categories'), '/categories/all');
$this->_AddButton('Home', Img('themes/PurpleHazeMobile/design/images/hicon.png', array('title' => T('Home'))), 'http://www.yoursite.com',  array('class' => 'Button'));
$this->_AddButton('Games', Img('/themes/PurpleHazeMobile/design/images/smile.png', array('title' => T('Games'))), 'plugin/Games',  array('class' => 'Button'));
$this->_AddButton('NewDiscussion', Img('themes/PurpleHazeMobile/design/images/new.png', array('title' => T('Start New Discussion'))), 'post/discussion',  array('class' => 'Button'));		
$photo = UserPhoto(Gdn::Session()->User);
   


$this->_AddButton('User',  $photo,  '/profile/{UserID}/{Username}',array('Garden.SignIn.Allow'), array('class' => 'UserNotifications'));	
	}

public function PostController_Render_Before($Sender) {

$this->_AddButton('Categories', T('Categories'), '/categories/all');
$this->_AddButton('Home', Img('themes/PurpleHazeMobile/design/images/hicon.png', array('title' => T('Home'))), 'http://www.yoursite.com',  array('class' => 'Button'));
$this->_AddButton('Games', Img('/themes/PurpleHazeMobile/design/images/smile.png', array('title' => T('Games'))), 'plugin/Games',  array('class' => 'Button'));
$this->_AddButton('NewDiscussion', Img('themes/PurpleHazeMobile/design/images/new.png', array('title' => T('Start New Discussion'))), 'post/discussion',  array('class' => 'Button'));		
$photo = UserPhoto(Gdn::Session()->User);
   


$this->_AddButton('User',  $photo,  '/profile/{UserID}/{Username}',array('Garden.SignIn.Allow'), array('class' => 'UserNotifications'));	
	}
	

	private function _AddButton($Sender, $ButtonType) {
      if (is_object($Sender->Menu)) {
         if ($ButtonType == 'Discussion')
            $Sender->Menu->AddLink('NewDiscussion', Img('themes/PurpleHazeMobile/design/images/new.png', array('alt' => T('New Discussion'))), '/post/discussion'.(array_key_exists('CategoryID', $Sender->Data) ? '/'.$Sender->Data['CategoryID'] : ''), array('Garden.SignIn.Allow'), array('class' => 'NewDiscussion'));
         elseif ($ButtonType == 'Conversation')
            $Sender->Menu->AddLink('NewConversation', Img('themes/PurpleHazeMobile/design/images/new.png', array('alt' => T('New Conversation'))), '/messages/add', '', array('class' => 'NewConversation'));

elseif ($ButtonType == 'ProfileLink')
$photo = UserPhoto(Gdn::Session()->User);           
 $Sender->Menu->AddLink('User',  $photo,  '/profile/{UserID}/{Username}',array('Garden.SignIn.Allow'), array('class' => 'UserNotifications'));
      }
   }
   
   // Change all pagers to be "more" pagers instead of standard numbered pagers
   public function DiscussionsController_BeforeBuildPager_Handler($Sender) {
      $Sender->EventArguments['PagerType'] = 'MorePager';
   }
   
   public function DiscussionController_BeforeBuildPager_Handler($Sender) {
      $Sender->EventArguments['PagerType'] = 'MorePager';
      $Sender->AddJsFile('jquery.gardenmorepager.js');
   }
   
   public function DiscussionController_BeforeDiscussion_Handler($Sender) {
      echo $Sender->Pager->ToString('less');
   }
   
   public function DiscussionController_AfterBuildPager_Handler($Sender) {
      $Sender->Pager->LessCode = 'Older Comments';
      $Sender->Pager->MoreCode = 'More Comments';
   }
   
   public function DiscussionsController_AfterBuildPager_Handler($Sender) {
      $Sender->Pager->MoreCode = 'More Discussions';
   }

}