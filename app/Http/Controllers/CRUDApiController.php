<?php

namespace App\Http\Controllers;

use App\Traits\InputHandlerTrait;
use Cache;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Validation\ValidationException;


abstract class CRUDApiController extends ApiController
{
    use InputHandlerTrait;


    /** Trả về class của model
     * @return string
     */
    abstract protected function model(): string;


    /**    Display a listing of the resource.
     */
    public function index()
    {
        return $this->successResponse($this->model()::paginate(15));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $this->handleDataInput($request);

        $model = $this->model()::create($data);

        return $this->successResponse($model);
    }

    /**
     * Display the specified resource.
     */
    public function show($resource_id)
    {
        $model = $this->model()::findOrFail($resource_id);
        return $this->successResponse($model);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $resource_id)
    {
        try {
            $resource = $this->model()::findOrFail($resource_id);

            $data = $this->handleDataInput(
                $request,
                !empty($this->getImageInput())
                    ? $resource->{$this->getImageInput()}
                    : null
            );

            $resource->fill($data);
            $resource->save();
        } catch (ValidationException $e) {
            return errorResponse(['message' => $e->getMessage()]);
        }

        return $this->successResponse($resource);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($resource_id)
    {
        $resource = $this->model()::findOrFail($resource_id);

        try {
            if ($this->getImageInput() && $resource->{$this->getImageInput()}) {
                {
                    $imagePath = $this->getImageInput();
                }
            }
            $resource->delete();

            if (isset($imagePath)) {
                $this->deleteImage($resource->{$this->getImageInput()});
            }
        } catch (\Illuminate\Database\QueryException $e) {
            $errorCode = $e->errorInfo[1];
            if ($errorCode == '1451') {
                return $this->errorResponse(['message' => 'Không thể xóa do sản phẩm có ràng buộc']);
            }
        } catch (ValidationException $e) {
            return $this->errorResponse(['message' => $e->getMessage()]);
        } catch (Exception $e) {
            return $this->errorResponse(['message' => "lỗi máy chủ, không thể thực hiện"]);
        }

        return $this->successResponse(['message' => 'Xóa thành công!']);
    }

    public function changeStatus(Request $request)
    {
        $resource = $this->model()::findOrFail($request->input('id'));
        $resource->status = $request->input('status') === 'true' ? 1 : 0;
        $resource->save();

        return $this->successResponse(['message' => __('Status has been updated!')]);
    }

}
