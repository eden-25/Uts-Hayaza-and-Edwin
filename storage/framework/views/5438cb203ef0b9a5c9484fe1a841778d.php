<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title', 'Blog Project'); ?></title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #fff;
        }
        
        /* Navigation */
        nav {
            background: white;
            padding: 1.5rem 2rem;
            border-bottom: 1px solid #e0e0e0;
        }
        
        nav a {
            color: #555;
            text-decoration: none;
            margin-right: 2rem;
            font-size: 15px;
        }
        
        nav a:hover {
            color: #000;
        }
        
        /* Container */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem;
        }
        
        /* University Card */
        .university-card {
            background: white;
            margin-bottom: 2rem;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }
        
        .university-image {
            width: 100%;
            height: 250px;
            object-fit: cover;
        }
        
        .university-content {
            padding: 2rem;
        }
        
        .university-content h2 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            color: #333;
        }
        
        .university-content p {
            color: #666;
            line-height: 1.8;
            margin-bottom: 1rem;
        }
        
        .read-more {
            color: #007bff;
            text-decoration: none;
            font-size: 14px;
        }
        
        .read-more:hover {
            text-decoration: underline;
        }
        
        /* Footer */
        footer {
            background: #f8f9fa;
            padding: 2rem;
            text-align: right;
            border-top: 1px solid #e0e0e0;
            margin-top: 3rem;
        }
        
        footer p {
            color: #666;
            font-size: 14px;
            margin: 0.3rem 0;
            justify-content: center;
            display: flex
            justify-between;
        }
    </style>
</head>
<body>
    <nav>
        <a href="<?php echo e(route('home')); ?>">Home</a>
        <a href="<?php echo e(route('about')); ?>">About</a>
        <a href="<?php echo e(route('posts.index')); ?>">2301010018 Hayaza Warizkan</a>
        <a href="#">2301010038 Edwin Adriansyah</a>
    </nav>

    <?php echo $__env->yieldContent('content'); ?>

    <footer>
        <p>© 2025 Company, Inc</p>
        <p>Home About 2301010018 Hayaza Warizkan</p>
        <p>2301010038 Edwin Adriansyah</p>
    </footer>
</body>
</html><?php /**PATH C:\Users\VivoBook-S14\Herd\2301010038_edwinadriansyah_uts1\resources\views/layouts/app.blade.php ENDPATH**/ ?>