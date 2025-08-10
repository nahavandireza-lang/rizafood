<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>ریضا فود - غذا رضا فضا</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Zain:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Add jQuery for image popup functionality -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <!-- Styles -->
    <style>
        :root {
            --background-color: #F0B91B;
            --accent-red: #C7382A;
            --accent-yellow: #F7C93D;
            --cream: #FFF5D6;
            --dark-ink: #141414;
            --tomato-red: #EF3E36;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Zain', sans-serif;
            background-color: var(--background-color);
            background-image: radial-gradient(#00000011 1px, transparent 1px);
            background-size: 20px 20px;
            color: var(--dark-ink);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        
        .container {
            max-width: 420px;
            width: 100%;
            padding: 1rem;
            margin: 0 auto;
        }
        
        .main-container {
            background-color: var(--cream);
            border-radius: 16px;
            border: 4px solid var(--dark-ink);
            box-shadow: 0 8px 0 rgba(0, 0, 0, 0.2);
            padding: 1.5rem;
            margin-bottom: 2rem;
            position: relative;
        }
        
        .main-container::after {
            content: '';
            position: absolute;
            top: -4px;
            left: -4px;
            right: -4px;
            bottom: -4px;
            border: 2px solid var(--dark-ink);
            border-radius: 18px;
            pointer-events: none;
            z-index: -1;
        }
        
        .header {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 2rem;
            text-align: center;
        }
        
        .logo-container {
            display: flex;
            justify-content: center;
            margin-bottom: 1rem;
        }
        
        .logo-image {
            max-width: 250px;
            height: auto;
        }
        
        .logo-badge {
            width: 80px;
            height: 80px;
            background-color: var(--accent-yellow);
            border: 3px solid var(--dark-ink);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2.5rem;
            margin-bottom: 1rem;
            box-shadow: 0 4px 0 rgba(0, 0, 0, 0.2);
        }
        
        .brand-name {
            font-size: 2.5rem;
            font-weight: 900;
            color: var(--accent-red);
            text-shadow: 2px 2px 0 var(--dark-ink);
            margin-bottom: 0.5rem;
        }
        
        .tagline {
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 1rem;
        }
        
        .contact-info {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 0.5rem;
            margin-bottom: 1rem;
        }
        
        .pill {
            background-color: var(--accent-yellow);
            border: 2px solid var(--dark-ink);
            border-radius: 50px;
            padding: 0.5rem 1rem;
            font-weight: 700;
            box-shadow: 0 2px 0 rgba(0, 0, 0, 0.2);
        }
        
        .category-header {
            display: flex;
            align-items: center;
            margin-bottom: 1rem;
            background-color: var(--accent-red);
            border: 3px solid var(--dark-ink);
            border-radius: 12px;
            padding: 0.75rem;
            box-shadow: 0 4px 0 rgba(0, 0, 0, 0.2);
        }
        
        .category-icon {
            width: 40px;
            height: 40px;
            background-color: var(--accent-yellow);
            border: 2px solid var(--dark-ink);
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            margin-left: 0.75rem;
        }
        
        .category-title {
            color: var(--cream);
            font-size: 1.5rem;
            font-weight: 900;
            text-shadow: 1px 1px 0 var(--dark-ink);
        }
        
        .menu-item {
            display: flex;
            align-items: center;
            background-color: var(--cream);
            border: 2px solid var(--dark-ink);
            border-radius: 10px;
            padding-top: 0.75rem;
            padding-bottom: 0.75rem;
            padding-right: 0.75rem;
            margin-bottom: 0.75rem;
            box-shadow: 0 3px 0 rgba(0, 0, 0, 0.15);
        }
        
        .item-icon {
            width: 60px;
            height: 60px;
            background-color: var(--accent-yellow);
            border: 2px solid var(--dark-ink);
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.75rem;
            margin-left: 0.75rem;
            flex-shrink: 0;
            padding: 0;
        }
        .item-icon img {
		    width: 56px;
		    height: 56px;
		    border-radius: 6px;
	    }
        
        .item-details {
            flex-grow: 1;
        }
        
        .item-title {
            font-size: 1rem;
            font-weight: 700;
            margin-bottom: 0.25rem;
        }
        
        .item-description {
            font-size: 0.8rem;
            color: #555;
            margin-bottom: 0.25rem;
            line-height: 1.2;
        }
        
        .item-price {
            background-color: var(--dark-ink);
            border-radius: 0 10px 10px 0;
            padding: 0.25rem 0.75rem;
            font-weight: 700;
            font-size: 0.9rem;
            color: var(--cream);
            margin-right: 0.5rem;
            white-space: nowrap;
        }
        
        .location {
            font-size: 0.9rem;
            text-align: center;
            margin-bottom: 0.5rem;
        }
        
        .phone {
            font-size: 1rem;
            font-weight: 700;
        }
        
        .footer {
            margin-top: 3rem;
            padding: 2rem 1rem;
            text-align: center;
        }
        
        .footer-content {
            max-width: 420px;
            margin: 0 auto;
        }
        
        .map-container {
            margin-top: 1.5rem;
            border: 3px solid var(--dark-ink);
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 0 rgba(0, 0, 0, 0.2);
        }
        
        .map-iframe {
            display: block;
            width: 100%;
        }
        
        /* Image Preview Popup Styles */
        .image-popup-overlay {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.8);
            display: none;
            justify-content: center;
            align-items: center;
            z-index: 1000;
            backdrop-filter: blur(5px);
        }
        
        .image-popup-container {
            position: relative;
            max-width: 90%;
            max-height: 90%;
            animation: popupFadeIn 0.3s ease-out;
        }
        
        .image-popup-content {
            max-width: 100%;
            max-height: 80vh;
            border: 4px solid var(--dark-ink);
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.5);
        }
        
        .image-popup-close {
            position: absolute;
            top: -20px;
            right: -20px;
            width: 40px;
            height: 40px;
            background-color: var(--accent-red);
            border: 3px solid var(--dark-ink);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--cream);
            font-size: 1.5rem;
            font-weight: bold;
            cursor: pointer;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        }
        
        @keyframes popupFadeIn {
            from { opacity: 0; transform: scale(0.9); }
            to { opacity: 1; transform: scale(1); }
        }
    </style>
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
    
    <!-- Image Preview Popup -->
    <div class="image-popup-overlay" id="imagePopup">
        <div class="image-popup-container">
            <img class="image-popup-content" id="popupImage" src="" alt="Food Item">
            <div class="image-popup-close" onclick="closeImagePopup()">×</div>
        </div>
    </div>
    
    <script>
        // Make item images clickable to open in popup
        $(document).ready(function() {
            // Add click event to all item images
            $('.item-icon img').css('cursor', 'pointer').click(function() {
                openImagePopup($(this).attr('src'));
            });
        });
        
        // Function to open the image popup
        function openImagePopup(imageSrc) {
            $('#popupImage').attr('src', imageSrc);
            $('#imagePopup').css('display', 'flex');
            
            // Prevent scrolling of the background
            $('body').css('overflow', 'hidden');
        }
        
        // Function to close the image popup
        function closeImagePopup() {
            $('#imagePopup').css('display', 'none');
            
            // Re-enable scrolling
            $('body').css('overflow', 'auto');
        }
        
        // Close popup when clicking outside the image
        $('#imagePopup').click(function(e) {
            if (e.target === this) {
                closeImagePopup();
            }
        });
    </script>
</body>
</html>
