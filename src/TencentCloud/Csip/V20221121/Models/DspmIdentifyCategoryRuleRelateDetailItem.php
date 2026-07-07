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
 * dspm数据识别分类数据项关联详情
 *
 * @method integer getComplianceId() 获取<p>识别模板ID</p>
 * @method void setComplianceId(integer $ComplianceId) 设置<p>识别模板ID</p>
 * @method integer getCategoryId() 获取<p>分类ID</p>
 * @method void setCategoryId(integer $CategoryId) 设置<p>分类ID</p>
 * @method integer getRuleId() 获取<p>数据项ID</p>
 * @method void setRuleId(integer $RuleId) 设置<p>数据项ID</p>
 * @method string getRuleName() 获取<p>数据项名称</p>
 * @method void setRuleName(string $RuleName) 设置<p>数据项名称</p>
 * @method integer getLevelId() 获取<p>级别ID</p>
 * @method void setLevelId(integer $LevelId) 设置<p>级别ID</p>
 * @method string getLevelName() 获取<p>级别名称</p>
 * @method void setLevelName(string $LevelName) 设置<p>级别名称</p>
 */
class DspmIdentifyCategoryRuleRelateDetailItem extends AbstractModel
{
    /**
     * @var integer <p>识别模板ID</p>
     */
    public $ComplianceId;

    /**
     * @var integer <p>分类ID</p>
     */
    public $CategoryId;

    /**
     * @var integer <p>数据项ID</p>
     */
    public $RuleId;

    /**
     * @var string <p>数据项名称</p>
     */
    public $RuleName;

    /**
     * @var integer <p>级别ID</p>
     */
    public $LevelId;

    /**
     * @var string <p>级别名称</p>
     */
    public $LevelName;

    /**
     * @param integer $ComplianceId <p>识别模板ID</p>
     * @param integer $CategoryId <p>分类ID</p>
     * @param integer $RuleId <p>数据项ID</p>
     * @param string $RuleName <p>数据项名称</p>
     * @param integer $LevelId <p>级别ID</p>
     * @param string $LevelName <p>级别名称</p>
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
        if (array_key_exists("ComplianceId",$param) and $param["ComplianceId"] !== null) {
            $this->ComplianceId = $param["ComplianceId"];
        }

        if (array_key_exists("CategoryId",$param) and $param["CategoryId"] !== null) {
            $this->CategoryId = $param["CategoryId"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("LevelId",$param) and $param["LevelId"] !== null) {
            $this->LevelId = $param["LevelId"];
        }

        if (array_key_exists("LevelName",$param) and $param["LevelName"] !== null) {
            $this->LevelName = $param["LevelName"];
        }
    }
}
