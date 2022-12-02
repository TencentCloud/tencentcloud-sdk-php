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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 询价返回参数
 *
 * @method float getUnitPrice() 获取单位原价
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUnitPrice(float $UnitPrice) 设置单位原价
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getUnitPriceDiscount() 获取折扣单位价格
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUnitPriceDiscount(float $UnitPriceDiscount) 设置折扣单位价格
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getOriginalPrice() 获取合计原价
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOriginalPrice(float $OriginalPrice) 设置合计原价
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getDiscountPrice() 获取折扣合计价格
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDiscountPrice(float $DiscountPrice) 设置折扣合计价格
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getDiscount() 获取折扣(单位是%)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDiscount(float $Discount) 设置折扣(单位是%)
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getGoodsNum() 获取商品数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGoodsNum(integer $GoodsNum) 设置商品数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCurrency() 获取付费货币
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCurrency(string $Currency) 设置付费货币
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDiskType() 获取硬盘专用返回参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDiskType(string $DiskType) 设置硬盘专用返回参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTimeSpan() 获取购买时长
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimeSpan(integer $TimeSpan) 设置购买时长
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTimeUnit() 获取购买时长单位("m"按月, "h"按小时)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimeUnit(string $TimeUnit) 设置购买时长单位("m"按月, "h"按小时)
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getValue() 获取购买数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValue(integer $Value) 设置购买数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method InquiryDetailPrice getDetailPrices() 获取详细类别的价格
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDetailPrices(InquiryDetailPrice $DetailPrices) 设置详细类别的价格
注意：此字段可能返回 null，表示取不到有效值。
 */
class InquiryPrice extends AbstractModel
{
    /**
     * @var float 单位原价
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UnitPrice;

    /**
     * @var float 折扣单位价格
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UnitPriceDiscount;

    /**
     * @var float 合计原价
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OriginalPrice;

    /**
     * @var float 折扣合计价格
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DiscountPrice;

    /**
     * @var float 折扣(单位是%)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Discount;

    /**
     * @var integer 商品数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GoodsNum;

    /**
     * @var string 付费货币
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Currency;

    /**
     * @var string 硬盘专用返回参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DiskType;

    /**
     * @var integer 购买时长
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TimeSpan;

    /**
     * @var string 购买时长单位("m"按月, "h"按小时)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TimeUnit;

    /**
     * @var integer 购买数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Value;

    /**
     * @var InquiryDetailPrice 详细类别的价格
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DetailPrices;

    /**
     * @param float $UnitPrice 单位原价
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $UnitPriceDiscount 折扣单位价格
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $OriginalPrice 合计原价
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $DiscountPrice 折扣合计价格
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $Discount 折扣(单位是%)
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $GoodsNum 商品数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Currency 付费货币
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DiskType 硬盘专用返回参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TimeSpan 购买时长
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TimeUnit 购买时长单位("m"按月, "h"按小时)
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Value 购买数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param InquiryDetailPrice $DetailPrices 详细类别的价格
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
        if (array_key_exists("UnitPrice",$param) and $param["UnitPrice"] !== null) {
            $this->UnitPrice = $param["UnitPrice"];
        }

        if (array_key_exists("UnitPriceDiscount",$param) and $param["UnitPriceDiscount"] !== null) {
            $this->UnitPriceDiscount = $param["UnitPriceDiscount"];
        }

        if (array_key_exists("OriginalPrice",$param) and $param["OriginalPrice"] !== null) {
            $this->OriginalPrice = $param["OriginalPrice"];
        }

        if (array_key_exists("DiscountPrice",$param) and $param["DiscountPrice"] !== null) {
            $this->DiscountPrice = $param["DiscountPrice"];
        }

        if (array_key_exists("Discount",$param) and $param["Discount"] !== null) {
            $this->Discount = $param["Discount"];
        }

        if (array_key_exists("GoodsNum",$param) and $param["GoodsNum"] !== null) {
            $this->GoodsNum = $param["GoodsNum"];
        }

        if (array_key_exists("Currency",$param) and $param["Currency"] !== null) {
            $this->Currency = $param["Currency"];
        }

        if (array_key_exists("DiskType",$param) and $param["DiskType"] !== null) {
            $this->DiskType = $param["DiskType"];
        }

        if (array_key_exists("TimeSpan",$param) and $param["TimeSpan"] !== null) {
            $this->TimeSpan = $param["TimeSpan"];
        }

        if (array_key_exists("TimeUnit",$param) and $param["TimeUnit"] !== null) {
            $this->TimeUnit = $param["TimeUnit"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("DetailPrices",$param) and $param["DetailPrices"] !== null) {
            $this->DetailPrices = new InquiryDetailPrice();
            $this->DetailPrices->deserialize($param["DetailPrices"]);
        }
    }
}
