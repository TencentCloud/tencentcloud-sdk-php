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
 * IP溯源日志
 *
 * @method string getTimestamp() 获取时间
 * @method void setTimestamp(string $Timestamp) 设置时间
 * @method string getRemoteIp() 获取访问IP
 * @method void setRemoteIp(string $RemoteIp) 设置访问IP
 * @method string getTraceType() 获取溯源类型rsp/req
 * @method void setTraceType(string $TraceType) 设置溯源类型rsp/req
 * @method string getNetType() 获取访问网络类型，公网/私网
 * @method void setNetType(string $NetType) 设置访问网络类型，公网/私网
 * @method string getMessage() 获取原始消息
 * @method void setMessage(string $Message) 设置原始消息
 * @method string getUri() 获取访问uri
 * @method void setUri(string $Uri) 设置访问uri
 * @method string getPublicIp() 获取公网IP
 * @method void setPublicIp(string $PublicIp) 设置公网IP
 * @method string getReqTypeOrRspStatus() 获取请求类型或返回状态
 * @method void setReqTypeOrRspStatus(string $ReqTypeOrRspStatus) 设置请求类型或返回状态
 * @method string getNodeIp() 获取集群节点IP
 * @method void setNodeIp(string $NodeIp) 设置集群节点IP
 */
class IpTraceLogEntry extends AbstractModel
{
    /**
     * @var string 时间
     */
    public $Timestamp;

    /**
     * @var string 访问IP
     */
    public $RemoteIp;

    /**
     * @var string 溯源类型rsp/req
     */
    public $TraceType;

    /**
     * @var string 访问网络类型，公网/私网
     */
    public $NetType;

    /**
     * @var string 原始消息
     */
    public $Message;

    /**
     * @var string 访问uri
     */
    public $Uri;

    /**
     * @var string 公网IP
     */
    public $PublicIp;

    /**
     * @var string 请求类型或返回状态
     */
    public $ReqTypeOrRspStatus;

    /**
     * @var string 集群节点IP
     */
    public $NodeIp;

    /**
     * @param string $Timestamp 时间
     * @param string $RemoteIp 访问IP
     * @param string $TraceType 溯源类型rsp/req
     * @param string $NetType 访问网络类型，公网/私网
     * @param string $Message 原始消息
     * @param string $Uri 访问uri
     * @param string $PublicIp 公网IP
     * @param string $ReqTypeOrRspStatus 请求类型或返回状态
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
        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            $this->Timestamp = $param["Timestamp"];
        }

        if (array_key_exists("RemoteIp",$param) and $param["RemoteIp"] !== null) {
            $this->RemoteIp = $param["RemoteIp"];
        }

        if (array_key_exists("TraceType",$param) and $param["TraceType"] !== null) {
            $this->TraceType = $param["TraceType"];
        }

        if (array_key_exists("NetType",$param) and $param["NetType"] !== null) {
            $this->NetType = $param["NetType"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("Uri",$param) and $param["Uri"] !== null) {
            $this->Uri = $param["Uri"];
        }

        if (array_key_exists("PublicIp",$param) and $param["PublicIp"] !== null) {
            $this->PublicIp = $param["PublicIp"];
        }

        if (array_key_exists("ReqTypeOrRspStatus",$param) and $param["ReqTypeOrRspStatus"] !== null) {
            $this->ReqTypeOrRspStatus = $param["ReqTypeOrRspStatus"];
        }

        if (array_key_exists("NodeIp",$param) and $param["NodeIp"] !== null) {
            $this->NodeIp = $param["NodeIp"];
        }
    }
}
