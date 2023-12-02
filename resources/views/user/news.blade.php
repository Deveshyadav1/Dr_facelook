<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News Headlines</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }

        .container {
            margin-top: 20px;
        }

        h1 {
            text-align: center;
            color: #343a40;
        }

        .card {
            margin: 20px;
            border: 1px solid #dee2e6;
            border-radius: 10px;
            transition: transform 0.3s ease-in-out;
        }

        .card:hover {
            transform: scale(1.05);
        }

        .card-img-top {
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            max-height: 200px;
            object-fit: cover;
        }

        .card-body {
            padding: 20px;
        }

        .card-title {
            font-size: 1.5rem;
            color: #343a40;
        }

        .card-text {
            color: #6c757d;
        }

        a {
            color: #007bff;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="container">
    <h1 class="mt-4 mb-4">Top Headlines</h1>
    <div id="newsContainer" class="row"></div>
</div>

<!-- Include Bootstrap JS and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    // Function to fetch news data from the API
    function fetchNews() {
        const apiKey = 'ceabb455dc164ddd9985c205e20fb8a1';
        const apiUrl = `https://newsapi.org/v2/top-headlines?country=in&apiKey=${apiKey}`;

        // Fetch data from the API
        fetch(apiUrl)
            .then(response => response.json())
            .then(data => {
                // Check if data is available
                if (data.articles) {
                    // Process each article and display it
                    data.articles.forEach(article => {
                        displayArticle(article);
                    });
                }
            })
            .catch(error => console.error('Error fetching data:', error));
    }

    // Function to display a news article in a card
    function displayArticle(article) {
        const newsContainer = document.getElementById('newsContainer');

        // Create a card element
        const card = document.createElement('div');
        card.classList.add('card', 'col-md-4');

        // Create an image element
        const image = document.createElement('img');
        image.src = article.urlToImage || 'https://via.placeholder.com/300x200'; // Use a placeholder if no image is available
        image.alt = article.title;
        image.classList.add('card-img-top');

        // Create card body
        const cardBody = document.createElement('div');
        cardBody.classList.add('card-body');

        // Add article title to card
        const title = document.createElement('h5');
        title.classList.add('card-title');
        title.textContent = article.title;

        // Add article description to card
        const description = document.createElement('p');
        description.classList.add('card-text');
        description.textContent = article.description;

        // Add article link to card
        const link = document.createElement('a');
        link.href = article.url;
        link.target = '_blank';
        link.textContent = 'Read more';

        // Append elements to card body
        cardBody.appendChild(title);
        cardBody.appendChild(description);
        cardBody.appendChild(link);

        // Append image and card body to card
        card.appendChild(image);
        card.appendChild(cardBody);

        // Append card to news container
        newsContainer.appendChild(card);
    }

    // Fetch news when the page loads
    fetchNews();
</script>

</body>
</html>
