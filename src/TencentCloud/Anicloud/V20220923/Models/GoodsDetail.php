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
namespace TencentCloud\Anicloud\V20220923\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 购买详情
 *
 * @method string getProductCode() 获取按照四层接入的产品需要传入产品标签,例如:p_cvm
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProductCode(string $ProductCode) 设置按照四层接入的产品需要传入产品标签,例如:p_cvm
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubProductCode() 获取四层定义的子产品标签,例如:sp_cvm_s1
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubProductCode(string $SubProductCode) 设置四层定义的子产品标签,例如:sp_cvm_s1
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getType() 获取资源类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(array $Type) 设置资源类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getGoodsNum() 获取资源数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGoodsNum(integer $GoodsNum) 设置资源数量
注意：此字段可能返回 null，表示取不到有效值。
 */
class GoodsDetail extends AbstractModel
{
    /**
     * @var string 按照四层接入的产品需要传入产品标签,例如:p_cvm
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProductCode;

    /**
     * @var string 四层定义的子产品标签,例如:sp_cvm_s1
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubProductCode;

    /**
     * @var array 资源类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var integer 资源数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GoodsNum;

    /**
     * @param string $ProductCode 按照四层接入的产品需要传入产品标签,例如:p_cvm
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubProductCode 四层定义的子产品标签,例如:sp_cvm_s1
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Type 资源类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $GoodsNum 资源数量
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
        if (array_key_exists("ProductCode",$param) and $param["ProductCode"] !== null) {
            $this->ProductCode = $param["ProductCode"];
        }

        if (array_key_exists("SubProductCode",$param) and $param["SubProductCode"] !== null) {
            $this->SubProductCode = $param["SubProductCode"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("GoodsNum",$param) and $param["GoodsNum"] !== null) {
            $this->GoodsNum = $param["GoodsNum"];
        }
    }
}
