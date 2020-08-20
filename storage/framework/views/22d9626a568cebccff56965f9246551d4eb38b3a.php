<?php $__env->startSection('content'); ?>
    <div class="container-fluid app-body app-home">
      <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default channel-activity">
                <div class="panel-heading">
                    <h4>Recent Post Sent To Buffer</h4>
                </div>
                <div class="panel-body">
                    <form method="get" action="<?php echo e(route('post.search')); ?>">
                        <div class="col-md-3">
                            <div class="form-group">
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Search Post ..." name="search">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <input type="date" class="form-control" id="exampleInputEmail1" placeholder="date" name="date">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <select class="form-control select2" name="group">
                                  <option value="">select</option>
                                  <?php $__currentLoopData = $groups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <option value="<?php echo e($group->id); ?>"><?php echo e($group->name); ?></option>
                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                  
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </div>
                    </form>
                    <table class="table table-bordered">
                        <tr class="active">
                            <th style=" width: 30%">Group Name</th>
                            <th style="text-align: center; width: 12%">Group Type</th>
                            <th style="text-align: center; width: 8%">Account Name</th>
                            <th>Post Text</th>
                            <th style="text-align: center; width: 15%">Time</th>
                        </tr>
                        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($post->groupInfo->name); ?></td>
                                <td style="text-align: center"><?php echo e($post->groupInfo->type); ?></td>
                                <td style="text-align: center"><img src="<?php echo e($post->accountInfo->avatar); ?>" height="50px" width="50px" style="border-radius: 50%"></td>
                                <td><?php echo e($post->post_text); ?></td>
                                <td style="text-align: center;"><?php echo e(date_format(date_create($post->sent_at),'d M Y h i a')); ?></td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </table>
                    <div class="pull-right">
                        
                        <?php echo e($posts->links()); ?>

                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>