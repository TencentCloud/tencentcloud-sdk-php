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
namespace TencentCloud\Apm\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 排序字段
 *
 * @method string getKey() 获取需要排序的字段，现支持 startTIme, endTime, duration
 * @method void setKey(string $Key) 设置需要排序的字段，现支持 startTIme, endTime, duration
 * @method string getValue() 获取asc 顺序排序 / desc 倒序排序
 * @method void setValue(string $Value) 设置asc 顺序排序 / desc 倒序排序
 */
class OrderBy extends AbstractModel
{
    /**
     * @var string 需要排序的字段，现支持 startTIme, endTime, duration
     */
    public $Key;

    /**
     * @var string asc 顺序排序 / desc 倒序排序
     */
    public $Value;

    /**
     * @param string $Key 需要排序的字段，现支持 startTIme, endTime, duration
     * @param string $Value asc 顺序排序 / desc 倒序排序
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
