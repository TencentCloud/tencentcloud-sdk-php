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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyNetAttackSetting请求参数结构体
 *
 * @method integer getNetAttackEnable() 获取0 关闭网络攻击检测，1开启网络攻击检测
 * @method void setNetAttackEnable(integer $NetAttackEnable) 设置0 关闭网络攻击检测，1开启网络攻击检测
 * @method integer getNetAttackAlarmStatus() 获取0 新增告警事件默认待处理，1新增告警事件默认已处理，3新增告警事件默认忽略
 * @method void setNetAttackAlarmStatus(integer $NetAttackAlarmStatus) 设置0 新增告警事件默认待处理，1新增告警事件默认已处理，3新增告警事件默认忽略
 * @method integer getScope() 获取1 全部旗舰版主机，0 Quuids列表主机
 * @method void setScope(integer $Scope) 设置1 全部旗舰版主机，0 Quuids列表主机
 * @method array getInstanceIds() 获取自选主机
 * @method void setInstanceIds(array $InstanceIds) 设置自选主机
 * @method array getExcludeInstanceIds() 获取自选排除的主机
 * @method void setExcludeInstanceIds(array $ExcludeInstanceIds) 设置自选排除的主机
 * @method integer getAutoInclude() 获取新增资产自动包含 0 不包含 1包含
 * @method void setAutoInclude(integer $AutoInclude) 设置新增资产自动包含 0 不包含 1包含
 */
class ModifyNetAttackSettingRequest extends AbstractModel
{
    /**
     * @var integer 0 关闭网络攻击检测，1开启网络攻击检测
     */
    public $NetAttackEnable;

    /**
     * @var integer 0 新增告警事件默认待处理，1新增告警事件默认已处理，3新增告警事件默认忽略
     */
    public $NetAttackAlarmStatus;

    /**
     * @var integer 1 全部旗舰版主机，0 Quuids列表主机
     */
    public $Scope;

    /**
     * @var array 自选主机
     */
    public $InstanceIds;

    /**
     * @var array 自选排除的主机
     */
    public $ExcludeInstanceIds;

    /**
     * @var integer 新增资产自动包含 0 不包含 1包含
     */
    public $AutoInclude;

    /**
     * @param integer $NetAttackEnable 0 关闭网络攻击检测，1开启网络攻击检测
     * @param integer $NetAttackAlarmStatus 0 新增告警事件默认待处理，1新增告警事件默认已处理，3新增告警事件默认忽略
     * @param integer $Scope 1 全部旗舰版主机，0 Quuids列表主机
     * @param array $InstanceIds 自选主机
     * @param array $ExcludeInstanceIds 自选排除的主机
     * @param integer $AutoInclude 新增资产自动包含 0 不包含 1包含
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
        if (array_key_exists("NetAttackEnable",$param) and $param["NetAttackEnable"] !== null) {
            $this->NetAttackEnable = $param["NetAttackEnable"];
        }

        if (array_key_exists("NetAttackAlarmStatus",$param) and $param["NetAttackAlarmStatus"] !== null) {
            $this->NetAttackAlarmStatus = $param["NetAttackAlarmStatus"];
        }

        if (array_key_exists("Scope",$param) and $param["Scope"] !== null) {
            $this->Scope = $param["Scope"];
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("ExcludeInstanceIds",$param) and $param["ExcludeInstanceIds"] !== null) {
            $this->ExcludeInstanceIds = $param["ExcludeInstanceIds"];
        }

        if (array_key_exists("AutoInclude",$param) and $param["AutoInclude"] !== null) {
            $this->AutoInclude = $param["AutoInclude"];
        }
    }
}
