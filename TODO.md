Importance is in the brackets.  This is on a scale of 0-9.  The higher the number, the more important a task is.

* [6] Add more events (channel/user mode, topic, public/private notice, etc).
* [6] Implement applicable events into CleanLogs module.
* [9] Add `define("__DEBUG__", false);` to main.php to allow plugins to determine if debug mode is active.
* [9] Implement global logger API with debug and normal logging types.
* [9] Update current modules, events, static includes, etc, to use debug and normal logging.
* [9] Replace all inline configuration in `main.php` with configuration files (presumably in `./conf/moduleName/confName.conf`), and make a configuration handler class.