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

namespace TencentCloud\Tse\V20201207;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Tse\V20201207\Models as Models;

/**
 * @method Models\CreateEngineResponse CreateEngine(Models\CreateEngineRequest $req) 创建引擎实例
 * @method Models\DeleteEngineResponse DeleteEngine(Models\DeleteEngineRequest $req) 删除引擎实例
 * @method Models\DescribeCloudNativeAPIGatewayNodesResponse DescribeCloudNativeAPIGatewayNodes(Models\DescribeCloudNativeAPIGatewayNodesRequest $req) 获取云原生网关节点列表
 * @method Models\DescribeNacosReplicasResponse DescribeNacosReplicas(Models\DescribeNacosReplicasRequest $req) 查询Nacos类型引擎实例副本信息
 * @method Models\DescribeNacosServerInterfacesResponse DescribeNacosServerInterfaces(Models\DescribeNacosServerInterfacesRequest $req) 查询nacos服务接口列表
 * @method Models\DescribeSREInstanceAccessAddressResponse DescribeSREInstanceAccessAddress(Models\DescribeSREInstanceAccessAddressRequest $req) 查询引擎实例访问地址
 * @method Models\DescribeSREInstancesResponse DescribeSREInstances(Models\DescribeSREInstancesRequest $req) 用于查询引擎实例列表
 * @method Models\DescribeZookeeperReplicasResponse DescribeZookeeperReplicas(Models\DescribeZookeeperReplicasRequest $req) 查询Zookeeper类型注册引擎实例副本信息
 * @method Models\DescribeZookeeperServerInterfacesResponse DescribeZookeeperServerInterfaces(Models\DescribeZookeeperServerInterfacesRequest $req) 查询zookeeper服务接口列表
 */

class TseClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "tse.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "tse";

    /**
     * @var string
     */
    protected $version = "2020-12-07";

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
        $respClass = "TencentCloud"."\\".ucfirst("tse")."\\"."V20201207\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
