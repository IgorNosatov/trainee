<?php

namespace application\models;

use application\models\ActiveRecord;

class Post extends ActiveRecord
{

	protected static function getTableName(): string
	{
		return 'posts';
	}
}
