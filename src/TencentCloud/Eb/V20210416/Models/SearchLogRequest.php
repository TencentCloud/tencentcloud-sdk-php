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
namespace TencentCloud\Eb\V20210416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SearchLog请求参数结构体
 *
 * @method integer getStartTime() 获取<p>起始时间unix 毫秒时间戳</p>
 * @method void setStartTime(integer $StartTime) 设置<p>起始时间unix 毫秒时间戳</p>
 * @method integer getEndTime() 获取<p>结束时间unix 毫秒时间戳</p>
 * @method void setEndTime(integer $EndTime) 设置<p>结束时间unix 毫秒时间戳</p>
 * @method string getEventBusId() 获取<p>事件集ID</p>
 * @method void setEventBusId(string $EventBusId) 设置<p>事件集ID</p>
 * @method integer getPage() 获取<p>页码</p>
 * @method void setPage(integer $Page) 设置<p>页码</p>
 * @method integer getLimit() 获取<p>每页数据大小</p><p>取值范围：[1, 1000]</p><p>默认值：10</p>
 * @method void setLimit(integer $Limit) 设置<p>每页数据大小</p><p>取值范围：[1, 1000]</p><p>默认值：10</p>
 * @method array getFilter() 获取<p>事件查询筛选条件；示例如下：[{&quot;key&quot;:&quot;host&quot;,&quot;operator&quot;:&quot;eq&quot;,&quot;value&quot;:&quot;106.53.106.243&quot;},{&quot;type&quot;:&quot;AND&quot;,&quot;filters&quot;:[{&quot;key&quot;:&quot;region&quot;,&quot;operator&quot;:&quot;like&quot;,&quot;value&quot;:&quot;<em>guangzhou</em>&quot;},{&quot;key&quot;:&quot;type&quot;,&quot;operator&quot;:&quot;eq&quot;,&quot;value&quot;:&quot;cvm:ErrorEvent:GuestReboot&quot;}]},{&quot;type&quot;:&quot;OR&quot;,&quot;filters&quot;:[{&quot;key&quot;:&quot;field1&quot;,&quot;operator&quot;:&quot;like&quot;,&quot;value&quot;:&quot;<em>access</em>&quot;},{&quot;key&quot;:&quot;field2&quot;,&quot;operator&quot;:&quot;eq&quot;,&quot;value&quot;:&quot;custom&quot;}]}]</p>
 * @method void setFilter(array $Filter) 设置<p>事件查询筛选条件；示例如下：[{&quot;key&quot;:&quot;host&quot;,&quot;operator&quot;:&quot;eq&quot;,&quot;value&quot;:&quot;106.53.106.243&quot;},{&quot;type&quot;:&quot;AND&quot;,&quot;filters&quot;:[{&quot;key&quot;:&quot;region&quot;,&quot;operator&quot;:&quot;like&quot;,&quot;value&quot;:&quot;<em>guangzhou</em>&quot;},{&quot;key&quot;:&quot;type&quot;,&quot;operator&quot;:&quot;eq&quot;,&quot;value&quot;:&quot;cvm:ErrorEvent:GuestReboot&quot;}]},{&quot;type&quot;:&quot;OR&quot;,&quot;filters&quot;:[{&quot;key&quot;:&quot;field1&quot;,&quot;operator&quot;:&quot;like&quot;,&quot;value&quot;:&quot;<em>access</em>&quot;},{&quot;key&quot;:&quot;field2&quot;,&quot;operator&quot;:&quot;eq&quot;,&quot;value&quot;:&quot;custom&quot;}]}]</p>
 * @method array getOrderFields() 获取<p>事件查询结果排序</p><p>枚举值：</p><ul><li>Timestamp： 事件触发时间</li><li>Source： 事件源</li><li>Type： 事件类型</li><li>RuleIds： 事件规则</li><li>Subject： 事件对象</li><li>Region： 事件地域</li><li>Status： 事件状态</li></ul>
 * @method void setOrderFields(array $OrderFields) 设置<p>事件查询结果排序</p><p>枚举值：</p><ul><li>Timestamp： 事件触发时间</li><li>Source： 事件源</li><li>Type： 事件类型</li><li>RuleIds： 事件规则</li><li>Subject： 事件对象</li><li>Region： 事件地域</li><li>Status： 事件状态</li></ul>
 * @method string getOrderBy() 获取<p>排序方式，asc 从旧到新，desc 从新到旧</p><p>枚举值：</p><ul><li>asc： 从旧到新</li><li>desc： 从新到旧</li></ul><p>默认值：desc</p>
 * @method void setOrderBy(string $OrderBy) 设置<p>排序方式，asc 从旧到新，desc 从新到旧</p><p>枚举值：</p><ul><li>asc： 从旧到新</li><li>desc： 从新到旧</li></ul><p>默认值：desc</p>
 */
class SearchLogRequest extends AbstractModel
{
    /**
     * @var integer <p>起始时间unix 毫秒时间戳</p>
     */
    public $StartTime;

