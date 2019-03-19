
- Separates all database/business logic using the MVC pattern.
    This is included with the use of the model/database.php class and the classes folder consisting
    of the rest of our classes.

- Routes all URLs and leverages a templating language using the Fat-Free framework.
    This is contained in the index.php page, some examples include line 37, line 107.

- Has a clearly defined database layer using PDO and prepared statements.
    This is contained in our model/database.php class.

- Data can be viewed, added, updated, and deleted.
    Viewed - clients can view different drink menu items on the drinkOrder page
    Added - clients can add orders to the database when they submit a drink order
    Updated - admin update the data by changing fulfilled/submitted orders to complete
    Deleted - clients can delete data by choosing to delete their account

- Has a history of commits from both team members to a Git repository.
    This is included on our git hub repo's which are:
    (old/outdated project repo) - https://github.com/codeFunny71/finalProject
    (new/current project repo)- https://github.com/codeFunny71/barApp

- Uses OOP, and defines multiple classes, including at least one inheritance relationship.
    We use OOP with the implementation of our multiple classes, creating customer objects, order objects,
    admin objects, with the inheritance relationship being a happyHour class that is a child class of menuItem.

- Contains full Docblocks for all PHP files.
    This is included throughout all of our classes in the classes and the model folder.

- Has full validation on the client side through JavaScript and server side through PHP.
    This is completed in the validation scripts located in the scripts folder, and php validation
    is located in validation.php inside of the model folder.

- Incorporates jQuery and Ajax.
    Did not have time to implement.

- BONUS:  Utilizes an API (Note:  If you do use an API, be sure to talk about it in your presentation.)
    Not implemented.
