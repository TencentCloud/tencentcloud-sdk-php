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
 * RemoveNatAcRule请求参数结构体
 *
 * @method array getRuleUuid() 获取规则的uuid列表，可通过查询规则列表获取，注意：如果传入的是[-1]将删除所有规则
 * @method void setRuleUuid(array $RuleUuid) 设置规则的uuid列表，可通过查询规则列表获取，注意：如果传入的是[-1]将删除所有规则
 * @method integer getDirection() 获取规则方向：1，入站；0，出站
 * @method void setDirection(integer $Direction) 设置规则方向：1，入站；0，出站
 */
class RemoveNatAcRuleRequest extends AbstractModel
{
    /**
     * @var array 规则的uuid列表，可通过查询规则列表获取，注意：如果传入的是[-1]将删除所有规则
     */
    public $RuleUuid;

    /**
     * @var integer 规则方向：1，入站；0，出站
     */
    public $Direction;

    /**
     * @param array $RuleUuid 规则的uuid列表，可通过查询规则列表获取，注意：如果传入的是[-1]将删除所有规则
     * @param integer $Direction 规则方向：1，入站；0，出站
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

        if (array_key_exists("Direction",$param) and $param["Direction"] !== null) {
            $this->Direction = $param["Direction"];
        }
    }
}
