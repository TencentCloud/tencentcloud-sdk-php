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
 * 用于创建集群价格清单-节点组成部分价格
 *
 * @method string getInstanceType() 获取类型包括：节点->node、系统盘->rootDisk、云数据盘->dataDisk、metaDB
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceType(string $InstanceType) 设置类型包括：节点->node、系统盘->rootDisk、云数据盘->dataDisk、metaDB
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getPrice() 获取单价（原价）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPrice(float $Price) 设置单价（原价）
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getRealCost() 获取单价（折扣价）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRealCost(float $RealCost) 设置单价（折扣价）
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getRealTotalCost() 获取总价（折扣价）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRealTotalCost(float $RealTotalCost) 设置总价（折扣价）
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getPolicy() 获取折扣
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPolicy(float $Policy) 设置折扣
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getGoodsNum() 获取数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGoodsNum(integer $GoodsNum) 设置数量
注意：此字段可能返回 null，表示取不到有效值。
 */
class PartDetailPriceItem extends AbstractModel
{
    /**
     * @var string 类型包括：节点->node、系统盘->rootDisk、云数据盘->dataDisk、metaDB
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceType;

    /**
     * @var float 单价（原价）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Price;

    /**
     * @var float 单价（折扣价）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RealCost;

    /**
     * @var float 总价（折扣价）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RealTotalCost;

    /**
     * @var float 折扣
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Policy;

    /**
     * @var integer 数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GoodsNum;

    /**
     * @param string $InstanceType 类型包括：节点->node、系统盘->rootDisk、云数据盘->dataDisk、metaDB
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $Price 单价（原价）
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $RealCost 单价（折扣价）
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $RealTotalCost 总价（折扣价）
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $Policy 折扣
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $GoodsNum 数量
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
        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("Price",$param) and $param["Price"] !== null) {
            $this->Price = $param["Price"];
        }

        if (array_key_exists("RealCost",$param) and $param["RealCost"] !== null) {
            $this->RealCost = $param["RealCost"];
        }

        if (array_key_exists("RealTotalCost",$param) and $param["RealTotalCost"] !== null) {
            $this->RealTotalCost = $param["RealTotalCost"];
        }

        if (array_key_exists("Policy",$param) and $param["Policy"] !== null) {
            $this->Policy = $param["Policy"];
        }

        if (array_key_exists("GoodsNum",$param) and $param["GoodsNum"] !== null) {
            $this->GoodsNum = $param["GoodsNum"];
        }
    }
}
