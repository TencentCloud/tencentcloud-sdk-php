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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 查询Limiter的接入地址
 *
 * @method string getIntranetAddress() 获取VPC接入IP列表
 * @method void setIntranetAddress(string $IntranetAddress) 设置VPC接入IP列表
 */
class PolarisLimiterAddress extends AbstractModel
{
    /**
     * @var string VPC接入IP列表
     */
    public $IntranetAddress;

    /**
     * @param string $IntranetAddress VPC接入IP列表
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
        if (array_key_exists("IntranetAddress",$param) and $param["IntranetAddress"] !== null) {
            $this->IntranetAddress = $param["IntranetAddress"];
        }
    }
}
