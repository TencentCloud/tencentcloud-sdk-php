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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDashboards请求参数结构体
 *
 * @method integer getOffset() 获取分页的偏移量，默认值为0。
 * @method void setOffset(integer $Offset) 设置分页的偏移量，默认值为0。
 * @method integer getLimit() 获取分页单页限制数目，默认值为20，最大值100。
 * @method void setLimit(integer $Limit) 设置分页单页限制数目，默认值为20，最大值100。
 * @method array getFilters() 获取- dashboardId 按照【仪表盘id】进行过滤，类型：String， 必选：否。
- dashboardName 按照【仪表盘名字】进行模糊搜索过滤，类型：String，必选：否。
- dashboardRegion 按照【仪表盘地域】进行过滤，为了兼容老的仪表盘，通过云API创建的仪表盘没有地域属性，类型：String，必选：否。
- tagKey 按照【标签键】进行过滤，类型：String，必选：否。
- tag:tagKey 按照【标签键值对】进行过滤。tagKey使用具体的标签键进行替换，类型：String，必选：否，使用请参考[示例2](https://cloud.tencent.com/document/api/614/95636#4.-.E7.A4.BA.E4.BE.8B)。

每次请求的Filters的上限为10，Filter.Values的上限为100。
 * @method void setFilters(array $Filters) 设置- dashboardId 按照【仪表盘id】进行过滤，类型：String， 必选：否。
- dashboardName 按照【仪表盘名字】进行模糊搜索过滤，类型：String，必选：否。
- dashboardRegion 按照【仪表盘地域】进行过滤，为了兼容老的仪表盘，通过云API创建的仪表盘没有地域属性，类型：String，必选：否。
- tagKey 按照【标签键】进行过滤，类型：String，必选：否。
- tag:tagKey 按照【标签键值对】进行过滤。tagKey使用具体的标签键进行替换，类型：String，必选：否，使用请参考[示例2](https://cloud.tencent.com/document/api/614/95636#4.-.E7.A4.BA.E4.BE.8B)。

每次请求的Filters的上限为10，Filter.Values的上限为100。
 * @method array getTopicIdRegionFilter() 获取按照topicId和regionId过滤。
 * @method void setTopicIdRegionFilter(array $TopicIdRegionFilter) 设置按照topicId和regionId过滤。
 */
class DescribeDashboardsRequest extends AbstractModel
{
    /**
     * @var integer 分页的偏移量，默认值为0。
     */
    public $Offset;

    /**
     * @var integer 分页单页限制数目，默认值为20，最大值100。
     */
    public $Limit;

    /**
     * @var array - dashboardId 按照【仪表盘id】进行过滤，类型：String， 必选：否。
- dashboardName 按照【仪表盘名字】进行模糊搜索过滤，类型：String，必选：否。
- dashboardRegion 按照【仪表盘地域】进行过滤，为了兼容老的仪表盘，通过云API创建的仪表盘没有地域属性，类型：String，必选：否。
- tagKey 按照【标签键】进行过滤，类型：String，必选：否。
- tag:tagKey 按照【标签键值对】进行过滤。tagKey使用具体的标签键进行替换，类型：String，必选：否，使用请参考[示例2](https://cloud.tencent.com/document/api/614/95636#4.-.E7.A4.BA.E4.BE.8B)。

每次请求的Filters的上限为10，Filter.Values的上限为100。
     */
    public $Filters;

    /**
     * @var array 按照topicId和regionId过滤。
     */
    public $TopicIdRegionFilter;

    /**
     * @param integer $Offset 分页的偏移量，默认值为0。
     * @param integer $Limit 分页单页限制数目，默认值为20，最大值100。
     * @param array $Filters - dashboardId 按照【仪表盘id】进行过滤，类型：String， 必选：否。
- dashboardName 按照【仪表盘名字】进行模糊搜索过滤，类型：String，必选：否。
- dashboardRegion 按照【仪表盘地域】进行过滤，为了兼容老的仪表盘，通过云API创建的仪表盘没有地域属性，类型：String，必选：否。
- tagKey 按照【标签键】进行过滤，类型：String，必选：否。
- tag:tagKey 按照【标签键值对】进行过滤。tagKey使用具体的标签键进行替换，类型：String，必选：否，使用请参考[示例2](https://cloud.tencent.com/document/api/614/95636#4.-.E7.A4.BA.E4.BE.8B)。

每次请求的Filters的上限为10，Filter.Values的上限为100。
     * @param array $TopicIdRegionFilter 按照topicId和regionId过滤。
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

        if (array_key_exists("TopicIdRegionFilter",$param) and $param["TopicIdRegionFilter"] !== null) {
            $this->TopicIdRegionFilter = [];
            foreach ($param["TopicIdRegionFilter"] as $key => $value){
                $obj = new TopicIdAndRegion();
                $obj->deserialize($value);
                array_push($this->TopicIdRegionFilter, $obj);
            }
        }
    }
}
