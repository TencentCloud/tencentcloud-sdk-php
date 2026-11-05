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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 可更新补丁主机信息
 *
 * @method integer getKBId() 获取KB补丁ID
 * @method void setKBId(integer $KBId) 设置KB补丁ID
 * @method string getInstanceId() 获取主机实例ID
 * @method void setInstanceId(string $InstanceId) 设置主机实例ID
 * @method string getMachineName() 获取主机名称
 * @method void setMachineName(string $MachineName) 设置主机名称
 * @method string getMachineIp() 获取主机IP
 * @method void setMachineIp(string $MachineIp) 设置主机IP
 * @method string getPublicIp() 获取公网IP
 * @method void setPublicIp(string $PublicIp) 设置公网IP
 * @method string getOsName() 获取操作系统名称
 * @method void setOsName(string $OsName) 设置操作系统名称
 * @method string getMachineStatus() 获取主机在线状态
枚举值：
ONLINE：在线
OFFLINE：离线
 * @method void setMachineStatus(string $MachineStatus) 设置主机在线状态
枚举值：
ONLINE：在线
OFFLINE：离线
 * @method string getHostStatus() 获取主机运行状态
枚举值：
RUNNING：运行中
STOPPED：已停止
EXPIRED：待回收
 * @method void setHostStatus(string $HostStatus) 设置主机运行状态
枚举值：
RUNNING：运行中
STOPPED：已停止
EXPIRED：待回收
 * @method integer getSupportAutoFix() 获取是否支持自动更新补丁
枚举值：
0：不支持
1：支持
 * @method void setSupportAutoFix(integer $SupportAutoFix) 设置是否支持自动更新补丁
枚举值：
0：不支持
1：支持
 * @method integer getFixStatus() 获取当前修复状态
枚举值：
0：未修复
1：修复中
2：修复失败
3：修复成功
4：修复超时
 * @method void setFixStatus(integer $FixStatus) 设置当前修复状态
枚举值：
0：未修复
1：修复中
2：修复失败
3：修复成功
4：修复超时
 * @method string getLatestFixTime() 获取最近一次修复时间
参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）
 * @method void setLatestFixTime(string $LatestFixTime) 设置最近一次修复时间
参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）
 * @method string getNotFixableReason() 获取不可修复原因，SupportAutoFix为0时返回
 * @method void setNotFixableReason(string $NotFixableReason) 设置不可修复原因，SupportAutoFix为0时返回
 * @method VulFixableMachineAction getNotFixableAction() 获取不可修复原因关联动作，SupportAutoFix为0且存在可引导动作时返回
 * @method void setNotFixableAction(VulFixableMachineAction $NotFixableAction) 设置不可修复原因关联动作，SupportAutoFix为0且存在可引导动作时返回
 * @method array getTagItems() 获取资产标签列表
 * @method void setTagItems(array $TagItems) 设置资产标签列表
 * @method integer getAppId() 获取所属账号AppId
 * @method void setAppId(integer $AppId) 设置所属账号AppId
 * @method string getPayVersion() 获取付费版本信息
枚举值：
BASIC：基础版
PRO：专业版
ULTIMATE：旗舰版
PRO_LH：轻量版
 * @method void setPayVersion(string $PayVersion) 设置付费版本信息
枚举值：
BASIC：基础版
PRO：专业版
ULTIMATE：旗舰版
PRO_LH：轻量版
 */
class KBUpdateMachineItem extends AbstractModel
{
    /**
     * @var integer KB补丁ID
     */
    public $KBId;

    /**
     * @var string 主机实例ID
     */
    public $InstanceId;

    /**
     * @var string 主机名称
     */
    public $MachineName;

    /**
     * @var string 主机IP
     */
    public $MachineIp;

    /**
     * @var string 公网IP
     */
    public $PublicIp;

    /**
     * @var string 操作系统名称
     */
    public $OsName;

    /**
     * @var string 主机在线状态
枚举值：
ONLINE：在线
OFFLINE：离线
     */
    public $MachineStatus;

    /**
     * @var string 主机运行状态
枚举值：
RUNNING：运行中
STOPPED：已停止
EXPIRED：待回收
     */
    public $HostStatus;

    /**
     * @var integer 是否支持自动更新补丁
枚举值：
0：不支持
1：支持
     */
    public $SupportAutoFix;

    /**
     * @var integer 当前修复状态
枚举值：
0：未修复
1：修复中
2：修复失败
3：修复成功
4：修复超时
     */
    public $FixStatus;

