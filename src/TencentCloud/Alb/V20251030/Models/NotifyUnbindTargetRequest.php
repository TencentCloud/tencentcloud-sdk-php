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
namespace TencentCloud\Alb\V20251030\Models;
use TencentCloud\Common\AbstractModel;

/**
 * NotifyUnbindTarget请求参数结构体
 *
 * @method array getIps() 获取后端服务的IP列表。
> **VpcId**（**NumericVpcId**）、**Ips**必须同时设置。
 * @method void setIps(array $Ips) 设置后端服务的IP列表。
> **VpcId**（**NumericVpcId**）、**Ips**必须同时设置。
 * @method integer getNumericVpcId() 获取后端服务所属VPC的数字ID。
> **VpcId**（**NumericVpcId**）、**Ips**必须同时设置。
 * @method void setNumericVpcId(integer $NumericVpcId) 设置后端服务所属VPC的数字ID。
> **VpcId**（**NumericVpcId**）、**Ips**必须同时设置。
 */
class NotifyUnbindTargetRequest extends AbstractModel
{
    /**
     * @var array 后端服务的IP列表。
> **VpcId**（**NumericVpcId**）、**Ips**必须同时设置。
     */
    public $Ips;

    /**
     * @var integer 后端服务所属VPC的数字ID。
> **VpcId**（**NumericVpcId**）、**Ips**必须同时设置。
     */
    public $NumericVpcId;

    /**
     * @param array $Ips 后端服务的IP列表。
> **VpcId**（**NumericVpcId**）、**Ips**必须同时设置。
     * @param integer $NumericVpcId 后端服务所属VPC的数字ID。
> **VpcId**（**NumericVpcId**）、**Ips**必须同时设置。
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
        if (array_key_exists("Ips",$param) and $param["Ips"] !== null) {
            $this->Ips = $param["Ips"];
        }

        if (array_key_exists("NumericVpcId",$param) and $param["NumericVpcId"] !== null) {
            $this->NumericVpcId = $param["NumericVpcId"];
        }
    }
}
