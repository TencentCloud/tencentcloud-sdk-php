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
 * @method string getPrivateIpAddress() 获取内网IP地址。
 * @method void setPrivateIpAddress(string $PrivateIpAddress) 设置内网IP地址。
 * @method boolean getPrimary() 获取是否是主IP。
 * @method void setPrimary(boolean $Primary) 设置是否是主IP。
 * @method string getPublicIpAddress() 获取公网IP地址。
 * @method void setPublicIpAddress(string $PublicIpAddress) 设置公网IP地址。
 * @method string getAddressId() 获取EIP实例ID，例如：eip-11112222。
 * @method void setAddressId(string $AddressId) 设置EIP实例ID，例如：eip-11112222。
 * @method string getDescription() 获取内网IP描述信息。
 * @method void setDescription(string $Description) 设置内网IP描述信息。
 * @method boolean getIsWanIpBlocked() 获取公网IP是否被封堵。
 * @method void setIsWanIpBlocked(boolean $IsWanIpBlocked) 设置公网IP是否被封堵。
 */

/**
 *内网IP信息
 */
class PrivateIpAddressSpecification extends AbstractModel
{
    /**
     * @var string 内网IP地址。
     */
    public $PrivateIpAddress;

    /**
     * @var boolean 是否是主IP。
     */
    public $Primary;

    /**
     * @var string 公网IP地址。
     */
    public $PublicIpAddress;

    /**
     * @var string EIP实例ID，例如：eip-11112222。
     */
    public $AddressId;

    /**
     * @var string 内网IP描述信息。
     */
    public $Description;

    /**
     * @var boolean 公网IP是否被封堵。
     */
    public $IsWanIpBlocked;
    /**
     * @param string $PrivateIpAddress 内网IP地址。
     * @param boolean $Primary 是否是主IP。
     * @param string $PublicIpAddress 公网IP地址。
     * @param string $AddressId EIP实例ID，例如：eip-11112222。
     * @param string $Description 内网IP描述信息。
     * @param boolean $IsWanIpBlocked 公网IP是否被封堵。
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
        if (array_key_exists("PrivateIpAddress",$param) and $param["PrivateIpAddress"] !== null) {
            $this->PrivateIpAddress = $param["PrivateIpAddress"];
        }

        if (array_key_exists("Primary",$param) and $param["Primary"] !== null) {
            $this->Primary = $param["Primary"];
        }

        if (array_key_exists("PublicIpAddress",$param) and $param["PublicIpAddress"] !== null) {
            $this->PublicIpAddress = $param["PublicIpAddress"];
        }

        if (array_key_exists("AddressId",$param) and $param["AddressId"] !== null) {
            $this->AddressId = $param["AddressId"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("IsWanIpBlocked",$param) and $param["IsWanIpBlocked"] !== null) {
            $this->IsWanIpBlocked = $param["IsWanIpBlocked"];
        }
    }
}
