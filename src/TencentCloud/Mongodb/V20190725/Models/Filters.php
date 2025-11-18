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
 * 过滤条件
 *
 * @method string getName() 获取搜索字段，目前支持：
"InstanceId"：实例Id，例如：cmgo-****）
"InstanceName"：实例名称
"ClusterId"：实例组Id，例如：cmgo-****
 * @method void setName(string $Name) 设置搜索字段，目前支持：
"InstanceId"：实例Id，例如：cmgo-****）
"InstanceName"：实例名称
"ClusterId"：实例组Id，例如：cmgo-****
 * @method array getValues() 获取筛选值
 * @method void setValues(array $Values) 设置筛选值
 */
class Filters extends AbstractModel
{
    /**
     * @var string 搜索字段，目前支持：
"InstanceId"：实例Id，例如：cmgo-****）
"InstanceName"：实例名称
"ClusterId"：实例组Id，例如：cmgo-****
     */
    public $Name;

    /**
     * @var array 筛选值
     */
    public $Values;

    /**
     * @param string $Name 搜索字段，目前支持：
"InstanceId"：实例Id，例如：cmgo-****）
"InstanceName"：实例名称
"ClusterId"：实例组Id，例如：cmgo-****
     * @param array $Values 筛选值
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = $param["Values"];
        }
    }
}
