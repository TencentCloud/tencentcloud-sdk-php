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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ExportLogsOffline请求参数结构体
 *
 * @method string getIndex() 获取<p>日志类型标识</p><p>枚举值：</p><ul><li>cfw_netflow_border： 流量日志-互联网边界</li><li>cfw_netflow_vpc： 流量日志-VPC边界</li><li>cfw_netflow_nat： 流量日志-NAT边界</li><li>cfw_rule_acl： 访问控制-互联网边界</li><li>cfw_rule_vpc_acl： 访问控制-VPC边界</li><li>cfw_rule_nat_acl： 访问控制-NAT边界</li><li>cfw_rule_threatinfo： 入侵防御-入侵防御</li><li>cfw_netflow_nta： 全流量检测与响应-流量分析</li><li>cfw_ndr_subject_risk： 全流量检测与响应-流量风险</li><li>cfw_ndr_ai_audit： 全流量检测与响应-AI流量风险</li><li>operate_log_all： 操作日志</li></ul>
 * @method void setIndex(string $Index) 设置<p>日志类型标识</p><p>枚举值：</p><ul><li>cfw_netflow_border： 流量日志-互联网边界</li><li>cfw_netflow_vpc： 流量日志-VPC边界</li><li>cfw_netflow_nat： 流量日志-NAT边界</li><li>cfw_rule_acl： 访问控制-互联网边界</li><li>cfw_rule_vpc_acl： 访问控制-VPC边界</li><li>cfw_rule_nat_acl： 访问控制-NAT边界</li><li>cfw_rule_threatinfo： 入侵防御-入侵防御</li><li>cfw_netflow_nta： 全流量检测与响应-流量分析</li><li>cfw_ndr_subject_risk： 全流量检测与响应-流量风险</li><li>cfw_ndr_ai_audit： 全流量检测与响应-AI流量风险</li><li>operate_log_all： 操作日志</li></ul>
 * @method string getStartTime() 获取<p>筛选开始时间</p>
 * @method void setStartTime(string $StartTime) 设置<p>筛选开始时间</p>
 * @method string getEndTime() 获取<p>筛选结束时间</p>
 * @method void setEndTime(string $EndTime) 设置<p>筛选结束时间</p>
 * @method string getTaskName() 获取<p>任务名称</p>
 * @method void setTaskName(string $TaskName) 设置<p>任务名称</p>
 * @method string getDataFormat() 获取<p>数据格式</p><p>枚举值：</p><ul><li>.json： JSON格式</li><li>.csv： CSV格式</li></ul>
 * @method void setDataFormat(string $DataFormat) 设置<p>数据格式</p><p>枚举值：</p><ul><li>.json： JSON格式</li><li>.csv： CSV格式</li></ul>
 * @method string getCompressionFormat() 获取<p>压缩方式，.zip、.tar.gz、.tar.zst、.tar.lz4、传空不压缩</p>
 * @method void setCompressionFormat(string $CompressionFormat) 设置<p>压缩方式，.zip、.tar.gz、.tar.zst、.tar.lz4、传空不压缩</p>
 * @method string getOrder() 获取<p>日志排序，desc时间降序，asc时间升序</p>
 * @method void setOrder(string $Order) 设置<p>日志排序，desc时间降序，asc时间升序</p>
 * @method integer getLength() 获取<p>日志数量，传0按单次上限导出</p>
 * @method void setLength(integer $Length) 设置<p>日志数量，传0按单次上限导出</p>
 * @method array getFilters() 获取<p>过滤条件组合</p>
 * @method void setFilters(array $Filters) 设置<p>过滤条件组合</p>
 * @method string getBucketName() 获取<p>COS存储桶名称</p>
 * @method void setBucketName(string $BucketName) 设置<p>COS存储桶名称</p>
 * @method string getBucketRegion() 获取<p>COS存储桶地域</p>
 * @method void setBucketRegion(string $BucketRegion) 设置<p>COS存储桶地域</p>
 * @method integer getStorageDays() 获取<p>文件过期时长，1一天，7七天，-1永久</p>
 * @method void setStorageDays(integer $StorageDays) 设置<p>文件过期时长，1一天，7七天，-1永久</p>
 * @method string getQuery() 获取<p>日志分析查询语句，Query和Filters不能同时使用，在一次请求中有且只能选择一个</p>
 * @method void setQuery(string $Query) 设置<p>日志分析查询语句，Query和Filters不能同时使用，在一次请求中有且只能选择一个</p>
 * @method string getTaskType() 获取<p>导出任务类型，LogAnalysis日志分析导出，LogSearch日志审计导出</p>
 * @method void setTaskType(string $TaskType) 设置<p>导出任务类型，LogAnalysis日志分析导出，LogSearch日志审计导出</p>
 */
