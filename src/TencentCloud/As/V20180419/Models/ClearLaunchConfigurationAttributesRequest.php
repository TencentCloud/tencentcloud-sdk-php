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
 * ClearLaunchConfigurationAttributes请求参数结构体
 *
 * @method string getLaunchConfigurationId() 获取<p>启动配置ID。可通过如下方式获取：</p><li>通过登录 [控制台](https://console.cloud.tencent.com/autoscaling/config) 查询启动配置ID。</li><li>通过调用接口 [DescribeLaunchConfigurations](https://cloud.tencent.com/document/api/377/20445) ，取返回信息中的 LaunchConfigurationId 获取启动配置ID。</li>
 * @method void setLaunchConfigurationId(string $LaunchConfigurationId) 设置<p>启动配置ID。可通过如下方式获取：</p><li>通过登录 [控制台](https://console.cloud.tencent.com/autoscaling/config) 查询启动配置ID。</li><li>通过调用接口 [DescribeLaunchConfigurations](https://cloud.tencent.com/document/api/377/20445) ，取返回信息中的 LaunchConfigurationId 获取启动配置ID。</li>
 * @method boolean getClearDataDisks() 获取<p>是否清空数据盘信息，非必填，默认为 false。<br>填 true 代表清空“数据盘”信息，清空后基于此新创建的云主机将不含有任何数据盘。</p>
 * @method void setClearDataDisks(boolean $ClearDataDisks) 设置<p>是否清空数据盘信息，非必填，默认为 false。<br>填 true 代表清空“数据盘”信息，清空后基于此新创建的云主机将不含有任何数据盘。</p>
 * @method boolean getClearHostNameSettings() 获取<p>是否清空云服务器主机名相关设置信息，非必填，默认为 false。<br>填 true 代表清空主机名设置信息，清空后基于此新创建的云主机将不设置主机名。</p>
 * @method void setClearHostNameSettings(boolean $ClearHostNameSettings) 设置<p>是否清空云服务器主机名相关设置信息，非必填，默认为 false。<br>填 true 代表清空主机名设置信息，清空后基于此新创建的云主机将不设置主机名。</p>
 * @method boolean getClearInstanceNameSettings() 获取<p>是否清空云服务器实例名相关设置信息，非必填，默认为 false。<br>填 true 代表清空主机名设置信息，清空后基于此新创建的云主机将按照“as-{{ 伸缩组AutoScalingGroupName }}”进行设置。</p>
 * @method void setClearInstanceNameSettings(boolean $ClearInstanceNameSettings) 设置<p>是否清空云服务器实例名相关设置信息，非必填，默认为 false。<br>填 true 代表清空主机名设置信息，清空后基于此新创建的云主机将按照“as-{{ 伸缩组AutoScalingGroupName }}”进行设置。</p>
 * @method boolean getClearDisasterRecoverGroupIds() 获取<p>是否清空置放群组信息，非必填，默认为 false。<br>填 true 代表清空置放群组信息，清空后基于此新创建的云主机将不指定任何置放群组。</p>
 * @method void setClearDisasterRecoverGroupIds(boolean $ClearDisasterRecoverGroupIds) 设置<p>是否清空置放群组信息，非必填，默认为 false。<br>填 true 代表清空置放群组信息，清空后基于此新创建的云主机将不指定任何置放群组。</p>
 * @method boolean getClearInstanceTags() 获取<p>是否清空实例标签列表，非必填，默认为 false。<br>填 true 代表清空实例标签列表，清空后基于此新创建的云主机将不会绑定列表中的标签。</p>
 * @method void setClearInstanceTags(boolean $ClearInstanceTags) 设置<p>是否清空实例标签列表，非必填，默认为 false。<br>填 true 代表清空实例标签列表，清空后基于此新创建的云主机将不会绑定列表中的标签。</p>
 * @method boolean getClearMetadata() 获取<p>是否清空 MetaData，非必填，默认为 false。填 true 代表清空 MetaData，清空后基于此新创建的云主机将不会关联自定义的 Metadata。</p>
 * @method void setClearMetadata(boolean $ClearMetadata) 设置<p>是否清空 MetaData，非必填，默认为 false。填 true 代表清空 MetaData，清空后基于此新创建的云主机将不会关联自定义的 Metadata。</p>
 * @method boolean getClearNetworkInterfaces() 获取<p>是否清除启动配置中的 NetworkInterfaces。取值 TRUE 时清除；未传或 FALSE 时不处理该字段。</p>
 * @method void setClearNetworkInterfaces(boolean $ClearNetworkInterfaces) 设置<p>是否清除启动配置中的 NetworkInterfaces。取值 TRUE 时清除；未传或 FALSE 时不处理该字段。</p>
 */
class ClearLaunchConfigurationAttributesRequest extends AbstractModel
{
    /**
     * @var string <p>启动配置ID。可通过如下方式获取：</p><li>通过登录 [控制台](https://console.cloud.tencent.com/autoscaling/config) 查询启动配置ID。</li><li>通过调用接口 [DescribeLaunchConfigurations](https://cloud.tencent.com/document/api/377/20445) ，取返回信息中的 LaunchConfigurationId 获取启动配置ID。</li>
     */
    public $LaunchConfigurationId;

    /**
     * @var boolean <p>是否清空数据盘信息，非必填，默认为 false。<br>填 true 代表清空“数据盘”信息，清空后基于此新创建的云主机将不含有任何数据盘。</p>
     */
    public $ClearDataDisks;

    /**
     * @var boolean <p>是否清空云服务器主机名相关设置信息，非必填，默认为 false。<br>填 true 代表清空主机名设置信息，清空后基于此新创建的云主机将不设置主机名。</p>
     */
    public $ClearHostNameSettings;

    /**
     * @var boolean <p>是否清空云服务器实例名相关设置信息，非必填，默认为 false。<br>填 true 代表清空主机名设置信息，清空后基于此新创建的云主机将按照“as-{{ 伸缩组AutoScalingGroupName }}”进行设置。</p>
     */
    public $ClearInstanceNameSettings;

    /**
     * @var boolean <p>是否清空置放群组信息，非必填，默认为 false。<br>填 true 代表清空置放群组信息，清空后基于此新创建的云主机将不指定任何置放群组。</p>
     */
    public $ClearDisasterRecoverGroupIds;

    /**
     * @var boolean <p>是否清空实例标签列表，非必填，默认为 false。<br>填 true 代表清空实例标签列表，清空后基于此新创建的云主机将不会绑定列表中的标签。</p>
     */
    public $ClearInstanceTags;

    /**
     * @var boolean <p>是否清空 MetaData，非必填，默认为 false。填 true 代表清空 MetaData，清空后基于此新创建的云主机将不会关联自定义的 Metadata。</p>
     */
    public $ClearMetadata;

    /**
     * @var boolean <p>是否清除启动配置中的 NetworkInterfaces。取值 TRUE 时清除；未传或 FALSE 时不处理该字段。</p>
     */
    public $ClearNetworkInterfaces;

    /**
     * @param string $LaunchConfigurationId <p>启动配置ID。可通过如下方式获取：</p><li>通过登录 [控制台](https://console.cloud.tencent.com/autoscaling/config) 查询启动配置ID。</li><li>通过调用接口 [DescribeLaunchConfigurations](https://cloud.tencent.com/document/api/377/20445) ，取返回信息中的 LaunchConfigurationId 获取启动配置ID。</li>
     * @param boolean $ClearDataDisks <p>是否清空数据盘信息，非必填，默认为 false。<br>填 true 代表清空“数据盘”信息，清空后基于此新创建的云主机将不含有任何数据盘。</p>
     * @param boolean $ClearHostNameSettings <p>是否清空云服务器主机名相关设置信息，非必填，默认为 false。<br>填 true 代表清空主机名设置信息，清空后基于此新创建的云主机将不设置主机名。</p>
     * @param boolean $ClearInstanceNameSettings <p>是否清空云服务器实例名相关设置信息，非必填，默认为 false。<br>填 true 代表清空主机名设置信息，清空后基于此新创建的云主机将按照“as-{{ 伸缩组AutoScalingGroupName }}”进行设置。</p>
     * @param boolean $ClearDisasterRecoverGroupIds <p>是否清空置放群组信息，非必填，默认为 false。<br>填 true 代表清空置放群组信息，清空后基于此新创建的云主机将不指定任何置放群组。</p>
     * @param boolean $ClearInstanceTags <p>是否清空实例标签列表，非必填，默认为 false。<br>填 true 代表清空实例标签列表，清空后基于此新创建的云主机将不会绑定列表中的标签。</p>
     * @param boolean $ClearMetadata <p>是否清空 MetaData，非必填，默认为 false。填 true 代表清空 MetaData，清空后基于此新创建的云主机将不会关联自定义的 Metadata。</p>
     * @param boolean $ClearNetworkInterfaces <p>是否清除启动配置中的 NetworkInterfaces。取值 TRUE 时清除；未传或 FALSE 时不处理该字段。</p>
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

        if (array_key_exists("ClearNetworkInterfaces",$param) and $param["ClearNetworkInterfaces"] !== null) {
            $this->ClearNetworkInterfaces = $param["ClearNetworkInterfaces"];
        }
    }
}
