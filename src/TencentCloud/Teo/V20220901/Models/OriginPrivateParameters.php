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
 * 对象存储源站私有鉴权参数。
 *
 * @method string getAccessKeyId() 获取鉴权参数 Access Key ID。
 * @method void setAccessKeyId(string $AccessKeyId) 设置鉴权参数 Access Key ID。
 * @method string getSecretAccessKey() 获取鉴权参数 Secret Access Key。
 * @method void setSecretAccessKey(string $SecretAccessKey) 设置鉴权参数 Secret Access Key。
 * @method string getSignatureVersion() 获取鉴权版本。取值有：
<li>v2：v2版本；</li>
<li>v4：v4版本。</li>
 * @method void setSignatureVersion(string $SignatureVersion) 设置鉴权版本。取值有：
<li>v2：v2版本；</li>
<li>v4：v4版本。</li>
 * @method string getRegion() 获取存储桶地域。
 * @method void setRegion(string $Region) 设置存储桶地域。
 */
class OriginPrivateParameters extends AbstractModel
{
    /**
     * @var string 鉴权参数 Access Key ID。
     */
    public $AccessKeyId;

    /**
     * @var string 鉴权参数 Secret Access Key。
     */
    public $SecretAccessKey;

    /**
     * @var string 鉴权版本。取值有：
<li>v2：v2版本；</li>
<li>v4：v4版本。</li>
     */
    public $SignatureVersion;

    /**
     * @var string 存储桶地域。
     */
    public $Region;

    /**
     * @param string $AccessKeyId 鉴权参数 Access Key ID。
     * @param string $SecretAccessKey 鉴权参数 Secret Access Key。
     * @param string $SignatureVersion 鉴权版本。取值有：
<li>v2：v2版本；</li>
<li>v4：v4版本。</li>
     * @param string $Region 存储桶地域。
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
        if (array_key_exists("AccessKeyId",$param) and $param["AccessKeyId"] !== null) {
            $this->AccessKeyId = $param["AccessKeyId"];
        }

        if (array_key_exists("SecretAccessKey",$param) and $param["SecretAccessKey"] !== null) {
            $this->SecretAccessKey = $param["SecretAccessKey"];
        }

        if (array_key_exists("SignatureVersion",$param) and $param["SignatureVersion"] !== null) {
            $this->SignatureVersion = $param["SignatureVersion"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }
    }
}
