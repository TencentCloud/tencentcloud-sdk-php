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
 * DescribeIssueAffectedUsers请求参数结构体
 *
 * @method string getAppId() 获取<p>应用 ID（string，必填）。空 → InvalidParameter</p>
 * @method void setAppId(string $AppId) 设置<p>应用 ID（string，必填）。空 → InvalidParameter</p>
 * @method string getIssueId() 获取<p>问题 ID（string，必填）。空 → InvalidParameter</p>
 * @method void setIssueId(string $IssueId) 设置<p>问题 ID（string，必填）。空 → InvalidParameter</p>
 * @method integer getPage() 获取<p>页码（整数，选填）。&lt; 1 钳制为 1；缺省 1</p>
 * @method void setPage(integer $Page) 设置<p>页码（整数，选填）。&lt; 1 钳制为 1；缺省 1</p>
 * @method integer getPageSize() 获取<p>每页条数（整数，选填）。&lt; 1 或 &gt; 1000 回落默认 20；导出场景按 1000 一批拉全量</p>
 * @method void setPageSize(integer $PageSize) 设置<p>每页条数（整数，选填）。&lt; 1 或 &gt; 1000 回落默认 20；导出场景按 1000 一批拉全量</p>
 * @method string getAppVersion() 获取<p>应用版本（string，选填）。按 app_version 精确匹配；空表示不限版本</p>
 * @method void setAppVersion(string $AppVersion) 设置<p>应用版本（string，选填）。按 app_version 精确匹配；空表示不限版本</p>
 * @method integer getStartTime() 获取<p>起始毫秒时间戳（整数，选填）。&lt;= 0 表示该侧不限</p>
 * @method void setStartTime(integer $StartTime) 设置<p>起始毫秒时间戳（整数，选填）。&lt;= 0 表示该侧不限</p>
 * @method integer getEndTime() 获取<p>结束毫秒时间戳（整数，选填）。&lt;= 0 表示该侧不限；与 StartTime 同时给出且 StartTime &gt; EndTime → InvalidParameter</p>
 * @method void setEndTime(integer $EndTime) 设置<p>结束毫秒时间戳（整数，选填）。&lt;= 0 表示该侧不限；与 StartTime 同时给出且 StartTime &gt; EndTime → InvalidParameter</p>
 * @method string getKeyword() 获取<p>身份值关键字（string，选填）。不区分大小写的子串匹配，命中 if(user_id='', session_id, user_id)；空表示不限</p>
 * @method void setKeyword(string $Keyword) 设置<p>身份值关键字（string，选填）。不区分大小写的子串匹配，命中 if(user_id='', session_id, user_id)；空表示不限</p>
 * @method string getOrderKey() 获取<p>排序字段（string，选填）。可选 last_seen / first_seen / event_count；缺省 last_seen；其它值 → InvalidParameter</p>
 * @method void setOrderKey(string $OrderKey) 设置<p>排序字段（string，选填）。可选 last_seen / first_seen / event_count；缺省 last_seen；其它值 → InvalidParameter</p>
 * @method string getOrderBy() 获取<p>排序方向（string，选填）。可选 asc / desc；缺省 desc；其它值 → InvalidParameter</p>
 * @method void setOrderBy(string $OrderBy) 设置<p>排序方向（string，选填）。可选 asc / desc；缺省 desc；其它值 → InvalidParameter</p>
 */
class DescribeIssueAffectedUsersRequest extends AbstractModel
{
    /**
     * @var string <p>应用 ID（string，必填）。空 → InvalidParameter</p>
     */
    public $AppId;

    /**
     * @var string <p>问题 ID（string，必填）。空 → InvalidParameter</p>
     */
    public $IssueId;

    /**
     * @var integer <p>页码（整数，选填）。&lt; 1 钳制为 1；缺省 1</p>
     */
    public $Page;

    /**
     * @var integer <p>每页条数（整数，选填）。&lt; 1 或 &gt; 1000 回落默认 20；导出场景按 1000 一批拉全量</p>
     */
    public $PageSize;

    /**
     * @var string <p>应用版本（string，选填）。按 app_version 精确匹配；空表示不限版本</p>
     */
    public $AppVersion;

    /**
     * @var integer <p>起始毫秒时间戳（整数，选填）。&lt;= 0 表示该侧不限</p>
     */
    public $StartTime;

    /**
     * @var integer <p>结束毫秒时间戳（整数，选填）。&lt;= 0 表示该侧不限；与 StartTime 同时给出且 StartTime &gt; EndTime → InvalidParameter</p>
     */
    public $EndTime;

    /**
     * @var string <p>身份值关键字（string，选填）。不区分大小写的子串匹配，命中 if(user_id='', session_id, user_id)；空表示不限</p>
     */
    public $Keyword;

    /**
     * @var string <p>排序字段（string，选填）。可选 last_seen / first_seen / event_count；缺省 last_seen；其它值 → InvalidParameter</p>
     */
    public $OrderKey;

    /**
     * @var string <p>排序方向（string，选填）。可选 asc / desc；缺省 desc；其它值 → InvalidParameter</p>
     */
    public $OrderBy;

    /**
     * @param string $AppId <p>应用 ID（string，必填）。空 → InvalidParameter</p>
     * @param string $IssueId <p>问题 ID（string，必填）。空 → InvalidParameter</p>
     * @param integer $Page <p>页码（整数，选填）。&lt; 1 钳制为 1；缺省 1</p>
     * @param integer $PageSize <p>每页条数（整数，选填）。&lt; 1 或 &gt; 1000 回落默认 20；导出场景按 1000 一批拉全量</p>
     * @param string $AppVersion <p>应用版本（string，选填）。按 app_version 精确匹配；空表示不限版本</p>
     * @param integer $StartTime <p>起始毫秒时间戳（整数，选填）。&lt;= 0 表示该侧不限</p>
     * @param integer $EndTime <p>结束毫秒时间戳（整数，选填）。&lt;= 0 表示该侧不限；与 StartTime 同时给出且 StartTime &gt; EndTime → InvalidParameter</p>
     * @param string $Keyword <p>身份值关键字（string，选填）。不区分大小写的子串匹配，命中 if(user_id='', session_id, user_id)；空表示不限</p>
     * @param string $OrderKey <p>排序字段（string，选填）。可选 last_seen / first_seen / event_count；缺省 last_seen；其它值 → InvalidParameter</p>
     * @param string $OrderBy <p>排序方向（string，选填）。可选 asc / desc；缺省 desc；其它值 → InvalidParameter</p>
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

        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            $this->Page = $param["Page"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("AppVersion",$param) and $param["AppVersion"] !== null) {
            $this->AppVersion = $param["AppVersion"];
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

        if (array_key_exists("OrderKey",$param) and $param["OrderKey"] !== null) {
            $this->OrderKey = $param["OrderKey"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }
    }
}
