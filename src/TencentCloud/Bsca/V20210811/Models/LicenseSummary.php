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
namespace TencentCloud\Bsca\V20210811\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 描述许可证的概览信息。
 *
 * @method string getKey() 获取许可证标识符
 * @method void setKey(string $Key) 设置许可证标识符
 * @method string getSPDXKey() 获取许可证的SPDX标识符，见 https://spdx.org/licenses/
 * @method void setSPDXKey(string $SPDXKey) 设置许可证的SPDX标识符，见 https://spdx.org/licenses/
 * @method string getShortName() 获取许可证短名称
 * @method void setShortName(string $ShortName) 设置许可证短名称
 * @method string getName() 获取许可证完整名称
 * @method void setName(string $Name) 设置许可证完整名称
 * @method string getRisk() 获取License风险等级
<li>NotDefined</li>
<li>LowRisk</li>
<li>MediumRisk</li>
<li>HighRisk</li>
 * @method void setRisk(string $Risk) 设置License风险等级
<li>NotDefined</li>
<li>LowRisk</li>
<li>MediumRisk</li>
<li>HighRisk</li>
 * @method string getSource() 获取许可证来源URL
 * @method void setSource(string $Source) 设置许可证来源URL
 */
class LicenseSummary extends AbstractModel
{
    /**
     * @var string 许可证标识符
     */
    public $Key;

    /**
     * @var string 许可证的SPDX标识符，见 https://spdx.org/licenses/
     */
    public $SPDXKey;

    /**
     * @var string 许可证短名称
     */
    public $ShortName;

    /**
     * @var string 许可证完整名称
     */
    public $Name;

    /**
     * @var string License风险等级
<li>NotDefined</li>
<li>LowRisk</li>
<li>MediumRisk</li>
<li>HighRisk</li>
     */
    public $Risk;

    /**
     * @var string 许可证来源URL
     */
    public $Source;

    /**
     * @param string $Key 许可证标识符
     * @param string $SPDXKey 许可证的SPDX标识符，见 https://spdx.org/licenses/
     * @param string $ShortName 许可证短名称
     * @param string $Name 许可证完整名称
     * @param string $Risk License风险等级
<li>NotDefined</li>
<li>LowRisk</li>
<li>MediumRisk</li>
<li>HighRisk</li>
     * @param string $Source 许可证来源URL
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
        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("SPDXKey",$param) and $param["SPDXKey"] !== null) {
            $this->SPDXKey = $param["SPDXKey"];
        }

        if (array_key_exists("ShortName",$param) and $param["ShortName"] !== null) {
            $this->ShortName = $param["ShortName"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Risk",$param) and $param["Risk"] !== null) {
            $this->Risk = $param["Risk"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }
    }
}
