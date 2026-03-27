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
namespace TencentCloud\Hai\V20230812\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 服务调用信息
 *
 * @method string getServiceId() 获取服务ID
 * @method void setServiceId(string $ServiceId) 设置服务ID
 * @method string getPublicEndpoint() 获取服务调用地址
 * @method void setPublicEndpoint(string $PublicEndpoint) 设置服务调用地址
 * @method string getApiKey() 获取服务调用的API_KEY
 * @method void setApiKey(string $ApiKey) 设置服务调用的API_KEY
 * @method string getVpcEndpoint() 获取内网调用地址
 * @method void setVpcEndpoint(string $VpcEndpoint) 设置内网调用地址
 */
class CallInfo extends AbstractModel
{
    /**
     * @var string 服务ID
     */
    public $ServiceId;

    /**
     * @var string 服务调用地址
     */
    public $PublicEndpoint;

    /**
     * @var string 服务调用的API_KEY
     */
    public $ApiKey;

    /**
     * @var string 内网调用地址
     */
    public $VpcEndpoint;

    /**
     * @param string $ServiceId 服务ID
     * @param string $PublicEndpoint 服务调用地址
     * @param string $ApiKey 服务调用的API_KEY
     * @param string $VpcEndpoint 内网调用地址
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
        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("PublicEndpoint",$param) and $param["PublicEndpoint"] !== null) {
            $this->PublicEndpoint = $param["PublicEndpoint"];
        }

        if (array_key_exists("ApiKey",$param) and $param["ApiKey"] !== null) {
            $this->ApiKey = $param["ApiKey"];
        }

        if (array_key_exists("VpcEndpoint",$param) and $param["VpcEndpoint"] !== null) {
            $this->VpcEndpoint = $param["VpcEndpoint"];
        }
    }
}
