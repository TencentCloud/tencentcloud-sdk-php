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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDetailedSlowLogs请求参数结构体
 *
 * @method string getInstanceId() 获取实例 ID。请登录 [MongoDB 控制台](https://console.cloud.tencent.com/mongodb)在实例列表复制实例 ID。
 * @method void setInstanceId(string $InstanceId) 设置实例 ID。请登录 [MongoDB 控制台](https://console.cloud.tencent.com/mongodb)在实例列表复制实例 ID。
 * @method string getStartTime() 获取指定查询慢日志的开始时间。- 格式：yyyy-mm-dd hh:mm:ss，如：2019-06-01 10:00:00。- 查询起止时间间隔不能超过24小时，只允许查询最近7天内慢日志。
 * @method void setStartTime(string $StartTime) 设置指定查询慢日志的开始时间。- 格式：yyyy-mm-dd hh:mm:ss，如：2019-06-01 10:00:00。- 查询起止时间间隔不能超过24小时，只允许查询最近7天内慢日志。
 * @method string getEndTime() 获取指定查询慢日志的结束时间。
- 格式：yyyy-mm-dd hh:mm:ss，如：2019-06-02 12:00:00。
- 查询起止时间间隔不能超过24小时，只允许查询最近7天内慢日志。
 * @method void setEndTime(string $EndTime) 设置指定查询慢日志的结束时间。
- 格式：yyyy-mm-dd hh:mm:ss，如：2019-06-02 12:00:00。
- 查询起止时间间隔不能超过24小时，只允许查询最近7天内慢日志。
 * @method integer getExecTime() 获取指定慢日志查询阈值，即查询执行时间大于此值的慢日志。单位：ms，默认值：100。
 * @method void setExecTime(integer $ExecTime) 设置指定慢日志查询阈值，即查询执行时间大于此值的慢日志。单位：ms，默认值：100。
 * @method array getCommands() 获取指定查询慢日志的命令类型。
 * @method void setCommands(array $Commands) 设置指定查询慢日志的命令类型。
 * @method array getTexts() 获取全文搜索关键字，多个关键字间为或关系。
 * @method void setTexts(array $Texts) 设置全文搜索关键字，多个关键字间为或关系。
 * @method array getNodeNames() 获取指定查询慢日志的节点名称。请通过接口 [DescribeDBInstanceNodeProperty](https://cloud.tencent.com/document/product/240/82022) 查询节点名称。
 * @method void setNodeNames(array $NodeNames) 设置指定查询慢日志的节点名称。请通过接口 [DescribeDBInstanceNodeProperty](https://cloud.tencent.com/document/product/240/82022) 查询节点名称。
 * @method array getQueryHash() 获取指定查询 queryHash 值。
 * @method void setQueryHash(array $QueryHash) 设置指定查询 queryHash 值。
 * @method integer getOffset() 获取分页偏移量。默认值：0。取值范围：[0,100]。

 * @method void setOffset(integer $Offset) 设置分页偏移量。默认值：0。取值范围：[0,100]。

 * @method integer getLimit() 获取返回条数。默认值：20。取值范围：[0,10000]
 * @method void setLimit(integer $Limit) 设置返回条数。默认值：20。取值范围：[0,10000]
 * @method string getOrderBy() 获取指定慢日志排序条件。
- StartTime：按照慢日志生成时间排序。
- ExecTime：按照慢日志执行时间排序。
 * @method void setOrderBy(string $OrderBy) 设置指定慢日志排序条件。
- StartTime：按照慢日志生成时间排序。
- ExecTime：按照慢日志执行时间排序。
 * @method string getOrderByType() 获取指定排序方式。
- desc：倒序。
- asc：顺序。
 * @method void setOrderByType(string $OrderByType) 设置指定排序方式。
- desc：倒序。
- asc：顺序。
 */
class DescribeDetailedSlowLogsRequest extends AbstractModel
{
    /**
     * @var string 实例 ID。请登录 [MongoDB 控制台](https://console.cloud.tencent.com/mongodb)在实例列表复制实例 ID。
     */
    public $InstanceId;

    /**
     * @var string 指定查询慢日志的开始时间。- 格式：yyyy-mm-dd hh:mm:ss，如：2019-06-01 10:00:00。- 查询起止时间间隔不能超过24小时，只允许查询最近7天内慢日志。
     */
    public $StartTime;

    /**
     * @var string 指定查询慢日志的结束时间。
- 格式：yyyy-mm-dd hh:mm:ss，如：2019-06-02 12:00:00。
- 查询起止时间间隔不能超过24小时，只允许查询最近7天内慢日志。
     */
    public $EndTime;

    /**
     * @var integer 指定慢日志查询阈值，即查询执行时间大于此值的慢日志。单位：ms，默认值：100。
     */
    public $ExecTime;

    /**
     * @var array 指定查询慢日志的命令类型。
     */
    public $Commands;

    /**
     * @var array 全文搜索关键字，多个关键字间为或关系。
     */
    public $Texts;

    /**
     * @var array 指定查询慢日志的节点名称。请通过接口 [DescribeDBInstanceNodeProperty](https://cloud.tencent.com/document/product/240/82022) 查询节点名称。
     */
    public $NodeNames;

    /**
     * @var array 指定查询 queryHash 值。
     */
    public $QueryHash;

    /**
     * @var integer 分页偏移量。默认值：0。取值范围：[0,100]。

     */
    public $Offset;

    /**
     * @var integer 返回条数。默认值：20。取值范围：[0,10000]
     */
    public $Limit;

    /**
     * @var string 指定慢日志排序条件。
- StartTime：按照慢日志生成时间排序。
- ExecTime：按照慢日志执行时间排序。
     */
    public $OrderBy;

    /**
     * @var string 指定排序方式。
- desc：倒序。
- asc：顺序。
     */
    public $OrderByType;

    /**
     * @param string $InstanceId 实例 ID。请登录 [MongoDB 控制台](https://console.cloud.tencent.com/mongodb)在实例列表复制实例 ID。
     * @param string $StartTime 指定查询慢日志的开始时间。- 格式：yyyy-mm-dd hh:mm:ss，如：2019-06-01 10:00:00。- 查询起止时间间隔不能超过24小时，只允许查询最近7天内慢日志。
     * @param string $EndTime 指定查询慢日志的结束时间。
- 格式：yyyy-mm-dd hh:mm:ss，如：2019-06-02 12:00:00。
- 查询起止时间间隔不能超过24小时，只允许查询最近7天内慢日志。
     * @param integer $ExecTime 指定慢日志查询阈值，即查询执行时间大于此值的慢日志。单位：ms，默认值：100。
     * @param array $Commands 指定查询慢日志的命令类型。
     * @param array $Texts 全文搜索关键字，多个关键字间为或关系。
     * @param array $NodeNames 指定查询慢日志的节点名称。请通过接口 [DescribeDBInstanceNodeProperty](https://cloud.tencent.com/document/product/240/82022) 查询节点名称。
     * @param array $QueryHash 指定查询 queryHash 值。
     * @param integer $Offset 分页偏移量。默认值：0。取值范围：[0,100]。

     * @param integer $Limit 返回条数。默认值：20。取值范围：[0,10000]
     * @param string $OrderBy 指定慢日志排序条件。
- StartTime：按照慢日志生成时间排序。
- ExecTime：按照慢日志执行时间排序。
     * @param string $OrderByType 指定排序方式。
- desc：倒序。
- asc：顺序。
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

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("ExecTime",$param) and $param["ExecTime"] !== null) {
            $this->ExecTime = $param["ExecTime"];
        }

        if (array_key_exists("Commands",$param) and $param["Commands"] !== null) {
            $this->Commands = $param["Commands"];
        }

        if (array_key_exists("Texts",$param) and $param["Texts"] !== null) {
            $this->Texts = $param["Texts"];
        }

        if (array_key_exists("NodeNames",$param) and $param["NodeNames"] !== null) {
            $this->NodeNames = $param["NodeNames"];
        }

        if (array_key_exists("QueryHash",$param) and $param["QueryHash"] !== null) {
            $this->QueryHash = $param["QueryHash"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("OrderByType",$param) and $param["OrderByType"] !== null) {
            $this->OrderByType = $param["OrderByType"];
        }
    }
}
