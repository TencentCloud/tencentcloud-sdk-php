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
 * RollbackInstanceRefresh请求参数结构体
 *
 * @method string getAutoScalingGroupId() 获取伸缩组ID。可以通过以下方式获取可用的伸缩组ID： 
<li>通过登录 [控制台](https://console.cloud.tencent.com/autoscaling/group) 查询伸缩组ID。</li>
<li>通过调用接口 [DescribeAutoScalingGroups](https://cloud.tencent.com/document/api/377/20438) ，取返回信息中的 AutoScalingGroupId 获取伸缩组ID。</li>
 * @method void setAutoScalingGroupId(string $AutoScalingGroupId) 设置伸缩组ID。可以通过以下方式获取可用的伸缩组ID： 
<li>通过登录 [控制台](https://console.cloud.tencent.com/autoscaling/group) 查询伸缩组ID。</li>
<li>通过调用接口 [DescribeAutoScalingGroups](https://cloud.tencent.com/document/api/377/20438) ，取返回信息中的 AutoScalingGroupId 获取伸缩组ID。</li>
 * @method RefreshSettings getRefreshSettings() 获取刷新设置。
 * @method void setRefreshSettings(RefreshSettings $RefreshSettings) 设置刷新设置。
 * @method string getOriginRefreshActivityId() 获取原始刷新活动 ID。可以通过调用接口 [DescribeRefreshActivities](https://cloud.tencent.com/document/api/377/99175) ，取返回信息中的 OriginRefreshActivityId 获取原始刷新活动ID。
 * @method void setOriginRefreshActivityId(string $OriginRefreshActivityId) 设置原始刷新活动 ID。可以通过调用接口 [DescribeRefreshActivities](https://cloud.tencent.com/document/api/377/99175) ，取返回信息中的 OriginRefreshActivityId 获取原始刷新活动ID。
 * @method string getRefreshMode() 获取刷新模式，目前仅支持滚动更新，默认值为 ROLLING_UPDATE_RESET。
 * @method void setRefreshMode(string $RefreshMode) 设置刷新模式，目前仅支持滚动更新，默认值为 ROLLING_UPDATE_RESET。
 */
class RollbackInstanceRefreshRequest extends AbstractModel
{
    /**
     * @var string 伸缩组ID。可以通过以下方式获取可用的伸缩组ID： 
<li>通过登录 [控制台](https://console.cloud.tencent.com/autoscaling/group) 查询伸缩组ID。</li>
<li>通过调用接口 [DescribeAutoScalingGroups](https://cloud.tencent.com/document/api/377/20438) ，取返回信息中的 AutoScalingGroupId 获取伸缩组ID。</li>
     */
    public $AutoScalingGroupId;

    /**
     * @var RefreshSettings 刷新设置。
     */
    public $RefreshSettings;

    /**
     * @var string 原始刷新活动 ID。可以通过调用接口 [DescribeRefreshActivities](https://cloud.tencent.com/document/api/377/99175) ，取返回信息中的 OriginRefreshActivityId 获取原始刷新活动ID。
     */
    public $OriginRefreshActivityId;

    /**
     * @var string 刷新模式，目前仅支持滚动更新，默认值为 ROLLING_UPDATE_RESET。
     */
    public $RefreshMode;

    /**
     * @param string $AutoScalingGroupId 伸缩组ID。可以通过以下方式获取可用的伸缩组ID： 
<li>通过登录 [控制台](https://console.cloud.tencent.com/autoscaling/group) 查询伸缩组ID。</li>
<li>通过调用接口 [DescribeAutoScalingGroups](https://cloud.tencent.com/document/api/377/20438) ，取返回信息中的 AutoScalingGroupId 获取伸缩组ID。</li>
     * @param RefreshSettings $RefreshSettings 刷新设置。
     * @param string $OriginRefreshActivityId 原始刷新活动 ID。可以通过调用接口 [DescribeRefreshActivities](https://cloud.tencent.com/document/api/377/99175) ，取返回信息中的 OriginRefreshActivityId 获取原始刷新活动ID。
     * @param string $RefreshMode 刷新模式，目前仅支持滚动更新，默认值为 ROLLING_UPDATE_RESET。
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

        if (array_key_exists("RefreshSettings",$param) and $param["RefreshSettings"] !== null) {
            $this->RefreshSettings = new RefreshSettings();
            $this->RefreshSettings->deserialize($param["RefreshSettings"]);
        }

        if (array_key_exists("OriginRefreshActivityId",$param) and $param["OriginRefreshActivityId"] !== null) {
            $this->OriginRefreshActivityId = $param["OriginRefreshActivityId"];
        }

        if (array_key_exists("RefreshMode",$param) and $param["RefreshMode"] !== null) {
            $this->RefreshMode = $param["RefreshMode"];
        }
    }
}
