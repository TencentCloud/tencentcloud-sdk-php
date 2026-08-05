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
 * @method string getSubscribeId() 获取<p>订阅实例id，可通过<a href="https://cloud.tencent.com/document/product/571/102943">DescribeSubscribeJobs</a>接口获取。</p>
 * @method void setSubscribeId(string $SubscribeId) 设置<p>订阅实例id，可通过<a href="https://cloud.tencent.com/document/product/571/102943">DescribeSubscribeJobs</a>接口获取。</p>
 * @method integer getOffset() 获取<p>返回记录的起始偏移量。默认0</p>
 * @method void setOffset(integer $Offset) 设置<p>返回记录的起始偏移量。默认0</p>
 * @method integer getLimit() 获取<p>单次返回的记录数量。默认10</p>
 * @method void setLimit(integer $Limit) 设置<p>单次返回的记录数量。默认10</p>
 */
class DescribeConsumerGroupsRequest extends AbstractModel
{
    /**
     * @var string <p>订阅实例id，可通过<a href="https://cloud.tencent.com/document/product/571/102943">DescribeSubscribeJobs</a>接口获取。</p>
     */
    public $SubscribeId;

    /**
     * @var integer <p>返回记录的起始偏移量。默认0</p>
     */
    public $Offset;

    /**
     * @var integer <p>单次返回的记录数量。默认10</p>
     */
    public $Limit;

    /**
     * @param string $SubscribeId <p>订阅实例id，可通过<a href="https://cloud.tencent.com/document/product/571/102943">DescribeSubscribeJobs</a>接口获取。</p>
     * @param integer $Offset <p>返回记录的起始偏移量。默认0</p>
     * @param integer $Limit <p>单次返回的记录数量。默认10</p>
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
