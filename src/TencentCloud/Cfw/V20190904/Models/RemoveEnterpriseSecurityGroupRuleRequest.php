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
 * RemoveEnterpriseSecurityGroupRule请求参数结构体
 *
 * @method integer getRuleUuid() 获取规则的uuid，可通过查询规则列表获取
 * @method void setRuleUuid(integer $RuleUuid) 设置规则的uuid，可通过查询规则列表获取
 * @method integer getRemoveType() 获取删除类型，0是单条删除，RuleUuid填写删除规则id，1为全部删除，RuleUuid填0即可
 * @method void setRemoveType(integer $RemoveType) 设置删除类型，0是单条删除，RuleUuid填写删除规则id，1为全部删除，RuleUuid填0即可
 */
class RemoveEnterpriseSecurityGroupRuleRequest extends AbstractModel
{
    /**
     * @var integer 规则的uuid，可通过查询规则列表获取
     */
    public $RuleUuid;

    /**
     * @var integer 删除类型，0是单条删除，RuleUuid填写删除规则id，1为全部删除，RuleUuid填0即可
     */
    public $RemoveType;

    /**
     * @param integer $RuleUuid 规则的uuid，可通过查询规则列表获取
     * @param integer $RemoveType 删除类型，0是单条删除，RuleUuid填写删除规则id，1为全部删除，RuleUuid填0即可
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

        if (array_key_exists("RemoveType",$param) and $param["RemoveType"] !== null) {
            $this->RemoveType = $param["RemoveType"];
        }
    }
}
