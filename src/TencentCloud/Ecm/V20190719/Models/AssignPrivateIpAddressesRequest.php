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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AssignPrivateIpAddresses请求参数结构体
 *
 * @method string getNetworkInterfaceId() 获取弹性网卡实例ID，例如：eni-m6dyj72l。
 * @method void setNetworkInterfaceId(string $NetworkInterfaceId) 设置弹性网卡实例ID，例如：eni-m6dyj72l。
 * @method string getEcmRegion() 获取ECM 地域，形如ap-xian-ecm。
 * @method void setEcmRegion(string $EcmRegion) 设置ECM 地域，形如ap-xian-ecm。
 * @method array getPrivateIpAddresses() 获取指定的内网IP信息，单次最多指定10个。与SecondaryPrivateIpAddressCount至少提供一个。
 * @method void setPrivateIpAddresses(array $PrivateIpAddresses) 设置指定的内网IP信息，单次最多指定10个。与SecondaryPrivateIpAddressCount至少提供一个。
 * @method integer getSecondaryPrivateIpAddressCount() 获取新申请的内网IP地址个数，与PrivateIpAddresses至少提供一个。内网IP地址个数总和不能超过配额数
 * @method void setSecondaryPrivateIpAddressCount(integer $SecondaryPrivateIpAddressCount) 设置新申请的内网IP地址个数，与PrivateIpAddresses至少提供一个。内网IP地址个数总和不能超过配额数
 */
class AssignPrivateIpAddressesRequest extends AbstractModel
{
    /**
     * @var string 弹性网卡实例ID，例如：eni-m6dyj72l。
     */
    public $NetworkInterfaceId;

    /**
     * @var string ECM 地域，形如ap-xian-ecm。
     */
    public $EcmRegion;

    /**
     * @var array 指定的内网IP信息，单次最多指定10个。与SecondaryPrivateIpAddressCount至少提供一个。
     */
    public $PrivateIpAddresses;

    /**
     * @var integer 新申请的内网IP地址个数，与PrivateIpAddresses至少提供一个。内网IP地址个数总和不能超过配额数
     */
    public $SecondaryPrivateIpAddressCount;

    /**
     * @param string $NetworkInterfaceId 弹性网卡实例ID，例如：eni-m6dyj72l。
     * @param string $EcmRegion ECM 地域，形如ap-xian-ecm。
     * @param array $PrivateIpAddresses 指定的内网IP信息，单次最多指定10个。与SecondaryPrivateIpAddressCount至少提供一个。
     * @param integer $SecondaryPrivateIpAddressCount 新申请的内网IP地址个数，与PrivateIpAddresses至少提供一个。内网IP地址个数总和不能超过配额数
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
        if (array_key_exists("NetworkInterfaceId",$param) and $param["NetworkInterfaceId"] !== null) {
            $this->NetworkInterfaceId = $param["NetworkInterfaceId"];
        }

        if (array_key_exists("EcmRegion",$param) and $param["EcmRegion"] !== null) {
            $this->EcmRegion = $param["EcmRegion"];
        }

        if (array_key_exists("PrivateIpAddresses",$param) and $param["PrivateIpAddresses"] !== null) {
            $this->PrivateIpAddresses = [];
            foreach ($param["PrivateIpAddresses"] as $key => $value){
                $obj = new PrivateIpAddressSpecification();
                $obj->deserialize($value);
                array_push($this->PrivateIpAddresses, $obj);
            }
        }

        if (array_key_exists("SecondaryPrivateIpAddressCount",$param) and $param["SecondaryPrivateIpAddressCount"] !== null) {
            $this->SecondaryPrivateIpAddressCount = $param["SecondaryPrivateIpAddressCount"];
        }
    }
}
