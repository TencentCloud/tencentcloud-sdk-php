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
namespace TencentCloud\Autoscaling\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteScalingPolicy请求参数结构体
 *
 * @method string getAutoScalingPolicyId() 获取待删除的告警策略ID。可通过登录 [控制台](https://console.cloud.tencent.com/autoscaling/group) 或调用接口 [DescribeScalingPolicies](https://cloud.tencent.com/document/api/377/33178) ，取返回信息中的 AutoScalingPolicyId 获取告警策略ID。
 * @method void setAutoScalingPolicyId(string $AutoScalingPolicyId) 设置待删除的告警策略ID。可通过登录 [控制台](https://console.cloud.tencent.com/autoscaling/group) 或调用接口 [DescribeScalingPolicies](https://cloud.tencent.com/document/api/377/33178) ，取返回信息中的 AutoScalingPolicyId 获取告警策略ID。
 */
class DeleteScalingPolicyRequest extends AbstractModel
{
    /**
     * @var string 待删除的告警策略ID。可通过登录 [控制台](https://console.cloud.tencent.com/autoscaling/group) 或调用接口 [DescribeScalingPolicies](https://cloud.tencent.com/document/api/377/33178) ，取返回信息中的 AutoScalingPolicyId 获取告警策略ID。
     */
    public $AutoScalingPolicyId;

    /**
     * @param string $AutoScalingPolicyId 待删除的告警策略ID。可通过登录 [控制台](https://console.cloud.tencent.com/autoscaling/group) 或调用接口 [DescribeScalingPolicies](https://cloud.tencent.com/document/api/377/33178) ，取返回信息中的 AutoScalingPolicyId 获取告警策略ID。
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("AutoScalingPolicyId",$param) and $param["AutoScalingPolicyId"] !== null) {
            $this->AutoScalingPolicyId = $param["AutoScalingPolicyId"];
        }
    }
}
