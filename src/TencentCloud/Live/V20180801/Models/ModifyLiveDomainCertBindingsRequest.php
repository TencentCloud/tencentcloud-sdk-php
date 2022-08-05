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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyLiveDomainCertBindings请求参数结构体
 *
 * @method array getDomainInfos() 获取要绑定证书的播放域名/状态 信息列表。
如果CloudCertId和证书公钥私钥对均不传，且域名列表已有绑定规则，只批量更新域名https规则的启用状态，并把未上传至腾讯云ssl的已有自有证书上传。
 * @method void setDomainInfos(array $DomainInfos) 设置要绑定证书的播放域名/状态 信息列表。
如果CloudCertId和证书公钥私钥对均不传，且域名列表已有绑定规则，只批量更新域名https规则的启用状态，并把未上传至腾讯云ssl的已有自有证书上传。
 * @method string getCloudCertId() 获取腾讯云ssl的证书Id。
见 https://cloud.tencent.com/document/api/400/41665
 * @method void setCloudCertId(string $CloudCertId) 设置腾讯云ssl的证书Id。
见 https://cloud.tencent.com/document/api/400/41665
 * @method string getCertificatePublicKey() 获取证书公钥。
CloudCertId和公钥私钥对二选一，若CloudCertId将会舍弃公钥和私钥参数，否则将自动先把公钥私钥对上传至ssl新建证书，并使用上传成功后返回的CloudCertId。
 * @method void setCertificatePublicKey(string $CertificatePublicKey) 设置证书公钥。
CloudCertId和公钥私钥对二选一，若CloudCertId将会舍弃公钥和私钥参数，否则将自动先把公钥私钥对上传至ssl新建证书，并使用上传成功后返回的CloudCertId。
 * @method string getCertificatePrivateKey() 获取证书私钥。
CloudCertId和公钥私钥对二选一，若传CloudCertId将会舍弃公钥和私钥参数，否则将自动先把公钥私钥对上传至ssl新建证书，并使用上传成功后返回的CloudCertId。
 * @method void setCertificatePrivateKey(string $CertificatePrivateKey) 设置证书私钥。
CloudCertId和公钥私钥对二选一，若传CloudCertId将会舍弃公钥和私钥参数，否则将自动先把公钥私钥对上传至ssl新建证书，并使用上传成功后返回的CloudCertId。
 * @method string getCertificateAlias() 获取上传至ssl证书中心的备注信息，只有新建证书时有效。传CloudCertId时会忽略。
 * @method void setCertificateAlias(string $CertificateAlias) 设置上传至ssl证书中心的备注信息，只有新建证书时有效。传CloudCertId时会忽略。
 */
class ModifyLiveDomainCertBindingsRequest extends AbstractModel
{
    /**
     * @var array 要绑定证书的播放域名/状态 信息列表。
如果CloudCertId和证书公钥私钥对均不传，且域名列表已有绑定规则，只批量更新域名https规则的启用状态，并把未上传至腾讯云ssl的已有自有证书上传。
     */
    public $DomainInfos;

    /**
     * @var string 腾讯云ssl的证书Id。
见 https://cloud.tencent.com/document/api/400/41665
     */
    public $CloudCertId;

    /**
     * @var string 证书公钥。
CloudCertId和公钥私钥对二选一，若CloudCertId将会舍弃公钥和私钥参数，否则将自动先把公钥私钥对上传至ssl新建证书，并使用上传成功后返回的CloudCertId。
     */
    public $CertificatePublicKey;

    /**
     * @var string 证书私钥。
CloudCertId和公钥私钥对二选一，若传CloudCertId将会舍弃公钥和私钥参数，否则将自动先把公钥私钥对上传至ssl新建证书，并使用上传成功后返回的CloudCertId。
     */
    public $CertificatePrivateKey;

    /**
     * @var string 上传至ssl证书中心的备注信息，只有新建证书时有效。传CloudCertId时会忽略。
     */
    public $CertificateAlias;

    /**
     * @param array $DomainInfos 要绑定证书的播放域名/状态 信息列表。
如果CloudCertId和证书公钥私钥对均不传，且域名列表已有绑定规则，只批量更新域名https规则的启用状态，并把未上传至腾讯云ssl的已有自有证书上传。
     * @param string $CloudCertId 腾讯云ssl的证书Id。
见 https://cloud.tencent.com/document/api/400/41665
     * @param string $CertificatePublicKey 证书公钥。
CloudCertId和公钥私钥对二选一，若CloudCertId将会舍弃公钥和私钥参数，否则将自动先把公钥私钥对上传至ssl新建证书，并使用上传成功后返回的CloudCertId。
     * @param string $CertificatePrivateKey 证书私钥。
CloudCertId和公钥私钥对二选一，若传CloudCertId将会舍弃公钥和私钥参数，否则将自动先把公钥私钥对上传至ssl新建证书，并使用上传成功后返回的CloudCertId。
     * @param string $CertificateAlias 上传至ssl证书中心的备注信息，只有新建证书时有效。传CloudCertId时会忽略。
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
        if (array_key_exists("DomainInfos",$param) and $param["DomainInfos"] !== null) {
            $this->DomainInfos = [];
            foreach ($param["DomainInfos"] as $key => $value){
                $obj = new LiveCertDomainInfo();
                $obj->deserialize($value);
                array_push($this->DomainInfos, $obj);
            }
        }

        if (array_key_exists("CloudCertId",$param) and $param["CloudCertId"] !== null) {
            $this->CloudCertId = $param["CloudCertId"];
        }

        if (array_key_exists("CertificatePublicKey",$param) and $param["CertificatePublicKey"] !== null) {
            $this->CertificatePublicKey = $param["CertificatePublicKey"];
        }

        if (array_key_exists("CertificatePrivateKey",$param) and $param["CertificatePrivateKey"] !== null) {
            $this->CertificatePrivateKey = $param["CertificatePrivateKey"];
        }

        if (array_key_exists("CertificateAlias",$param) and $param["CertificateAlias"] !== null) {
            $this->CertificateAlias = $param["CertificateAlias"];
        }
    }
}
