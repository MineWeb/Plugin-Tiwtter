<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header with-border">
                    <h3 class="card-title"><?= $Lang->get("TWITTER__ADD"); ?></h3>
                </div>
                <div class="card-body">
                    <?php if(empty($twitter['Twitter']['id'])){ ?>
                        <form data-redirect-url="<?= $this->Html->url(array('controller' => 'Twitter', 'action' => 'ajax_create', 'admin' => true)) ?>" method="post" data-ajax="true">
                            <div class="ajax-msg"></div>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><?= $Lang->get('TWITTER__ADMIN_SUBTITLE'); ?></div>
                                </div>
                                <input type="text" class="form-control" name="name_twitter" placeholder="LaSkyMania">
                            </div>
                            <div class="form-group" style="margin-top:15px;">
                                <button type="submit" class="btn btn-primary center-block"><?= $Lang->get('GLOBAL__TWITTER__SUBMIT'); ?></button>
                            </div>
                        </form>
                    <?php } else { ?>
                        <form data-redirect-url="<?= $this->Html->url(array('controller' => 'Twitter', 'action' => 'ajax_edit', 'admin' => true)) ?>" method="post" data-ajax="true">
                            <div class="ajax-msg"></div>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><?= $Lang->get('TWITTER__ADMIN_SUBTITLE'); ?></div>
                                </div>
                                <input type="text" class="form-control" name="name_twitter" placeholder="LaSkyMania" value="<?= $twitter['Twitter']['name_twitter']; ?>">
                                <input type="hidden" name="id_twitter" value="<?= $twitter['Twitter']['id']; ?>">
                            </div>
                            <div class="form-group" style="margin-top:15px;">
                                <button type="submit" class="btn btn-primary center-block"><?= $Lang->get('GLOBAL__TWITTER__EDIT'); ?></button>
                            </div>
                        </form>
                    <?php } ?>
                </div>
            </div>
            <div class="card">
                <div class="card-header with-border">
                    <h3 class="card-title"><?= $Lang->get('TWITTER__API') ?></h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <?php if(empty($twitter['Twitter']['id'])){ ?>
                                <p><?= $Lang->get('TWITTER__EMPTY') ?></p>
                            <?php } else { ?>
                                <div class="admin-box">
                                    <div class="col-md-12">
                                        <h2 class="mt-4 text-center admin-twitter-title">Twitter de <?= $twitter['Twitter']['name_twitter']; ?></h2>
                                        <div class="admin-twitter">
                                            <a class="force-overflow twitter-timeline" href="https://twitter.com/<?= $twitter['Twitter']['name_twitter']; ?>?ref_src=twsrc%5Etfw"><?= $Lang->get('HOME__TWEETS') ?></a>
                                            <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>