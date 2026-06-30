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
 * DescribeLogTagValue请求参数结构体
 *
 * @method integer getStartTime() 获取<p>起始时间</p>
 * @method void setStartTime(integer $StartTime) 设置<p>起始时间</p>
 * @method integer getEndTime() 获取<p>结束时间</p>
 * @method void setEndTime(integer $EndTime) 设置<p>结束时间</p>
 * @method string getEventBusId() 获取<p>事件集ID</p>
 * @method void setEventBusId(string $EventBusId) 设置<p>事件集ID</p>
 * @method string getGroupField() 获取<p>聚合字段,取值范围如下：Source(事件源),RuleIds(命中规则),Subject(实例ID),Region(地域)</p>
 * @method void setGroupField(string $GroupField) 设置<p>聚合字段,取值范围如下：Source(事件源),RuleIds(命中规则),Subject(实例ID),Region(地域)</p>
 * @method integer getPage() 获取<p>页数</p>
 * @method void setPage(integer $Page) 设置<p>页数</p>
 * @method integer getLimit() 获取<p>每页数据大小</p>
 * @method void setLimit(integer $Limit) 设置<p>每页数据大小</p>
 * @method array getFilter() 获取<p>筛选条件</p>
 * @method void setFilter(array $Filter) 设置<p>筛选条件</p>
 */
class DescribeLogTagValueRequest extends AbstractModel
{
    /**
     * @var integer <p>起始时间</p>
     */
    public $StartTime;

    /**
     * @var integer <p>结束时间</p>
     */
    public $EndTime;

    /**
     * @var string <p>事件集ID</p>
     */
    public $EventBusId;

    /**
     * @var string <p>聚合字段,取值范围如下：Source(事件源),RuleIds(命中规则),Subject(实例ID),Region(地域)</p>
     */
    public $GroupField;

    /**
     * @var integer <p>页数</p>
     */
    public $Page;

    /**
     * @var integer <p>每页数据大小</p>
     */
    public $Limit;

    /**
     * @var array <p>筛选条件</p>
     */
    public $Filter;

    /**
     * @param integer $StartTime <p>起始时间</p>
     * @param integer $EndTime <p>结束时间</p>
     * @param string $EventBusId <p>事件集ID</p>
     * @param string $GroupField <p>聚合字段,取值范围如下：Source(事件源),RuleIds(命中规则),Subject(实例ID),Region(地域)</p>
     * @param integer $Page <p>页数</p>
     * @param integer $Limit <p>每页数据大小</p>
     * @param array $Filter <p>筛选条件</p>
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

        if (array_key_exists("GroupField",$param) and $param["GroupField"] !== null) {
            $this->GroupField = $param["GroupField"];
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
    }
}
