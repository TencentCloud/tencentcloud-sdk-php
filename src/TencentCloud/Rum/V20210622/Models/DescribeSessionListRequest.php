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
 * DescribeSessionList请求参数结构体
 *
 * @method string getAppId() 获取<p>应用id</p>
 * @method void setAppId(string $AppId) 设置<p>应用id</p>
 * @method integer getStartTime() 获取<p>开始时间</p><p>单位：毫秒</p>
 * @method void setStartTime(integer $StartTime) 设置<p>开始时间</p><p>单位：毫秒</p>
 * @method integer getEndTime() 获取<p>结束时间</p><p>单位：毫秒</p>
 * @method void setEndTime(integer $EndTime) 设置<p>结束时间</p><p>单位：毫秒</p>
 * @method string getSessionType() 获取<p>session类型</p><p>枚举值：</p><ul><li>all： 所有</li><li>error： 错</li><li>slow： 慢</li></ul>
 * @method void setSessionType(string $SessionType) 设置<p>session类型</p><p>枚举值：</p><ul><li>all： 所有</li><li>error： 错</li><li>slow： 慢</li></ul>
 * @method integer getPage() 获取<p>页面号</p><p>默认值：1</p>
 * @method void setPage(integer $Page) 设置<p>页面号</p><p>默认值：1</p>
 * @method integer getPageSize() 获取<p>每一页的数量</p>
 * @method void setPageSize(integer $PageSize) 设置<p>每一页的数量</p>
 * @method string getSortBy() 获取<p>排序字段</p>
 * @method void setSortBy(string $SortBy) 设置<p>排序字段</p>
 * @method string getSortOrder() 获取<p>排序方式，ASC或DESC</p>
 * @method void setSortOrder(string $SortOrder) 设置<p>排序方式，ASC或DESC</p>
 * @method string getUserId() 获取<p>用户id</p>
 * @method void setUserId(string $UserId) 设置<p>用户id</p>
 * @method string getSessionId() 获取<p>session id</p>
 * @method void setSessionId(string $SessionId) 设置<p>session id</p>
 * @method array getDeviceTypes() 获取<p>设备类型</p>
 * @method void setDeviceTypes(array $DeviceTypes) 设置<p>设备类型</p>
 * @method array getBrowsers() 获取<p>浏览器</p>
 * @method void setBrowsers(array $Browsers) 设置<p>浏览器</p>
 * @method array getOSList() 获取<p>操作系统</p>
 * @method void setOSList(array $OSList) 设置<p>操作系统</p>
 * @method array getPlatforms() 获取<p>平台</p>
 * @method void setPlatforms(array $Platforms) 设置<p>平台</p>
 * @method array getAppVersions() 获取<p>应用版本</p>
 * @method void setAppVersions(array $AppVersions) 设置<p>应用版本</p>
 * @method array getCountries() 获取<p>国家</p>
 * @method void setCountries(array $Countries) 设置<p>国家</p>
 * @method boolean getHasStruggle() 获取<p>是否有挣扎事件</p>
 * @method void setHasStruggle(boolean $HasStruggle) 设置<p>是否有挣扎事件</p>
 * @method array getStruggleRanks() 获取<p>挣扎等级</p>
 * @method void setStruggleRanks(array $StruggleRanks) 设置<p>挣扎等级</p>
 * @method array getStruggleTypes() 获取<p>挣扎事件类型</p>
 * @method void setStruggleTypes(array $StruggleTypes) 设置<p>挣扎事件类型</p>
 * @method boolean getHasError() 获取<p>是否有错误</p>
 * @method void setHasError(boolean $HasError) 设置<p>是否有错误</p>
 * @method string getVisitedPage() 获取<p>访问页面</p>
 * @method void setVisitedPage(string $VisitedPage) 设置<p>访问页面</p>
 * @method string getContainsEvent() 获取<p>包含事件</p>
 * @method void setContainsEvent(string $ContainsEvent) 设置<p>包含事件</p>
 * @method integer getMinDuration() 获取<p>最小持续时间</p>
 * @method void setMinDuration(integer $MinDuration) 设置<p>最小持续时间</p>
 * @method integer getMaxDuration() 获取<p>最大持续时间</p>
 * @method void setMaxDuration(integer $MaxDuration) 设置<p>最大持续时间</p>
 * @method string getPerfFilter() 获取<p>性能过滤</p>
 * @method void setPerfFilter(string $PerfFilter) 设置<p>性能过滤</p>
 * @method array getRegions() 获取<p>地区</p>
 * @method void setRegions(array $Regions) 设置<p>地区</p>
 * @method array getEnvironments() 获取<p>环境</p>
 * @method void setEnvironments(array $Environments) 设置<p>环境</p>
 * @method string getFilters() 获取<p>筛选</p>
 * @method void setFilters(string $Filters) 设置<p>筛选</p>
 * @method string getStartPage() 获取<p>旅程起点页面。可选。不传表示不过滤。</p>
 * @method void setStartPage(string $StartPage) 设置<p>旅程起点页面。可选。不传表示不过滤。</p>
 * @method string getEndPage() 获取<p>旅程终点页面。可选。不传表示不过滤。</p>
 * @method void setEndPage(string $EndPage) 设置<p>旅程终点页面。可选。不传表示不过滤。</p>
 * @method string getJourneyFilters() 获取<p>旅程筛选条件 JSON 字符串，格式与 Filters 相同：[{Key,Op,Values}]。可选。不传表示不过滤。</p>
 * @method void setJourneyFilters(string $JourneyFilters) 设置<p>旅程筛选条件 JSON 字符串，格式与 Filters 相同：[{Key,Op,Values}]。可选。不传表示不过滤。</p>
 */
