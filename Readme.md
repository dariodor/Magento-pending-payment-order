== Pending Payment order

* Display pending orders on account dashboard
* "Pay here" link on pending order
* Send pending order email to customer

=== Comments

You need to create a custom module that depends on the Sales module. This way it will be loaded after the Sales module.
You can override the config.xml of the sales module from the config.xml of your new module. Actually you can override any config setting from any module. 