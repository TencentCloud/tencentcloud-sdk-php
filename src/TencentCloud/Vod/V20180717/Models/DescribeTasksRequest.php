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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTasks请求参数结构体
 *
 * @method integer getSubAppId() 获取<p><b>点播<a href="/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
 * @method void setSubAppId(integer $SubAppId) 设置<p><b>点播<a href="/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
 * @method string getStatus() 获取<p>过滤条件：任务状态，可选值：WAITING（等待中）、PROCESSING（处理中）、FINISH（已完成）。</p>
 * @method void setStatus(string $Status) 设置<p>过滤条件：任务状态，可选值：WAITING（等待中）、PROCESSING（处理中）、FINISH（已完成）。</p>
 * @method string getFileId() 获取<p>过滤条件：文件 ID。</p>
 * @method void setFileId(string $FileId) 设置<p>过滤条件：文件 ID。</p>
 * @method TimeRange getCreateTime() 获取<p>过滤条件：任务创建时间。</p>
 * @method void setCreateTime(TimeRange $CreateTime) 设置<p>过滤条件：任务创建时间。</p>
 * @method TimeRange getFinishTime() 获取<p>过滤条件：任务结束时间。</p>
 * @method void setFinishTime(TimeRange $FinishTime) 设置<p>过滤条件：任务结束时间。</p>
 * @method SortBy getSort() 获取<p>排序方式。Sort.Field 可选：</p><li> CreateTime 任务创建时间。</li><li>FinishTime 任务结束时间。</li>
 * @method void setSort(SortBy $Sort) 设置<p>排序方式。Sort.Field 可选：</p><li> CreateTime 任务创建时间。</li><li>FinishTime 任务结束时间。</li>
 * @method integer getLimit() 获取<p>返回记录条数，默认值：10，最大值：100。</p>
 * @method void setLimit(integer $Limit) 设置<p>返回记录条数，默认值：10，最大值：100。</p>
 * @method string getScrollToken() 获取<p>翻页标识，分批拉取时使用：当单次请求无法拉取所有数据，接口将会返回 ScrollToken，下一次请求携带该 Token，将会从下一条记录开始获取。</p>
 * @method void setScrollToken(string $ScrollToken) 设置<p>翻页标识，分批拉取时使用：当单次请求无法拉取所有数据，接口将会返回 ScrollToken，下一次请求携带该 Token，将会从下一条记录开始获取。</p>
 */
class DescribeTasksRequest extends AbstractModel
{
    /**
     * @var integer <p><b>点播<a href="/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
     */
    public $SubAppId;

    /**
     * @var string <p>过滤条件：任务状态，可选值：WAITING（等待中）、PROCESSING（处理中）、FINISH（已完成）。</p>
     */
    public $Status;

    /**
     * @var string <p>过滤条件：文件 ID。</p>
     */
    public $FileId;

    /**
     * @var TimeRange <p>过滤条件：任务创建时间。</p>
     */
    public $CreateTime;

    /**
     * @var TimeRange <p>过滤条件：任务结束时间。</p>
     */
    public $FinishTime;

    /**
     * @var SortBy <p>排序方式。Sort.Field 可选：</p><li> CreateTime 任务创建时间。</li><li>FinishTime 任务结束时间。</li>
     */
    public $Sort;

    /**
     * @var integer <p>返回记录条数，默认值：10，最大值：100。</p>
     */
    public $Limit;

    /**
     * @var string <p>翻页标识，分批拉取时使用：当单次请求无法拉取所有数据，接口将会返回 ScrollToken，下一次请求携带该 Token，将会从下一条记录开始获取。</p>
     */
    public $ScrollToken;

    /**
     * @param integer $SubAppId <p><b>点播<a href="/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
     * @param string $Status <p>过滤条件：任务状态，可选值：WAITING（等待中）、PROCESSING（处理中）、FINISH（已完成）。</p>
     * @param string $FileId <p>过滤条件：文件 ID。</p>
     * @param TimeRange $CreateTime <p>过滤条件：任务创建时间。</p>
     * @param TimeRange $FinishTime <p>过滤条件：任务结束时间。</p>
     * @param SortBy $Sort <p>排序方式。Sort.Field 可选：</p><li> CreateTime 任务创建时间。</li><li>FinishTime 任务结束时间。</li>
     * @param integer $Limit <p>返回记录条数，默认值：10，最大值：100。</p>
     * @param string $ScrollToken <p>翻页标识，分批拉取时使用：当单次请求无法拉取所有数据，接口将会返回 ScrollToken，下一次请求携带该 Token，将会从下一条记录开始获取。</p>
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
        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = new TimeRange();
            $this->CreateTime->deserialize($param["CreateTime"]);
        }

        if (array_key_exists("FinishTime",$param) and $param["FinishTime"] !== null) {
            $this->FinishTime = new TimeRange();
            $this->FinishTime->deserialize($param["FinishTime"]);
        }

        if (array_key_exists("Sort",$param) and $param["Sort"] !== null) {
            $this->Sort = new SortBy();
            $this->Sort->deserialize($param["Sort"]);
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("ScrollToken",$param) and $param["ScrollToken"] !== null) {
            $this->ScrollToken = $param["ScrollToken"];
        }
    }
}
