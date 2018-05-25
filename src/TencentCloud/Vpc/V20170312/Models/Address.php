<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getAddressId() 获取`EIP`的`ID`，是`EIP`的唯一标识。
 * @method void setAddressId(string $AddressId) 设置`EIP`的`ID`，是`EIP`的唯一标识。
 * @method string getAddressName() 获取`EIP`名称。
 * @method void setAddressName(string $AddressName) 设置`EIP`名称。
 * @method string getAddressStatus() 获取`EIP`状态。
 * @method void setAddressStatus(string $AddressStatus) 设置`EIP`状态。
 * @method string getAddressIp() 获取弹性外网IP
 * @method void setAddressIp(string $AddressIp) 设置弹性外网IP
 * @method string getBindedResourceId() 获取绑定的资源实例`ID`。可能是一个`CVM`，`NAT`，或是弹性网卡。
 * @method void setBindedResourceId(string $BindedResourceId) 设置绑定的资源实例`ID`。可能是一个`CVM`，`NAT`，或是弹性网卡。
 * @method string getCreatedTime() 获取创建时间。按照`ISO8601`标准表示，并且使用`UTC`时间。格式为：`YYYY-MM-DDThh:mm:ssZ`。
 * @method void setCreatedTime(string $CreatedTime) 设置创建时间。按照`ISO8601`标准表示，并且使用`UTC`时间。格式为：`YYYY-MM-DDThh:mm:ssZ`。
 */

/**
 *描述 EIP 信息
 */
class Address extends AbstractModel
{
    /**
     * @var string `EIP`的`ID`，是`EIP`的唯一标识。
     */
    public $AddressId;

    /**
     * @var string `EIP`名称。
     */
    public $AddressName;

    /**
     * @var string `EIP`状态。
     */
    public $AddressStatus;

    /**
     * @var string 弹性外网IP
     */
    public $AddressIp;

    /**
     * @var string 绑定的资源实例`ID`。可能是一个`CVM`，`NAT`，或是弹性网卡。
     */
    public $BindedResourceId;

    /**
     * @var string 创建时间。按照`ISO8601`标准表示，并且使用`UTC`时间。格式为：`YYYY-MM-DDThh:mm:ssZ`。
     */
    public $CreatedTime;
    /**
     * @param string $AddressId `EIP`的`ID`，是`EIP`的唯一标识。
     * @param string $AddressName `EIP`名称。
     * @param string $AddressStatus `EIP`状态。
     * @param string $AddressIp 弹性外网IP
     * @param string $BindedResourceId 绑定的资源实例`ID`。可能是一个`CVM`，`NAT`，或是弹性网卡。
     * @param string $CreatedTime 创建时间。按照`ISO8601`标准表示，并且使用`UTC`时间。格式为：`YYYY-MM-DDThh:mm:ssZ`。
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("AddressId",$param) and $param["AddressId"] !== null) {
            $this->AddressId = $param["AddressId"];
        }

        if (array_key_exists("AddressName",$param) and $param["AddressName"] !== null) {
            $this->AddressName = $param["AddressName"];
        }

        if (array_key_exists("AddressStatus",$param) and $param["AddressStatus"] !== null) {
            $this->AddressStatus = $param["AddressStatus"];
        }

        if (array_key_exists("AddressIp",$param) and $param["AddressIp"] !== null) {
            $this->AddressIp = $param["AddressIp"];
        }

        if (array_key_exists("BindedResourceId",$param) and $param["BindedResourceId"] !== null) {
            $this->BindedResourceId = $param["BindedResourceId"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }
    }
}
