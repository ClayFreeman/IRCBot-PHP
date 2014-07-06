<?php
  class @@CLASSNAME@@ {
    public $name = "ChannelJoinEvent";

    public function preprocessEvent($name, $registrations, $connection, $data) {
      $ex = explode(" ", trim($data));

      if ($ex[1] == "JOIN") {
        if (substr($ex[2], 0, 2) == ":#") {
          $ex[2] = substr($ex[2], 1);
        }

        if (substr($ex[2], 0, 1) == "#") {
          $nick = explode("!", $ex[0]);
          $user = explode("@", $nick[1]);
          $nick = substr($nick[0], 1);
          $host = $user[1];
          $user = $user[0];
          $source = array($nick, $user, $host);

          foreach ($registrations as $id => $registration) {
            EventHandling::triggerEvent($name, $id, array($connection, $source,
              $ex[2]));
          }
        }
      }
    }

    public function isInstantiated() {
      EventHandling::createEvent("channelJoinEvent", $this, "preprocessEvent");
      return true;
    }
  }
?>
