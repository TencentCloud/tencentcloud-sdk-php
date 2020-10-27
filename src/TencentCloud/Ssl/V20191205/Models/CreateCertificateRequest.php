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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateCertificate请求参数结构体
 *
 * @method integer getProductId() 获取证书商品ID
 * @method void setProductId(integer $ProductId) 设置证书商品ID
 * @method integer getDomainNum() 获取证书包含的域名数量
 * @method void setDomainNum(integer $DomainNum) 设置证书包含的域名数量
 * @method integer getTimeSpan() 获取证书年限，当前只支持 1 年证书的购买
 * @method void setTimeSpan(integer $TimeSpan) 设置证书年限，当前只支持 1 年证书的购买
 */
class CreateCertificateRequest extends AbstractModel
{
    /**
     * @var integer 证书商品ID
     */
    public $ProductId;

    /**
     * @var integer 证书包含的域名数量
     */
    public $DomainNum;

    /**
     * @var integer 证书年限，当前只支持 1 年证书的购买
     */
    public $TimeSpan;

    /**
     * @param integer $ProductId 证书商品ID
     * @param integer $DomainNum 证书包含的域名数量
     * @param integer $TimeSpan 证书年限，当前只支持 1 年证书的购买
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

        if (array_key_exists("DomainNum",$param) and $param["DomainNum"] !== null) {
            $this->DomainNum = $param["DomainNum"];
        }

        if (array_key_exists("TimeSpan",$param) and $param["TimeSpan"] !== null) {
            $this->TimeSpan = $param["TimeSpan"];
        }
    }
}
