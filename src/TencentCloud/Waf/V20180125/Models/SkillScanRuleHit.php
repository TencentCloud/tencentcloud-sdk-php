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
 * SkillScanRuleHit 命中的规则
 *
 * @method string getRuleId() 获取<p>规则唯一ID</p>
 * @method void setRuleId(string $RuleId) 设置<p>规则唯一ID</p>
 * @method string getDescription() 获取<p>规则描述（命中原因说明）</p>
 * @method void setDescription(string $Description) 设置<p>规则描述（命中原因说明）</p>
 */
class SkillScanRuleHit extends AbstractModel
{
    /**
     * @var string <p>规则唯一ID</p>
     */
    public $RuleId;

    /**
     * @var string <p>规则描述（命中原因说明）</p>
     */
    public $Description;

    /**
     * @param string $RuleId <p>规则唯一ID</p>
     * @param string $Description <p>规则描述（命中原因说明）</p>
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

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
