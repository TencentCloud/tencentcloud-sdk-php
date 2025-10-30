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
 * DescribeAutoScalingGroupLastActivities请求参数结构体
 *
 * @method array getAutoScalingGroupIds() 获取伸缩组ID列表。可通过登录 [控制台](https://console.cloud.tencent.com/autoscaling/group) 或调用接口 [DescribeAutoScalingGroups](https://cloud.tencent.com/document/api/377/20438) ，取返回信息中的 AutoScalingGroupId 获取伸缩组ID。
 * @method void setAutoScalingGroupIds(array $AutoScalingGroupIds) 设置伸缩组ID列表。可通过登录 [控制台](https://console.cloud.tencent.com/autoscaling/group) 或调用接口 [DescribeAutoScalingGroups](https://cloud.tencent.com/document/api/377/20438) ，取返回信息中的 AutoScalingGroupId 获取伸缩组ID。
 * @method boolean getExcludeCancelledActivity() 获取查询时排除取消类型活动。默认值为 false，表示不排除取消类型活动。
 * @method void setExcludeCancelledActivity(boolean $ExcludeCancelledActivity) 设置查询时排除取消类型活动。默认值为 false，表示不排除取消类型活动。
 */
class DescribeAutoScalingGroupLastActivitiesRequest extends AbstractModel
{
    /**
     * @var array 伸缩组ID列表。可通过登录 [控制台](https://console.cloud.tencent.com/autoscaling/group) 或调用接口 [DescribeAutoScalingGroups](https://cloud.tencent.com/document/api/377/20438) ，取返回信息中的 AutoScalingGroupId 获取伸缩组ID。
     */
    public $AutoScalingGroupIds;

    /**
     * @var boolean 查询时排除取消类型活动。默认值为 false，表示不排除取消类型活动。
     */
    public $ExcludeCancelledActivity;

    /**
     * @param array $AutoScalingGroupIds 伸缩组ID列表。可通过登录 [控制台](https://console.cloud.tencent.com/autoscaling/group) 或调用接口 [DescribeAutoScalingGroups](https://cloud.tencent.com/document/api/377/20438) ，取返回信息中的 AutoScalingGroupId 获取伸缩组ID。
     * @param boolean $ExcludeCancelledActivity 查询时排除取消类型活动。默认值为 false，表示不排除取消类型活动。
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
        if (array_key_exists("AutoScalingGroupIds",$param) and $param["AutoScalingGroupIds"] !== null) {
            $this->AutoScalingGroupIds = $param["AutoScalingGroupIds"];
        }

        if (array_key_exists("ExcludeCancelledActivity",$param) and $param["ExcludeCancelledActivity"] !== null) {
            $this->ExcludeCancelledActivity = $param["ExcludeCancelledActivity"];
        }
    }
}
