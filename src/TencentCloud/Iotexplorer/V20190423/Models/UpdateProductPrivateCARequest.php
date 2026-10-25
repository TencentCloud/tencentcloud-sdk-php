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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateProductPrivateCA请求参数结构体
 *
 * @method string getProductId() 获取<p>产品ID。</p>
 * @method void setProductId(string $ProductId) 设置<p>产品ID。</p>
 * @method string getCertName() 获取<p>证书名称，长度 1~32 个字符。</p>
 * @method void setCertName(string $CertName) 设置<p>证书名称，长度 1~32 个字符。</p>
 */
class UpdateProductPrivateCARequest extends AbstractModel
{
    /**
     * @var string <p>产品ID。</p>
     */
    public $ProductId;

    /**
     * @var string <p>证书名称，长度 1~32 个字符。</p>
     */
    public $CertName;

    /**
     * @param string $ProductId <p>产品ID。</p>
     * @param string $CertName <p>证书名称，长度 1~32 个字符。</p>
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

        if (array_key_exists("CertName",$param) and $param["CertName"] !== null) {
            $this->CertName = $param["CertName"];
        }
    }
}
