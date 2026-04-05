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

namespace TencentCloud\Ga2\V20250115;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Ga2\V20250115\Models as Models;

/**
 * @method Models\CreateAccelerateAreasResponse CreateAccelerateAreas(Models\CreateAccelerateAreasRequest $req) 创建加速地域
 * @method Models\CreateEndpointGroupResponse CreateEndpointGroup(Models\CreateEndpointGroupRequest $req) 创建终端节点组。
 * @method Models\CreateForwardingRuleResponse CreateForwardingRule(Models\CreateForwardingRuleRequest $req) 创建七层转发规则
 * @method Models\CreateGlobalAcceleratorResponse CreateGlobalAccelerator(Models\CreateGlobalAcceleratorRequest $req) 创建全球加速实例
 * @method Models\CreateListenerResponse CreateListener(Models\CreateListenerRequest $req) 创建监听器
 * @method Models\DeleteAccelerateAreasResponse DeleteAccelerateAreas(Models\DeleteAccelerateAreasRequest $req) 删除加速地域
 * @method Models\DeleteEndpointGroupsResponse DeleteEndpointGroups(Models\DeleteEndpointGroupsRequest $req) 删除终端节点组。
 * @method Models\DeleteForwardingRuleResponse DeleteForwardingRule(Models\DeleteForwardingRuleRequest $req) 删除七层转发规则
 * @method Models\DeleteGlobalAcceleratorResponse DeleteGlobalAccelerator(Models\DeleteGlobalAcceleratorRequest $req) 删除全球加速实例
 * @method Models\DeleteListenerResponse DeleteListener(Models\DeleteListenerRequest $req) 删除监听器
 * @method Models\DescribeAccelerateAreasResponse DescribeAccelerateAreas(Models\DescribeAccelerateAreasRequest $req) 查询加速地域
 * @method Models\DescribeAccelerateRegionsResponse DescribeAccelerateRegions(Models\DescribeAccelerateRegionsRequest $req) 查询可选加速区域
 * @method Models\DescribeCrossBorderSettlementResponse DescribeCrossBorderSettlement(Models\DescribeCrossBorderSettlementRequest $req) 查询跨境账单
 * @method Models\DescribeEndpointGroupsResponse DescribeEndpointGroups(Models\DescribeEndpointGroupsRequest $req) 查询终端节点组。
 * @method Models\DescribeForwardingRuleResponse DescribeForwardingRule(Models\DescribeForwardingRuleRequest $req) 查看七层转发规则
 * @method Models\DescribeGlobalAcceleratorsResponse DescribeGlobalAccelerators(Models\DescribeGlobalAcceleratorsRequest $req) 修改全球加速实例
 * @method Models\DescribeListenersResponse DescribeListeners(Models\DescribeListenersRequest $req) 查询监听器
 * @method Models\ModifyAccelerateAreasResponse ModifyAccelerateAreas(Models\ModifyAccelerateAreasRequest $req) 修改加速地域
 * @method Models\ModifyEndpointGroupResponse ModifyEndpointGroup(Models\ModifyEndpointGroupRequest $req) 修改终端节点组。
 * @method Models\ModifyForwardingRuleResponse ModifyForwardingRule(Models\ModifyForwardingRuleRequest $req) 修改七层转发规则
 * @method Models\ModifyGlobalAcceleratorResponse ModifyGlobalAccelerator(Models\ModifyGlobalAcceleratorRequest $req) 修改全球加速实例
 * @method Models\ModifyListenerResponse ModifyListener(Models\ModifyListenerRequest $req) 修改监听器
 */

class Ga2Client extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "ga2.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "ga2";

    /**
     * @var string
     */
    protected $version = "2025-01-15";

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
        $respClass = "TencentCloud"."\\".ucfirst("ga2")."\\"."V20250115\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
