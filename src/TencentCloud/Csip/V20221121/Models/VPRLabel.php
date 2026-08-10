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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 漏洞VPR标签
 *
 * @method string getName() 获取<p>标签名称<br>枚举值：<br>IN_THE_WILD：在野利用<br>EXP：有 EXP<br>POC：有 POC<br>INTERNET_EXPOSED：外网暴露<br>NO_RESTART：无需重启<br>HIGH_VALUE_ASSET：重要资产<br>MALWARE_WEAPONIZED：已武器化</p>
 * @method void setName(string $Name) 设置<p>标签名称<br>枚举值：<br>IN_THE_WILD：在野利用<br>EXP：有 EXP<br>POC：有 POC<br>INTERNET_EXPOSED：外网暴露<br>NO_RESTART：无需重启<br>HIGH_VALUE_ASSET：重要资产<br>MALWARE_WEAPONIZED：已武器化</p>
 * @method string getLevel() 获取<p>标签等级<br>枚举值：<br>HIGH：高<br>MEDIUM：中<br>LOW：低</p>
 * @method void setLevel(string $Level) 设置<p>标签等级<br>枚举值：<br>HIGH：高<br>MEDIUM：中<br>LOW：低</p>
 * @method string getRemark() 获取<p>标签说明</p>
 * @method void setRemark(string $Remark) 设置<p>标签说明</p>
 */
class VPRLabel extends AbstractModel
{
    /**
     * @var string <p>标签名称<br>枚举值：<br>IN_THE_WILD：在野利用<br>EXP：有 EXP<br>POC：有 POC<br>INTERNET_EXPOSED：外网暴露<br>NO_RESTART：无需重启<br>HIGH_VALUE_ASSET：重要资产<br>MALWARE_WEAPONIZED：已武器化</p>
     */
    public $Name;

    /**
     * @var string <p>标签等级<br>枚举值：<br>HIGH：高<br>MEDIUM：中<br>LOW：低</p>
     */
    public $Level;

    /**
     * @var string <p>标签说明</p>
     */
    public $Remark;

    /**
     * @param string $Name <p>标签名称<br>枚举值：<br>IN_THE_WILD：在野利用<br>EXP：有 EXP<br>POC：有 POC<br>INTERNET_EXPOSED：外网暴露<br>NO_RESTART：无需重启<br>HIGH_VALUE_ASSET：重要资产<br>MALWARE_WEAPONIZED：已武器化</p>
     * @param string $Level <p>标签等级<br>枚举值：<br>HIGH：高<br>MEDIUM：中<br>LOW：低</p>
     * @param string $Remark <p>标签说明</p>
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
