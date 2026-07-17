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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInferenceServiceDeploymentRecords请求参数结构体
 *
 * @method string getZoneId() 获取<p>站点 ID。</p>
 * @method void setZoneId(string $ZoneId) 设置<p>站点 ID。</p>
 * @method string getServiceId() 获取<p>推理服务 ID。</p>
 * @method void setServiceId(string $ServiceId) 设置<p>推理服务 ID。</p>
 * @method string getSortBy() 获取<p>排序字段，取值有：<li>create-time：部署创建时间。</li>默认值为：create-time。</p>
 * @method void setSortBy(string $SortBy) 设置<p>排序字段，取值有：<li>create-time：部署创建时间。</li>默认值为：create-time。</p>
 * @method string getSortOrder() 获取<p>排序方式，取值有：<li>asc：升序方式；</li><li>desc：降序方式。</li>默认值为：desc。</p>
 * @method void setSortOrder(string $SortOrder) 设置<p>排序方式，取值有：<li>asc：升序方式；</li><li>desc：降序方式。</li>默认值为：desc。</p>
 * @method integer getOffset() 获取<p>分页偏移量，默认值：0。</p>
 * @method void setOffset(integer $Offset) 设置<p>分页偏移量，默认值：0。</p>
 * @method integer getLimit() 获取<p>返回记录条数，默认值：20，最大值：100。</p>
 * @method void setLimit(integer $Limit) 设置<p>返回记录条数，默认值：20，最大值：100。</p>
 */
class DescribeInferenceServiceDeploymentRecordsRequest extends AbstractModel
{
    /**
     * @var string <p>站点 ID。</p>
     */
    public $ZoneId;

    /**
     * @var string <p>推理服务 ID。</p>
     */
    public $ServiceId;

    /**
     * @var string <p>排序字段，取值有：<li>create-time：部署创建时间。</li>默认值为：create-time。</p>
     */
    public $SortBy;

    /**
     * @var string <p>排序方式，取值有：<li>asc：升序方式；</li><li>desc：降序方式。</li>默认值为：desc。</p>
     */
    public $SortOrder;

    /**
     * @var integer <p>分页偏移量，默认值：0。</p>
     */
    public $Offset;

    /**
     * @var integer <p>返回记录条数，默认值：20，最大值：100。</p>
     */
    public $Limit;

    /**
     * @param string $ZoneId <p>站点 ID。</p>
     * @param string $ServiceId <p>推理服务 ID。</p>
     * @param string $SortBy <p>排序字段，取值有：<li>create-time：部署创建时间。</li>默认值为：create-time。</p>
     * @param string $SortOrder <p>排序方式，取值有：<li>asc：升序方式；</li><li>desc：降序方式。</li>默认值为：desc。</p>
     * @param integer $Offset <p>分页偏移量，默认值：0。</p>
     * @param integer $Limit <p>返回记录条数，默认值：20，最大值：100。</p>
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("SortBy",$param) and $param["SortBy"] !== null) {
            $this->SortBy = $param["SortBy"];
        }

        if (array_key_exists("SortOrder",$param) and $param["SortOrder"] !== null) {
            $this->SortOrder = $param["SortOrder"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
