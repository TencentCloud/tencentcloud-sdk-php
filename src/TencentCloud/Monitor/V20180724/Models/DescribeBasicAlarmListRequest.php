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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBasicAlarmList请求参数结构体
 *
 * @method string getModule() 获取<p>接口模块名，当前取值monitor</p>
 * @method void setModule(string $Module) 设置<p>接口模块名，当前取值monitor</p>
 * @method integer getStartTime() 获取<p>起始时间，默认一天前的时间戳</p>
 * @method void setStartTime(integer $StartTime) 设置<p>起始时间，默认一天前的时间戳</p>
 * @method integer getEndTime() 获取<p>结束时间，默认当前时间戳</p>
 * @method void setEndTime(integer $EndTime) 设置<p>结束时间，默认当前时间戳</p>
 * @method integer getLimit() 获取<p>分页参数，每页返回的数量，取值1~100，默认20</p>
 * @method void setLimit(integer $Limit) 设置<p>分页参数，每页返回的数量，取值1~100，默认20</p>
 * @method integer getOffset() 获取<p>分页参数，页偏移量，从0开始计数，默认0</p>
 * @method void setOffset(integer $Offset) 设置<p>分页参数，页偏移量，从0开始计数，默认0</p>
 * @method string getOccurTimeOrder() 获取<p>根据发生时间排序，取值ASC或DESC</p>
 * @method void setOccurTimeOrder(string $OccurTimeOrder) 设置<p>根据发生时间排序，取值ASC或DESC</p>
 * @method array getProjectIds() 获取<p>根据项目ID过滤</p>
 * @method void setProjectIds(array $ProjectIds) 设置<p>根据项目ID过滤</p>
 * @method array getViewNames() 获取<p>根据策略类型过滤</p>
 * @method void setViewNames(array $ViewNames) 设置<p>根据策略类型过滤</p>
 * @method array getAlarmStatus() 获取<p>根据告警状态过滤</p>
 * @method void setAlarmStatus(array $AlarmStatus) 设置<p>根据告警状态过滤</p>
 * @method string getObjLike() 获取<p>根据告警对象过滤</p>
 * @method void setObjLike(string $ObjLike) 设置<p>根据告警对象过滤</p>
 * @method array getInstanceGroupIds() 获取<p>根据实例组ID过滤</p>
 * @method void setInstanceGroupIds(array $InstanceGroupIds) 设置<p>根据实例组ID过滤</p>
 * @method array getMetricNames() 获取<p>根据指标名过滤</p>
 * @method void setMetricNames(array $MetricNames) 设置<p>根据指标名过滤</p>
 */
class DescribeBasicAlarmListRequest extends AbstractModel
{
    /**
     * @var string <p>接口模块名，当前取值monitor</p>
     */
    public $Module;

    /**
     * @var integer <p>起始时间，默认一天前的时间戳</p>
     */
    public $StartTime;

    /**
     * @var integer <p>结束时间，默认当前时间戳</p>
     */
    public $EndTime;

    /**
     * @var integer <p>分页参数，每页返回的数量，取值1~100，默认20</p>
     */
    public $Limit;

    /**
     * @var integer <p>分页参数，页偏移量，从0开始计数，默认0</p>
     */
    public $Offset;

    /**
     * @var string <p>根据发生时间排序，取值ASC或DESC</p>
     */
    public $OccurTimeOrder;

    /**
     * @var array <p>根据项目ID过滤</p>
     */
    public $ProjectIds;

    /**
     * @var array <p>根据策略类型过滤</p>
     */
    public $ViewNames;

    /**
     * @var array <p>根据告警状态过滤</p>
     */
    public $AlarmStatus;

    /**
     * @var string <p>根据告警对象过滤</p>
     */
    public $ObjLike;

    /**
     * @var array <p>根据实例组ID过滤</p>
     */
    public $InstanceGroupIds;

    /**
     * @var array <p>根据指标名过滤</p>
     */
    public $MetricNames;

    /**
     * @param string $Module <p>接口模块名，当前取值monitor</p>
     * @param integer $StartTime <p>起始时间，默认一天前的时间戳</p>
     * @param integer $EndTime <p>结束时间，默认当前时间戳</p>
     * @param integer $Limit <p>分页参数，每页返回的数量，取值1~100，默认20</p>
     * @param integer $Offset <p>分页参数，页偏移量，从0开始计数，默认0</p>
     * @param string $OccurTimeOrder <p>根据发生时间排序，取值ASC或DESC</p>
     * @param array $ProjectIds <p>根据项目ID过滤</p>
     * @param array $ViewNames <p>根据策略类型过滤</p>
     * @param array $AlarmStatus <p>根据告警状态过滤</p>
     * @param string $ObjLike <p>根据告警对象过滤</p>
     * @param array $InstanceGroupIds <p>根据实例组ID过滤</p>
     * @param array $MetricNames <p>根据指标名过滤</p>
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
        if (array_key_exists("Module",$param) and $param["Module"] !== null) {
            $this->Module = $param["Module"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("OccurTimeOrder",$param) and $param["OccurTimeOrder"] !== null) {
            $this->OccurTimeOrder = $param["OccurTimeOrder"];
        }

        if (array_key_exists("ProjectIds",$param) and $param["ProjectIds"] !== null) {
            $this->ProjectIds = $param["ProjectIds"];
        }

        if (array_key_exists("ViewNames",$param) and $param["ViewNames"] !== null) {
            $this->ViewNames = $param["ViewNames"];
        }

        if (array_key_exists("AlarmStatus",$param) and $param["AlarmStatus"] !== null) {
            $this->AlarmStatus = $param["AlarmStatus"];
        }

        if (array_key_exists("ObjLike",$param) and $param["ObjLike"] !== null) {
            $this->ObjLike = $param["ObjLike"];
        }

        if (array_key_exists("InstanceGroupIds",$param) and $param["InstanceGroupIds"] !== null) {
            $this->InstanceGroupIds = $param["InstanceGroupIds"];
        }

        if (array_key_exists("MetricNames",$param) and $param["MetricNames"] !== null) {
            $this->MetricNames = $param["MetricNames"];
        }
    }
}
