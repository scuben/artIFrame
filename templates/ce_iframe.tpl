
<div class="<?php echo $this->class; ?> block"<?php echo $this->cssID; ?><?php if ($this->style): ?> style="<?php echo $this->style; ?>"<?php endif; ?>>
<?php if ($this->headline): ?>
<<?php echo $this->hl; ?>><?php echo $this->headline; ?></<?php echo $this->hl; ?>>
<?php endif; ?>

<?php echo $this->text; ?>
<iframe src="<?php echo $this->src ?>" name="<?php echo $this->name ?>" title="<?php echo $this->title ?>" width="<?php echo $this->width['value'].$this->width['unit'] ?>" height="<?php echo $this->height['value'].$this->height['unit'] ?>" align="<?php echo $this->align ?>" scrolling="<?php echo $this->scrolling ?>" frameborder="<?php echo $this->frameborder ?>"></iframe>
</div>
