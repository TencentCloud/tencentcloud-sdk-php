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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 预算管理自定义费用范围参数
 *
 * @method array getBusiness() 获取产品
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBusiness(array $Business) 设置产品
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPayMode() 获取计费模式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPayMode(array $PayMode) 设置计费模式
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getProductCodes() 获取子产品
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProductCodes(array $ProductCodes) 设置子产品
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getComponentCodes() 获取组件编码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setComponentCodes(array $ComponentCodes) 设置组件编码
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getZoneIds() 获取地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setZoneIds(array $ZoneIds) 设置地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getRegionIds() 获取可用区
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegionIds(array $RegionIds) 设置可用区
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getProjectIds() 获取项目
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectIds(array $ProjectIds) 设置项目
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getActionTypes() 获取交易类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setActionTypes(array $ActionTypes) 设置交易类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getConsumptionTypes() 获取消耗类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConsumptionTypes(array $ConsumptionTypes) 设置消耗类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTags() 获取标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPayerUins() 获取 末级分账单元
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPayerUins(array $PayerUins) 设置 末级分账单元
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getOwnerUins() 获取主用户Uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOwnerUins(array $OwnerUins) 设置主用户Uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTreeNodeUniqKeys() 获取 末级分账单元唯一键
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTreeNodeUniqKeys(array $TreeNodeUniqKeys) 设置 末级分账单元唯一键
注意：此字段可能返回 null，表示取不到有效值。
 */
class BudgetConditionsForm extends AbstractModel
{
    /**
     * @var array 产品
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Business;

    /**
     * @var array 计费模式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PayMode;

    /**
     * @var array 子产品
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProductCodes;

    /**
     * @var array 组件编码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ComponentCodes;

    /**
     * @var array 地域
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ZoneIds;

    /**
     * @var array 可用区
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RegionIds;

    /**
     * @var array 项目
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectIds;

    /**
     * @var array 交易类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ActionTypes;

    /**
     * @var array 消耗类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConsumptionTypes;

    /**
     * @var array 标签
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var array  末级分账单元
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PayerUins;

    /**
     * @var array 主用户Uin
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OwnerUins;

    /**
     * @var array  末级分账单元唯一键
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TreeNodeUniqKeys;

    /**
     * @param array $Business 产品
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $PayMode 计费模式
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ProductCodes 子产品
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ComponentCodes 组件编码
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ZoneIds 地域
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $RegionIds 可用区
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ProjectIds 项目
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ActionTypes 交易类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ConsumptionTypes 消耗类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tags 标签
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $PayerUins  末级分账单元
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $OwnerUins 主用户Uin
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TreeNodeUniqKeys  末级分账单元唯一键
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
        if (array_key_exists("Business",$param) and $param["Business"] !== null) {
            $this->Business = $param["Business"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("ProductCodes",$param) and $param["ProductCodes"] !== null) {
            $this->ProductCodes = $param["ProductCodes"];
        }

        if (array_key_exists("ComponentCodes",$param) and $param["ComponentCodes"] !== null) {
            $this->ComponentCodes = $param["ComponentCodes"];
        }

        if (array_key_exists("ZoneIds",$param) and $param["ZoneIds"] !== null) {
            $this->ZoneIds = $param["ZoneIds"];
        }

        if (array_key_exists("RegionIds",$param) and $param["RegionIds"] !== null) {
            $this->RegionIds = $param["RegionIds"];
        }

        if (array_key_exists("ProjectIds",$param) and $param["ProjectIds"] !== null) {
            $this->ProjectIds = $param["ProjectIds"];
        }

        if (array_key_exists("ActionTypes",$param) and $param["ActionTypes"] !== null) {
            $this->ActionTypes = $param["ActionTypes"];
        }

        if (array_key_exists("ConsumptionTypes",$param) and $param["ConsumptionTypes"] !== null) {
            $this->ConsumptionTypes = $param["ConsumptionTypes"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagsForm();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("PayerUins",$param) and $param["PayerUins"] !== null) {
            $this->PayerUins = $param["PayerUins"];
        }

        if (array_key_exists("OwnerUins",$param) and $param["OwnerUins"] !== null) {
            $this->OwnerUins = $param["OwnerUins"];
        }

        if (array_key_exists("TreeNodeUniqKeys",$param) and $param["TreeNodeUniqKeys"] !== null) {
            $this->TreeNodeUniqKeys = $param["TreeNodeUniqKeys"];
        }
    }
}