class ExportLogsOfflineRequest extends AbstractModel
{
    /**
     * @var string <p>日志类型标识</p><p>枚举值：</p><ul><li>cfw_netflow_border： 流量日志-互联网边界</li><li>cfw_netflow_vpc： 流量日志-VPC边界</li><li>cfw_netflow_nat： 流量日志-NAT边界</li><li>cfw_rule_acl： 访问控制-互联网边界</li><li>cfw_rule_vpc_acl： 访问控制-VPC边界</li><li>cfw_rule_nat_acl： 访问控制-NAT边界</li><li>cfw_rule_threatinfo： 入侵防御-入侵防御</li><li>cfw_netflow_nta： 全流量检测与响应-流量分析</li><li>cfw_ndr_subject_risk： 全流量检测与响应-流量风险</li><li>cfw_ndr_ai_audit： 全流量检测与响应-AI流量风险</li><li>operate_log_all： 操作日志</li></ul>
     */
    public $Index;

    /**
     * @var string <p>筛选开始时间</p>
     */
    public $StartTime;

    /**
     * @var string <p>筛选结束时间</p>
     */
    public $EndTime;

    /**
     * @var string <p>任务名称</p>
     */
    public $TaskName;

    /**
     * @var string <p>数据格式</p><p>枚举值：</p><ul><li>.json： JSON格式</li><li>.csv： CSV格式</li></ul>
     */
    public $DataFormat;

    /**
     * @var string <p>压缩方式，.zip、.tar.gz、.tar.zst、.tar.lz4、传空不压缩</p>
     */
    public $CompressionFormat;

    /**
     * @var string <p>日志排序，desc时间降序，asc时间升序</p>
     */
    public $Order;

    /**
     * @var integer <p>日志数量，传0按单次上限导出</p>
     */
    public $Length;

    /**
     * @var array <p>过滤条件组合</p>
     */
    public $Filters;

    /**
     * @var string <p>COS存储桶名称</p>
     */
    public $BucketName;

    /**
     * @var string <p>COS存储桶地域</p>
     */
    public $BucketRegion;

    /**
     * @var integer <p>文件过期时长，1一天，7七天，-1永久</p>
     */
    public $StorageDays;

    /**
     * @var string <p>日志分析查询语句，Query和Filters不能同时使用，在一次请求中有且只能选择一个</p>
     */
    public $Query;

    /**
     * @var string <p>导出任务类型，LogAnalysis日志分析导出，LogSearch日志审计导出</p>
     */
    public $TaskType;

    /**
     * @param string $Index <p>日志类型标识</p><p>枚举值：</p><ul><li>cfw_netflow_border： 流量日志-互联网边界</li><li>cfw_netflow_vpc： 流量日志-VPC边界</li><li>cfw_netflow_nat： 流量日志-NAT边界</li><li>cfw_rule_acl： 访问控制-互联网边界</li><li>cfw_rule_vpc_acl： 访问控制-VPC边界</li><li>cfw_rule_nat_acl： 访问控制-NAT边界</li><li>cfw_rule_threatinfo： 入侵防御-入侵防御</li><li>cfw_netflow_nta： 全流量检测与响应-流量分析</li><li>cfw_ndr_subject_risk： 全流量检测与响应-流量风险</li><li>cfw_ndr_ai_audit： 全流量检测与响应-AI流量风险</li><li>operate_log_all： 操作日志</li></ul>
     * @param string $StartTime <p>筛选开始时间</p>
     * @param string $EndTime <p>筛选结束时间</p>
     * @param string $TaskName <p>任务名称</p>
     * @param string $DataFormat <p>数据格式</p><p>枚举值：</p><ul><li>.json： JSON格式</li><li>.csv： CSV格式</li></ul>
     * @param string $CompressionFormat <p>压缩方式，.zip、.tar.gz、.tar.zst、.tar.lz4、传空不压缩</p>
     * @param string $Order <p>日志排序，desc时间降序，asc时间升序</p>
     * @param integer $Length <p>日志数量，传0按单次上限导出</p>
     * @param array $Filters <p>过滤条件组合</p>
     * @param string $BucketName <p>COS存储桶名称</p>
     * @param string $BucketRegion <p>COS存储桶地域</p>
     * @param integer $StorageDays <p>文件过期时长，1一天，7七天，-1永久</p>
     * @param string $Query <p>日志分析查询语句，Query和Filters不能同时使用，在一次请求中有且只能选择一个</p>
     * @param string $TaskType <p>导出任务类型，LogAnalysis日志分析导出，LogSearch日志审计导出</p>
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
        if (array_key_exists("Index",$param) and $param["Index"] !== null) {
            $this->Index = $param["Index"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("DataFormat",$param) and $param["DataFormat"] !== null) {
            $this->DataFormat = $param["DataFormat"];
        }

        if (array_key_exists("CompressionFormat",$param) and $param["CompressionFormat"] !== null) {
            $this->CompressionFormat = $param["CompressionFormat"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("Length",$param) and $param["Length"] !== null) {
            $this->Length = $param["Length"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new CommonFilter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("BucketName",$param) and $param["BucketName"] !== null) {
            $this->BucketName = $param["BucketName"];
        }

        if (array_key_exists("BucketRegion",$param) and $param["BucketRegion"] !== null) {
            $this->BucketRegion = $param["BucketRegion"];
        }

        if (array_key_exists("StorageDays",$param) and $param["StorageDays"] !== null) {
            $this->StorageDays = $param["StorageDays"];
        }

        if (array_key_exists("Query",$param) and $param["Query"] !== null) {
            $this->Query = $param["Query"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }
    }
}
