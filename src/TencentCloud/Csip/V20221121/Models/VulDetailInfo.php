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
 * 漏洞全部信息
 *
 * @method integer getID() 获取<p>漏洞ID</p>
 * @method void setID(integer $ID) 设置<p>漏洞ID</p>
 * @method string getName() 获取<p>漏洞名字</p>
 * @method void setName(string $Name) 设置<p>漏洞名字</p>
 * @method string getCVEID() 获取<p>CveID</p>
 * @method void setCVEID(string $CVEID) 设置<p>CveID</p>
 * @method string getCategory() 获取漏洞分类
枚举值：
LINUX：Linux 软件漏洞
WINDOWS：Windows 系统补丁
WEB_CMS：Web-CMS 漏洞
APPLICATION：应用漏洞
EMERGENCY：应急漏洞
 * @method void setCategory(string $Category) 设置漏洞分类
枚举值：
LINUX：Linux 软件漏洞
WINDOWS：Windows 系统补丁
WEB_CMS：Web-CMS 漏洞
APPLICATION：应用漏洞
EMERGENCY：应急漏洞
 * @method string getPublishTime() 获取漏洞披露时间
参数格式：YYYY-MM-DD HH:mm:ss
 * @method void setPublishTime(string $PublishTime) 设置漏洞披露时间
参数格式：YYYY-MM-DD HH:mm:ss
 * @method string getCheckMethod() 获取<p>检测方式</p><p>枚举值：</p><ul><li>VersionCompare： 版本对比</li><li>POC： POC检测</li></ul>
 * @method void setCheckMethod(string $CheckMethod) 设置<p>检测方式</p><p>枚举值：</p><ul><li>VersionCompare： 版本对比</li><li>POC： POC检测</li></ul>
 * @method string getDefendStatus() 获取漏洞防御状态
枚举值：
ENABLED：已开启
NOT_SUPPORTED：不支持
NOT_ENABLED：未开启
 * @method void setDefendStatus(string $DefendStatus) 设置漏洞防御状态
枚举值：
ENABLED：已开启
NOT_SUPPORTED：不支持
NOT_ENABLED：未开启
 * @method boolean getSupportFix() 获取是否支持一键修复
枚举值：
true：支持
false：不支持
 * @method void setSupportFix(boolean $SupportFix) 设置是否支持一键修复
枚举值：
true：支持
false：不支持
 * @method VPRRatingInfo getVRPRatingInfo() 获取VPR 评级信息（包含评级结果、说明和分阶段评分）
 * @method void setVRPRatingInfo(VPRRatingInfo $VRPRatingInfo) 设置VPR 评级信息（包含评级结果、说明和分阶段评分）
 * @method float getCvssScore() 获取CVSS 评分
取值范围：[0.0, 10.0]
 * @method void setCvssScore(float $CvssScore) 设置CVSS 评分
取值范围：[0.0, 10.0]
 * @method array getLabel() 获取VPR 风险标签列表（如在野利用、有 EXP、有 POC、外网暴露、无需重启等）
 * @method void setLabel(array $Label) 设置VPR 风险标签列表（如在野利用、有 EXP、有 POC、外网暴露、无需重启等）
 * @method string getRemark() 获取漏洞备注
 * @method void setRemark(string $Remark) 设置漏洞备注
 * @method string getSummary() 获取漏洞概述说明
 * @method void setSummary(string $Summary) 设置漏洞概述说明
 * @method integer getDefendHostCount() 获取已开启漏洞防御的主机数
 * @method void setDefendHostCount(integer $DefendHostCount) 设置已开启漏洞防御的主机数
 * @method integer getNotDefendHostCount() 获取未开启漏洞防御的主机数
 * @method void setNotDefendHostCount(integer $NotDefendHostCount) 设置未开启漏洞防御的主机数
 * @method string getLatestScanTime() 获取最近扫描时间
参数格式：YYYY-MM-DD HH:mm:ss
 * @method void setLatestScanTime(string $LatestScanTime) 设置最近扫描时间
参数格式：YYYY-MM-DD HH:mm:ss
 * @method string getCVSSLevel() 获取CVSS 危害等级
枚举值：
INVALID：无效
INFO：提示
LOW：低危
MEDIUM：中危
HIGH：高危
CRITICAL：严重
 * @method void setCVSSLevel(string $CVSSLevel) 设置CVSS 危害等级
枚举值：
INVALID：无效
INFO：提示
LOW：低危
MEDIUM：中危
HIGH：高危
CRITICAL：严重
 * @method array getVulAffect() 获取受影响软件描述列表（每项形如 openssl < 1.1.1k）
 * @method void setVulAffect(array $VulAffect) 设置受影响软件描述列表（每项形如 openssl < 1.1.1k）
 * @method boolean getKVERecord() 获取是否被 KVE（已知被利用漏洞）库收录
