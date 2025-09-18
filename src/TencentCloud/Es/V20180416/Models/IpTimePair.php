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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 节点IP、访问IP、访问时间
 *
 * @method string getIp() 获取IP地址
 * @method void setIp(string $Ip) 设置IP地址
 * @method integer getTimestamp() 获取时间戳，毫秒
 * @method void setTimestamp(integer $Timestamp) 设置时间戳，毫秒
 * @method string getNodeIp() 获取集群节点IP
 * @method void setNodeIp(string $NodeIp) 设置集群节点IP
 */
class IpTimePair extends AbstractModel
{
    /**
     * @var string IP地址
     */
    public $Ip;

    /**
     * @var integer 时间戳，毫秒
     */
    public $Timestamp;

    /**
     * @var string 集群节点IP
     */
    public $NodeIp;

    /**
     * @param string $Ip IP地址
     * @param integer $Timestamp 时间戳，毫秒
     * @param string $NodeIp 集群节点IP
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
        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            $this->Timestamp = $param["Timestamp"];
        }

        if (array_key_exists("NodeIp",$param) and $param["NodeIp"] !== null) {
            $this->NodeIp = $param["NodeIp"];
        }
    }
}
