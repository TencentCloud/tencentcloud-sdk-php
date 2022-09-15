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
 * CreateProduct请求参数结构体
 *
 * @method string getName() 获取商品名称
 * @method void setName(string $Name) 设置商品名称
 * @method string getMerchantId() 获取商户ID
 * @method void setMerchantId(string $MerchantId) 设置商户ID
 * @method string getRemark() 获取备注
 * @method void setRemark(string $Remark) 设置备注
 * @method string getMerchantName() 获取商户名称
 * @method void setMerchantName(string $MerchantName) 设置商户名称
 * @method string getSpecification() 获取商品规格
 * @method void setSpecification(string $Specification) 设置商品规格
 * @method array getLogo() 获取商品图片
 * @method void setLogo(array $Logo) 设置商品图片
 * @method integer getCorpId() 获取企业ID
 * @method void setCorpId(integer $CorpId) 设置企业ID
 * @method Ext getExt() 获取预留字段
 * @method void setExt(Ext $Ext) 设置预留字段
 */
class CreateProductRequest extends AbstractModel
{
    /**
     * @var string 商品名称
     */
    public $Name;

    /**
     * @var string 商户ID
     */
    public $MerchantId;

    /**
     * @var string 备注
     */
    public $Remark;

    /**
     * @var string 商户名称
     */
    public $MerchantName;

    /**
     * @var string 商品规格
     */
    public $Specification;

    /**
     * @var array 商品图片
     */
    public $Logo;

    /**
     * @var integer 企业ID
     */
    public $CorpId;

    /**
     * @var Ext 预留字段
     */
    public $Ext;

    /**
     * @param string $Name 商品名称
     * @param string $MerchantId 商户ID
     * @param string $Remark 备注
     * @param string $MerchantName 商户名称
     * @param string $Specification 商品规格
     * @param array $Logo 商品图片
     * @param integer $CorpId 企业ID
     * @param Ext $Ext 预留字段
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("MerchantId",$param) and $param["MerchantId"] !== null) {
            $this->MerchantId = $param["MerchantId"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("MerchantName",$param) and $param["MerchantName"] !== null) {
            $this->MerchantName = $param["MerchantName"];
        }

        if (array_key_exists("Specification",$param) and $param["Specification"] !== null) {
            $this->Specification = $param["Specification"];
        }

        if (array_key_exists("Logo",$param) and $param["Logo"] !== null) {
            $this->Logo = $param["Logo"];
        }

        if (array_key_exists("CorpId",$param) and $param["CorpId"] !== null) {
            $this->CorpId = $param["CorpId"];
        }

        if (array_key_exists("Ext",$param) and $param["Ext"] !== null) {
            $this->Ext = new Ext();
            $this->Ext->deserialize($param["Ext"]);
        }
    }
}
