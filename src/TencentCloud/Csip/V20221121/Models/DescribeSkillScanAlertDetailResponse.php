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
 * DescribeSkillScanAlertDetail返回参数结构体
 *
 * @method integer getID() 获取<p>告警记录 ID</p>
 * @method void setID(integer $ID) 设置<p>告警记录 ID</p>
 * @method integer getAppID() 获取<p>租户 AppID</p>
 * @method void setAppID(integer $AppID) 设置<p>租户 AppID</p>
 * @method string getUUID() 获取<p>主机 UUID</p>
 * @method void setUUID(string $UUID) 设置<p>主机 UUID</p>
 * @method string getHostIP() 获取<p>主机 IP 地址</p>
 * @method void setHostIP(string $HostIP) 设置<p>主机 IP 地址</p>
 * @method string getInstanceID() 获取<p>实例 ID<br>参数格式：形如 ins-xxxxxxxx</p>
 * @method void setInstanceID(string $InstanceID) 设置<p>实例 ID<br>参数格式：形如 ins-xxxxxxxx</p>
 * @method string getInstanceName() 获取<p>实例名称</p>
 * @method void setInstanceName(string $InstanceName) 设置<p>实例名称</p>
 * @method string getBelongAssetType() 获取<p>归属资产类型<br>枚举值：<br>HOST：主机<br>CONTAINER：容器</p>
 * @method void setBelongAssetType(string $BelongAssetType) 设置<p>归属资产类型<br>枚举值：<br>HOST：主机<br>CONTAINER：容器</p>
 * @method string getSkillName() 获取<p>Skill 名称</p>
 * @method void setSkillName(string $SkillName) 设置<p>Skill 名称</p>
 * @method string getSkillPath() 获取<p>Skill 文件路径</p>
 * @method void setSkillPath(string $SkillPath) 设置<p>Skill 文件路径</p>
 * @method string getScope() 获取<p>Skill 作用域</p>
 * @method void setScope(string $Scope) 设置<p>Skill 作用域</p>
 * @method string getVersion() 获取<p>Skill 版本号</p>
 * @method void setVersion(string $Version) 设置<p>Skill 版本号</p>
 * @method string getContentHash() 获取<p>文件内容 SHA256 哈希值<br>参数格式：sha256:&lt;64位hex&gt;</p>
 * @method void setContentHash(string $ContentHash) 设置<p>文件内容 SHA256 哈希值<br>参数格式：sha256:&lt;64位hex&gt;</p>
 * @method string getRiskLevel() 获取<p>风险等级<br>枚举值：<br>malicious：恶意<br>suspicious：可疑</p>
 * @method void setRiskLevel(string $RiskLevel) 设置<p>风险等级<br>枚举值：<br>malicious：恶意<br>suspicious：可疑</p>
 * @method integer getSecurityScore() 获取<p>安全评分<br>取值范围：[0, 100]</p>
 * @method void setSecurityScore(integer $SecurityScore) 设置<p>安全评分<br>取值范围：[0, 100]</p>
 * @method string getPrimaryRuleID() 获取<p>主命中规则 ID</p>
 * @method void setPrimaryRuleID(string $PrimaryRuleID) 设置<p>主命中规则 ID</p>
 * @method integer getEngineVersion() 获取<p>检测引擎版本号</p>
 * @method void setEngineVersion(integer $EngineVersion) 设置<p>检测引擎版本号</p>
 * @method integer getStatus() 获取<p>处理状态<br>枚举值：<br>0：未处理<br>1：已处理<br>2：已忽略<br>3：已信任</p>
 * @method void setStatus(integer $Status) 设置<p>处理状态<br>枚举值：<br>0：未处理<br>1：已处理<br>2：已忽略<br>3：已信任</p>
 * @method string getLevel() 获取<p>告警级别<br>枚举值：<br>high：高危<br>medium：中危</p>
 * @method void setLevel(string $Level) 设置<p>告警级别<br>枚举值：<br>high：高危<br>medium：中危</p>
 * @method string getCreateTime() 获取<p>首次检出时间<br>参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>首次检出时间<br>参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）</p>
 * @method string getSkillDescription() 获取<p>Skill 功能描述（引擎实时查询返回）</p>
 * @method void setSkillDescription(string $SkillDescription) 设置<p>Skill 功能描述（引擎实时查询返回）</p>
 * @method string getRiskDescription() 获取<p>综合风险摘要，概括本次检测发现的主要风险/攻击链（引擎实时查询返回）。传 Language=en-US 时返回英文文案</p>
 * @method void setRiskDescription(string $RiskDescription) 设置<p>综合风险摘要，概括本次检测发现的主要风险/攻击链（引擎实时查询返回）。传 Language=en-US 时返回英文文案</p>
 * @method string getMitigation() 获取<p>处置建议（引擎实时查询返回）</p>
 * @method void setMitigation(string $Mitigation) 设置<p>处置建议（引擎实时查询返回）</p>
 * @method array getCapabilityTags() 获取<p>Skill 能力标签列表（引擎实时查询返回）</p>
 * @method void setCapabilityTags(array $CapabilityTags) 设置<p>Skill 能力标签列表（引擎实时查询返回）</p>
 * @method array getRuleCatalog() 获取<p>融合规则目录列表（引擎实时查询返回）</p>
 * @method void setRuleCatalog(array $RuleCatalog) 设置<p>融合规则目录列表（引擎实时查询返回）</p>
 * @method array getScanItems() 获取<p>扫描结果详情列表（引擎实时查询返回）</p>
 * @method void setScanItems(array $ScanItems) 设置<p>扫描结果详情列表（引擎实时查询返回）</p>
 * @method string getReportURL() 获取<p>检测报告链接（引擎实时查询返回）</p>
 * @method void setReportURL(string $ReportURL) 设置<p>检测报告链接（引擎实时查询返回）</p>
 * @method string getScannedAt() 获取<p>扫描完成时间（引擎实时查询返回）<br>参数格式：ISO8601 格式</p>
 * @method void setScannedAt(string $ScannedAt) 设置<p>扫描完成时间（引擎实时查询返回）<br>参数格式：ISO8601 格式</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeSkillScanAlertDetailResponse extends AbstractModel
{
    /**
     * @var integer <p>告警记录 ID</p>
     */
    public $ID;

    /**
     * @var integer <p>租户 AppID</p>
     */
    public $AppID;

    /**
     * @var string <p>主机 UUID</p>
     */
    public $UUID;

    /**
     * @var string <p>主机 IP 地址</p>
     */
    public $HostIP;

    /**
     * @var string <p>实例 ID<br>参数格式：形如 ins-xxxxxxxx</p>
     */
    public $InstanceID;

    /**
     * @var string <p>实例名称</p>
     */
    public $InstanceName;

    /**
     * @var string <p>归属资产类型<br>枚举值：<br>HOST：主机<br>CONTAINER：容器</p>
     */
    public $BelongAssetType;

    /**
     * @var string <p>Skill 名称</p>
     */
    public $SkillName;

    /**
     * @var string <p>Skill 文件路径</p>
     */
    public $SkillPath;

    /**
     * @var string <p>Skill 作用域</p>
     */
    public $Scope;

    /**
     * @var string <p>Skill 版本号</p>
     */
    public $Version;

    /**
     * @var string <p>文件内容 SHA256 哈希值<br>参数格式：sha256:&lt;64位hex&gt;</p>
     */
    public $ContentHash;

    /**
     * @var string <p>风险等级<br>枚举值：<br>malicious：恶意<br>suspicious：可疑</p>
     */
    public $RiskLevel;

    /**
     * @var integer <p>安全评分<br>取值范围：[0, 100]</p>
     */
    public $SecurityScore;

    /**
     * @var string <p>主命中规则 ID</p>
     */
    public $PrimaryRuleID;

    /**
     * @var integer <p>检测引擎版本号</p>
     */
    public $EngineVersion;

    /**
     * @var integer <p>处理状态<br>枚举值：<br>0：未处理<br>1：已处理<br>2：已忽略<br>3：已信任</p>
     */
    public $Status;

    /**
     * @var string <p>告警级别<br>枚举值：<br>high：高危<br>medium：中危</p>
     */
    public $Level;

    /**
     * @var string <p>首次检出时间<br>参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）</p>
     */
    public $CreateTime;

    /**
     * @var string <p>Skill 功能描述（引擎实时查询返回）</p>
     */
    public $SkillDescription;

    /**
     * @var string <p>综合风险摘要，概括本次检测发现的主要风险/攻击链（引擎实时查询返回）。传 Language=en-US 时返回英文文案</p>
     */
    public $RiskDescription;

    /**
     * @var string <p>处置建议（引擎实时查询返回）</p>
     */
    public $Mitigation;

    /**
     * @var array <p>Skill 能力标签列表（引擎实时查询返回）</p>
     */
    public $CapabilityTags;

    /**
     * @var array <p>融合规则目录列表（引擎实时查询返回）</p>
     */
    public $RuleCatalog;

    /**
     * @var array <p>扫描结果详情列表（引擎实时查询返回）</p>
     */
    public $ScanItems;

    /**
     * @var string <p>检测报告链接（引擎实时查询返回）</p>
     */
    public $ReportURL;

    /**
     * @var string <p>扫描完成时间（引擎实时查询返回）<br>参数格式：ISO8601 格式</p>
     */
    public $ScannedAt;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $ID <p>告警记录 ID</p>
     * @param integer $AppID <p>租户 AppID</p>
     * @param string $UUID <p>主机 UUID</p>
     * @param string $HostIP <p>主机 IP 地址</p>
     * @param string $InstanceID <p>实例 ID<br>参数格式：形如 ins-xxxxxxxx</p>
     * @param string $InstanceName <p>实例名称</p>
     * @param string $BelongAssetType <p>归属资产类型<br>枚举值：<br>HOST：主机<br>CONTAINER：容器</p>
     * @param string $SkillName <p>Skill 名称</p>
     * @param string $SkillPath <p>Skill 文件路径</p>
     * @param string $Scope <p>Skill 作用域</p>
     * @param string $Version <p>Skill 版本号</p>
     * @param string $ContentHash <p>文件内容 SHA256 哈希值<br>参数格式：sha256:&lt;64位hex&gt;</p>
     * @param string $RiskLevel <p>风险等级<br>枚举值：<br>malicious：恶意<br>suspicious：可疑</p>
     * @param integer $SecurityScore <p>安全评分<br>取值范围：[0, 100]</p>
     * @param string $PrimaryRuleID <p>主命中规则 ID</p>
     * @param integer $EngineVersion <p>检测引擎版本号</p>
     * @param integer $Status <p>处理状态<br>枚举值：<br>0：未处理<br>1：已处理<br>2：已忽略<br>3：已信任</p>
     * @param string $Level <p>告警级别<br>枚举值：<br>high：高危<br>medium：中危</p>
     * @param string $CreateTime <p>首次检出时间<br>参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）</p>
     * @param string $SkillDescription <p>Skill 功能描述（引擎实时查询返回）</p>
     * @param string $RiskDescription <p>综合风险摘要，概括本次检测发现的主要风险/攻击链（引擎实时查询返回）。传 Language=en-US 时返回英文文案</p>
     * @param string $Mitigation <p>处置建议（引擎实时查询返回）</p>
     * @param array $CapabilityTags <p>Skill 能力标签列表（引擎实时查询返回）</p>
     * @param array $RuleCatalog <p>融合规则目录列表（引擎实时查询返回）</p>
     * @param array $ScanItems <p>扫描结果详情列表（引擎实时查询返回）</p>
     * @param string $ReportURL <p>检测报告链接（引擎实时查询返回）</p>
     * @param string $ScannedAt <p>扫描完成时间（引擎实时查询返回）<br>参数格式：ISO8601 格式</p>
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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

        if (array_key_exists("AppID",$param) and $param["AppID"] !== null) {
            $this->AppID = $param["AppID"];
        }

        if (array_key_exists("UUID",$param) and $param["UUID"] !== null) {
            $this->UUID = $param["UUID"];
        }

        if (array_key_exists("HostIP",$param) and $param["HostIP"] !== null) {
            $this->HostIP = $param["HostIP"];
        }

        if (array_key_exists("InstanceID",$param) and $param["InstanceID"] !== null) {
            $this->InstanceID = $param["InstanceID"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("BelongAssetType",$param) and $param["BelongAssetType"] !== null) {
            $this->BelongAssetType = $param["BelongAssetType"];
        }

        if (array_key_exists("SkillName",$param) and $param["SkillName"] !== null) {
            $this->SkillName = $param["SkillName"];
        }

        if (array_key_exists("SkillPath",$param) and $param["SkillPath"] !== null) {
            $this->SkillPath = $param["SkillPath"];
        }

        if (array_key_exists("Scope",$param) and $param["Scope"] !== null) {
            $this->Scope = $param["Scope"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("ContentHash",$param) and $param["ContentHash"] !== null) {
            $this->ContentHash = $param["ContentHash"];
        }

        if (array_key_exists("RiskLevel",$param) and $param["RiskLevel"] !== null) {
            $this->RiskLevel = $param["RiskLevel"];
        }

        if (array_key_exists("SecurityScore",$param) and $param["SecurityScore"] !== null) {
            $this->SecurityScore = $param["SecurityScore"];
        }

        if (array_key_exists("PrimaryRuleID",$param) and $param["PrimaryRuleID"] !== null) {
            $this->PrimaryRuleID = $param["PrimaryRuleID"];
        }

        if (array_key_exists("EngineVersion",$param) and $param["EngineVersion"] !== null) {
            $this->EngineVersion = $param["EngineVersion"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("SkillDescription",$param) and $param["SkillDescription"] !== null) {
            $this->SkillDescription = $param["SkillDescription"];
        }

        if (array_key_exists("RiskDescription",$param) and $param["RiskDescription"] !== null) {
            $this->RiskDescription = $param["RiskDescription"];
        }

        if (array_key_exists("Mitigation",$param) and $param["Mitigation"] !== null) {
            $this->Mitigation = $param["Mitigation"];
        }

        if (array_key_exists("CapabilityTags",$param) and $param["CapabilityTags"] !== null) {
            $this->CapabilityTags = [];
            foreach ($param["CapabilityTags"] as $key => $value){
                $obj = new SkillCapabilityTag();
                $obj->deserialize($value);
                array_push($this->CapabilityTags, $obj);
            }
        }

        if (array_key_exists("RuleCatalog",$param) and $param["RuleCatalog"] !== null) {
            $this->RuleCatalog = [];
            foreach ($param["RuleCatalog"] as $key => $value){
                $obj = new SkillRuleCatalogItem();
                $obj->deserialize($value);
                array_push($this->RuleCatalog, $obj);
            }
        }

        if (array_key_exists("ScanItems",$param) and $param["ScanItems"] !== null) {
            $this->ScanItems = [];
            foreach ($param["ScanItems"] as $key => $value){
                $obj = new SkillScanEngineResult();
                $obj->deserialize($value);
                array_push($this->ScanItems, $obj);
            }
        }

        if (array_key_exists("ReportURL",$param) and $param["ReportURL"] !== null) {
            $this->ReportURL = $param["ReportURL"];
        }

        if (array_key_exists("ScannedAt",$param) and $param["ScannedAt"] !== null) {
            $this->ScannedAt = $param["ScannedAt"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
