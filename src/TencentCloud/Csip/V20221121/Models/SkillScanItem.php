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
 * @method string getSkillName() 获取Skill 名称
 * @method void setSkillName(string $SkillName) 设置Skill 名称
 * @method string getSkillDescription() 获取Skill 描述，帮助理解 Skill 的主要用途
 * @method void setSkillDescription(string $SkillDescription) 设置Skill 描述，帮助理解 Skill 的主要用途
 * @method string getContentHash() 获取ZIP 文件的 SHA256 Hash
参数格式：sha256:<64位hex>
 * @method void setContentHash(string $ContentHash) 设置ZIP 文件的 SHA256 Hash
参数格式：sha256:<64位hex>
 * @method integer getUploadFileCount() 获取原始上传 ZIP 文件解压后的实际文件数，也是计费的范围，扫描成功后1个文件计为1次额度
 * @method void setUploadFileCount(integer $UploadFileCount) 设置原始上传 ZIP 文件解压后的实际文件数，也是计费的范围，扫描成功后1个文件计为1次额度
 * @method string getRiskLevel() 获取综合风险等级
枚举值：
malicious：恶意
suspicious：可疑
benign：可信
 * @method void setRiskLevel(string $RiskLevel) 设置综合风险等级
枚举值：
malicious：恶意
suspicious：可疑
benign：可信
 * @method string getPrimaryRuleID() 获取风险主标签融合规则 ID（9xxxx），由服务端从命中的融合风险标签中生成；benign 且无规则命中时为空。展示名称可通过 RuleCatalog 获取
 * @method void setPrimaryRuleID(string $PrimaryRuleID) 设置风险主标签融合规则 ID（9xxxx），由服务端从命中的融合风险标签中生成；benign 且无规则命中时为空。展示名称可通过 RuleCatalog 获取
 * @method string getMitigation() 获取综合处置建议，用于指导调用方优先执行下线、隔离、修复、复检等动作。历史结果中可能为空。传 Language=en-US 时返回英文文案
 * @method void setMitigation(string $Mitigation) 设置综合处置建议，用于指导调用方优先执行下线、隔离、修复、复检等动作。历史结果中可能为空。传 Language=en-US 时返回英文文案
 * @method string getRiskDescription() 获取风险综合描述，对本次检测发现的风险进行概括性说明。传 Language=en-US 时返回英文文案
 * @method void setRiskDescription(string $RiskDescription) 设置风险综合描述，对本次检测发现的风险进行概括性说明。传 Language=en-US 时返回英文文案
 * @method integer getSecurityScore() 获取安全评分
取值范围：[0, 100]
补充说明：100 为最安全
 * @method void setSecurityScore(integer $SecurityScore) 设置安全评分
取值范围：[0, 100]
补充说明：100 为最安全
 * @method integer getEngineVersion() 获取本次扫描使用的引擎版本号
 * @method void setEngineVersion(integer $EngineVersion) 设置本次扫描使用的引擎版本号
 * @method array getCapabilityTags() 获取Skill 能力标签列表，描述 Skill 具备的能力特征或适用场景。不等同于风险标签，也不参与风险等级判定。传 Language=en-US 时 Name 切换为英文，ID 保持不变
 * @method void setCapabilityTags(array $CapabilityTags) 设置Skill 能力标签列表，描述 Skill 具备的能力特征或适用场景。不等同于风险标签，也不参与风险等级判定。传 Language=en-US 时 Name 切换为英文，ID 保持不变
 * @method array getRuleCatalog() 获取融合规则目录全集，包含所有融合规则类别（9xxxx），调用方可据此展示分类标签，无需本地维护映射表。传 Language=en-US 时返回英文名称
 * @method void setRuleCatalog(array $RuleCatalog) 设置融合规则目录全集，包含所有融合规则类别（9xxxx），调用方可据此展示分类标签，无需本地维护映射表。传 Language=en-US 时返回英文名称
 * @method array getScanItems() 获取扫描结果详情，按子引擎分组。每个元素包含 ScanType（引擎类型）和 RuleList（命中规则列表）。规则中的 RuleID 使用融合编码（9xxxx），可与 RuleCatalog 交叉引用。传 Language=en-US 时 Description 返回英文文本
 * @method void setScanItems(array $ScanItems) 设置扫描结果详情，按子引擎分组。每个元素包含 ScanType（引擎类型）和 RuleList（命中规则列表）。规则中的 RuleID 使用融合编码（9xxxx），可与 RuleCatalog 交叉引用。传 Language=en-US 时 Description 返回英文文本
 * @method string getReportURL() 获取综合安全审计报告地址（签名 URL）。有效期由请求参数 ReportURLExpireHours 控制
 * @method void setReportURL(string $ReportURL) 设置综合安全审计报告地址（签名 URL）。有效期由请求参数 ReportURLExpireHours 控制
 * @method string getScannedAt() 获取扫描完成时间。仅 Status=SUCCESS 时有值
参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）
 * @method void setScannedAt(string $ScannedAt) 设置扫描完成时间。仅 Status=SUCCESS 时有值
参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）
 * @method string getCreatedAt() 获取任务创建时间。仅 Status=SCANNING 时有值
参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）
 * @method void setCreatedAt(string $CreatedAt) 设置任务创建时间。仅 Status=SCANNING 时有值
参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）
 * @method string getFailedAt() 获取失败时间。仅 Status=FAILED 时有值
参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）
 * @method void setFailedAt(string $FailedAt) 设置失败时间。仅 Status=FAILED 时有值
参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）
 * @method string getMessage() 获取失败原因描述。仅 Status=FAILED 时有值
 * @method void setMessage(string $Message) 设置失败原因描述。仅 Status=FAILED 时有值
 */
