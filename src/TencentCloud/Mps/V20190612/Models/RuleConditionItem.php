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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 规则条件配置。
 *
 * @method string getKey() 获取质检项条件对应的Key。
 * @method void setKey(string $Key) 设置质检项条件对应的Key。
 * @method string getValue() 获取条件对应的Value。
 * @method void setValue(string $Value) 设置条件对应的Value。
 */
class RuleConditionItem extends AbstractModel
{
    /**
     * @var string 质检项条件对应的Key。
     */
    public $Key;

    /**
     * @var string 条件对应的Value。
     */
    public $Value;

    /**
     * @param string $Key 质检项条件对应的Key。
     * @param string $Value 条件对应的Value。
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

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
