<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommandRequest;
use App\Repositories\Interfaces\ICommandRepo;
use Illuminate\Http\Request;

class CommandController extends Controller
{

    private $command_repo;

    function __construct(ICommandRepo $command_repo)
    {
        $this->command_repo = $command_repo;
    }

    /**
     * Display list of Commands
     */
    public function index()
    {
        $commands = $this->command_repo->all();
        return view("commands.index", compact('commands'));
    }

    /**
     * Create new command 
     */
    public function create()
    {
        //get operating systems 
        $operating_systems = $this->command_repo->getOperatingSystems();
        //get plaforms 
        $platforms = $this->command_repo->getPlaforms();

        return view("commands.create", compact('operating_systems', 'platforms'));
    }

    /**
     * Store new Command
     */
    public function store(CommandRequest $request)
    {
        $results = $this->command_repo->create($request);
        return $results;
    }


    /**
     * Edit commans 
     */
    public function edit($id)
    {
        //get command to edit 
        $command = $this->command_repo->get($id);
        //get operating systems 
        $operating_systems = $this->command_repo->getOperatingSystems();
        //get platforms 
        $platforms = $this->command_repo->getPlaforms();

        return view("commands.edit", compact('command', 'operating_systems', 'platforms'));
    }

    /**
     * Update Command
     */
    public function update(CommandRequest $request, $id)
    {
        $results = $this->command_repo->update($request, $id);
        return $results;
    }

    /**
     * Delete Command
     */
    public function destroy($id)
    {
        $results = $this->command_repo->delete($id);
        return $results;
    }
}
