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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * skills检测结果列表
 *
 * @method string getStatus() 获取<p>检测状态：success（检测完成，有结果）、scanning（检测进行中）、not_found（无记录）、failed（检测失败）</p><p>枚举值：</p><ul><li>success： 检测完成，有结果</li><li>scanning： 检测进行中</li><li>not_found： 无记录</li><li>failed： 检测失败</li></ul>
 * @method void setStatus(string $Status) 设置<p>检测状态：success（检测完成，有结果）、scanning（检测进行中）、not_found（无记录）、failed（检测失败）</p><p>枚举值：</p><ul><li>success： 检测完成，有结果</li><li>scanning： 检测进行中</li><li>not_found： 无记录</li><li>failed： 检测失败</li></ul>
 * @method string getSkillName() 获取<p>Skill 名称，用于页面展示、结果列表呈现和人工研判</p>
 * @method void setSkillName(string $SkillName) 设置<p>Skill 名称，用于页面展示、结果列表呈现和人工研判</p>
 * @method string getSkillDescription() 获取<p>Skill 描述，通常来自 Skill 元数据或说明信息，用于帮助调用方理解 Skill 的用途</p>
 * @method void setSkillDescription(string $SkillDescription) 设置<p>Skill 描述，通常来自 Skill 元数据或说明信息，用于帮助调用方理解 Skill 的用途</p>
 * @method string getContentHash() 获取<p>ZIP 文件的 SHA256 哈希值，格式为 sha256:hex_digest</p>
 * @method void setContentHash(string $ContentHash) 设置<p>ZIP 文件的 SHA256 哈希值，格式为 sha256:hex_digest</p>
 * @method string getRiskLevel() 获取<p>风险等级：malicious（恶意）、suspicious（可疑）、benign（可信）</p>
 * @method void setRiskLevel(string $RiskLevel) 设置<p>风险等级：malicious（恶意）、suspicious（可疑）、benign（可信）</p>
 * @method string getMitigation() 获取<p>综合处置建议字段，位于 data 顶层，用于给出本次检测结果的总体修复、缓解或人工处置建议</p>
 * @method void setMitigation(string $Mitigation) 设置<p>综合处置建议字段，位于 data 顶层，用于给出本次检测结果的总体修复、缓解或人工处置建议</p>
 * @method integer getSecurityScore() 获取<p>安全评分（0-100，分数越高越安全）</p><p>取值范围：[0, 100]</p>
 * @method void setSecurityScore(integer $SecurityScore) 设置<p>安全评分（0-100，分数越高越安全）</p><p>取值范围：[0, 100]</p>
 * @method integer getEngineVersion() 获取<p>本次扫描使用的引擎版本号</p>
 * @method void setEngineVersion(integer $EngineVersion) 设置<p>本次扫描使用的引擎版本号</p>
 * @method array getCapabilityTags() 获取<p>Skill 的能力标签列表，对外固定返回格式为 [{id,name}]。该字段用于描述 Skill 具备的能力特征或适用场景，便于调用方做检索、展示或分类；不等同于风险标签，也不表示风险高低或命中规则结果。当 lang=en 时，仅 name 会切换为英文，id 保持不变</p>
 * @method void setCapabilityTags(array $CapabilityTags) 设置<p>Skill 的能力标签列表，对外固定返回格式为 [{id,name}]。该字段用于描述 Skill 具备的能力特征或适用场景，便于调用方做检索、展示或分类；不等同于风险标签，也不表示风险高低或命中规则结果。当 lang=en 时，仅 name 会切换为英文，id 保持不变</p>
 * @method array getRuleCatalog() 获取<p>融合规则目录全集，key 为融合 rule_id（9xxxx），value 为风险类别名称；包含所有融合规则类别，调用方可据此展示分类标签，无需本地维护映射表。传 lang=en 时返回英文名称。该对象是名称映射表，不表达主标签优先级</p>
 * @method void setRuleCatalog(array $RuleCatalog) 设置<p>融合规则目录全集，key 为融合 rule_id（9xxxx），value 为风险类别名称；包含所有融合规则类别，调用方可据此展示分类标签，无需本地维护映射表。传 lang=en 时返回英文名称。该对象是名称映射表，不表达主标签优先级</p>
 * @method array getScanItems() 获取<p>扫描结果详情，按子引擎分组，每个元素包含 scan_type（引擎类型）和 rule_list（命中的规则列表）；规则中的 rule_id 使用融合编码（9xxxx），可与 rule_catalog 交叉引用。传 lang=en 时，description 返回英文文本</p>
 * @method void setScanItems(array $ScanItems) 设置<p>扫描结果详情，按子引擎分组，每个元素包含 scan_type（引擎类型）和 rule_list（命中的规则列表）；规则中的 rule_id 使用融合编码（9xxxx），可与 rule_catalog 交叉引用。传 lang=en 时，description 返回英文文本</p>
 * @method string getReportUrl() 获取<p>综合安全审计报告地址。调用方可通过 report_url_expire_hours 指定有效期，不传时默认返回 1 年有效期地址</p>
 * @method void setReportUrl(string $ReportUrl) 设置<p>综合安全审计报告地址。调用方可通过 report_url_expire_hours 指定有效期，不传时默认返回 1 年有效期地址</p>
 * @method string getScannedAt() 获取<p>扫描完成时间</p>
 * @method void setScannedAt(string $ScannedAt) 设置<p>扫描完成时间</p>
 * @method string getCreatedAt() 获取<p>任务创建时间</p>
 * @method void setCreatedAt(string $CreatedAt) 设置<p>任务创建时间</p>
 * @method string getFailedAt() 获取<p>失败时间</p>
 * @method void setFailedAt(string $FailedAt) 设置<p>失败时间</p>
 * @method string getMessage() 获取<p>失败原因描述</p>
 * @method void setMessage(string $Message) 设置<p>失败原因描述</p>
 */
