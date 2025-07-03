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
namespace TencentCloud\Tat\V20201028\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInvokers请求参数结构体
 *
 * @method array getInvokerIds() 获取执行器 ID 列表。

每次请求的上限为 100。

参数不支持同时指定 `InvokerIds ` 和 `Filters ` 。

 * @method void setInvokerIds(array $InvokerIds) 设置执行器 ID 列表。

每次请求的上限为 100。

参数不支持同时指定 `InvokerIds ` 和 `Filters ` 。

 * @method array getFilters() 获取过滤条件：

- invoker-id - String - 是否必填：否 - （过滤条件）按执行器ID过滤。
- command-id - String - 是否必填：否 - （过滤条件）按命令ID过滤。可通过 [DescribeCommands(查询命令详情)](https://cloud.tencent.com/document/api/1340/52681) 接口获取。
- invoker-type - String - 是否必填：否 - （过滤条件）按执行器类型过滤。目前仅支持 SCHEDULE 一种。

每次请求的 `Filters` 的上限为 10，`Filter.Values` 的上限为 5。参数不支持同时指定 `InvokerIds` 和 `Filters` 。
 * @method void setFilters(array $Filters) 设置过滤条件：

- invoker-id - String - 是否必填：否 - （过滤条件）按执行器ID过滤。
- command-id - String - 是否必填：否 - （过滤条件）按命令ID过滤。可通过 [DescribeCommands(查询命令详情)](https://cloud.tencent.com/document/api/1340/52681) 接口获取。
- invoker-type - String - 是否必填：否 - （过滤条件）按执行器类型过滤。目前仅支持 SCHEDULE 一种。

每次请求的 `Filters` 的上限为 10，`Filter.Values` 的上限为 5。参数不支持同时指定 `InvokerIds` 和 `Filters` 。
 * @method integer getLimit() 获取返回数量，默认为20，最大值为100。
 * @method void setLimit(integer $Limit) 设置返回数量，默认为20，最大值为100。
 * @method integer getOffset() 获取偏移量，默认为0。
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0。
 */
class DescribeInvokersRequest extends AbstractModel
{
    /**
     * @var array 执行器 ID 列表。

每次请求的上限为 100。

参数不支持同时指定 `InvokerIds ` 和 `Filters ` 。

     */
    public $InvokerIds;

    /**
     * @var array 过滤条件：

- invoker-id - String - 是否必填：否 - （过滤条件）按执行器ID过滤。
- command-id - String - 是否必填：否 - （过滤条件）按命令ID过滤。可通过 [DescribeCommands(查询命令详情)](https://cloud.tencent.com/document/api/1340/52681) 接口获取。
- invoker-type - String - 是否必填：否 - （过滤条件）按执行器类型过滤。目前仅支持 SCHEDULE 一种。

每次请求的 `Filters` 的上限为 10，`Filter.Values` 的上限为 5。参数不支持同时指定 `InvokerIds` 和 `Filters` 。
     */
    public $Filters;

    /**
     * @var integer 返回数量，默认为20，最大值为100。
     */
    public $Limit;

    /**
     * @var integer 偏移量，默认为0。
     */
    public $Offset;

    /**
     * @param array $InvokerIds 执行器 ID 列表。

每次请求的上限为 100。

参数不支持同时指定 `InvokerIds ` 和 `Filters ` 。

     * @param array $Filters 过滤条件：

- invoker-id - String - 是否必填：否 - （过滤条件）按执行器ID过滤。
- command-id - String - 是否必填：否 - （过滤条件）按命令ID过滤。可通过 [DescribeCommands(查询命令详情)](https://cloud.tencent.com/document/api/1340/52681) 接口获取。
- invoker-type - String - 是否必填：否 - （过滤条件）按执行器类型过滤。目前仅支持 SCHEDULE 一种。

每次请求的 `Filters` 的上限为 10，`Filter.Values` 的上限为 5。参数不支持同时指定 `InvokerIds` 和 `Filters` 。
     * @param integer $Limit 返回数量，默认为20，最大值为100。
     * @param integer $Offset 偏移量，默认为0。
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
        if (array_key_exists("InvokerIds",$param) and $param["InvokerIds"] !== null) {
            $this->InvokerIds = $param["InvokerIds"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
