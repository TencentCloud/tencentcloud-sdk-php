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
namespace TencentCloud\Tat\V20201028\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRegisterInstances请求参数结构体
 *
 * @method array getInstanceIds() 获取托管实例 id。

每次请求的上限为 100。

参数不支持同时指定 `InstanceIds` 和 `Filters` 。

 * @method void setInstanceIds(array $InstanceIds) 设置托管实例 id。

每次请求的上限为 100。

参数不支持同时指定 `InstanceIds` 和 `Filters` 。

 * @method array getFilters() 获取过滤器列表。每次请求的 `Filters` 的上限为 10，`Filter.Values` 的上限为 5。参数不支持同时指定 `InstanceIds` 和 `Filters` 。


- instance-name

按照【托管实例名称】进行过滤。
类型：String
必选：否

- instance-id

按照【托管实例ID】进行过滤。
类型：String
必选：否

- register-status

按照【托管实例状态】进行过滤，取值：Online | Offline。
类型：String
必选：否

- local-ip

按照【托管实例网卡IP】进行过滤。
类型：String
必选：否

- register-code-id

按照【托管实例注册码ID】进行过滤。可通过 [DescribeRegisterCodes(查询注册码)](https://cloud.tencent.com/document/api/1340/96925) 接口获取。
类型：String
必选：否

- sys-name

按照【操作系统类型】进行过滤，取值：Linux | Windows。
类型：String
必选：否

- tag-key

按照【标签键】进行过滤。
类型：String
必选：否

- tag-value

按照【标签值】进行过滤。
类型：String
必选：否

- tag:tag-key

按照【标签键值对】进行过滤。 tag-key使用具体的标签键进行替换。
类型：String
必选：否

例如 Filter 为 {"Name": "tag:key1", "Values": ["v1", "v2"] } ，即查询所有标签为 key1:v1 或 key1:v2 的资源。


 * @method void setFilters(array $Filters) 设置过滤器列表。每次请求的 `Filters` 的上限为 10，`Filter.Values` 的上限为 5。参数不支持同时指定 `InstanceIds` 和 `Filters` 。


- instance-name

按照【托管实例名称】进行过滤。
类型：String
必选：否

- instance-id

按照【托管实例ID】进行过滤。
类型：String
必选：否

- register-status

按照【托管实例状态】进行过滤，取值：Online | Offline。
类型：String
必选：否

- local-ip

按照【托管实例网卡IP】进行过滤。
类型：String
必选：否

- register-code-id

按照【托管实例注册码ID】进行过滤。可通过 [DescribeRegisterCodes(查询注册码)](https://cloud.tencent.com/document/api/1340/96925) 接口获取。
类型：String
必选：否

- sys-name

按照【操作系统类型】进行过滤，取值：Linux | Windows。
类型：String
必选：否

- tag-key

按照【标签键】进行过滤。
类型：String
必选：否

- tag-value

按照【标签值】进行过滤。
类型：String
必选：否

- tag:tag-key

按照【标签键值对】进行过滤。 tag-key使用具体的标签键进行替换。
类型：String
必选：否

例如 Filter 为 {"Name": "tag:key1", "Values": ["v1", "v2"] } ，即查询所有标签为 key1:v1 或 key1:v2 的资源。


 * @method integer getOffset() 获取偏移量，默认为 0。
 * @method void setOffset(integer $Offset) 设置偏移量，默认为 0。
 * @method integer getLimit() 获取返回数量，默认为 20，最大值为 100。
 * @method void setLimit(integer $Limit) 设置返回数量，默认为 20，最大值为 100。
 */
class DescribeRegisterInstancesRequest extends AbstractModel
{
    /**
     * @var array 托管实例 id。

每次请求的上限为 100。

参数不支持同时指定 `InstanceIds` 和 `Filters` 。

     */
    public $InstanceIds;

    /**
     * @var array 过滤器列表。每次请求的 `Filters` 的上限为 10，`Filter.Values` 的上限为 5。参数不支持同时指定 `InstanceIds` 和 `Filters` 。


- instance-name

按照【托管实例名称】进行过滤。
类型：String
必选：否

- instance-id

按照【托管实例ID】进行过滤。
类型：String
必选：否

- register-status

按照【托管实例状态】进行过滤，取值：Online | Offline。
类型：String
必选：否

- local-ip

按照【托管实例网卡IP】进行过滤。
类型：String
必选：否

- register-code-id

按照【托管实例注册码ID】进行过滤。可通过 [DescribeRegisterCodes(查询注册码)](https://cloud.tencent.com/document/api/1340/96925) 接口获取。
类型：String
必选：否

- sys-name

按照【操作系统类型】进行过滤，取值：Linux | Windows。
类型：String
必选：否

- tag-key

按照【标签键】进行过滤。
类型：String
必选：否

- tag-value

按照【标签值】进行过滤。
类型：String
必选：否

- tag:tag-key

按照【标签键值对】进行过滤。 tag-key使用具体的标签键进行替换。
类型：String
必选：否

例如 Filter 为 {"Name": "tag:key1", "Values": ["v1", "v2"] } ，即查询所有标签为 key1:v1 或 key1:v2 的资源。


     */
    public $Filters;

    /**
     * @var integer 偏移量，默认为 0。
     */
    public $Offset;

    /**
     * @var integer 返回数量，默认为 20，最大值为 100。
     */
    public $Limit;

    /**
     * @param array $InstanceIds 托管实例 id。

每次请求的上限为 100。

参数不支持同时指定 `InstanceIds` 和 `Filters` 。

     * @param array $Filters 过滤器列表。每次请求的 `Filters` 的上限为 10，`Filter.Values` 的上限为 5。参数不支持同时指定 `InstanceIds` 和 `Filters` 。


- instance-name

按照【托管实例名称】进行过滤。
类型：String
必选：否

- instance-id

按照【托管实例ID】进行过滤。
类型：String
必选：否

- register-status

按照【托管实例状态】进行过滤，取值：Online | Offline。
类型：String
必选：否

- local-ip

按照【托管实例网卡IP】进行过滤。
类型：String
必选：否

- register-code-id

按照【托管实例注册码ID】进行过滤。可通过 [DescribeRegisterCodes(查询注册码)](https://cloud.tencent.com/document/api/1340/96925) 接口获取。
类型：String
必选：否

- sys-name

按照【操作系统类型】进行过滤，取值：Linux | Windows。
类型：String
必选：否

- tag-key

按照【标签键】进行过滤。
类型：String
必选：否

- tag-value

按照【标签值】进行过滤。
类型：String
必选：否

- tag:tag-key

按照【标签键值对】进行过滤。 tag-key使用具体的标签键进行替换。
类型：String
必选：否

例如 Filter 为 {"Name": "tag:key1", "Values": ["v1", "v2"] } ，即查询所有标签为 key1:v1 或 key1:v2 的资源。


     * @param integer $Offset 偏移量，默认为 0。
     * @param integer $Limit 返回数量，默认为 20，最大值为 100。
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
        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
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
