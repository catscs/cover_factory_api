<?php

namespace App\Http\Controllers;

use App\Http\Requests\BuildManholeCoverRequest;
use CoverFactory\Manhole\Application\StoreManhole\StoreCommandHandler;
use CoverFactory\Manhole\Application\StoreManhole\StoreManholeCommand;

class BuildManholeCoverController extends Controller
{
    public function __invoke(BuildManholeCoverRequest $request, StoreCommandHandler $storeCommandHandler)
    {
        try {
            $command = new StoreManholeCommand($request->post('radio'), $request->post('material'), $request->post('decoration'));
            return response($storeCommandHandler($command), 201);
        } catch (\Exception $e) {
            return response(['error' => ['message' => $e->getMessage(), 'code'=> $e->getCode()]], $e->getCode());
        }
    }
}
