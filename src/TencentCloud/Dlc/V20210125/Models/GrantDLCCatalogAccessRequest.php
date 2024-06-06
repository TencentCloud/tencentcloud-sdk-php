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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GrantDLCCatalogAccess请求参数结构体
 *
 * @method string getVpcId() 获取授权VpcId
 * @method void setVpcId(string $VpcId) 设置授权VpcId
 * @method string getProduct() 获取产品(EMR|DLC|Doris|Inlong|Wedata)
 * @method void setProduct(string $Product) 设置产品(EMR|DLC|Doris|Inlong|Wedata)
 * @method string getDescription() 获取描述
 * @method void setDescription(string $Description) 设置描述
 * @method string getVpcUin() 获取VPC所属账号UIN
 * @method void setVpcUin(string $VpcUin) 设置VPC所属账号UIN
 * @method integer getVpcAppId() 获取VPC所属账号AppId
 * @method void setVpcAppId(integer $VpcAppId) 设置VPC所属账号AppId
 */
class GrantDLCCatalogAccessRequest extends AbstractModel
{
    /**
     * @var string 授权VpcId
     */
    public $VpcId;

    /**
     * @var string 产品(EMR|DLC|Doris|Inlong|Wedata)
     */
    public $Product;

    /**
     * @var string 描述
     */
    public $Description;

    /**
     * @var string VPC所属账号UIN
     */
    public $VpcUin;

    /**
     * @var integer VPC所属账号AppId
     */
    public $VpcAppId;

    /**
     * @param string $VpcId 授权VpcId
     * @param string $Product 产品(EMR|DLC|Doris|Inlong|Wedata)
     * @param string $Description 描述
     * @param string $VpcUin VPC所属账号UIN
     * @param integer $VpcAppId VPC所属账号AppId
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

        if (array_key_exists("VpcUin",$param) and $param["VpcUin"] !== null) {
            $this->VpcUin = $param["VpcUin"];
        }

        if (array_key_exists("VpcAppId",$param) and $param["VpcAppId"] !== null) {
            $this->VpcAppId = $param["VpcAppId"];
        }
    }
}
