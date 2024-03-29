<?php

namespace App\Repositories;

interface OrderRepositoryInterface
{
    /**
     * Get's a order by it's ID
     *
     * @param int
     * @return array
     */
    public function getById(int $order_id): array;

    /**
     * Get's all posts.
     *
     * @param object
     * @return int
     */
    public function saveOrder(object $request): int;

    /**
     * Deletes a order.
     *
     * @param int
     * @return bool
     */
    public function deleteOrder(int $order_id): bool;

    /**
     * Get's all orders.
     *
     * @param object
     * @return object
     */
    public function getAll(object $request): object;
}