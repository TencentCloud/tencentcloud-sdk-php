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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 查询条件
 *
 * @method string getKey() 获取<p>筛选条件的key。</p>
 * @method void setKey(string $Key) 设置<p>筛选条件的key。</p>
 * @method string getOperator() 获取<p>查询条件操作符，操作类型有：</p><li>equals: 等于；</li><li>notEquals: 不等于；</li><li>include: 包含；</li><li>notInclude: 不包含; </li><li>startWith: 开始的值是value；</li><li>notStartWith: 不以value的值开始；</li><li>endWith: 结尾是value值；</li><li>notEndWith: 不以value的值结尾。</li>
 * @method void setOperator(string $Operator) 设置<p>查询条件操作符，操作类型有：</p><li>equals: 等于；</li><li>notEquals: 不等于；</li><li>include: 包含；</li><li>notInclude: 不包含; </li><li>startWith: 开始的值是value；</li><li>notStartWith: 不以value的值开始；</li><li>endWith: 结尾是value值；</li><li>notEndWith: 不以value的值结尾。</li>
 * @method array getValue() 获取<p>筛选条件的值。</p>
 * @method void setValue(array $Value) 设置<p>筛选条件的值。</p>
 */
class QueryCondition extends AbstractModel
{
    /**
     * @var string <p>筛选条件的key。</p>
     */
    public $Key;

    /**
     * @var string <p>查询条件操作符，操作类型有：</p><li>equals: 等于；</li><li>notEquals: 不等于；</li><li>include: 包含；</li><li>notInclude: 不包含; </li><li>startWith: 开始的值是value；</li><li>notStartWith: 不以value的值开始；</li><li>endWith: 结尾是value值；</li><li>notEndWith: 不以value的值结尾。</li>
     */
    public $Operator;

    /**
     * @var array <p>筛选条件的值。</p>
     */
    public $Value;

    /**
     * @param string $Key <p>筛选条件的key。</p>
     * @param string $Operator <p>查询条件操作符，操作类型有：</p><li>equals: 等于；</li><li>notEquals: 不等于；</li><li>include: 包含；</li><li>notInclude: 不包含; </li><li>startWith: 开始的值是value；</li><li>notStartWith: 不以value的值开始；</li><li>endWith: 结尾是value值；</li><li>notEndWith: 不以value的值结尾。</li>
     * @param array $Value <p>筛选条件的值。</p>
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
        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
