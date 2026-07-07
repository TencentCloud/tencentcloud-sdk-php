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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeModelRouterLogs请求参数结构体
 *
 * @method string getModelRouterId() 获取<p>模型路由实例ID</p>
 * @method void setModelRouterId(string $ModelRouterId) 设置<p>模型路由实例ID</p>
 * @method string getKeyId() 获取<p>Key的ID</p>
 * @method void setKeyId(string $KeyId) 设置<p>Key的ID</p>
 * @method string getModel() 获取<p>模型名称</p>
 * @method void setModel(string $Model) 设置<p>模型名称</p>
 * @method string getStatus() 获取<p>请求状态</p>
 * @method void setStatus(string $Status) 设置<p>请求状态</p>
 * @method string getStartTime() 获取<p>开始时间，与EndTime需要同时传入、开始时间不得早于24小时前，默认仅查询近5分钟日志</p>
 * @method void setStartTime(string $StartTime) 设置<p>开始时间，与EndTime需要同时传入、开始时间不得早于24小时前，默认仅查询近5分钟日志</p>
 * @method string getEndTime() 获取<p>结束时间，与StartTime需要同时传入、开始时间不得早于24小时前，默认仅查询近5分钟日志</p>
 * @method void setEndTime(string $EndTime) 设置<p>结束时间，与StartTime需要同时传入、开始时间不得早于24小时前，默认仅查询近5分钟日志</p>
 * @method string getNextToken() 获取<p>游标NextToken</p>
 * @method void setNextToken(string $NextToken) 设置<p>游标NextToken</p>
 * @method integer getMaxResults() 获取<p>本次查询最大数量</p><p>取值范围：[1, 100]</p><p>默认值：20</p>
 * @method void setMaxResults(integer $MaxResults) 设置<p>本次查询最大数量</p><p>取值范围：[1, 100]</p><p>默认值：20</p>
 */
class DescribeModelRouterLogsRequest extends AbstractModel
{
    /**
     * @var string <p>模型路由实例ID</p>
     */
    public $ModelRouterId;

    /**
     * @var string <p>Key的ID</p>
     */
    public $KeyId;

    /**
     * @var string <p>模型名称</p>
     */
    public $Model;

    /**
     * @var string <p>请求状态</p>
     */
    public $Status;

    /**
     * @var string <p>开始时间，与EndTime需要同时传入、开始时间不得早于24小时前，默认仅查询近5分钟日志</p>
     */
    public $StartTime;

    /**
     * @var string <p>结束时间，与StartTime需要同时传入、开始时间不得早于24小时前，默认仅查询近5分钟日志</p>
     */
    public $EndTime;

    /**
     * @var string <p>游标NextToken</p>
     */
    public $NextToken;

    /**
     * @var integer <p>本次查询最大数量</p><p>取值范围：[1, 100]</p><p>默认值：20</p>
     */
    public $MaxResults;

    /**
     * @param string $ModelRouterId <p>模型路由实例ID</p>
     * @param string $KeyId <p>Key的ID</p>
     * @param string $Model <p>模型名称</p>
     * @param string $Status <p>请求状态</p>
     * @param string $StartTime <p>开始时间，与EndTime需要同时传入、开始时间不得早于24小时前，默认仅查询近5分钟日志</p>
     * @param string $EndTime <p>结束时间，与StartTime需要同时传入、开始时间不得早于24小时前，默认仅查询近5分钟日志</p>
     * @param string $NextToken <p>游标NextToken</p>
     * @param integer $MaxResults <p>本次查询最大数量</p><p>取值范围：[1, 100]</p><p>默认值：20</p>
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
        if (array_key_exists("ModelRouterId",$param) and $param["ModelRouterId"] !== null) {
            $this->ModelRouterId = $param["ModelRouterId"];
        }

        if (array_key_exists("KeyId",$param) and $param["KeyId"] !== null) {
            $this->KeyId = $param["KeyId"];
        }

        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = $param["Model"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("NextToken",$param) and $param["NextToken"] !== null) {
            $this->NextToken = $param["NextToken"];
        }

        if (array_key_exists("MaxResults",$param) and $param["MaxResults"] !== null) {
            $this->MaxResults = $param["MaxResults"];
        }
    }
}
