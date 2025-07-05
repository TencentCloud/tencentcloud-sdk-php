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
 * 应急漏洞基本数据
 *
 * @method string getLevel() 获取风险等级
high 高危/ middle 中危 / low 低危 /info 提示
 * @method void setLevel(string $Level) 设置风险等级
high 高危/ middle 中危 / low 低危 /info 提示
 * @method string getComponent() 获取组件
 * @method void setComponent(string $Component) 设置组件
 * @method string getPublishTime() 获取漏洞发布时间
 * @method void setPublishTime(string $PublishTime) 设置漏洞发布时间
 * @method string getLastScanTime() 获取最近扫描时间
 * @method void setLastScanTime(string $LastScanTime) 设置最近扫描时间
 * @method integer getAffectAssetCount() 获取影响资产数量
 * @method void setAffectAssetCount(integer $AffectAssetCount) 设置影响资产数量
 * @method string getRiskId() 获取风险ID
 * @method void setRiskId(string $RiskId) 设置风险ID
 * @method string getVULType() 获取漏洞类型
 * @method void setVULType(string $VULType) 设置漏洞类型
 * @method string getVULName() 获取漏洞名
 * @method void setVULName(string $VULName) 设置漏洞名
 * @method string getCVE() 获取cve
 * @method void setCVE(string $CVE) 设置cve
 * @method string getDescribe() 获取描述
 * @method void setDescribe(string $Describe) 设置描述
 * @method string getPayload() 获取漏洞payload
 * @method void setPayload(string $Payload) 设置漏洞payload
 * @method string getAppName() 获取漏洞影响组件
 * @method void setAppName(string $AppName) 设置漏洞影响组件
 * @method string getReferences() 获取技术参考
 * @method void setReferences(string $References) 设置技术参考
 * @method string getAppVersion() 获取漏洞影响版本
 * @method void setAppVersion(string $AppVersion) 设置漏洞影响版本
 * @method string getVULURL() 获取风险点
 * @method void setVULURL(string $VULURL) 设置风险点
 * @method string getNick() 获取用户昵称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNick(string $Nick) 设置用户昵称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAppId() 获取用户appid
 * @method void setAppId(string $AppId) 设置用户appid
 * @method string getUin() 获取用户uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUin(string $Uin) 设置用户uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFix() 获取修复建议
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFix(string $Fix) 设置修复建议
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getEMGCVulType() 获取应急漏洞类型，1-应急漏洞，0-非应急漏洞
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEMGCVulType(integer $EMGCVulType) 设置应急漏洞类型，1-应急漏洞，0-非应急漏洞
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getCVSS() 获取CVSS评分
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCVSS(float $CVSS) 设置CVSS评分
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAttackHeat() 获取攻击热度
0/1/2/3 
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAttackHeat(integer $AttackHeat) 设置攻击热度
0/1/2/3 
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getScanStatus() 获取检测状态 0 未扫描 1扫描中 2 扫描完成
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScanStatus(integer $ScanStatus) 设置检测状态 0 未扫描 1扫描中 2 扫描完成
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsSuggest() 获取1/0是否必修
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsSuggest(integer $IsSuggest) 设置1/0是否必修
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getVulTag() 获取标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVulTag(array $VulTag) 设置标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSupportProduct() 获取支持产品 逗号分隔  "cfw_waf_virtual", "cwp_detect", "cwp_defense", "cwp_fix"
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSupportProduct(string $SupportProduct) 设置支持产品 逗号分隔  "cfw_waf_virtual", "cwp_detect", "cwp_defense", "cwp_fix"
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskId() 获取漏洞检测任务id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskId(string $TaskId) 设置漏洞检测任务id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIndex() 获取主键
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIndex(string $Index) 设置主键
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPcmgrID() 获取漏洞id 旧版
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPcmgrID(string $PcmgrID) 设置漏洞id 旧版
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTvdID() 获取漏洞id  新版
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTvdID(string $TvdID) 设置漏洞id  新版
注意：此字段可能返回 null，表示取不到有效值。
 */
class VULBaseInfo extends AbstractModel
{
    /**
     * @var string 风险等级
high 高危/ middle 中危 / low 低危 /info 提示
     */
    public $Level;

    /**
     * @var string 组件
     */
    public $Component;

    /**
     * @var string 漏洞发布时间
     */
    public $PublishTime;

    /**
     * @var string 最近扫描时间
     */
    public $LastScanTime;

    /**
     * @var integer 影响资产数量
     */
    public $AffectAssetCount;

    /**
     * @var string 风险ID
     */
    public $RiskId;

    /**
     * @var string 漏洞类型
     */
    public $VULType;

    /**
     * @var string 漏洞名
     */
    public $VULName;

    /**
     * @var string cve
     */
    public $CVE;

    /**
     * @var string 描述
     */
    public $Describe;

    /**
     * @var string 漏洞payload
     */
    public $Payload;

    /**
     * @var string 漏洞影响组件
     */
    public $AppName;

    /**
     * @var string 技术参考
     */
    public $References;

    /**
     * @var string 漏洞影响版本
     */
    public $AppVersion;

    /**
     * @var string 风险点
     */
    public $VULURL;

    /**
     * @var string 用户昵称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Nick;

    /**
     * @var string 用户appid
     */
    public $AppId;

