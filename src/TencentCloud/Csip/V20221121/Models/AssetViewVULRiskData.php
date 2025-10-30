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
 * 资产视角的漏洞风险对象
 *
 * @method string getAffectAsset() 获取影响资产
 * @method void setAffectAsset(string $AffectAsset) 设置影响资产
 * @method string getLevel() 获取风险等级，low-低危，high-高危，middle-中危，info-提示，extreme-严重。
 * @method void setLevel(string $Level) 设置风险等级，low-低危，high-高危，middle-中危，info-提示，extreme-严重。
 * @method string getInstanceType() 获取资产类型
 * @method void setInstanceType(string $InstanceType) 设置资产类型
 * @method string getComponent() 获取组件
 * @method void setComponent(string $Component) 设置组件
 * @method string getRecentTime() 获取最近识别时间
 * @method void setRecentTime(string $RecentTime) 设置最近识别时间
 * @method string getFirstTime() 获取首次识别时间
 * @method void setFirstTime(string $FirstTime) 设置首次识别时间
 * @method integer getStatus() 获取状态，0未处理、1标记已处置、2已忽略，3已处置 ，4 处置中 ，5 检测中 ，6部分已处置
 * @method void setStatus(integer $Status) 设置状态，0未处理、1标记已处置、2已忽略，3已处置 ，4 处置中 ，5 检测中 ，6部分已处置
 * @method string getRiskId() 获取风险ID
 * @method void setRiskId(string $RiskId) 设置风险ID
 * @method string getInstanceId() 获取实例id
 * @method void setInstanceId(string $InstanceId) 设置实例id
 * @method string getInstanceName() 获取实例名
 * @method void setInstanceName(string $InstanceName) 设置实例名
 * @method string getAppId() 获取用户appid
 * @method void setAppId(string $AppId) 设置用户appid
 * @method string getNick() 获取用户昵称
 * @method void setNick(string $Nick) 设置用户昵称
 * @method string getUin() 获取用户uin
 * @method void setUin(string $Uin) 设置用户uin
 * @method string getVULType() 获取漏洞类型
 * @method void setVULType(string $VULType) 设置漏洞类型
 * @method string getPort() 获取端口
 * @method void setPort(string $Port) 设置端口
 * @method string getAppName() 获取漏洞影响组件
 * @method void setAppName(string $AppName) 设置漏洞影响组件
 * @method string getAppVersion() 获取漏洞影响版本
 * @method void setAppVersion(string $AppVersion) 设置漏洞影响版本
 * @method string getVULURL() 获取风险点
 * @method void setVULURL(string $VULURL) 设置风险点
 * @method string getVULName() 获取漏洞名称
 * @method void setVULName(string $VULName) 设置漏洞名称
 * @method string getCVE() 获取cve
 * @method void setCVE(string $CVE) 设置cve
 * @method string getPOCId() 获取pocid
 * @method void setPOCId(string $POCId) 设置pocid
 * @method string getFrom() 获取扫描来源
 * @method void setFrom(string $From) 设置扫描来源
 * @method integer getCWPVersion() 获取主机版本
 * @method void setCWPVersion(integer $CWPVersion) 设置主机版本
 * @method string getInstanceUUID() 获取实例uuid
 * @method void setInstanceUUID(string $InstanceUUID) 设置实例uuid
 * @method string getPayload() 获取攻击载荷
 * @method void setPayload(string $Payload) 设置攻击载荷
 * @method integer getEMGCVulType() 获取应急漏洞类型，1-应急漏洞，0-非应急漏洞
 * @method void setEMGCVulType(integer $EMGCVulType) 设置应急漏洞类型，1-应急漏洞，0-非应急漏洞
 * @method float getCVSS() 获取CVSS评分
 * @method void setCVSS(float $CVSS) 设置CVSS评分
 * @method string getIndex() 获取前端索引id
 * @method void setIndex(string $Index) 设置前端索引id
 * @method string getPCMGRId() 获取pcmgrId
 * @method void setPCMGRId(string $PCMGRId) 设置pcmgrId
 * @method string getLogId() 获取报告id
 * @method void setLogId(string $LogId) 设置报告id
 * @method string getTaskId() 获取任务id
 * @method void setTaskId(string $TaskId) 设置任务id
 * @method array getVulTag() 获取漏洞标签
 * @method void setVulTag(array $VulTag) 设置漏洞标签
 * @method string getDisclosureTime() 获取漏洞披露时间
 * @method void setDisclosureTime(string $DisclosureTime) 设置漏洞披露时间
 * @method integer getAttackHeat() 获取攻击热度
 * @method void setAttackHeat(integer $AttackHeat) 设置攻击热度
 * @method integer getIsSuggest() 获取是否必修漏洞1是，0不是
 * @method void setIsSuggest(integer $IsSuggest) 设置是否必修漏洞1是，0不是
 * @method string getHandleTaskId() 获取处置任务ID
 * @method void setHandleTaskId(string $HandleTaskId) 设置处置任务ID
 * @method string getEngineSource() 获取引擎来源
 * @method void setEngineSource(string $EngineSource) 设置引擎来源
 * @method string getVulRiskId() 获取新的漏洞风险id(同全网漏洞表的RiskId)
 * @method void setVulRiskId(string $VulRiskId) 设置新的漏洞风险id(同全网漏洞表的RiskId)
 * @method string getTvdID() 获取新版漏洞id
 * @method void setTvdID(string $TvdID) 设置新版漏洞id
 * @method integer getIsOneClick() 获取是否可以一键体检，1-可以，0-不可以
 * @method void setIsOneClick(integer $IsOneClick) 设置是否可以一键体检，1-可以，0-不可以
 * @method integer getIsPOC() 获取是否POC扫描，0-非POC，1-POC
 * @method void setIsPOC(integer $IsPOC) 设置是否POC扫描，0-非POC，1-POC
 */
