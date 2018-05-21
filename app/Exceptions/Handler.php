<?php

namespace App\Exceptions;
use Exception;
use Log;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use App\Json\MessageHelp;
class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * @param  \Exception  $exception
     * @return void
     */
    public function report(Exception $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $exception)
    {
        // $result=MessageHelp::BuildBaseResult(1,"系统错误",-1,"服务器错误(".$exception->getCode().")");
        // echo json_encode($result);
        //Log::error($exception->getMessage());
        return parent::render($request, $exception);
    }
}
