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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 各地域可售卖的规格配置
 *
 * @method array getConfigs() 获取售卖规格所有集合
 * @method void setConfigs(array $Configs) 设置售卖规格所有集合
 * @method array getRegions() 获取售卖地域可用区集合
 * @method void setRegions(array $Regions) 设置售卖地域可用区集合
 */
class CdbZoneDataResult extends AbstractModel
{
    /**
     * @var array 售卖规格所有集合
     */
    public $Configs;

    /**
     * @var array 售卖地域可用区集合
     */
    public $Regions;

    /**
     * @param array $Configs 售卖规格所有集合
     * @param array $Regions 售卖地域可用区集合
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
        if (array_key_exists("Configs",$param) and $param["Configs"] !== null) {
            $this->Configs = [];
            foreach ($param["Configs"] as $key => $value){
                $obj = new CdbSellConfig();
                $obj->deserialize($value);
                array_push($this->Configs, $obj);
            }
        }

        if (array_key_exists("Regions",$param) and $param["Regions"] !== null) {
            $this->Regions = [];
            foreach ($param["Regions"] as $key => $value){
                $obj = new CdbRegionSellConf();
                $obj->deserialize($value);
                array_push($this->Regions, $obj);
            }
        }
    }
}
