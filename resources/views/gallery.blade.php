<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
</head>
<body>
    <h1>Gallery</h1>
    <div id="gallery"></div>

    <script>
        fetch('/api/gallery')
            .then(response => response.json())
            .then(data => {
                const galleryDiv = document.getElementById('gallery');
                data.forEach(item => {
                    const img = document.createElement('img');
                    img.src = item.url;
                    img.alt = item.title;
                    img.style.width = '200px';
                    img.style.margin = '10px';
                    galleryDiv.appendChild(img);
                });
            })
            .catch(error => console.error('Error fetching gallery:', error));
    </script>
</body>
</html>