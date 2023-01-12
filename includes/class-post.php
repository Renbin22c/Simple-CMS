<?php

class Post
{
    /**
     * Retrieve all products from database
     */
    public static function getAllPosts()
    {
        if (!Authentication::whoCanAccess('editor')) {
            return DB::Connect()->select(
                'SELECT * FROM posts WHERE user_id = :user_id',
                [
                    'user_id' => $_SESSION['user']['id']
                ],
                true
            );
        } else {
            return DB::Connect()->select(
                'SELECT * FROM posts ORDER BY id DESC',
                [],
                true
            );
        }
    }


    /**
     * Retrieve post data by id
     */
    public static function getPostById($post_id)
    {
        return DB::connect()->select(
            'SELECT * FROM posts WHERE id = :id',
            [
                'id' => $post_id
            ]
        );
    }

    /**
     * Add new posts
     */
    public static function add( $title, $content, $user_id)
    {
        return DB::connect()->insert(
            'INSERT INTO posts (title, content, user_id)
            VALUES (:title, :content, :user_id)',
            [
                'title' => $title,
                'content' => $content,
                'user_id' => $user_id
            ]
        );
    }

    /**
     * Update Post details
     */
    public static function update( $id, $title, $content, $status)
    {
        // setup params
        $params = [
            'id' => $id,
            'title' => $title,
            'content' => $content,
            'status' => $status
        ];

        // update user data into the database
        return DB::connect()->update(
            'UPDATE posts SET title = :title, content = :content, status = :status WHERE id = :id',
            $params
        );

    }

    public static function delete ( $post_id )
    {
        return DB::connect()->delete(
            'DELETE FROM posts where id = :id',
            [
                'id' => $post_id
            ]
        );
    }
}

?>