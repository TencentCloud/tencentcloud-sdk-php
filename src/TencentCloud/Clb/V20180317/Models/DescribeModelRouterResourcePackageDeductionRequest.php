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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeModelRouterResourcePackageDeduction请求参数结构体
 *
 * @method string getDeductionTimeBegin() 获取<p>抵扣起始时间</p>
 * @method void setDeductionTimeBegin(string $DeductionTimeBegin) 设置<p>抵扣起始时间</p>
 * @method string getDeductionTimeEnd() 获取<p>抵扣截止时间</p>
 * @method void setDeductionTimeEnd(string $DeductionTimeEnd) 设置<p>抵扣截止时间</p>
 * @method string getModelRouterResourcePackageId() 获取<p>模型路由资源包Id</p>
 * @method void setModelRouterResourcePackageId(string $ModelRouterResourcePackageId) 设置<p>模型路由资源包Id</p>
 * @method integer getLimit() 获取<p>返回的数量</p><p>取值范围：[0, 100]</p><p>默认值：20</p>
 * @method void setLimit(integer $Limit) 设置<p>返回的数量</p><p>取值范围：[0, 100]</p><p>默认值：20</p>
 * @method integer getOffset() 获取<p>数据偏移量</p><p>默认值：0</p>
 * @method void setOffset(integer $Offset) 设置<p>数据偏移量</p><p>默认值：0</p>
 * @method string getSortBy() 获取<p>排序方式：asc，desc</p>
 * @method void setSortBy(string $SortBy) 设置<p>排序方式：asc，desc</p>
 */
class DescribeModelRouterResourcePackageDeductionRequest extends AbstractModel
{
    /**
     * @var string <p>抵扣起始时间</p>
     */
    public $DeductionTimeBegin;

    /**
     * @var string <p>抵扣截止时间</p>
     */
    public $DeductionTimeEnd;

    /**
     * @var string <p>模型路由资源包Id</p>
     */
    public $ModelRouterResourcePackageId;

    /**
     * @var integer <p>返回的数量</p><p>取值范围：[0, 100]</p><p>默认值：20</p>
     */
    public $Limit;

    /**
     * @var integer <p>数据偏移量</p><p>默认值：0</p>
     */
    public $Offset;

    /**
     * @var string <p>排序方式：asc，desc</p>
     */
    public $SortBy;

    /**
     * @param string $DeductionTimeBegin <p>抵扣起始时间</p>
     * @param string $DeductionTimeEnd <p>抵扣截止时间</p>
     * @param string $ModelRouterResourcePackageId <p>模型路由资源包Id</p>
     * @param integer $Limit <p>返回的数量</p><p>取值范围：[0, 100]</p><p>默认值：20</p>
     * @param integer $Offset <p>数据偏移量</p><p>默认值：0</p>
     * @param string $SortBy <p>排序方式：asc，desc</p>
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
        if (array_key_exists("DeductionTimeBegin",$param) and $param["DeductionTimeBegin"] !== null) {
            $this->DeductionTimeBegin = $param["DeductionTimeBegin"];
        }

        if (array_key_exists("DeductionTimeEnd",$param) and $param["DeductionTimeEnd"] !== null) {
            $this->DeductionTimeEnd = $param["DeductionTimeEnd"];
        }

        if (array_key_exists("ModelRouterResourcePackageId",$param) and $param["ModelRouterResourcePackageId"] !== null) {
            $this->ModelRouterResourcePackageId = $param["ModelRouterResourcePackageId"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("SortBy",$param) and $param["SortBy"] !== null) {
            $this->SortBy = $param["SortBy"];
        }
    }
}
