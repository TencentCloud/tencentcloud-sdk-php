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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * InquiryPriceScaleOutInstance返回参数结构体
 *
 * @method string getOriginalCost() 获取原价，单位为元。
 * @method void setOriginalCost(string $OriginalCost) 设置原价，单位为元。
 * @method string getDiscountCost() 获取折扣价，单位为元。
 * @method void setDiscountCost(string $DiscountCost) 设置折扣价，单位为元。
 * @method string getUnit() 获取扩容的时间单位。取值范围：
<li>s：表示秒。</li>
<li>m：表示月份。</li>
 * @method void setUnit(string $Unit) 设置扩容的时间单位。取值范围：
<li>s：表示秒。</li>
<li>m：表示月份。</li>
 * @method PriceResource getPriceSpec() 获取询价的节点规格。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPriceSpec(PriceResource $PriceSpec) 设置询价的节点规格。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getMultipleEmrPrice() 获取对应入参MultipleResources中多个规格的询价结果，其它出参返回的是第一个规格的询价结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMultipleEmrPrice(array $MultipleEmrPrice) 设置对应入参MultipleResources中多个规格的询价结果，其它出参返回的是第一个规格的询价结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class InquiryPriceScaleOutInstanceResponse extends AbstractModel
{
    /**
     * @var string 原价，单位为元。
     */
    public $OriginalCost;

    /**
     * @var string 折扣价，单位为元。
     */
    public $DiscountCost;

    /**
     * @var string 扩容的时间单位。取值范围：
<li>s：表示秒。</li>
<li>m：表示月份。</li>
     */
    public $Unit;

    /**
     * @var PriceResource 询价的节点规格。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PriceSpec;

    /**
     * @var array 对应入参MultipleResources中多个规格的询价结果，其它出参返回的是第一个规格的询价结果
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MultipleEmrPrice;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $OriginalCost 原价，单位为元。
     * @param string $DiscountCost 折扣价，单位为元。
     * @param string $Unit 扩容的时间单位。取值范围：
<li>s：表示秒。</li>
<li>m：表示月份。</li>
     * @param PriceResource $PriceSpec 询价的节点规格。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $MultipleEmrPrice 对应入参MultipleResources中多个规格的询价结果，其它出参返回的是第一个规格的询价结果
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("OriginalCost",$param) and $param["OriginalCost"] !== null) {
            $this->OriginalCost = $param["OriginalCost"];
        }

        if (array_key_exists("DiscountCost",$param) and $param["DiscountCost"] !== null) {
            $this->DiscountCost = $param["DiscountCost"];
        }

        if (array_key_exists("Unit",$param) and $param["Unit"] !== null) {
            $this->Unit = $param["Unit"];
        }

        if (array_key_exists("PriceSpec",$param) and $param["PriceSpec"] !== null) {
            $this->PriceSpec = new PriceResource();
            $this->PriceSpec->deserialize($param["PriceSpec"]);
        }

        if (array_key_exists("MultipleEmrPrice",$param) and $param["MultipleEmrPrice"] !== null) {
            $this->MultipleEmrPrice = [];
            foreach ($param["MultipleEmrPrice"] as $key => $value){
                $obj = new EmrPrice();
                $obj->deserialize($value);
                array_push($this->MultipleEmrPrice, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
