# BuilderPattern
Builder Pattern implemented in PHP

###Problem
It is a simple wraps order demo.
To create a wrap you may input four different items: 
bread, condiment, dressing and a meat. It can be: panini, lettuce,
mayonnaise and a beef meat etc. There are a lot combinations, so
I created this with using builder pattern so that it will be easy to
take orders :)

composer is used for autoloading.

Usage:

`$order = new OrderDirector(new OrderBuilder());`

`$order->buildOrder ('Italian Bread', 'Cauliflower', 'Mayonnaise', 'Beef');`

`$order = $order->getOrder ();`

`$order->make ();`

`print_r ($order->showOrder ());`

Result will be:

Italian Bread Cauliflower Mayonnaise Beef (some sort of Panini (: )