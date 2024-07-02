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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SetTlsVersion请求参数结构体
 *
 * @method string getListenerId() 获取监听器ID
 * @method void setListenerId(string $ListenerId) 设置监听器ID
 * @method array getTLSSupportVersion() 获取TLS版本
 * @method void setTLSSupportVersion(array $TLSSupportVersion) 设置TLS版本
 * @method string getTLSCiphers() 获取密码套件包
 * @method void setTLSCiphers(string $TLSCiphers) 设置密码套件包
 */
class SetTlsVersionRequest extends AbstractModel
{
    /**
     * @var string 监听器ID
     */
    public $ListenerId;

    /**
     * @var array TLS版本
     */
    public $TLSSupportVersion;

    /**
     * @var string 密码套件包
     */
    public $TLSCiphers;

    /**
     * @param string $ListenerId 监听器ID
     * @param array $TLSSupportVersion TLS版本
     * @param string $TLSCiphers 密码套件包
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
        if (array_key_exists("ListenerId",$param) and $param["ListenerId"] !== null) {
            $this->ListenerId = $param["ListenerId"];
        }

        if (array_key_exists("TLSSupportVersion",$param) and $param["TLSSupportVersion"] !== null) {
            $this->TLSSupportVersion = $param["TLSSupportVersion"];
        }

        if (array_key_exists("TLSCiphers",$param) and $param["TLSCiphers"] !== null) {
            $this->TLSCiphers = $param["TLSCiphers"];
        }
    }
}
