

<?php $__env->startSection('title', 'Posts'); ?>

<?php $__env->startSection('content'); ?>
<style>
    .posts-container {
        max-width: 900px;
        margin: 0 auto;
        padding: 3rem 2rem;
    }
    
    .post-list {
        display: flex;
        flex-direction: column;
        gap: 2rem;
    }
    
    .post-item {
        background: white;
        border-radius: 8px;
        padding: 2rem;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }
    
    .post-item h2 {
        font-size: 1.8rem;
        margin-bottom: 1rem;
        color: #333;
    }
    
    .post-meta {
        color: #666;
        font-size: 14px;
        margin-bottom: 1rem;
    }
    
    .post-item p {
        color: #555;
        line-height: 1.8;
        margin-bottom: 1rem;
    }
    
    .back-link {
        color: #007bff;
        text-decoration: none;
        display: inline-block;
        margin-bottom: 2rem;
    }
    
    .back-link:hover {
        text-decoration: underline;
    }
</style>

<div class="posts-container">
    <a href="<?php echo e(route('home')); ?>" class="back-link">← kembali</a>
    
    <div class="post-list">
        <?php $__empty_1 = true; $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <article class="post-item">
            <h2><?php echo e($post['title']); ?></h2>
            <div class="post-meta">
                Oleh: <?php echo e($post['author']); ?> | <?php echo e($post['date']); ?> | <?php echo e($post['category']); ?>

            </div>
            <p><?php echo e($post['excerpt']); ?></p>
        </article>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <div class="post-item">
            <p>Belum ada postingan tersedia.</p>
        </div>
        <?php endif; ?>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\VivoBook-S14\Herd\2301010038_edwinadriansyah_uts1\resources\views/posts/index.blade.php ENDPATH**/ ?>