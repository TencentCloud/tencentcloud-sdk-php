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
namespace TencentCloud\Trp\V20210515\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 商品信息
 *
 * @method string getProductId() 获取商品id
 * @method void setProductId(string $ProductId) 设置商品id
 * @method integer getCorpId() 获取企业id
 * @method void setCorpId(integer $CorpId) 设置企业id
 * @method string getMerchantId() 获取商户标识码
 * @method void setMerchantId(string $MerchantId) 设置商户标识码
 * @method string getProductCode() 获取商品编号
 * @method void setProductCode(string $ProductCode) 设置商品编号
 * @method string getName() 获取商品名称
 * @method void setName(string $Name) 设置商品名称
 * @method string getSpecification() 获取商品规格
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSpecification(string $Specification) 设置商品规格
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRemark() 获取备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemark(string $Remark) 设置备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getLogo() 获取商品图片
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogo(array $Logo) 设置商品图片
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getUpdateTime() 获取修改时间
 * @method void setUpdateTime(string $UpdateTime) 设置修改时间
 * @method Ext getExt() 获取预留字段
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExt(Ext $Ext) 设置预留字段
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMerchantName() 获取商户名称
 * @method void setMerchantName(string $MerchantName) 设置商户名称
 */
class Product extends AbstractModel
{
    /**
     * @var string 商品id
     */
    public $ProductId;

    /**
     * @var integer 企业id
     */
    public $CorpId;

    /**
     * @var string 商户标识码
     */
    public $MerchantId;

    /**
     * @var string 商品编号
     */
    public $ProductCode;

    /**
     * @var string 商品名称
     */
    public $Name;

    /**
     * @var string 商品规格
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Specification;

    /**
     * @var string 备注
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Remark;

    /**
     * @var array 商品图片
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Logo;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 修改时间
     */
    public $UpdateTime;

    /**
     * @var Ext 预留字段
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Ext;

    /**
     * @var string 商户名称
     */
    public $MerchantName;

    /**
     * @param string $ProductId 商品id
     * @param integer $CorpId 企业id
     * @param string $MerchantId 商户标识码
     * @param string $ProductCode 商品编号
     * @param string $Name 商品名称
     * @param string $Specification 商品规格
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Remark 备注
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Logo 商品图片
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间
     * @param string $UpdateTime 修改时间
     * @param Ext $Ext 预留字段
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MerchantName 商户名称
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

        if (array_key_exists("CorpId",$param) and $param["CorpId"] !== null) {
            $this->CorpId = $param["CorpId"];
        }

        if (array_key_exists("MerchantId",$param) and $param["MerchantId"] !== null) {
            $this->MerchantId = $param["MerchantId"];
        }

        if (array_key_exists("ProductCode",$param) and $param["ProductCode"] !== null) {
            $this->ProductCode = $param["ProductCode"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Specification",$param) and $param["Specification"] !== null) {
            $this->Specification = $param["Specification"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("Logo",$param) and $param["Logo"] !== null) {
            $this->Logo = $param["Logo"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Ext",$param) and $param["Ext"] !== null) {
            $this->Ext = new Ext();
            $this->Ext->deserialize($param["Ext"]);
        }

        if (array_key_exists("MerchantName",$param) and $param["MerchantName"] !== null) {
            $this->MerchantName = $param["MerchantName"];
        }
    }
}
