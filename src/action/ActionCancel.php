<?php
namespace Blacking\TaskForce\action;

class ActionCancel extends ActionAbstract
{
    const ACTION_CANCEL = 'cancel';

    protected string $name = 'Отменить';
    protected string $internal_name = self::ACTION_CANCEL;

    protected function rightsCheck(int $executor_id, int $customer_id, int $user_id): bool
    {
        if ($customer_id === $user_id) {
            return true;
        }
        return false;
    }
}
