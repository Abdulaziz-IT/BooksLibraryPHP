<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>FCIT Bookstore</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="main.css" />
</head>

<body>
    <?php 
    
    require_once('connection.php');
    require('get_books.php');
    
    ?>
    <div class="content">
        <header>
            <nav>
                <ul id="navList">
                    <li>Home</li>
                    <li>Browse</li>
                    <li>Kids books</li>
                    <li>English books</li>
                    <li>Arabic books</li>
                    <li>Computer books</li>
                </ul>
            </nav>
        </header>
        <div id="sorting">
            <label>
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAIGSURBVGhD7Zm7LwRBHMdPkAhBo1F4JJ6VRCLRUUg8olcpdaJQqSQaodGIv0MURInEuyIKpXiWovGKgu93dieZrHvs3MzknPw+ySc7vxXuPvb2ip2M8A+ojo9lTRe8hQewgSc80wFf4KKaAsGIe/gdewR9x7TCGzivpgB0wweoI8yYRlgWmBFX8fEZ8j/H9TH0GVMVH73CiEfIN7wPe+M175M2qGNOoI8Yvt4rXFaTJ3qgGVEL+RnWIcSMOYWuMS3wGs6pyQOMeIJmBEmGEDPmDP6Ze4YfHx2xB3UEyRZCzJhz6BLDb8KKaFk8lfAOZosguUKIGbPFE0XQCd/gmpoc2YWbMBlB8oUQxvCKrKjJnknIv7+tpoAUCnFFQmyRkJRIiC0SkhIJsUVCUiIhtkhISiTEFglJiYTYIiEpkRBbJCQlEmKLj5AB2BQtf1EohE8gh2C9mhxohnwhPlEshj6of7+dJxLkC2HEBuTP13nClVU4Ey2tqYF80J0rJleIGfEJR2DJ4QPuXDHZQsyIDzgBvdAPea+4wBjupyRjkiHBIvhgm5f2Qk1uMIY7XWaMGWJGvMNx6JUlOB0tnWEM9yB1zGy83oFBI0LAGO4O803zaptH7pWMwSAMQm7I+IS7VDpGGzSiDn7BSzX5hTGHkBHc2R2FQVmAU9HSO/yYcdttWE2CUGoymR/8b+0klbe5FQAAAABJRU5ErkJggg=="
                    width="20" height="20" alt="sort logo">
                <select name="sort" id="sort">
                    <option value="default" selected disabled>Default</option>
                    <option value="price">Price (Low to high)</option>
                    <option value="review">Reviews (High to low)</option>
                    <option value="stars">Stars (High to low)</option>
                    <option value="date">Publication Date (Newest to oldest)</option>
                </select>
            </label>
        </div>
        <div id="grid-container">
            <?php get_all_books() ?>
        </div>

    </div>

    <script src="main.js"></script>
</body>

</html>