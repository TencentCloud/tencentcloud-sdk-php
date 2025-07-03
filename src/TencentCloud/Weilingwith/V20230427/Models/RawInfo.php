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
namespace TencentCloud\Weilingwith\V20230427\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 视频流Raw协议信息
 *
 * @method string getSM4Vector() 获取加密向量（如果视频网关选择流为非加密传输这个参数可忽略）
 * @method void setSM4Vector(string $SM4Vector) 设置加密向量（如果视频网关选择流为非加密传输这个参数可忽略）
 * @method string getNATIP() 获取专线ip (非专线接入可忽略)
 * @method void setNATIP(string $NATIP) 设置专线ip (非专线接入可忽略)
 * @method string getStreamToken() 获取客户端握手鉴权参数
 * @method void setStreamToken(string $StreamToken) 设置客户端握手鉴权参数
 * @method integer getPort() 获取拉流端口
 * @method void setPort(integer $Port) 设置拉流端口
 * @method string getStreamEnKey() 获取视频流加密key,目前为AES128加密KEY（如果视频网关选择流为非加密传输这个参数可忽略）
 * @method void setStreamEnKey(string $StreamEnKey) 设置视频流加密key,目前为AES128加密KEY（如果视频网关选择流为非加密传输这个参数可忽略）
 * @method string getIP() 获取拉流公网地址（非公网接入时，这个地址是内网地址）
 * @method void setIP(string $IP) 设置拉流公网地址（非公网接入时，这个地址是内网地址）
 * @method string getInnerIP() 获取拉流内网地址
 * @method void setInnerIP(string $InnerIP) 设置拉流内网地址
 */
class RawInfo extends AbstractModel
{
    /**
     * @var string 加密向量（如果视频网关选择流为非加密传输这个参数可忽略）
     */
    public $SM4Vector;

    /**
     * @var string 专线ip (非专线接入可忽略)
     */
    public $NATIP;

    /**
     * @var string 客户端握手鉴权参数
     */
    public $StreamToken;

    /**
     * @var integer 拉流端口
     */
    public $Port;

    /**
     * @var string 视频流加密key,目前为AES128加密KEY（如果视频网关选择流为非加密传输这个参数可忽略）
     */
    public $StreamEnKey;

    /**
     * @var string 拉流公网地址（非公网接入时，这个地址是内网地址）
     */
    public $IP;

    /**
     * @var string 拉流内网地址
     */
    public $InnerIP;

    /**
     * @param string $SM4Vector 加密向量（如果视频网关选择流为非加密传输这个参数可忽略）
     * @param string $NATIP 专线ip (非专线接入可忽略)
     * @param string $StreamToken 客户端握手鉴权参数
     * @param integer $Port 拉流端口
     * @param string $StreamEnKey 视频流加密key,目前为AES128加密KEY（如果视频网关选择流为非加密传输这个参数可忽略）
     * @param string $IP 拉流公网地址（非公网接入时，这个地址是内网地址）
     * @param string $InnerIP 拉流内网地址
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
        if (array_key_exists("SM4Vector",$param) and $param["SM4Vector"] !== null) {
            $this->SM4Vector = $param["SM4Vector"];
        }

        if (array_key_exists("NATIP",$param) and $param["NATIP"] !== null) {
            $this->NATIP = $param["NATIP"];
        }

        if (array_key_exists("StreamToken",$param) and $param["StreamToken"] !== null) {
            $this->StreamToken = $param["StreamToken"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("StreamEnKey",$param) and $param["StreamEnKey"] !== null) {
            $this->StreamEnKey = $param["StreamEnKey"];
        }

        if (array_key_exists("IP",$param) and $param["IP"] !== null) {
            $this->IP = $param["IP"];
        }

        if (array_key_exists("InnerIP",$param) and $param["InnerIP"] !== null) {
            $this->InnerIP = $param["InnerIP"];
        }
    }
}
