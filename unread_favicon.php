<?php
    /**
     * Unread Favivon
     *
     * Shows the number of unread Emails inside the favicon
     *
     * @version 1.0
     * @author Christian Sucker
     * @url http://roundcube.net/plugins/unread_favicon
     */
    class unread_favicon extends rcube_plugin
    {
      public $task = 'mail';
      private $map;

      function init()
      {
           $this->include_script('favico-0.3.10.min.js');
           $this->include_script('unread_favicon.js');
      }

    }