class AssetViewVULRiskData extends AbstractModel
{
    /**
     * @var string 影响资产
     */
    public $AffectAsset;

    /**
     * @var string 风险等级，low-低危，high-高危，middle-中危，info-提示，extreme-严重。
     */
    public $Level;

    /**
     * @var string 资产类型
     */
    public $InstanceType;

    /**
     * @var string 组件
     */
    public $Component;

    /**
     * @var string 最近识别时间
     */
    public $RecentTime;

    /**
     * @var string 首次识别时间
     */
    public $FirstTime;

    /**
     * @var integer 状态，0未处理、1标记已处置、2已忽略，3已处置 ，4 处置中 ，5 检测中 ，6部分已处置
     */
    public $Status;

    /**
     * @var string 风险ID
     */
    public $RiskId;

    /**
     * @var string 实例id
     */
    public $InstanceId;

    /**
     * @var string 实例名
     */
    public $InstanceName;

    /**
     * @var string 用户appid
     */
    public $AppId;

    /**
     * @var string 用户昵称
     */
    public $Nick;

    /**
     * @var string 用户uin
     */
    public $Uin;

    /**
     * @var string 漏洞类型
     */
    public $VULType;

    /**
     * @var string 端口
     */
    public $Port;

    /**
     * @var string 漏洞影响组件
     */
    public $AppName;

    /**
     * @var string 漏洞影响版本
     */
    public $AppVersion;

    /**
     * @var string 风险点
     */
    public $VULURL;

    /**
     * @var string 漏洞名称
     */
    public $VULName;

    /**
     * @var string cve
     */
    public $CVE;

    /**
     * @var string pocid
     */
    public $POCId;

    /**
     * @var string 扫描来源
     */
    public $From;

    /**
     * @var integer 主机版本
     */
    public $CWPVersion;

    /**
     * @var string 实例uuid
     */
    public $InstanceUUID;

    /**
     * @var string 攻击载荷
     */
    public $Payload;

