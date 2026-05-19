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
 * Skill 安全检测结果详情
 *
 * @method string getSkillName() 获取<p>Skill 名称</p>
 * @method void setSkillName(string $SkillName) 设置<p>Skill 名称</p>
 * @method string getSkillDescription() 获取<p>Skill 描述，帮助理解 Skill 的主要用途</p>
 * @method void setSkillDescription(string $SkillDescription) 设置<p>Skill 描述，帮助理解 Skill 的主要用途</p>
 * @method string getContentHash() 获取<p>ZIP 文件的 SHA256 Hash<br>参数格式：sha256:&lt;64位hex&gt;</p>
 * @method void setContentHash(string $ContentHash) 设置<p>ZIP 文件的 SHA256 Hash<br>参数格式：sha256:&lt;64位hex&gt;</p>
 * @method integer getUploadFileCount() 获取<p>原始上传 ZIP 文件解压后的实际文件数，也是计费的范围，扫描成功后1个文件计为1次额度</p>
 * @method void setUploadFileCount(integer $UploadFileCount) 设置<p>原始上传 ZIP 文件解压后的实际文件数，也是计费的范围，扫描成功后1个文件计为1次额度</p>
 * @method string getRiskLevel() 获取<p>综合风险等级<br>枚举值：<br>malicious：恶意<br>suspicious：可疑<br>benign：可信</p>
 * @method void setRiskLevel(string $RiskLevel) 设置<p>综合风险等级<br>枚举值：<br>malicious：恶意<br>suspicious：可疑<br>benign：可信</p>
 * @method string getPrimaryRuleID() 获取<p>风险主标签融合规则 ID（9xxxx），由服务端从命中的融合风险标签中生成；benign 且无规则命中时为空。展示名称可通过 RuleCatalog 获取</p>
 * @method void setPrimaryRuleID(string $PrimaryRuleID) 设置<p>风险主标签融合规则 ID（9xxxx），由服务端从命中的融合风险标签中生成；benign 且无规则命中时为空。展示名称可通过 RuleCatalog 获取</p>
 * @method string getMitigation() 获取<p>综合处置建议，用于指导调用方优先执行下线、隔离、修复、复检等动作。历史结果中可能为空。传 Language=en-US 时返回英文文案</p>
 * @method void setMitigation(string $Mitigation) 设置<p>综合处置建议，用于指导调用方优先执行下线、隔离、修复、复检等动作。历史结果中可能为空。传 Language=en-US 时返回英文文案</p>
 * @method string getRiskDescription() 获取<p>风险综合描述，对本次检测发现的风险进行概括性说明。传 Language=en-US 时返回英文文案</p>
 * @method void setRiskDescription(string $RiskDescription) 设置<p>风险综合描述，对本次检测发现的风险进行概括性说明。传 Language=en-US 时返回英文文案</p>
 * @method integer getSecurityScore() 获取<p>安全评分取值范围：[0, 100]补充说明：分数越高越安全</p>
 * @method void setSecurityScore(integer $SecurityScore) 设置<p>安全评分取值范围：[0, 100]补充说明：分数越高越安全</p>
 * @method integer getEngineVersion() 获取<p>本次扫描使用的引擎版本号</p>
 * @method void setEngineVersion(integer $EngineVersion) 设置<p>本次扫描使用的引擎版本号</p>
 * @method array getCapabilityTags() 获取<p>Skill 能力标签列表，描述 Skill 具备的能力特征或适用场景。不等同于风险标签，也不参与风险等级判定。传 Language=en-US 时 Name 切换为英文，ID 保持不变</p>
 * @method void setCapabilityTags(array $CapabilityTags) 设置<p>Skill 能力标签列表，描述 Skill 具备的能力特征或适用场景。不等同于风险标签，也不参与风险等级判定。传 Language=en-US 时 Name 切换为英文，ID 保持不变</p>
 * @method array getRuleCatalog() 获取<p>融合规则目录全集，包含所有融合规则类别（9xxxx），调用方可据此展示分类标签，无需本地维护映射表。传 Language=en-US 时返回英文名称</p>
 * @method void setRuleCatalog(array $RuleCatalog) 设置<p>融合规则目录全集，包含所有融合规则类别（9xxxx），调用方可据此展示分类标签，无需本地维护映射表。传 Language=en-US 时返回英文名称</p>
 * @method array getScanItems() 获取<p>扫描结果详情，按子引擎分组。每个元素包含 ScanType（引擎类型）和 RuleList（命中规则列表）。规则中的 RuleID 使用融合编码（9xxxx），可与 RuleCatalog 交叉引用。传 Language=en-US 时 Description 返回英文文本</p>
 * @method void setScanItems(array $ScanItems) 设置<p>扫描结果详情，按子引擎分组。每个元素包含 ScanType（引擎类型）和 RuleList（命中规则列表）。规则中的 RuleID 使用融合编码（9xxxx），可与 RuleCatalog 交叉引用。传 Language=en-US 时 Description 返回英文文本</p>
 * @method string getReportURL() 获取<p>综合安全审计报告地址（签名 URL）。有效期由请求参数 ReportURLExpireHours 控制</p>
 * @method void setReportURL(string $ReportURL) 设置<p>综合安全审计报告地址（签名 URL）。有效期由请求参数 ReportURLExpireHours 控制</p>
 * @method string getScannedAt() 获取<p>扫描完成时间。仅 Status=SUCCESS 时有值<br>参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）</p>
 * @method void setScannedAt(string $ScannedAt) 设置<p>扫描完成时间。仅 Status=SUCCESS 时有值<br>参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）</p>
 * @method string getCreatedAt() 获取<p>任务创建时间。仅 Status=SCANNING 时有值<br>参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）</p>
 * @method void setCreatedAt(string $CreatedAt) 设置<p>任务创建时间。仅 Status=SCANNING 时有值<br>参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）</p>
 * @method string getFailedAt() 获取<p>失败时间。仅 Status=FAILED 时有值<br>参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）</p>
 * @method void setFailedAt(string $FailedAt) 设置<p>失败时间。仅 Status=FAILED 时有值<br>参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）</p>
 * @method string getMessage() 获取<p>失败原因描述。仅 Status=FAILED 时有值</p>
 * @method void setMessage(string $Message) 设置<p>失败原因描述。仅 Status=FAILED 时有值</p>
 */
