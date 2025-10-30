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
namespace TencentCloud\Gs\V20191118\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAndroidInstancesByApps请求参数结构体
 *
 * @method integer getOffset() 获取偏移量，默认为 0	
 * @method void setOffset(integer $Offset) 设置偏移量，默认为 0	
 * @method integer getLimit() 获取限制量，默认为 20，最大值为 500	
 * @method void setLimit(integer $Limit) 设置限制量，默认为 20，最大值为 500	
 * @method array getAndroidAppIds() 获取应用 ID 列表。当 AndroidIds 为多条数据时（例如 app1, app2），返回的实例列表为：安装了 app1 应用的实例和安装了 app2 应用的实例集合（并集）。
 * @method void setAndroidAppIds(array $AndroidAppIds) 设置应用 ID 列表。当 AndroidIds 为多条数据时（例如 app1, app2），返回的实例列表为：安装了 app1 应用的实例和安装了 app2 应用的实例集合（并集）。
 * @method array getFilters() 获取字段过滤器，Filter 的 Name 有以下值： AndroidInstanceId：实例 Id
 * @method void setFilters(array $Filters) 设置字段过滤器，Filter 的 Name 有以下值： AndroidInstanceId：实例 Id
 */
class DescribeAndroidInstancesByAppsRequest extends AbstractModel
{
    /**
     * @var integer 偏移量，默认为 0	
     */
    public $Offset;

    /**
     * @var integer 限制量，默认为 20，最大值为 500	
     */
    public $Limit;

    /**
     * @var array 应用 ID 列表。当 AndroidIds 为多条数据时（例如 app1, app2），返回的实例列表为：安装了 app1 应用的实例和安装了 app2 应用的实例集合（并集）。
     */
    public $AndroidAppIds;

    /**
     * @var array 字段过滤器，Filter 的 Name 有以下值： AndroidInstanceId：实例 Id
     */
    public $Filters;

    /**
     * @param integer $Offset 偏移量，默认为 0	
     * @param integer $Limit 限制量，默认为 20，最大值为 500	
     * @param array $AndroidAppIds 应用 ID 列表。当 AndroidIds 为多条数据时（例如 app1, app2），返回的实例列表为：安装了 app1 应用的实例和安装了 app2 应用的实例集合（并集）。
     * @param array $Filters 字段过滤器，Filter 的 Name 有以下值： AndroidInstanceId：实例 Id
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

        if (array_key_exists("AndroidAppIds",$param) and $param["AndroidAppIds"] !== null) {
            $this->AndroidAppIds = $param["AndroidAppIds"];
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
