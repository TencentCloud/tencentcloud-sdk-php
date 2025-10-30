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
namespace TencentCloud\Ioa\V20220601\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 聚合软件的已安装终端列表中的一行数据
 *
 * @method string getDeviceName() 获取终端名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeviceName(string $DeviceName) 设置终端名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLastLoginAccount() 获取最近登录账号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastLoginAccount(string $LastLoginAccount) 设置最近登录账号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDeviceUserName() 获取终端用户名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeviceUserName(string $DeviceUserName) 设置终端用户名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVersion() 获取软件版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVersion(string $Version) 设置软件版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPiracyRisk() 获取是否盗版
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPiracyRisk(integer $PiracyRisk) 设置是否盗版
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPiracyReason() 获取盗版原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPiracyReason(string $PiracyReason) 设置盗版原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstallTime() 获取安装时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstallTime(string $InstallTime) 设置安装时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserPath() 获取用户目录
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserPath(string $UserPath) 设置用户目录
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserGroup() 获取所在分组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserGroup(string $UserGroup) 设置所在分组
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIP() 获取IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIP(string $IP) 设置IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMAC() 获取MAC
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMAC(string $MAC) 设置MAC
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUseTime() 获取使用时长
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUseTime(integer $UseTime) 设置使用时长
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDeviceId() 获取设备ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeviceId(integer $DeviceId) 设置设备ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFullSoftName() 获取软件全名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFullSoftName(string $FullSoftName) 设置软件全名
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getId() 获取数据ID（唯一）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(integer $Id) 设置数据ID（唯一）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNewVersion() 获取该终端此款软件可升级到的目标版本号
 * @method void setNewVersion(string $NewVersion) 设置该终端此款软件可升级到的目标版本号
 * @method integer getUpgradeSoftId() 获取该软件对应运营配置的可升级id
 * @method void setUpgradeSoftId(integer $UpgradeSoftId) 设置该软件对应运营配置的可升级id
 * @method string getRemarkName() 获取终端备注名
 * @method void setRemarkName(string $RemarkName) 设置终端备注名
 */
class AggrSoftDeviceRow extends AbstractModel
{
    /**
     * @var string 终端名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeviceName;

    /**
     * @var string 最近登录账号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastLoginAccount;

    /**
     * @var string 终端用户名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeviceUserName;

    /**
     * @var string 软件版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Version;

    /**
     * @var integer 是否盗版
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PiracyRisk;

    /**
     * @var string 盗版原因
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PiracyReason;

    /**
     * @var string 安装时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstallTime;

    /**
     * @var string 用户目录
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserPath;

    /**
     * @var string 所在分组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserGroup;

    /**
     * @var string IP
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IP;

    /**
     * @var string MAC
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MAC;

    /**
     * @var integer 使用时长
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UseTime;

    /**
     * @var integer 设备ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeviceId;

    /**
     * @var string 软件全名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FullSoftName;

    /**
     * @var integer 数据ID（唯一）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var string 该终端此款软件可升级到的目标版本号
     */
    public $NewVersion;

    /**
     * @var integer 该软件对应运营配置的可升级id
     */
    public $UpgradeSoftId;

    /**
     * @var string 终端备注名
     */
    public $RemarkName;

    /**
     * @param string $DeviceName 终端名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LastLoginAccount 最近登录账号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DeviceUserName 终端用户名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Version 软件版本
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PiracyRisk 是否盗版
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PiracyReason 盗版原因
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstallTime 安装时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserPath 用户目录
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserGroup 所在分组
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IP IP
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MAC MAC
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $UseTime 使用时长
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DeviceId 设备ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FullSoftName 软件全名
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Id 数据ID（唯一）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NewVersion 该终端此款软件可升级到的目标版本号
     * @param integer $UpgradeSoftId 该软件对应运营配置的可升级id
     * @param string $RemarkName 终端备注名
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
        if (array_key_exists("DeviceName",$param) and $param["DeviceName"] !== null) {
            $this->DeviceName = $param["DeviceName"];
        }

        if (array_key_exists("LastLoginAccount",$param) and $param["LastLoginAccount"] !== null) {
            $this->LastLoginAccount = $param["LastLoginAccount"];
        }

        if (array_key_exists("DeviceUserName",$param) and $param["DeviceUserName"] !== null) {
            $this->DeviceUserName = $param["DeviceUserName"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("PiracyRisk",$param) and $param["PiracyRisk"] !== null) {
            $this->PiracyRisk = $param["PiracyRisk"];
        }

        if (array_key_exists("PiracyReason",$param) and $param["PiracyReason"] !== null) {
            $this->PiracyReason = $param["PiracyReason"];
        }

        if (array_key_exists("InstallTime",$param) and $param["InstallTime"] !== null) {
            $this->InstallTime = $param["InstallTime"];
        }

        if (array_key_exists("UserPath",$param) and $param["UserPath"] !== null) {
            $this->UserPath = $param["UserPath"];
        }

        if (array_key_exists("UserGroup",$param) and $param["UserGroup"] !== null) {
            $this->UserGroup = $param["UserGroup"];
        }

        if (array_key_exists("IP",$param) and $param["IP"] !== null) {
            $this->IP = $param["IP"];
        }

        if (array_key_exists("MAC",$param) and $param["MAC"] !== null) {
            $this->MAC = $param["MAC"];
        }

        if (array_key_exists("UseTime",$param) and $param["UseTime"] !== null) {
            $this->UseTime = $param["UseTime"];
        }

        if (array_key_exists("DeviceId",$param) and $param["DeviceId"] !== null) {
            $this->DeviceId = $param["DeviceId"];
        }

        if (array_key_exists("FullSoftName",$param) and $param["FullSoftName"] !== null) {
            $this->FullSoftName = $param["FullSoftName"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("NewVersion",$param) and $param["NewVersion"] !== null) {
            $this->NewVersion = $param["NewVersion"];
        }

        if (array_key_exists("UpgradeSoftId",$param) and $param["UpgradeSoftId"] !== null) {
            $this->UpgradeSoftId = $param["UpgradeSoftId"];
        }

        if (array_key_exists("RemarkName",$param) and $param["RemarkName"] !== null) {
            $this->RemarkName = $param["RemarkName"];
        }
    }
}
