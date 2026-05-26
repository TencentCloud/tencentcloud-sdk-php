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
 * @method float getMarketShare() 获取<p>口味王全国份额</p>
 * @method void setMarketShare(float $MarketShare) 设置<p>口味王全国份额</p>
 * @method float getLastCycleMarketShare() 获取<p>上周期口味王市场份额</p>
 * @method void setLastCycleMarketShare(float $LastCycleMarketShare) 设置<p>上周期口味王市场份额</p>
 * @method array getProvinces() 获取<p>口味王全国周环比</p>
 * @method void setProvinces(array $Provinces) 设置<p>口味王全国周环比</p>
 * @method float getGrowRatio() 获取<p>口味王环比</p>
 * @method void setGrowRatio(float $GrowRatio) 设置<p>口味王环比</p>
 * @method float getOtherGrowRatio() 获取<p>其他品牌环比</p>
 * @method void setOtherGrowRatio(float $OtherGrowRatio) 设置<p>其他品牌环比</p>
 */
class FlavorKingCycleBrandProvinceScanAnalysisResponse extends AbstractModel
{
    /**
     * @var float <p>口味王全国份额</p>
     */
    public $MarketShare;

    /**
     * @var float <p>上周期口味王市场份额</p>
     */
    public $LastCycleMarketShare;

    /**
     * @var array <p>口味王全国周环比</p>
     */
    public $Provinces;

    /**
     * @var float <p>口味王环比</p>
     */
    public $GrowRatio;

    /**
     * @var float <p>其他品牌环比</p>
     */
    public $OtherGrowRatio;

    /**
     * @param float $MarketShare <p>口味王全国份额</p>
     * @param float $LastCycleMarketShare <p>上周期口味王市场份额</p>
     * @param array $Provinces <p>口味王全国周环比</p>
     * @param float $GrowRatio <p>口味王环比</p>
     * @param float $OtherGrowRatio <p>其他品牌环比</p>
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
        if (array_key_exists("MarketShare",$param) and $param["MarketShare"] !== null) {
            $this->MarketShare = $param["MarketShare"];
        }

        if (array_key_exists("LastCycleMarketShare",$param) and $param["LastCycleMarketShare"] !== null) {
            $this->LastCycleMarketShare = $param["LastCycleMarketShare"];
        }

        if (array_key_exists("Provinces",$param) and $param["Provinces"] !== null) {
            $this->Provinces = [];
            foreach ($param["Provinces"] as $key => $value){
                $obj = new FlavorKingCycleBrandProvinceScanAnalysisDataItem();
                $obj->deserialize($value);
                array_push($this->Provinces, $obj);
            }
        }

        if (array_key_exists("GrowRatio",$param) and $param["GrowRatio"] !== null) {
            $this->GrowRatio = $param["GrowRatio"];
        }

        if (array_key_exists("OtherGrowRatio",$param) and $param["OtherGrowRatio"] !== null) {
            $this->OtherGrowRatio = $param["OtherGrowRatio"];
        }
    }
}