    /**
     * @var integer <p>结束时间unix 毫秒时间戳</p>
     */
    public $EndTime;

    /**
     * @var string <p>事件集ID</p>
     */
    public $EventBusId;

    /**
     * @var integer <p>页码</p>
     */
    public $Page;

    /**
     * @var integer <p>每页数据大小</p><p>取值范围：[1, 1000]</p><p>默认值：10</p>
     */
    public $Limit;

    /**
     * @var array <p>事件查询筛选条件；示例如下：[{&quot;key&quot;:&quot;host&quot;,&quot;operator&quot;:&quot;eq&quot;,&quot;value&quot;:&quot;106.53.106.243&quot;},{&quot;type&quot;:&quot;AND&quot;,&quot;filters&quot;:[{&quot;key&quot;:&quot;region&quot;,&quot;operator&quot;:&quot;like&quot;,&quot;value&quot;:&quot;<em>guangzhou</em>&quot;},{&quot;key&quot;:&quot;type&quot;,&quot;operator&quot;:&quot;eq&quot;,&quot;value&quot;:&quot;cvm:ErrorEvent:GuestReboot&quot;}]},{&quot;type&quot;:&quot;OR&quot;,&quot;filters&quot;:[{&quot;key&quot;:&quot;field1&quot;,&quot;operator&quot;:&quot;like&quot;,&quot;value&quot;:&quot;<em>access</em>&quot;},{&quot;key&quot;:&quot;field2&quot;,&quot;operator&quot;:&quot;eq&quot;,&quot;value&quot;:&quot;custom&quot;}]}]</p>
     */
    public $Filter;

    /**
     * @var array <p>事件查询结果排序</p><p>枚举值：</p><ul><li>Timestamp： 事件触发时间</li><li>Source： 事件源</li><li>Type： 事件类型</li><li>RuleIds： 事件规则</li><li>Subject： 事件对象</li><li>Region： 事件地域</li><li>Status： 事件状态</li></ul>
     */
    public $OrderFields;

    /**
     * @var string <p>排序方式，asc 从旧到新，desc 从新到旧</p><p>枚举值：</p><ul><li>asc： 从旧到新</li><li>desc： 从新到旧</li></ul><p>默认值：desc</p>
     */
    public $OrderBy;

    /**
     * @param integer $StartTime <p>起始时间unix 毫秒时间戳</p>
     * @param integer $EndTime <p>结束时间unix 毫秒时间戳</p>
     * @param string $EventBusId <p>事件集ID</p>
     * @param integer $Page <p>页码</p>
     * @param integer $Limit <p>每页数据大小</p><p>取值范围：[1, 1000]</p><p>默认值：10</p>
     * @param array $Filter <p>事件查询筛选条件；示例如下：[{&quot;key&quot;:&quot;host&quot;,&quot;operator&quot;:&quot;eq&quot;,&quot;value&quot;:&quot;106.53.106.243&quot;},{&quot;type&quot;:&quot;AND&quot;,&quot;filters&quot;:[{&quot;key&quot;:&quot;region&quot;,&quot;operator&quot;:&quot;like&quot;,&quot;value&quot;:&quot;<em>guangzhou</em>&quot;},{&quot;key&quot;:&quot;type&quot;,&quot;operator&quot;:&quot;eq&quot;,&quot;value&quot;:&quot;cvm:ErrorEvent:GuestReboot&quot;}]},{&quot;type&quot;:&quot;OR&quot;,&quot;filters&quot;:[{&quot;key&quot;:&quot;field1&quot;,&quot;operator&quot;:&quot;like&quot;,&quot;value&quot;:&quot;<em>access</em>&quot;},{&quot;key&quot;:&quot;field2&quot;,&quot;operator&quot;:&quot;eq&quot;,&quot;value&quot;:&quot;custom&quot;}]}]</p>
     * @param array $OrderFields <p>事件查询结果排序</p><p>枚举值：</p><ul><li>Timestamp： 事件触发时间</li><li>Source： 事件源</li><li>Type： 事件类型</li><li>RuleIds： 事件规则</li><li>Subject： 事件对象</li><li>Region： 事件地域</li><li>Status： 事件状态</li></ul>
     * @param string $OrderBy <p>排序方式，asc 从旧到新，desc 从新到旧</p><p>枚举值：</p><ul><li>asc： 从旧到新</li><li>desc： 从新到旧</li></ul><p>默认值：desc</p>
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("EventBusId",$param) and $param["EventBusId"] !== null) {
            $this->EventBusId = $param["EventBusId"];
        }

        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            $this->Page = $param["Page"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $this->Filter = [];
            foreach ($param["Filter"] as $key => $value){
                $obj = new LogFilter();
                $obj->deserialize($value);
                array_push($this->Filter, $obj);
            }
        }

        if (array_key_exists("OrderFields",$param) and $param["OrderFields"] !== null) {
            $this->OrderFields = $param["OrderFields"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }
    }
}
