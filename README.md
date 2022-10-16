## Ecommerce Demo project


**Some notes about this project.**

I've used some classes/files from my e-commerce project and put it here. Unfortunately i can't show you whole project because it's commertial.

For the html template i used taildwindcss components. **Not** everything is working, it's just templating for a visual presentation.

### Run project

> Make sure you use PHP 8.0 or 8.1


just run file

```bash
sh runProject.sh
```


#### What's working
After running `runProject.sh` you should be able to access shop page (/shop).

What's working:
- pagination
- filtering products based on category
- filtering product by min and max price
- *other filters can be added in the same way* - see `app/Filters/Product/ProductFilters.php`

There you will have a possibility to add product to a cart.

> Notice that the number of products on the top navigation and total sum of the cart updates accordingly.

And then go to the cart checkout page.

That's all for this demo, hope you will like it.


#### Tests
I have created some tests for the Cart class.

_____
> Please don't look at formatting HTML/blade code. I'm using prettier with blade formatter extension for vscode. It's not always perfect but for this purpose works ;)
_____

#### Possible Issues

1. `moneyphp/money` requires `bc-math` extension

`sudo apt install php8.0-bcmath`

> without bcmath extension enabled parsing was really slow. I've noticed that casting to Money object took ~1 sec

2.
`Class "NumberFormatter" not found`

solution:

```bash
sudo apt-get install php-intl
```

and restart php cli.
