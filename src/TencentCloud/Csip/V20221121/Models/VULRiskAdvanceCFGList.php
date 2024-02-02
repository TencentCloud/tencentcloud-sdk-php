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
 * 漏洞风险高级配置列表
 *
 * @method string getRiskId() 获取风险ID
 * @method void setRiskId(string $RiskId) 设置风险ID
 * @method string getVULName() 获取漏洞名称
 * @method void setVULName(string $VULName) 设置漏洞名称
 * @method string getRiskLevel() 获取风险等级
 * @method void setRiskLevel(string $RiskLevel) 设置风险等级
 * @method string getCheckFrom() 获取识别来源
 * @method void setCheckFrom(string $CheckFrom) 设置识别来源
 * @method integer getEnable() 获取是否启用，1-启用，0-禁用
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnable(integer $Enable) 设置是否启用，1-启用，0-禁用
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVULType() 获取风险类型
 * @method void setVULType(string $VULType) 设置风险类型
 * @method string getImpactVersion() 获取影响版本
 * @method void setImpactVersion(string $ImpactVersion) 设置影响版本
 * @method string getCVE() 获取CVE
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCVE(string $CVE) 设置CVE
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getVULTag() 获取漏洞标签
 * @method void setVULTag(array $VULTag) 设置漏洞标签
 * @method array getFixMethod() 获取修复方式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFixMethod(array $FixMethod) 设置修复方式
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getReleaseTime() 获取披露时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReleaseTime(string $ReleaseTime) 设置披露时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getEMGCVulType() 获取应急漏洞类型，1-应急漏洞，0-非应急漏洞
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEMGCVulType(integer $EMGCVulType) 设置应急漏洞类型，1-应急漏洞，0-非应急漏洞
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVULDescribe() 获取漏洞描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVULDescribe(string $VULDescribe) 设置漏洞描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getImpactComponent() 获取影响组件
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImpactComponent(string $ImpactComponent) 设置影响组件
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPayload() 获取漏洞Payload
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPayload(string $Payload) 设置漏洞Payload
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getReferences() 获取技术参考
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReferences(string $References) 设置技术参考
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCVSS() 获取cvss评分
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCVSS(string $CVSS) 设置cvss评分
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAttackHeat() 获取攻击热度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAttackHeat(string $AttackHeat) 设置攻击热度
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getServiceSupport() 获取安全产品支持情况
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceSupport(array $ServiceSupport) 设置安全产品支持情况
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRecentScanTime() 获取最新检测时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRecentScanTime(string $RecentScanTime) 设置最新检测时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class VULRiskAdvanceCFGList extends AbstractModel
{
    /**
     * @var string 风险ID
     */
    public $RiskId;

    /**
     * @var string 漏洞名称
     */
    public $VULName;

    /**
     * @var string 风险等级
     */
    public $RiskLevel;

    /**
     * @var string 识别来源
     */
    public $CheckFrom;

    /**
     * @var integer 是否启用，1-启用，0-禁用
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Enable;

    /**
     * @var string 风险类型
     */
    public $VULType;

    /**
     * @var string 影响版本
     */
    public $ImpactVersion;

    /**
     * @var string CVE
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CVE;

    /**
     * @var array 漏洞标签
     */
    public $VULTag;

    /**
     * @var array 修复方式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FixMethod;

    /**
     * @var string 披露时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReleaseTime;

    /**
     * @var integer 应急漏洞类型，1-应急漏洞，0-非应急漏洞
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EMGCVulType;

    /**
     * @var string 漏洞描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VULDescribe;

    /**
     * @var string 影响组件
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ImpactComponent;

    /**
     * @var string 漏洞Payload
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Payload;

    /**
     * @var string 技术参考
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $References;

    /**
     * @var string cvss评分
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CVSS;

    /**
     * @var string 攻击热度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AttackHeat;

    /**
     * @var array 安全产品支持情况
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceSupport;

    /**
     * @var string 最新检测时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RecentScanTime;

    /**
     * @param string $RiskId 风险ID
     * @param string $VULName 漏洞名称
     * @param string $RiskLevel 风险等级
     * @param string $CheckFrom 识别来源
     * @param integer $Enable 是否启用，1-启用，0-禁用
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VULType 风险类型
     * @param string $ImpactVersion 影响版本
     * @param string $CVE CVE
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $VULTag 漏洞标签
     * @param array $FixMethod 修复方式
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ReleaseTime 披露时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $EMGCVulType 应急漏洞类型，1-应急漏洞，0-非应急漏洞
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VULDescribe 漏洞描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ImpactComponent 影响组件
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Payload 漏洞Payload
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $References 技术参考
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CVSS cvss评分
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AttackHeat 攻击热度
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ServiceSupport 安全产品支持情况
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RecentScanTime 最新检测时间
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
        if (array_key_exists("RiskId",$param) and $param["RiskId"] !== null) {
            $this->RiskId = $param["RiskId"];
        }

        if (array_key_exists("VULName",$param) and $param["VULName"] !== null) {
            $this->VULName = $param["VULName"];
        }

        if (array_key_exists("RiskLevel",$param) and $param["RiskLevel"] !== null) {
            $this->RiskLevel = $param["RiskLevel"];
        }

        if (array_key_exists("CheckFrom",$param) and $param["CheckFrom"] !== null) {
            $this->CheckFrom = $param["CheckFrom"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("VULType",$param) and $param["VULType"] !== null) {
            $this->VULType = $param["VULType"];
        }

        if (array_key_exists("ImpactVersion",$param) and $param["ImpactVersion"] !== null) {
            $this->ImpactVersion = $param["ImpactVersion"];
        }

        if (array_key_exists("CVE",$param) and $param["CVE"] !== null) {
            $this->CVE = $param["CVE"];
        }

        if (array_key_exists("VULTag",$param) and $param["VULTag"] !== null) {
            $this->VULTag = $param["VULTag"];
        }

        if (array_key_exists("FixMethod",$param) and $param["FixMethod"] !== null) {
            $this->FixMethod = $param["FixMethod"];
        }

        if (array_key_exists("ReleaseTime",$param) and $param["ReleaseTime"] !== null) {
            $this->ReleaseTime = $param["ReleaseTime"];
        }

        if (array_key_exists("EMGCVulType",$param) and $param["EMGCVulType"] !== null) {
            $this->EMGCVulType = $param["EMGCVulType"];
        }

        if (array_key_exists("VULDescribe",$param) and $param["VULDescribe"] !== null) {
            $this->VULDescribe = $param["VULDescribe"];
        }

        if (array_key_exists("ImpactComponent",$param) and $param["ImpactComponent"] !== null) {
            $this->ImpactComponent = $param["ImpactComponent"];
        }

        if (array_key_exists("Payload",$param) and $param["Payload"] !== null) {
            $this->Payload = $param["Payload"];
        }

        if (array_key_exists("References",$param) and $param["References"] !== null) {
            $this->References = $param["References"];
        }

        if (array_key_exists("CVSS",$param) and $param["CVSS"] !== null) {
            $this->CVSS = $param["CVSS"];
        }

        if (array_key_exists("AttackHeat",$param) and $param["AttackHeat"] !== null) {
            $this->AttackHeat = $param["AttackHeat"];
        }

        if (array_key_exists("ServiceSupport",$param) and $param["ServiceSupport"] !== null) {
            $this->ServiceSupport = [];
            foreach ($param["ServiceSupport"] as $key => $value){
                $obj = new ServiceSupport();
                $obj->deserialize($value);
                array_push($this->ServiceSupport, $obj);
            }
        }

        if (array_key_exists("RecentScanTime",$param) and $param["RecentScanTime"] !== null) {
            $this->RecentScanTime = $param["RecentScanTime"];
        }
    }
}
