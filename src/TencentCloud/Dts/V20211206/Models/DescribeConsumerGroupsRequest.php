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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeConsumerGroups请求参数结构体
 *
 * @method string getSubscribeId() 获取订阅实例id，可通过[DescribeSubscribeJobs](https://cloud.tencent.com/document/product/571/102943)接口获取。
 * @method void setSubscribeId(string $SubscribeId) 设置订阅实例id，可通过[DescribeSubscribeJobs](https://cloud.tencent.com/document/product/571/102943)接口获取。
 * @method integer getOffset() 获取返回记录的起始偏移量。默认0
 * @method void setOffset(integer $Offset) 设置返回记录的起始偏移量。默认0
 * @method integer getLimit() 获取单次返回的记录数量。默认10
 * @method void setLimit(integer $Limit) 设置单次返回的记录数量。默认10
 */
class DescribeConsumerGroupsRequest extends AbstractModel
{
    /**
     * @var string 订阅实例id，可通过[DescribeSubscribeJobs](https://cloud.tencent.com/document/product/571/102943)接口获取。
     */
    public $SubscribeId;

    /**
     * @var integer 返回记录的起始偏移量。默认0
     */
    public $Offset;

    /**
     * @var integer 单次返回的记录数量。默认10
     */
    public $Limit;

    /**
     * @param string $SubscribeId 订阅实例id，可通过[DescribeSubscribeJobs](https://cloud.tencent.com/document/product/571/102943)接口获取。
     * @param integer $Offset 返回记录的起始偏移量。默认0
     * @param integer $Limit 单次返回的记录数量。默认10
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
        if (array_key_exists("SubscribeId",$param) and $param["SubscribeId"] !== null) {
            $this->SubscribeId = $param["SubscribeId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
