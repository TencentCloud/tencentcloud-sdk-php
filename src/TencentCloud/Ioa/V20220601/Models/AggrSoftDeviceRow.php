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
 * @method string getDeviceName() 获取<p>终端名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeviceName(string $DeviceName) 设置<p>终端名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLastLoginAccount() 获取<p>最近登录账号</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastLoginAccount(string $LastLoginAccount) 设置<p>最近登录账号</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDeviceUserName() 获取<p>终端用户名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeviceUserName(string $DeviceUserName) 设置<p>终端用户名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVersion() 获取<p>软件版本</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVersion(string $Version) 设置<p>软件版本</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPiracyRisk() 获取<p>是否盗版</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPiracyRisk(integer $PiracyRisk) 设置<p>是否盗版</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPiracyReason() 获取<p>盗版原因</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPiracyReason(string $PiracyReason) 设置<p>盗版原因</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstallTime() 获取<p>安装时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstallTime(string $InstallTime) 设置<p>安装时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserPath() 获取<p>用户目录</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserPath(string $UserPath) 设置<p>用户目录</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserGroup() 获取<p>所在分组</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserGroup(string $UserGroup) 设置<p>所在分组</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIP() 获取<p>IP</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIP(string $IP) 设置<p>IP</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMAC() 获取<p>MAC</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMAC(string $MAC) 设置<p>MAC</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUseTime() 获取<p>使用时长</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUseTime(integer $UseTime) 设置<p>使用时长</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDeviceId() 获取<p>设备ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeviceId(integer $DeviceId) 设置<p>设备ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFullSoftName() 获取<p>软件全名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFullSoftName(string $FullSoftName) 设置<p>软件全名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getId() 获取<p>数据ID（唯一）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(integer $Id) 设置<p>数据ID（唯一）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNewVersion() 获取<p>该终端此款软件可升级到的目标版本号</p>
 * @method void setNewVersion(string $NewVersion) 设置<p>该终端此款软件可升级到的目标版本号</p>
 * @method integer getUpgradeSoftId() 获取<p>该软件对应运营配置的可升级id</p>
 * @method void setUpgradeSoftId(integer $UpgradeSoftId) 设置<p>该软件对应运营配置的可升级id</p>
 * @method string getRemarkName() 获取<p>终端备注名</p>
 * @method void setRemarkName(string $RemarkName) 设置<p>终端备注名</p>
 * @method integer getSoftwareId() 获取<p>软件id</p>
 * @method void setSoftwareId(integer $SoftwareId) 设置<p>软件id</p>
 * @method integer getOsType() 获取<p>0:win 2:mac</p>
 * @method void setOsType(integer $OsType) 设置<p>0:win 2:mac</p>
 * @method string getAssetType() 获取<p>所有权</p>
 * @method void setAssetType(string $AssetType) 设置<p>所有权</p>
 */
class AggrSoftDeviceRow extends AbstractModel
{
    /**
     * @var string <p>终端名</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeviceName;

    /**
     * @var string <p>最近登录账号</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastLoginAccount;

    /**
     * @var string <p>终端用户名</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeviceUserName;

    /**
     * @var string <p>软件版本</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Version;

    /**
     * @var integer <p>是否盗版</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PiracyRisk;

    /**
     * @var string <p>盗版原因</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PiracyReason;

    /**
     * @var string <p>安装时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstallTime;

    /**
     * @var string <p>用户目录</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserPath;

    /**
     * @var string <p>所在分组</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserGroup;

    /**
     * @var string <p>IP</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IP;

    /**
     * @var string <p>MAC</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MAC;

    /**
     * @var integer <p>使用时长</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UseTime;

    /**
     * @var integer <p>设备ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeviceId;

    /**
     * @var string <p>软件全名</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FullSoftName;

    /**
     * @var integer <p>数据ID（唯一）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var string <p>该终端此款软件可升级到的目标版本号</p>
     */
    public $NewVersion;

    /**
     * @var integer <p>该软件对应运营配置的可升级id</p>
     */
    public $UpgradeSoftId;

    /**
     * @var string <p>终端备注名</p>
     */
    public $RemarkName;

    /**
     * @var integer <p>软件id</p>
     */
    public $SoftwareId;

    /**
     * @var integer <p>0:win 2:mac</p>
     */
    public $OsType;

    /**
     * @var string <p>所有权</p>
     */
    public $AssetType;

    /**
     * @param string $DeviceName <p>终端名</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LastLoginAccount <p>最近登录账号</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DeviceUserName <p>终端用户名</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Version <p>软件版本</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PiracyRisk <p>是否盗版</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PiracyReason <p>盗版原因</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstallTime <p>安装时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserPath <p>用户目录</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserGroup <p>所在分组</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IP <p>IP</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MAC <p>MAC</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $UseTime <p>使用时长</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DeviceId <p>设备ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FullSoftName <p>软件全名</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Id <p>数据ID（唯一）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NewVersion <p>该终端此款软件可升级到的目标版本号</p>
     * @param integer $UpgradeSoftId <p>该软件对应运营配置的可升级id</p>
     * @param string $RemarkName <p>终端备注名</p>
     * @param integer $SoftwareId <p>软件id</p>
     * @param integer $OsType <p>0:win 2:mac</p>
     * @param string $AssetType <p>所有权</p>
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

        if (array_key_exists("SoftwareId",$param) and $param["SoftwareId"] !== null) {
            $this->SoftwareId = $param["SoftwareId"];
        }

        if (array_key_exists("OsType",$param) and $param["OsType"] !== null) {
            $this->OsType = $param["OsType"];
        }

        if (array_key_exists("AssetType",$param) and $param["AssetType"] !== null) {
            $this->AssetType = $param["AssetType"];
        }
    }
}