class SkillScanQueryData extends AbstractModel
{
    /**
     * @var string <p>检测状态：success（检测完成，有结果）、scanning（检测进行中）、not_found（无记录）、failed（检测失败）</p><p>枚举值：</p><ul><li>success： 检测完成，有结果</li><li>scanning： 检测进行中</li><li>not_found： 无记录</li><li>failed： 检测失败</li></ul>
     */
    public $Status;

    /**
     * @var string <p>Skill 名称，用于页面展示、结果列表呈现和人工研判</p>
     */
    public $SkillName;

    /**
     * @var string <p>Skill 描述，通常来自 Skill 元数据或说明信息，用于帮助调用方理解 Skill 的用途</p>
     */
    public $SkillDescription;

    /**
     * @var string <p>ZIP 文件的 SHA256 哈希值，格式为 sha256:hex_digest</p>
     */
    public $ContentHash;

    /**
     * @var string <p>风险等级：malicious（恶意）、suspicious（可疑）、benign（可信）</p>
     */
    public $RiskLevel;

    /**
     * @var string <p>综合处置建议字段，位于 data 顶层，用于给出本次检测结果的总体修复、缓解或人工处置建议</p>
     */
    public $Mitigation;

    /**
     * @var integer <p>安全评分（0-100，分数越高越安全）</p><p>取值范围：[0, 100]</p>
     */
    public $SecurityScore;

    /**
     * @var integer <p>本次扫描使用的引擎版本号</p>
     */
    public $EngineVersion;

    /**
     * @var array <p>Skill 的能力标签列表，对外固定返回格式为 [{id,name}]。该字段用于描述 Skill 具备的能力特征或适用场景，便于调用方做检索、展示或分类；不等同于风险标签，也不表示风险高低或命中规则结果。当 lang=en 时，仅 name 会切换为英文，id 保持不变</p>
     */
    public $CapabilityTags;

    /**
     * @var array <p>融合规则目录全集，key 为融合 rule_id（9xxxx），value 为风险类别名称；包含所有融合规则类别，调用方可据此展示分类标签，无需本地维护映射表。传 lang=en 时返回英文名称。该对象是名称映射表，不表达主标签优先级</p>
     */
    public $RuleCatalog;

