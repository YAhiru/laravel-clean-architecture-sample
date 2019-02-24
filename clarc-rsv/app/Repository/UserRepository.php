<?php
declare(strict_types=1);

namespace App\Repository;

use Illuminate\Database\ConnectionInterface;
use Reservation\Enterprise\Model\User\User;
use Reservation\Enterprise\Model\User\UserId;
use Reservation\Enterprise\Repository\UserRepository as UserRepositoryInterface;

final class UserRepository implements UserRepositoryInterface
{
    /** @var ConnectionInterface */
    private $con;

    public function __construct(ConnectionInterface $con)
    {
        $this->con = $con;
    }

    public function generateId(): UserId
    {
        // TODO: Implement generateId() method.
    }

    /**
     * @param User $user
     */
    public function create(User $user): void
    {
        $this->con->table('users')->insert([
            'id' => $user->getId(),
            'name' => $user->getName(),
            'login_id' => $user->getLoginId(),
            'password' => $user->getPassword()
        ]);
    }
}
