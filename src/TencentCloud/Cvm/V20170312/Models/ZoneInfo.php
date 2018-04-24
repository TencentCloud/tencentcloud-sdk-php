<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getZone() 获取可用区名称，例如，ap-guangzhou-3
 * @method void setZone(string $Zone) 设置可用区名称，例如，ap-guangzhou-3
 * @method string getZoneName() 获取可用区描述，例如，广州三区
 * @method void setZoneName(string $ZoneName) 设置可用区描述，例如，广州三区
 * @method string getZoneId() 获取可用区ID
 * @method void setZoneId(string $ZoneId) 设置可用区ID
 * @method string getZoneState() 获取可用区状态
 * @method void setZoneState(string $ZoneState) 设置可用区状态
 */

/**
 *可用区信息
 */
class ZoneInfo extends AbstractModel
{
    /**
     * @var string 可用区名称，例如，ap-guangzhou-3
     */
    public $Zone;

    /**
     * @var string 可用区描述，例如，广州三区
     */
    public $ZoneName;

    /**
     * @var string 可用区ID
     */
    public $ZoneId;

    /**
     * @var string 可用区状态
     */
    public $ZoneState;
    /**
     * @param string $Zone 可用区名称，例如，ap-guangzhou-3
     * @param string $ZoneName 可用区描述，例如，广州三区
     * @param string $ZoneId 可用区ID
     * @param string $ZoneState 可用区状态
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("ZoneName",$param) and $param["ZoneName"] !== null) {
            $this->ZoneName = $param["ZoneName"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("ZoneState",$param) and $param["ZoneState"] !== null) {
            $this->ZoneState = $param["ZoneState"];
        }
    }
}
