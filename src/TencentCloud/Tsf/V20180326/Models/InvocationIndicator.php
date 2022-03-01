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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 服务调用监控指标
 *
 * @method integer getInvocationQuantity() 获取总请求数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInvocationQuantity(integer $InvocationQuantity) 设置总请求数
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getInvocationSuccessRate() 获取请求成功率，百分比
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInvocationSuccessRate(float $InvocationSuccessRate) 设置请求成功率，百分比
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getInvocationAvgDuration() 获取请求平均耗时，单位毫秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInvocationAvgDuration(float $InvocationAvgDuration) 设置请求平均耗时，单位毫秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getInvocationSuccessDistribution() 获取成功请求数时间分布
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInvocationSuccessDistribution(array $InvocationSuccessDistribution) 设置成功请求数时间分布
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getInvocationFailedDistribution() 获取失败请求数时间分布
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInvocationFailedDistribution(array $InvocationFailedDistribution) 设置失败请求数时间分布
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getInvocationStatusDistribution() 获取状态码分布
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInvocationStatusDistribution(array $InvocationStatusDistribution) 设置状态码分布
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getInvocationDurationDistribution() 获取时延分布
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInvocationDurationDistribution(array $InvocationDurationDistribution) 设置时延分布
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getInvocationQuantityDistribution() 获取并发请求次数时间分布
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInvocationQuantityDistribution(array $InvocationQuantityDistribution) 设置并发请求次数时间分布
注意：此字段可能返回 null，表示取不到有效值。
 */
class InvocationIndicator extends AbstractModel
{
    /**
     * @var integer 总请求数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InvocationQuantity;

    /**
     * @var float 请求成功率，百分比
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InvocationSuccessRate;

    /**
     * @var float 请求平均耗时，单位毫秒
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InvocationAvgDuration;

    /**
     * @var array 成功请求数时间分布
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InvocationSuccessDistribution;

    /**
     * @var array 失败请求数时间分布
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InvocationFailedDistribution;

    /**
     * @var array 状态码分布
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InvocationStatusDistribution;

    /**
     * @var array 时延分布
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InvocationDurationDistribution;

    /**
     * @var array 并发请求次数时间分布
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InvocationQuantityDistribution;

    /**
     * @param integer $InvocationQuantity 总请求数
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $InvocationSuccessRate 请求成功率，百分比
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $InvocationAvgDuration 请求平均耗时，单位毫秒
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $InvocationSuccessDistribution 成功请求数时间分布
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $InvocationFailedDistribution 失败请求数时间分布
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $InvocationStatusDistribution 状态码分布
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $InvocationDurationDistribution 时延分布
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $InvocationQuantityDistribution 并发请求次数时间分布
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("InvocationQuantity",$param) and $param["InvocationQuantity"] !== null) {
            $this->InvocationQuantity = $param["InvocationQuantity"];
        }

        if (array_key_exists("InvocationSuccessRate",$param) and $param["InvocationSuccessRate"] !== null) {
            $this->InvocationSuccessRate = $param["InvocationSuccessRate"];
        }

        if (array_key_exists("InvocationAvgDuration",$param) and $param["InvocationAvgDuration"] !== null) {
            $this->InvocationAvgDuration = $param["InvocationAvgDuration"];
        }

        if (array_key_exists("InvocationSuccessDistribution",$param) and $param["InvocationSuccessDistribution"] !== null) {
            $this->InvocationSuccessDistribution = [];
            foreach ($param["InvocationSuccessDistribution"] as $key => $value){
                $obj = new IndicatorCoord();
                $obj->deserialize($value);
                array_push($this->InvocationSuccessDistribution, $obj);
            }
        }

        if (array_key_exists("InvocationFailedDistribution",$param) and $param["InvocationFailedDistribution"] !== null) {
            $this->InvocationFailedDistribution = [];
            foreach ($param["InvocationFailedDistribution"] as $key => $value){
                $obj = new IndicatorCoord();
                $obj->deserialize($value);
                array_push($this->InvocationFailedDistribution, $obj);
            }
        }

        if (array_key_exists("InvocationStatusDistribution",$param) and $param["InvocationStatusDistribution"] !== null) {
            $this->InvocationStatusDistribution = [];
            foreach ($param["InvocationStatusDistribution"] as $key => $value){
                $obj = new IndicatorCoord();
                $obj->deserialize($value);
                array_push($this->InvocationStatusDistribution, $obj);
            }
        }

        if (array_key_exists("InvocationDurationDistribution",$param) and $param["InvocationDurationDistribution"] !== null) {
            $this->InvocationDurationDistribution = [];
            foreach ($param["InvocationDurationDistribution"] as $key => $value){
                $obj = new IndicatorCoord();
                $obj->deserialize($value);
                array_push($this->InvocationDurationDistribution, $obj);
            }
        }

        if (array_key_exists("InvocationQuantityDistribution",$param) and $param["InvocationQuantityDistribution"] !== null) {
            $this->InvocationQuantityDistribution = [];
            foreach ($param["InvocationQuantityDistribution"] as $key => $value){
                $obj = new IndicatorCoord();
                $obj->deserialize($value);
                array_push($this->InvocationQuantityDistribution, $obj);
            }
        }
    }
}
