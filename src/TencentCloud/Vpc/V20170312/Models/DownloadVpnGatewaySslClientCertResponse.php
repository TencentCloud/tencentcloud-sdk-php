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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DownloadVpnGatewaySslClientCert返回参数结构体
 *
 * @method string getSslClientConfigsSet() 获取无
 * @method void setSslClientConfigsSet(string $SslClientConfigsSet) 设置无
 * @method array getSslClientConfig() 获取SSL-VPN client配置
 * @method void setSslClientConfig(array $SslClientConfig) 设置SSL-VPN client配置
 * @method integer getAuthenticated() 获取是否鉴权成功 只有传入SamlToken 才生效
 * @method void setAuthenticated(integer $Authenticated) 设置是否鉴权成功 只有传入SamlToken 才生效
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DownloadVpnGatewaySslClientCertResponse extends AbstractModel
{
    /**
     * @var string 无
     */
    public $SslClientConfigsSet;

    /**
     * @var array SSL-VPN client配置
     */
    public $SslClientConfig;

    /**
     * @var integer 是否鉴权成功 只有传入SamlToken 才生效
     */
    public $Authenticated;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $SslClientConfigsSet 无
     * @param array $SslClientConfig SSL-VPN client配置
     * @param integer $Authenticated 是否鉴权成功 只有传入SamlToken 才生效
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("SslClientConfigsSet",$param) and $param["SslClientConfigsSet"] !== null) {
            $this->SslClientConfigsSet = $param["SslClientConfigsSet"];
        }

        if (array_key_exists("SslClientConfig",$param) and $param["SslClientConfig"] !== null) {
            $this->SslClientConfig = [];
            foreach ($param["SslClientConfig"] as $key => $value){
                $obj = new SslClientConfig();
                $obj->deserialize($value);
                array_push($this->SslClientConfig, $obj);
            }
        }

        if (array_key_exists("Authenticated",$param) and $param["Authenticated"] !== null) {
            $this->Authenticated = $param["Authenticated"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
