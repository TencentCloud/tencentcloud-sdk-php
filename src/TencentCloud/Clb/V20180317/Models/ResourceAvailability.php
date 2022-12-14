<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 资源可用性
 *
 * @method string getType() 获取运营商内具体资源信息，如"CMCC", "CUCC", "CTCC", "BGP"。
 * @method void setType(string $Type) 设置运营商内具体资源信息，如"CMCC", "CUCC", "CTCC", "BGP"。
 * @method string getAvailability() 获取资源可用性，"Available"：可用，"Unavailable"：不可用
 * @method void setAvailability(string $Availability) 设置资源可用性，"Available"：可用，"Unavailable"：不可用
 */
class ResourceAvailability extends AbstractModel
{
    /**
     * @var string 运营商内具体资源信息，如"CMCC", "CUCC", "CTCC", "BGP"。
     */
    public $Type;

    /**
     * @var string 资源可用性，"Available"：可用，"Unavailable"：不可用
     */
    public $Availability;

    /**
     * @param string $Type 运营商内具体资源信息，如"CMCC", "CUCC", "CTCC", "BGP"。
     * @param string $Availability 资源可用性，"Available"：可用，"Unavailable"：不可用
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

        if (array_key_exists("Availability",$param) and $param["Availability"] !== null) {
            $this->Availability = $param["Availability"];
        }
    }
}
