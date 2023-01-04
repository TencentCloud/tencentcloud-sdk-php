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
 * Emr询价描述
 *
 * @method string getOriginalCost() 获取刊例价格
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOriginalCost(string $OriginalCost) 设置刊例价格
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDiscountCost() 获取折扣价格
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDiscountCost(string $DiscountCost) 设置折扣价格
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUnit() 获取单位
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUnit(string $Unit) 设置单位
注意：此字段可能返回 null，表示取不到有效值。
 * @method PriceResource getPriceSpec() 获取询价配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPriceSpec(PriceResource $PriceSpec) 设置询价配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getSupportSpotPaid() 获取是否支持竞价实例
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSupportSpotPaid(boolean $SupportSpotPaid) 设置是否支持竞价实例
注意：此字段可能返回 null，表示取不到有效值。
 */
class EmrPrice extends AbstractModel
{
    /**
     * @var string 刊例价格
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OriginalCost;

    /**
     * @var string 折扣价格
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DiscountCost;

    /**
     * @var string 单位
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Unit;

    /**
     * @var PriceResource 询价配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PriceSpec;

    /**
     * @var boolean 是否支持竞价实例
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SupportSpotPaid;

    /**
     * @param string $OriginalCost 刊例价格
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DiscountCost 折扣价格
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Unit 单位
注意：此字段可能返回 null，表示取不到有效值。
     * @param PriceResource $PriceSpec 询价配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $SupportSpotPaid 是否支持竞价实例
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

        if (array_key_exists("SupportSpotPaid",$param) and $param["SupportSpotPaid"] !== null) {
            $this->SupportSpotPaid = $param["SupportSpotPaid"];
        }
    }
}
