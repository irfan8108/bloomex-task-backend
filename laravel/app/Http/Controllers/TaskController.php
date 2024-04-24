<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\TaskResource;
use App\Http\Requests\TaskRequest;
use App\Traits\ApiResponse;
use DB;

class TaskController extends Controller
{

    use ApiResponse;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->sendResponse(
            TaskResource::collection(Task::latest()->get())
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TaskRequest $request)
    {
        DB::beginTransaction();
        try{
            Task::create($request->validated());
            DB::commit();
            
            return $this->sendResponse([], 'Task successfully created.', 201);

        }catch(\Exception $ex){
            return $this->rollback($ex);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TaskRequest $request, Task $task)
    {   
        DB::beginTransaction();
        try{
            $task->update($request->validated());
            DB::commit();

            return $this->sendResponse([], 'Task successfully updated.', 201);

        }catch(\Exception $ex){
            return $this->rollback($ex);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        $task->delete();
        return $this->sendResponse([], 'Task successfully deleted.', 202);
    }
}