枚举值：
true：已收录
false：未收录
 * @method void setKVERecord(boolean $KVERecord) 设置是否被 KVE（已知被利用漏洞）库收录
枚举值：
true：已收录
false：未收录
 * @method string getKVERecordTime() 获取KVE 收录时间
参数格式：YYYY-MM-DD HH:mm:ss
 * @method void setKVERecordTime(string $KVERecordTime) 设置KVE 收录时间
参数格式：YYYY-MM-DD HH:mm:ss
 * @method float getEPSSScore() 获取EPSS 评分（漏洞利用概率预测）
取值范围：[0.0, 1.0]
 * @method void setEPSSScore(float $EPSSScore) 设置EPSS 评分（漏洞利用概率预测）
取值范围：[0.0, 1.0]
 * @method array getAffectVendor() 获取受影响厂商列表
 * @method void setAffectVendor(array $AffectVendor) 设置受影响厂商列表
 * @method array getAffectProduct() 获取受影响产品列表
 * @method void setAffectProduct(array $AffectProduct) 设置受影响产品列表
 * @method string getMechanism() 获取漏洞利用机制说明
 * @method void setMechanism(string $Mechanism) 设置漏洞利用机制说明
 * @method string getPrecondition() 获取漏洞利用前置条件说明
 * @method void setPrecondition(string $Precondition) 设置漏洞利用前置条件说明
 * @method array getLatestTrend() 获取漏洞最新传播趋势数据列表（按日期）
 * @method void setLatestTrend(array $LatestTrend) 设置漏洞最新传播趋势数据列表（按日期）
 * @method string getFixSolution() 获取<p>修复方案</p>
 * @method void setFixSolution(string $FixSolution) 设置<p>修复方案</p>
 * @method string getRefLink() 获取<p>参考链接</p>
 * @method void setRefLink(string $RefLink) 设置<p>参考链接</p>
 * @method string getHarmDescription() 获取<p>漏洞危害描述</p>
 * @method void setHarmDescription(string $HarmDescription) 设置<p>漏洞危害描述</p>
 * @method array getAffectVendorProduct() 获取<p>漏洞影响产品</p>
 * @method void setAffectVendorProduct(array $AffectVendorProduct) 设置<p>漏洞影响产品</p>
 */
class VulDetailInfo extends AbstractModel
{
    /**
     * @var integer <p>漏洞ID</p>
     */
    public $ID;

    /**
     * @var string <p>漏洞名字</p>
     */
    public $Name;

    /**
     * @var string <p>CveID</p>
     */
    public $CVEID;

    /**
     * @var string 漏洞分类
枚举值：
LINUX：Linux 软件漏洞
WINDOWS：Windows 系统补丁
WEB_CMS：Web-CMS 漏洞
APPLICATION：应用漏洞
EMERGENCY：应急漏洞
     */
    public $Category;

    /**
     * @var string 漏洞披露时间
参数格式：YYYY-MM-DD HH:mm:ss
     */
    public $PublishTime;

    /**
     * @var string <p>检测方式</p><p>枚举值：</p><ul><li>VersionCompare： 版本对比</li><li>POC： POC检测</li></ul>
     */
    public $CheckMethod;

    /**
     * @var string 漏洞防御状态
枚举值：
ENABLED：已开启
NOT_SUPPORTED：不支持
NOT_ENABLED：未开启
     */
    public $DefendStatus;

    /**
     * @var boolean 是否支持一键修复
枚举值：
true：支持
false：不支持
     */
    public $SupportFix;

    /**
     * @var VPRRatingInfo VPR 评级信息（包含评级结果、说明和分阶段评分）
     */
    public $VRPRatingInfo;

    /**
     * @var float CVSS 评分
取值范围：[0.0, 10.0]
     */
    public $CvssScore;

    /**
     * @var array VPR 风险标签列表（如在野利用、有 EXP、有 POC、外网暴露、无需重启等）
     */
    public $Label;

    /**
     * @var string 漏洞备注
     */
    public $Remark;

    /**
     * @var string 漏洞概述说明
     */
    public $Summary;

    /**
     * @var integer 已开启漏洞防御的主机数
     */
    public $DefendHostCount;

    /**
     * @var integer 未开启漏洞防御的主机数
     */
    public $NotDefendHostCount;

    /**
     * @var string 最近扫描时间
参数格式：YYYY-MM-DD HH:mm:ss
     */
    public $LatestScanTime;

