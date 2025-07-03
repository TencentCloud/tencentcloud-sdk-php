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
 * ClearLaunchConfigurationAttributes请求参数结构体
 *
 * @method string getLaunchConfigurationId() 获取启动配置ID。可通过如下方式获取：
<li>通过登录 [控制台](https://console.cloud.tencent.com/autoscaling/config) 查询启动配置ID。</li>
<li>通过调用接口 [DescribeLaunchConfigurations](https://cloud.tencent.com/document/api/377/20445) ，取返回信息中的 LaunchConfigurationId 获取启动配置ID。</li>
 * @method void setLaunchConfigurationId(string $LaunchConfigurationId) 设置启动配置ID。可通过如下方式获取：
<li>通过登录 [控制台](https://console.cloud.tencent.com/autoscaling/config) 查询启动配置ID。</li>
<li>通过调用接口 [DescribeLaunchConfigurations](https://cloud.tencent.com/document/api/377/20445) ，取返回信息中的 LaunchConfigurationId 获取启动配置ID。</li>
 * @method boolean getClearDataDisks() 获取是否清空数据盘信息，非必填，默认为 false。
填 true 代表清空“数据盘”信息，清空后基于此新创建的云主机将不含有任何数据盘。
 * @method void setClearDataDisks(boolean $ClearDataDisks) 设置是否清空数据盘信息，非必填，默认为 false。
填 true 代表清空“数据盘”信息，清空后基于此新创建的云主机将不含有任何数据盘。
 * @method boolean getClearHostNameSettings() 获取是否清空云服务器主机名相关设置信息，非必填，默认为 false。
填 true 代表清空主机名设置信息，清空后基于此新创建的云主机将不设置主机名。
 * @method void setClearHostNameSettings(boolean $ClearHostNameSettings) 设置是否清空云服务器主机名相关设置信息，非必填，默认为 false。
填 true 代表清空主机名设置信息，清空后基于此新创建的云主机将不设置主机名。
 * @method boolean getClearInstanceNameSettings() 获取是否清空云服务器实例名相关设置信息，非必填，默认为 false。
填 true 代表清空主机名设置信息，清空后基于此新创建的云主机将按照“as-{{ 伸缩组AutoScalingGroupName }}”进行设置。
 * @method void setClearInstanceNameSettings(boolean $ClearInstanceNameSettings) 设置是否清空云服务器实例名相关设置信息，非必填，默认为 false。
填 true 代表清空主机名设置信息，清空后基于此新创建的云主机将按照“as-{{ 伸缩组AutoScalingGroupName }}”进行设置。
 * @method boolean getClearDisasterRecoverGroupIds() 获取是否清空置放群组信息，非必填，默认为 false。
填 true 代表清空置放群组信息，清空后基于此新创建的云主机将不指定任何置放群组。
 * @method void setClearDisasterRecoverGroupIds(boolean $ClearDisasterRecoverGroupIds) 设置是否清空置放群组信息，非必填，默认为 false。
填 true 代表清空置放群组信息，清空后基于此新创建的云主机将不指定任何置放群组。
 * @method boolean getClearInstanceTags() 获取是否清空实例标签列表，非必填，默认为 false。
填 true 代表清空实例标签列表，清空后基于此新创建的云主机将不会绑定列表中的标签。
 * @method void setClearInstanceTags(boolean $ClearInstanceTags) 设置是否清空实例标签列表，非必填，默认为 false。
填 true 代表清空实例标签列表，清空后基于此新创建的云主机将不会绑定列表中的标签。
 * @method boolean getClearMetadata() 获取是否清空 MetaData，非必填，默认为 false。填 true 代表清空 MetaData，清空后基于此新创建的云主机将不会关联自定义的 Metadata。
 * @method void setClearMetadata(boolean $ClearMetadata) 设置是否清空 MetaData，非必填，默认为 false。填 true 代表清空 MetaData，清空后基于此新创建的云主机将不会关联自定义的 Metadata。
 */
class ClearLaunchConfigurationAttributesRequest extends AbstractModel
{
    /**
     * @var string 启动配置ID。可通过如下方式获取：
<li>通过登录 [控制台](https://console.cloud.tencent.com/autoscaling/config) 查询启动配置ID。</li>
<li>通过调用接口 [DescribeLaunchConfigurations](https://cloud.tencent.com/document/api/377/20445) ，取返回信息中的 LaunchConfigurationId 获取启动配置ID。</li>
     */
    public $LaunchConfigurationId;

    /**
     * @var boolean 是否清空数据盘信息，非必填，默认为 false。
填 true 代表清空“数据盘”信息，清空后基于此新创建的云主机将不含有任何数据盘。
     */
    public $ClearDataDisks;

    /**
     * @var boolean 是否清空云服务器主机名相关设置信息，非必填，默认为 false。
填 true 代表清空主机名设置信息，清空后基于此新创建的云主机将不设置主机名。
     */
    public $ClearHostNameSettings;

    /**
     * @var boolean 是否清空云服务器实例名相关设置信息，非必填，默认为 false。
填 true 代表清空主机名设置信息，清空后基于此新创建的云主机将按照“as-{{ 伸缩组AutoScalingGroupName }}”进行设置。
     */
    public $ClearInstanceNameSettings;

    /**
     * @var boolean 是否清空置放群组信息，非必填，默认为 false。
填 true 代表清空置放群组信息，清空后基于此新创建的云主机将不指定任何置放群组。
     */
    public $ClearDisasterRecoverGroupIds;

    /**
     * @var boolean 是否清空实例标签列表，非必填，默认为 false。
填 true 代表清空实例标签列表，清空后基于此新创建的云主机将不会绑定列表中的标签。
     */
    public $ClearInstanceTags;

    /**
     * @var boolean 是否清空 MetaData，非必填，默认为 false。填 true 代表清空 MetaData，清空后基于此新创建的云主机将不会关联自定义的 Metadata。
     */
    public $ClearMetadata;

    /**
     * @param string $LaunchConfigurationId 启动配置ID。可通过如下方式获取：
<li>通过登录 [控制台](https://console.cloud.tencent.com/autoscaling/config) 查询启动配置ID。</li>
<li>通过调用接口 [DescribeLaunchConfigurations](https://cloud.tencent.com/document/api/377/20445) ，取返回信息中的 LaunchConfigurationId 获取启动配置ID。</li>
     * @param boolean $ClearDataDisks 是否清空数据盘信息，非必填，默认为 false。
填 true 代表清空“数据盘”信息，清空后基于此新创建的云主机将不含有任何数据盘。
     * @param boolean $ClearHostNameSettings 是否清空云服务器主机名相关设置信息，非必填，默认为 false。
填 true 代表清空主机名设置信息，清空后基于此新创建的云主机将不设置主机名。
     * @param boolean $ClearInstanceNameSettings 是否清空云服务器实例名相关设置信息，非必填，默认为 false。
填 true 代表清空主机名设置信息，清空后基于此新创建的云主机将按照“as-{{ 伸缩组AutoScalingGroupName }}”进行设置。
     * @param boolean $ClearDisasterRecoverGroupIds 是否清空置放群组信息，非必填，默认为 false。
填 true 代表清空置放群组信息，清空后基于此新创建的云主机将不指定任何置放群组。
     * @param boolean $ClearInstanceTags 是否清空实例标签列表，非必填，默认为 false。
填 true 代表清空实例标签列表，清空后基于此新创建的云主机将不会绑定列表中的标签。
     * @param boolean $ClearMetadata 是否清空 MetaData，非必填，默认为 false。填 true 代表清空 MetaData，清空后基于此新创建的云主机将不会关联自定义的 Metadata。
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
        if (array_key_exists("LaunchConfigurationId",$param) and $param["LaunchConfigurationId"] !== null) {
            $this->LaunchConfigurationId = $param["LaunchConfigurationId"];
        }

        if (array_key_exists("ClearDataDisks",$param) and $param["ClearDataDisks"] !== null) {
            $this->ClearDataDisks = $param["ClearDataDisks"];
        }

        if (array_key_exists("ClearHostNameSettings",$param) and $param["ClearHostNameSettings"] !== null) {
            $this->ClearHostNameSettings = $param["ClearHostNameSettings"];
        }

        if (array_key_exists("ClearInstanceNameSettings",$param) and $param["ClearInstanceNameSettings"] !== null) {
            $this->ClearInstanceNameSettings = $param["ClearInstanceNameSettings"];
        }

        if (array_key_exists("ClearDisasterRecoverGroupIds",$param) and $param["ClearDisasterRecoverGroupIds"] !== null) {
            $this->ClearDisasterRecoverGroupIds = $param["ClearDisasterRecoverGroupIds"];
        }

        if (array_key_exists("ClearInstanceTags",$param) and $param["ClearInstanceTags"] !== null) {
            $this->ClearInstanceTags = $param["ClearInstanceTags"];
        }

        if (array_key_exists("ClearMetadata",$param) and $param["ClearMetadata"] !== null) {
            $this->ClearMetadata = $param["ClearMetadata"];
        }
    }
}
