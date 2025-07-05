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
 * DeleteReserveIpAddresses请求参数结构体
 *
 * @method string getVpcId() 获取VPC唯一 ID。
 * @method void setVpcId(string $VpcId) 设置VPC唯一 ID。
 * @method array getReserveIpIds() 获取内网保留IP地址列表。
 * @method void setReserveIpIds(array $ReserveIpIds) 设置内网保留IP地址列表。
 */
class DeleteReserveIpAddressesRequest extends AbstractModel
{
    /**
     * @var string VPC唯一 ID。
     */
    public $VpcId;

    /**
     * @var array 内网保留IP地址列表。
     */
    public $ReserveIpIds;

    /**
     * @param string $VpcId VPC唯一 ID。
     * @param array $ReserveIpIds 内网保留IP地址列表。
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

        if (array_key_exists("ReserveIpIds",$param) and $param["ReserveIpIds"] !== null) {
            $this->ReserveIpIds = $param["ReserveIpIds"];
        }
    }
}
