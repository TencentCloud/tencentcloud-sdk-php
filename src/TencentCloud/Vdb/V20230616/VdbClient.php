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

namespace TencentCloud\Vdb\V20230616;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Vdb\V20230616\Models as Models;

/**
 * @method Models\AssociateSecurityGroupsResponse AssociateSecurityGroups(Models\AssociateSecurityGroupsRequest $req) 本接口 (AssociateSecurityGroups) 用于安全组批量绑定多个指定实例。
 * @method Models\CreateInstanceResponse CreateInstance(Models\CreateInstanceRequest $req) 本接口（CreateInstance）用于创建向量数据库实例。
 * @method Models\DescribeDBSecurityGroupsResponse DescribeDBSecurityGroups(Models\DescribeDBSecurityGroupsRequest $req) 本接口(DescribeDBSecurityGroups)用于查询实例的安全组详情。
 * @method Models\DescribeInstanceMaintenanceWindowResponse DescribeInstanceMaintenanceWindow(Models\DescribeInstanceMaintenanceWindowRequest $req) 本接口（DescribeInstanceMaintenanceWindow）用于查看实例维护时间窗。
 * @method Models\DescribeInstanceNodesResponse DescribeInstanceNodes(Models\DescribeInstanceNodesRequest $req) 查询实例pod列表
 * @method Models\DescribeInstancesResponse DescribeInstances(Models\DescribeInstancesRequest $req) 查询实例列表
 * @method Models\DescribePriceCreateInstanceResponse DescribePriceCreateInstance(Models\DescribePriceCreateInstanceRequest $req) 查询新购实例价格
 * @method Models\DescribePriceRenewInstanceResponse DescribePriceRenewInstance(Models\DescribePriceRenewInstanceRequest $req) 查询实例续费价格（包年包月）
 * @method Models\DescribePriceResizeInstanceResponse DescribePriceResizeInstance(Models\DescribePriceResizeInstanceRequest $req) 查询实例变配价格
 * @method Models\DestroyInstancesResponse DestroyInstances(Models\DestroyInstancesRequest $req) 本接口（DestroyInstances）用于销毁实例。
 * @method Models\DisassociateSecurityGroupsResponse DisassociateSecurityGroups(Models\DisassociateSecurityGroupsRequest $req) 本接口(DisassociateSecurityGroups)用于安全组批量解绑实例。
 * @method Models\IsolateInstanceResponse IsolateInstance(Models\IsolateInstanceRequest $req) 本接口（IsolateInstance）用于隔离实例于回收站，在回收站保护时长内可恢复实例。
 * @method Models\ModifyDBInstanceSecurityGroupsResponse ModifyDBInstanceSecurityGroups(Models\ModifyDBInstanceSecurityGroupsRequest $req) 本接口(ModifyDBInstanceSecurityGroups)用于修改实例绑定的安全组。
 * @method Models\ModifyInstanceMaintenanceWindowResponse ModifyInstanceMaintenanceWindow(Models\ModifyInstanceMaintenanceWindowRequest $req) 本接口（ModifyInstanceMaintenanceWindow）用于修改实例维护时间窗范围。
 * @method Models\RecoverInstanceResponse RecoverInstance(Models\RecoverInstanceRequest $req) 本接口（RecoverInstance）用于恢复在回收站隔离的实例。
 * @method Models\ScaleOutInstanceResponse ScaleOutInstance(Models\ScaleOutInstanceRequest $req) 本接口（ScaleOutInstance）用于水平扩容节点数量。
 * @method Models\ScaleUpInstanceResponse ScaleUpInstance(Models\ScaleUpInstanceRequest $req) 本接口（ScaleUpInstance）用于升级节点配置规格。
 */

class VdbClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "vdb.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "vdb";

    /**
     * @var string
     */
    protected $version = "2023-06-16";

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
        $respClass = "TencentCloud"."\\".ucfirst("vdb")."\\"."V20230616\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