    /**
     * @var string CVSS 危害等级
枚举值：
INVALID：无效
INFO：提示
LOW：低危
MEDIUM：中危
HIGH：高危
CRITICAL：严重
     */
    public $CVSSLevel;

    /**
     * @var array 受影响软件描述列表（每项形如 openssl < 1.1.1k）
     */
    public $VulAffect;

    /**
     * @var boolean 是否被 KVE（已知被利用漏洞）库收录
枚举值：
true：已收录
false：未收录
     */
    public $KVERecord;

    /**
     * @var string KVE 收录时间
参数格式：YYYY-MM-DD HH:mm:ss
     */
    public $KVERecordTime;

    /**
     * @var float EPSS 评分（漏洞利用概率预测）
取值范围：[0.0, 1.0]
     */
    public $EPSSScore;

    /**
     * @var array 受影响厂商列表
     */
    public $AffectVendor;

    /**
     * @var array 受影响产品列表
     */
    public $AffectProduct;

    /**
     * @var string 漏洞利用机制说明
     */
    public $Mechanism;

    /**
     * @var string 漏洞利用前置条件说明
     */
    public $Precondition;

    /**
     * @var array 漏洞最新传播趋势数据列表（按日期）
     */
    public $LatestTrend;

    /**
     * @var string <p>修复方案</p>
     */
    public $FixSolution;

    /**
     * @var string <p>参考链接</p>
     */
    public $RefLink;

    /**
     * @var string <p>漏洞危害描述</p>
     */
    public $HarmDescription;

    /**
     * @var array <p>漏洞影响产品</p>
     */
    public $AffectVendorProduct;

