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
 * 分析指标分布桶
 *
 * @method string getValue() 获取<p>维度值</p>
 * @method void setValue(string $Value) 设置<p>维度值</p>
 * @method integer getCount() 获取<p>次数</p>
 * @method void setCount(integer $Count) 设置<p>次数</p>
 * @method integer getAffectedUser() 获取<p>影响用户数</p>
 * @method void setAffectedUser(integer $AffectedUser) 设置<p>影响用户数</p>
 * @method float getRate() 获取<p>率，分母为 0 时省略</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRate(float $Rate) 设置<p>率，分母为 0 时省略</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getAffectedUserRate() 获取<p>影响用户率，缺省省略</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAffectedUserRate(float $AffectedUserRate) 设置<p>影响用户率，缺省省略</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getAvg() 获取<p>均值，缺省省略</p>
 * @method void setAvg(float $Avg) 设置<p>均值，缺省省略</p>
 * @method float getP50() 获取<p>P50，缺省省略</p>
 * @method void setP50(float $P50) 设置<p>P50，缺省省略</p>
 * @method float getP75() 获取<p>P75，缺省省略</p>
 * @method void setP75(float $P75) 设置<p>P75，缺省省略</p>
 * @method float getP95() 获取<p>P95，缺省省略</p>
 * @method void setP95(float $P95) 设置<p>P95，缺省省略</p>
 * @method float getP99() 获取<p>P99，缺省省略</p>
 * @method void setP99(float $P99) 设置<p>P99，缺省省略</p>
 */
class MetricDistributionItem extends AbstractModel
{
    /**
     * @var string <p>维度值</p>
     */
    public $Value;

    /**
     * @var integer <p>次数</p>
     */
    public $Count;

    /**
     * @var integer <p>影响用户数</p>
     */
    public $AffectedUser;

    /**
     * @var float <p>率，分母为 0 时省略</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Rate;

    /**
     * @var float <p>影响用户率，缺省省略</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AffectedUserRate;

    /**
     * @var float <p>均值，缺省省略</p>
     */
    public $Avg;

    /**
     * @var float <p>P50，缺省省略</p>
     */
    public $P50;

    /**
     * @var float <p>P75，缺省省略</p>
     */
    public $P75;

    /**
     * @var float <p>P95，缺省省略</p>
     */
    public $P95;

    /**
     * @var float <p>P99，缺省省略</p>
     */
    public $P99;

    /**
     * @param string $Value <p>维度值</p>
     * @param integer $Count <p>次数</p>
     * @param integer $AffectedUser <p>影响用户数</p>
     * @param float $Rate <p>率，分母为 0 时省略</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $AffectedUserRate <p>影响用户率，缺省省略</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $Avg <p>均值，缺省省略</p>
     * @param float $P50 <p>P50，缺省省略</p>
     * @param float $P75 <p>P75，缺省省略</p>
     * @param float $P95 <p>P95，缺省省略</p>
     * @param float $P99 <p>P99，缺省省略</p>
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
        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("AffectedUser",$param) and $param["AffectedUser"] !== null) {
            $this->AffectedUser = $param["AffectedUser"];
        }

        if (array_key_exists("Rate",$param) and $param["Rate"] !== null) {
            $this->Rate = $param["Rate"];
        }

        if (array_key_exists("AffectedUserRate",$param) and $param["AffectedUserRate"] !== null) {
            $this->AffectedUserRate = $param["AffectedUserRate"];
        }

        if (array_key_exists("Avg",$param) and $param["Avg"] !== null) {
            $this->Avg = $param["Avg"];
        }

        if (array_key_exists("P50",$param) and $param["P50"] !== null) {
            $this->P50 = $param["P50"];
        }

        if (array_key_exists("P75",$param) and $param["P75"] !== null) {
            $this->P75 = $param["P75"];
        }

        if (array_key_exists("P95",$param) and $param["P95"] !== null) {
            $this->P95 = $param["P95"];
        }

        if (array_key_exists("P99",$param) and $param["P99"] !== null) {
            $this->P99 = $param["P99"];
        }
    }
}
