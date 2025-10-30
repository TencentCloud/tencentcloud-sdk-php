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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInstanceSpecs请求参数结构体
 *
 * @method string getDbType() 获取数据库类型，取值范围: 
<li> MYSQL </li>
 * @method void setDbType(string $DbType) 设置数据库类型，取值范围: 
<li> MYSQL </li>
 * @method boolean getIncludeZoneStocks() 获取是否需要返回可用区信息
 * @method void setIncludeZoneStocks(boolean $IncludeZoneStocks) 设置是否需要返回可用区信息
 * @method string getDeviceType() 获取实例机器类型
 * @method void setDeviceType(string $DeviceType) 设置实例机器类型
 */
class DescribeInstanceSpecsRequest extends AbstractModel
{
    /**
     * @var string 数据库类型，取值范围: 
<li> MYSQL </li>
     */
    public $DbType;

    /**
     * @var boolean 是否需要返回可用区信息
     */
    public $IncludeZoneStocks;

    /**
     * @var string 实例机器类型
     */
    public $DeviceType;

    /**
     * @param string $DbType 数据库类型，取值范围: 
<li> MYSQL </li>
     * @param boolean $IncludeZoneStocks 是否需要返回可用区信息
     * @param string $DeviceType 实例机器类型
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
        if (array_key_exists("DbType",$param) and $param["DbType"] !== null) {
            $this->DbType = $param["DbType"];
        }

        if (array_key_exists("IncludeZoneStocks",$param) and $param["IncludeZoneStocks"] !== null) {
            $this->IncludeZoneStocks = $param["IncludeZoneStocks"];
        }

        if (array_key_exists("DeviceType",$param) and $param["DeviceType"] !== null) {
            $this->DeviceType = $param["DeviceType"];
        }
    }
}
