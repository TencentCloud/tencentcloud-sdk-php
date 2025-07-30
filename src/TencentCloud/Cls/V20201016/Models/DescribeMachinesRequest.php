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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeMachines请求参数结构体
 *
 * @method string getGroupId() 获取查询的机器组ID。

- 通过[获取机器组列表](https://cloud.tencent.com/document/api/614/56438)获取机器组ID。
 * @method void setGroupId(string $GroupId) 设置查询的机器组ID。

- 通过[获取机器组列表](https://cloud.tencent.com/document/api/614/56438)获取机器组ID。
 * @method array getFilters() 获取ip
- 按照ip进行过滤。
- 类型：String
- 必选：否

instance
- 按照实例id进行过滤。
- 类型：String
- 必选：否

version
- 按照LogListener版本进行过滤。
- 类型：String
- 必选：否

status
- 按照机器状态进行过滤。
- 类型：String
- 必选：否
- 可选值：0：离线，1：正常

offlineTime
- 按照机器离线时间进行过滤。
- 类型：String
- 必选：否
- -可选值：0：无离线时间，12：12小时内，24：一天内，48：两天内，99：两天前

每次请求的Filters的上限为10，Filter.Values的上限为100。
 * @method void setFilters(array $Filters) 设置ip
- 按照ip进行过滤。
- 类型：String
- 必选：否

instance
- 按照实例id进行过滤。
- 类型：String
- 必选：否

version
- 按照LogListener版本进行过滤。
- 类型：String
- 必选：否

status
- 按照机器状态进行过滤。
- 类型：String
- 必选：否
- 可选值：0：离线，1：正常

offlineTime
- 按照机器离线时间进行过滤。
- 类型：String
- 必选：否
- -可选值：0：无离线时间，12：12小时内，24：一天内，48：两天内，99：两天前

每次请求的Filters的上限为10，Filter.Values的上限为100。
 * @method integer getOffset() 获取分页的偏移量。
 * @method void setOffset(integer $Offset) 设置分页的偏移量。
 * @method integer getLimit() 获取分页单页限制数目。最大支持100
 * @method void setLimit(integer $Limit) 设置分页单页限制数目。最大支持100
 */
class DescribeMachinesRequest extends AbstractModel
{
    /**
     * @var string 查询的机器组ID。

- 通过[获取机器组列表](https://cloud.tencent.com/document/api/614/56438)获取机器组ID。
     */
    public $GroupId;

    /**
     * @var array ip
- 按照ip进行过滤。
- 类型：String
- 必选：否

instance
- 按照实例id进行过滤。
- 类型：String
- 必选：否

version
- 按照LogListener版本进行过滤。
- 类型：String
- 必选：否

status
- 按照机器状态进行过滤。
- 类型：String
- 必选：否
- 可选值：0：离线，1：正常

offlineTime
- 按照机器离线时间进行过滤。
- 类型：String
- 必选：否
- -可选值：0：无离线时间，12：12小时内，24：一天内，48：两天内，99：两天前

每次请求的Filters的上限为10，Filter.Values的上限为100。
     */
    public $Filters;

    /**
     * @var integer 分页的偏移量。
     */
    public $Offset;

    /**
     * @var integer 分页单页限制数目。最大支持100
     */
    public $Limit;

    /**
     * @param string $GroupId 查询的机器组ID。

- 通过[获取机器组列表](https://cloud.tencent.com/document/api/614/56438)获取机器组ID。
     * @param array $Filters ip
- 按照ip进行过滤。
- 类型：String
- 必选：否

instance
- 按照实例id进行过滤。
- 类型：String
- 必选：否

version
- 按照LogListener版本进行过滤。
- 类型：String
- 必选：否

status
- 按照机器状态进行过滤。
- 类型：String
- 必选：否
- 可选值：0：离线，1：正常

offlineTime
- 按照机器离线时间进行过滤。
- 类型：String
- 必选：否
- -可选值：0：无离线时间，12：12小时内，24：一天内，48：两天内，99：两天前

每次请求的Filters的上限为10，Filter.Values的上限为100。
     * @param integer $Offset 分页的偏移量。
     * @param integer $Limit 分页单页限制数目。最大支持100
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
        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
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
