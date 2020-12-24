<?php 
/* SVN FILE: $Id$ */
/* Comment Fixture generated on: 2008-06-18 13:06:03 : 1213794663*/

class CommentFixture extends CakeTestFixture {
	var $name = 'Comment';
	var $table = 'comments';
	var $fields = array(
			'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
			'body' => array('type'=>'text', 'null' => false),
			'post_id' => array('type'=>'integer', 'null' => false, 'length' => 10, 'key' => 'index'),
			'user_id' => array('type'=>'integer', 'null' => false, 'length' => 10, 'key' => 'index'),
			'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'post_id' => array('column' => 'post_id', 'unique' => 0), 'user_id' => array('column' => 'user_id', 'unique' => 0))
			);
	var $records = array(array(
			'id'  => 1,
			'body'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,
									phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,
									vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,
									feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.
									Orci aliquet, in lorem et velit maecenas luctus, wisi nulla at, mauris nam ut a, lorem et et elit eu.
									Sed dui facilisi, adipiscing mollis lacus congue integer, faucibus consectetuer eros amet sit sit,
									magna dolor posuere. Placeat et, ac occaecat rutrum ante ut fusce. Sit velit sit porttitor non enim purus,
									id semper consectetuer justo enim, nulla etiam quis justo condimentum vel, malesuada ligula arcu. Nisl neque,
									ligula cras suscipit nunc eget, et tellus in varius urna odio est. Fuga urna dis metus euismod laoreet orci,
									litora luctus suspendisse sed id luctus ut. Pede volutpat quam vitae, ut ornare wisi. Velit dis tincidunt,
									pede vel eleifend nec curabitur dui pellentesque, volutpat taciti aliquet vivamus viverra, eget tellus ut
									feugiat lacinia mauris sed, lacinia et felis.',
			'post_id'  => 1,
			'user_id'  => 1
			));
}
?>