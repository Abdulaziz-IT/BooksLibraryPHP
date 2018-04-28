var books = [];

function readBooksFromPHP() {
    var links = document.querySelectorAll("div > div > div > a");
    var images = document.querySelectorAll("div > div > div > a > img");
    var titles = document.querySelectorAll(".title");
    var authors = document.querySelectorAll(".authors");
    var stars = document.querySelectorAll(".stars");
    var reviews = document.querySelectorAll(".reviews");
    var price = document.querySelectorAll(".price");
    var published = document.querySelectorAll(".published");
    for (var i = 0; i < links.length; i++) {
        books.push(new Book(titles[i].innerHTML, authors[i].innerHTML, stars[i].innerHTML, images[i].src, reviews[i].innerHTML, price[i].innerHTML, links[i].href, published[i].innerHTML));
    }
}

function Book(title, author, stars, image, reviews, price, link, date) {
    //Defining the variables
    this.title = title;
    this.author = author;
    this.stars = stars;
    this.image = image;
    this.reviews = reviews;
    this.price = price;
    this.link = link;
    this.date = date;
}

var sorts = document.getElementById("sort");
sorts.onchange = function () {
    if (this.value == "price") {
        books.sort(comparePrice);
    } else if (this.value == "review") {
        books.sort(compareReviews);
    } else if (this.value == "stars") {
        books.sort(compareStars);
    } else { //Sorting according to date
        books.sort(compareDates);
    }
    updateDOM();
};

function comparePrice(a, b) {
    return b.price - a.price;
}

function compareReviews(a, b) {
    return b.reviews - a.reviews;
}

function compareStars(a, b) {
    return b.stars - a.stars;
}

function compareDates(a, b) {
    var d1 = new Date(a.date);
    var d2 = new Date(b.date);
    if (d1 < d2) {
        return 1;
    } else if (d2 > d1) {
        return -1;
    } else {
        return 0;
    }
}

function updateDOM() {
    var allBooks = document.getElementById("grid-container");
    allBooks.innerHTML = ""; //Cheating :D
    var i;
    for (i = 0; i < books.length; i++) {
        createGrids(books[i].title, books[i].author, books[i].stars, books[i].image, books[i].reviews, books[i].price, books[i].link, books[i].date);
    }
}

function createGrids(title, author, stars, image, review, price, link, date) {
    var allBooks = document.getElementById("grid-container");
    var divElem = document.createElement("div");
    allBooks.appendChild(divElem);

    var aElem = document.createElement("a");
    aElem.href = link;
    aElem.target = "_blank";
    divElem.appendChild(aElem);

    var imgElem = document.createElement("img");
    imgElem.src = image;
    imgElem.width = "218";
    imgElem.height = "218";
    aElem.appendChild(imgElem);
    aElem.appendChild(document.createElement("br"));

    var titleSpan = document.createElement("span");
    titleSpan.className = "title";
    titleSpan.appendChild(document.createTextNode(title));
    aElem.appendChild(titleSpan);
    aElem.appendChild(document.createElement("br"));

    var authorSpan = document.createElement("span");
    authorSpan.className = "authors";
    authorSpan.appendChild(document.createTextNode("Author: " + author + "."));
    aElem.appendChild(authorSpan);
    aElem.appendChild(document.createElement("br"));

    var starsSpan = document.createElement("span");
    starsSpan.className = "stars";
    starsSpan.appendChild(document.createTextNode("Stars: " + stars + " / 5.0."));
    aElem.appendChild(starsSpan);
    aElem.appendChild(document.createElement("br"));

    var reviewSpan = document.createElement("span");
    reviewSpan.className = "reviews";
    reviewSpan.appendChild(document.createTextNode("Reviews: " + review + " Customer reviews."));
    aElem.appendChild(reviewSpan);
    aElem.appendChild(document.createElement("br"));

    var priceSpan = document.createElement("span");
    priceSpan.className = "price";
    priceSpan.appendChild(document.createTextNode("Price: " + price + " $."));
    aElem.appendChild(priceSpan);
    aElem.appendChild(document.createElement("br"));

    var publishSpan = document.createElement("span");
    publishSpan.className = "published";
    publishSpan.appendChild(document.createTextNode("Date Published: " + date));
    aElem.appendChild(publishSpan);
    aElem.appendChild(document.createElement("br"));
    aElem.appendChild(document.createElement("br"));
}

readBooksFromPHP();