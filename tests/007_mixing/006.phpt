--TEST--
Test xmp_smix_release_sample
--CREDITS--
Boro Sitnikovski <buritomath@yahoo.com>
--SKIPIF--
<?php if (!extension_loaded("xmp")) print "skip"; ?>
--FILE--
<?php
$ctx = xmp_create_context();
xmp_load_module($ctx, dirname(__FILE__)."/../3d.mod");
xmp_start_smix($ctx, 1, 1);
var_dump(xmp_smix_load_sample($ctx, 0, dirname(__FILE__)."/../blip.wav"));
var_dump(xmp_smix_release_sample($ctx, 1));
var_dump(xmp_smix_release_sample($ctx, 0));
xmp_end_player($ctx);
xmp_release_module($ctx);
xmp_free_context($ctx);
?>
--EXPECT--
int(0)
int(-7)
int(0)
