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
 * @method PluginOperation getOperation() 获取插件运营管理信息
 * @method void setOperation(PluginOperation $Operation) 设置插件运营管理信息
 * @method string getPluginId() 获取插件id
 * @method void setPluginId(string $PluginId) 设置插件id
 * @method PluginProfile getProfile() 获取插件基础信息
 * @method void setProfile(PluginProfile $Profile) 设置插件基础信息
 * @method PluginStatistics getStatistics() 获取插件统计信息
 * @method void setStatistics(PluginStatistics $Statistics) 设置插件统计信息
 * @method integer getStatus() 获取<p>插件状态，1:可用，2:不可用 </p><p>枚举值：</p><ul><li>1： 可用</li><li>2： 不可用</li></ul>
 * @method void setStatus(integer $Status) 设置<p>插件状态，1:可用，2:不可用 </p><p>枚举值：</p><ul><li>1： 可用</li><li>2： 不可用</li></ul>
 * @method PluginUserState getUserState() 获取用户维度的插件状态信息
 * @method void setUserState(PluginUserState $UserState) 设置用户维度的插件状态信息
 */
class PluginSummary extends AbstractModel
{
    /**
     * @var PluginOperation 插件运营管理信息
     */
    public $Operation;

    /**
     * @var string 插件id
     */
    public $PluginId;

    /**
     * @var PluginProfile 插件基础信息
     */
    public $Profile;

    /**
     * @var PluginStatistics 插件统计信息
     */
    public $Statistics;

    /**
     * @var integer <p>插件状态，1:可用，2:不可用 </p><p>枚举值：</p><ul><li>1： 可用</li><li>2： 不可用</li></ul>
     */
    public $Status;

    /**
     * @var PluginUserState 用户维度的插件状态信息
     */
    public $UserState;

    /**
     * @param PluginOperation $Operation 插件运营管理信息
     * @param string $PluginId 插件id
     * @param PluginProfile $Profile 插件基础信息
     * @param PluginStatistics $Statistics 插件统计信息
     * @param integer $Status <p>插件状态，1:可用，2:不可用 </p><p>枚举值：</p><ul><li>1： 可用</li><li>2： 不可用</li></ul>
     * @param PluginUserState $UserState 用户维度的插件状态信息
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

        if (array_key_exists("Statistics",$param) and $param["Statistics"] !== null) {
            $this->Statistics = new PluginStatistics();
            $this->Statistics->deserialize($param["Statistics"]);
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("UserState",$param) and $param["UserState"] !== null) {
            $this->UserState = new PluginUserState();
            $this->UserState->deserialize($param["UserState"]);
        }
    }
}
