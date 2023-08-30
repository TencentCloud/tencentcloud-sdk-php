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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTagList请求参数结构体
 *
 * @method integer getLimit() 获取分页偏移量，Offset=0表示第一页，如果Limit=100，则Offset=100表示第二页，Offset=200表示第三页，依次类推
 * @method void setLimit(integer $Limit) 设置分页偏移量，Offset=0表示第一页，如果Limit=100，则Offset=100表示第二页，Offset=200表示第三页，依次类推
 * @method integer getOffset() 获取数量，最大值为1000
 * @method void setOffset(integer $Offset) 设置数量，最大值为1000
 * @method string getTagKey() 获取分账标签键，用作模糊搜索
 * @method void setTagKey(string $TagKey) 设置分账标签键，用作模糊搜索
 * @method integer getStatus() 获取标签类型，枚举值：0普通标签，1分账标签，用作筛选，不传获取全部标签键
 * @method void setStatus(integer $Status) 设置标签类型，枚举值：0普通标签，1分账标签，用作筛选，不传获取全部标签键
 * @method string getOrderType() 获取排序方式，枚举值：asc排升序，desc排降序
 * @method void setOrderType(string $OrderType) 设置排序方式，枚举值：asc排升序，desc排降序
 */
class DescribeTagListRequest extends AbstractModel
{
    /**
     * @var integer 分页偏移量，Offset=0表示第一页，如果Limit=100，则Offset=100表示第二页，Offset=200表示第三页，依次类推
     */
    public $Limit;

    /**
     * @var integer 数量，最大值为1000
     */
    public $Offset;

    /**
     * @var string 分账标签键，用作模糊搜索
     */
    public $TagKey;

    /**
     * @var integer 标签类型，枚举值：0普通标签，1分账标签，用作筛选，不传获取全部标签键
     */
    public $Status;

    /**
     * @var string 排序方式，枚举值：asc排升序，desc排降序
     */
    public $OrderType;

    /**
     * @param integer $Limit 分页偏移量，Offset=0表示第一页，如果Limit=100，则Offset=100表示第二页，Offset=200表示第三页，依次类推
     * @param integer $Offset 数量，最大值为1000
     * @param string $TagKey 分账标签键，用作模糊搜索
     * @param integer $Status 标签类型，枚举值：0普通标签，1分账标签，用作筛选，不传获取全部标签键
     * @param string $OrderType 排序方式，枚举值：asc排升序，desc排降序
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
        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("TagKey",$param) and $param["TagKey"] !== null) {
            $this->TagKey = $param["TagKey"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("OrderType",$param) and $param["OrderType"] !== null) {
            $this->OrderType = $param["OrderType"];
        }
    }
}
