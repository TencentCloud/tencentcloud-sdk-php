<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * 子网资产
 *
 * @method string getAppId() 获取appid
 * @method void setAppId(string $AppId) 设置appid
 * @method string getUin() 获取uin
 * @method void setUin(string $Uin) 设置uin
 * @method string getAssetId() 获取资产ID
 * @method void setAssetId(string $AssetId) 设置资产ID
 * @method string getAssetName() 获取资产名
 * @method void setAssetName(string $AssetName) 设置资产名
 * @method string getRegion() 获取区域
 * @method void setRegion(string $Region) 设置区域
 * @method string getVpcId() 获取私有网络id
 * @method void setVpcId(string $VpcId) 设置私有网络id
 * @method string getVpcName() 获取私有网络名
 * @method void setVpcName(string $VpcName) 设置私有网络名
 * @method array getTag() 获取标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTag(array $Tag) 设置标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNick() 获取昵称
 * @method void setNick(string $Nick) 设置昵称
 * @method string getCIDR() 获取cidr
 * @method void setCIDR(string $CIDR) 设置cidr
 * @method string getZone() 获取可用区
 * @method void setZone(string $Zone) 设置可用区
 * @method integer getCVM() 获取cvm数
 * @method void setCVM(integer $CVM) 设置cvm数
 * @method integer getAvailableIp() 获取可用ip数
 * @method void setAvailableIp(integer $AvailableIp) 设置可用ip数
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method integer getConfigureRisk() 获取配置风险
 * @method void setConfigureRisk(integer $ConfigureRisk) 设置配置风险
 * @method integer getScanTask() 获取任务数
 * @method void setScanTask(integer $ScanTask) 设置任务数
 * @method string getLastScanTime() 获取最后扫描时间
 * @method void setLastScanTime(string $LastScanTime) 设置最后扫描时间
 * @method integer getIsCore() 获取是否核心
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsCore(integer $IsCore) 设置是否核心
注意：此字段可能返回 null，表示取不到有效值。
 */
class SubnetAsset extends AbstractModel
{
    /**
     * @var string appid
     */
    public $AppId;

    /**
     * @var string uin
     */
    public $Uin;

    /**
     * @var string 资产ID
     */
    public $AssetId;

    /**
     * @var string 资产名
     */
    public $AssetName;

    /**
     * @var string 区域
     */
    public $Region;

    /**
     * @var string 私有网络id
     */
    public $VpcId;

    /**
     * @var string 私有网络名
     */
    public $VpcName;

    /**
     * @var array 标签
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tag;

    /**
     * @var string 昵称
     */
    public $Nick;

    /**
     * @var string cidr
     */
    public $CIDR;

    /**
     * @var string 可用区
     */
    public $Zone;

    /**
     * @var integer cvm数
     */
    public $CVM;

    /**
     * @var integer 可用ip数
     */
    public $AvailableIp;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var integer 配置风险
     */
    public $ConfigureRisk;

    /**
     * @var integer 任务数
     */
    public $ScanTask;

    /**
     * @var string 最后扫描时间
     */
    public $LastScanTime;

    /**
     * @var integer 是否核心
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsCore;

    /**
     * @param string $AppId appid
     * @param string $Uin uin
     * @param string $AssetId 资产ID
     * @param string $AssetName 资产名
     * @param string $Region 区域
     * @param string $VpcId 私有网络id
     * @param string $VpcName 私有网络名
     * @param array $Tag 标签
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Nick 昵称
     * @param string $CIDR cidr
     * @param string $Zone 可用区
     * @param integer $CVM cvm数
     * @param integer $AvailableIp 可用ip数
     * @param string $CreateTime 创建时间
     * @param integer $ConfigureRisk 配置风险
     * @param integer $ScanTask 任务数
     * @param string $LastScanTime 最后扫描时间
     * @param integer $IsCore 是否核心
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("AssetId",$param) and $param["AssetId"] !== null) {
            $this->AssetId = $param["AssetId"];
        }

        if (array_key_exists("AssetName",$param) and $param["AssetName"] !== null) {
            $this->AssetName = $param["AssetName"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("VpcName",$param) and $param["VpcName"] !== null) {
            $this->VpcName = $param["VpcName"];
        }

        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = [];
            foreach ($param["Tag"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tag, $obj);
            }
        }

        if (array_key_exists("Nick",$param) and $param["Nick"] !== null) {
            $this->Nick = $param["Nick"];
        }

        if (array_key_exists("CIDR",$param) and $param["CIDR"] !== null) {
            $this->CIDR = $param["CIDR"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("CVM",$param) and $param["CVM"] !== null) {
            $this->CVM = $param["CVM"];
        }

        if (array_key_exists("AvailableIp",$param) and $param["AvailableIp"] !== null) {
            $this->AvailableIp = $param["AvailableIp"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ConfigureRisk",$param) and $param["ConfigureRisk"] !== null) {
            $this->ConfigureRisk = $param["ConfigureRisk"];
        }

        if (array_key_exists("ScanTask",$param) and $param["ScanTask"] !== null) {
            $this->ScanTask = $param["ScanTask"];
        }

        if (array_key_exists("LastScanTime",$param) and $param["LastScanTime"] !== null) {
            $this->LastScanTime = $param["LastScanTime"];
        }

        if (array_key_exists("IsCore",$param) and $param["IsCore"] !== null) {
            $this->IsCore = $param["IsCore"];
        }
    }
}
