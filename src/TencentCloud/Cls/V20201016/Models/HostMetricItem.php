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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 主机指标采集项
 *
 * @method string getType() 获取主机指标采集项类型。支持"cpu"，"mem"，"net"，"disk"，"system"。

- cpu：CPU
- mem：内存
- net：网络
- disk：磁盘
- system：系统
 * @method void setType(string $Type) 设置主机指标采集项类型。支持"cpu"，"mem"，"net"，"disk"，"system"。

- cpu：CPU
- mem：内存
- net：网络
- disk：磁盘
- system：系统
 */
class HostMetricItem extends AbstractModel
{
    /**
     * @var string 主机指标采集项类型。支持"cpu"，"mem"，"net"，"disk"，"system"。

- cpu：CPU
- mem：内存
- net：网络
- disk：磁盘
- system：系统
     */
    public $Type;

    /**
     * @param string $Type 主机指标采集项类型。支持"cpu"，"mem"，"net"，"disk"，"system"。

- cpu：CPU
- mem：内存
- net：网络
- disk：磁盘
- system：系统
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
    }
}
