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
 * DescribeAvailableOriginACLFamily请求参数结构体
 *
 * @method string getZoneId() 获取<p>站点ID。</p>
 * @method void setZoneId(string $ZoneId) 设置<p>站点ID。</p>
 * @method array getFilters() 获取<p>过滤条件，Filters.Values 的上限为 20。该参数不填写时，返回当前站点下所有可用版本。源站防护的 IP 段控制域包含标准控制域和精简控制域。标准控制域和精简控制域主要区别在于提供的回源 IP 网段数量差异，后者数量更少,但是使用上有限制，如需使用请联系技术支持。具体取值说明如下：<br>详细的过滤条件如下：<br>OriginACLFamily：按照控制域进行过滤；</p><li>gaz：标准全球可用区控制域；</li><li>mlc：标准中国大陆可用区控制域；</li><li>emc：标准全球(不含中国大陆)可用区控制域；</li><li>plat-gaz：精简全球可用区控制域；</li><li>plat-mlc：精简中国大陆可用区控制域；</li><li>plat-emc：精简全球(不含中国大陆)可用区控制域；</li><li>plat-specific-gaz：定制版控全球可用区制域；</li><li>plat-specific-mlc：定制版控中国大陆可用区控制域；</li><li>plat-specific-emc：定制版控全球（不含中国大陆）可用区控制域。</li>
 * @method void setFilters(array $Filters) 设置<p>过滤条件，Filters.Values 的上限为 20。该参数不填写时，返回当前站点下所有可用版本。源站防护的 IP 段控制域包含标准控制域和精简控制域。标准控制域和精简控制域主要区别在于提供的回源 IP 网段数量差异，后者数量更少,但是使用上有限制，如需使用请联系技术支持。具体取值说明如下：<br>详细的过滤条件如下：<br>OriginACLFamily：按照控制域进行过滤；</p><li>gaz：标准全球可用区控制域；</li><li>mlc：标准中国大陆可用区控制域；</li><li>emc：标准全球(不含中国大陆)可用区控制域；</li><li>plat-gaz：精简全球可用区控制域；</li><li>plat-mlc：精简中国大陆可用区控制域；</li><li>plat-emc：精简全球(不含中国大陆)可用区控制域；</li><li>plat-specific-gaz：定制版控全球可用区制域；</li><li>plat-specific-mlc：定制版控中国大陆可用区控制域；</li><li>plat-specific-emc：定制版控全球（不含中国大陆）可用区控制域。</li>
 * @method integer getOffset() 获取<p>分页查询偏移量，默认为 0。</p>
 * @method void setOffset(integer $Offset) 设置<p>分页查询偏移量，默认为 0。</p>
 * @method integer getLimit() 获取<p>分页查询限制数目，默认值：20，最大值：100。</p>
 * @method void setLimit(integer $Limit) 设置<p>分页查询限制数目，默认值：20，最大值：100。</p>
 */
class DescribeAvailableOriginACLFamilyRequest extends AbstractModel
{
    /**
     * @var string <p>站点ID。</p>
     */
    public $ZoneId;

    /**
     * @var array <p>过滤条件，Filters.Values 的上限为 20。该参数不填写时，返回当前站点下所有可用版本。源站防护的 IP 段控制域包含标准控制域和精简控制域。标准控制域和精简控制域主要区别在于提供的回源 IP 网段数量差异，后者数量更少,但是使用上有限制，如需使用请联系技术支持。具体取值说明如下：<br>详细的过滤条件如下：<br>OriginACLFamily：按照控制域进行过滤；</p><li>gaz：标准全球可用区控制域；</li><li>mlc：标准中国大陆可用区控制域；</li><li>emc：标准全球(不含中国大陆)可用区控制域；</li><li>plat-gaz：精简全球可用区控制域；</li><li>plat-mlc：精简中国大陆可用区控制域；</li><li>plat-emc：精简全球(不含中国大陆)可用区控制域；</li><li>plat-specific-gaz：定制版控全球可用区制域；</li><li>plat-specific-mlc：定制版控中国大陆可用区控制域；</li><li>plat-specific-emc：定制版控全球（不含中国大陆）可用区控制域。</li>
     */
    public $Filters;

    /**
     * @var integer <p>分页查询偏移量，默认为 0。</p>
     */
    public $Offset;

    /**
     * @var integer <p>分页查询限制数目，默认值：20，最大值：100。</p>
     */
    public $Limit;

    /**
     * @param string $ZoneId <p>站点ID。</p>
     * @param array $Filters <p>过滤条件，Filters.Values 的上限为 20。该参数不填写时，返回当前站点下所有可用版本。源站防护的 IP 段控制域包含标准控制域和精简控制域。标准控制域和精简控制域主要区别在于提供的回源 IP 网段数量差异，后者数量更少,但是使用上有限制，如需使用请联系技术支持。具体取值说明如下：<br>详细的过滤条件如下：<br>OriginACLFamily：按照控制域进行过滤；</p><li>gaz：标准全球可用区控制域；</li><li>mlc：标准中国大陆可用区控制域；</li><li>emc：标准全球(不含中国大陆)可用区控制域；</li><li>plat-gaz：精简全球可用区控制域；</li><li>plat-mlc：精简中国大陆可用区控制域；</li><li>plat-emc：精简全球(不含中国大陆)可用区控制域；</li><li>plat-specific-gaz：定制版控全球可用区制域；</li><li>plat-specific-mlc：定制版控中国大陆可用区控制域；</li><li>plat-specific-emc：定制版控全球（不含中国大陆）可用区控制域。</li>
     * @param integer $Offset <p>分页查询偏移量，默认为 0。</p>
     * @param integer $Limit <p>分页查询限制数目，默认值：20，最大值：100。</p>
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

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
