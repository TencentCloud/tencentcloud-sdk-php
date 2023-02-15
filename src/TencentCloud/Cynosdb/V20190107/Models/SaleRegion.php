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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 售卖地域信息
 *
 * @method string getRegion() 获取地域英文名
 * @method void setRegion(string $Region) 设置地域英文名
 * @method integer getRegionId() 获取地域数字ID
 * @method void setRegionId(integer $RegionId) 设置地域数字ID
 * @method string getRegionZh() 获取地域中文名
 * @method void setRegionZh(string $RegionZh) 设置地域中文名
 * @method array getZoneSet() 获取可售卖可用区列表
 * @method void setZoneSet(array $ZoneSet) 设置可售卖可用区列表
 * @method string getDbType() 获取引擎类型
 * @method void setDbType(string $DbType) 设置引擎类型
 * @method array getModules() 获取地域模块支持情况
 * @method void setModules(array $Modules) 设置地域模块支持情况
 */
class SaleRegion extends AbstractModel
{
    /**
     * @var string 地域英文名
     */
    public $Region;

    /**
     * @var integer 地域数字ID
     */
    public $RegionId;

    /**
     * @var string 地域中文名
     */
    public $RegionZh;

    /**
     * @var array 可售卖可用区列表
     */
    public $ZoneSet;

    /**
     * @var string 引擎类型
     */
    public $DbType;

    /**
     * @var array 地域模块支持情况
     */
    public $Modules;

    /**
     * @param string $Region 地域英文名
     * @param integer $RegionId 地域数字ID
     * @param string $RegionZh 地域中文名
     * @param array $ZoneSet 可售卖可用区列表
     * @param string $DbType 引擎类型
     * @param array $Modules 地域模块支持情况
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

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("RegionZh",$param) and $param["RegionZh"] !== null) {
            $this->RegionZh = $param["RegionZh"];
        }

        if (array_key_exists("ZoneSet",$param) and $param["ZoneSet"] !== null) {
            $this->ZoneSet = [];
            foreach ($param["ZoneSet"] as $key => $value){
                $obj = new SaleZone();
                $obj->deserialize($value);
                array_push($this->ZoneSet, $obj);
            }
        }

        if (array_key_exists("DbType",$param) and $param["DbType"] !== null) {
            $this->DbType = $param["DbType"];
        }

        if (array_key_exists("Modules",$param) and $param["Modules"] !== null) {
            $this->Modules = [];
            foreach ($param["Modules"] as $key => $value){
                $obj = new Module();
                $obj->deserialize($value);
                array_push($this->Modules, $obj);
            }
        }
    }
}
