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
 * 子项扣分及待办信息
 *
 * @method string getCategoryId() 获取<p>子项ID<br>枚举值：<br>vulnerability：漏洞治理<br>cloud_config：云产品配置治理<br>system_baseline：系统基线风险<br>intrusion_alert：入侵威胁告警<br>cloud_api_alert：云API告警<br>ai_agent_alert：AI Agent安全告警<br>object_storage_alert：对象存储异常告警<br>database_alert：数据库安全告警<br>protection_config：推荐防护配置未开启<br>edition_coverage：专业版/旗舰版覆盖率不足<br>product_expiry：产品7天内到期</p>
 * @method void setCategoryId(string $CategoryId) 设置<p>子项ID<br>枚举值：<br>vulnerability：漏洞治理<br>cloud_config：云产品配置治理<br>system_baseline：系统基线风险<br>intrusion_alert：入侵威胁告警<br>cloud_api_alert：云API告警<br>ai_agent_alert：AI Agent安全告警<br>object_storage_alert：对象存储异常告警<br>database_alert：数据库安全告警<br>protection_config：推荐防护配置未开启<br>edition_coverage：专业版/旗舰版覆盖率不足<br>product_expiry：产品7天内到期</p>
 * @method string getCategoryName() 获取<p>子项名称</p>
 * @method void setCategoryName(string $CategoryName) 设置<p>子项名称</p>
 * @method string getCategoryDesc() 获取<p>子类说明</p>
 * @method void setCategoryDesc(string $CategoryDesc) 设置<p>子类说明</p>
 * @method integer getMaxDeductScore() 获取<p>子项扣分上限</p>
 * @method void setMaxDeductScore(integer $MaxDeductScore) 设置<p>子项扣分上限</p>
 * @method integer getDeductScore() 获取<p>子项实际扣分</p>
 * @method void setDeductScore(integer $DeductScore) 设置<p>子项实际扣分</p>
 * @method integer getRiskCount() 获取<p>风险总数</p>
 * @method void setRiskCount(integer $RiskCount) 设置<p>风险总数</p>
 * @method array getSeverityItems() 获取<p>等级明细，风险/威胁类子项有值</p>
 * @method void setSeverityItems(array $SeverityItems) 设置<p>等级明细，风险/威胁类子项有值</p>
 * @method string getDeductReason() 获取<p>扣分原因描述</p>
 * @method void setDeductReason(string $DeductReason) 设置<p>扣分原因描述</p>
 * @method string getActionText() 获取<p>处理建议文案</p>
 * @method void setActionText(string $ActionText) 设置<p>处理建议文案</p>
 * @method ProtectionDetail getProtectionDetail() 获取<p>防护配置详情，仅防护配置维度子项返回</p>
 * @method void setProtectionDetail(ProtectionDetail $ProtectionDetail) 设置<p>防护配置详情，仅防护配置维度子项返回</p>
 */
class CategoryItem extends AbstractModel
{
    /**
     * @var string <p>子项ID<br>枚举值：<br>vulnerability：漏洞治理<br>cloud_config：云产品配置治理<br>system_baseline：系统基线风险<br>intrusion_alert：入侵威胁告警<br>cloud_api_alert：云API告警<br>ai_agent_alert：AI Agent安全告警<br>object_storage_alert：对象存储异常告警<br>database_alert：数据库安全告警<br>protection_config：推荐防护配置未开启<br>edition_coverage：专业版/旗舰版覆盖率不足<br>product_expiry：产品7天内到期</p>
     */
    public $CategoryId;

    /**
     * @var string <p>子项名称</p>
     */
    public $CategoryName;

    /**
     * @var string <p>子类说明</p>
     */
    public $CategoryDesc;

    /**
     * @var integer <p>子项扣分上限</p>
     */
    public $MaxDeductScore;

    /**
     * @var integer <p>子项实际扣分</p>
     */
    public $DeductScore;

    /**
     * @var integer <p>风险总数</p>
     */
    public $RiskCount;

    /**
     * @var array <p>等级明细，风险/威胁类子项有值</p>
     */
    public $SeverityItems;

    /**
     * @var string <p>扣分原因描述</p>
     */
    public $DeductReason;

    /**
     * @var string <p>处理建议文案</p>
     */
    public $ActionText;

    /**
     * @var ProtectionDetail <p>防护配置详情，仅防护配置维度子项返回</p>
     */
    public $ProtectionDetail;

    /**
     * @param string $CategoryId <p>子项ID<br>枚举值：<br>vulnerability：漏洞治理<br>cloud_config：云产品配置治理<br>system_baseline：系统基线风险<br>intrusion_alert：入侵威胁告警<br>cloud_api_alert：云API告警<br>ai_agent_alert：AI Agent安全告警<br>object_storage_alert：对象存储异常告警<br>database_alert：数据库安全告警<br>protection_config：推荐防护配置未开启<br>edition_coverage：专业版/旗舰版覆盖率不足<br>product_expiry：产品7天内到期</p>
     * @param string $CategoryName <p>子项名称</p>
     * @param string $CategoryDesc <p>子类说明</p>
     * @param integer $MaxDeductScore <p>子项扣分上限</p>
     * @param integer $DeductScore <p>子项实际扣分</p>
     * @param integer $RiskCount <p>风险总数</p>
     * @param array $SeverityItems <p>等级明细，风险/威胁类子项有值</p>
     * @param string $DeductReason <p>扣分原因描述</p>
     * @param string $ActionText <p>处理建议文案</p>
     * @param ProtectionDetail $ProtectionDetail <p>防护配置详情，仅防护配置维度子项返回</p>
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
        if (array_key_exists("CategoryId",$param) and $param["CategoryId"] !== null) {
            $this->CategoryId = $param["CategoryId"];
        }

        if (array_key_exists("CategoryName",$param) and $param["CategoryName"] !== null) {
            $this->CategoryName = $param["CategoryName"];
        }

        if (array_key_exists("CategoryDesc",$param) and $param["CategoryDesc"] !== null) {
            $this->CategoryDesc = $param["CategoryDesc"];
        }

        if (array_key_exists("MaxDeductScore",$param) and $param["MaxDeductScore"] !== null) {
            $this->MaxDeductScore = $param["MaxDeductScore"];
        }

        if (array_key_exists("DeductScore",$param) and $param["DeductScore"] !== null) {
            $this->DeductScore = $param["DeductScore"];
        }

        if (array_key_exists("RiskCount",$param) and $param["RiskCount"] !== null) {
            $this->RiskCount = $param["RiskCount"];
        }

        if (array_key_exists("SeverityItems",$param) and $param["SeverityItems"] !== null) {
            $this->SeverityItems = [];
            foreach ($param["SeverityItems"] as $key => $value){
                $obj = new SeverityItem();
                $obj->deserialize($value);
                array_push($this->SeverityItems, $obj);
            }
        }

        if (array_key_exists("DeductReason",$param) and $param["DeductReason"] !== null) {
            $this->DeductReason = $param["DeductReason"];
        }

        if (array_key_exists("ActionText",$param) and $param["ActionText"] !== null) {
            $this->ActionText = $param["ActionText"];
        }

        if (array_key_exists("ProtectionDetail",$param) and $param["ProtectionDetail"] !== null) {
            $this->ProtectionDetail = new ProtectionDetail();
            $this->ProtectionDetail->deserialize($param["ProtectionDetail"]);
        }
    }
}
