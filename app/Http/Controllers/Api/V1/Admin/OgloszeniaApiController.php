<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreOgloszeniaRequest;
use App\Http\Requests\UpdateSchoolClassRequest;
use App\Http\Resources\Admin\SchoolClassResource;
use App\Ogloszenia;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class OgloszeniaApiController extends Controller
{
    public function index()
    {

        return new OgloszeniaResource(Ogloszenia::all());
    }

    public function store(StoreOgloszeniaRequest $request)
    {
        $ogloszenia = Ogloszenia::create($request->all());

        return (new OgloszeniaResource($ogloszenia))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Ogloszenia $ogloszenia)
    {

        return new OgloszeniaResource($ogloszenia);
    }

    public function update(UpdateOgloszeniaRequest $request, Ogloszenia $ogloszenia)
    {
        $ogloszenia->update($request->all());

        return (new OgloszeniaResource($ogloszenia))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Ogloszenia $ogloszenia)
    {

        $ogloszenia->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
