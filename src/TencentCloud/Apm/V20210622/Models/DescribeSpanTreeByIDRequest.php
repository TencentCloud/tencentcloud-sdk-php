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
namespace TencentCloud\Apm\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSpanTreeByID请求参数结构体
 *
 * @method string getInstanceId() 获取<p>业务系统 ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>业务系统 ID</p>
 * @method array getFilters() 获取<p>TraceID</p>
 * @method void setFilters(array $Filters) 设置<p>TraceID</p>
 * @method integer getStartTime() 获取<p>Span查询开始时间戳（单位:秒）</p>
 * @method void setStartTime(integer $StartTime) 设置<p>Span查询开始时间戳（单位:秒）</p>
 * @method integer getEndTime() 获取<p>Span查询结束时间戳（单位:秒）</p>
 * @method void setEndTime(integer $EndTime) 设置<p>Span查询结束时间戳（单位:秒）</p>
 * @method boolean getIsFold() 获取<p>代表请求的是否为完整瀑布图</p>
 * @method void setIsFold(boolean $IsFold) 设置<p>代表请求的是否为完整瀑布图</p>
 * @method boolean getEntrySpanSelected() 获取<p>开启关键调用视图</p>
 * @method void setEntrySpanSelected(boolean $EntrySpanSelected) 设置<p>开启关键调用视图</p>
 * @method string getFocusSpanId() 获取<p>关注的SpanId</p>
 * @method void setFocusSpanId(string $FocusSpanId) 设置<p>关注的SpanId</p>
 * @method array getFilterViewTagKeyList() 获取<p>过滤视图的Tag列表</p>
 * @method void setFilterViewTagKeyList(array $FilterViewTagKeyList) 设置<p>过滤视图的Tag列表</p>
 * @method boolean getEnableResourceLink() 获取<p>是否开启云资源关联</p>
 * @method void setEnableResourceLink(boolean $EnableResourceLink) 设置<p>是否开启云资源关联</p>
 */
class DescribeSpanTreeByIDRequest extends AbstractModel
{
    /**
     * @var string <p>业务系统 ID</p>
     */
    public $InstanceId;

    /**
     * @var array <p>TraceID</p>
     */
    public $Filters;

    /**
     * @var integer <p>Span查询开始时间戳（单位:秒）</p>
     */
    public $StartTime;

    /**
     * @var integer <p>Span查询结束时间戳（单位:秒）</p>
     */
    public $EndTime;

    /**
     * @var boolean <p>代表请求的是否为完整瀑布图</p>
     */
    public $IsFold;

    /**
     * @var boolean <p>开启关键调用视图</p>
     */
    public $EntrySpanSelected;

    /**
     * @var string <p>关注的SpanId</p>
     */
    public $FocusSpanId;

    /**
     * @var array <p>过滤视图的Tag列表</p>
     */
    public $FilterViewTagKeyList;

    /**
     * @var boolean <p>是否开启云资源关联</p>
     */
    public $EnableResourceLink;

    /**
     * @param string $InstanceId <p>业务系统 ID</p>
     * @param array $Filters <p>TraceID</p>
     * @param integer $StartTime <p>Span查询开始时间戳（单位:秒）</p>
     * @param integer $EndTime <p>Span查询结束时间戳（单位:秒）</p>
     * @param boolean $IsFold <p>代表请求的是否为完整瀑布图</p>
     * @param boolean $EntrySpanSelected <p>开启关键调用视图</p>
     * @param string $FocusSpanId <p>关注的SpanId</p>
     * @param array $FilterViewTagKeyList <p>过滤视图的Tag列表</p>
     * @param boolean $EnableResourceLink <p>是否开启云资源关联</p>
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("IsFold",$param) and $param["IsFold"] !== null) {
            $this->IsFold = $param["IsFold"];
        }

        if (array_key_exists("EntrySpanSelected",$param) and $param["EntrySpanSelected"] !== null) {
            $this->EntrySpanSelected = $param["EntrySpanSelected"];
        }

        if (array_key_exists("FocusSpanId",$param) and $param["FocusSpanId"] !== null) {
            $this->FocusSpanId = $param["FocusSpanId"];
        }

        if (array_key_exists("FilterViewTagKeyList",$param) and $param["FilterViewTagKeyList"] !== null) {
            $this->FilterViewTagKeyList = $param["FilterViewTagKeyList"];
        }

        if (array_key_exists("EnableResourceLink",$param) and $param["EnableResourceLink"] !== null) {
            $this->EnableResourceLink = $param["EnableResourceLink"];
        }
    }
}
