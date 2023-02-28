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
 * ModifyNatSequenceRules请求参数结构体
 *
 * @method array getRuleChangeItems() 获取规则快速排序：OrderIndex，原始序号；NewOrderIndex：新序号
 * @method void setRuleChangeItems(array $RuleChangeItems) 设置规则快速排序：OrderIndex，原始序号；NewOrderIndex：新序号
 * @method integer getDirection() 获取规则方向：1，入站；0，出站
 * @method void setDirection(integer $Direction) 设置规则方向：1，入站；0，出站
 */
class ModifyNatSequenceRulesRequest extends AbstractModel
{
    /**
     * @var array 规则快速排序：OrderIndex，原始序号；NewOrderIndex：新序号
     */
    public $RuleChangeItems;

    /**
     * @var integer 规则方向：1，入站；0，出站
     */
    public $Direction;

    /**
     * @param array $RuleChangeItems 规则快速排序：OrderIndex，原始序号；NewOrderIndex：新序号
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
        if (array_key_exists("RuleChangeItems",$param) and $param["RuleChangeItems"] !== null) {
            $this->RuleChangeItems = [];
            foreach ($param["RuleChangeItems"] as $key => $value){
                $obj = new RuleChangeItem();
                $obj->deserialize($value);
                array_push($this->RuleChangeItems, $obj);
            }
        }

        if (array_key_exists("Direction",$param) and $param["Direction"] !== null) {
            $this->Direction = $param["Direction"];
        }
    }
}
