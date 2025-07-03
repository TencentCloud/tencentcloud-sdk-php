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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * https 证书配置。
 *
 * @method string getCertId() 获取证书 ID。来源于 SSL 侧，您可以前往 [SSL 证书列表](https://console.cloud.tencent.com/ssl) 查看 CertId。
 * @method void setCertId(string $CertId) 设置证书 ID。来源于 SSL 侧，您可以前往 [SSL 证书列表](https://console.cloud.tencent.com/ssl) 查看 CertId。
 * @method string getAlias() 获取证书备注名。
 * @method void setAlias(string $Alias) 设置证书备注名。
 * @method string getType() 获取证书类型，取值有：
<li>default：默认证书；</li>
<li>upload：用户上传；</li>
<li>managed：腾讯云托管。</li>
 * @method void setType(string $Type) 设置证书类型，取值有：
<li>default：默认证书；</li>
<li>upload：用户上传；</li>
<li>managed：腾讯云托管。</li>
 * @method string getExpireTime() 获取证书过期时间。
 * @method void setExpireTime(string $ExpireTime) 设置证书过期时间。
 * @method string getDeployTime() 获取证书部署时间。
 * @method void setDeployTime(string $DeployTime) 设置证书部署时间。
 * @method string getSignAlgo() 获取签名算法。
 * @method void setSignAlgo(string $SignAlgo) 设置签名算法。
 * @method string getStatus() 获取证书状态，取值有：
<li>deployed：已部署；</li>
<li>processing：部署中；</li>
<li>applying：申请中；</li>
<li>failed：申请失败；</li>
<li>issued：绑定失败。</li>
 * @method void setStatus(string $Status) 设置证书状态，取值有：
<li>deployed：已部署；</li>
<li>processing：部署中；</li>
<li>applying：申请中；</li>
<li>failed：申请失败；</li>
<li>issued：绑定失败。</li>
 */
class CertificateInfo extends AbstractModel
{
    /**
     * @var string 证书 ID。来源于 SSL 侧，您可以前往 [SSL 证书列表](https://console.cloud.tencent.com/ssl) 查看 CertId。
     */
    public $CertId;

    /**
     * @var string 证书备注名。
     */
    public $Alias;

    /**
     * @var string 证书类型，取值有：
<li>default：默认证书；</li>
<li>upload：用户上传；</li>
<li>managed：腾讯云托管。</li>
     */
    public $Type;

    /**
     * @var string 证书过期时间。
     */
    public $ExpireTime;

    /**
     * @var string 证书部署时间。
     */
    public $DeployTime;

    /**
     * @var string 签名算法。
     */
    public $SignAlgo;

    /**
     * @var string 证书状态，取值有：
<li>deployed：已部署；</li>
<li>processing：部署中；</li>
<li>applying：申请中；</li>
<li>failed：申请失败；</li>
<li>issued：绑定失败。</li>
     */
    public $Status;

    /**
     * @param string $CertId 证书 ID。来源于 SSL 侧，您可以前往 [SSL 证书列表](https://console.cloud.tencent.com/ssl) 查看 CertId。
     * @param string $Alias 证书备注名。
     * @param string $Type 证书类型，取值有：
<li>default：默认证书；</li>
<li>upload：用户上传；</li>
<li>managed：腾讯云托管。</li>
     * @param string $ExpireTime 证书过期时间。
     * @param string $DeployTime 证书部署时间。
     * @param string $SignAlgo 签名算法。
     * @param string $Status 证书状态，取值有：
<li>deployed：已部署；</li>
<li>processing：部署中；</li>
<li>applying：申请中；</li>
<li>failed：申请失败；</li>
<li>issued：绑定失败。</li>
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
        if (array_key_exists("CertId",$param) and $param["CertId"] !== null) {
            $this->CertId = $param["CertId"];
        }

        if (array_key_exists("Alias",$param) and $param["Alias"] !== null) {
            $this->Alias = $param["Alias"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("DeployTime",$param) and $param["DeployTime"] !== null) {
            $this->DeployTime = $param["DeployTime"];
        }

        if (array_key_exists("SignAlgo",$param) and $param["SignAlgo"] !== null) {
            $this->SignAlgo = $param["SignAlgo"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
