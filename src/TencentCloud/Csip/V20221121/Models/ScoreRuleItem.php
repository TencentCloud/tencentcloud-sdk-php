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
 * 评分规则项
 *
 * @method string getRuleType() 获取<p>规则类型<br>枚举值：<br>dimension：维度级规则<br>category：子项级规则<br>severity：等级级规则</p>
 * @method void setRuleType(string $RuleType) 设置<p>规则类型<br>枚举值：<br>dimension：维度级规则<br>category：子项级规则<br>severity：等级级规则</p>
 * @method string getDimensionId() 获取<p>维度ID</p>
 * @method void setDimensionId(string $DimensionId) 设置<p>维度ID</p>
 * @method string getDimensionName() 获取<p>维度名称</p>
 * @method void setDimensionName(string $DimensionName) 设置<p>维度名称</p>
 * @method string getCategoryId() 获取<p>子项ID</p>
 * @method void setCategoryId(string $CategoryId) 设置<p>子项ID</p>
 * @method string getCategoryDesc() 获取<p>子项扣分规则说明</p>
 * @method void setCategoryDesc(string $CategoryDesc) 设置<p>子项扣分规则说明</p>
 * @method string getCategoryName() 获取<p>子项名称</p>
 * @method void setCategoryName(string $CategoryName) 设置<p>子项名称</p>
 * @method string getSeverity() 获取<p>等级<br>枚举值：<br>critical：严重<br>high：高危<br>medium：中危<br>low：低危</p>
 * @method void setSeverity(string $Severity) 设置<p>等级<br>枚举值：<br>critical：严重<br>high：高危<br>medium：中危<br>low：低危</p>
 * @method integer getMaxDeductScore() 获取<p>扣分上限</p>
 * @method void setMaxDeductScore(integer $MaxDeductScore) 设置<p>扣分上限</p>
 * @method integer getDeductPerItem() 获取<p>单次扣分</p>
 * @method void setDeductPerItem(integer $DeductPerItem) 设置<p>单次扣分</p>
 * @method boolean getDeductPerItemDisabled() 获取<p>单项扣分是否不可编辑（防护配置维度子项为 true）</p>
 * @method void setDeductPerItemDisabled(boolean $DeductPerItemDisabled) 设置<p>单项扣分是否不可编辑（防护配置维度子项为 true）</p>
 * @method integer getSortOrder() 获取<p>排序序号</p>
 * @method void setSortOrder(integer $SortOrder) 设置<p>排序序号</p>
 */
class ScoreRuleItem extends AbstractModel
{
    /**
     * @var string <p>规则类型<br>枚举值：<br>dimension：维度级规则<br>category：子项级规则<br>severity：等级级规则</p>
     */
    public $RuleType;

    /**
     * @var string <p>维度ID</p>
     */
    public $DimensionId;

    /**
     * @var string <p>维度名称</p>
     */
    public $DimensionName;

    /**
     * @var string <p>子项ID</p>
     */
    public $CategoryId;

    /**
     * @var string <p>子项扣分规则说明</p>
     */
    public $CategoryDesc;

    /**
     * @var string <p>子项名称</p>
     */
    public $CategoryName;

    /**
     * @var string <p>等级<br>枚举值：<br>critical：严重<br>high：高危<br>medium：中危<br>low：低危</p>
     */
    public $Severity;

    /**
     * @var integer <p>扣分上限</p>
     */
    public $MaxDeductScore;

    /**
     * @var integer <p>单次扣分</p>
     */
    public $DeductPerItem;

    /**
     * @var boolean <p>单项扣分是否不可编辑（防护配置维度子项为 true）</p>
     */
    public $DeductPerItemDisabled;

    /**
     * @var integer <p>排序序号</p>
     */
    public $SortOrder;

    /**
     * @param string $RuleType <p>规则类型<br>枚举值：<br>dimension：维度级规则<br>category：子项级规则<br>severity：等级级规则</p>
     * @param string $DimensionId <p>维度ID</p>
     * @param string $DimensionName <p>维度名称</p>
     * @param string $CategoryId <p>子项ID</p>
     * @param string $CategoryDesc <p>子项扣分规则说明</p>
     * @param string $CategoryName <p>子项名称</p>
     * @param string $Severity <p>等级<br>枚举值：<br>critical：严重<br>high：高危<br>medium：中危<br>low：低危</p>
     * @param integer $MaxDeductScore <p>扣分上限</p>
     * @param integer $DeductPerItem <p>单次扣分</p>
     * @param boolean $DeductPerItemDisabled <p>单项扣分是否不可编辑（防护配置维度子项为 true）</p>
     * @param integer $SortOrder <p>排序序号</p>
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
        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }

        if (array_key_exists("DimensionId",$param) and $param["DimensionId"] !== null) {
            $this->DimensionId = $param["DimensionId"];
        }

        if (array_key_exists("DimensionName",$param) and $param["DimensionName"] !== null) {
            $this->DimensionName = $param["DimensionName"];
        }

        if (array_key_exists("CategoryId",$param) and $param["CategoryId"] !== null) {
            $this->CategoryId = $param["CategoryId"];
        }

        if (array_key_exists("CategoryDesc",$param) and $param["CategoryDesc"] !== null) {
            $this->CategoryDesc = $param["CategoryDesc"];
        }

        if (array_key_exists("CategoryName",$param) and $param["CategoryName"] !== null) {
            $this->CategoryName = $param["CategoryName"];
        }

        if (array_key_exists("Severity",$param) and $param["Severity"] !== null) {
            $this->Severity = $param["Severity"];
        }

        if (array_key_exists("MaxDeductScore",$param) and $param["MaxDeductScore"] !== null) {
            $this->MaxDeductScore = $param["MaxDeductScore"];
        }

        if (array_key_exists("DeductPerItem",$param) and $param["DeductPerItem"] !== null) {
            $this->DeductPerItem = $param["DeductPerItem"];
        }

        if (array_key_exists("DeductPerItemDisabled",$param) and $param["DeductPerItemDisabled"] !== null) {
            $this->DeductPerItemDisabled = $param["DeductPerItemDisabled"];
        }

        if (array_key_exists("SortOrder",$param) and $param["SortOrder"] !== null) {
            $this->SortOrder = $param["SortOrder"];
        }
    }
}
