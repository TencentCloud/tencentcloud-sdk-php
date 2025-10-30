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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * HTTPS 双向认证。
 *
 * @method string getSwitch() 获取双向认证配置开关，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>
 * @method void setSwitch(string $Switch) 设置双向认证配置开关，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>
 * @method array getCertInfos() 获取双向认证证书列表。
注意：MutualTLS 在 ModifyHostsCertificate 作为入参使用时，该参数传入对应证书的 CertId 即可。您可以前往 [SSL 证书列表](https://console.cloud.tencent.com/ssl) 查看 CertId。
 * @method void setCertInfos(array $CertInfos) 设置双向认证证书列表。
注意：MutualTLS 在 ModifyHostsCertificate 作为入参使用时，该参数传入对应证书的 CertId 即可。您可以前往 [SSL 证书列表](https://console.cloud.tencent.com/ssl) 查看 CertId。
 */
class MutualTLS extends AbstractModel
{
    /**
     * @var string 双向认证配置开关，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>
     */
    public $Switch;

    /**
     * @var array 双向认证证书列表。
注意：MutualTLS 在 ModifyHostsCertificate 作为入参使用时，该参数传入对应证书的 CertId 即可。您可以前往 [SSL 证书列表](https://console.cloud.tencent.com/ssl) 查看 CertId。
     */
    public $CertInfos;

    /**
     * @param string $Switch 双向认证配置开关，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>
     * @param array $CertInfos 双向认证证书列表。
注意：MutualTLS 在 ModifyHostsCertificate 作为入参使用时，该参数传入对应证书的 CertId 即可。您可以前往 [SSL 证书列表](https://console.cloud.tencent.com/ssl) 查看 CertId。
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
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("CertInfos",$param) and $param["CertInfos"] !== null) {
            $this->CertInfos = [];
            foreach ($param["CertInfos"] as $key => $value){
                $obj = new CertificateInfo();
                $obj->deserialize($value);
                array_push($this->CertInfos, $obj);
            }
        }
    }
}
