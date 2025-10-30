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
 * DescribeConfigGroupVersions请求参数结构体
 *
 * @method string getZoneId() 获取站点 ID。
 * @method void setZoneId(string $ZoneId) 设置站点 ID。
 * @method string getGroupId() 获取配置组 ID。
 * @method void setGroupId(string $GroupId) 设置配置组 ID。
 * @method array getFilters() 获取过滤条件，Filters.Values 的上限为 20，该参数不填写时，返回所选配置组下的所有版本信息。详细的过滤条件如下：
<li>version-id：按照版本 ID 进行过滤；</li>
 * @method void setFilters(array $Filters) 设置过滤条件，Filters.Values 的上限为 20，该参数不填写时，返回所选配置组下的所有版本信息。详细的过滤条件如下：
<li>version-id：按照版本 ID 进行过滤；</li>
 * @method integer getOffset() 获取分页查询偏移量。默认值为 0。
 * @method void setOffset(integer $Offset) 设置分页查询偏移量。默认值为 0。
 * @method integer getLimit() 获取分页查询限制数目。默认值为 20，最大值为 100。 
 * @method void setLimit(integer $Limit) 设置分页查询限制数目。默认值为 20，最大值为 100。 
 */
class DescribeConfigGroupVersionsRequest extends AbstractModel
{
    /**
     * @var string 站点 ID。
     */
    public $ZoneId;

    /**
     * @var string 配置组 ID。
     */
    public $GroupId;

    /**
     * @var array 过滤条件，Filters.Values 的上限为 20，该参数不填写时，返回所选配置组下的所有版本信息。详细的过滤条件如下：
<li>version-id：按照版本 ID 进行过滤；</li>
     */
    public $Filters;

    /**
     * @var integer 分页查询偏移量。默认值为 0。
     */
    public $Offset;

    /**
     * @var integer 分页查询限制数目。默认值为 20，最大值为 100。 
     */
    public $Limit;

    /**
     * @param string $ZoneId 站点 ID。
     * @param string $GroupId 配置组 ID。
     * @param array $Filters 过滤条件，Filters.Values 的上限为 20，该参数不填写时，返回所选配置组下的所有版本信息。详细的过滤条件如下：
<li>version-id：按照版本 ID 进行过滤；</li>
     * @param integer $Offset 分页查询偏移量。默认值为 0。
     * @param integer $Limit 分页查询限制数目。默认值为 20，最大值为 100。 
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

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new AdvancedFilter();
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
