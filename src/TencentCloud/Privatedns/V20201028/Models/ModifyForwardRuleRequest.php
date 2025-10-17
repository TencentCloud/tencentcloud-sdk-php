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
namespace TencentCloud\Privatedns\V20201028\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyForwardRule请求参数结构体
 *
 * @method string getRuleId() 获取转发规则ID
 * @method void setRuleId(string $RuleId) 设置转发规则ID
 * @method string getRuleName() 获取转发规则名称
 * @method void setRuleName(string $RuleName) 设置转发规则名称
 * @method string getEndPointId() 获取终端节点ID
 * @method void setEndPointId(string $EndPointId) 设置终端节点ID
 */
class ModifyForwardRuleRequest extends AbstractModel
{
    /**
     * @var string 转发规则ID
     */
    public $RuleId;

    /**
     * @var string 转发规则名称
     */
    public $RuleName;

    /**
     * @var string 终端节点ID
     */
    public $EndPointId;

    /**
     * @param string $RuleId 转发规则ID
     * @param string $RuleName 转发规则名称
     * @param string $EndPointId 终端节点ID
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

        if (array_key_exists("EndPointId",$param) and $param["EndPointId"] !== null) {
            $this->EndPointId = $param["EndPointId"];
        }
    }
}
