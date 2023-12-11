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
 * 网卡资产
 *
 * @method string getAppId() 获取appid
 * @method void setAppId(string $AppId) 设置appid
 * @method string getUin() 获取uin
 * @method void setUin(string $Uin) 设置uin
 * @method string getAssetId() 获取资产ID
 * @method void setAssetId(string $AssetId) 设置资产ID
 * @method string getAssetName() 获取资产名
 * @method void setAssetName(string $AssetName) 设置资产名
 * @method string getAssetType() 获取资产类型
 * @method void setAssetType(string $AssetType) 设置资产类型
 * @method string getPrivateIp() 获取私有ip
 * @method void setPrivateIp(string $PrivateIp) 设置私有ip
 * @method string getPublicIp() 获取公网ip
 * @method void setPublicIp(string $PublicIp) 设置公网ip
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
 * @method string getOutboundPeakBandwidth() 获取出向峰值带宽
 * @method void setOutboundPeakBandwidth(string $OutboundPeakBandwidth) 设置出向峰值带宽
 * @method string getInboundPeakBandwidth() 获取入向峰值带宽
 * @method void setInboundPeakBandwidth(string $InboundPeakBandwidth) 设置入向峰值带宽
 * @method string getOutboundCumulativeFlow() 获取出站累计流量
 * @method void setOutboundCumulativeFlow(string $OutboundCumulativeFlow) 设置出站累计流量
 * @method string getInboundCumulativeFlow() 获取入站累计流量
 * @method void setInboundCumulativeFlow(string $InboundCumulativeFlow) 设置入站累计流量
 * @method integer getNetworkAttack() 获取网络攻击
 * @method void setNetworkAttack(integer $NetworkAttack) 设置网络攻击
 * @method integer getExposedPort() 获取暴露端口
 * @method void setExposedPort(integer $ExposedPort) 设置暴露端口
 * @method integer getExposedVUL() 获取暴露漏洞
 * @method void setExposedVUL(integer $ExposedVUL) 设置暴露漏洞
 * @method integer getConfigureRisk() 获取配置风险
 * @method void setConfigureRisk(integer $ConfigureRisk) 设置配置风险
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method integer getScanTask() 获取任务数
 * @method void setScanTask(integer $ScanTask) 设置任务数
 * @method string getLastScanTime() 获取最后扫描时间
 * @method void setLastScanTime(string $LastScanTime) 设置最后扫描时间
 * @method string getNick() 获取昵称
 * @method void setNick(string $Nick) 设置昵称
 * @method integer getIsCore() 获取是否核心
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsCore(integer $IsCore) 设置是否核心
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsNewAsset() 获取是否新资产 1新
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsNewAsset(integer $IsNewAsset) 设置是否新资产 1新
注意：此字段可能返回 null，表示取不到有效值。
 */
