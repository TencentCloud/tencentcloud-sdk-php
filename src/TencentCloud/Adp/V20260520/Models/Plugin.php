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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 插件详情
 *
 * @method PluginConfig getConfig() 获取插件配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConfig(PluginConfig $Config) 设置插件配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间，unix时间戳
 * @method void setCreateTime(string $CreateTime) 设置创建时间，unix时间戳
 * @method PluginOperation getOperation() 获取插件运营管理信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOperation(PluginOperation $Operation) 设置插件运营管理信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPluginId() 获取插件id
 * @method void setPluginId(string $PluginId) 设置插件id
 * @method integer getPluginVersion() 获取插件版本号
 * @method void setPluginVersion(integer $PluginVersion) 设置插件版本号
 * @method PluginProfile getProfile() 获取插件基础信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProfile(PluginProfile $Profile) 设置插件基础信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method PluginStatistics getStatistics() 获取插件统计信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatistics(PluginStatistics $Statistics) 设置插件统计信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取<p>插件状态，1:可用，2:不可用 </p><p>枚举值：</p><ul><li>1： 可用</li><li>2： 不可用</li></ul>
 * @method void setStatus(integer $Status) 设置<p>插件状态，1:可用，2:不可用 </p><p>枚举值：</p><ul><li>1： 可用</li><li>2： 不可用</li></ul>
 * @method array getToolList() 获取工具列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setToolList(array $ToolList) 设置工具列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取更新时间，Unix时间戳
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间，Unix时间戳
 * @method PluginUserState getUserState() 获取用户维度的插件状态信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserState(PluginUserState $UserState) 设置用户维度的插件状态信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class Plugin extends AbstractModel
{
    /**
     * @var PluginConfig 插件配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Config;

    /**
     * @var string 创建时间，unix时间戳
     */
    public $CreateTime;

    /**
     * @var PluginOperation 插件运营管理信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Operation;

    /**
     * @var string 插件id
     */
    public $PluginId;

    /**
     * @var integer 插件版本号
     */
    public $PluginVersion;

    /**
     * @var PluginProfile 插件基础信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Profile;

    /**
     * @var PluginStatistics 插件统计信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Statistics;

    /**
     * @var integer <p>插件状态，1:可用，2:不可用 </p><p>枚举值：</p><ul><li>1： 可用</li><li>2： 不可用</li></ul>
     */
    public $Status;

    /**
     * @var array 工具列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ToolList;

    /**
     * @var string 更新时间，Unix时间戳
     */
    public $UpdateTime;

    /**
     * @var PluginUserState 用户维度的插件状态信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserState;

    /**
     * @param PluginConfig $Config 插件配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间，unix时间戳
     * @param PluginOperation $Operation 插件运营管理信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PluginId 插件id
     * @param integer $PluginVersion 插件版本号
     * @param PluginProfile $Profile 插件基础信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param PluginStatistics $Statistics 插件统计信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status <p>插件状态，1:可用，2:不可用 </p><p>枚举值：</p><ul><li>1： 可用</li><li>2： 不可用</li></ul>
     * @param array $ToolList 工具列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 更新时间，Unix时间戳
     * @param PluginUserState $UserState 用户维度的插件状态信息
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Config",$param) and $param["Config"] !== null) {
            $this->Config = new PluginConfig();
            $this->Config->deserialize($param["Config"]);
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Operation",$param) and $param["Operation"] !== null) {
            $this->Operation = new PluginOperation();
            $this->Operation->deserialize($param["Operation"]);
        }

        if (array_key_exists("PluginId",$param) and $param["PluginId"] !== null) {
            $this->PluginId = $param["PluginId"];
        }

        if (array_key_exists("PluginVersion",$param) and $param["PluginVersion"] !== null) {
            $this->PluginVersion = $param["PluginVersion"];
        }

        if (array_key_exists("Profile",$param) and $param["Profile"] !== null) {
            $this->Profile = new PluginProfile();
            $this->Profile->deserialize($param["Profile"]);
        }

        if (array_key_exists("Statistics",$param) and $param["Statistics"] !== null) {
            $this->Statistics = new PluginStatistics();
            $this->Statistics->deserialize($param["Statistics"]);
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ToolList",$param) and $param["ToolList"] !== null) {
            $this->ToolList = [];
            foreach ($param["ToolList"] as $key => $value){
                $obj = new Tool();
                $obj->deserialize($value);
                array_push($this->ToolList, $obj);
            }
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("UserState",$param) and $param["UserState"] !== null) {
            $this->UserState = new PluginUserState();
            $this->UserState->deserialize($param["UserState"]);
        }
    }
}
