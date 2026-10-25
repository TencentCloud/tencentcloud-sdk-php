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
 * DescribeIssues请求参数结构体
 *
 * @method string getAppId() 获取<p>应用 ID</p>
 * @method void setAppId(string $AppId) 设置<p>应用 ID</p>
 * @method integer getStartTime() 获取<p>开始时间，Unix 毫秒时间戳</p>
 * @method void setStartTime(integer $StartTime) 设置<p>开始时间，Unix 毫秒时间戳</p>
 * @method integer getEndTime() 获取<p>结束时间，Unix 毫秒时间戳</p>
 * @method void setEndTime(integer $EndTime) 设置<p>结束时间，Unix 毫秒时间戳</p>
 * @method string getEnv() 获取<p>环境过滤，如 prod、test</p>
 * @method void setEnv(string $Env) 设置<p>环境过滤，如 prod、test</p>
 * @method array getIssueTypes() 获取<p>Issue 类型过滤，可选值：native_crash、js_error、event_loop_block</p>
 * @method void setIssueTypes(array $IssueTypes) 设置<p>Issue 类型过滤，可选值：native_crash、js_error、event_loop_block</p>
 * @method array getStatuses() 获取<p>状态过滤，可选值：Unresolved、Resolved、Ignored、Regressed</p>
 * @method void setStatuses(array $Statuses) 设置<p>状态过滤，可选值：Unresolved、Resolved、Ignored、Regressed</p>
 * @method string getKeyword() 获取<p>Issue 标题或错误关键字模糊搜索</p>
 * @method void setKeyword(string $Keyword) 设置<p>Issue 标题或错误关键字模糊搜索</p>
 * @method string getFilters() 获取<p>扩展过滤器 JSON 字符串；白名单字段包括 app_version、country、province、city、device_type、browser、os、isp、referrer、user_type、platform、normalized_page_url、event_type、issue_id、environment、process_type</p>
 * @method void setFilters(string $Filters) 设置<p>扩展过滤器 JSON 字符串；白名单字段包括 app_version、country、province、city、device_type、browser、os、isp、referrer、user_type、platform、normalized_page_url、event_type、issue_id、environment、process_type</p>
 * @method string getSortBy() 获取<p>排序字段，可选值：last_seen、first_seen、event_count、affected_users</p>
 * @method void setSortBy(string $SortBy) 设置<p>排序字段，可选值：last_seen、first_seen、event_count、affected_users</p>
 * @method string getSortOrder() 获取<p>排序方向，可选值：asc、desc</p>
 * @method void setSortOrder(string $SortOrder) 设置<p>排序方向，可选值：asc、desc</p>
 * @method integer getPage() 获取<p>页码，默认 1</p>
 * @method void setPage(integer $Page) 设置<p>页码，默认 1</p>
 * @method integer getPageSize() 获取<p>分页大小，默认 20，范围 1~100</p>
 * @method void setPageSize(integer $PageSize) 设置<p>分页大小，默认 20，范围 1~100</p>
 */
class DescribeIssuesRequest extends AbstractModel
{
    /**
     * @var string <p>应用 ID</p>
     */
    public $AppId;

    /**
     * @var integer <p>开始时间，Unix 毫秒时间戳</p>
     */
    public $StartTime;

    /**
     * @var integer <p>结束时间，Unix 毫秒时间戳</p>
     */
    public $EndTime;

    /**
     * @var string <p>环境过滤，如 prod、test</p>
     */
    public $Env;

    /**
     * @var array <p>Issue 类型过滤，可选值：native_crash、js_error、event_loop_block</p>
     */
    public $IssueTypes;

    /**
     * @var array <p>状态过滤，可选值：Unresolved、Resolved、Ignored、Regressed</p>
     */
    public $Statuses;

    /**
     * @var string <p>Issue 标题或错误关键字模糊搜索</p>
     */
    public $Keyword;

    /**
     * @var string <p>扩展过滤器 JSON 字符串；白名单字段包括 app_version、country、province、city、device_type、browser、os、isp、referrer、user_type、platform、normalized_page_url、event_type、issue_id、environment、process_type</p>
     */
    public $Filters;

    /**
     * @var string <p>排序字段，可选值：last_seen、first_seen、event_count、affected_users</p>
     */
    public $SortBy;

    /**
     * @var string <p>排序方向，可选值：asc、desc</p>
     */
    public $SortOrder;

    /**
     * @var integer <p>页码，默认 1</p>
     */
    public $Page;

    /**
     * @var integer <p>分页大小，默认 20，范围 1~100</p>
     */
    public $PageSize;

    /**
     * @param string $AppId <p>应用 ID</p>
     * @param integer $StartTime <p>开始时间，Unix 毫秒时间戳</p>
     * @param integer $EndTime <p>结束时间，Unix 毫秒时间戳</p>
     * @param string $Env <p>环境过滤，如 prod、test</p>
     * @param array $IssueTypes <p>Issue 类型过滤，可选值：native_crash、js_error、event_loop_block</p>
     * @param array $Statuses <p>状态过滤，可选值：Unresolved、Resolved、Ignored、Regressed</p>
     * @param string $Keyword <p>Issue 标题或错误关键字模糊搜索</p>
     * @param string $Filters <p>扩展过滤器 JSON 字符串；白名单字段包括 app_version、country、province、city、device_type、browser、os、isp、referrer、user_type、platform、normalized_page_url、event_type、issue_id、environment、process_type</p>
     * @param string $SortBy <p>排序字段，可选值：last_seen、first_seen、event_count、affected_users</p>
     * @param string $SortOrder <p>排序方向，可选值：asc、desc</p>
     * @param integer $Page <p>页码，默认 1</p>
     * @param integer $PageSize <p>分页大小，默认 20，范围 1~100</p>
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

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Env",$param) and $param["Env"] !== null) {
            $this->Env = $param["Env"];
        }

        if (array_key_exists("IssueTypes",$param) and $param["IssueTypes"] !== null) {
            $this->IssueTypes = $param["IssueTypes"];
        }

        if (array_key_exists("Statuses",$param) and $param["Statuses"] !== null) {
            $this->Statuses = $param["Statuses"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = $param["Filters"];
        }

        if (array_key_exists("SortBy",$param) and $param["SortBy"] !== null) {
            $this->SortBy = $param["SortBy"];
        }

        if (array_key_exists("SortOrder",$param) and $param["SortOrder"] !== null) {
            $this->SortOrder = $param["SortOrder"];
        }

        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            $this->Page = $param["Page"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }
    }
}
