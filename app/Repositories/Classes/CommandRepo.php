<?php

namespace App\Repositories\Classes;

use App\Models\Command;
use App\Models\OperatingSystem;
use App\Models\Platform;
use App\Repositories\Interfaces\ICommandRepo;

class CommandRepo implements ICommandRepo
{
    /**
     * Get all list of commands 
     * @return array : commands 
     */
    function all()
    {
        return Command::orderBy("command", "ASC")->get();
    }

    /**
     * Get Command 
     */
    function get($id)
    {
        return Command::find($id);
    }

    /**
     * Create Command 
     * @param string $request->command : terminal command
     * @param string $request->description : command description 
     * @return array function results success/error
     */
    function create($request)
    {
        Command::create($request->all());
        return redirect()->route("commands.index")->with("success", "Command created successfully");
    }



    /**
     * Update Command
     * @param int id : command unique id  
     * @param string $request->command : terminal command
     * @param string $request->description : command description 
     * @return array function results success/error
     */
    function update($request, $id)
    {
        $command = Command::find($id);
        $command->update($request->all());
        return redirect()->route("commands.index")->with("success", "Command updated successfully");
    }

    /**
     * Delete Command 
     * @param integer : command unique id
     * @return array function results success/error
     */
    function delete($id)
    {
        $command = Command::find($id);
        $command->delete();
        return back()->with("success", "Command deleted successfully");
    }

    /**
     * Get list of operating systems 
     * @return array array : operating systems 
     */
    function getOperatingSystems()
    {
        return OperatingSystem::orderBy("name", "ASC")->get();
    }

    /**
     * Get list of plaforms
     * @return array array : plaforms
     */
    function getPlaforms()
    {
        return Platform::orderBy("name", "ASC")->get();
    }
}
