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
 * DescribeMongodbLogs请求参数结构体
 *
 * @method string getInstanceId() 获取实例 ID。请登录 [MongoDB 控制台](https://console.cloud.tencent.com/mongodb#/)在实例列表复制实例 ID。
 * @method void setInstanceId(string $InstanceId) 设置实例 ID。请登录 [MongoDB 控制台](https://console.cloud.tencent.com/mongodb#/)在实例列表复制实例 ID。
 * @method string getStartTime() 获取查询日志的开启时间。
- 格式：yyyy-mm-dd hh:mm:ss，如：2019-06-01 10:00:00。
- 查询时间范围：仅支持查询最近 7 天内的日志数据。
 * @method void setStartTime(string $StartTime) 设置查询日志的开启时间。
- 格式：yyyy-mm-dd hh:mm:ss，如：2019-06-01 10:00:00。
- 查询时间范围：仅支持查询最近 7 天内的日志数据。
 * @method string getEndTime() 获取查询日志的结束时间。
- 格式：yyyy-mm-dd hh:mm:ss，如：2019-06-01 10:00:00。
- 查询时间范围：仅支持查询最近 7 天内的日志数据。
 * @method void setEndTime(string $EndTime) 设置查询日志的结束时间。
- 格式：yyyy-mm-dd hh:mm:ss，如：2019-06-01 10:00:00。
- 查询时间范围：仅支持查询最近 7 天内的日志数据。
 * @method array getNodeNames() 获取节点 ID。请登录 [MongoDB 控制台](https://console.cloud.tencent.com/mongodb)的**节点管理**页面获取查询的节点 ID。
 * @method void setNodeNames(array $NodeNames) 设置节点 ID。请登录 [MongoDB 控制台](https://console.cloud.tencent.com/mongodb)的**节点管理**页面获取查询的节点 ID。
 * @method array getLogComponents() 获取日志类别。
- 日志类别包括但不限于 COMMAND、ACCESS、CONTROL、FTDC、INDEX、NETWORK、QUERY、REPL、SHARDING、STORAGE、RECOVERY、JOURNAL 和 WRITE 等。具体支持的类别可能会因 MongoDB 的版本而存在差异。具体信息，请参见[日志消息](https://www.mongodb.com/zh-cn/docs/v5.0/reference/log-messages/#log-message-examples)。
- 登录 [MongoDB 控制台](https://console.cloud.tencent.com/mongodb)，在**日志管理**页面的**错误日志**页签，也可查看**日志类别**。
 * @method void setLogComponents(array $LogComponents) 设置日志类别。
- 日志类别包括但不限于 COMMAND、ACCESS、CONTROL、FTDC、INDEX、NETWORK、QUERY、REPL、SHARDING、STORAGE、RECOVERY、JOURNAL 和 WRITE 等。具体支持的类别可能会因 MongoDB 的版本而存在差异。具体信息，请参见[日志消息](https://www.mongodb.com/zh-cn/docs/v5.0/reference/log-messages/#log-message-examples)。
- 登录 [MongoDB 控制台](https://console.cloud.tencent.com/mongodb)，在**日志管理**页面的**错误日志**页签，也可查看**日志类别**。
 * @method array getLogLevels() 获取日志级别。
- 日志级别按严重性从高到低依次为：FATAL、ERROR、WARNING。
- 登录 [MongoDB 控制台](https://console.cloud.tencent.com/mongodb)，在**日志管理**页面的**错误日志**页签，可查看**日志级别**。
 * @method void setLogLevels(array $LogLevels) 设置日志级别。
- 日志级别按严重性从高到低依次为：FATAL、ERROR、WARNING。
- 登录 [MongoDB 控制台](https://console.cloud.tencent.com/mongodb)，在**日志管理**页面的**错误日志**页签，可查看**日志级别**。
 * @method array getLogIds() 获取日志 ID。登录 [MongoDB 控制台](https://console.cloud.tencent.com/mongodb)，在**日志管理**页面的**错误日志**页签，可查看**日志 ID**。
 * @method void setLogIds(array $LogIds) 设置日志 ID。登录 [MongoDB 控制台](https://console.cloud.tencent.com/mongodb)，在**日志管理**页面的**错误日志**页签，可查看**日志 ID**。
 * @method array getLogConnections() 获取日志连接信息。登录 [MongoDB 控制台](https://console.cloud.tencent.com/mongodb)，在**日志管理**页面的**错误日志**页签，可查看**日志连接信息**。
 * @method void setLogConnections(array $LogConnections) 设置日志连接信息。登录 [MongoDB 控制台](https://console.cloud.tencent.com/mongodb)，在**日志管理**页面的**错误日志**页签，可查看**日志连接信息**。
 * @method array getLogDetailParams() 获取指定日志筛选的字段。
 * @method void setLogDetailParams(array $LogDetailParams) 设置指定日志筛选的字段。
 * @method integer getOffset() 获取偏移量，最小值为0，最大值为10000，默认值为0。
 * @method void setOffset(integer $Offset) 设置偏移量，最小值为0，最大值为10000，默认值为0。
 * @method integer getLimit() 获取分页大小，最小值为1，最大值为100，默认值为20。
 * @method void setLimit(integer $Limit) 设置分页大小，最小值为1，最大值为100，默认值为20。
 */
class DescribeMongodbLogsRequest extends AbstractModel
{
    /**
     * @var string 实例 ID。请登录 [MongoDB 控制台](https://console.cloud.tencent.com/mongodb#/)在实例列表复制实例 ID。
     */
    public $InstanceId;

    /**
     * @var string 查询日志的开启时间。
- 格式：yyyy-mm-dd hh:mm:ss，如：2019-06-01 10:00:00。
- 查询时间范围：仅支持查询最近 7 天内的日志数据。
     */
    public $StartTime;

    /**
     * @var string 查询日志的结束时间。
- 格式：yyyy-mm-dd hh:mm:ss，如：2019-06-01 10:00:00。
- 查询时间范围：仅支持查询最近 7 天内的日志数据。
     */
    public $EndTime;

    /**
     * @var array 节点 ID。请登录 [MongoDB 控制台](https://console.cloud.tencent.com/mongodb)的**节点管理**页面获取查询的节点 ID。
     */
    public $NodeNames;

    /**
     * @var array 日志类别。
- 日志类别包括但不限于 COMMAND、ACCESS、CONTROL、FTDC、INDEX、NETWORK、QUERY、REPL、SHARDING、STORAGE、RECOVERY、JOURNAL 和 WRITE 等。具体支持的类别可能会因 MongoDB 的版本而存在差异。具体信息，请参见[日志消息](https://www.mongodb.com/zh-cn/docs/v5.0/reference/log-messages/#log-message-examples)。
- 登录 [MongoDB 控制台](https://console.cloud.tencent.com/mongodb)，在**日志管理**页面的**错误日志**页签，也可查看**日志类别**。
     */
    public $LogComponents;

    /**
     * @var array 日志级别。
- 日志级别按严重性从高到低依次为：FATAL、ERROR、WARNING。
- 登录 [MongoDB 控制台](https://console.cloud.tencent.com/mongodb)，在**日志管理**页面的**错误日志**页签，可查看**日志级别**。
     */
    public $LogLevels;

    /**
     * @var array 日志 ID。登录 [MongoDB 控制台](https://console.cloud.tencent.com/mongodb)，在**日志管理**页面的**错误日志**页签，可查看**日志 ID**。
     */
    public $LogIds;

    /**
     * @var array 日志连接信息。登录 [MongoDB 控制台](https://console.cloud.tencent.com/mongodb)，在**日志管理**页面的**错误日志**页签，可查看**日志连接信息**。
     */
    public $LogConnections;

    /**
     * @var array 指定日志筛选的字段。
     */
    public $LogDetailParams;

    /**
     * @var integer 偏移量，最小值为0，最大值为10000，默认值为0。
     */
    public $Offset;

    /**
     * @var integer 分页大小，最小值为1，最大值为100，默认值为20。
     */
    public $Limit;

    /**
     * @param string $InstanceId 实例 ID。请登录 [MongoDB 控制台](https://console.cloud.tencent.com/mongodb#/)在实例列表复制实例 ID。
     * @param string $StartTime 查询日志的开启时间。
- 格式：yyyy-mm-dd hh:mm:ss，如：2019-06-01 10:00:00。
- 查询时间范围：仅支持查询最近 7 天内的日志数据。
     * @param string $EndTime 查询日志的结束时间。
- 格式：yyyy-mm-dd hh:mm:ss，如：2019-06-01 10:00:00。
- 查询时间范围：仅支持查询最近 7 天内的日志数据。
     * @param array $NodeNames 节点 ID。请登录 [MongoDB 控制台](https://console.cloud.tencent.com/mongodb)的**节点管理**页面获取查询的节点 ID。
     * @param array $LogComponents 日志类别。
- 日志类别包括但不限于 COMMAND、ACCESS、CONTROL、FTDC、INDEX、NETWORK、QUERY、REPL、SHARDING、STORAGE、RECOVERY、JOURNAL 和 WRITE 等。具体支持的类别可能会因 MongoDB 的版本而存在差异。具体信息，请参见[日志消息](https://www.mongodb.com/zh-cn/docs/v5.0/reference/log-messages/#log-message-examples)。
- 登录 [MongoDB 控制台](https://console.cloud.tencent.com/mongodb)，在**日志管理**页面的**错误日志**页签，也可查看**日志类别**。
     * @param array $LogLevels 日志级别。
- 日志级别按严重性从高到低依次为：FATAL、ERROR、WARNING。
- 登录 [MongoDB 控制台](https://console.cloud.tencent.com/mongodb)，在**日志管理**页面的**错误日志**页签，可查看**日志级别**。
     * @param array $LogIds 日志 ID。登录 [MongoDB 控制台](https://console.cloud.tencent.com/mongodb)，在**日志管理**页面的**错误日志**页签，可查看**日志 ID**。
     * @param array $LogConnections 日志连接信息。登录 [MongoDB 控制台](https://console.cloud.tencent.com/mongodb)，在**日志管理**页面的**错误日志**页签，可查看**日志连接信息**。
     * @param array $LogDetailParams 指定日志筛选的字段。
     * @param integer $Offset 偏移量，最小值为0，最大值为10000，默认值为0。
     * @param integer $Limit 分页大小，最小值为1，最大值为100，默认值为20。
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

        if (array_key_exists("NodeNames",$param) and $param["NodeNames"] !== null) {
            $this->NodeNames = $param["NodeNames"];
        }

        if (array_key_exists("LogComponents",$param) and $param["LogComponents"] !== null) {
            $this->LogComponents = $param["LogComponents"];
        }

        if (array_key_exists("LogLevels",$param) and $param["LogLevels"] !== null) {
            $this->LogLevels = $param["LogLevels"];
        }

        if (array_key_exists("LogIds",$param) and $param["LogIds"] !== null) {
            $this->LogIds = $param["LogIds"];
        }

        if (array_key_exists("LogConnections",$param) and $param["LogConnections"] !== null) {
            $this->LogConnections = $param["LogConnections"];
        }

        if (array_key_exists("LogDetailParams",$param) and $param["LogDetailParams"] !== null) {
            $this->LogDetailParams = $param["LogDetailParams"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
