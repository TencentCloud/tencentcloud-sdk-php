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
namespace TencentCloud\Cvd\V20201104\Models;
use TencentCloud\Common\AbstractModel;

/**
 * IP控制策略详情
 *
 * @method string getIp() 获取<p>配置的IP。支持单IP和CIDR，暂不支持IP范围</p>
 * @method void setIp(string $Ip) 设置<p>配置的IP。支持单IP和CIDR，暂不支持IP范围</p>
 * @method string getDescription() 获取<p>IP的描述</p>
 * @method void setDescription(string $Description) 设置<p>IP的描述</p>
 */
class IpControlDetail extends AbstractModel
{
    /**
     * @var string <p>配置的IP。支持单IP和CIDR，暂不支持IP范围</p>
     */
    public $Ip;

    /**
     * @var string <p>IP的描述</p>
     */
    public $Description;

    /**
     * @param string $Ip <p>配置的IP。支持单IP和CIDR，暂不支持IP范围</p>
     * @param string $Description <p>IP的描述</p>
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
        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
