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
 * 按版本聚合后的软件列表
 *
 * @method integer getID() 获取ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setID(integer $ID) 设置ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取软件名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置软件名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPiracyRisk() 获取盗版风险
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPiracyRisk(integer $PiracyRisk) 设置盗版风险
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getOsType() 获取系统平台
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOsType(integer $OsType) 设置系统平台
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCorpName() 获取企业名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCorpName(string $CorpName) 设置企业名
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getInstalledDeviceNum() 获取安装设备数量(只支持32位)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstalledDeviceNum(integer $InstalledDeviceNum) 设置安装设备数量(只支持32位)
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPiracyInstalledDeviceNum() 获取盗版安装设备数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPiracyInstalledDeviceNum(integer $PiracyInstalledDeviceNum) 设置盗版安装设备数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getInstalledUserNum() 获取已安装用户数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstalledUserNum(integer $InstalledUserNum) 设置已安装用户数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPiracyInstalledUserNum() 获取盗版软件用户数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPiracyInstalledUserNum(integer $PiracyInstalledUserNum) 设置盗版软件用户数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAuthNum() 获取授权总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAuthNum(integer $AuthNum) 设置授权总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getGenuineRate() 获取正版率
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGenuineRate(float $GenuineRate) 设置正版率
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUpgradableDeviceNum() 获取有新版本可升级的设备数量
 * @method void setUpgradableDeviceNum(integer $UpgradableDeviceNum) 设置有新版本可升级的设备数量
 */
class AggrCategorySoftDetailRow extends AbstractModel
{
    /**
     * @var integer ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ID;

    /**
     * @var string 软件名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var integer 盗版风险
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PiracyRisk;

    /**
     * @var integer 系统平台
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OsType;

    /**
     * @var string 企业名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CorpName;

    /**
     * @var integer 安装设备数量(只支持32位)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstalledDeviceNum;

    /**
     * @var integer 盗版安装设备数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PiracyInstalledDeviceNum;

    /**
     * @var integer 已安装用户数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstalledUserNum;

    /**
     * @var integer 盗版软件用户数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PiracyInstalledUserNum;

    /**
     * @var integer 授权总数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AuthNum;

    /**
     * @var float 正版率
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GenuineRate;

    /**
     * @var integer 有新版本可升级的设备数量
     */
    public $UpgradableDeviceNum;

    /**
     * @param integer $ID ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 软件名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PiracyRisk 盗版风险
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $OsType 系统平台
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CorpName 企业名
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $InstalledDeviceNum 安装设备数量(只支持32位)
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PiracyInstalledDeviceNum 盗版安装设备数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $InstalledUserNum 已安装用户数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PiracyInstalledUserNum 盗版软件用户数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AuthNum 授权总数
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $GenuineRate 正版率
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $UpgradableDeviceNum 有新版本可升级的设备数量
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("PiracyRisk",$param) and $param["PiracyRisk"] !== null) {
            $this->PiracyRisk = $param["PiracyRisk"];
        }

        if (array_key_exists("OsType",$param) and $param["OsType"] !== null) {
            $this->OsType = $param["OsType"];
        }

        if (array_key_exists("CorpName",$param) and $param["CorpName"] !== null) {
            $this->CorpName = $param["CorpName"];
        }

        if (array_key_exists("InstalledDeviceNum",$param) and $param["InstalledDeviceNum"] !== null) {
            $this->InstalledDeviceNum = $param["InstalledDeviceNum"];
        }

        if (array_key_exists("PiracyInstalledDeviceNum",$param) and $param["PiracyInstalledDeviceNum"] !== null) {
            $this->PiracyInstalledDeviceNum = $param["PiracyInstalledDeviceNum"];
        }

        if (array_key_exists("InstalledUserNum",$param) and $param["InstalledUserNum"] !== null) {
            $this->InstalledUserNum = $param["InstalledUserNum"];
        }

        if (array_key_exists("PiracyInstalledUserNum",$param) and $param["PiracyInstalledUserNum"] !== null) {
            $this->PiracyInstalledUserNum = $param["PiracyInstalledUserNum"];
        }

        if (array_key_exists("AuthNum",$param) and $param["AuthNum"] !== null) {
            $this->AuthNum = $param["AuthNum"];
        }

        if (array_key_exists("GenuineRate",$param) and $param["GenuineRate"] !== null) {
            $this->GenuineRate = $param["GenuineRate"];
        }

        if (array_key_exists("UpgradableDeviceNum",$param) and $param["UpgradableDeviceNum"] !== null) {
            $this->UpgradableDeviceNum = $param["UpgradableDeviceNum"];
        }
    }
}
