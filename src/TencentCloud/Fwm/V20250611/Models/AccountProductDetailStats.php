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
namespace TencentCloud\Fwm\V20250611\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 单个产品的风险统计详情
 *
 * @method string getProduct() 获取产品类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProduct(string $Product) 设置产品类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProductName() 获取产品名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProductName(string $ProductName) 设置产品名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPolicyCount() 获取体检策略数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPolicyCount(integer $PolicyCount) 设置体检策略数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUntreatedRiskCount() 获取待整改风险数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUntreatedRiskCount(integer $UntreatedRiskCount) 设置待整改风险数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalRiskCount() 获取总风险数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalRiskCount(integer $TotalRiskCount) 设置总风险数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTreatedRiskCount() 获取已处置数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTreatedRiskCount(integer $TreatedRiskCount) 设置已处置数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIgnoredRiskCount() 获取已忽略数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIgnoredRiskCount(integer $IgnoredRiskCount) 设置已忽略数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRectifyRate() 获取整改率，如 50%，无需整改时为 无需整改
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRectifyRate(string $RectifyRate) 设置整改率，如 50%，无需整改时为 无需整改
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLastCheckTime() 获取最近一次体检时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastCheckTime(string $LastCheckTime) 设置最近一次体检时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSubcategoryIds() 获取子类 ID 列表
 * @method void setSubcategoryIds(array $SubcategoryIds) 设置子类 ID 列表
 * @method boolean getIsOverdue() 获取是否超时未体检
 * @method void setIsOverdue(boolean $IsOverdue) 设置是否超时未体检
 */
class AccountProductDetailStats extends AbstractModel
{
    /**
     * @var string 产品类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Product;

    /**
     * @var string 产品名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProductName;

    /**
     * @var integer 体检策略数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PolicyCount;

    /**
     * @var integer 待整改风险数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UntreatedRiskCount;

    /**
     * @var integer 总风险数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalRiskCount;

    /**
     * @var integer 已处置数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TreatedRiskCount;

    /**
     * @var integer 已忽略数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IgnoredRiskCount;

    /**
     * @var string 整改率，如 50%，无需整改时为 无需整改
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RectifyRate;

    /**
     * @var string 最近一次体检时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastCheckTime;

    /**
     * @var array 子类 ID 列表
     */
    public $SubcategoryIds;

    /**
     * @var boolean 是否超时未体检
     */
    public $IsOverdue;

    /**
     * @param string $Product 产品类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProductName 产品名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PolicyCount 体检策略数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $UntreatedRiskCount 待整改风险数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalRiskCount 总风险数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TreatedRiskCount 已处置数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IgnoredRiskCount 已忽略数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RectifyRate 整改率，如 50%，无需整改时为 无需整改
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LastCheckTime 最近一次体检时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SubcategoryIds 子类 ID 列表
     * @param boolean $IsOverdue 是否超时未体检
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
        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }

        if (array_key_exists("ProductName",$param) and $param["ProductName"] !== null) {
            $this->ProductName = $param["ProductName"];
        }

        if (array_key_exists("PolicyCount",$param) and $param["PolicyCount"] !== null) {
            $this->PolicyCount = $param["PolicyCount"];
        }

        if (array_key_exists("UntreatedRiskCount",$param) and $param["UntreatedRiskCount"] !== null) {
            $this->UntreatedRiskCount = $param["UntreatedRiskCount"];
        }

        if (array_key_exists("TotalRiskCount",$param) and $param["TotalRiskCount"] !== null) {
            $this->TotalRiskCount = $param["TotalRiskCount"];
        }

        if (array_key_exists("TreatedRiskCount",$param) and $param["TreatedRiskCount"] !== null) {
            $this->TreatedRiskCount = $param["TreatedRiskCount"];
        }

        if (array_key_exists("IgnoredRiskCount",$param) and $param["IgnoredRiskCount"] !== null) {
            $this->IgnoredRiskCount = $param["IgnoredRiskCount"];
        }

        if (array_key_exists("RectifyRate",$param) and $param["RectifyRate"] !== null) {
            $this->RectifyRate = $param["RectifyRate"];
        }

        if (array_key_exists("LastCheckTime",$param) and $param["LastCheckTime"] !== null) {
            $this->LastCheckTime = $param["LastCheckTime"];
        }

        if (array_key_exists("SubcategoryIds",$param) and $param["SubcategoryIds"] !== null) {
            $this->SubcategoryIds = $param["SubcategoryIds"];
        }

        if (array_key_exists("IsOverdue",$param) and $param["IsOverdue"] !== null) {
            $this->IsOverdue = $param["IsOverdue"];
        }
    }
}
