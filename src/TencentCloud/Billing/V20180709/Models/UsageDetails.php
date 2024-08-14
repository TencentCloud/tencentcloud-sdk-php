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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 购买商品信息
 *
 * @method string getProductName() 获取商品名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProductName(string $ProductName) 设置商品名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubProductName() 获取商品细节
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubProductName(string $SubProductName) 设置商品细节
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProductCode() 获取产品码	
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProductCode(string $ProductCode) 设置产品码	
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubProductCode() 获取子产品码	
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubProductCode(string $SubProductCode) 设置子产品码	
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBillingItemCode() 获取计费项码	
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBillingItemCode(string $BillingItemCode) 设置计费项码	
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubBillingItemCode() 获取计费细项码	
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubBillingItemCode(string $SubBillingItemCode) 设置计费细项码	
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProductEnName() 获取产品英文名	
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProductEnName(string $ProductEnName) 设置产品英文名	
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubProductEnName() 获取子产品英文名	
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubProductEnName(string $SubProductEnName) 设置子产品英文名	
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCalcUnit() 获取结算周期	
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCalcUnit(string $CalcUnit) 设置结算周期	
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAction() 获取payMode为prepay 且 payScene为common的情况下存在
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAction(string $Action) 设置payMode为prepay 且 payScene为common的情况下存在
注意：此字段可能返回 null，表示取不到有效值。
 */
class UsageDetails extends AbstractModel
{
    /**
     * @var string 商品名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProductName;

    /**
     * @var string 商品细节
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubProductName;

    /**
     * @var string 产品码	
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProductCode;

    /**
     * @var string 子产品码	
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubProductCode;

    /**
     * @var string 计费项码	
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BillingItemCode;

    /**
     * @var string 计费细项码	
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubBillingItemCode;

    /**
     * @var string 产品英文名	
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProductEnName;

    /**
     * @var string 子产品英文名	
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubProductEnName;

    /**
     * @var string 结算周期	
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CalcUnit;

    /**
     * @var string payMode为prepay 且 payScene为common的情况下存在
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Action;

    /**
     * @param string $ProductName 商品名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubProductName 商品细节
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProductCode 产品码	
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubProductCode 子产品码	
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BillingItemCode 计费项码	
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubBillingItemCode 计费细项码	
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProductEnName 产品英文名	
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubProductEnName 子产品英文名	
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CalcUnit 结算周期	
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Action payMode为prepay 且 payScene为common的情况下存在
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
        if (array_key_exists("ProductName",$param) and $param["ProductName"] !== null) {
            $this->ProductName = $param["ProductName"];
        }

        if (array_key_exists("SubProductName",$param) and $param["SubProductName"] !== null) {
            $this->SubProductName = $param["SubProductName"];
        }

        if (array_key_exists("ProductCode",$param) and $param["ProductCode"] !== null) {
            $this->ProductCode = $param["ProductCode"];
        }

        if (array_key_exists("SubProductCode",$param) and $param["SubProductCode"] !== null) {
            $this->SubProductCode = $param["SubProductCode"];
        }

        if (array_key_exists("BillingItemCode",$param) and $param["BillingItemCode"] !== null) {
            $this->BillingItemCode = $param["BillingItemCode"];
        }

        if (array_key_exists("SubBillingItemCode",$param) and $param["SubBillingItemCode"] !== null) {
            $this->SubBillingItemCode = $param["SubBillingItemCode"];
        }

        if (array_key_exists("ProductEnName",$param) and $param["ProductEnName"] !== null) {
            $this->ProductEnName = $param["ProductEnName"];
        }

        if (array_key_exists("SubProductEnName",$param) and $param["SubProductEnName"] !== null) {
            $this->SubProductEnName = $param["SubProductEnName"];
        }

        if (array_key_exists("CalcUnit",$param) and $param["CalcUnit"] !== null) {
            $this->CalcUnit = $param["CalcUnit"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }
    }
}
