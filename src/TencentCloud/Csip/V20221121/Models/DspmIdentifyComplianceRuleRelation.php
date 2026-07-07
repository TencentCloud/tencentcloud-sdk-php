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
 * dspm数据识别模板数据项关联关系
 *
 * @method integer getRuleId() 获取<p>数据项ID</p>
 * @method void setRuleId(integer $RuleId) 设置<p>数据项ID</p>
 * @method string getRuleName() 获取<p>数据项名称</p>
 * @method void setRuleName(string $RuleName) 设置<p>数据项名称</p>
 * @method integer getLevelId() 获取<p>级别ID</p>
 * @method void setLevelId(integer $LevelId) 设置<p>级别ID</p>
 * @method string getLevelName() 获取<p>级别名称</p>
 * @method void setLevelName(string $LevelName) 设置<p>级别名称</p>
 * @method integer getLevelScore() 获取<p>级别程度</p><p>单位：分数</p>
 * @method void setLevelScore(integer $LevelScore) 设置<p>级别程度</p><p>单位：分数</p>
 * @method integer getStructuredStatus() 获取<p>结构化规则状态</p><p>枚举值：</p><ul><li>0： 未配置</li><li>1： 已配置</li></ul>
 * @method void setStructuredStatus(integer $StructuredStatus) 设置<p>结构化规则状态</p><p>枚举值：</p><ul><li>0： 未配置</li><li>1： 已配置</li></ul>
 * @method integer getUnStructuredStatus() 获取<p>非结构化规则状态</p><p>枚举值：</p><ul><li>0： 未配置</li><li>1： 已配置</li></ul>
 * @method void setUnStructuredStatus(integer $UnStructuredStatus) 设置<p>非结构化规则状态</p><p>枚举值：</p><ul><li>0： 未配置</li><li>1： 已配置</li></ul>
 * @method integer getStatus() 获取<p>数据项开启状态</p><p>枚举值：</p><ul><li>0： 未开启</li><li>1： 已开启</li></ul>
 * @method void setStatus(integer $Status) 设置<p>数据项开启状态</p><p>枚举值：</p><ul><li>0： 未开启</li><li>1： 已开启</li></ul>
 */
class DspmIdentifyComplianceRuleRelation extends AbstractModel
{
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
     * @var integer <p>级别程度</p><p>单位：分数</p>
     */
    public $LevelScore;

    /**
     * @var integer <p>结构化规则状态</p><p>枚举值：</p><ul><li>0： 未配置</li><li>1： 已配置</li></ul>
     */
    public $StructuredStatus;

    /**
     * @var integer <p>非结构化规则状态</p><p>枚举值：</p><ul><li>0： 未配置</li><li>1： 已配置</li></ul>
     */
    public $UnStructuredStatus;

    /**
     * @var integer <p>数据项开启状态</p><p>枚举值：</p><ul><li>0： 未开启</li><li>1： 已开启</li></ul>
     */
    public $Status;

    /**
     * @param integer $RuleId <p>数据项ID</p>
     * @param string $RuleName <p>数据项名称</p>
     * @param integer $LevelId <p>级别ID</p>
     * @param string $LevelName <p>级别名称</p>
     * @param integer $LevelScore <p>级别程度</p><p>单位：分数</p>
     * @param integer $StructuredStatus <p>结构化规则状态</p><p>枚举值：</p><ul><li>0： 未配置</li><li>1： 已配置</li></ul>
     * @param integer $UnStructuredStatus <p>非结构化规则状态</p><p>枚举值：</p><ul><li>0： 未配置</li><li>1： 已配置</li></ul>
     * @param integer $Status <p>数据项开启状态</p><p>枚举值：</p><ul><li>0： 未开启</li><li>1： 已开启</li></ul>
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

        if (array_key_exists("LevelScore",$param) and $param["LevelScore"] !== null) {
            $this->LevelScore = $param["LevelScore"];
        }

        if (array_key_exists("StructuredStatus",$param) and $param["StructuredStatus"] !== null) {
            $this->StructuredStatus = $param["StructuredStatus"];
        }

        if (array_key_exists("UnStructuredStatus",$param) and $param["UnStructuredStatus"] !== null) {
            $this->UnStructuredStatus = $param["UnStructuredStatus"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
