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
namespace TencentCloud\Gse\V20191112\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CopyFleet请求参数结构体
 *
 * @method string getFleetId() 获取服务器舰队 Id
 * @method void setFleetId(string $FleetId) 设置服务器舰队 Id
 * @method integer getCopyNumber() 获取复制数量，最小值1，最大值为剩余配额，可以根据[获取用户配额](https://cloud.tencent.com/document/product/1165/48732)接口获取。
 * @method void setCopyNumber(integer $CopyNumber) 设置复制数量，最小值1，最大值为剩余配额，可以根据[获取用户配额](https://cloud.tencent.com/document/product/1165/48732)接口获取。
 * @method string getAssetId() 获取生成包 Id
 * @method void setAssetId(string $AssetId) 设置生成包 Id
 * @method string getDescription() 获取描述，最小长度0，最大长度100
 * @method void setDescription(string $Description) 设置描述，最小长度0，最大长度100
 * @method array getInboundPermissions() 获取网络配置
 * @method void setInboundPermissions(array $InboundPermissions) 设置网络配置
 * @method string getInstanceType() 获取服务器类型，参数根据[获取服务器实例类型列表](https://cloud.tencent.com/document/product/1165/48732)接口获取。
 * @method void setInstanceType(string $InstanceType) 设置服务器类型，参数根据[获取服务器实例类型列表](https://cloud.tencent.com/document/product/1165/48732)接口获取。
 * @method string getFleetType() 获取服务器舰队类型，目前只支持ON_DEMAND类型
 * @method void setFleetType(string $FleetType) 设置服务器舰队类型，目前只支持ON_DEMAND类型
 * @method string getName() 获取服务器舰队名称，最小长度1，最大长度50
 * @method void setName(string $Name) 设置服务器舰队名称，最小长度1，最大长度50
 * @method string getNewGameServerSessionProtectionPolicy() 获取保护策略：不保护NoProtection、完全保护FullProtection、时限保护TimeLimitProtection
 * @method void setNewGameServerSessionProtectionPolicy(string $NewGameServerSessionProtectionPolicy) 设置保护策略：不保护NoProtection、完全保护FullProtection、时限保护TimeLimitProtection
 * @method ResourceCreationLimitPolicy getResourceCreationLimitPolicy() 获取资源创建限制策略
 * @method void setResourceCreationLimitPolicy(ResourceCreationLimitPolicy $ResourceCreationLimitPolicy) 设置资源创建限制策略
 * @method RuntimeConfiguration getRuntimeConfiguration() 获取进程配置
 * @method void setRuntimeConfiguration(RuntimeConfiguration $RuntimeConfiguration) 设置进程配置
 * @method integer getGameServerSessionProtectionTimeLimit() 获取时限保护超时时间，默认60分钟，最小值5，最大值1440；当NewGameSessionProtectionPolicy为TimeLimitProtection时参数有效
 * @method void setGameServerSessionProtectionTimeLimit(integer $GameServerSessionProtectionTimeLimit) 设置时限保护超时时间，默认60分钟，最小值5，最大值1440；当NewGameSessionProtectionPolicy为TimeLimitProtection时参数有效
 * @method string getSelectedScalingType() 获取是否选择扩缩容：SCALING_SELECTED 或者 SCALING_UNSELECTED；默认是 SCALING_UNSELECTED
 * @method void setSelectedScalingType(string $SelectedScalingType) 设置是否选择扩缩容：SCALING_SELECTED 或者 SCALING_UNSELECTED；默认是 SCALING_UNSELECTED
 * @method string getSelectedCcnType() 获取是否选择云联网：CCN_SELECTED 或者 CCN_UNSELECTED；默认是 CCN_UNSELECTED
 * @method void setSelectedCcnType(string $SelectedCcnType) 设置是否选择云联网：CCN_SELECTED 或者 CCN_UNSELECTED；默认是 CCN_UNSELECTED
 * @method array getTags() 获取标签列表，最大长度50组
 * @method void setTags(array $Tags) 设置标签列表，最大长度50组
 */
class CopyFleetRequest extends AbstractModel
{
    /**
     * @var string 服务器舰队 Id
     */
    public $FleetId;

    /**
     * @var integer 复制数量，最小值1，最大值为剩余配额，可以根据[获取用户配额](https://cloud.tencent.com/document/product/1165/48732)接口获取。
     */
    public $CopyNumber;

    /**
     * @var string 生成包 Id
     */
    public $AssetId;

    /**
     * @var string 描述，最小长度0，最大长度100
     */
    public $Description;

    /**
     * @var array 网络配置
     */
    public $InboundPermissions;

    /**
     * @var string 服务器类型，参数根据[获取服务器实例类型列表](https://cloud.tencent.com/document/product/1165/48732)接口获取。
     */
    public $InstanceType;

    /**
     * @var string 服务器舰队类型，目前只支持ON_DEMAND类型
     */
    public $FleetType;

    /**
     * @var string 服务器舰队名称，最小长度1，最大长度50
     */
    public $Name;

    /**
     * @var string 保护策略：不保护NoProtection、完全保护FullProtection、时限保护TimeLimitProtection
     */
    public $NewGameServerSessionProtectionPolicy;

    /**
     * @var ResourceCreationLimitPolicy 资源创建限制策略
     */
    public $ResourceCreationLimitPolicy;

    /**
     * @var RuntimeConfiguration 进程配置
     */
    public $RuntimeConfiguration;

    /**
     * @var integer 时限保护超时时间，默认60分钟，最小值5，最大值1440；当NewGameSessionProtectionPolicy为TimeLimitProtection时参数有效
     */
    public $GameServerSessionProtectionTimeLimit;

    /**
     * @var string 是否选择扩缩容：SCALING_SELECTED 或者 SCALING_UNSELECTED；默认是 SCALING_UNSELECTED
     */
    public $SelectedScalingType;

    /**
     * @var string 是否选择云联网：CCN_SELECTED 或者 CCN_UNSELECTED；默认是 CCN_UNSELECTED
     */
    public $SelectedCcnType;

    /**
     * @var array 标签列表，最大长度50组
     */
    public $Tags;

    /**
     * @param string $FleetId 服务器舰队 Id
     * @param integer $CopyNumber 复制数量，最小值1，最大值为剩余配额，可以根据[获取用户配额](https://cloud.tencent.com/document/product/1165/48732)接口获取。
     * @param string $AssetId 生成包 Id
     * @param string $Description 描述，最小长度0，最大长度100
     * @param array $InboundPermissions 网络配置
     * @param string $InstanceType 服务器类型，参数根据[获取服务器实例类型列表](https://cloud.tencent.com/document/product/1165/48732)接口获取。
     * @param string $FleetType 服务器舰队类型，目前只支持ON_DEMAND类型
     * @param string $Name 服务器舰队名称，最小长度1，最大长度50
     * @param string $NewGameServerSessionProtectionPolicy 保护策略：不保护NoProtection、完全保护FullProtection、时限保护TimeLimitProtection
     * @param ResourceCreationLimitPolicy $ResourceCreationLimitPolicy 资源创建限制策略
     * @param RuntimeConfiguration $RuntimeConfiguration 进程配置
     * @param integer $GameServerSessionProtectionTimeLimit 时限保护超时时间，默认60分钟，最小值5，最大值1440；当NewGameSessionProtectionPolicy为TimeLimitProtection时参数有效
     * @param string $SelectedScalingType 是否选择扩缩容：SCALING_SELECTED 或者 SCALING_UNSELECTED；默认是 SCALING_UNSELECTED
     * @param string $SelectedCcnType 是否选择云联网：CCN_SELECTED 或者 CCN_UNSELECTED；默认是 CCN_UNSELECTED
     * @param array $Tags 标签列表，最大长度50组
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
        if (array_key_exists("FleetId",$param) and $param["FleetId"] !== null) {
            $this->FleetId = $param["FleetId"];
        }

        if (array_key_exists("CopyNumber",$param) and $param["CopyNumber"] !== null) {
            $this->CopyNumber = $param["CopyNumber"];
        }

        if (array_key_exists("AssetId",$param) and $param["AssetId"] !== null) {
            $this->AssetId = $param["AssetId"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("InboundPermissions",$param) and $param["InboundPermissions"] !== null) {
            $this->InboundPermissions = [];
            foreach ($param["InboundPermissions"] as $key => $value){
                $obj = new InboundPermission();
                $obj->deserialize($value);
                array_push($this->InboundPermissions, $obj);
            }
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("FleetType",$param) and $param["FleetType"] !== null) {
            $this->FleetType = $param["FleetType"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("NewGameServerSessionProtectionPolicy",$param) and $param["NewGameServerSessionProtectionPolicy"] !== null) {
            $this->NewGameServerSessionProtectionPolicy = $param["NewGameServerSessionProtectionPolicy"];
        }

        if (array_key_exists("ResourceCreationLimitPolicy",$param) and $param["ResourceCreationLimitPolicy"] !== null) {
            $this->ResourceCreationLimitPolicy = new ResourceCreationLimitPolicy();
            $this->ResourceCreationLimitPolicy->deserialize($param["ResourceCreationLimitPolicy"]);
        }

        if (array_key_exists("RuntimeConfiguration",$param) and $param["RuntimeConfiguration"] !== null) {
            $this->RuntimeConfiguration = new RuntimeConfiguration();
            $this->RuntimeConfiguration->deserialize($param["RuntimeConfiguration"]);
        }

        if (array_key_exists("GameServerSessionProtectionTimeLimit",$param) and $param["GameServerSessionProtectionTimeLimit"] !== null) {
            $this->GameServerSessionProtectionTimeLimit = $param["GameServerSessionProtectionTimeLimit"];
        }

        if (array_key_exists("SelectedScalingType",$param) and $param["SelectedScalingType"] !== null) {
            $this->SelectedScalingType = $param["SelectedScalingType"];
        }

        if (array_key_exists("SelectedCcnType",$param) and $param["SelectedCcnType"] !== null) {
            $this->SelectedCcnType = $param["SelectedCcnType"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
