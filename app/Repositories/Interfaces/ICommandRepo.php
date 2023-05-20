<?php

/**
 * Interface ICommandRepo
 *
 * This interface represents a repository for managing commands.
 * The repository pattern is used to separate data access logic from business logic,
 * promoting a more modular and scalable codebase.
 * By using repositories, we adhere to the SOLID principles, particularly the Single Responsibility Principle (SRP),
 * making our code easier to maintain, test, and extend in the future.
 *
 * @package App\Repositories
 */

namespace App\Repositories\Interfaces;

interface ICommandRepo
{
    function all();
    function get($id);
    function create($request);
    function update($request, $id);
    function delete($id);
    function getOperatingSystems();
    function getPlaforms();
}
