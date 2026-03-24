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
namespace TencentCloud\Config\V20220802\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 资源类型
 *
 * @method string getProduct() 获取产品
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProduct(string $Product) 设置产品
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProductName() 获取产品名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProductName(string $ProductName) 设置产品名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResourceType() 获取资源类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceType(string $ResourceType) 设置资源类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResourceTypeName() 获取资源类型名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceTypeName(string $ResourceTypeName) 设置资源类型名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class UserConfigResource extends AbstractModel
{
    /**
     * @var string 产品
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Product;

    /**
     * @var string 产品名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProductName;

    /**
     * @var string 资源类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceType;

    /**
     * @var string 资源类型名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceTypeName;

    /**
     * @var string 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @param string $Product 产品
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProductName 产品名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResourceType 资源类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResourceTypeName 资源类型名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 更新时间
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
        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }

        if (array_key_exists("ProductName",$param) and $param["ProductName"] !== null) {
            $this->ProductName = $param["ProductName"];
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("ResourceTypeName",$param) and $param["ResourceTypeName"] !== null) {
            $this->ResourceTypeName = $param["ResourceTypeName"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
