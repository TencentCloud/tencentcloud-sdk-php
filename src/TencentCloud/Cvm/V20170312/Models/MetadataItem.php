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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 自定义metadata key和value
 *
 * @method string getKey() 获取自定义metadata键，由大写字母（A-Z）、小写字母（a-z）、数字（0-9）、下划线（_）或连字符（-）组成，大小上限为128 字节。
 * @method void setKey(string $Key) 设置自定义metadata键，由大写字母（A-Z）、小写字母（a-z）、数字（0-9）、下划线（_）或连字符（-）组成，大小上限为128 字节。
 * @method string getValue() 获取自定义metadata值，大小上限为256 KB。
 * @method void setValue(string $Value) 设置自定义metadata值，大小上限为256 KB。
 */
class MetadataItem extends AbstractModel
{
    /**
     * @var string 自定义metadata键，由大写字母（A-Z）、小写字母（a-z）、数字（0-9）、下划线（_）或连字符（-）组成，大小上限为128 字节。
     */
    public $Key;

    /**
     * @var string 自定义metadata值，大小上限为256 KB。
     */
    public $Value;

    /**
     * @param string $Key 自定义metadata键，由大写字母（A-Z）、小写字母（a-z）、数字（0-9）、下划线（_）或连字符（-）组成，大小上限为128 字节。
     * @param string $Value 自定义metadata值，大小上限为256 KB。
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