    /**
     * @var string 最近一次修复时间
参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）
     */
    public $LatestFixTime;

    /**
     * @var string 不可修复原因，SupportAutoFix为0时返回
     */
    public $NotFixableReason;

    /**
     * @var VulFixableMachineAction 不可修复原因关联动作，SupportAutoFix为0且存在可引导动作时返回
     */
    public $NotFixableAction;

    /**
     * @var array 资产标签列表
     */
    public $TagItems;

    /**
     * @var integer 所属账号AppId
     */
    public $AppId;

    /**
     * @var string 付费版本信息
枚举值：
BASIC：基础版
PRO：专业版
ULTIMATE：旗舰版
PRO_LH：轻量版
     */
    public $PayVersion;

    /**
     * @param integer $KBId KB补丁ID
     * @param string $InstanceId 主机实例ID
     * @param string $MachineName 主机名称
     * @param string $MachineIp 主机IP
     * @param string $PublicIp 公网IP
     * @param string $OsName 操作系统名称
     * @param string $MachineStatus 主机在线状态
枚举值：
ONLINE：在线
OFFLINE：离线
     * @param string $HostStatus 主机运行状态
枚举值：
RUNNING：运行中
STOPPED：已停止
EXPIRED：待回收
     * @param integer $SupportAutoFix 是否支持自动更新补丁
枚举值：
0：不支持
1：支持
     * @param integer $FixStatus 当前修复状态
枚举值：
0：未修复
1：修复中
2：修复失败
3：修复成功
4：修复超时
     * @param string $LatestFixTime 最近一次修复时间
参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）
     * @param string $NotFixableReason 不可修复原因，SupportAutoFix为0时返回
     * @param VulFixableMachineAction $NotFixableAction 不可修复原因关联动作，SupportAutoFix为0且存在可引导动作时返回
     * @param array $TagItems 资产标签列表
     * @param integer $AppId 所属账号AppId
     * @param string $PayVersion 付费版本信息
枚举值：
BASIC：基础版
PRO：专业版
ULTIMATE：旗舰版
PRO_LH：轻量版
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
        if (array_key_exists("KBId",$param) and $param["KBId"] !== null) {
            $this->KBId = $param["KBId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("MachineName",$param) and $param["MachineName"] !== null) {
            $this->MachineName = $param["MachineName"];
        }

        if (array_key_exists("MachineIp",$param) and $param["MachineIp"] !== null) {
            $this->MachineIp = $param["MachineIp"];
        }

        if (array_key_exists("PublicIp",$param) and $param["PublicIp"] !== null) {
            $this->PublicIp = $param["PublicIp"];
        }

        if (array_key_exists("OsName",$param) and $param["OsName"] !== null) {
            $this->OsName = $param["OsName"];
        }

        if (array_key_exists("MachineStatus",$param) and $param["MachineStatus"] !== null) {
            $this->MachineStatus = $param["MachineStatus"];
        }

        if (array_key_exists("HostStatus",$param) and $param["HostStatus"] !== null) {
            $this->HostStatus = $param["HostStatus"];
        }

        if (array_key_exists("SupportAutoFix",$param) and $param["SupportAutoFix"] !== null) {
            $this->SupportAutoFix = $param["SupportAutoFix"];
        }

        if (array_key_exists("FixStatus",$param) and $param["FixStatus"] !== null) {
            $this->FixStatus = $param["FixStatus"];
        }

        if (array_key_exists("LatestFixTime",$param) and $param["LatestFixTime"] !== null) {
            $this->LatestFixTime = $param["LatestFixTime"];
        }

        if (array_key_exists("NotFixableReason",$param) and $param["NotFixableReason"] !== null) {
            $this->NotFixableReason = $param["NotFixableReason"];
        }

        if (array_key_exists("NotFixableAction",$param) and $param["NotFixableAction"] !== null) {
            $this->NotFixableAction = new VulFixableMachineAction();
            $this->NotFixableAction->deserialize($param["NotFixableAction"]);
        }

        if (array_key_exists("TagItems",$param) and $param["TagItems"] !== null) {
            $this->TagItems = [];
            foreach ($param["TagItems"] as $key => $value){
                $obj = new MiniTagItem();
                $obj->deserialize($value);
                array_push($this->TagItems, $obj);
            }
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("PayVersion",$param) and $param["PayVersion"] !== null) {
            $this->PayVersion = $param["PayVersion"];
        }
    }
}
