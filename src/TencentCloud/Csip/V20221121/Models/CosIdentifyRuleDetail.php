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
 * cos数据项详情
 *
 * @method integer getRuleId() 获取数据项id
 * @method void setRuleId(integer $RuleId) 设置数据项id
 * @method string getRuleName() 获取数据项名称
 * @method void setRuleName(string $RuleName) 设置数据项名称
 * @method integer getLevelId() 获取敏感级别id
 * @method void setLevelId(integer $LevelId) 设置敏感级别id
 * @method string getLevelName() 获取敏感级别名称
 * @method void setLevelName(string $LevelName) 设置敏感级别名称
 * @method integer getLevelScore() 获取敏感程度
 * @method void setLevelScore(integer $LevelScore) 设置敏感程度
 */
class CosIdentifyRuleDetail extends AbstractModel
{
    /**
     * @var integer 数据项id
     */
    public $RuleId;

    /**
     * @var string 数据项名称
     */
    public $RuleName;

    /**
     * @var integer 敏感级别id
     */
    public $LevelId;

    /**
     * @var string 敏感级别名称
     */
    public $LevelName;

    /**
     * @var integer 敏感程度
     */
    public $LevelScore;

    /**
     * @param integer $RuleId 数据项id
     * @param string $RuleName 数据项名称
     * @param integer $LevelId 敏感级别id
     * @param string $LevelName 敏感级别名称
     * @param integer $LevelScore 敏感程度
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
    }
}