    /**
     * @var string 用户uin
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Uin;

    /**
     * @var string 修复建议
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Fix;

    /**
     * @var integer 应急漏洞类型，1-应急漏洞，0-非应急漏洞
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EMGCVulType;

    /**
     * @var float CVSS评分
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CVSS;

    /**
     * @var integer 攻击热度
0/1/2/3 
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AttackHeat;

    /**
     * @var integer 检测状态 0 未扫描 1扫描中 2 扫描完成
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScanStatus;

    /**
     * @var integer 1/0是否必修
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsSuggest;

    /**
     * @var array 标签
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VulTag;

    /**
     * @var string 支持产品 逗号分隔  "cfw_waf_virtual", "cwp_detect", "cwp_defense", "cwp_fix"
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SupportProduct;

    /**
     * @var string 漏洞检测任务id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskId;

    /**
     * @var string 主键
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Index;

    /**
     * @var string 漏洞id 旧版
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PcmgrID;

    /**
     * @var string 漏洞id  新版
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TvdID;

    /**
     * @param string $Level 风险等级
high 高危/ middle 中危 / low 低危 /info 提示
     * @param string $Component 组件
     * @param string $PublishTime 漏洞发布时间
     * @param string $LastScanTime 最近扫描时间
     * @param integer $AffectAssetCount 影响资产数量
     * @param string $RiskId 风险ID
     * @param string $VULType 漏洞类型
     * @param string $VULName 漏洞名
     * @param string $CVE cve
     * @param string $Describe 描述
     * @param string $Payload 漏洞payload
     * @param string $AppName 漏洞影响组件
     * @param string $References 技术参考
     * @param string $AppVersion 漏洞影响版本
     * @param string $VULURL 风险点
     * @param string $Nick 用户昵称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AppId 用户appid
     * @param string $Uin 用户uin
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Fix 修复建议
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $EMGCVulType 应急漏洞类型，1-应急漏洞，0-非应急漏洞
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $CVSS CVSS评分
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AttackHeat 攻击热度
0/1/2/3 
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ScanStatus 检测状态 0 未扫描 1扫描中 2 扫描完成
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsSuggest 1/0是否必修
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $VulTag 标签
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SupportProduct 支持产品 逗号分隔  "cfw_waf_virtual", "cwp_detect", "cwp_defense", "cwp_fix"
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskId 漏洞检测任务id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Index 主键
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PcmgrID 漏洞id 旧版
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TvdID 漏洞id  新版
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
        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("Component",$param) and $param["Component"] !== null) {
            $this->Component = $param["Component"];
        }

        if (array_key_exists("PublishTime",$param) and $param["PublishTime"] !== null) {
            $this->PublishTime = $param["PublishTime"];
        }

        if (array_key_exists("LastScanTime",$param) and $param["LastScanTime"] !== null) {
            $this->LastScanTime = $param["LastScanTime"];
        }

        if (array_key_exists("AffectAssetCount",$param) and $param["AffectAssetCount"] !== null) {
            $this->AffectAssetCount = $param["AffectAssetCount"];
        }

        if (array_key_exists("RiskId",$param) and $param["RiskId"] !== null) {
            $this->RiskId = $param["RiskId"];
        }

        if (array_key_exists("VULType",$param) and $param["VULType"] !== null) {
            $this->VULType = $param["VULType"];
        }

        if (array_key_exists("VULName",$param) and $param["VULName"] !== null) {
            $this->VULName = $param["VULName"];
        }

        if (array_key_exists("CVE",$param) and $param["CVE"] !== null) {
            $this->CVE = $param["CVE"];
        }

        if (array_key_exists("Describe",$param) and $param["Describe"] !== null) {
            $this->Describe = $param["Describe"];
        }

        if (array_key_exists("Payload",$param) and $param["Payload"] !== null) {
            $this->Payload = $param["Payload"];
        }

        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }

        if (array_key_exists("References",$param) and $param["References"] !== null) {
            $this->References = $param["References"];
        }

        if (array_key_exists("AppVersion",$param) and $param["AppVersion"] !== null) {
            $this->AppVersion = $param["AppVersion"];
        }

        if (array_key_exists("VULURL",$param) and $param["VULURL"] !== null) {
            $this->VULURL = $param["VULURL"];
        }

        if (array_key_exists("Nick",$param) and $param["Nick"] !== null) {
            $this->Nick = $param["Nick"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("Fix",$param) and $param["Fix"] !== null) {
            $this->Fix = $param["Fix"];
        }

        if (array_key_exists("EMGCVulType",$param) and $param["EMGCVulType"] !== null) {
            $this->EMGCVulType = $param["EMGCVulType"];
        }

        if (array_key_exists("CVSS",$param) and $param["CVSS"] !== null) {
            $this->CVSS = $param["CVSS"];
        }

        if (array_key_exists("AttackHeat",$param) and $param["AttackHeat"] !== null) {
            $this->AttackHeat = $param["AttackHeat"];
        }

        if (array_key_exists("ScanStatus",$param) and $param["ScanStatus"] !== null) {
            $this->ScanStatus = $param["ScanStatus"];
        }

        if (array_key_exists("IsSuggest",$param) and $param["IsSuggest"] !== null) {
            $this->IsSuggest = $param["IsSuggest"];
        }

        if (array_key_exists("VulTag",$param) and $param["VulTag"] !== null) {
            $this->VulTag = $param["VulTag"];
        }

        if (array_key_exists("SupportProduct",$param) and $param["SupportProduct"] !== null) {
            $this->SupportProduct = $param["SupportProduct"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("Index",$param) and $param["Index"] !== null) {
            $this->Index = $param["Index"];
        }

        if (array_key_exists("PcmgrID",$param) and $param["PcmgrID"] !== null) {
            $this->PcmgrID = $param["PcmgrID"];
        }

        if (array_key_exists("TvdID",$param) and $param["TvdID"] !== null) {
            $this->TvdID = $param["TvdID"];
        }
    }
}
