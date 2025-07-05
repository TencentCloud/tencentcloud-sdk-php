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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 监控统计数据点
 *
 * @method string getKey() 获取数据点键
 * @method void setKey(string $Key) 设置数据点键
 * @method string getValue() 获取数据点值
 * @method void setValue(string $Value) 设置数据点值
 * @method string getTag() 获取数据点标签
 * @method void setTag(string $Tag) 设置数据点标签
 */
class MetricDataPoint extends AbstractModel
{
    /**
     * @var string 数据点键
     */
    public $Key;

    /**
     * @var string 数据点值
     */
    public $Value;

    /**
     * @var string 数据点标签
     */
    public $Tag;

    /**
     * @param string $Key 数据点键
     * @param string $Value 数据点值
     * @param string $Tag 数据点标签
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

        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = $param["Tag"];
        }
    }
}
