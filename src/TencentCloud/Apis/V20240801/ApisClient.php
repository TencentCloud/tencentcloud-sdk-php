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

namespace TencentCloud\Apis\V20240801;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Apis\V20240801\Models as Models;

/**
 * @method Models\CreateAgentAppResponse CreateAgentApp(Models\CreateAgentAppRequest $req) 创建app
 * @method Models\CreateAgentAppMcpServersResponse CreateAgentAppMcpServers(Models\CreateAgentAppMcpServersRequest $req) 创建app的mcp server关联
 * @method Models\CreateAgentAppModelServicesResponse CreateAgentAppModelServices(Models\CreateAgentAppModelServicesRequest $req) 创建app的model service关联
 * @method Models\CreateAgentCredentialResponse CreateAgentCredential(Models\CreateAgentCredentialRequest $req) 创建Credential
 * @method Models\CreateMcpServerResponse CreateMcpServer(Models\CreateMcpServerRequest $req) 创建mcp server
 * @method Models\CreateModelResponse CreateModel(Models\CreateModelRequest $req) 创建模型
 * @method Models\CreateModelServiceResponse CreateModelService(Models\CreateModelServiceRequest $req) 创建模型服务
 * @method Models\DeleteAgentAppResponse DeleteAgentApp(Models\DeleteAgentAppRequest $req) 删除app
 * @method Models\DeleteAgentAppMcpServersResponse DeleteAgentAppMcpServers(Models\DeleteAgentAppMcpServersRequest $req) 删除app的mcp server
 * @method Models\DeleteAgentAppModelServicesResponse DeleteAgentAppModelServices(Models\DeleteAgentAppModelServicesRequest $req) 删除app的model service关联
 * @method Models\DeleteAgentCredentialResponse DeleteAgentCredential(Models\DeleteAgentCredentialRequest $req) 删除Credential
 * @method Models\DeleteMcpServerResponse DeleteMcpServer(Models\DeleteMcpServerRequest $req) 删除mcp server
 * @method Models\DeleteModelResponse DeleteModel(Models\DeleteModelRequest $req) 删除模型
 * @method Models\DeleteModelServiceResponse DeleteModelService(Models\DeleteModelServiceRequest $req) 删除模型服务
 * @method Models\DescribeAgentAppResponse DescribeAgentApp(Models\DescribeAgentAppRequest $req) 查询app详情
 * @method Models\DescribeAgentAppMcpServersResponse DescribeAgentAppMcpServers(Models\DescribeAgentAppMcpServersRequest $req) 查询app mcpServer关联列表
 * @method Models\DescribeAgentAppModelServicesResponse DescribeAgentAppModelServices(Models\DescribeAgentAppModelServicesRequest $req) 查询app modelService关联列表
 * @method Models\DescribeAgentAppsResponse DescribeAgentApps(Models\DescribeAgentAppsRequest $req) 查询app列表
 * @method Models\DescribeAgentCredentialResponse DescribeAgentCredential(Models\DescribeAgentCredentialRequest $req) 查询Credential详情
 * @method Models\DescribeAgentCredentialsResponse DescribeAgentCredentials(Models\DescribeAgentCredentialsRequest $req) 查询Credential列表
 * @method Models\DescribeMcpServerResponse DescribeMcpServer(Models\DescribeMcpServerRequest $req) 查询mcp server详情
 * @method Models\DescribeMcpServersResponse DescribeMcpServers(Models\DescribeMcpServersRequest $req) 查询mcp server列表
 * @method Models\DescribeModelResponse DescribeModel(Models\DescribeModelRequest $req) 查询模型详情
 * @method Models\DescribeModelServiceResponse DescribeModelService(Models\DescribeModelServiceRequest $req) 查询模型服务详情
 * @method Models\DescribeModelServicesResponse DescribeModelServices(Models\DescribeModelServicesRequest $req) 查询模型服务列表
 * @method Models\DescribeModelsResponse DescribeModels(Models\DescribeModelsRequest $req) 查询模型列表
 * @method Models\ModifyAgentAppResponse ModifyAgentApp(Models\ModifyAgentAppRequest $req) 修改app
 * @method Models\ModifyAgentAppModelServicesResponse ModifyAgentAppModelServices(Models\ModifyAgentAppModelServicesRequest $req) 编辑app的model service关联
 * @method Models\ModifyAgentCredentialResponse ModifyAgentCredential(Models\ModifyAgentCredentialRequest $req) 修改Credential
 * @method Models\ModifyMcpServerResponse ModifyMcpServer(Models\ModifyMcpServerRequest $req) 修改mcp server
 * @method Models\ModifyModelResponse ModifyModel(Models\ModifyModelRequest $req) 修改模型
 * @method Models\ModifyModelServiceResponse ModifyModelService(Models\ModifyModelServiceRequest $req) 修改模型服务
 */

class ApisClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "apis.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "apis";

    /**
     * @var string
     */
    protected $version = "2024-08-01";

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
        $respClass = "TencentCloud"."\\".ucfirst("apis")."\\"."V20240801\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
