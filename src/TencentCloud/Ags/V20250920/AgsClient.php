<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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

namespace TencentCloud\Ags\V20250920;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Ags\V20250920\Models as Models;

/**
 * @method Models\AcquireSandboxInstanceTokenResponse AcquireSandboxInstanceToken(Models\AcquireSandboxInstanceTokenRequest $req) 获取访问沙箱工具时所需要使用的访问Token，创建沙箱实例后需调用此接口获取沙箱实例访问Token。
此Token可用于调用代码沙箱实例执行代码，或浏览器沙箱实例进行浏览器操作等。
 * @method Models\CreateAPIKeyResponse CreateAPIKey(Models\CreateAPIKeyRequest $req) 创建新的API密钥，用于调用Agent Sandbox接口。相较于腾讯云Secret ID Secret Key支持调用所有接口使用，仅有部分接口支持使用API密钥调用。
 * @method Models\CreatePreCacheImageTaskResponse CreatePreCacheImageTask(Models\CreatePreCacheImageTaskRequest $req) 创建镜像预热任务
 * @method Models\CreateSandboxToolResponse CreateSandboxTool(Models\CreateSandboxToolRequest $req) 创建沙箱工具
 * @method Models\DeleteAPIKeyResponse DeleteAPIKey(Models\DeleteAPIKeyRequest $req) 删除API密钥。注意区别于腾讯云Secret ID Secret Key，本接口删除的是Agent Sandbox专用API key。
 * @method Models\DeleteSandboxToolResponse DeleteSandboxTool(Models\DeleteSandboxToolRequest $req) 删除沙箱工具
 * @method Models\DescribeAPIKeyListResponse DescribeAPIKeyList(Models\DescribeAPIKeyListRequest $req) 获取API密钥列表，包含API密钥简略信息，包含名称、创建时间等。
 * @method Models\DescribePreCacheImageTaskResponse DescribePreCacheImageTask(Models\DescribePreCacheImageTaskRequest $req) 查询镜像预热任务信息
 * @method Models\DescribeSandboxInstanceListResponse DescribeSandboxInstanceList(Models\DescribeSandboxInstanceListRequest $req) 查询沙箱实例列表
 * @method Models\DescribeSandboxToolListResponse DescribeSandboxToolList(Models\DescribeSandboxToolListRequest $req) 查询沙箱工具列表
 * @method Models\StartSandboxInstanceResponse StartSandboxInstance(Models\StartSandboxInstanceRequest $req) 启动沙箱实例
 * @method Models\StopSandboxInstanceResponse StopSandboxInstance(Models\StopSandboxInstanceRequest $req) 停止沙箱实例
 * @method Models\UpdateSandboxInstanceResponse UpdateSandboxInstance(Models\UpdateSandboxInstanceRequest $req) 更新沙箱实例
 * @method Models\UpdateSandboxToolResponse UpdateSandboxTool(Models\UpdateSandboxToolRequest $req) 更新沙箱工具
 */

class AgsClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "ags.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "ags";

    /**
     * @var string
     */
    protected $version = "2025-09-20";

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
        $respClass = "TencentCloud"."\\".ucfirst("ags")."\\"."V20250920\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
