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
 * @method Models\CreateNodePoolResponse CreateNodePool(Models\CreateNodePoolRequest $req) **通过 CAM 策略强制节点池安全配置**

创建原生节点池（`CreateNodePool`）接口已接入 CAM 条件鉴权，会根据请求参数计算出一组**条件键（Condition Key）**并传入 CAM 鉴权。您可以在 CAM/SCP 策略中基于这些条件键配置 `deny` 规则，从而强制约束节点池的安全配置（如必须开启磁盘加密、安全加固等）。

**支持的条件键**

| 条件键 | 含义 | 取值 | 取值判定说明 |
|--------|------|------|-------------|
| `tke:NodePoolType` | 节点池类型 | `Native` / `External` | 取请求的节点池类型，未指定时默认为 `Native` |
| `tke:SystemDiskEncrypted` | 系统盘是否加密 | `true` / `false` | 系统盘加密属性为 `ENCRYPT`（大小写不敏感）时为 `true`，否则为 `false` |
| `tke:AllDataDisksEncrypted` | 所有数据盘是否都已加密 | `true` / `false` | 全部数据盘加密属性均为 `ENCRYPT` 时为 `true`；未配置数据盘时也为 `true`；只要有任一数据盘未加密即为 `false` |
| `tke:SecurityAgentEnabled` | 是否开启安全加固（Security Agent） | `true` / `false` | 开启安全加固时为 `true`，否则为 `false` |

> 说明：所有条件键的取值均为字符串 `"true"` / `"false"`，请在策略中使用字符串形式匹配。

**使用方式**

在 CAM 策略中使用 `bool_equal` 匹配条件键值为 `"false"`，配合 `effect: deny`，即可实现"未满足安全配置则拒绝创建节点池"的强制约束。

**示例一：强制开启安全加固**

创建节点池时若未开启安全加固（`tke:SecurityAgentEnabled = "false"`），则拒绝。

```json
{
    "version": "2.0",
    "statement": [
        {
            "effect": "deny",
            "action": ["tke:CreateNodePool"],
            "resource": ["*"],
            "condition": {
                "bool_equal": {
                    "tke:SecurityAgentEnabled": "false"
                }
            }
        }
    ]
}
```

**示例二：强制数据盘加密**

创建节点池时若存在未加密的数据盘（`tke:AllDataDisksEncrypted = "false"`），则拒绝。

```json
{
    "version": "2.0",
    "statement": [
        {
            "effect": "deny",
            "action": ["tke:CreateNodePool"],
            "resource": ["*"],
            "condition": {
                "bool_equal": {
                    "tke:AllDataDisksEncrypted": "false"
                }
            }
        }
    ]
}
```

**示例三：强制系统盘加密**

创建节点池时若系统盘未加密（`tke:SystemDiskEncrypted = "false"`），则拒绝。

```json
{
    "version": "2.0",
    "statement": [
        {
            "effect": "deny",
            "action": ["tke:CreateNodePool"],
            "resource": ["*"],
            "condition": {
                "bool_equal": {
                    "tke:SystemDiskEncrypted": "false"
                }
            }
        }
    ]
}
```

**注意事项**

- 上述条件键在**未配置任何 CAM 策略**时不会影响节点池创建，仅在您显式配置了对应 `deny` 策略时才生效。
- 如需同时强制多项安全配置，必须在同一策略的 `statement` 中配置多条 `deny` 规则，不能将多个条件键写入同一条 `condition`。
- `tke:AllDataDisksEncrypted` 在**无数据盘**场景下取值为 `true`（不存在未加密的数据盘），因此仅约束"已配置的数据盘必须加密"，不会强制要求必须挂载数据盘。
 * @method Models\DeleteClusterMachinesResponse DeleteClusterMachines(Models\DeleteClusterMachinesRequest $req) 删除原生节点池节点
 * @method Models\DeleteHealthCheckPolicyResponse DeleteHealthCheckPolicy(Models\DeleteHealthCheckPolicyRequest $req) 删除健康检测策略
 * @method Models\DeleteNodePoolResponse DeleteNodePool(Models\DeleteNodePoolRequest $req) 删除 TKE 节点池
 * @method Models\DescribeClusterInstancesResponse DescribeClusterInstances(Models\DescribeClusterInstancesRequest $req) 查询集群下节点实例信息
 * @method Models\DescribeClusterMachinesResponse DescribeClusterMachines(Models\DescribeClusterMachinesRequest $req) 查询托原生点列表
 * @method Models\DescribeClustersResponse DescribeClusters(Models\DescribeClustersRequest $req) 查询集群列表
 * @method Models\DescribeGPUInfoResponse DescribeGPUInfo(Models\DescribeGPUInfoRequest $req) 请求该接口，会返回所有适配该机型和操作系统组合的gpu驱动版本
 * @method Models\DescribeHealthCheckPoliciesResponse DescribeHealthCheckPolicies(Models\DescribeHealthCheckPoliciesRequest $req) 查询健康检测策略
 * @method Models\DescribeHealthCheckPolicyBindingsResponse DescribeHealthCheckPolicyBindings(Models\DescribeHealthCheckPolicyBindingsRequest $req) 查询健康检测策略绑定关系
 * @method Models\DescribeHealthCheckTemplateResponse DescribeHealthCheckTemplate(Models\DescribeHealthCheckTemplateRequest $req) 查询健康检测策略模板
 * @method Models\DescribeNodePoolsResponse DescribeNodePools(Models\DescribeNodePoolsRequest $req) 查询 TKE 节点池列表
 * @method Models\DescribeNodePoolsElasticityStrengthResponse DescribeNodePoolsElasticityStrength(Models\DescribeNodePoolsElasticityStrengthRequest $req) 查询节点池健康度相关信息
 * @method Models\DescribeZoneInstanceConfigInfosResponse DescribeZoneInstanceConfigInfos(Models\DescribeZoneInstanceConfigInfosRequest $req) 查询原生节点机型配置
 * @method Models\ModifyClusterMachineResponse ModifyClusterMachine(Models\ModifyClusterMachineRequest $req) 修改原生节点
 * @method Models\ModifyHealthCheckPolicyResponse ModifyHealthCheckPolicy(Models\ModifyHealthCheckPolicyRequest $req) 修改健康检测策略
 * @method Models\ModifyNodePoolResponse ModifyNodePool(Models\ModifyNodePoolRequest $req) 更新 TKE 节点池
 * @method Models\RebootMachinesResponse RebootMachines(Models\RebootMachinesRequest $req) 重启原生节点实例
 * @method Models\ScaleNodePoolResponse ScaleNodePool(Models\ScaleNodePoolRequest $req) 设置 TKE 节点池期望节点数
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
