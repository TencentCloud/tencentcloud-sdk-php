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
 * UploadCertificate请求参数结构体
 *
 * @method string getCertificatePublicKey() 获取证书内容。
 * @method void setCertificatePublicKey(string $CertificatePublicKey) 设置证书内容。
 * @method string getCertificatePrivateKey() 获取私钥内容，证书类型为 SVR 时必填，为 CA 时可不填。
 * @method void setCertificatePrivateKey(string $CertificatePrivateKey) 设置私钥内容，证书类型为 SVR 时必填，为 CA 时可不填。
 * @method string getCertificateType() 获取证书类型，默认 SVR。CA = CA证书，SVR = 服务器证书。
 * @method void setCertificateType(string $CertificateType) 设置证书类型，默认 SVR。CA = CA证书，SVR = 服务器证书。
 * @method string getAlias() 获取备注名称。
 * @method void setAlias(string $Alias) 设置备注名称。
 * @method integer getProjectId() 获取项目 ID。
 * @method void setProjectId(integer $ProjectId) 设置项目 ID。
 * @method string getCertificateUse() 获取证书用途/证书来源。“CLB，CDN，WAF，LIVE，DDOS”
 * @method void setCertificateUse(string $CertificateUse) 设置证书用途/证书来源。“CLB，CDN，WAF，LIVE，DDOS”
 * @method array getTags() 获取标签列表
 * @method void setTags(array $Tags) 设置标签列表
 * @method boolean getRepeatable() 获取相同的证书是否允许重复上传； true：允许上传相同指纹的证书；  false：不允许上传相同指纹的证书； 默认值：true
 * @method void setRepeatable(boolean $Repeatable) 设置相同的证书是否允许重复上传； true：允许上传相同指纹的证书；  false：不允许上传相同指纹的证书； 默认值：true
 */
class UploadCertificateRequest extends AbstractModel
{
    /**
     * @var string 证书内容。
     */
    public $CertificatePublicKey;

    /**
     * @var string 私钥内容，证书类型为 SVR 时必填，为 CA 时可不填。
     */
    public $CertificatePrivateKey;

    /**
     * @var string 证书类型，默认 SVR。CA = CA证书，SVR = 服务器证书。
     */
    public $CertificateType;

    /**
     * @var string 备注名称。
     */
    public $Alias;

    /**
     * @var integer 项目 ID。
     */
    public $ProjectId;

    /**
     * @var string 证书用途/证书来源。“CLB，CDN，WAF，LIVE，DDOS”
     */
    public $CertificateUse;

    /**
     * @var array 标签列表
     */
    public $Tags;

    /**
     * @var boolean 相同的证书是否允许重复上传； true：允许上传相同指纹的证书；  false：不允许上传相同指纹的证书； 默认值：true
     */
    public $Repeatable;

    /**
     * @param string $CertificatePublicKey 证书内容。
     * @param string $CertificatePrivateKey 私钥内容，证书类型为 SVR 时必填，为 CA 时可不填。
     * @param string $CertificateType 证书类型，默认 SVR。CA = CA证书，SVR = 服务器证书。
     * @param string $Alias 备注名称。
     * @param integer $ProjectId 项目 ID。
     * @param string $CertificateUse 证书用途/证书来源。“CLB，CDN，WAF，LIVE，DDOS”
     * @param array $Tags 标签列表
     * @param boolean $Repeatable 相同的证书是否允许重复上传； true：允许上传相同指纹的证书；  false：不允许上传相同指纹的证书； 默认值：true
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
        if (array_key_exists("CertificatePublicKey",$param) and $param["CertificatePublicKey"] !== null) {
            $this->CertificatePublicKey = $param["CertificatePublicKey"];
        }

        if (array_key_exists("CertificatePrivateKey",$param) and $param["CertificatePrivateKey"] !== null) {
            $this->CertificatePrivateKey = $param["CertificatePrivateKey"];
        }

        if (array_key_exists("CertificateType",$param) and $param["CertificateType"] !== null) {
            $this->CertificateType = $param["CertificateType"];
        }

        if (array_key_exists("Alias",$param) and $param["Alias"] !== null) {
            $this->Alias = $param["Alias"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("CertificateUse",$param) and $param["CertificateUse"] !== null) {
            $this->CertificateUse = $param["CertificateUse"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tags();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("Repeatable",$param) and $param["Repeatable"] !== null) {
            $this->Repeatable = $param["Repeatable"];
        }
    }
}
