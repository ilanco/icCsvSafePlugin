# icCsvSafePlugin

`icCsvSafePlugin` is a plugin for symfony 1.3/1.4 applications. It provides helpers to clean data and output 
valid csv.


## Installation and configuration

### Installation

#### Using git submodules

Use this if you prefer to use git submodules for plugins:

    $ git submodule add git://github.com/ilanco/icCsvSafePlugin.git plugins/icCsvSafePlugin
    $ git submodule init
    $ git submodule update

Then enable the plugin in your projectConfiguration class:

    public function setup()
    {
        $this->enablePlugins('icCsvSafePlugin');
    }

