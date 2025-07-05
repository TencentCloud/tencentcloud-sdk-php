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
namespace TencentCloud\Ioa\V20220601\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDeviceInfo请求参数结构体
 *
 * @method string getMid() 获取终端id
 * @method void setMid(string $Mid) 设置终端id
 * @method string getType() 获取查询类型  process_list network_list service_list
 * @method void setType(string $Type) 设置查询类型  process_list network_list service_list
 */
class DescribeDeviceInfoRequest extends AbstractModel
{
    /**
     * @var string 终端id
     */
    public $Mid;

    /**
     * @var string 查询类型  process_list network_list service_list
     */
    public $Type;

    /**
     * @param string $Mid 终端id
     * @param string $Type 查询类型  process_list network_list service_list
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
        if (array_key_exists("Mid",$param) and $param["Mid"] !== null) {
            $this->Mid = $param["Mid"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