class DescribeSessionListRequest extends AbstractModel
{
    /**
     * @var string <p>应用id</p>
     */
    public $AppId;

    /**
     * @var integer <p>开始时间</p><p>单位：毫秒</p>
     */
    public $StartTime;

    /**
     * @var integer <p>结束时间</p><p>单位：毫秒</p>
     */
    public $EndTime;

    /**
     * @var string <p>session类型</p><p>枚举值：</p><ul><li>all： 所有</li><li>error： 错</li><li>slow： 慢</li></ul>
     */
    public $SessionType;

    /**
     * @var integer <p>页面号</p><p>默认值：1</p>
     */
    public $Page;

    /**
     * @var integer <p>每一页的数量</p>
     */
    public $PageSize;

    /**
     * @var string <p>排序字段</p>
     */
    public $SortBy;

    /**
     * @var string <p>排序方式，ASC或DESC</p>
     */
    public $SortOrder;

    /**
     * @var string <p>用户id</p>
     */
    public $UserId;

    /**
     * @var string <p>session id</p>
     */
    public $SessionId;

    /**
     * @var array <p>设备类型</p>
     */
    public $DeviceTypes;

    /**
     * @var array <p>浏览器</p>
     */
    public $Browsers;

    /**
     * @var array <p>操作系统</p>
     */
    public $OSList;

    /**
     * @var array <p>平台</p>
     */
    public $Platforms;

    /**
     * @var array <p>应用版本</p>
     */
    public $AppVersions;

    /**
     * @var array <p>国家</p>
     */
    public $Countries;

    /**
     * @var boolean <p>是否有挣扎事件</p>
     */
    public $HasStruggle;

    /**
     * @var array <p>挣扎等级</p>
     */
    public $StruggleRanks;

    /**
     * @var array <p>挣扎事件类型</p>
     */
    public $StruggleTypes;

    /**
     * @var boolean <p>是否有错误</p>
     */
    public $HasError;

    /**
     * @var string <p>访问页面</p>
     */
    public $VisitedPage;

    /**
     * @var string <p>包含事件</p>
     */
    public $ContainsEvent;

    /**
     * @var integer <p>最小持续时间</p>
     */
    public $MinDuration;

    /**
     * @var integer <p>最大持续时间</p>
     */
    public $MaxDuration;

    /**
     * @var string <p>性能过滤</p>
     */
    public $PerfFilter;

    /**
     * @var array <p>地区</p>
     */
    public $Regions;

    /**
     * @var array <p>环境</p>
     */
    public $Environments;

    /**
     * @var string <p>筛选</p>
     */
    public $Filters;

    /**
     * @var string <p>旅程起点页面。可选。不传表示不过滤。</p>
     */
    public $StartPage;

    /**
     * @var string <p>旅程终点页面。可选。不传表示不过滤。</p>
     */
    public $EndPage;

    /**
     * @var string <p>旅程筛选条件 JSON 字符串，格式与 Filters 相同：[{Key,Op,Values}]。可选。不传表示不过滤。</p>
     */
    public $JourneyFilters;