    /**
     * @var integer 应急漏洞类型，1-应急漏洞，0-非应急漏洞
     */
    public $EMGCVulType;

    /**
     * @var float CVSS评分
     */
    public $CVSS;

    /**
     * @var string 前端索引id
     */
    public $Index;

    /**
     * @var string pcmgrId
     */
    public $PCMGRId;

    /**
     * @var string 报告id
     */
    public $LogId;

    /**
     * @var string 任务id
     */
    public $TaskId;

    /**
     * @var array 漏洞标签
     */
    public $VulTag;

    /**
     * @var string 漏洞披露时间
     */
    public $DisclosureTime;

    /**
     * @var integer 攻击热度
     */
    public $AttackHeat;

    /**
     * @var integer 是否必修漏洞1是，0不是
     */
    public $IsSuggest;

    /**
     * @var string 处置任务ID
     */
    public $HandleTaskId;

    /**
     * @var string 引擎来源
     */
    public $EngineSource;

    /**
     * @var string 新的漏洞风险id(同全网漏洞表的RiskId)
     */
    public $VulRiskId;

    /**
     * @var string 新版漏洞id
     */
    public $TvdID;

    /**
     * @var integer 是否可以一键体检，1-可以，0-不可以
     */
    public $IsOneClick;

    /**
     * @var integer 是否POC扫描，0-非POC，1-POC
     */
    public $IsPOC;

