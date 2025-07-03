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
 * ModifyNatAcRule请求参数结构体
 *
 * @method array getRules() 获取需要编辑的规则数组,基于Uuid唯一id来修改该规则
 * @method void setRules(array $Rules) 设置需要编辑的规则数组,基于Uuid唯一id来修改该规则
 */
class ModifyNatAcRuleRequest extends AbstractModel
{
    /**
     * @var array 需要编辑的规则数组,基于Uuid唯一id来修改该规则
     */
    public $Rules;

    /**
     * @param array $Rules 需要编辑的规则数组,基于Uuid唯一id来修改该规则
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
        if (array_key_exists("Rules",$param) and $param["Rules"] !== null) {
            $this->Rules = [];
            foreach ($param["Rules"] as $key => $value){
                $obj = new CreateNatRuleItem();
                $obj->deserialize($value);
                array_push($this->Rules, $obj);
            }
        }
    }
}
