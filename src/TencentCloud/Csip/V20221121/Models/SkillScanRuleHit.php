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
 * 命中规则项
 *
 * @method string getRuleID() 获取融合规则编号
参数格式：形如 9xxxx
 * @method void setRuleID(string $RuleID) 设置融合规则编号
参数格式：形如 9xxxx
 * @method string getDescription() 获取风险发现描述
 * @method void setDescription(string $Description) 设置风险发现描述
 */
class SkillScanRuleHit extends AbstractModel
{
    /**
     * @var string 融合规则编号
参数格式：形如 9xxxx
     */
    public $RuleID;

    /**
     * @var string 风险发现描述
     */
    public $Description;

    /**
     * @param string $RuleID 融合规则编号
参数格式：形如 9xxxx
     * @param string $Description 风险发现描述
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
        if (array_key_exists("RuleID",$param) and $param["RuleID"] !== null) {
            $this->RuleID = $param["RuleID"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
