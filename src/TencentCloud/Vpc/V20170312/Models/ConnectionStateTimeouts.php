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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * NAT网关超时时间
 *
 * @method integer getUDPMappingTimeout() 获取UDP映射空闲时间，指多少秒以后UDP流停止向端点发送。取值范围为：3-7200秒，默认为10秒。
 * @method void setUDPMappingTimeout(integer $UDPMappingTimeout) 设置UDP映射空闲时间，指多少秒以后UDP流停止向端点发送。取值范围为：3-7200秒，默认为10秒。
 * @method integer getTCPEstablishedConnectionTimeout() 获取TCP已建立的连接空闲超时，指多少秒以后连接变为空闲状态。取值范围为：40-10800秒，默认为10800秒。
 * @method void setTCPEstablishedConnectionTimeout(integer $TCPEstablishedConnectionTimeout) 设置TCP已建立的连接空闲超时，指多少秒以后连接变为空闲状态。取值范围为：40-10800秒，默认为10800秒。
 * @method integer getTcpTimeWaitTimeout() 获取TCP TIME_WAIT超时，指完全关闭的TCP连接在到期后保留在NAT映射中的秒数。取值范围为：10-600秒，默认为120秒。
 * @method void setTcpTimeWaitTimeout(integer $TcpTimeWaitTimeout) 设置TCP TIME_WAIT超时，指完全关闭的TCP连接在到期后保留在NAT映射中的秒数。取值范围为：10-600秒，默认为120秒。
 */
class ConnectionStateTimeouts extends AbstractModel
{
    /**
     * @var integer UDP映射空闲时间，指多少秒以后UDP流停止向端点发送。取值范围为：3-7200秒，默认为10秒。
     */
    public $UDPMappingTimeout;

    /**
     * @var integer TCP已建立的连接空闲超时，指多少秒以后连接变为空闲状态。取值范围为：40-10800秒，默认为10800秒。
     */
    public $TCPEstablishedConnectionTimeout;

    /**
     * @var integer TCP TIME_WAIT超时，指完全关闭的TCP连接在到期后保留在NAT映射中的秒数。取值范围为：10-600秒，默认为120秒。
     */
    public $TcpTimeWaitTimeout;

    /**
     * @param integer $UDPMappingTimeout UDP映射空闲时间，指多少秒以后UDP流停止向端点发送。取值范围为：3-7200秒，默认为10秒。
     * @param integer $TCPEstablishedConnectionTimeout TCP已建立的连接空闲超时，指多少秒以后连接变为空闲状态。取值范围为：40-10800秒，默认为10800秒。
     * @param integer $TcpTimeWaitTimeout TCP TIME_WAIT超时，指完全关闭的TCP连接在到期后保留在NAT映射中的秒数。取值范围为：10-600秒，默认为120秒。
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
        if (array_key_exists("UDPMappingTimeout",$param) and $param["UDPMappingTimeout"] !== null) {
            $this->UDPMappingTimeout = $param["UDPMappingTimeout"];
        }

        if (array_key_exists("TCPEstablishedConnectionTimeout",$param) and $param["TCPEstablishedConnectionTimeout"] !== null) {
            $this->TCPEstablishedConnectionTimeout = $param["TCPEstablishedConnectionTimeout"];
        }

        if (array_key_exists("TcpTimeWaitTimeout",$param) and $param["TcpTimeWaitTimeout"] !== null) {
            $this->TcpTimeWaitTimeout = $param["TcpTimeWaitTimeout"];
        }
    }
}
