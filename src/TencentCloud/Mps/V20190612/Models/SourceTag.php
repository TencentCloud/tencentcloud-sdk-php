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
 * type SourceTag struct {
	Key   string `json:"Key"`
	Value string `json:"Value"`
}
 *
 * @method string getKey() 获取sourcetag的key，支持1-50位的大写字母、数字、下划线、中划线
 * @method void setKey(string $Key) 设置sourcetag的key，支持1-50位的大写字母、数字、下划线、中划线
 * @method string getValue() 获取sourcetag的value，支持1-200位的字母、数字下划线、中划线、英文句号、百分号（%）
 * @method void setValue(string $Value) 设置sourcetag的value，支持1-200位的字母、数字下划线、中划线、英文句号、百分号（%）
 */
class SourceTag extends AbstractModel
{
    /**
     * @var string sourcetag的key，支持1-50位的大写字母、数字、下划线、中划线
     */
    public $Key;

    /**
     * @var string sourcetag的value，支持1-200位的字母、数字下划线、中划线、英文句号、百分号（%）
     */
    public $Value;

    /**
     * @param string $Key sourcetag的key，支持1-50位的大写字母、数字、下划线、中划线
     * @param string $Value sourcetag的value，支持1-200位的字母、数字下划线、中划线、英文句号、百分号（%）
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
