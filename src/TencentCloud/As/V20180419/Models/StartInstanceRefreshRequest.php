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
 * StartInstanceRefresh请求参数结构体
 *
 * @method string getAutoScalingGroupId() 获取伸缩组ID。可通过登录 [控制台](https://console.cloud.tencent.com/autoscaling/group) 或调用接口 [DescribeAutoScalingGroups](https://cloud.tencent.com/document/api/377/20438) ，取返回信息中的 AutoScalingGroupId 获取伸缩组ID。
 * @method void setAutoScalingGroupId(string $AutoScalingGroupId) 设置伸缩组ID。可通过登录 [控制台](https://console.cloud.tencent.com/autoscaling/group) 或调用接口 [DescribeAutoScalingGroups](https://cloud.tencent.com/document/api/377/20438) ，取返回信息中的 AutoScalingGroupId 获取伸缩组ID。
 * @method RefreshSettings getRefreshSettings() 获取刷新设置。
 * @method void setRefreshSettings(RefreshSettings $RefreshSettings) 设置刷新设置。
 * @method string getRefreshMode() 获取刷新模式。默认值为 ROLLING_UPDATE_RESET，取值范围：
<li>ROLLING_UPDATE_RESET：重装系统进行滚动更新</li>
<li>ROLLING_UPDATE_REPLACE：新建实例替换进行滚动更新，该模式暂不支持回滚接口</li>
 * @method void setRefreshMode(string $RefreshMode) 设置刷新模式。默认值为 ROLLING_UPDATE_RESET，取值范围：
<li>ROLLING_UPDATE_RESET：重装系统进行滚动更新</li>
<li>ROLLING_UPDATE_REPLACE：新建实例替换进行滚动更新，该模式暂不支持回滚接口</li>
 */
class StartInstanceRefreshRequest extends AbstractModel
{
    /**
     * @var string 伸缩组ID。可通过登录 [控制台](https://console.cloud.tencent.com/autoscaling/group) 或调用接口 [DescribeAutoScalingGroups](https://cloud.tencent.com/document/api/377/20438) ，取返回信息中的 AutoScalingGroupId 获取伸缩组ID。
     */
    public $AutoScalingGroupId;

    /**
     * @var RefreshSettings 刷新设置。
     */
    public $RefreshSettings;

    /**
     * @var string 刷新模式。默认值为 ROLLING_UPDATE_RESET，取值范围：
<li>ROLLING_UPDATE_RESET：重装系统进行滚动更新</li>
<li>ROLLING_UPDATE_REPLACE：新建实例替换进行滚动更新，该模式暂不支持回滚接口</li>
     */
    public $RefreshMode;

    /**
     * @param string $AutoScalingGroupId 伸缩组ID。可通过登录 [控制台](https://console.cloud.tencent.com/autoscaling/group) 或调用接口 [DescribeAutoScalingGroups](https://cloud.tencent.com/document/api/377/20438) ，取返回信息中的 AutoScalingGroupId 获取伸缩组ID。
     * @param RefreshSettings $RefreshSettings 刷新设置。
     * @param string $RefreshMode 刷新模式。默认值为 ROLLING_UPDATE_RESET，取值范围：
<li>ROLLING_UPDATE_RESET：重装系统进行滚动更新</li>
<li>ROLLING_UPDATE_REPLACE：新建实例替换进行滚动更新，该模式暂不支持回滚接口</li>
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

        if (array_key_exists("RefreshMode",$param) and $param["RefreshMode"] !== null) {
            $this->RefreshMode = $param["RefreshMode"];
        }
    }
}
