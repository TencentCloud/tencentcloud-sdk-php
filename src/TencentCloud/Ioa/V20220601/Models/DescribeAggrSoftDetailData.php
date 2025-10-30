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
 * 聚合软件详情数据
 *
 * @method string getName() 获取软件名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置软件名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getOsType() 获取平台
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOsType(integer $OsType) 设置平台
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPiracyRisk() 获取盗版风险
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPiracyRisk(integer $PiracyRisk) 设置盗版风险
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCorp() 获取厂商
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCorp(string $Corp) 设置厂商
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSoftVersionDist() 获取已安装版本分布
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSoftVersionDist(array $SoftVersionDist) 设置已安装版本分布
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPiracyVersionDist() 获取盗版版本安装
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPiracyVersionDist(array $PiracyVersionDist) 设置盗版版本安装
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getInstalledDeviceNum() 获取安装设备数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstalledDeviceNum(integer $InstalledDeviceNum) 设置安装设备数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPiracyInstalledDeviceNum() 获取盗版安装设备数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPiracyInstalledDeviceNum(integer $PiracyInstalledDeviceNum) 设置盗版安装设备数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getInstalledUserNum() 获取安装用户数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstalledUserNum(integer $InstalledUserNum) 设置安装用户数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPiracyInstalledUserNum() 获取盗版安装用户数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPiracyInstalledUserNum(integer $PiracyInstalledUserNum) 设置盗版安装用户数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAuthNum() 获取授权数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAuthNum(integer $AuthNum) 设置授权数
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getGenuineRate() 获取正版率
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGenuineRate(float $GenuineRate) 设置正版率
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUpgradableDeviceNum() 获取有新版本可升级的设备数量
 * @method void setUpgradableDeviceNum(integer $UpgradableDeviceNum) 设置有新版本可升级的设备数量
 * @method array getUpgradableVersions() 获取当前可升级的最新版本信息, 每一项均为json字符串
 * @method void setUpgradableVersions(array $UpgradableVersions) 设置当前可升级的最新版本信息, 每一项均为json字符串
 */
class DescribeAggrSoftDetailData extends AbstractModel
{
    /**
     * @var string 软件名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var integer 平台
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OsType;

    /**
     * @var integer 盗版风险
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PiracyRisk;

    /**
     * @var string 厂商
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Corp;

    /**
     * @var array 已安装版本分布
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SoftVersionDist;

    /**
     * @var array 盗版版本安装
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PiracyVersionDist;

    /**
     * @var integer 安装设备数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstalledDeviceNum;

    /**
     * @var integer 盗版安装设备数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PiracyInstalledDeviceNum;

    /**
     * @var integer 安装用户数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstalledUserNum;

    /**
     * @var integer 盗版安装用户数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PiracyInstalledUserNum;

    /**
     * @var integer 授权数
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
     * @var array 当前可升级的最新版本信息, 每一项均为json字符串
     */
    public $UpgradableVersions;

    /**
     * @param string $Name 软件名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $OsType 平台
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PiracyRisk 盗版风险
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Corp 厂商
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SoftVersionDist 已安装版本分布
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $PiracyVersionDist 盗版版本安装
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $InstalledDeviceNum 安装设备数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PiracyInstalledDeviceNum 盗版安装设备数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $InstalledUserNum 安装用户数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PiracyInstalledUserNum 盗版安装用户数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AuthNum 授权数
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $GenuineRate 正版率
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $UpgradableDeviceNum 有新版本可升级的设备数量
     * @param array $UpgradableVersions 当前可升级的最新版本信息, 每一项均为json字符串
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("OsType",$param) and $param["OsType"] !== null) {
            $this->OsType = $param["OsType"];
        }

        if (array_key_exists("PiracyRisk",$param) and $param["PiracyRisk"] !== null) {
            $this->PiracyRisk = $param["PiracyRisk"];
        }

        if (array_key_exists("Corp",$param) and $param["Corp"] !== null) {
            $this->Corp = $param["Corp"];
        }

        if (array_key_exists("SoftVersionDist",$param) and $param["SoftVersionDist"] !== null) {
            $this->SoftVersionDist = [];
            foreach ($param["SoftVersionDist"] as $key => $value){
                $obj = new SoftVersionAndNum();
                $obj->deserialize($value);
                array_push($this->SoftVersionDist, $obj);
            }
        }

        if (array_key_exists("PiracyVersionDist",$param) and $param["PiracyVersionDist"] !== null) {
            $this->PiracyVersionDist = [];
            foreach ($param["PiracyVersionDist"] as $key => $value){
                $obj = new SoftVersionAndNum();
                $obj->deserialize($value);
                array_push($this->PiracyVersionDist, $obj);
            }
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

        if (array_key_exists("UpgradableVersions",$param) and $param["UpgradableVersions"] !== null) {
            $this->UpgradableVersions = $param["UpgradableVersions"];
        }
    }
}
