<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace TencentCloud\Eis\V20210601;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Eis\V20210601\Models as Models;

/**
 * @method Models\GetRuntimeMCResponse GetRuntimeMC(Models\GetRuntimeMCRequest $req) 获取运行时详情
 * @method Models\GetRuntimeResourceMonitorMetricMCResponse GetRuntimeResourceMonitorMetricMC(Models\GetRuntimeResourceMonitorMetricMCRequest $req) 获取运行时资源监控详情，cpu，memory，bandwidth
 * @method Models\ListDeployableRuntimesMCResponse ListDeployableRuntimesMC(Models\ListDeployableRuntimesMCRequest $req) 返回用户可用的运行时列表，发布应用时返回的运行时环境，仅shared和private运行时，无sandbox运行时，并且只有running/scaling状态的
 * @method Models\ListRuntimeDeployedInstancesMCResponse ListRuntimeDeployedInstancesMC(Models\ListRuntimeDeployedInstancesMCRequest $req) 获取运行时部署的应用实例列表
 * @method Models\ListRuntimesMCResponse ListRuntimesMC(Models\ListRuntimesMCRequest $req) 返回用户的运行时列表，运行时管理主页使用，包含沙箱、共享运行时及独立运行时环境，不包含已经删除的运行时
 */

class EisClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "eis.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "eis";

    /**
     * @var string
     */
    protected $version = "2021-06-01";

    /**
     * @param Credential $credential
     * @param string $region
     * @param ClientProfile|null $profile
     * @throws TencentCloudSDKException
     */
    function __construct($credential, $region, $profile=null)
    {
        parent::__construct($this->endpoint, $this->version, $credential, $region, $profile);
    }

    public function returnResponse($action, $response)
    {
        $respClass = "TencentCloud"."\\".ucfirst("eis")."\\"."V20210601\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