    /**
     * @param string $AffectAsset 影响资产
     * @param string $Level 风险等级，low-低危，high-高危，middle-中危，info-提示，extreme-严重。
     * @param string $InstanceType 资产类型
     * @param string $Component 组件
     * @param string $RecentTime 最近识别时间
     * @param string $FirstTime 首次识别时间
     * @param integer $Status 状态，0未处理、1标记已处置、2已忽略，3已处置 ，4 处置中 ，5 检测中 ，6部分已处置
     * @param string $RiskId 风险ID
     * @param string $InstanceId 实例id
     * @param string $InstanceName 实例名
     * @param string $AppId 用户appid
     * @param string $Nick 用户昵称
     * @param string $Uin 用户uin
     * @param string $VULType 漏洞类型
     * @param string $Port 端口
     * @param string $AppName 漏洞影响组件
     * @param string $AppVersion 漏洞影响版本
     * @param string $VULURL 风险点
     * @param string $VULName 漏洞名称
     * @param string $CVE cve
     * @param string $POCId pocid
     * @param string $From 扫描来源
     * @param integer $CWPVersion 主机版本
     * @param string $InstanceUUID 实例uuid
     * @param string $Payload 攻击载荷
     * @param integer $EMGCVulType 应急漏洞类型，1-应急漏洞，0-非应急漏洞
     * @param float $CVSS CVSS评分
     * @param string $Index 前端索引id
     * @param string $PCMGRId pcmgrId
     * @param string $LogId 报告id
     * @param string $TaskId 任务id
     * @param array $VulTag 漏洞标签
     * @param string $DisclosureTime 漏洞披露时间
     * @param integer $AttackHeat 攻击热度
     * @param integer $IsSuggest 是否必修漏洞1是，0不是
     * @param string $HandleTaskId 处置任务ID
     * @param string $EngineSource 引擎来源
     * @param string $VulRiskId 新的漏洞风险id(同全网漏洞表的RiskId)
     * @param string $TvdID 新版漏洞id
     * @param integer $IsOneClick 是否可以一键体检，1-可以，0-不可以
     * @param integer $IsPOC 是否POC扫描，0-非POC，1-POC
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
        if (array_key_exists("AffectAsset",$param) and $param["AffectAsset"] !== null) {
            $this->AffectAsset = $param["AffectAsset"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("Component",$param) and $param["Component"] !== null) {
            $this->Component = $param["Component"];
        }

        if (array_key_exists("RecentTime",$param) and $param["RecentTime"] !== null) {
            $this->RecentTime = $param["RecentTime"];
        }

        if (array_key_exists("FirstTime",$param) and $param["FirstTime"] !== null) {
            $this->FirstTime = $param["FirstTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("RiskId",$param) and $param["RiskId"] !== null) {
            $this->RiskId = $param["RiskId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Nick",$param) and $param["Nick"] !== null) {
            $this->Nick = $param["Nick"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("VULType",$param) and $param["VULType"] !== null) {
            $this->VULType = $param["VULType"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }

        if (array_key_exists("AppVersion",$param) and $param["AppVersion"] !== null) {
            $this->AppVersion = $param["AppVersion"];
        }

        if (array_key_exists("VULURL",$param) and $param["VULURL"] !== null) {
            $this->VULURL = $param["VULURL"];
        }

        if (array_key_exists("VULName",$param) and $param["VULName"] !== null) {
            $this->VULName = $param["VULName"];
        }

        if (array_key_exists("CVE",$param) and $param["CVE"] !== null) {
            $this->CVE = $param["CVE"];
        }

        if (array_key_exists("POCId",$param) and $param["POCId"] !== null) {
            $this->POCId = $param["POCId"];
        }

        if (array_key_exists("From",$param) and $param["From"] !== null) {
            $this->From = $param["From"];
        }

        if (array_key_exists("CWPVersion",$param) and $param["CWPVersion"] !== null) {
            $this->CWPVersion = $param["CWPVersion"];
        }

        if (array_key_exists("InstanceUUID",$param) and $param["InstanceUUID"] !== null) {
            $this->InstanceUUID = $param["InstanceUUID"];
        }

        if (array_key_exists("Payload",$param) and $param["Payload"] !== null) {
            $this->Payload = $param["Payload"];
        }

        if (array_key_exists("EMGCVulType",$param) and $param["EMGCVulType"] !== null) {
            $this->EMGCVulType = $param["EMGCVulType"];
        }

        if (array_key_exists("CVSS",$param) and $param["CVSS"] !== null) {
            $this->CVSS = $param["CVSS"];
        }

        if (array_key_exists("Index",$param) and $param["Index"] !== null) {
            $this->Index = $param["Index"];
        }

        if (array_key_exists("PCMGRId",$param) and $param["PCMGRId"] !== null) {
            $this->PCMGRId = $param["PCMGRId"];
        }

        if (array_key_exists("LogId",$param) and $param["LogId"] !== null) {
            $this->LogId = $param["LogId"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("VulTag",$param) and $param["VulTag"] !== null) {
            $this->VulTag = $param["VulTag"];
        }

        if (array_key_exists("DisclosureTime",$param) and $param["DisclosureTime"] !== null) {
            $this->DisclosureTime = $param["DisclosureTime"];
        }

        if (array_key_exists("AttackHeat",$param) and $param["AttackHeat"] !== null) {
            $this->AttackHeat = $param["AttackHeat"];
        }

        if (array_key_exists("IsSuggest",$param) and $param["IsSuggest"] !== null) {
            $this->IsSuggest = $param["IsSuggest"];
        }

        if (array_key_exists("HandleTaskId",$param) and $param["HandleTaskId"] !== null) {
            $this->HandleTaskId = $param["HandleTaskId"];
        }

        if (array_key_exists("EngineSource",$param) and $param["EngineSource"] !== null) {
            $this->EngineSource = $param["EngineSource"];
        }

        if (array_key_exists("VulRiskId",$param) and $param["VulRiskId"] !== null) {
            $this->VulRiskId = $param["VulRiskId"];
        }

        if (array_key_exists("TvdID",$param) and $param["TvdID"] !== null) {
            $this->TvdID = $param["TvdID"];
        }

        if (array_key_exists("IsOneClick",$param) and $param["IsOneClick"] !== null) {
            $this->IsOneClick = $param["IsOneClick"];
        }

        if (array_key_exists("IsPOC",$param) and $param["IsPOC"] !== null) {
            $this->IsPOC = $param["IsPOC"];
        }
    }
}
