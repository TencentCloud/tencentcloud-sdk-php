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
 * aiguard规则详情
 *
 * @method string getRuleId() 获取<p>规则ID</p>
 * @method void setRuleId(string $RuleId) 设置<p>规则ID</p>
 * @method string getRuleName() 获取<p>规则名称</p>
 * @method void setRuleName(string $RuleName) 设置<p>规则名称</p>
 * @method string getDescription() 获取<p>描述</p>
 * @method void setDescription(string $Description) 设置<p>描述</p>
 * @method string getSeverity() 获取<p>严重度</p>
 * @method void setSeverity(string $Severity) 设置<p>严重度</p>
 * @method string getAction() 获取<p>动作</p>
 * @method void setAction(string $Action) 设置<p>动作</p>
 * @method integer getStatus() 获取<p>开关</p>
 * @method void setStatus(integer $Status) 设置<p>开关</p>
 * @method string getDesensitizeSample() 获取<p>脱敏样例</p>
 * @method void setDesensitizeSample(string $DesensitizeSample) 设置<p>脱敏样例</p>
 * @method integer getDirection() 获取<p>检测方向</p><p>取值范围：[0, 3]</p>
 * @method void setDirection(integer $Direction) 设置<p>检测方向</p><p>取值范围：[0, 3]</p>
 */
class RuleDetail extends AbstractModel
{
    /**
     * @var string <p>规则ID</p>
     */
    public $RuleId;

    /**
     * @var string <p>规则名称</p>
     */
    public $RuleName;

    /**
     * @var string <p>描述</p>
     */
    public $Description;

    /**
     * @var string <p>严重度</p>
     */
    public $Severity;

    /**
     * @var string <p>动作</p>
     */
    public $Action;

    /**
     * @var integer <p>开关</p>
     */
    public $Status;

    /**
     * @var string <p>脱敏样例</p>
     */
    public $DesensitizeSample;

    /**
     * @var integer <p>检测方向</p><p>取值范围：[0, 3]</p>
     */
    public $Direction;

    /**
     * @param string $RuleId <p>规则ID</p>
     * @param string $RuleName <p>规则名称</p>
     * @param string $Description <p>描述</p>
     * @param string $Severity <p>严重度</p>
     * @param string $Action <p>动作</p>
     * @param integer $Status <p>开关</p>
     * @param string $DesensitizeSample <p>脱敏样例</p>
     * @param integer $Direction <p>检测方向</p><p>取值范围：[0, 3]</p>
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

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Severity",$param) and $param["Severity"] !== null) {
            $this->Severity = $param["Severity"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("DesensitizeSample",$param) and $param["DesensitizeSample"] !== null) {
            $this->DesensitizeSample = $param["DesensitizeSample"];
        }

        if (array_key_exists("Direction",$param) and $param["Direction"] !== null) {
            $this->Direction = $param["Direction"];
        }
    }
}
