<?php

declare(strict_types=1);

namespace App\Application\Actions\User;

use Psr\Http\Message\ResponseInterface as Response;

class ViewUserAction extends UserAction
{
    /**
     * {@inheritdoc}
     */
    protected function action(): Response
    {
        $userId = (int) $this->resolveArg('id');
        $user = $this->userRepository->findUserOfId($userId);

<<<<<<< HEAD
        $this->logger->info("User of id `{$userId}` was viewed.");
=======
        $this->logger->info("User of id `${userId}` was viewed.");
>>>>>>> a475f9d (Slim App)

        return $this->respondWithData($user);
    }
}