class SkillScanItem extends AbstractModel
{
    /**
     * @var string <p>Skill 名称</p>
     */
    public $SkillName;

    /**
     * @var string <p>Skill 描述，帮助理解 Skill 的主要用途</p>
     */
    public $SkillDescription;

    /**
     * @var string <p>ZIP 文件的 SHA256 Hash<br>参数格式：sha256:&lt;64位hex&gt;</p>
     */
    public $ContentHash;

    /**
     * @var integer <p>原始上传 ZIP 文件解压后的实际文件数，也是计费的范围，扫描成功后1个文件计为1次额度</p>
     */
    public $UploadFileCount;

    /**
     * @var string <p>综合风险等级<br>枚举值：<br>malicious：恶意<br>suspicious：可疑<br>benign：可信</p>
     */
    public $RiskLevel;

    /**
     * @var string <p>风险主标签融合规则 ID（9xxxx），由服务端从命中的融合风险标签中生成；benign 且无规则命中时为空。展示名称可通过 RuleCatalog 获取</p>
     */
    public $PrimaryRuleID;

    /**
     * @var string <p>综合处置建议，用于指导调用方优先执行下线、隔离、修复、复检等动作。历史结果中可能为空。传 Language=en-US 时返回英文文案</p>
     */
    public $Mitigation;

    /**
     * @var string <p>风险综合描述，对本次检测发现的风险进行概括性说明。传 Language=en-US 时返回英文文案</p>
     */
    public $RiskDescription;

    /**
     * @var integer <p>安全评分取值范围：[0, 100]补充说明：分数越高越安全</p>
     */
    public $SecurityScore;

    /**
     * @var integer <p>本次扫描使用的引擎版本号</p>
     */
    public $EngineVersion;

    /**
     * @var array <p>Skill 能力标签列表，描述 Skill 具备的能力特征或适用场景。不等同于风险标签，也不参与风险等级判定。传 Language=en-US 时 Name 切换为英文，ID 保持不变</p>
     */
    public $CapabilityTags;

    /**
     * @var array <p>融合规则目录全集，包含所有融合规则类别（9xxxx），调用方可据此展示分类标签，无需本地维护映射表。传 Language=en-US 时返回英文名称</p>
     */
    public $RuleCatalog;

    /**
     * @var array <p>扫描结果详情，按子引擎分组。每个元素包含 ScanType（引擎类型）和 RuleList（命中规则列表）。规则中的 RuleID 使用融合编码（9xxxx），可与 RuleCatalog 交叉引用。传 Language=en-US 时 Description 返回英文文本</p>
     */
    public $ScanItems;

    /**
     * @var string <p>综合安全审计报告地址（签名 URL）。有效期由请求参数 ReportURLExpireHours 控制</p>
     */
    public $ReportURL;

    /**
     * @var string <p>扫描完成时间。仅 Status=SUCCESS 时有值<br>参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）</p>
     */
    public $ScannedAt;

    /**
     * @var string <p>任务创建时间。仅 Status=SCANNING 时有值<br>参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）</p>
     */
    public $CreatedAt;

