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
namespace TencentCloud\Ctem\V20231128\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSeeds请求参数结构体
 *
 * @method integer getCustomerId() 获取企业ID
 * @method void setCustomerId(integer $CustomerId) 设置企业ID
 * @method string getCreateAtStart() 获取创建时间-开始
 * @method void setCreateAtStart(string $CreateAtStart) 设置创建时间-开始
 * @method string getCreateAtEnd() 获取创建时间-结束
 * @method void setCreateAtEnd(string $CreateAtEnd) 设置创建时间-结束
 * @method integer getOffset() 获取分页偏移
 * @method void setOffset(integer $Offset) 设置分页偏移
 * @method integer getLimit() 获取分页大小
 * @method void setLimit(integer $Limit) 设置分页大小
 * @method array getFilters() 获取查询数组
 * @method void setFilters(array $Filters) 设置查询数组
 */
class DescribeSeedsRequest extends AbstractModel
{
    /**
     * @var integer 企业ID
     */
    public $CustomerId;

    /**
     * @var string 创建时间-开始
     */
    public $CreateAtStart;

    /**
     * @var string 创建时间-结束
     */
    public $CreateAtEnd;

    /**
     * @var integer 分页偏移
     */
    public $Offset;

    /**
     * @var integer 分页大小
     */
    public $Limit;

    /**
     * @var array 查询数组
     */
    public $Filters;

    /**
     * @param integer $CustomerId 企业ID
     * @param string $CreateAtStart 创建时间-开始
     * @param string $CreateAtEnd 创建时间-结束
     * @param integer $Offset 分页偏移
     * @param integer $Limit 分页大小
     * @param array $Filters 查询数组
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
        if (array_key_exists("CustomerId",$param) and $param["CustomerId"] !== null) {
            $this->CustomerId = $param["CustomerId"];
        }

        if (array_key_exists("CreateAtStart",$param) and $param["CreateAtStart"] !== null) {
            $this->CreateAtStart = $param["CreateAtStart"];
        }

        if (array_key_exists("CreateAtEnd",$param) and $param["CreateAtEnd"] !== null) {
            $this->CreateAtEnd = $param["CreateAtEnd"];
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
    }
}
