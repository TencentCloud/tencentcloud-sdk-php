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
 * 插件概要信息（用于插件列表）
 *
 * @method PluginConfig getConfig() 获取<p>插件配置信息</p>
 * @method void setConfig(PluginConfig $Config) 设置<p>插件配置信息</p>
 * @method boolean getIsShared() 获取<p>是否已配置共享</p>
 * @method void setIsShared(boolean $IsShared) 设置<p>是否已配置共享</p>
 * @method PluginOperation getOperation() 获取<p>插件运营管理信息</p>
 * @method void setOperation(PluginOperation $Operation) 设置<p>插件运营管理信息</p>
 * @method string getPluginId() 获取<p>插件id</p>
 * @method void setPluginId(string $PluginId) 设置<p>插件id</p>
 * @method PluginProfile getProfile() 获取<p>插件基础信息</p>
 * @method void setProfile(PluginProfile $Profile) 设置<p>插件基础信息</p>
 * @method string getSpaceId() 获取<p>插件所属空间 ID；内置插件为空</p>
 * @method void setSpaceId(string $SpaceId) 设置<p>插件所属空间 ID；内置插件为空</p>
 * @method PluginStatistics getStatistics() 获取<p>插件统计信息</p>
 * @method void setStatistics(PluginStatistics $Statistics) 设置<p>插件统计信息</p>
 * @method integer getStatus() 获取<p>插件状态，1:可用，2:不可用 </p><p>枚举值：</p><ul><li>1： 可用</li><li>2： 不可用</li></ul>
 * @method void setStatus(integer $Status) 设置<p>插件状态，1:可用，2:不可用 </p><p>枚举值：</p><ul><li>1： 可用</li><li>2： 不可用</li></ul>
 * @method array getToolList() 获取<p>工具信息</p>
 * @method void setToolList(array $ToolList) 设置<p>工具信息</p>
 * @method PluginUserState getUserState() 获取<p>用户维度的插件状态信息</p>
 * @method void setUserState(PluginUserState $UserState) 设置<p>用户维度的插件状态信息</p>
 * @method string getUpdateTime() 获取<p>更新时间，Unix时间戳</p><p>单位：秒</p>
 * @method void setUpdateTime(string $UpdateTime) 设置<p>更新时间，Unix时间戳</p><p>单位：秒</p>
 */
class PluginSummary extends AbstractModel
{
    /**
     * @var PluginConfig <p>插件配置信息</p>
     */
    public $Config;

    /**
     * @var boolean <p>是否已配置共享</p>
     */
    public $IsShared;

    /**
     * @var PluginOperation <p>插件运营管理信息</p>
     */
    public $Operation;

    /**
     * @var string <p>插件id</p>
     */
    public $PluginId;

    /**
     * @var PluginProfile <p>插件基础信息</p>
     */
    public $Profile;

    /**
     * @var string <p>插件所属空间 ID；内置插件为空</p>
     */
    public $SpaceId;

    /**
     * @var PluginStatistics <p>插件统计信息</p>
     */
    public $Statistics;

    /**
     * @var integer <p>插件状态，1:可用，2:不可用 </p><p>枚举值：</p><ul><li>1： 可用</li><li>2： 不可用</li></ul>
     */
    public $Status;

    /**
     * @var array <p>工具信息</p>
     */
    public $ToolList;

    /**
     * @var PluginUserState <p>用户维度的插件状态信息</p>
     */
    public $UserState;

    /**
     * @var string <p>更新时间，Unix时间戳</p><p>单位：秒</p>
     */
    public $UpdateTime;

    /**
     * @param PluginConfig $Config <p>插件配置信息</p>
     * @param boolean $IsShared <p>是否已配置共享</p>
     * @param PluginOperation $Operation <p>插件运营管理信息</p>
     * @param string $PluginId <p>插件id</p>
     * @param PluginProfile $Profile <p>插件基础信息</p>
     * @param string $SpaceId <p>插件所属空间 ID；内置插件为空</p>
     * @param PluginStatistics $Statistics <p>插件统计信息</p>
     * @param integer $Status <p>插件状态，1:可用，2:不可用 </p><p>枚举值：</p><ul><li>1： 可用</li><li>2： 不可用</li></ul>
     * @param array $ToolList <p>工具信息</p>
     * @param PluginUserState $UserState <p>用户维度的插件状态信息</p>
     * @param string $UpdateTime <p>更新时间，Unix时间戳</p><p>单位：秒</p>
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

        if (array_key_exists("IsShared",$param) and $param["IsShared"] !== null) {
            $this->IsShared = $param["IsShared"];
        }

        if (array_key_exists("Operation",$param) and $param["Operation"] !== null) {
            $this->Operation = new PluginOperation();
            $this->Operation->deserialize($param["Operation"]);
        }

        if (array_key_exists("PluginId",$param) and $param["PluginId"] !== null) {
            $this->PluginId = $param["PluginId"];
        }

        if (array_key_exists("Profile",$param) and $param["Profile"] !== null) {
            $this->Profile = new PluginProfile();
            $this->Profile->deserialize($param["Profile"]);
        }

        if (array_key_exists("SpaceId",$param) and $param["SpaceId"] !== null) {
            $this->SpaceId = $param["SpaceId"];
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
                $obj = new ToolSummary();
                $obj->deserialize($value);
                array_push($this->ToolList, $obj);
            }
        }

        if (array_key_exists("UserState",$param) and $param["UserState"] !== null) {
            $this->UserState = new PluginUserState();
            $this->UserState->deserialize($param["UserState"]);
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
