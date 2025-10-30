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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CLB监听器或规则绑定的多证书信息
 *
 * @method string getSSLMode() 获取认证类型，UNIDIRECTIONAL：单向认证，MUTUAL：双向认证
 * @method void setSSLMode(string $SSLMode) 设置认证类型，UNIDIRECTIONAL：单向认证，MUTUAL：双向认证
 * @method array getCertList() 获取监听器或规则证书列表，单双向认证，多本服务端证书算法类型不能重复;若SSLMode为双向认证，证书列表必须包含一本ca证书。
 * @method void setCertList(array $CertList) 设置监听器或规则证书列表，单双向认证，多本服务端证书算法类型不能重复;若SSLMode为双向认证，证书列表必须包含一本ca证书。
 * @method string getSSLVerifyClient() 获取双向认证时，是否开启客户端认证，ON:开启，OPTIONAL:自适应，默认ON
 * @method void setSSLVerifyClient(string $SSLVerifyClient) 设置双向认证时，是否开启客户端认证，ON:开启，OPTIONAL:自适应，默认ON
 */
class MultiCertInfo extends AbstractModel
{
    /**
     * @var string 认证类型，UNIDIRECTIONAL：单向认证，MUTUAL：双向认证
     */
    public $SSLMode;

    /**
     * @var array 监听器或规则证书列表，单双向认证，多本服务端证书算法类型不能重复;若SSLMode为双向认证，证书列表必须包含一本ca证书。
     */
    public $CertList;

    /**
     * @var string 双向认证时，是否开启客户端认证，ON:开启，OPTIONAL:自适应，默认ON
     */
    public $SSLVerifyClient;

    /**
     * @param string $SSLMode 认证类型，UNIDIRECTIONAL：单向认证，MUTUAL：双向认证
     * @param array $CertList 监听器或规则证书列表，单双向认证，多本服务端证书算法类型不能重复;若SSLMode为双向认证，证书列表必须包含一本ca证书。
     * @param string $SSLVerifyClient 双向认证时，是否开启客户端认证，ON:开启，OPTIONAL:自适应，默认ON
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
        if (array_key_exists("SSLMode",$param) and $param["SSLMode"] !== null) {
            $this->SSLMode = $param["SSLMode"];
        }

        if (array_key_exists("CertList",$param) and $param["CertList"] !== null) {
            $this->CertList = [];
            foreach ($param["CertList"] as $key => $value){
                $obj = new CertInfo();
                $obj->deserialize($value);
                array_push($this->CertList, $obj);
            }
        }

        if (array_key_exists("SSLVerifyClient",$param) and $param["SSLVerifyClient"] !== null) {
            $this->SSLVerifyClient = $param["SSLVerifyClient"];
        }
    }
}
