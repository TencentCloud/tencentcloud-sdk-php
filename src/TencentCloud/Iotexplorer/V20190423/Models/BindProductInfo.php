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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 绑定、未绑定产品详细信息
 *
 * @method string getProductId() 获取产品ID。
 * @method void setProductId(string $ProductId) 设置产品ID。
 * @method string getProductName() 获取产品名称。
 * @method void setProductName(string $ProductName) 设置产品名称。
 * @method string getProjectId() 获取产品所属项目ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectId(string $ProjectId) 设置产品所属项目ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDataProtocol() 获取物模型类型。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataProtocol(integer $DataProtocol) 设置物模型类型。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCategoryId() 获取产品分组模板ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCategoryId(integer $CategoryId) 设置产品分组模板ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getProductType() 获取产品类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProductType(integer $ProductType) 设置产品类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNetType() 获取连接类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNetType(string $NetType) 设置连接类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDevStatus() 获取状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDevStatus(string $DevStatus) 设置状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProductOwnerName() 获取产品拥有者名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProductOwnerName(string $ProductOwnerName) 设置产品拥有者名称
注意：此字段可能返回 null，表示取不到有效值。
 */
class BindProductInfo extends AbstractModel
{
    /**
     * @var string 产品ID。
     */
    public $ProductId;

    /**
     * @var string 产品名称。
     */
    public $ProductName;

    /**
     * @var string 产品所属项目ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectId;

    /**
     * @var integer 物模型类型。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataProtocol;

    /**
     * @var integer 产品分组模板ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CategoryId;

    /**
     * @var integer 产品类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProductType;

    /**
     * @var string 连接类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NetType;

    /**
     * @var string 状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DevStatus;

    /**
     * @var string 产品拥有者名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProductOwnerName;

    /**
     * @param string $ProductId 产品ID。
     * @param string $ProductName 产品名称。
     * @param string $ProjectId 产品所属项目ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DataProtocol 物模型类型。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CategoryId 产品分组模板ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ProductType 产品类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NetType 连接类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DevStatus 状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProductOwnerName 产品拥有者名称
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
        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("ProductName",$param) and $param["ProductName"] !== null) {
            $this->ProductName = $param["ProductName"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("DataProtocol",$param) and $param["DataProtocol"] !== null) {
            $this->DataProtocol = $param["DataProtocol"];
        }

        if (array_key_exists("CategoryId",$param) and $param["CategoryId"] !== null) {
            $this->CategoryId = $param["CategoryId"];
        }

        if (array_key_exists("ProductType",$param) and $param["ProductType"] !== null) {
            $this->ProductType = $param["ProductType"];
        }

        if (array_key_exists("NetType",$param) and $param["NetType"] !== null) {
            $this->NetType = $param["NetType"];
        }

        if (array_key_exists("DevStatus",$param) and $param["DevStatus"] !== null) {
            $this->DevStatus = $param["DevStatus"];
        }

        if (array_key_exists("ProductOwnerName",$param) and $param["ProductOwnerName"] !== null) {
            $this->ProductOwnerName = $param["ProductOwnerName"];
        }
    }
}
