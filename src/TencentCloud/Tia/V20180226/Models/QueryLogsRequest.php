<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
namespace TencentCloud\Tia\V20180226\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getJobName() 获取任务名称
 * @method void setJobName(string $JobName) 设置任务名称
 * @method string getCluster() 获取集群名称
 * @method void setCluster(string $Cluster) 设置集群名称
 * @method string getStartTime() 获取查询日志的开始时间
 * @method void setStartTime(string $StartTime) 设置查询日志的开始时间
 * @method string getEndTime() 获取查询日志的结束时间
 * @method void setEndTime(string $EndTime) 设置查询日志的结束时间
 * @method integer getLimit() 获取单次要返回的日志条数
 * @method void setLimit(integer $Limit) 设置单次要返回的日志条数
 * @method string getContext() 获取加载更多使用，透传上次返回的context值，获取后续的日志内容
 * @method void setContext(string $Context) 设置加载更多使用，透传上次返回的context值，获取后续的日志内容
 */

/**
 *QueryLogs请求参数结构体
 */
class QueryLogsRequest extends AbstractModel
{
    /**
     * @var string 任务名称
     */
    public $JobName;

    /**
     * @var string 集群名称
     */
    public $Cluster;

    /**
     * @var string 查询日志的开始时间
     */
    public $StartTime;

    /**
     * @var string 查询日志的结束时间
     */
    public $EndTime;

    /**
     * @var integer 单次要返回的日志条数
     */
    public $Limit;

    /**
     * @var string 加载更多使用，透传上次返回的context值，获取后续的日志内容
     */
    public $Context;
    /**
     * @param string $JobName 任务名称
     * @param string $Cluster 集群名称
     * @param string $StartTime 查询日志的开始时间
     * @param string $EndTime 查询日志的结束时间
     * @param integer $Limit 单次要返回的日志条数
     * @param string $Context 加载更多使用，透传上次返回的context值，获取后续的日志内容
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("JobName",$param) and $param["JobName"] !== null) {
            $this->JobName = $param["JobName"];
        }

        if (array_key_exists("Cluster",$param) and $param["Cluster"] !== null) {
            $this->Cluster = $param["Cluster"];
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

        if (array_key_exists("Context",$param) and $param["Context"] !== null) {
            $this->Context = $param["Context"];
        }
    }
}
