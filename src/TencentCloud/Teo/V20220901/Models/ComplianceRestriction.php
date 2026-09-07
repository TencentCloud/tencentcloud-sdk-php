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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 因政府法律法规、用户协议等规定，对资源进行地区访问限制信息。
 *
 * @method string getReason() 获取<p>下发访问限制的原因。</p><p>枚举值：</p><ul><li>ICP_RECORD_REQUIRED： 未备案；</li><li>GOVERNMENT_ORDER： 政府指令。</li></ul>
 * @method void setReason(string $Reason) 设置<p>下发访问限制的原因。</p><p>枚举值：</p><ul><li>ICP_RECORD_REQUIRED： 未备案；</li><li>GOVERNMENT_ORDER： 政府指令。</li></ul>
 * @method string getRegion() 获取<p>限制访问地区的具体国家/地区码，使用“ISO 3166 国家/地区代码标准”。</p><p>参数格式：查看链接：https://www.iso.org/iso-3166-country-codes.html。</p>
 * @method void setRegion(string $Region) 设置<p>限制访问地区的具体国家/地区码，使用“ISO 3166 国家/地区代码标准”。</p><p>参数格式：查看链接：https://www.iso.org/iso-3166-country-codes.html。</p>
 */
class ComplianceRestriction extends AbstractModel
{
    /**
     * @var string <p>下发访问限制的原因。</p><p>枚举值：</p><ul><li>ICP_RECORD_REQUIRED： 未备案；</li><li>GOVERNMENT_ORDER： 政府指令。</li></ul>
     */
    public $Reason;

    /**
     * @var string <p>限制访问地区的具体国家/地区码，使用“ISO 3166 国家/地区代码标准”。</p><p>参数格式：查看链接：https://www.iso.org/iso-3166-country-codes.html。</p>
     */
    public $Region;

    /**
     * @param string $Reason <p>下发访问限制的原因。</p><p>枚举值：</p><ul><li>ICP_RECORD_REQUIRED： 未备案；</li><li>GOVERNMENT_ORDER： 政府指令。</li></ul>
     * @param string $Region <p>限制访问地区的具体国家/地区码，使用“ISO 3166 国家/地区代码标准”。</p><p>参数格式：查看链接：https://www.iso.org/iso-3166-country-codes.html。</p>
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
        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }
    }
}
