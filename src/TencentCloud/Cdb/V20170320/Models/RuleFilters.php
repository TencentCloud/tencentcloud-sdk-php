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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 审计规则的规则过滤条件
 *
 * @method string getType() 获取审计规则过滤条件的参数名称。可选值：host – 客户端 IP；user – 数据库账户；dbName – 数据库名称；sqlType-SQL类型；sql-sql语句；affectRows -影响行数；sentRows-返回行数；checkRows-扫描行数；execTime-执行时间。
 * @method void setType(string $Type) 设置审计规则过滤条件的参数名称。可选值：host – 客户端 IP；user – 数据库账户；dbName – 数据库名称；sqlType-SQL类型；sql-sql语句；affectRows -影响行数；sentRows-返回行数；checkRows-扫描行数；execTime-执行时间。
 * @method string getCompare() 获取审计规则过滤条件的匹配类型。可选值：INC – 包含；EXC – 不包含；EQS – 等于；NEQ – 不等于；REG-正则；GT-大于；LT-小于。
 * @method void setCompare(string $Compare) 设置审计规则过滤条件的匹配类型。可选值：INC – 包含；EXC – 不包含；EQS – 等于；NEQ – 不等于；REG-正则；GT-大于；LT-小于。
 * @method array getValue() 获取审计规则过滤条件的匹配值。sqlType条件的Value需在一下选择"alter", "changeuser", "create", "delete", "drop", "execute", "insert", "login", "logout", "other", "replace", "select", "set", "update"。
 * @method void setValue(array $Value) 设置审计规则过滤条件的匹配值。sqlType条件的Value需在一下选择"alter", "changeuser", "create", "delete", "drop", "execute", "insert", "login", "logout", "other", "replace", "select", "set", "update"。
 */
class RuleFilters extends AbstractModel
{
    /**
     * @var string 审计规则过滤条件的参数名称。可选值：host – 客户端 IP；user – 数据库账户；dbName – 数据库名称；sqlType-SQL类型；sql-sql语句；affectRows -影响行数；sentRows-返回行数；checkRows-扫描行数；execTime-执行时间。
     */
    public $Type;

    /**
     * @var string 审计规则过滤条件的匹配类型。可选值：INC – 包含；EXC – 不包含；EQS – 等于；NEQ – 不等于；REG-正则；GT-大于；LT-小于。
     */
    public $Compare;

    /**
     * @var array 审计规则过滤条件的匹配值。sqlType条件的Value需在一下选择"alter", "changeuser", "create", "delete", "drop", "execute", "insert", "login", "logout", "other", "replace", "select", "set", "update"。
     */
    public $Value;

    /**
     * @param string $Type 审计规则过滤条件的参数名称。可选值：host – 客户端 IP；user – 数据库账户；dbName – 数据库名称；sqlType-SQL类型；sql-sql语句；affectRows -影响行数；sentRows-返回行数；checkRows-扫描行数；execTime-执行时间。
     * @param string $Compare 审计规则过滤条件的匹配类型。可选值：INC – 包含；EXC – 不包含；EQS – 等于；NEQ – 不等于；REG-正则；GT-大于；LT-小于。
     * @param array $Value 审计规则过滤条件的匹配值。sqlType条件的Value需在一下选择"alter", "changeuser", "create", "delete", "drop", "execute", "insert", "login", "logout", "other", "replace", "select", "set", "update"。
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Compare",$param) and $param["Compare"] !== null) {
            $this->Compare = $param["Compare"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
