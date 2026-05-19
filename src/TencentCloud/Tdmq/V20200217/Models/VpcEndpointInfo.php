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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * VPC接入点信息
 *
 * @method string getVpcId() 获取<p>vpc的id</p>
 * @method void setVpcId(string $VpcId) 设置<p>vpc的id</p>
 * @method string getSubnetId() 获取<p>子网id</p>
 * @method void setSubnetId(string $SubnetId) 设置<p>子网id</p>
 * @method string getVpcEndpoint() 获取<p>vpc接入点信息</p>
 * @method void setVpcEndpoint(string $VpcEndpoint) 设置<p>vpc接入点信息</p>
 * @method string getVpcDataStreamEndpointStatus() 获取<p>vpc接入点状态 OFF/ON/CREATING/DELETING</p>
 * @method void setVpcDataStreamEndpointStatus(string $VpcDataStreamEndpointStatus) 设置<p>vpc接入点状态 OFF/ON/CREATING/DELETING</p>
 * @method string getVpcTlsEndpoint() 获取<p>TLS加密的数据流接入点</p>
 * @method void setVpcTlsEndpoint(string $VpcTlsEndpoint) 设置<p>TLS加密的数据流接入点</p>
 * @method string getVpcErrorMessage() 获取<p>VPC 接入点操作失败的错误信息</p>
 * @method void setVpcErrorMessage(string $VpcErrorMessage) 设置<p>VPC 接入点操作失败的错误信息</p>
 * @method string getId() 获取<p>接入点ID</p>
 * @method void setId(string $Id) 设置<p>接入点ID</p>
 * @method string getVpcStreamEndpoint() 获取<p>vpc Stream接入点</p>
 * @method void setVpcStreamEndpoint(string $VpcStreamEndpoint) 设置<p>vpc Stream接入点</p>
 */
class VpcEndpointInfo extends AbstractModel
{
    /**
     * @var string <p>vpc的id</p>
     */
    public $VpcId;

    /**
     * @var string <p>子网id</p>
     */
    public $SubnetId;

    /**
     * @var string <p>vpc接入点信息</p>
     */
    public $VpcEndpoint;

    /**
     * @var string <p>vpc接入点状态 OFF/ON/CREATING/DELETING</p>
     */
    public $VpcDataStreamEndpointStatus;

    /**
     * @var string <p>TLS加密的数据流接入点</p>
     */
    public $VpcTlsEndpoint;

    /**
     * @var string <p>VPC 接入点操作失败的错误信息</p>
     */
    public $VpcErrorMessage;

    /**
     * @var string <p>接入点ID</p>
     */
    public $Id;

    /**
     * @var string <p>vpc Stream接入点</p>
     */
    public $VpcStreamEndpoint;

    /**
     * @param string $VpcId <p>vpc的id</p>
     * @param string $SubnetId <p>子网id</p>
     * @param string $VpcEndpoint <p>vpc接入点信息</p>
     * @param string $VpcDataStreamEndpointStatus <p>vpc接入点状态 OFF/ON/CREATING/DELETING</p>
     * @param string $VpcTlsEndpoint <p>TLS加密的数据流接入点</p>
     * @param string $VpcErrorMessage <p>VPC 接入点操作失败的错误信息</p>
     * @param string $Id <p>接入点ID</p>
     * @param string $VpcStreamEndpoint <p>vpc Stream接入点</p>
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
        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("VpcEndpoint",$param) and $param["VpcEndpoint"] !== null) {
            $this->VpcEndpoint = $param["VpcEndpoint"];
        }

        if (array_key_exists("VpcDataStreamEndpointStatus",$param) and $param["VpcDataStreamEndpointStatus"] !== null) {
            $this->VpcDataStreamEndpointStatus = $param["VpcDataStreamEndpointStatus"];
        }

        if (array_key_exists("VpcTlsEndpoint",$param) and $param["VpcTlsEndpoint"] !== null) {
            $this->VpcTlsEndpoint = $param["VpcTlsEndpoint"];
        }

        if (array_key_exists("VpcErrorMessage",$param) and $param["VpcErrorMessage"] !== null) {
            $this->VpcErrorMessage = $param["VpcErrorMessage"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("VpcStreamEndpoint",$param) and $param["VpcStreamEndpoint"] !== null) {
            $this->VpcStreamEndpoint = $param["VpcStreamEndpoint"];
        }
    }
}
