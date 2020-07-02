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
namespace TencentCloud\Batch\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 描述了单项的价格信息
 *
 * @method float getUnitPrice() 获取后续合计费用的原价，后付费模式使用，单位：元。<br><li>如返回了其他时间区间项，如UnitPriceSecondStep，则本项代表时间区间在(0, 96)小时；若未返回其他时间区间项，则本项代表全时段，即(0, ∞)小时
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUnitPrice(float $UnitPrice) 设置后续合计费用的原价，后付费模式使用，单位：元。<br><li>如返回了其他时间区间项，如UnitPriceSecondStep，则本项代表时间区间在(0, 96)小时；若未返回其他时间区间项，则本项代表全时段，即(0, ∞)小时
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getChargeUnit() 获取后续计价单元，后付费模式使用，可取值范围： <br><li>HOUR：表示计价单元是按每小时来计算。当前涉及该计价单元的场景有：实例按小时后付费（POSTPAID_BY_HOUR）、带宽按小时后付费（BANDWIDTH_POSTPAID_BY_HOUR）：<br><li>GB：表示计价单元是按每GB来计算。当前涉及该计价单元的场景有：流量按小时后付费（TRAFFIC_POSTPAID_BY_HOUR）。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChargeUnit(string $ChargeUnit) 设置后续计价单元，后付费模式使用，可取值范围： <br><li>HOUR：表示计价单元是按每小时来计算。当前涉及该计价单元的场景有：实例按小时后付费（POSTPAID_BY_HOUR）、带宽按小时后付费（BANDWIDTH_POSTPAID_BY_HOUR）：<br><li>GB：表示计价单元是按每GB来计算。当前涉及该计价单元的场景有：流量按小时后付费（TRAFFIC_POSTPAID_BY_HOUR）。
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getOriginalPrice() 获取预支合计费用的原价，预付费模式使用，单位：元。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOriginalPrice(float $OriginalPrice) 设置预支合计费用的原价，预付费模式使用，单位：元。
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getDiscountPrice() 获取预支合计费用的折扣价，预付费模式使用，单位：元。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDiscountPrice(float $DiscountPrice) 设置预支合计费用的折扣价，预付费模式使用，单位：元。
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getDiscount() 获取折扣，如20.0代表2折
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDiscount(float $Discount) 设置折扣，如20.0代表2折
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getUnitPriceDiscount() 获取后续合计费用的折扣价，后付费模式使用，单位：元<br><li>如返回了其他时间区间项，如UnitPriceDiscountSecondStep，则本项代表时间区间在(0, 96)小时；若未返回其他时间区间项，则本项代表全时段，即(0, ∞)小时
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUnitPriceDiscount(float $UnitPriceDiscount) 设置后续合计费用的折扣价，后付费模式使用，单位：元<br><li>如返回了其他时间区间项，如UnitPriceDiscountSecondStep，则本项代表时间区间在(0, 96)小时；若未返回其他时间区间项，则本项代表全时段，即(0, ∞)小时
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getUnitPriceSecondStep() 获取使用时间区间在(96, 360)小时的后续合计费用的原价，后付费模式使用，单位：元。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUnitPriceSecondStep(float $UnitPriceSecondStep) 设置使用时间区间在(96, 360)小时的后续合计费用的原价，后付费模式使用，单位：元。
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getUnitPriceDiscountSecondStep() 获取使用时间区间在(96, 360)小时的后续合计费用的折扣价，后付费模式使用，单位：元
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUnitPriceDiscountSecondStep(float $UnitPriceDiscountSecondStep) 设置使用时间区间在(96, 360)小时的后续合计费用的折扣价，后付费模式使用，单位：元
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getUnitPriceThirdStep() 获取使用时间区间在(360, ∞)小时的后续合计费用的原价，后付费模式使用，单位：元。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUnitPriceThirdStep(float $UnitPriceThirdStep) 设置使用时间区间在(360, ∞)小时的后续合计费用的原价，后付费模式使用，单位：元。
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getUnitPriceDiscountThirdStep() 获取使用时间区间在(360, ∞)小时的后续合计费用的折扣价，后付费模式使用，单位：元
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUnitPriceDiscountThirdStep(float $UnitPriceDiscountThirdStep) 设置使用时间区间在(360, ∞)小时的后续合计费用的折扣价，后付费模式使用，单位：元
注意：此字段可能返回 null，表示取不到有效值。
 */
