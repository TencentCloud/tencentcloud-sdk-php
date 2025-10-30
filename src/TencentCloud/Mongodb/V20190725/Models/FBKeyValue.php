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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 按 Key 闪回键值对
 *
 * @method string getKey() 获取指定按 Key 闪回的目标 Key （键） 。
 * @method void setKey(string $Key) 设置指定按 Key 闪回的目标 Key （键） 。
 * @method string getValue() 获取指定按 Key 闪回的目标 Key 所对应的 Value（值）。
 * @method void setValue(string $Value) 设置指定按 Key 闪回的目标 Key 所对应的 Value（值）。
 */
class FBKeyValue extends AbstractModel
{
    /**
     * @var string 指定按 Key 闪回的目标 Key （键） 。
     */
    public $Key;

    /**
     * @var string 指定按 Key 闪回的目标 Key 所对应的 Value（值）。
     */
    public $Value;

    /**
     * @param string $Key 指定按 Key 闪回的目标 Key （键） 。
     * @param string $Value 指定按 Key 闪回的目标 Key 所对应的 Value（值）。
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
