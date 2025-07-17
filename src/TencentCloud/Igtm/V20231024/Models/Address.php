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
namespace TencentCloud\Igtm\V20231024\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 添加地址池地址
 *
 * @method string getAddr() 获取地址值：只支持ipv4、ipv6和域名格式；
不支持回环地址、保留地址、内网地址与腾讯保留网段
 * @method void setAddr(string $Addr) 设置地址值：只支持ipv4、ipv6和域名格式；
不支持回环地址、保留地址、内网地址与腾讯保留网段
 * @method string getIsEnable() 获取是否启用:DISABLED不启用；ENABLED启用
 * @method void setIsEnable(string $IsEnable) 设置是否启用:DISABLED不启用；ENABLED启用
 * @method integer getAddressId() 获取地址id
 * @method void setAddressId(integer $AddressId) 设置地址id
 * @method string getLocation() 获取地址名称
 * @method void setLocation(string $Location) 设置地址名称
 * @method string getStatus() 获取OK正常，DOWN故障，WARN风险，UNKNOWN探测中，UNMONITORED未知
 * @method void setStatus(string $Status) 设置OK正常，DOWN故障，WARN风险，UNKNOWN探测中，UNMONITORED未知
 * @method integer getWeight() 获取权重，流量策略为WEIGHT时，必填；范围1-100
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWeight(integer $Weight) 设置权重，流量策略为WEIGHT时，必填；范围1-100
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatedOn() 获取创建时间
 * @method void setCreatedOn(string $CreatedOn) 设置创建时间
 * @method string getUpdatedOn() 获取修改时间
 * @method void setUpdatedOn(string $UpdatedOn) 设置修改时间
 */
class Address extends AbstractModel
{
    /**
     * @var string 地址值：只支持ipv4、ipv6和域名格式；
不支持回环地址、保留地址、内网地址与腾讯保留网段
     */
    public $Addr;

    /**
     * @var string 是否启用:DISABLED不启用；ENABLED启用
     */
    public $IsEnable;

    /**
     * @var integer 地址id
     */
    public $AddressId;

    /**
     * @var string 地址名称
     */
    public $Location;

    /**
     * @var string OK正常，DOWN故障，WARN风险，UNKNOWN探测中，UNMONITORED未知
     */
    public $Status;

    /**
     * @var integer 权重，流量策略为WEIGHT时，必填；范围1-100
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Weight;

    /**
     * @var string 创建时间
     */
    public $CreatedOn;

    /**
     * @var string 修改时间
     */
    public $UpdatedOn;

    /**
     * @param string $Addr 地址值：只支持ipv4、ipv6和域名格式；
不支持回环地址、保留地址、内网地址与腾讯保留网段
     * @param string $IsEnable 是否启用:DISABLED不启用；ENABLED启用
     * @param integer $AddressId 地址id
     * @param string $Location 地址名称
     * @param string $Status OK正常，DOWN故障，WARN风险，UNKNOWN探测中，UNMONITORED未知
     * @param integer $Weight 权重，流量策略为WEIGHT时，必填；范围1-100
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatedOn 创建时间
     * @param string $UpdatedOn 修改时间
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
        if (array_key_exists("Addr",$param) and $param["Addr"] !== null) {
            $this->Addr = $param["Addr"];
        }

        if (array_key_exists("IsEnable",$param) and $param["IsEnable"] !== null) {
            $this->IsEnable = $param["IsEnable"];
        }

        if (array_key_exists("AddressId",$param) and $param["AddressId"] !== null) {
            $this->AddressId = $param["AddressId"];
        }

        if (array_key_exists("Location",$param) and $param["Location"] !== null) {
            $this->Location = $param["Location"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }

        if (array_key_exists("CreatedOn",$param) and $param["CreatedOn"] !== null) {
            $this->CreatedOn = $param["CreatedOn"];
        }

        if (array_key_exists("UpdatedOn",$param) and $param["UpdatedOn"] !== null) {
            $this->UpdatedOn = $param["UpdatedOn"];
        }
    }
}
