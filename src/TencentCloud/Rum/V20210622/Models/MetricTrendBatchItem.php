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
namespace TencentCloud\Rum\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 批量趋势条目
 *
 * @method string getKey() 获取<p>条目 Key</p>
 * @method void setKey(string $Key) 设置<p>条目 Key</p>
 * @method array getSeries() 获取<p>主窗时序</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSeries(array $Series) 设置<p>主窗时序</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getCompareSeries() 获取<p>对比窗时序</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCompareSeries(array $CompareSeries) 设置<p>对比窗时序</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getMaybeUncollected() 获取<p>可能尚未采集，false 时省略</p>
 * @method void setMaybeUncollected(boolean $MaybeUncollected) 设置<p>可能尚未采集，false 时省略</p>
 */
class MetricTrendBatchItem extends AbstractModel
{
    /**
     * @var string <p>条目 Key</p>
     */
    public $Key;

    /**
     * @var array <p>主窗时序</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Series;

    /**
     * @var array <p>对比窗时序</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CompareSeries;

    /**
     * @var boolean <p>可能尚未采集，false 时省略</p>
     */
    public $MaybeUncollected;

    /**
     * @param string $Key <p>条目 Key</p>
     * @param array $Series <p>主窗时序</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $CompareSeries <p>对比窗时序</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $MaybeUncollected <p>可能尚未采集，false 时省略</p>
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
        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Series",$param) and $param["Series"] !== null) {
            $this->Series = [];
            foreach ($param["Series"] as $key => $value){
                $obj = new MetricTrendPoint();
                $obj->deserialize($value);
                array_push($this->Series, $obj);
            }
        }

        if (array_key_exists("CompareSeries",$param) and $param["CompareSeries"] !== null) {
            $this->CompareSeries = [];
            foreach ($param["CompareSeries"] as $key => $value){
                $obj = new MetricTrendPoint();
                $obj->deserialize($value);
                array_push($this->CompareSeries, $obj);
            }
        }

        if (array_key_exists("MaybeUncollected",$param) and $param["MaybeUncollected"] !== null) {
            $this->MaybeUncollected = $param["MaybeUncollected"];
        }
    }
}
