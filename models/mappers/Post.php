<?php
/**
 * Created by PhpStorm.
 * User: Amir Hossein Babaeian
 * Date: 12/28/15
 * Time: 3:52 PM
 */
namespace Entity\Mapper;
use Spot\Mapper;

class Post extends Mapper
{
    /**
     * Get 10 most recent posts for display on the sidebar
     *
     * @return \Spot\Query
     */
    public function mostRecentPostsForSidebar()
    {
        return $this->where(['status' => 'active'])
            ->order(['date_created' => 'DESC'])
            ->limit(10);
    }
}