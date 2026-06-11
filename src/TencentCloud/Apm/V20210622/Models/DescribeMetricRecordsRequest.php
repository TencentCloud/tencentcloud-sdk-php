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
 * DescribeMetricRecords请求参数结构体
 *
 * @method string getInstanceId() 获取<p>业务系统 ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>业务系统 ID</p>
 * @method array getMetrics() 获取<p>指标列表</p>
 * @method void setMetrics(array $Metrics) 设置<p>指标列表</p>
 * @method integer getStartTime() 获取<p>开始时间（单位为秒）</p>
 * @method void setStartTime(integer $StartTime) 设置<p>开始时间（单位为秒）</p>
 * @method integer getEndTime() 获取<p>结束时间（单位为秒）</p>
 * @method void setEndTime(integer $EndTime) 设置<p>结束时间（单位为秒）</p>
 * @method array getGroupBy() 获取<p>聚合维度</p>
 * @method void setGroupBy(array $GroupBy) 设置<p>聚合维度</p>
 * @method array getFilters() 获取<p>过滤条件</p>
 * @method void setFilters(array $Filters) 设置<p>过滤条件</p>
 * @method array getOrFilters() 获取<p>Or 过滤条件</p>
 * @method void setOrFilters(array $OrFilters) 设置<p>Or 过滤条件</p>
 * @method OrderBy getOrderBy() 获取<p>排序<br>现支持的 Key 有：</p><ul><li>startTime(开始时间)</li><li>endTime(结束时间)</li><li>duration(响应时间)</li></ul><p>现支持的 Value 有：</p><ul><li>desc(降序排序)</li><li>asc(升序排序)</li></ul>
 * @method void setOrderBy(OrderBy $OrderBy) 设置<p>排序<br>现支持的 Key 有：</p><ul><li>startTime(开始时间)</li><li>endTime(结束时间)</li><li>duration(响应时间)</li></ul><p>现支持的 Value 有：</p><ul><li>desc(降序排序)</li><li>asc(升序排序)</li></ul>
 * @method string getBusinessName() 获取<p>业务名称，控制台用户请填写taw。</p>
 * @method void setBusinessName(string $BusinessName) 设置<p>业务名称，控制台用户请填写taw。</p>
 * @method string getType() 获取<p>特殊处理查询结果</p>
 * @method void setType(string $Type) 设置<p>特殊处理查询结果</p>
 * @method integer getLimit() 获取<p>每页大小，默认为1000，合法取值范围为0~1000</p>
 * @method void setLimit(integer $Limit) 设置<p>每页大小，默认为1000，合法取值范围为0~1000</p>
 * @method integer getOffset() 获取<p>分页起始点</p>
 * @method void setOffset(integer $Offset) 设置<p>分页起始点</p>
 * @method integer getPageIndex() 获取<p>页码</p>
 * @method void setPageIndex(integer $PageIndex) 设置<p>页码</p>
 * @method integer getPageSize() 获取<p>页长</p>
 * @method void setPageSize(integer $PageSize) 设置<p>页长</p>
 * @method string getServiceID() 获取<p>应用Id</p>
 * @method void setServiceID(string $ServiceID) 设置<p>应用Id</p>
 */
class DescribeMetricRecordsRequest extends AbstractModel
{
    /**
     * @var string <p>业务系统 ID</p>
     */
    public $InstanceId;

    /**
     * @var array <p>指标列表</p>
     */
    public $Metrics;

    /**
     * @var integer <p>开始时间（单位为秒）</p>
     */
    public $StartTime;

    /**
     * @var integer <p>结束时间（单位为秒）</p>
     */
    public $EndTime;

    /**
     * @var array <p>聚合维度</p>
     */
    public $GroupBy;

    /**
     * @var array <p>过滤条件</p>
     */
    public $Filters;

    /**
     * @var array <p>Or 过滤条件</p>
     */
    public $OrFilters;

    /**
     * @var OrderBy <p>排序<br>现支持的 Key 有：</p><ul><li>startTime(开始时间)</li><li>endTime(结束时间)</li><li>duration(响应时间)</li></ul><p>现支持的 Value 有：</p><ul><li>desc(降序排序)</li><li>asc(升序排序)</li></ul>
     */
    public $OrderBy;

    /**
     * @var string <p>业务名称，控制台用户请填写taw。</p>
     */
    public $BusinessName;

    /**
     * @var string <p>特殊处理查询结果</p>
     */
    public $Type;

    /**
     * @var integer <p>每页大小，默认为1000，合法取值范围为0~1000</p>
     */
    public $Limit;

    /**
     * @var integer <p>分页起始点</p>
     */
    public $Offset;

    /**
     * @var integer <p>页码</p>
     */
    public $PageIndex;

    /**
     * @var integer <p>页长</p>
     */
    public $PageSize;

    /**
     * @var string <p>应用Id</p>
     */
    public $ServiceID;

    /**
     * @param string $InstanceId <p>业务系统 ID</p>
     * @param array $Metrics <p>指标列表</p>
     * @param integer $StartTime <p>开始时间（单位为秒）</p>
     * @param integer $EndTime <p>结束时间（单位为秒）</p>
     * @param array $GroupBy <p>聚合维度</p>
     * @param array $Filters <p>过滤条件</p>
     * @param array $OrFilters <p>Or 过滤条件</p>
     * @param OrderBy $OrderBy <p>排序<br>现支持的 Key 有：</p><ul><li>startTime(开始时间)</li><li>endTime(结束时间)</li><li>duration(响应时间)</li></ul><p>现支持的 Value 有：</p><ul><li>desc(降序排序)</li><li>asc(升序排序)</li></ul>
     * @param string $BusinessName <p>业务名称，控制台用户请填写taw。</p>
     * @param string $Type <p>特殊处理查询结果</p>
     * @param integer $Limit <p>每页大小，默认为1000，合法取值范围为0~1000</p>
     * @param integer $Offset <p>分页起始点</p>
     * @param integer $PageIndex <p>页码</p>
     * @param integer $PageSize <p>页长</p>
     * @param string $ServiceID <p>应用Id</p>
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

        if (array_key_exists("Metrics",$param) and $param["Metrics"] !== null) {
            $this->Metrics = [];
            foreach ($param["Metrics"] as $key => $value){
                $obj = new QueryMetricItem();
                $obj->deserialize($value);
                array_push($this->Metrics, $obj);
            }
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("GroupBy",$param) and $param["GroupBy"] !== null) {
            $this->GroupBy = $param["GroupBy"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("OrFilters",$param) and $param["OrFilters"] !== null) {
            $this->OrFilters = [];
            foreach ($param["OrFilters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->OrFilters, $obj);
            }
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = new OrderBy();
            $this->OrderBy->deserialize($param["OrderBy"]);
        }

        if (array_key_exists("BusinessName",$param) and $param["BusinessName"] !== null) {
            $this->BusinessName = $param["BusinessName"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("PageIndex",$param) and $param["PageIndex"] !== null) {
            $this->PageIndex = $param["PageIndex"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("ServiceID",$param) and $param["ServiceID"] !== null) {
            $this->ServiceID = $param["ServiceID"];
        }
    }
}
