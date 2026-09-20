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
 * 回源 IP 网段版本信息。
 *
 * @method string getVersion() 获取源站防护版本号。
格式说明：
标准版本：
<li>gaz-xxxxx：全球；</li>
<li>mlc-xxxxx：中国；</li>
<li>emc-xxxxx：海外(全球不含中国)；</li>
精简版(平台级版本)：
<li>plat-gaz-xxxxxx：精简全球版；</li>
<li>plat-mlc-xxxxxx：精简中国版；</li>
<li>plat-emc-xxxxxx：精简海外(全球不含中国)版；</li>
缩写说明：
<li>gaz：Global AZ Availability Zone;</li>
<li>mlc：mainlandChina;</li>
<li>emc：Exclude mainlandChina.</li>
 * @method void setVersion(string $Version) 设置源站防护版本号。
格式说明：
标准版本：
<li>gaz-xxxxx：全球；</li>
<li>mlc-xxxxx：中国；</li>
<li>emc-xxxxx：海外(全球不含中国)；</li>
精简版(平台级版本)：
<li>plat-gaz-xxxxxx：精简全球版；</li>
<li>plat-mlc-xxxxxx：精简中国版；</li>
<li>plat-emc-xxxxxx：精简海外(全球不含中国)版；</li>
缩写说明：
<li>gaz：Global AZ Availability Zone;</li>
<li>mlc：mainlandChina;</li>
<li>emc：Exclude mainlandChina.</li>
 * @method string getActiveTime() 获取版本生效时间，时间是北京时间 UTC+8， 遵循 ISO 8601 标准的日期和时间格式。
 * @method void setActiveTime(string $ActiveTime) 设置版本生效时间，时间是北京时间 UTC+8， 遵循 ISO 8601 标准的日期和时间格式。
 * @method Addresses getEntireAddresses() 获取回源 IP 网段详情。	
 * @method void setEntireAddresses(Addresses $EntireAddresses) 设置回源 IP 网段详情。	
 * @method string getOriginACLFamily() 获取源站防护回源ACL控制域。取值说明如下：
<li>gaz：标准全球可用区控制域；</li>
<li>mlc：标准中国大陆可用区控制域；</li>
<li>emc：标准全球(不含中国大陆)可用区控制域；</li>
<li>plat-gaz：精简全球可用区控制域；</li>
<li>plat-mlc：精简中国大陆可用区控制域；</li>
<li>plat-emc：精简全球(不含中国大陆)可用区控制域；</li>
 * @method void setOriginACLFamily(string $OriginACLFamily) 设置源站防护回源ACL控制域。取值说明如下：
<li>gaz：标准全球可用区控制域；</li>
<li>mlc：标准中国大陆可用区控制域；</li>
<li>emc：标准全球(不含中国大陆)可用区控制域；</li>
<li>plat-gaz：精简全球可用区控制域；</li>
<li>plat-mlc：精简中国大陆可用区控制域；</li>
<li>plat-emc：精简全球(不含中国大陆)可用区控制域；</li>
 */
class OriginACLFamilyInfo extends AbstractModel
{
    /**
     * @var string 源站防护版本号。
格式说明：
标准版本：
<li>gaz-xxxxx：全球；</li>
<li>mlc-xxxxx：中国；</li>
<li>emc-xxxxx：海外(全球不含中国)；</li>
精简版(平台级版本)：
<li>plat-gaz-xxxxxx：精简全球版；</li>
<li>plat-mlc-xxxxxx：精简中国版；</li>
<li>plat-emc-xxxxxx：精简海外(全球不含中国)版；</li>
缩写说明：
<li>gaz：Global AZ Availability Zone;</li>
<li>mlc：mainlandChina;</li>
<li>emc：Exclude mainlandChina.</li>
     */
    public $Version;

    /**
     * @var string 版本生效时间，时间是北京时间 UTC+8， 遵循 ISO 8601 标准的日期和时间格式。
     */
    public $ActiveTime;

    /**
     * @var Addresses 回源 IP 网段详情。	
     */
    public $EntireAddresses;

    /**
     * @var string 源站防护回源ACL控制域。取值说明如下：
<li>gaz：标准全球可用区控制域；</li>
<li>mlc：标准中国大陆可用区控制域；</li>
<li>emc：标准全球(不含中国大陆)可用区控制域；</li>
<li>plat-gaz：精简全球可用区控制域；</li>
<li>plat-mlc：精简中国大陆可用区控制域；</li>
<li>plat-emc：精简全球(不含中国大陆)可用区控制域；</li>
     */
    public $OriginACLFamily;

    /**
     * @param string $Version 源站防护版本号。
格式说明：
标准版本：
<li>gaz-xxxxx：全球；</li>
<li>mlc-xxxxx：中国；</li>
<li>emc-xxxxx：海外(全球不含中国)；</li>
精简版(平台级版本)：
<li>plat-gaz-xxxxxx：精简全球版；</li>
<li>plat-mlc-xxxxxx：精简中国版；</li>
<li>plat-emc-xxxxxx：精简海外(全球不含中国)版；</li>
缩写说明：
<li>gaz：Global AZ Availability Zone;</li>
<li>mlc：mainlandChina;</li>
<li>emc：Exclude mainlandChina.</li>
     * @param string $ActiveTime 版本生效时间，时间是北京时间 UTC+8， 遵循 ISO 8601 标准的日期和时间格式。
     * @param Addresses $EntireAddresses 回源 IP 网段详情。	
     * @param string $OriginACLFamily 源站防护回源ACL控制域。取值说明如下：
<li>gaz：标准全球可用区控制域；</li>
<li>mlc：标准中国大陆可用区控制域；</li>
<li>emc：标准全球(不含中国大陆)可用区控制域；</li>
<li>plat-gaz：精简全球可用区控制域；</li>
<li>plat-mlc：精简中国大陆可用区控制域；</li>
<li>plat-emc：精简全球(不含中国大陆)可用区控制域；</li>
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
        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("ActiveTime",$param) and $param["ActiveTime"] !== null) {
            $this->ActiveTime = $param["ActiveTime"];
        }

        if (array_key_exists("EntireAddresses",$param) and $param["EntireAddresses"] !== null) {
            $this->EntireAddresses = new Addresses();
            $this->EntireAddresses->deserialize($param["EntireAddresses"]);
        }

        if (array_key_exists("OriginACLFamily",$param) and $param["OriginACLFamily"] !== null) {
            $this->OriginACLFamily = $param["OriginACLFamily"];
        }
    }
}
