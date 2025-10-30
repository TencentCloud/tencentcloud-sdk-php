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
 * DescribeAutomationAgentStatus请求参数结构体
 *
 * @method array getInstanceIds() 获取待查询的实例ID列表。

可通过对应云产品的查询实例接口获取实例 ID。目前支持实例类型：CVM、Lighthouse、TAT 托管实例。

每次请求的上限为 100。

参数不支持同时指定 `InstanceIds ` 和 `Filters ` 。
 * @method void setInstanceIds(array $InstanceIds) 设置待查询的实例ID列表。

可通过对应云产品的查询实例接口获取实例 ID。目前支持实例类型：CVM、Lighthouse、TAT 托管实例。

每次请求的上限为 100。

参数不支持同时指定 `InstanceIds ` 和 `Filters ` 。
 * @method array getFilters() 获取- agent-status - String - 是否必填：否 -（过滤条件）按照agent状态过滤，取值：Online 在线，Offline 离线。 
- environment - String - 是否必填：否 -（过滤条件）按照agent运行环境查询，取值：Linux, Windows。
- instance-id - String - 是否必填：否 -（过滤条件）按照实例ID过滤。 可通过对应云产品的查询实例接口获取实例 ID。目前支持实例类型：CVM、Lighthouse、TAT 托管实例。

每次请求的 `Filters` 的上限为10， `Filter.Values` 的上限为5。参数不支持同时指定 `InstanceIds ` 和 `Filters ` 。
 * @method void setFilters(array $Filters) 设置- agent-status - String - 是否必填：否 -（过滤条件）按照agent状态过滤，取值：Online 在线，Offline 离线。 
- environment - String - 是否必填：否 -（过滤条件）按照agent运行环境查询，取值：Linux, Windows。
- instance-id - String - 是否必填：否 -（过滤条件）按照实例ID过滤。 可通过对应云产品的查询实例接口获取实例 ID。目前支持实例类型：CVM、Lighthouse、TAT 托管实例。

每次请求的 `Filters` 的上限为10， `Filter.Values` 的上限为5。参数不支持同时指定 `InstanceIds ` 和 `Filters ` 。
 * @method integer getLimit() 获取返回数量，默认为20，最大值为100。关于 `Limit` 的更进一步介绍请参考 API [简介](https://cloud.tencent.com/document/api/213/15688)中的相关小节。
 * @method void setLimit(integer $Limit) 设置返回数量，默认为20，最大值为100。关于 `Limit` 的更进一步介绍请参考 API [简介](https://cloud.tencent.com/document/api/213/15688)中的相关小节。
 * @method integer getOffset() 获取偏移量，默认为0。关于 `Offset` 的更进一步介绍请参考 API [简介](https://cloud.tencent.com/document/api/213/15688)中的相关小节。
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0。关于 `Offset` 的更进一步介绍请参考 API [简介](https://cloud.tencent.com/document/api/213/15688)中的相关小节。
 */
class DescribeAutomationAgentStatusRequest extends AbstractModel
{
    /**
     * @var array 待查询的实例ID列表。

可通过对应云产品的查询实例接口获取实例 ID。目前支持实例类型：CVM、Lighthouse、TAT 托管实例。

每次请求的上限为 100。

参数不支持同时指定 `InstanceIds ` 和 `Filters ` 。
     */
    public $InstanceIds;

    /**
     * @var array - agent-status - String - 是否必填：否 -（过滤条件）按照agent状态过滤，取值：Online 在线，Offline 离线。 
- environment - String - 是否必填：否 -（过滤条件）按照agent运行环境查询，取值：Linux, Windows。
- instance-id - String - 是否必填：否 -（过滤条件）按照实例ID过滤。 可通过对应云产品的查询实例接口获取实例 ID。目前支持实例类型：CVM、Lighthouse、TAT 托管实例。

每次请求的 `Filters` 的上限为10， `Filter.Values` 的上限为5。参数不支持同时指定 `InstanceIds ` 和 `Filters ` 。
     */
    public $Filters;

    /**
     * @var integer 返回数量，默认为20，最大值为100。关于 `Limit` 的更进一步介绍请参考 API [简介](https://cloud.tencent.com/document/api/213/15688)中的相关小节。
     */
    public $Limit;

    /**
     * @var integer 偏移量，默认为0。关于 `Offset` 的更进一步介绍请参考 API [简介](https://cloud.tencent.com/document/api/213/15688)中的相关小节。
     */
    public $Offset;

    /**
     * @param array $InstanceIds 待查询的实例ID列表。

可通过对应云产品的查询实例接口获取实例 ID。目前支持实例类型：CVM、Lighthouse、TAT 托管实例。

每次请求的上限为 100。

参数不支持同时指定 `InstanceIds ` 和 `Filters ` 。
     * @param array $Filters - agent-status - String - 是否必填：否 -（过滤条件）按照agent状态过滤，取值：Online 在线，Offline 离线。 
- environment - String - 是否必填：否 -（过滤条件）按照agent运行环境查询，取值：Linux, Windows。
- instance-id - String - 是否必填：否 -（过滤条件）按照实例ID过滤。 可通过对应云产品的查询实例接口获取实例 ID。目前支持实例类型：CVM、Lighthouse、TAT 托管实例。

每次请求的 `Filters` 的上限为10， `Filter.Values` 的上限为5。参数不支持同时指定 `InstanceIds ` 和 `Filters ` 。
     * @param integer $Limit 返回数量，默认为20，最大值为100。关于 `Limit` 的更进一步介绍请参考 API [简介](https://cloud.tencent.com/document/api/213/15688)中的相关小节。
     * @param integer $Offset 偏移量，默认为0。关于 `Offset` 的更进一步介绍请参考 API [简介](https://cloud.tencent.com/document/api/213/15688)中的相关小节。
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

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
