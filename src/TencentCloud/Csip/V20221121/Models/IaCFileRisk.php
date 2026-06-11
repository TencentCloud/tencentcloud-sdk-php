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
 * IaC检测文件风险
 *
 * @method integer getLevel() 获取<p>风险等级(0:低危,1:中危,2:高危,3:严重)</p>
 * @method void setLevel(integer $Level) 设置<p>风险等级(0:低危,1:中危,2:高危,3:严重)</p>
 * @method integer getLine() 获取<p>风险所在行数</p>
 * @method void setLine(integer $Line) 设置<p>风险所在行数</p>
 * @method string getRuleName() 获取<p>规则名称</p>
 * @method void setRuleName(string $RuleName) 设置<p>规则名称</p>
 * @method string getDescription() 获取<p>问题描述</p>
 * @method void setDescription(string $Description) 设置<p>问题描述</p>
 * @method string getSuggestion() 获取<p>修复建议</p>
 * @method void setSuggestion(string $Suggestion) 设置<p>修复建议</p>
 */
class IaCFileRisk extends AbstractModel
{
    /**
     * @var integer <p>风险等级(0:低危,1:中危,2:高危,3:严重)</p>
     */
    public $Level;

    /**
     * @var integer <p>风险所在行数</p>
     */
    public $Line;

    /**
     * @var string <p>规则名称</p>
     */
    public $RuleName;

    /**
     * @var string <p>问题描述</p>
     */
    public $Description;

    /**
     * @var string <p>修复建议</p>
     */
    public $Suggestion;

    /**
     * @param integer $Level <p>风险等级(0:低危,1:中危,2:高危,3:严重)</p>
     * @param integer $Line <p>风险所在行数</p>
     * @param string $RuleName <p>规则名称</p>
     * @param string $Description <p>问题描述</p>
     * @param string $Suggestion <p>修复建议</p>
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
        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("Line",$param) and $param["Line"] !== null) {
            $this->Line = $param["Line"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Suggestion",$param) and $param["Suggestion"] !== null) {
            $this->Suggestion = $param["Suggestion"];
        }
    }
}
