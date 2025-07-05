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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 新增Location字段，展示zone/region/campus
 *
 * @method string getRegion() 获取大区
 * @method void setRegion(string $Region) 设置大区
 * @method string getZone() 获取可用区
 * @method void setZone(string $Zone) 设置可用区
 * @method string getCampus() 获取机房
 * @method void setCampus(string $Campus) 设置机房
 */
class Location extends AbstractModel
{
    /**
     * @var string 大区
     */
    public $Region;

    /**
     * @var string 可用区
     */
    public $Zone;

    /**
     * @var string 机房
     */
    public $Campus;

    /**
     * @param string $Region 大区
     * @param string $Zone 可用区
     * @param string $Campus 机房
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
        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("Campus",$param) and $param["Campus"] !== null) {
            $this->Campus = $param["Campus"];
        }
    }
}
