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
namespace TencentCloud\As\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ScaleOutInstances请求参数结构体
 *
 * @method string getAutoScalingGroupId() 获取伸缩组ID。可以通过如下方式获取可用的伸缩组ID:
<li>通过登录 [控制台](https://console.cloud.tencent.com/autoscaling/group) 查询伸缩组ID。</li>
<li>通过调用接口 [DescribeAutoScalingGroups](https://cloud.tencent.com/document/api/377/20438) ，取返回信息中的 AutoScalingGroupId 获取伸缩组ID。</li>
 * @method void setAutoScalingGroupId(string $AutoScalingGroupId) 设置伸缩组ID。可以通过如下方式获取可用的伸缩组ID:
<li>通过登录 [控制台](https://console.cloud.tencent.com/autoscaling/group) 查询伸缩组ID。</li>
<li>通过调用接口 [DescribeAutoScalingGroups](https://cloud.tencent.com/document/api/377/20438) ，取返回信息中的 AutoScalingGroupId 获取伸缩组ID。</li>
 * @method integer getScaleOutNumber() 获取希望扩容的实例数量。该参数的静态取值范围是 [1,2000]，同时该参数不得大于期望数与最大值的差值。例如伸缩组期望数为 20，最大值为 100，此时可取值范围为 [1,80]。
 * @method void setScaleOutNumber(integer $ScaleOutNumber) 设置希望扩容的实例数量。该参数的静态取值范围是 [1,2000]，同时该参数不得大于期望数与最大值的差值。例如伸缩组期望数为 20，最大值为 100，此时可取值范围为 [1,80]。
 */
class ScaleOutInstancesRequest extends AbstractModel
{
    /**
     * @var string 伸缩组ID。可以通过如下方式获取可用的伸缩组ID:
<li>通过登录 [控制台](https://console.cloud.tencent.com/autoscaling/group) 查询伸缩组ID。</li>
<li>通过调用接口 [DescribeAutoScalingGroups](https://cloud.tencent.com/document/api/377/20438) ，取返回信息中的 AutoScalingGroupId 获取伸缩组ID。</li>
     */
    public $AutoScalingGroupId;

    /**
     * @var integer 希望扩容的实例数量。该参数的静态取值范围是 [1,2000]，同时该参数不得大于期望数与最大值的差值。例如伸缩组期望数为 20，最大值为 100，此时可取值范围为 [1,80]。
     */
    public $ScaleOutNumber;

    /**
     * @param string $AutoScalingGroupId 伸缩组ID。可以通过如下方式获取可用的伸缩组ID:
<li>通过登录 [控制台](https://console.cloud.tencent.com/autoscaling/group) 查询伸缩组ID。</li>
<li>通过调用接口 [DescribeAutoScalingGroups](https://cloud.tencent.com/document/api/377/20438) ，取返回信息中的 AutoScalingGroupId 获取伸缩组ID。</li>
     * @param integer $ScaleOutNumber 希望扩容的实例数量。该参数的静态取值范围是 [1,2000]，同时该参数不得大于期望数与最大值的差值。例如伸缩组期望数为 20，最大值为 100，此时可取值范围为 [1,80]。
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
        if (array_key_exists("AutoScalingGroupId",$param) and $param["AutoScalingGroupId"] !== null) {
            $this->AutoScalingGroupId = $param["AutoScalingGroupId"];
        }

        if (array_key_exists("ScaleOutNumber",$param) and $param["ScaleOutNumber"] !== null) {
            $this->ScaleOutNumber = $param["ScaleOutNumber"];
        }
    }
}
