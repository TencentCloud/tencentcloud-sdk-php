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

namespace TencentCloud\Tiems\V20190416;
use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Tiems\V20190416\Models as Models;

/**
* @method Models\CreateServiceResponse CreateService(Models\CreateServiceRequest $req) 创建服务
* @method Models\CreateServiceConfigResponse CreateServiceConfig(Models\CreateServiceConfigRequest $req) 创建服务配置
* @method Models\DeleteServiceResponse DeleteService(Models\DeleteServiceRequest $req) 删除服务
* @method Models\DeleteServiceConfigResponse DeleteServiceConfig(Models\DeleteServiceConfigRequest $req) 删除服务配置
* @method Models\DescribeRuntimesResponse DescribeRuntimes(Models\DescribeRuntimesRequest $req) 描述服务运行环境
* @method Models\DescribeServiceConfigsResponse DescribeServiceConfigs(Models\DescribeServiceConfigsRequest $req) 描述服务配置
* @method Models\DescribeServicesResponse DescribeServices(Models\DescribeServicesRequest $req) 描述服务
* @method Models\UpdateServiceResponse UpdateService(Models\UpdateServiceRequest $req) 更新服务
 */

class TiemsClient extends AbstractClient
{
    /**
     * @var string 产品默认域名
     */
    protected $endpoint = "tiems.tencentcloudapi.com";

    /**
     * @var string api版本号
     */
    protected $version = "2019-04-16";

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
        $respClass = "TencentCloud"."\\".ucfirst("tiems")."\\"."V20190416\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
