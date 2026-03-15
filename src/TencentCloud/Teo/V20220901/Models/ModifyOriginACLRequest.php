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
 * ModifyOriginACL请求参数结构体
 *
 * @method string getZoneId() 获取站点 ID。
 * @method void setZoneId(string $ZoneId) 设置站点 ID。
 * @method array getOriginACLEntities() 获取需要启用/关闭特定回源 IP 网段回源的实例。
 * @method void setOriginACLEntities(array $OriginACLEntities) 设置需要启用/关闭特定回源 IP 网段回源的实例。
 * @method string getOriginACLFamily() 获取源站防护回源ACL控制域，不填则默认不变；控制域信息可以通过DescribeAvailableOriginACLFamily接口查询获得。
具体取值说明如下：
<li>gaz：标准全球可用区控制域；</li>
<li>mlc：标准中国大陆可用区控制域；</li>
<li>emc：标准全球(不含中国大陆)可用区控制域；</li>
<li>plat-gaz：精简全球可用区控制域；</li>
<li>plat-mlc：精简中国大陆可用区控制域；</li>
<li>plat-emc：精简全球(不含中国大陆)可用区控制域；</li>
 * @method void setOriginACLFamily(string $OriginACLFamily) 设置源站防护回源ACL控制域，不填则默认不变；控制域信息可以通过DescribeAvailableOriginACLFamily接口查询获得。
具体取值说明如下：
<li>gaz：标准全球可用区控制域；</li>
<li>mlc：标准中国大陆可用区控制域；</li>
<li>emc：标准全球(不含中国大陆)可用区控制域；</li>
<li>plat-gaz：精简全球可用区控制域；</li>
<li>plat-mlc：精简中国大陆可用区控制域；</li>
<li>plat-emc：精简全球(不含中国大陆)可用区控制域；</li>
 */
class ModifyOriginACLRequest extends AbstractModel
{
    /**
     * @var string 站点 ID。
     */
    public $ZoneId;

    /**
     * @var array 需要启用/关闭特定回源 IP 网段回源的实例。
     */
    public $OriginACLEntities;

    /**
     * @var string 源站防护回源ACL控制域，不填则默认不变；控制域信息可以通过DescribeAvailableOriginACLFamily接口查询获得。
具体取值说明如下：
<li>gaz：标准全球可用区控制域；</li>
<li>mlc：标准中国大陆可用区控制域；</li>
<li>emc：标准全球(不含中国大陆)可用区控制域；</li>
<li>plat-gaz：精简全球可用区控制域；</li>
<li>plat-mlc：精简中国大陆可用区控制域；</li>
<li>plat-emc：精简全球(不含中国大陆)可用区控制域；</li>
     */
    public $OriginACLFamily;

    /**
     * @param string $ZoneId 站点 ID。
     * @param array $OriginACLEntities 需要启用/关闭特定回源 IP 网段回源的实例。
     * @param string $OriginACLFamily 源站防护回源ACL控制域，不填则默认不变；控制域信息可以通过DescribeAvailableOriginACLFamily接口查询获得。
具体取值说明如下：
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("OriginACLEntities",$param) and $param["OriginACLEntities"] !== null) {
            $this->OriginACLEntities = [];
            foreach ($param["OriginACLEntities"] as $key => $value){
                $obj = new OriginACLEntity();
                $obj->deserialize($value);
                array_push($this->OriginACLEntities, $obj);
            }
        }

        if (array_key_exists("OriginACLFamily",$param) and $param["OriginACLFamily"] !== null) {
            $this->OriginACLFamily = $param["OriginACLFamily"];
        }
    }
}
