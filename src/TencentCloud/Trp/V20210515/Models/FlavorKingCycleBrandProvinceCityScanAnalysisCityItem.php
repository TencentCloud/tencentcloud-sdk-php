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
namespace TencentCloud\Trp\V20210515\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 品牌扫码数据
 *
 * @method array getRatio() 获取<p>口味王分布</p>
 * @method void setRatio(array $Ratio) 设置<p>口味王分布</p>
 * @method array getRegions() 获取<p>分区域数据</p>
 * @method void setRegions(array $Regions) 设置<p>分区域数据</p>
 * @method string getCity() 获取<p>城市</p>
 * @method void setCity(string $City) 设置<p>城市</p>
 */
class FlavorKingCycleBrandProvinceCityScanAnalysisCityItem extends AbstractModel
{
    /**
     * @var array <p>口味王分布</p>
     */
    public $Ratio;

    /**
     * @var array <p>分区域数据</p>
     */
    public $Regions;

    /**
     * @var string <p>城市</p>
     */
    public $City;

    /**
     * @param array $Ratio <p>口味王分布</p>
     * @param array $Regions <p>分区域数据</p>
     * @param string $City <p>城市</p>
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
        if (array_key_exists("Ratio",$param) and $param["Ratio"] !== null) {
            $this->Ratio = $param["Ratio"];
        }

        if (array_key_exists("Regions",$param) and $param["Regions"] !== null) {
            $this->Regions = [];
            foreach ($param["Regions"] as $key => $value){
                $obj = new FlavorKingCycleBrandProvinceCityScanAnalysisRegionItem();
                $obj->deserialize($value);
                array_push($this->Regions, $obj);
            }
        }

        if (array_key_exists("City",$param) and $param["City"] !== null) {
            $this->City = $param["City"];
        }
    }
}
