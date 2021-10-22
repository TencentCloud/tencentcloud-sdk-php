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
 * DescribeIpGeolocationInfos请求参数结构体
 *
 * @method array getAddressIps() 获取需查询的IP地址列表，目前仅支持IPv4地址。查询的IP地址数量上限为100个。
 * @method void setAddressIps(array $AddressIps) 设置需查询的IP地址列表，目前仅支持IPv4地址。查询的IP地址数量上限为100个。
 * @method IpField getFields() 获取需查询的IP地址的字段信息。
 * @method void setFields(IpField $Fields) 设置需查询的IP地址的字段信息。
 */
class DescribeIpGeolocationInfosRequest extends AbstractModel
{
    /**
     * @var array 需查询的IP地址列表，目前仅支持IPv4地址。查询的IP地址数量上限为100个。
     */
    public $AddressIps;

    /**
     * @var IpField 需查询的IP地址的字段信息。
     */
    public $Fields;

    /**
     * @param array $AddressIps 需查询的IP地址列表，目前仅支持IPv4地址。查询的IP地址数量上限为100个。
     * @param IpField $Fields 需查询的IP地址的字段信息。
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
        if (array_key_exists("AddressIps",$param) and $param["AddressIps"] !== null) {
            $this->AddressIps = $param["AddressIps"];
        }

        if (array_key_exists("Fields",$param) and $param["Fields"] !== null) {
            $this->Fields = new IpField();
            $this->Fields->deserialize($param["Fields"]);
        }
    }
}
