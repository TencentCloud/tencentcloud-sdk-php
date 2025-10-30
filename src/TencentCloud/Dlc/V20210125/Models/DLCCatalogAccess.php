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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DLC 数据目录访问权限
 *
 * @method string getVpcId() 获取VPCID
 * @method void setVpcId(string $VpcId) 设置VPCID
 * @method string getProduct() 获取产品类型
 * @method void setProduct(string $Product) 设置产品类型
 * @method string getDescription() 获取描述信息
 * @method void setDescription(string $Description) 设置描述信息
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 */
class DLCCatalogAccess extends AbstractModel
{
    /**
     * @var string VPCID
     */
    public $VpcId;

    /**
     * @var string 产品类型
     */
    public $Product;

    /**
     * @var string 描述信息
     */
    public $Description;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @param string $VpcId VPCID
     * @param string $Product 产品类型
     * @param string $Description 描述信息
     * @param string $CreateTime 创建时间
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
        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
