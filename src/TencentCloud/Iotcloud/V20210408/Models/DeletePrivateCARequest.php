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
namespace TencentCloud\Iotcloud\V20210408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeletePrivateCA请求参数结构体
 *
 * @method string getCertName() 获取私有CA证书名称
 * @method void setCertName(string $CertName) 设置私有CA证书名称
 */
class DeletePrivateCARequest extends AbstractModel
{
    /**
     * @var string 私有CA证书名称
     */
    public $CertName;

    /**
     * @param string $CertName 私有CA证书名称
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
        if (array_key_exists("CertName",$param) and $param["CertName"] !== null) {
            $this->CertName = $param["CertName"];
        }
    }
}
