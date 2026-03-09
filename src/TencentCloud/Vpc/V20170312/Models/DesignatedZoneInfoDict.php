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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用户可选的可用区信息
 *
 * @method string getDesignatedZone() 获取可用区Id
 * @method void setDesignatedZone(string $DesignatedZone) 设置可用区Id
 * @method string getDesignatedZoneName() 获取可用区名称
 * @method void setDesignatedZoneName(string $DesignatedZoneName) 设置可用区名称
 * @method string getDesignatedZoneType() 获取可用区类型
 * @method void setDesignatedZoneType(string $DesignatedZoneType) 设置可用区类型
 */
class DesignatedZoneInfoDict extends AbstractModel
{
    /**
     * @var string 可用区Id
     */
    public $DesignatedZone;

    /**
     * @var string 可用区名称
     */
    public $DesignatedZoneName;

    /**
     * @var string 可用区类型
     */
    public $DesignatedZoneType;

    /**
     * @param string $DesignatedZone 可用区Id
     * @param string $DesignatedZoneName 可用区名称
     * @param string $DesignatedZoneType 可用区类型
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
        if (array_key_exists("DesignatedZone",$param) and $param["DesignatedZone"] !== null) {
            $this->DesignatedZone = $param["DesignatedZone"];
        }

        if (array_key_exists("DesignatedZoneName",$param) and $param["DesignatedZoneName"] !== null) {
            $this->DesignatedZoneName = $param["DesignatedZoneName"];
        }

        if (array_key_exists("DesignatedZoneType",$param) and $param["DesignatedZoneType"] !== null) {
            $this->DesignatedZoneType = $param["DesignatedZoneType"];
        }
    }
}
