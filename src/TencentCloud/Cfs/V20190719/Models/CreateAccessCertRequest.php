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
namespace TencentCloud\Cfs\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateAccessCert请求参数结构体
 *
 * @method string getCertDesc() 获取证书描述，不超过64字符
 * @method void setCertDesc(string $CertDesc) 设置证书描述，不超过64字符
 */
class CreateAccessCertRequest extends AbstractModel
{
    /**
     * @var string 证书描述，不超过64字符
     */
    public $CertDesc;

    /**
     * @param string $CertDesc 证书描述，不超过64字符
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
        if (array_key_exists("CertDesc",$param) and $param["CertDesc"] !== null) {
            $this->CertDesc = $param["CertDesc"];
        }
    }
}