    /**
     * @var string <p>失败时间。仅 Status=FAILED 时有值<br>参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）</p>
     */
    public $FailedAt;

    /**
     * @var string <p>失败原因描述。仅 Status=FAILED 时有值</p>
     */
    public $Message;

    /**
     * @param string $SkillName <p>Skill 名称</p>
     * @param string $SkillDescription <p>Skill 描述，帮助理解 Skill 的主要用途</p>
     * @param string $ContentHash <p>ZIP 文件的 SHA256 Hash<br>参数格式：sha256:&lt;64位hex&gt;</p>
     * @param integer $UploadFileCount <p>原始上传 ZIP 文件解压后的实际文件数，也是计费的范围，扫描成功后1个文件计为1次额度</p>
     * @param string $RiskLevel <p>综合风险等级<br>枚举值：<br>malicious：恶意<br>suspicious：可疑<br>benign：可信</p>
     * @param string $PrimaryRuleID <p>风险主标签融合规则 ID（9xxxx），由服务端从命中的融合风险标签中生成；benign 且无规则命中时为空。展示名称可通过 RuleCatalog 获取</p>
     * @param string $Mitigation <p>综合处置建议，用于指导调用方优先执行下线、隔离、修复、复检等动作。历史结果中可能为空。传 Language=en-US 时返回英文文案</p>
     * @param string $RiskDescription <p>风险综合描述，对本次检测发现的风险进行概括性说明。传 Language=en-US 时返回英文文案</p>
     * @param integer $SecurityScore <p>安全评分取值范围：[0, 100]补充说明：分数越高越安全</p>
     * @param integer $EngineVersion <p>本次扫描使用的引擎版本号</p>
     * @param array $CapabilityTags <p>Skill 能力标签列表，描述 Skill 具备的能力特征或适用场景。不等同于风险标签，也不参与风险等级判定。传 Language=en-US 时 Name 切换为英文，ID 保持不变</p>
     * @param array $RuleCatalog <p>融合规则目录全集，包含所有融合规则类别（9xxxx），调用方可据此展示分类标签，无需本地维护映射表。传 Language=en-US 时返回英文名称</p>
     * @param array $ScanItems <p>扫描结果详情，按子引擎分组。每个元素包含 ScanType（引擎类型）和 RuleList（命中规则列表）。规则中的 RuleID 使用融合编码（9xxxx），可与 RuleCatalog 交叉引用。传 Language=en-US 时 Description 返回英文文本</p>
     * @param string $ReportURL <p>综合安全审计报告地址（签名 URL）。有效期由请求参数 ReportURLExpireHours 控制</p>
     * @param string $ScannedAt <p>扫描完成时间。仅 Status=SUCCESS 时有值<br>参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）</p>
     * @param string $CreatedAt <p>任务创建时间。仅 Status=SCANNING 时有值<br>参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）</p>
     * @param string $FailedAt <p>失败时间。仅 Status=FAILED 时有值<br>参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）</p>
     * @param string $Message <p>失败原因描述。仅 Status=FAILED 时有值</p>
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
        if (array_key_exists("SkillName",$param) and $param["SkillName"] !== null) {
            $this->SkillName = $param["SkillName"];
        }

        if (array_key_exists("SkillDescription",$param) and $param["SkillDescription"] !== null) {
            $this->SkillDescription = $param["SkillDescription"];
        }

        if (array_key_exists("ContentHash",$param) and $param["ContentHash"] !== null) {
            $this->ContentHash = $param["ContentHash"];
        }

        if (array_key_exists("UploadFileCount",$param) and $param["UploadFileCount"] !== null) {
            $this->UploadFileCount = $param["UploadFileCount"];
        }

        if (array_key_exists("RiskLevel",$param) and $param["RiskLevel"] !== null) {
            $this->RiskLevel = $param["RiskLevel"];
        }

        if (array_key_exists("PrimaryRuleID",$param) and $param["PrimaryRuleID"] !== null) {
            $this->PrimaryRuleID = $param["PrimaryRuleID"];
        }

        if (array_key_exists("Mitigation",$param) and $param["Mitigation"] !== null) {
            $this->Mitigation = $param["Mitigation"];
        }

        if (array_key_exists("RiskDescription",$param) and $param["RiskDescription"] !== null) {
            $this->RiskDescription = $param["RiskDescription"];
        }

        if (array_key_exists("SecurityScore",$param) and $param["SecurityScore"] !== null) {
            $this->SecurityScore = $param["SecurityScore"];
        }

        if (array_key_exists("EngineVersion",$param) and $param["EngineVersion"] !== null) {
            $this->EngineVersion = $param["EngineVersion"];
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

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("FailedAt",$param) and $param["FailedAt"] !== null) {
            $this->FailedAt = $param["FailedAt"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }
    }
}
