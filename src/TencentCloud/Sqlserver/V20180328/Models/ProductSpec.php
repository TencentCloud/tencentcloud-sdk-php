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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 包括地域的产品规格配置
 *
 * @method integer getRegionId() 获取地域ID
 * @method void setRegionId(integer $RegionId) 设置地域ID
 * @method integer getZoneId() 获取可用区ID
 * @method void setZoneId(integer $ZoneId) 设置可用区ID
 * @method array getInfo() 获取配置信息
 * @method void setInfo(array $Info) 设置配置信息
 */
class ProductSpec extends AbstractModel
{
    /**
     * @var integer 地域ID
     */
    public $RegionId;

    /**
     * @var integer 可用区ID
     */
    public $ZoneId;

    /**
     * @var array 配置信息
     */
    public $Info;

    /**
     * @param integer $RegionId 地域ID
     * @param integer $ZoneId 可用区ID
     * @param array $Info 配置信息
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

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Info",$param) and $param["Info"] !== null) {
            $this->Info = [];
            foreach ($param["Info"] as $key => $value){
                $obj = new SpecInfo();
                $obj->deserialize($value);
                array_push($this->Info, $obj);
            }
        }
    }
}
