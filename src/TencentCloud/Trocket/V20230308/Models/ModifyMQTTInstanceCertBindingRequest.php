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
namespace TencentCloud\Trocket\V20230308\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyMQTTInstanceCertBinding请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getSSLServerCertId() 获取服务端证书id
 * @method void setSSLServerCertId(string $SSLServerCertId) 设置服务端证书id
 * @method string getSSLCaCertId() 获取CA证书id
 * @method void setSSLCaCertId(string $SSLCaCertId) 设置CA证书id
 */
class ModifyMQTTInstanceCertBindingRequest extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var string 服务端证书id
     */
    public $SSLServerCertId;

    /**
     * @var string CA证书id
     */
    public $SSLCaCertId;

    /**
     * @param string $InstanceId 实例ID
     * @param string $SSLServerCertId 服务端证书id
     * @param string $SSLCaCertId CA证书id
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("SSLServerCertId",$param) and $param["SSLServerCertId"] !== null) {
            $this->SSLServerCertId = $param["SSLServerCertId"];
        }

        if (array_key_exists("SSLCaCertId",$param) and $param["SSLCaCertId"] !== null) {
            $this->SSLCaCertId = $param["SSLCaCertId"];
        }
    }
}