    /**
     * @var array <p>扫描结果详情，按子引擎分组，每个元素包含 scan_type（引擎类型）和 rule_list（命中的规则列表）；规则中的 rule_id 使用融合编码（9xxxx），可与 rule_catalog 交叉引用。传 lang=en 时，description 返回英文文本</p>
     */
    public $ScanItems;

    /**
     * @var string <p>综合安全审计报告地址。调用方可通过 report_url_expire_hours 指定有效期，不传时默认返回 1 年有效期地址</p>
     */
    public $ReportUrl;

    /**
     * @var string <p>扫描完成时间</p>
     */
    public $ScannedAt;

    /**
     * @var string <p>任务创建时间</p>
     */
    public $CreatedAt;

    /**
     * @var string <p>失败时间</p>
     */
    public $FailedAt;

    /**
     * @var string <p>失败原因描述</p>
     */
    public $Message;

    /**
     * @param string $Status <p>检测状态：success（检测完成，有结果）、scanning（检测进行中）、not_found（无记录）、failed（检测失败）</p><p>枚举值：</p><ul><li>success： 检测完成，有结果</li><li>scanning： 检测进行中</li><li>not_found： 无记录</li><li>failed： 检测失败</li></ul>
     * @param string $SkillName <p>Skill 名称，用于页面展示、结果列表呈现和人工研判</p>
     * @param string $SkillDescription <p>Skill 描述，通常来自 Skill 元数据或说明信息，用于帮助调用方理解 Skill 的用途</p>
     * @param string $ContentHash <p>ZIP 文件的 SHA256 哈希值，格式为 sha256:hex_digest</p>
     * @param string $RiskLevel <p>风险等级：malicious（恶意）、suspicious（可疑）、benign（可信）</p>
     * @param string $Mitigation <p>综合处置建议字段，位于 data 顶层，用于给出本次检测结果的总体修复、缓解或人工处置建议</p>
     * @param integer $SecurityScore <p>安全评分（0-100，分数越高越安全）</p><p>取值范围：[0, 100]</p>
     * @param integer $EngineVersion <p>本次扫描使用的引擎版本号</p>
     * @param array $CapabilityTags <p>Skill 的能力标签列表，对外固定返回格式为 [{id,name}]。该字段用于描述 Skill 具备的能力特征或适用场景，便于调用方做检索、展示或分类；不等同于风险标签，也不表示风险高低或命中规则结果。当 lang=en 时，仅 name 会切换为英文，id 保持不变</p>
     * @param array $RuleCatalog <p>融合规则目录全集，key 为融合 rule_id（9xxxx），value 为风险类别名称；包含所有融合规则类别，调用方可据此展示分类标签，无需本地维护映射表。传 lang=en 时返回英文名称。该对象是名称映射表，不表达主标签优先级</p>
     * @param array $ScanItems <p>扫描结果详情，按子引擎分组，每个元素包含 scan_type（引擎类型）和 rule_list（命中的规则列表）；规则中的 rule_id 使用融合编码（9xxxx），可与 rule_catalog 交叉引用。传 lang=en 时，description 返回英文文本</p>
     * @param string $ReportUrl <p>综合安全审计报告地址。调用方可通过 report_url_expire_hours 指定有效期，不传时默认返回 1 年有效期地址</p>
     * @param string $ScannedAt <p>扫描完成时间</p>
     * @param string $CreatedAt <p>任务创建时间</p>
     * @param string $FailedAt <p>失败时间</p>
     * @param string $Message <p>失败原因描述</p>
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
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

        if (array_key_exists("RiskLevel",$param) and $param["RiskLevel"] !== null) {
            $this->RiskLevel = $param["RiskLevel"];
        }

        if (array_key_exists("Mitigation",$param) and $param["Mitigation"] !== null) {
            $this->Mitigation = $param["Mitigation"];
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
                $obj = new SkillScanCapabilityTag();
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
                $obj = new SkillScanItem();
                $obj->deserialize($value);
                array_push($this->ScanItems, $obj);
            }
        }

        if (array_key_exists("ReportUrl",$param) and $param["ReportUrl"] !== null) {
            $this->ReportUrl = $param["ReportUrl"];
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
