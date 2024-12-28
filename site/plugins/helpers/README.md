# Helper Functions

#### This i plugin is designed to add helper functions to the website:

**In the Index.php you can add a new siteMethod:**
```
    'siteMethods' => [
        'newHelperFunction' => function() {
            return 'My new helper function works!';
        }
    ]
```

**All functions that are created like this are globally available over the `$site` element:**
```
$site->newHelperFunction()
```