    /**
     * @param integer $ID <p>漏洞ID</p>
     * @param string $Name <p>漏洞名字</p>
     * @param string $CVEID <p>CveID</p>
     * @param string $Category 漏洞分类
枚举值：
LINUX：Linux 软件漏洞
WINDOWS：Windows 系统补丁
WEB_CMS：Web-CMS 漏洞
APPLICATION：应用漏洞
EMERGENCY：应急漏洞
     * @param string $PublishTime 漏洞披露时间
参数格式：YYYY-MM-DD HH:mm:ss
     * @param string $CheckMethod <p>检测方式</p><p>枚举值：</p><ul><li>VersionCompare： 版本对比</li><li>POC： POC检测</li></ul>
     * @param string $DefendStatus 漏洞防御状态
枚举值：
ENABLED：已开启
NOT_SUPPORTED：不支持
NOT_ENABLED：未开启
     * @param boolean $SupportFix 是否支持一键修复
枚举值：
true：支持
false：不支持
     * @param VPRRatingInfo $VRPRatingInfo VPR 评级信息（包含评级结果、说明和分阶段评分）
     * @param float $CvssScore CVSS 评分
取值范围：[0.0, 10.0]
     * @param array $Label VPR 风险标签列表（如在野利用、有 EXP、有 POC、外网暴露、无需重启等）
     * @param string $Remark 漏洞备注
     * @param string $Summary 漏洞概述说明
     * @param integer $DefendHostCount 已开启漏洞防御的主机数
     * @param integer $NotDefendHostCount 未开启漏洞防御的主机数
     * @param string $LatestScanTime 最近扫描时间
参数格式：YYYY-MM-DD HH:mm:ss
     * @param string $CVSSLevel CVSS 危害等级
枚举值：
INVALID：无效
INFO：提示
LOW：低危
MEDIUM：中危
HIGH：高危
CRITICAL：严重
     * @param array $VulAffect 受影响软件描述列表（每项形如 openssl < 1.1.1k）
     * @param boolean $KVERecord 是否被 KVE（已知被利用漏洞）库收录
枚举值：
true：已收录
false：未收录
     * @param string $KVERecordTime KVE 收录时间
参数格式：YYYY-MM-DD HH:mm:ss
     * @param float $EPSSScore EPSS 评分（漏洞利用概率预测）
取值范围：[0.0, 1.0]
     * @param array $AffectVendor 受影响厂商列表
     * @param array $AffectProduct 受影响产品列表
     * @param string $Mechanism 漏洞利用机制说明
     * @param string $Precondition 漏洞利用前置条件说明
     * @param array $LatestTrend 漏洞最新传播趋势数据列表（按日期）
     * @param string $FixSolution <p>修复方案</p>
     * @param string $RefLink <p>参考链接</p>
     * @param string $HarmDescription <p>漏洞危害描述</p>
     * @param array $AffectVendorProduct <p>漏洞影响产品</p>
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

        if (array_key_exists("CVEID",$param) and $param["CVEID"] !== null) {
            $this->CVEID = $param["CVEID"];
        }

        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = $param["Category"];
        }

        if (array_key_exists("PublishTime",$param) and $param["PublishTime"] !== null) {
            $this->PublishTime = $param["PublishTime"];
        }

        if (array_key_exists("CheckMethod",$param) and $param["CheckMethod"] !== null) {
            $this->CheckMethod = $param["CheckMethod"];
        }

        if (array_key_exists("DefendStatus",$param) and $param["DefendStatus"] !== null) {
            $this->DefendStatus = $param["DefendStatus"];
        }

        if (array_key_exists("SupportFix",$param) and $param["SupportFix"] !== null) {
            $this->SupportFix = $param["SupportFix"];
        }

        if (array_key_exists("VRPRatingInfo",$param) and $param["VRPRatingInfo"] !== null) {
            $this->VRPRatingInfo = new VPRRatingInfo();
            $this->VRPRatingInfo->deserialize($param["VRPRatingInfo"]);
        }

        if (array_key_exists("CvssScore",$param) and $param["CvssScore"] !== null) {
            $this->CvssScore = $param["CvssScore"];
        }

        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = [];
            foreach ($param["Label"] as $key => $value){
                $obj = new VPRLabel();
                $obj->deserialize($value);
                array_push($this->Label, $obj);
            }
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("Summary",$param) and $param["Summary"] !== null) {
            $this->Summary = $param["Summary"];
        }

        if (array_key_exists("DefendHostCount",$param) and $param["DefendHostCount"] !== null) {
            $this->DefendHostCount = $param["DefendHostCount"];
        }

        if (array_key_exists("NotDefendHostCount",$param) and $param["NotDefendHostCount"] !== null) {
            $this->NotDefendHostCount = $param["NotDefendHostCount"];
        }

        if (array_key_exists("LatestScanTime",$param) and $param["LatestScanTime"] !== null) {
            $this->LatestScanTime = $param["LatestScanTime"];
        }

        if (array_key_exists("CVSSLevel",$param) and $param["CVSSLevel"] !== null) {
            $this->CVSSLevel = $param["CVSSLevel"];
        }

        if (array_key_exists("VulAffect",$param) and $param["VulAffect"] !== null) {
            $this->VulAffect = $param["VulAffect"];
        }

        if (array_key_exists("KVERecord",$param) and $param["KVERecord"] !== null) {
            $this->KVERecord = $param["KVERecord"];
        }

        if (array_key_exists("KVERecordTime",$param) and $param["KVERecordTime"] !== null) {
            $this->KVERecordTime = $param["KVERecordTime"];
        }

        if (array_key_exists("EPSSScore",$param) and $param["EPSSScore"] !== null) {
            $this->EPSSScore = $param["EPSSScore"];
        }

        if (array_key_exists("AffectVendor",$param) and $param["AffectVendor"] !== null) {
            $this->AffectVendor = $param["AffectVendor"];
        }

        if (array_key_exists("AffectProduct",$param) and $param["AffectProduct"] !== null) {
            $this->AffectProduct = $param["AffectProduct"];
        }

        if (array_key_exists("Mechanism",$param) and $param["Mechanism"] !== null) {
            $this->Mechanism = $param["Mechanism"];
        }

        if (array_key_exists("Precondition",$param) and $param["Precondition"] !== null) {
            $this->Precondition = $param["Precondition"];
        }

        if (array_key_exists("LatestTrend",$param) and $param["LatestTrend"] !== null) {
            $this->LatestTrend = [];
            foreach ($param["LatestTrend"] as $key => $value){
                $obj = new VulSpreadTrend();
                $obj->deserialize($value);
                array_push($this->LatestTrend, $obj);
            }
        }

        if (array_key_exists("FixSolution",$param) and $param["FixSolution"] !== null) {
            $this->FixSolution = $param["FixSolution"];
        }

        if (array_key_exists("RefLink",$param) and $param["RefLink"] !== null) {
            $this->RefLink = $param["RefLink"];
        }

        if (array_key_exists("HarmDescription",$param) and $param["HarmDescription"] !== null) {
            $this->HarmDescription = $param["HarmDescription"];
        }

        if (array_key_exists("AffectVendorProduct",$param) and $param["AffectVendorProduct"] !== null) {
            $this->AffectVendorProduct = [];
            foreach ($param["AffectVendorProduct"] as $key => $value){
                $obj = new VulVendorProduct();
                $obj->deserialize($value);
                array_push($this->AffectVendorProduct, $obj);
            }
        }
    }
}
