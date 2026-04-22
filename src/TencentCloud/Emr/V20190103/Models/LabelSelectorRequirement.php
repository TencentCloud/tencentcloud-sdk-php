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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 标签选择器匹配表达式
 *
 * @method string getKey() 获取<p>键</p>
 * @method void setKey(string $Key) 设置<p>键</p>
 * @method string getOperator() 获取<p>匹配操作</p>
 * @method void setOperator(string $Operator) 设置<p>匹配操作</p>
 * @method array getValues() 获取<p>值</p>
 * @method void setValues(array $Values) 设置<p>值</p>
 */
class LabelSelectorRequirement extends AbstractModel
{
    /**
     * @var string <p>键</p>
     */
    public $Key;

    /**
     * @var string <p>匹配操作</p>
     */
    public $Operator;

    /**
     * @var array <p>值</p>
     */
    public $Values;

    /**
     * @param string $Key <p>键</p>
     * @param string $Operator <p>匹配操作</p>
     * @param array $Values <p>值</p>
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

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = $param["Values"];
        }
    }
}
