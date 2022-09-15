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
namespace TencentCloud\Cdc\V20201214\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RegionZoneInfo信息
 *
 * @method integer getRegionId() 获取Region id
 * @method void setRegionId(integer $RegionId) 设置Region id
 * @method array getZones() 获取ZoneInfo数组
 * @method void setZones(array $Zones) 设置ZoneInfo数组
 */
class RegionZoneInfo extends AbstractModel
{
    /**
     * @var integer Region id
     */
    public $RegionId;

    /**
     * @var array ZoneInfo数组
     */
    public $Zones;

    /**
     * @param integer $RegionId Region id
     * @param array $Zones ZoneInfo数组
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
        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("Zones",$param) and $param["Zones"] !== null) {
            $this->Zones = [];
            foreach ($param["Zones"] as $key => $value){
                $obj = new ZoneInfo();
                $obj->deserialize($value);
                array_push($this->Zones, $obj);
            }
        }
    }
}
