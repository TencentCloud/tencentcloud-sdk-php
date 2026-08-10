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
 * @method integer getKBId() 获取<p>KB补丁ID</p>
 * @method void setKBId(integer $KBId) 设置<p>KB补丁ID</p>
 * @method string getInstanceId() 获取<p>主机实例ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>主机实例ID</p>
 * @method string getMachineName() 获取<p>主机名称</p>
 * @method void setMachineName(string $MachineName) 设置<p>主机名称</p>
 * @method string getMachineIp() 获取<p>主机IP</p>
 * @method void setMachineIp(string $MachineIp) 设置<p>主机IP</p>
 * @method string getPublicIp() 获取<p>公网IP</p>
 * @method void setPublicIp(string $PublicIp) 设置<p>公网IP</p>
 * @method string getOsName() 获取<p>操作系统名称</p>
 * @method void setOsName(string $OsName) 设置<p>操作系统名称</p>
 * @method string getMachineStatus() 获取<p>主机在线状态<br>枚举值：<br>ONLINE：在线<br>OFFLINE：离线</p>
 * @method void setMachineStatus(string $MachineStatus) 设置<p>主机在线状态<br>枚举值：<br>ONLINE：在线<br>OFFLINE：离线</p>
 * @method integer getSupportAutoFix() 获取<p>是否支持自动更新补丁<br>枚举值：<br>0：不支持<br>1：支持</p>
 * @method void setSupportAutoFix(integer $SupportAutoFix) 设置<p>是否支持自动更新补丁<br>枚举值：<br>0：不支持<br>1：支持</p>
 * @method integer getFixStatus() 获取<p>当前修复状态<br>枚举值：<br>0：未修复<br>1：修复中<br>2：修复失败<br>3：修复成功<br>4：修复超时</p>
 * @method void setFixStatus(integer $FixStatus) 设置<p>当前修复状态<br>枚举值：<br>0：未修复<br>1：修复中<br>2：修复失败<br>3：修复成功<br>4：修复超时</p>
 * @method string getLatestFixTime() 获取<p>最近一次修复时间<br>参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）</p>
 * @method void setLatestFixTime(string $LatestFixTime) 设置<p>最近一次修复时间<br>参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）</p>
 * @method string getNotFixableReason() 获取<p>不可修复原因，SupportAutoFix为0时返回</p>
 * @method void setNotFixableReason(string $NotFixableReason) 设置<p>不可修复原因，SupportAutoFix为0时返回</p>
 * @method array getTagItems() 获取<p>资产标签列表</p>
 * @method void setTagItems(array $TagItems) 设置<p>资产标签列表</p>
 * @method integer getAppId() 获取<p>所属账号AppId</p>
 * @method void setAppId(integer $AppId) 设置<p>所属账号AppId</p>
 * @method string getPayVersion() 获取<p>付费版本信息<br>枚举值：<br>BASIC：基础版<br>PRO：专业版<br>ULTIMATE：旗舰版</p>
 * @method void setPayVersion(string $PayVersion) 设置<p>付费版本信息<br>枚举值：<br>BASIC：基础版<br>PRO：专业版<br>ULTIMATE：旗舰版</p>
 */
class KBUpdateMachineItem extends AbstractModel
{
    /**
     * @var integer <p>KB补丁ID</p>
     */
    public $KBId;

    /**
     * @var string <p>主机实例ID</p>
     */
    public $InstanceId;

    /**
     * @var string <p>主机名称</p>
     */
    public $MachineName;

    /**
     * @var string <p>主机IP</p>
     */
    public $MachineIp;

    /**
     * @var string <p>公网IP</p>
     */
    public $PublicIp;

    /**
     * @var string <p>操作系统名称</p>
     */
    public $OsName;

    /**
     * @var string <p>主机在线状态<br>枚举值：<br>ONLINE：在线<br>OFFLINE：离线</p>
     */
    public $MachineStatus;

    /**
     * @var integer <p>是否支持自动更新补丁<br>枚举值：<br>0：不支持<br>1：支持</p>
     */
    public $SupportAutoFix;

    /**
     * @var integer <p>当前修复状态<br>枚举值：<br>0：未修复<br>1：修复中<br>2：修复失败<br>3：修复成功<br>4：修复超时</p>
     */
    public $FixStatus;

    /**
     * @var string <p>最近一次修复时间<br>参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）</p>
     */
    public $LatestFixTime;

    /**
     * @var string <p>不可修复原因，SupportAutoFix为0时返回</p>
     */
    public $NotFixableReason;

    /**
     * @var array <p>资产标签列表</p>
     */
    public $TagItems;

    /**
     * @var integer <p>所属账号AppId</p>
     */
    public $AppId;

    /**
     * @var string <p>付费版本信息<br>枚举值：<br>BASIC：基础版<br>PRO：专业版<br>ULTIMATE：旗舰版</p>
     */
    public $PayVersion;

    /**
     * @param integer $KBId <p>KB补丁ID</p>
     * @param string $InstanceId <p>主机实例ID</p>
     * @param string $MachineName <p>主机名称</p>
     * @param string $MachineIp <p>主机IP</p>
     * @param string $PublicIp <p>公网IP</p>
     * @param string $OsName <p>操作系统名称</p>
     * @param string $MachineStatus <p>主机在线状态<br>枚举值：<br>ONLINE：在线<br>OFFLINE：离线</p>
     * @param integer $SupportAutoFix <p>是否支持自动更新补丁<br>枚举值：<br>0：不支持<br>1：支持</p>
     * @param integer $FixStatus <p>当前修复状态<br>枚举值：<br>0：未修复<br>1：修复中<br>2：修复失败<br>3：修复成功<br>4：修复超时</p>
     * @param string $LatestFixTime <p>最近一次修复时间<br>参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）</p>
     * @param string $NotFixableReason <p>不可修复原因，SupportAutoFix为0时返回</p>
     * @param array $TagItems <p>资产标签列表</p>
     * @param integer $AppId <p>所属账号AppId</p>
     * @param string $PayVersion <p>付费版本信息<br>枚举值：<br>BASIC：基础版<br>PRO：专业版<br>ULTIMATE：旗舰版</p>
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
