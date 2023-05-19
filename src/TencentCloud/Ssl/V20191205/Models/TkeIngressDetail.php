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
 * tke ingress实例详情
 *
 * @method string getIngressName() 获取ingress名称
 * @method void setIngressName(string $IngressName) 设置ingress名称
 * @method array getTlsDomains() 获取tls域名列表
 * @method void setTlsDomains(array $TlsDomains) 设置tls域名列表
 * @method array getDomains() 获取ingress域名列表
 * @method void setDomains(array $Domains) 设置ingress域名列表
 */
class TkeIngressDetail extends AbstractModel
{
    /**
     * @var string ingress名称
     */
    public $IngressName;

    /**
     * @var array tls域名列表
     */
    public $TlsDomains;

    /**
     * @var array ingress域名列表
     */
    public $Domains;

    /**
     * @param string $IngressName ingress名称
     * @param array $TlsDomains tls域名列表
     * @param array $Domains ingress域名列表
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
        if (array_key_exists("IngressName",$param) and $param["IngressName"] !== null) {
            $this->IngressName = $param["IngressName"];
        }

        if (array_key_exists("TlsDomains",$param) and $param["TlsDomains"] !== null) {
            $this->TlsDomains = $param["TlsDomains"];
        }

        if (array_key_exists("Domains",$param) and $param["Domains"] !== null) {
            $this->Domains = $param["Domains"];
        }
    }
}
