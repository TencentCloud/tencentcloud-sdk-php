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
namespace TencentCloud\Rum\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeIssueEvents请求参数结构体
 *
 * @method string getAppId() 获取应用 ID
 * @method void setAppId(string $AppId) 设置应用 ID
 * @method string getIssueId() 获取Issue ID
 * @method void setIssueId(string $IssueId) 设置Issue ID
 * @method integer getStartTime() 获取开始时间，Unix 毫秒时间戳
 * @method void setStartTime(integer $StartTime) 设置开始时间，Unix 毫秒时间戳
 * @method integer getEndTime() 获取结束时间，Unix 毫秒时间戳
 * @method void setEndTime(integer $EndTime) 设置结束时间，Unix 毫秒时间戳
 * @method string getKeyword() 获取事件关键字过滤
 * @method void setKeyword(string $Keyword) 设置事件关键字过滤
 * @method string getFilters() 获取扩展过滤器 JSON 字符串；白名单字段包括 app_version、country、province、city、device_type、browser、os、isp、referrer、user_type、platform、normalized_page_url、event_type、issue_id、environment、process_type
 * @method void setFilters(string $Filters) 设置扩展过滤器 JSON 字符串；白名单字段包括 app_version、country、province、city、device_type、browser、os、isp、referrer、user_type、platform、normalized_page_url、event_type、issue_id、environment、process_type
 * @method integer getPage() 获取页码，默认 1
 * @method void setPage(integer $Page) 设置页码，默认 1
 * @method integer getPageSize() 获取分页大小，默认 20，范围 1~100
 * @method void setPageSize(integer $PageSize) 设置分页大小，默认 20，范围 1~100
 * @method string getSortOrder() 获取排序方向，可选值：asc、desc
 * @method void setSortOrder(string $SortOrder) 设置排序方向，可选值：asc、desc
 */
class DescribeIssueEventsRequest extends AbstractModel
{
    /**
     * @var string 应用 ID
     */
    public $AppId;

    /**
     * @var string Issue ID
     */
    public $IssueId;

    /**
     * @var integer 开始时间，Unix 毫秒时间戳
     */
    public $StartTime;

    /**
     * @var integer 结束时间，Unix 毫秒时间戳
     */
    public $EndTime;

    /**
     * @var string 事件关键字过滤
     */
    public $Keyword;

    /**
     * @var string 扩展过滤器 JSON 字符串；白名单字段包括 app_version、country、province、city、device_type、browser、os、isp、referrer、user_type、platform、normalized_page_url、event_type、issue_id、environment、process_type
     */
    public $Filters;

    /**
     * @var integer 页码，默认 1
     */
    public $Page;

    /**
     * @var integer 分页大小，默认 20，范围 1~100
     */
    public $PageSize;

    /**
     * @var string 排序方向，可选值：asc、desc
     */
    public $SortOrder;

    /**
     * @param string $AppId 应用 ID
     * @param string $IssueId Issue ID
     * @param integer $StartTime 开始时间，Unix 毫秒时间戳
     * @param integer $EndTime 结束时间，Unix 毫秒时间戳
     * @param string $Keyword 事件关键字过滤
     * @param string $Filters 扩展过滤器 JSON 字符串；白名单字段包括 app_version、country、province、city、device_type、browser、os、isp、referrer、user_type、platform、normalized_page_url、event_type、issue_id、environment、process_type
     * @param integer $Page 页码，默认 1
     * @param integer $PageSize 分页大小，默认 20，范围 1~100
     * @param string $SortOrder 排序方向，可选值：asc、desc
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("IssueId",$param) and $param["IssueId"] !== null) {
            $this->IssueId = $param["IssueId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = $param["Filters"];
        }

        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            $this->Page = $param["Page"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("SortOrder",$param) and $param["SortOrder"] !== null) {
            $this->SortOrder = $param["SortOrder"];
        }
    }
}
