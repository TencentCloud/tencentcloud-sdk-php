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
namespace TencentCloud\Bmvpc\V20180625\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteVirtualIp请求参数结构体
 *
 * @method string getVpcId() 获取私有网络唯一ID。
 * @method void setVpcId(string $VpcId) 设置私有网络唯一ID。
 * @method array getIps() 获取退还的IP列表。
 * @method void setIps(array $Ips) 设置退还的IP列表。
 */
class DeleteVirtualIpRequest extends AbstractModel
{
    /**
     * @var string 私有网络唯一ID。
     */
    public $VpcId;

    /**
     * @var array 退还的IP列表。
     */
    public $Ips;

    /**
     * @param string $VpcId 私有网络唯一ID。
     * @param array $Ips 退还的IP列表。
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

        if (array_key_exists("Ips",$param) and $param["Ips"] !== null) {
            $this->Ips = $param["Ips"];
        }
    }
}
