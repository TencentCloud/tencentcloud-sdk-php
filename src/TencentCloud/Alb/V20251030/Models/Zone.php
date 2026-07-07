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
namespace TencentCloud\Alb\V20251030\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 可用区信息
 *
 * @method string getLocalName() 获取可用区名称
 * @method void setLocalName(string $LocalName) 设置可用区名称
 * @method string getZoneId() 获取可用区 ID
 * @method void setZoneId(string $ZoneId) 设置可用区 ID
 * @method string getZoneStatus() 获取可用区状态
 * @method void setZoneStatus(string $ZoneStatus) 设置可用区状态
 */
class Zone extends AbstractModel
{
    /**
     * @var string 可用区名称
     */
    public $LocalName;

    /**
     * @var string 可用区 ID
     */
    public $ZoneId;

    /**
     * @var string 可用区状态
     */
    public $ZoneStatus;

    /**
     * @param string $LocalName 可用区名称
     * @param string $ZoneId 可用区 ID
     * @param string $ZoneStatus 可用区状态
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
        if (array_key_exists("LocalName",$param) and $param["LocalName"] !== null) {
            $this->LocalName = $param["LocalName"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("ZoneStatus",$param) and $param["ZoneStatus"] !== null) {
            $this->ZoneStatus = $param["ZoneStatus"];
        }
    }
}