class ItemPrice extends AbstractModel
{
    /**
     * @var float 后续合计费用的原价，后付费模式使用，单位：元。<br><li>如返回了其他时间区间项，如UnitPriceSecondStep，则本项代表时间区间在(0, 96)小时；若未返回其他时间区间项，则本项代表全时段，即(0, ∞)小时
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UnitPrice;

    /**
     * @var string 后续计价单元，后付费模式使用，可取值范围： <br><li>HOUR：表示计价单元是按每小时来计算。当前涉及该计价单元的场景有：实例按小时后付费（POSTPAID_BY_HOUR）、带宽按小时后付费（BANDWIDTH_POSTPAID_BY_HOUR）：<br><li>GB：表示计价单元是按每GB来计算。当前涉及该计价单元的场景有：流量按小时后付费（TRAFFIC_POSTPAID_BY_HOUR）。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChargeUnit;

    /**
     * @var float 预支合计费用的原价，预付费模式使用，单位：元。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OriginalPrice;

    /**
     * @var float 预支合计费用的折扣价，预付费模式使用，单位：元。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DiscountPrice;

    /**
     * @var float 折扣，如20.0代表2折
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Discount;

    /**
     * @var float 后续合计费用的折扣价，后付费模式使用，单位：元<br><li>如返回了其他时间区间项，如UnitPriceDiscountSecondStep，则本项代表时间区间在(0, 96)小时；若未返回其他时间区间项，则本项代表全时段，即(0, ∞)小时
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UnitPriceDiscount;

    /**
     * @var float 使用时间区间在(96, 360)小时的后续合计费用的原价，后付费模式使用，单位：元。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UnitPriceSecondStep;

    /**
     * @var float 使用时间区间在(96, 360)小时的后续合计费用的折扣价，后付费模式使用，单位：元
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UnitPriceDiscountSecondStep;

    /**
     * @var float 使用时间区间在(360, ∞)小时的后续合计费用的原价，后付费模式使用，单位：元。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UnitPriceThirdStep;

    /**
     * @var float 使用时间区间在(360, ∞)小时的后续合计费用的折扣价，后付费模式使用，单位：元
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UnitPriceDiscountThirdStep;

    /**
     * @param float $UnitPrice 后续合计费用的原价，后付费模式使用，单位：元。<br><li>如返回了其他时间区间项，如UnitPriceSecondStep，则本项代表时间区间在(0, 96)小时；若未返回其他时间区间项，则本项代表全时段，即(0, ∞)小时
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ChargeUnit 后续计价单元，后付费模式使用，可取值范围： <br><li>HOUR：表示计价单元是按每小时来计算。当前涉及该计价单元的场景有：实例按小时后付费（POSTPAID_BY_HOUR）、带宽按小时后付费（BANDWIDTH_POSTPAID_BY_HOUR）：<br><li>GB：表示计价单元是按每GB来计算。当前涉及该计价单元的场景有：流量按小时后付费（TRAFFIC_POSTPAID_BY_HOUR）。
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $OriginalPrice 预支合计费用的原价，预付费模式使用，单位：元。
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $DiscountPrice 预支合计费用的折扣价，预付费模式使用，单位：元。
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $Discount 折扣，如20.0代表2折
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $UnitPriceDiscount 后续合计费用的折扣价，后付费模式使用，单位：元<br><li>如返回了其他时间区间项，如UnitPriceDiscountSecondStep，则本项代表时间区间在(0, 96)小时；若未返回其他时间区间项，则本项代表全时段，即(0, ∞)小时
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $UnitPriceSecondStep 使用时间区间在(96, 360)小时的后续合计费用的原价，后付费模式使用，单位：元。
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $UnitPriceDiscountSecondStep 使用时间区间在(96, 360)小时的后续合计费用的折扣价，后付费模式使用，单位：元
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $UnitPriceThirdStep 使用时间区间在(360, ∞)小时的后续合计费用的原价，后付费模式使用，单位：元。
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $UnitPriceDiscountThirdStep 使用时间区间在(360, ∞)小时的后续合计费用的折扣价，后付费模式使用，单位：元
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
        if (array_key_exists('UnitPrice',$param) and $param['UnitPrice'] !== null) {
            $this->UnitPrice = $param['UnitPrice'];
        }

        if (array_key_exists('ChargeUnit',$param) and $param['ChargeUnit'] !== null) {
            $this->ChargeUnit = $param['ChargeUnit'];
        }

        if (array_key_exists('OriginalPrice',$param) and $param['OriginalPrice'] !== null) {
            $this->OriginalPrice = $param['OriginalPrice'];
        }

        if (array_key_exists('DiscountPrice',$param) and $param['DiscountPrice'] !== null) {
            $this->DiscountPrice = $param['DiscountPrice'];
        }

        if (array_key_exists('Discount',$param) and $param['Discount'] !== null) {
            $this->Discount = $param['Discount'];
        }

        if (array_key_exists('UnitPriceDiscount',$param) and $param['UnitPriceDiscount'] !== null) {
            $this->UnitPriceDiscount = $param['UnitPriceDiscount'];
        }

        if (array_key_exists('UnitPriceSecondStep',$param) and $param['UnitPriceSecondStep'] !== null) {
            $this->UnitPriceSecondStep = $param['UnitPriceSecondStep'];
        }

        if (array_key_exists('UnitPriceDiscountSecondStep',$param) and $param['UnitPriceDiscountSecondStep'] !== null) {
            $this->UnitPriceDiscountSecondStep = $param['UnitPriceDiscountSecondStep'];
        }

        if (array_key_exists('UnitPriceThirdStep',$param) and $param['UnitPriceThirdStep'] !== null) {
            $this->UnitPriceThirdStep = $param['UnitPriceThirdStep'];
        }

        if (array_key_exists('UnitPriceDiscountThirdStep',$param) and $param['UnitPriceDiscountThirdStep'] !== null) {
            $this->UnitPriceDiscountThirdStep = $param['UnitPriceDiscountThirdStep'];
        }
    }
}
