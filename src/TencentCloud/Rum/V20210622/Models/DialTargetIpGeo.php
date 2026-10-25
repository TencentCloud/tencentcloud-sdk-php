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
namespace TencentCloud\Rum\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 拨测目标 IP 的地区和运营商
 *
 * @method string getIp() 获取<p>目标 IP，与 TargetIps 中的地址一致</p>
 * @method void setIp(string $Ip) 设置<p>目标 IP，与 TargetIps 中的地址一致</p>
 * @method string getRegion() 获取<p>目标 IP 所在地区。无法解析时为未知。</p>
 * @method void setRegion(string $Region) 设置<p>目标 IP 所在地区。无法解析时为未知。</p>
 * @method string getOperator() 获取<p>目标 IP 所属运营商。无法解析时为未知。</p>
 * @method void setOperator(string $Operator) 设置<p>目标 IP 所属运营商。无法解析时为未知。</p>
 */
class DialTargetIpGeo extends AbstractModel
{
    /**
     * @var string <p>目标 IP，与 TargetIps 中的地址一致</p>
     */
    public $Ip;

    /**
     * @var string <p>目标 IP 所在地区。无法解析时为未知。</p>
     */
    public $Region;

    /**
     * @var string <p>目标 IP 所属运营商。无法解析时为未知。</p>
     */
    public $Operator;

    /**
     * @param string $Ip <p>目标 IP，与 TargetIps 中的地址一致</p>
     * @param string $Region <p>目标 IP 所在地区。无法解析时为未知。</p>
     * @param string $Operator <p>目标 IP 所属运营商。无法解析时为未知。</p>
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

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }
    }
}
