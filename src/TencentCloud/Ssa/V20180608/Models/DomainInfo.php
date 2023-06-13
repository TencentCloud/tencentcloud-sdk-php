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
namespace TencentCloud\Ssa\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 域名列表
 *
 * @method string getDomain() 获取域名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDomain(string $Domain) 设置域名
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getResolveAddr() 获取解析地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResolveAddr(array $ResolveAddr) 设置解析地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getRegion() 获取地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegion(array $Region) 设置地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAssetType() 获取资产类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAssetType(array $AssetType) 设置资产类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRiskVulCount() 获取漏洞风险
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRiskVulCount(integer $RiskVulCount) 设置漏洞风险
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSensitiveCount() 获取敏感内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSensitiveCount(integer $SensitiveCount) 设置敏感内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getHorseLinkCount() 获取挂马暗链
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHorseLinkCount(integer $HorseLinkCount) 设置挂马暗链
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getWebModifyCount() 获取网页篡改
 * @method void setWebModifyCount(integer $WebModifyCount) 设置网页篡改
 * @method string getScanTime() 获取上次扫描时间
 * @method void setScanTime(string $ScanTime) 设置上次扫描时间
 * @method string getDiscoverTime() 获取最近发现时间
 * @method void setDiscoverTime(string $DiscoverTime) 设置最近发现时间
 * @method integer getScanTaskCount() 获取扫描次数
 * @method void setScanTaskCount(integer $ScanTaskCount) 设置扫描次数
 * @method integer getPortRisk() 获取端口
 * @method void setPortRisk(integer $PortRisk) 设置端口
 * @method integer getWeekPwdCount() 获取弱口令
 * @method void setWeekPwdCount(integer $WeekPwdCount) 设置弱口令
 * @method string getAssetLocation() 获取-
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAssetLocation(string $AssetLocation) 设置-
注意：此字段可能返回 null，表示取不到有效值。
 */
class DomainInfo extends AbstractModel
{
    /**
     * @var string 域名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Domain;

    /**
     * @var array 解析地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResolveAddr;

    /**
     * @var array 地域
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Region;

    /**
     * @var array 资产类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AssetType;

    /**
     * @var integer 漏洞风险
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RiskVulCount;

    /**
     * @var integer 敏感内容
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SensitiveCount;

    /**
     * @var integer 挂马暗链
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HorseLinkCount;

    /**
     * @var integer 网页篡改
     */
    public $WebModifyCount;

    /**
     * @var string 上次扫描时间
     */
    public $ScanTime;

    /**
     * @var string 最近发现时间
     */
    public $DiscoverTime;

    /**
     * @var integer 扫描次数
     */
    public $ScanTaskCount;

    /**
     * @var integer 端口
     */
    public $PortRisk;

    /**
     * @var integer 弱口令
     */
    public $WeekPwdCount;

    /**
     * @var string -
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AssetLocation;

    /**
     * @param string $Domain 域名
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ResolveAddr 解析地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Region 地域
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AssetType 资产类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RiskVulCount 漏洞风险
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SensitiveCount 敏感内容
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $HorseLinkCount 挂马暗链
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $WebModifyCount 网页篡改
     * @param string $ScanTime 上次扫描时间
     * @param string $DiscoverTime 最近发现时间
     * @param integer $ScanTaskCount 扫描次数
     * @param integer $PortRisk 端口
     * @param integer $WeekPwdCount 弱口令
     * @param string $AssetLocation -
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("ResolveAddr",$param) and $param["ResolveAddr"] !== null) {
            $this->ResolveAddr = $param["ResolveAddr"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("AssetType",$param) and $param["AssetType"] !== null) {
            $this->AssetType = $param["AssetType"];
        }

        if (array_key_exists("RiskVulCount",$param) and $param["RiskVulCount"] !== null) {
            $this->RiskVulCount = $param["RiskVulCount"];
        }

        if (array_key_exists("SensitiveCount",$param) and $param["SensitiveCount"] !== null) {
            $this->SensitiveCount = $param["SensitiveCount"];
        }

        if (array_key_exists("HorseLinkCount",$param) and $param["HorseLinkCount"] !== null) {
            $this->HorseLinkCount = $param["HorseLinkCount"];
        }

        if (array_key_exists("WebModifyCount",$param) and $param["WebModifyCount"] !== null) {
            $this->WebModifyCount = $param["WebModifyCount"];
        }

        if (array_key_exists("ScanTime",$param) and $param["ScanTime"] !== null) {
            $this->ScanTime = $param["ScanTime"];
        }

        if (array_key_exists("DiscoverTime",$param) and $param["DiscoverTime"] !== null) {
            $this->DiscoverTime = $param["DiscoverTime"];
        }

        if (array_key_exists("ScanTaskCount",$param) and $param["ScanTaskCount"] !== null) {
            $this->ScanTaskCount = $param["ScanTaskCount"];
        }

        if (array_key_exists("PortRisk",$param) and $param["PortRisk"] !== null) {
            $this->PortRisk = $param["PortRisk"];
        }

        if (array_key_exists("WeekPwdCount",$param) and $param["WeekPwdCount"] !== null) {
            $this->WeekPwdCount = $param["WeekPwdCount"];
        }

        if (array_key_exists("AssetLocation",$param) and $param["AssetLocation"] !== null) {
            $this->AssetLocation = $param["AssetLocation"];
        }
    }
}
