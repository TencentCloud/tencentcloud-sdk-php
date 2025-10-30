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
 * DescribeL4Proxy请求参数结构体
 *
 * @method string getZoneId() 获取四层代理实例所属站点的 ID。
 * @method void setZoneId(string $ZoneId) 设置四层代理实例所属站点的 ID。
 * @method integer getOffset() 获取分页查询偏移量，不填写时默认为 0。
 * @method void setOffset(integer $Offset) 设置分页查询偏移量，不填写时默认为 0。
 * @method integer getLimit() 获取分页查询限制数目。默认值：20，最大值：1000。	
 * @method void setLimit(integer $Limit) 设置分页查询限制数目。默认值：20，最大值：1000。	
 * @method array getFilters() 获取过滤条件，Filters.Values 的上限为 20。该参数不填写时，返回当前 zone-id 下所有四层代理实例信息。详细的过滤条件如下：
<li>proxy-id：按照四层代理实例 ID 进行过滤；</li>
<li>ddos-protection-type：按照安全防护类型进行过滤。</li>


 * @method void setFilters(array $Filters) 设置过滤条件，Filters.Values 的上限为 20。该参数不填写时，返回当前 zone-id 下所有四层代理实例信息。详细的过滤条件如下：
<li>proxy-id：按照四层代理实例 ID 进行过滤；</li>
<li>ddos-protection-type：按照安全防护类型进行过滤。</li>
 */
class DescribeL4ProxyRequest extends AbstractModel
{
    /**
     * @var string 四层代理实例所属站点的 ID。
     */
    public $ZoneId;

    /**
     * @var integer 分页查询偏移量，不填写时默认为 0。
     */
    public $Offset;

    /**
     * @var integer 分页查询限制数目。默认值：20，最大值：1000。	
     */
    public $Limit;

    /**
     * @var array 过滤条件，Filters.Values 的上限为 20。该参数不填写时，返回当前 zone-id 下所有四层代理实例信息。详细的过滤条件如下：
<li>proxy-id：按照四层代理实例 ID 进行过滤；</li>
<li>ddos-protection-type：按照安全防护类型进行过滤。</li>


     */
    public $Filters;

    /**
     * @param string $ZoneId 四层代理实例所属站点的 ID。
     * @param integer $Offset 分页查询偏移量，不填写时默认为 0。
     * @param integer $Limit 分页查询限制数目。默认值：20，最大值：1000。	
     * @param array $Filters 过滤条件，Filters.Values 的上限为 20。该参数不填写时，返回当前 zone-id 下所有四层代理实例信息。详细的过滤条件如下：
<li>proxy-id：按照四层代理实例 ID 进行过滤；</li>
<li>ddos-protection-type：按照安全防护类型进行过滤。</li>
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

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
