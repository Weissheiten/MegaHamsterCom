# MegaHamsterCom
A demo project about a Hamster accessory store for use at the HTL3R.

##Version history

##1.0 Features
##### Objective Oriented Programming
Basic OOP classes for hamster homes, including abstract classes and interfaces

##### Image Library
A static class for retrieving a relative image path for hamster homes, including a fallback image if the given file does not exist. All hamster home files are to be saved inside the "Images"folder, currently there is no configuration available.

##### Datasource
The datasource for the creation of hamster homes has been decoupled into an own HamsterHomeProvider - this is a preparation for later work with databases

##### Menu Classes
The main menu for showing different pages is implemented via the MainMenu and MenuItem classes. This allows for easier rendering when using templating engines at a later time.
