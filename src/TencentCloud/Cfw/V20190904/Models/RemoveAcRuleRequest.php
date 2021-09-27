<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RemoveAcRule请求参数结构体
 *
 * @method integer getRuleUuid() 获取规则的uuid，可通过查询规则列表获取
 * @method void setRuleUuid(integer $RuleUuid) 设置规则的uuid，可通过查询规则列表获取
 */
class RemoveAcRuleRequest extends AbstractModel
{
    /**
     * @var integer 规则的uuid，可通过查询规则列表获取
     */
    public $RuleUuid;

    /**
     * @param integer $RuleUuid 规则的uuid，可通过查询规则列表获取
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
        if (array_key_exists("RuleUuid",$param) and $param["RuleUuid"] !== null) {
            $this->RuleUuid = $param["RuleUuid"];
        }
    }
}
