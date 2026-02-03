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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 日志过滤条件
 *
 * @method string getType() 获取过滤项。
 * @method void setType(string $Type) 设置过滤项。
 * @method string getCompare() 获取过滤条件。支持以下条件： WINC-包含（分词维度）， WEXC-不包含（分词维度）, INC - 包含, EXC - 不包含, EQS - 等于, NEQ - 不等于, RA - 范围。
 * @method void setCompare(string $Compare) 设置过滤条件。支持以下条件： WINC-包含（分词维度）， WEXC-不包含（分词维度）, INC - 包含, EXC - 不包含, EQS - 等于, NEQ - 不等于, RA - 范围。
 * @method array getValue() 获取过滤的值。反向查询时，多个值之前是且的关系，正向查询多个值是或的关系
 * @method void setValue(array $Value) 设置过滤的值。反向查询时，多个值之前是且的关系，正向查询多个值是或的关系
 */
class LogFilter extends AbstractModel
{
    /**
     * @var string 过滤项。
     */
    public $Type;

    /**
     * @var string 过滤条件。支持以下条件： WINC-包含（分词维度）， WEXC-不包含（分词维度）, INC - 包含, EXC - 不包含, EQS - 等于, NEQ - 不等于, RA - 范围。
     */
    public $Compare;

    /**
     * @var array 过滤的值。反向查询时，多个值之前是且的关系，正向查询多个值是或的关系
     */
    public $Value;

    /**
     * @param string $Type 过滤项。
     * @param string $Compare 过滤条件。支持以下条件： WINC-包含（分词维度）， WEXC-不包含（分词维度）, INC - 包含, EXC - 不包含, EQS - 等于, NEQ - 不等于, RA - 范围。
     * @param array $Value 过滤的值。反向查询时，多个值之前是且的关系，正向查询多个值是或的关系
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
