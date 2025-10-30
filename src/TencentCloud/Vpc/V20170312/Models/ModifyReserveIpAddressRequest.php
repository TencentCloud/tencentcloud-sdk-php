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
 * ModifyReserveIpAddress请求参数结构体
 *
 * @method string getVpcId() 获取VPC唯一 ID。
 * @method void setVpcId(string $VpcId) 设置VPC唯一 ID。
 * @method string getReserveIpId() 获取内网保留IP唯一ID。
 * @method void setReserveIpId(string $ReserveIpId) 设置内网保留IP唯一ID。
 * @method string getName() 获取内网保留 IP名称。
 * @method void setName(string $Name) 设置内网保留 IP名称。
 * @method string getDescription() 获取内网保留 IP描述。
 * @method void setDescription(string $Description) 设置内网保留 IP描述。
 */
class ModifyReserveIpAddressRequest extends AbstractModel
{
    /**
     * @var string VPC唯一 ID。
     */
    public $VpcId;

    /**
     * @var string 内网保留IP唯一ID。
     */
    public $ReserveIpId;

    /**
     * @var string 内网保留 IP名称。
     */
    public $Name;

    /**
     * @var string 内网保留 IP描述。
     */
    public $Description;

    /**
     * @param string $VpcId VPC唯一 ID。
     * @param string $ReserveIpId 内网保留IP唯一ID。
     * @param string $Name 内网保留 IP名称。
     * @param string $Description 内网保留 IP描述。
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

        if (array_key_exists("ReserveIpId",$param) and $param["ReserveIpId"] !== null) {
            $this->ReserveIpId = $param["ReserveIpId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
