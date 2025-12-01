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
namespace TencentCloud\Evt\V20250217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 人员属性
 *
 * @method string getKey() 获取属性键名
 * @method void setKey(string $Key) 设置属性键名
 * @method array getValue() 获取属性值
 * @method void setValue(array $Value) 设置属性值
 */
class UserAttribute extends AbstractModel
{
    /**
     * @var string 属性键名
     */
    public $Key;

    /**
     * @var array 属性值
     */
    public $Value;

    /**
     * @param string $Key 属性键名
     * @param array $Value 属性值
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
