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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 商品价格
 *
 * @method TradePrice getInstancePrice() 获取实例价格
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstancePrice(TradePrice $InstancePrice) 设置实例价格
注意：此字段可能返回 null，表示取不到有效值。
 * @method TradePrice getStoragePrice() 获取存储价格
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStoragePrice(TradePrice $StoragePrice) 设置存储价格
注意：此字段可能返回 null，表示取不到有效值。
 * @method GoodsSpec getGoodsSpec() 获取商品规格
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGoodsSpec(GoodsSpec $GoodsSpec) 设置商品规格
注意：此字段可能返回 null，表示取不到有效值。
 */
class GoodsPrice extends AbstractModel
{
    /**
     * @var TradePrice 实例价格
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstancePrice;

    /**
     * @var TradePrice 存储价格
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StoragePrice;

    /**
     * @var GoodsSpec 商品规格
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GoodsSpec;

    /**
     * @param TradePrice $InstancePrice 实例价格
注意：此字段可能返回 null，表示取不到有效值。
     * @param TradePrice $StoragePrice 存储价格
注意：此字段可能返回 null，表示取不到有效值。
     * @param GoodsSpec $GoodsSpec 商品规格
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
        if (array_key_exists("InstancePrice",$param) and $param["InstancePrice"] !== null) {
            $this->InstancePrice = new TradePrice();
            $this->InstancePrice->deserialize($param["InstancePrice"]);
        }

        if (array_key_exists("StoragePrice",$param) and $param["StoragePrice"] !== null) {
            $this->StoragePrice = new TradePrice();
            $this->StoragePrice->deserialize($param["StoragePrice"]);
        }

        if (array_key_exists("GoodsSpec",$param) and $param["GoodsSpec"] !== null) {
            $this->GoodsSpec = new GoodsSpec();
            $this->GoodsSpec->deserialize($param["GoodsSpec"]);
        }
    }
}
