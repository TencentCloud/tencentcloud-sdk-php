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

namespace TencentCloud\Tke\V20220501;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Tke\V20220501\Models as Models;

/**
 * @method Models\CreateHealthCheckPolicyResponse CreateHealthCheckPolicy(Models\CreateHealthCheckPolicyRequest $req) 创建健康检测策略
 * @method Models\CreateNodePoolResponse CreateNodePool(Models\CreateNodePoolRequest $req) 创建 TKE 节点池
 * @method Models\DeleteClusterMachinesResponse DeleteClusterMachines(Models\DeleteClusterMachinesRequest $req) 删除原生节点池节点
 * @method Models\DeleteHealthCheckPolicyResponse DeleteHealthCheckPolicy(Models\DeleteHealthCheckPolicyRequest $req) 删除健康检测策略
 * @method Models\DeleteNodePoolResponse DeleteNodePool(Models\DeleteNodePoolRequest $req) 删除 TKE 节点池
 * @method Models\DescribeClusterInstancesResponse DescribeClusterInstances(Models\DescribeClusterInstancesRequest $req) 查询集群下节点实例信息
 * @method Models\DescribeClusterMachinesResponse DescribeClusterMachines(Models\DescribeClusterMachinesRequest $req) 查询托原生点列表
 * @method Models\DescribeClustersResponse DescribeClusters(Models\DescribeClustersRequest $req) 查询集群列表
 * @method Models\DescribeHealthCheckPoliciesResponse DescribeHealthCheckPolicies(Models\DescribeHealthCheckPoliciesRequest $req) 查询健康检测策略
 * @method Models\DescribeHealthCheckPolicyBindingsResponse DescribeHealthCheckPolicyBindings(Models\DescribeHealthCheckPolicyBindingsRequest $req) 查询健康检测策略绑定关系
 * @method Models\DescribeHealthCheckTemplateResponse DescribeHealthCheckTemplate(Models\DescribeHealthCheckTemplateRequest $req) 查询健康检测策略模板
 * @method Models\DescribeNodePoolsResponse DescribeNodePools(Models\DescribeNodePoolsRequest $req) 查询 TKE 节点池列表
 * @method Models\ModifyClusterMachineResponse ModifyClusterMachine(Models\ModifyClusterMachineRequest $req) 修改原生节点
 * @method Models\ModifyHealthCheckPolicyResponse ModifyHealthCheckPolicy(Models\ModifyHealthCheckPolicyRequest $req) 修改健康检测策略
 * @method Models\ModifyNodePoolResponse ModifyNodePool(Models\ModifyNodePoolRequest $req) 更新 TKE 节点池
 * @method Models\RebootMachinesResponse RebootMachines(Models\RebootMachinesRequest $req) 重启原生节点实例
 * @method Models\SetMachineLoginResponse SetMachineLogin(Models\SetMachineLoginRequest $req) 设置是否开启节点登录
 * @method Models\StartMachinesResponse StartMachines(Models\StartMachinesRequest $req) 本接口 (StartMachines) 用于启动一个或多个原生节点实例。

只有状态为 Stopped 的实例才可以进行此操作。
接口调用成功后，等待一分钟左右，实例会进入 Running 状态。
支持批量操作。每次请求批量实例的上限为100。
本接口为同步接口，启动实例请求发送成功后会返回一个RequestId，此时操作并未立即完成。实例操作结果可以通过调用 DescribeClusterInstances 接口查询，如果实例的状态为 Running，则代表启动实例操作成功。
 * @method Models\StopMachinesResponse StopMachines(Models\StopMachinesRequest $req) 本接口 (StopMachines) 用于关闭一个或多个原生节点实例。

只有状态为 Running 的实例才可以进行此操作。
接口调用成功时，实例会进入 Stopping 状态；关闭实例成功时，实例会进入 Stopped 状态。
支持强制关闭。强制关机的效果等同于关闭物理计算机的电源开关。强制关机可能会导致数据丢失或文件系统损坏，请仅在服务器不能正常关机时使用。
支持批量操作。每次请求批量实例的上限为 100。
本接口为同步接口，关闭实例请求发送成功后会返回一个RequestId，此时操作并未立即完成。实例操作结果可以通过调用 DescribeClusterInstances 接口查询，如果实例的状态为stopped_with_charging，则代表关闭实例操作成功。
 */

class TkeClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "tke.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "tke";

    /**
     * @var string
     */
    protected $version = "2022-05-01";

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
        $respClass = "TencentCloud"."\\".ucfirst("tke")."\\"."V20220501\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
