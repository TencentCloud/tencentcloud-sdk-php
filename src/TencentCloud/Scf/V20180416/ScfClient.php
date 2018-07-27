<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */

namespace TencentCloud\Scf\V20180416;
use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Scf\V20180416\Models as Models;

/**
* @method Models\CreateFunctionResponse CreateFunction(Models\CreateFunctionRequest $req) 该接口根据传入参数创建新的函数。
* @method Models\CreateTriggerResponse CreateTrigger(Models\CreateTriggerRequest $req) 该接口根据参数输入设置新的触发方式。
* @method Models\DeleteFunctionResponse DeleteFunction(Models\DeleteFunctionRequest $req) 该接口根据传入参数删除函数。
* @method Models\DeleteTriggerResponse DeleteTrigger(Models\DeleteTriggerRequest $req) 该接口根据参数传入删除已有的触发方式。
* @method Models\GetFunctionResponse GetFunction(Models\GetFunctionRequest $req) 该接口获取某个函数的详细信息，包括名称、代码、处理方法、关联触发器和超时时间等字段。
* @method Models\GetFunctionLogsResponse GetFunctionLogs(Models\GetFunctionLogsRequest $req) 该接口根据设置的日志查询条件返回函数日志。
* @method Models\InvokeResponse Invoke(Models\InvokeRequest $req) 该接口用于运行函数。
* @method Models\ListFunctionsResponse ListFunctions(Models\ListFunctionsRequest $req) 该接口根据传入的查询参数返回相关函数信息。
* @method Models\UpdateFunctionCodeResponse UpdateFunctionCode(Models\UpdateFunctionCodeRequest $req) 该接口根据传入参数更新函数代码。
* @method Models\UpdateFunctionConfigurationResponse UpdateFunctionConfiguration(Models\UpdateFunctionConfigurationRequest $req) 该接口根据传入参数更新函数配置。
 */

class ScfClient extends AbstractClient
{
    /**
     * @var string 产品默认域名
     */
    protected $endpoint = "scf.tencentcloudapi.com";

    /**
     * @var string api版本号
     */
    protected $version = "2018-04-16";

    /**
     * CvmClient constructor.
     * @param Credential $credential 认证类实例
     * @param string $region 地域
     * @param ClientProfile $profile client配置
     */
    function __construct($credential, $region, $profile=null)
    {
        parent::__construct($this->endpoint, $this->version, $credential, $region, $profile);
    }

    public function returnResponse($action, $response)
    {
        $respClass = "TencentCloud"."\\".ucfirst("scf")."\\"."V20180416\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
