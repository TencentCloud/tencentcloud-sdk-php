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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeVulIgnoreRuleList请求参数结构体
 *
 * @method array getMemberId() 获取<p>集团账号的成员id</p>
 * @method void setMemberId(array $MemberId) 设置<p>集团账号的成员id</p>
 * @method array getFilters() 获取<p>过滤条件，支持以下 Name：</p><li>Keyword - 漏洞名/备注，模糊匹配</li><li>Switch - 开关状态，过滤值：0（关闭）/ 1（开启）</li>
 * @method void setFilters(array $Filters) 设置<p>过滤条件，支持以下 Name：</p><li>Keyword - 漏洞名/备注，模糊匹配</li><li>Switch - 开关状态，过滤值：0（关闭）/ 1（开启）</li>
 * @method integer getLimit() 获取<p>分页大小，默认 10，最大 100</p>
 * @method void setLimit(integer $Limit) 设置<p>分页大小，默认 10，最大 100</p>
 * @method integer getOffset() 获取<p>分页偏移，从 0 开始</p>
 * @method void setOffset(integer $Offset) 设置<p>分页偏移，从 0 开始</p>
 * @method string getOrder() 获取<p>排序方向：asc（升序）/ desc（降序），默认 desc</p>
 * @method void setOrder(string $Order) 设置<p>排序方向：asc（升序）/ desc（降序），默认 desc</p>
 * @method string getBy() 获取<p>排序字段，默认按更新时间（UpdateTime）排序</p>
 * @method void setBy(string $By) 设置<p>排序字段，默认按更新时间（UpdateTime）排序</p>
 */
class DescribeVulIgnoreRuleListRequest extends AbstractModel
{
    /**
     * @var array <p>集团账号的成员id</p>
     */
    public $MemberId;

    /**
     * @var array <p>过滤条件，支持以下 Name：</p><li>Keyword - 漏洞名/备注，模糊匹配</li><li>Switch - 开关状态，过滤值：0（关闭）/ 1（开启）</li>
     */
    public $Filters;

    /**
     * @var integer <p>分页大小，默认 10，最大 100</p>
     */
    public $Limit;

    /**
     * @var integer <p>分页偏移，从 0 开始</p>
     */
    public $Offset;

    /**
     * @var string <p>排序方向：asc（升序）/ desc（降序），默认 desc</p>
     */
    public $Order;

    /**
     * @var string <p>排序字段，默认按更新时间（UpdateTime）排序</p>
     */
    public $By;

    /**
     * @param array $MemberId <p>集团账号的成员id</p>
     * @param array $Filters <p>过滤条件，支持以下 Name：</p><li>Keyword - 漏洞名/备注，模糊匹配</li><li>Switch - 开关状态，过滤值：0（关闭）/ 1（开启）</li>
     * @param integer $Limit <p>分页大小，默认 10，最大 100</p>
     * @param integer $Offset <p>分页偏移，从 0 开始</p>
     * @param string $Order <p>排序方向：asc（升序）/ desc（降序），默认 desc</p>
     * @param string $By <p>排序字段，默认按更新时间（UpdateTime）排序</p>
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
        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filters();
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

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }
    }
}