class SkillScanItem extends AbstractModel
{
    /**
     * @var string Skill 名称
     */
    public $SkillName;

    /**
     * @var string Skill 描述，帮助理解 Skill 的主要用途
     */
    public $SkillDescription;

    /**
     * @var string ZIP 文件的 SHA256 Hash
参数格式：sha256:<64位hex>
     */
    public $ContentHash;

    /**
     * @var integer 原始上传 ZIP 文件解压后的实际文件数，也是计费的范围，扫描成功后1个文件计为1次额度
     */
    public $UploadFileCount;

    /**
     * @var string 综合风险等级
枚举值：
malicious：恶意
suspicious：可疑
benign：可信
     */
    public $RiskLevel;

    /**
     * @var string 风险主标签融合规则 ID（9xxxx），由服务端从命中的融合风险标签中生成；benign 且无规则命中时为空。展示名称可通过 RuleCatalog 获取
     */
    public $PrimaryRuleID;

    /**
     * @var string 综合处置建议，用于指导调用方优先执行下线、隔离、修复、复检等动作。历史结果中可能为空。传 Language=en-US 时返回英文文案
     */
    public $Mitigation;

    /**
     * @var string 风险综合描述，对本次检测发现的风险进行概括性说明。传 Language=en-US 时返回英文文案
     */
    public $RiskDescription;

    /**
     * @var integer 安全评分
取值范围：[0, 100]
补充说明：100 为最安全
     */
    public $SecurityScore;

    /**
     * @var integer 本次扫描使用的引擎版本号
     */
    public $EngineVersion;

    /**
     * @var array Skill 能力标签列表，描述 Skill 具备的能力特征或适用场景。不等同于风险标签，也不参与风险等级判定。传 Language=en-US 时 Name 切换为英文，ID 保持不变
     */
    public $CapabilityTags;

    /**
     * @var array 融合规则目录全集，包含所有融合规则类别（9xxxx），调用方可据此展示分类标签，无需本地维护映射表。传 Language=en-US 时返回英文名称
     */
    public $RuleCatalog;

    /**
     * @var array 扫描结果详情，按子引擎分组。每个元素包含 ScanType（引擎类型）和 RuleList（命中规则列表）。规则中的 RuleID 使用融合编码（9xxxx），可与 RuleCatalog 交叉引用。传 Language=en-US 时 Description 返回英文文本
     */
    public $ScanItems;

    /**
     * @var string 综合安全审计报告地址（签名 URL）。有效期由请求参数 ReportURLExpireHours 控制
     */
    public $ReportURL;

    /**
     * @var string 扫描完成时间。仅 Status=SUCCESS 时有值
参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）
     */
    public $ScannedAt;

    /**
     * @var string 任务创建时间。仅 Status=SCANNING 时有值
参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）
     */
    public $CreatedAt;

    /**
     * @var string 失败时间。仅 Status=FAILED 时有值
参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）
     */
    public $FailedAt;

    /**
     * @var string 失败原因描述。仅 Status=FAILED 时有值
     */
    public $Message;

    /**
     * @param string $SkillName Skill 名称
     * @param string $SkillDescription Skill 描述，帮助理解 Skill 的主要用途
     * @param string $ContentHash ZIP 文件的 SHA256 Hash
参数格式：sha256:<64位hex>
     * @param integer $UploadFileCount 原始上传 ZIP 文件解压后的实际文件数，也是计费的范围，扫描成功后1个文件计为1次额度
     * @param string $RiskLevel 综合风险等级
枚举值：
malicious：恶意
suspicious：可疑
benign：可信
     * @param string $PrimaryRuleID 风险主标签融合规则 ID（9xxxx），由服务端从命中的融合风险标签中生成；benign 且无规则命中时为空。展示名称可通过 RuleCatalog 获取
     * @param string $Mitigation 综合处置建议，用于指导调用方优先执行下线、隔离、修复、复检等动作。历史结果中可能为空。传 Language=en-US 时返回英文文案
     * @param string $RiskDescription 风险综合描述，对本次检测发现的风险进行概括性说明。传 Language=en-US 时返回英文文案
     * @param integer $SecurityScore 安全评分
取值范围：[0, 100]
补充说明：100 为最安全
     * @param integer $EngineVersion 本次扫描使用的引擎版本号
     * @param array $CapabilityTags Skill 能力标签列表，描述 Skill 具备的能力特征或适用场景。不等同于风险标签，也不参与风险等级判定。传 Language=en-US 时 Name 切换为英文，ID 保持不变
     * @param array $RuleCatalog 融合规则目录全集，包含所有融合规则类别（9xxxx），调用方可据此展示分类标签，无需本地维护映射表。传 Language=en-US 时返回英文名称
     * @param array $ScanItems 扫描结果详情，按子引擎分组。每个元素包含 ScanType（引擎类型）和 RuleList（命中规则列表）。规则中的 RuleID 使用融合编码（9xxxx），可与 RuleCatalog 交叉引用。传 Language=en-US 时 Description 返回英文文本
     * @param string $ReportURL 综合安全审计报告地址（签名 URL）。有效期由请求参数 ReportURLExpireHours 控制
     * @param string $ScannedAt 扫描完成时间。仅 Status=SUCCESS 时有值
参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）
     * @param string $CreatedAt 任务创建时间。仅 Status=SCANNING 时有值
参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）
     * @param string $FailedAt 失败时间。仅 Status=FAILED 时有值
参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）
     * @param string $Message 失败原因描述。仅 Status=FAILED 时有值
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
