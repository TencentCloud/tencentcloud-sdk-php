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
namespace TencentCloud\Ioa\V20220601\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 简单规则表达式
 *
 * @method array getExpressions() 获取规则表达式
 * @method void setExpressions(array $Expressions) 设置规则表达式
 * @method string getRelation() 获取表达式间逻辑关系
 * @method void setRelation(string $Relation) 设置表达式间逻辑关系
 */
class SimpleRule extends AbstractModel
{
    /**
     * @var array 规则表达式
     */
    public $Expressions;

    /**
     * @var string 表达式间逻辑关系
     */
    public $Relation;

    /**
     * @param array $Expressions 规则表达式
     * @param string $Relation 表达式间逻辑关系
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
        if (array_key_exists("Expressions",$param) and $param["Expressions"] !== null) {
            $this->Expressions = [];
            foreach ($param["Expressions"] as $key => $value){
                $obj = new RuleExpression();
                $obj->deserialize($value);
                array_push($this->Expressions, $obj);
            }
        }

        if (array_key_exists("Relation",$param) and $param["Relation"] !== null) {
            $this->Relation = $param["Relation"];
        }
    }
}
