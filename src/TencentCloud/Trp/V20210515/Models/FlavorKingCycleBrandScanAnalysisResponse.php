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
 * @method integer getCount() 获取<p>总数</p>
 * @method void setCount(integer $Count) 设置<p>总数</p>
 * @method float getCycleRatio() 获取<p>占比</p>
 * @method void setCycleRatio(float $CycleRatio) 设置<p>占比</p>
 * @method float getCycleOverCycle() 获取<p>环比</p>
 * @method void setCycleOverCycle(float $CycleOverCycle) 设置<p>环比</p>
 * @method array getCycleRatioItems() 获取<p>占比详情</p>
 * @method void setCycleRatioItems(array $CycleRatioItems) 设置<p>占比详情</p>
 */
class FlavorKingCycleBrandScanAnalysisResponse extends AbstractModel
{
    /**
     * @var integer <p>总数</p>
     */
    public $Count;

    /**
     * @var float <p>占比</p>
     */
    public $CycleRatio;

    /**
     * @var float <p>环比</p>
     */
    public $CycleOverCycle;

    /**
     * @var array <p>占比详情</p>
     */
    public $CycleRatioItems;

    /**
     * @param integer $Count <p>总数</p>
     * @param float $CycleRatio <p>占比</p>
     * @param float $CycleOverCycle <p>环比</p>
     * @param array $CycleRatioItems <p>占比详情</p>
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
        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("CycleRatio",$param) and $param["CycleRatio"] !== null) {
            $this->CycleRatio = $param["CycleRatio"];
        }

        if (array_key_exists("CycleOverCycle",$param) and $param["CycleOverCycle"] !== null) {
            $this->CycleOverCycle = $param["CycleOverCycle"];
        }

        if (array_key_exists("CycleRatioItems",$param) and $param["CycleRatioItems"] !== null) {
            $this->CycleRatioItems = [];
            foreach ($param["CycleRatioItems"] as $key => $value){
                $obj = new FlavorKingCycleBrandScanAnalysisDataItem();
                $obj->deserialize($value);
                array_push($this->CycleRatioItems, $obj);
            }
        }
    }
}
