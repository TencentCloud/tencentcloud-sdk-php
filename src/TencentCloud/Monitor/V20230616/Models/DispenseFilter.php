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
namespace TencentCloud\Monitor\V20230616\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 过滤表
 *
 * @method string getKey() 获取维度名称
 * @method void setKey(string $Key) 设置维度名称
 * @method array getValues() 获取维度值列表
 * @method void setValues(array $Values) 设置维度值列表
 * @method string getExpression() 获取表示式
 * @method void setExpression(string $Expression) 设置表示式
 */
class DispenseFilter extends AbstractModel
{
    /**
     * @var string 维度名称
     */
    public $Key;

    /**
     * @var array 维度值列表
     */
    public $Values;

    /**
     * @var string 表示式
     */
    public $Expression;

    /**
     * @param string $Key 维度名称
     * @param array $Values 维度值列表
     * @param string $Expression 表示式
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

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = $param["Values"];
        }

        if (array_key_exists("Expression",$param) and $param["Expression"] !== null) {
            $this->Expression = $param["Expression"];
        }
    }
}
