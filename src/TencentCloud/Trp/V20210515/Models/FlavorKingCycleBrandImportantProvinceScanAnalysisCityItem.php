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
 * @method float getRatio() 获取<p>口味王分布</p>
 * @method void setRatio(float $Ratio) 设置<p>口味王分布</p>
 * @method float getMarketShare() 获取<p>口味王市场份额</p>
 * @method void setMarketShare(float $MarketShare) 设置<p>口味王市场份额</p>
 * @method float getOtherMarketShare() 获取<p>其他品牌市场份额</p>
 * @method void setOtherMarketShare(float $OtherMarketShare) 设置<p>其他品牌市场份额</p>
 * @method float getLastCycleRatio() 获取<p>上周期口味王分布</p>
 * @method void setLastCycleRatio(float $LastCycleRatio) 设置<p>上周期口味王分布</p>
 * @method float getLastCycleMarketShare() 获取<p>上周期口味王市场份额</p>
 * @method void setLastCycleMarketShare(float $LastCycleMarketShare) 设置<p>上周期口味王市场份额</p>
 * @method float getLastCycleOtherMarketShare() 获取<p>上周期其他品牌市场份额</p>
 * @method void setLastCycleOtherMarketShare(float $LastCycleOtherMarketShare) 设置<p>上周期其他品牌市场份额</p>
 * @method float getGrowRatio() 获取<p>口味王增长率</p>
 * @method void setGrowRatio(float $GrowRatio) 设置<p>口味王增长率</p>
 * @method float getOtherGrowRatio() 获取<p>其他品牌增长率</p>
 * @method void setOtherGrowRatio(float $OtherGrowRatio) 设置<p>其他品牌增长率</p>
 * @method string getCity() 获取<p>城市</p>
 * @method void setCity(string $City) 设置<p>城市</p>
 */
class FlavorKingCycleBrandImportantProvinceScanAnalysisCityItem extends AbstractModel
{
    /**
     * @var float <p>口味王分布</p>
     */
    public $Ratio;

    /**
     * @var float <p>口味王市场份额</p>
     */
    public $MarketShare;

    /**
     * @var float <p>其他品牌市场份额</p>
     */
    public $OtherMarketShare;

    /**
     * @var float <p>上周期口味王分布</p>
     */
    public $LastCycleRatio;

    /**
     * @var float <p>上周期口味王市场份额</p>
     */
    public $LastCycleMarketShare;

    /**
     * @var float <p>上周期其他品牌市场份额</p>
     */
    public $LastCycleOtherMarketShare;

    /**
     * @var float <p>口味王增长率</p>
     */
    public $GrowRatio;

    /**
     * @var float <p>其他品牌增长率</p>
     */
    public $OtherGrowRatio;

    /**
     * @var string <p>城市</p>
     */
    public $City;

    /**
     * @param float $Ratio <p>口味王分布</p>
     * @param float $MarketShare <p>口味王市场份额</p>
     * @param float $OtherMarketShare <p>其他品牌市场份额</p>
     * @param float $LastCycleRatio <p>上周期口味王分布</p>
     * @param float $LastCycleMarketShare <p>上周期口味王市场份额</p>
     * @param float $LastCycleOtherMarketShare <p>上周期其他品牌市场份额</p>
     * @param float $GrowRatio <p>口味王增长率</p>
     * @param float $OtherGrowRatio <p>其他品牌增长率</p>
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

        if (array_key_exists("MarketShare",$param) and $param["MarketShare"] !== null) {
            $this->MarketShare = $param["MarketShare"];
        }

        if (array_key_exists("OtherMarketShare",$param) and $param["OtherMarketShare"] !== null) {
            $this->OtherMarketShare = $param["OtherMarketShare"];
        }

        if (array_key_exists("LastCycleRatio",$param) and $param["LastCycleRatio"] !== null) {
            $this->LastCycleRatio = $param["LastCycleRatio"];
        }

        if (array_key_exists("LastCycleMarketShare",$param) and $param["LastCycleMarketShare"] !== null) {
            $this->LastCycleMarketShare = $param["LastCycleMarketShare"];
        }

        if (array_key_exists("LastCycleOtherMarketShare",$param) and $param["LastCycleOtherMarketShare"] !== null) {
            $this->LastCycleOtherMarketShare = $param["LastCycleOtherMarketShare"];
        }

        if (array_key_exists("GrowRatio",$param) and $param["GrowRatio"] !== null) {
            $this->GrowRatio = $param["GrowRatio"];
        }

        if (array_key_exists("OtherGrowRatio",$param) and $param["OtherGrowRatio"] !== null) {
            $this->OtherGrowRatio = $param["OtherGrowRatio"];
        }

        if (array_key_exists("City",$param) and $param["City"] !== null) {
            $this->City = $param["City"];
        }
    }
}