class NICAsset extends AbstractModel
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
     * @var string 资产类型
     */
    public $AssetType;

    /**
     * @var string 私有ip
     */
    public $PrivateIp;

    /**
     * @var string 公网ip
     */
    public $PublicIp;

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
     * @var string 出向峰值带宽
     */
    public $OutboundPeakBandwidth;

    /**
     * @var string 入向峰值带宽
     */
    public $InboundPeakBandwidth;

    /**
     * @var string 出站累计流量
     */
    public $OutboundCumulativeFlow;

    /**
     * @var string 入站累计流量
     */
    public $InboundCumulativeFlow;

    /**
     * @var integer 网络攻击
     */
    public $NetworkAttack;

    /**
     * @var integer 暴露端口
     */
    public $ExposedPort;

    /**
     * @var integer 暴露漏洞
     */
    public $ExposedVUL;

    /**
     * @var integer 配置风险
     */
    public $ConfigureRisk;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var integer 任务数
     */
    public $ScanTask;

    /**
     * @var string 最后扫描时间
     */
    public $LastScanTime;

    /**
     * @var string 昵称
     */
    public $Nick;

    /**
     * @var integer 是否核心
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsCore;

    /**
     * @var integer 是否新资产 1新
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsNewAsset;

    /**
     * @param string $AppId appid
     * @param string $Uin uin
     * @param string $AssetId 资产ID
     * @param string $AssetName 资产名
     * @param string $AssetType 资产类型
     * @param string $PrivateIp 私有ip
     * @param string $PublicIp 公网ip
     * @param string $Region 区域
     * @param string $VpcId 私有网络id
     * @param string $VpcName 私有网络名
     * @param array $Tag 标签
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OutboundPeakBandwidth 出向峰值带宽
     * @param string $InboundPeakBandwidth 入向峰值带宽
     * @param string $OutboundCumulativeFlow 出站累计流量
     * @param string $InboundCumulativeFlow 入站累计流量
     * @param integer $NetworkAttack 网络攻击
     * @param integer $ExposedPort 暴露端口
     * @param integer $ExposedVUL 暴露漏洞
     * @param integer $ConfigureRisk 配置风险
     * @param string $CreateTime 创建时间
     * @param integer $ScanTask 任务数
     * @param string $LastScanTime 最后扫描时间
     * @param string $Nick 昵称
     * @param integer $IsCore 是否核心
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsNewAsset 是否新资产 1新
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

        if (array_key_exists("AssetType",$param) and $param["AssetType"] !== null) {
            $this->AssetType = $param["AssetType"];
        }

        if (array_key_exists("PrivateIp",$param) and $param["PrivateIp"] !== null) {
            $this->PrivateIp = $param["PrivateIp"];
        }

        if (array_key_exists("PublicIp",$param) and $param["PublicIp"] !== null) {
            $this->PublicIp = $param["PublicIp"];
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

        if (array_key_exists("OutboundPeakBandwidth",$param) and $param["OutboundPeakBandwidth"] !== null) {
            $this->OutboundPeakBandwidth = $param["OutboundPeakBandwidth"];
        }

        if (array_key_exists("InboundPeakBandwidth",$param) and $param["InboundPeakBandwidth"] !== null) {
            $this->InboundPeakBandwidth = $param["InboundPeakBandwidth"];
        }

        if (array_key_exists("OutboundCumulativeFlow",$param) and $param["OutboundCumulativeFlow"] !== null) {
            $this->OutboundCumulativeFlow = $param["OutboundCumulativeFlow"];
        }

        if (array_key_exists("InboundCumulativeFlow",$param) and $param["InboundCumulativeFlow"] !== null) {
            $this->InboundCumulativeFlow = $param["InboundCumulativeFlow"];
        }

        if (array_key_exists("NetworkAttack",$param) and $param["NetworkAttack"] !== null) {
            $this->NetworkAttack = $param["NetworkAttack"];
        }

        if (array_key_exists("ExposedPort",$param) and $param["ExposedPort"] !== null) {
            $this->ExposedPort = $param["ExposedPort"];
        }

        if (array_key_exists("ExposedVUL",$param) and $param["ExposedVUL"] !== null) {
            $this->ExposedVUL = $param["ExposedVUL"];
        }

        if (array_key_exists("ConfigureRisk",$param) and $param["ConfigureRisk"] !== null) {
            $this->ConfigureRisk = $param["ConfigureRisk"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ScanTask",$param) and $param["ScanTask"] !== null) {
            $this->ScanTask = $param["ScanTask"];
        }

        if (array_key_exists("LastScanTime",$param) and $param["LastScanTime"] !== null) {
            $this->LastScanTime = $param["LastScanTime"];
        }

        if (array_key_exists("Nick",$param) and $param["Nick"] !== null) {
            $this->Nick = $param["Nick"];
        }

        if (array_key_exists("IsCore",$param) and $param["IsCore"] !== null) {
            $this->IsCore = $param["IsCore"];
        }

        if (array_key_exists("IsNewAsset",$param) and $param["IsNewAsset"] !== null) {
            $this->IsNewAsset = $param["IsNewAsset"];
        }
    }
}