    /**
     * @param string $AppId <p>应用id</p>
     * @param integer $StartTime <p>开始时间</p><p>单位：毫秒</p>
     * @param integer $EndTime <p>结束时间</p><p>单位：毫秒</p>
     * @param string $SessionType <p>session类型</p><p>枚举值：</p><ul><li>all： 所有</li><li>error： 错</li><li>slow： 慢</li></ul>
     * @param integer $Page <p>页面号</p><p>默认值：1</p>
     * @param integer $PageSize <p>每一页的数量</p>
     * @param string $SortBy <p>排序字段</p>
     * @param string $SortOrder <p>排序方式，ASC或DESC</p>
     * @param string $UserId <p>用户id</p>
     * @param string $SessionId <p>session id</p>
     * @param array $DeviceTypes <p>设备类型</p>
     * @param array $Browsers <p>浏览器</p>
     * @param array $OSList <p>操作系统</p>
     * @param array $Platforms <p>平台</p>
     * @param array $AppVersions <p>应用版本</p>
     * @param array $Countries <p>国家</p>
     * @param boolean $HasStruggle <p>是否有挣扎事件</p>
     * @param array $StruggleRanks <p>挣扎等级</p>
     * @param array $StruggleTypes <p>挣扎事件类型</p>
     * @param boolean $HasError <p>是否有错误</p>
     * @param string $VisitedPage <p>访问页面</p>
     * @param string $ContainsEvent <p>包含事件</p>
     * @param integer $MinDuration <p>最小持续时间</p>
     * @param integer $MaxDuration <p>最大持续时间</p>
     * @param string $PerfFilter <p>性能过滤</p>
     * @param array $Regions <p>地区</p>
     * @param array $Environments <p>环境</p>
     * @param string $Filters <p>筛选</p>
     * @param string $StartPage <p>旅程起点页面。可选。不传表示不过滤。</p>
     * @param string $EndPage <p>旅程终点页面。可选。不传表示不过滤。</p>
     * @param string $JourneyFilters <p>旅程筛选条件 JSON 字符串，格式与 Filters 相同：[{Key,Op,Values}]。可选。不传表示不过滤。</p>
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

        if (array_key_exists("SessionType",$param) and $param["SessionType"] !== null) {
            $this->SessionType = $param["SessionType"];
        }

        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            $this->Page = $param["Page"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("SortBy",$param) and $param["SortBy"] !== null) {
            $this->SortBy = $param["SortBy"];
        }

        if (array_key_exists("SortOrder",$param) and $param["SortOrder"] !== null) {
            $this->SortOrder = $param["SortOrder"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("DeviceTypes",$param) and $param["DeviceTypes"] !== null) {
            $this->DeviceTypes = $param["DeviceTypes"];
        }

        if (array_key_exists("Browsers",$param) and $param["Browsers"] !== null) {
            $this->Browsers = $param["Browsers"];
        }

        if (array_key_exists("OSList",$param) and $param["OSList"] !== null) {
            $this->OSList = $param["OSList"];
        }

        if (array_key_exists("Platforms",$param) and $param["Platforms"] !== null) {
            $this->Platforms = $param["Platforms"];
        }

        if (array_key_exists("AppVersions",$param) and $param["AppVersions"] !== null) {
            $this->AppVersions = $param["AppVersions"];
        }

        if (array_key_exists("Countries",$param) and $param["Countries"] !== null) {
            $this->Countries = $param["Countries"];
        }

        if (array_key_exists("HasStruggle",$param) and $param["HasStruggle"] !== null) {
            $this->HasStruggle = $param["HasStruggle"];
        }

        if (array_key_exists("StruggleRanks",$param) and $param["StruggleRanks"] !== null) {
            $this->StruggleRanks = $param["StruggleRanks"];
        }

        if (array_key_exists("StruggleTypes",$param) and $param["StruggleTypes"] !== null) {
            $this->StruggleTypes = $param["StruggleTypes"];
        }

        if (array_key_exists("HasError",$param) and $param["HasError"] !== null) {
            $this->HasError = $param["HasError"];
        }

        if (array_key_exists("VisitedPage",$param) and $param["VisitedPage"] !== null) {
            $this->VisitedPage = $param["VisitedPage"];
        }

        if (array_key_exists("ContainsEvent",$param) and $param["ContainsEvent"] !== null) {
            $this->ContainsEvent = $param["ContainsEvent"];
        }

        if (array_key_exists("MinDuration",$param) and $param["MinDuration"] !== null) {
            $this->MinDuration = $param["MinDuration"];
        }

        if (array_key_exists("MaxDuration",$param) and $param["MaxDuration"] !== null) {
            $this->MaxDuration = $param["MaxDuration"];
        }

        if (array_key_exists("PerfFilter",$param) and $param["PerfFilter"] !== null) {
            $this->PerfFilter = $param["PerfFilter"];
        }

        if (array_key_exists("Regions",$param) and $param["Regions"] !== null) {
            $this->Regions = $param["Regions"];
        }

        if (array_key_exists("Environments",$param) and $param["Environments"] !== null) {
            $this->Environments = $param["Environments"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = $param["Filters"];
        }

        if (array_key_exists("StartPage",$param) and $param["StartPage"] !== null) {
            $this->StartPage = $param["StartPage"];
        }

        if (array_key_exists("EndPage",$param) and $param["EndPage"] !== null) {
            $this->EndPage = $param["EndPage"];
        }

        if (array_key_exists("JourneyFilters",$param) and $param["JourneyFilters"] !== null) {
            $this->JourneyFilters = $param["JourneyFilters"];
        }
    }
}
