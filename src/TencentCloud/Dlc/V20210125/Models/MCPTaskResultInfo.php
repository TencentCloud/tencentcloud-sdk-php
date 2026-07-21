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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * MCP 任务结果返回
 *
 * @method string getTaskId() 获取<p>任务 ID</p>
 * @method void setTaskId(string $TaskId) 设置<p>任务 ID</p>
 * @method integer getState() 获取<p>状态</p>
 * @method void setState(integer $State) 设置<p>状态</p>
 * @method array getResultSchema() 获取<p>结果集 Schema</p>
 * @method void setResultSchema(array $ResultSchema) 设置<p>结果集 Schema</p>
 * @method string getResultSet() 获取<p>结果集</p>
 * @method void setResultSet(string $ResultSet) 设置<p>结果集</p>
 * @method string getNextToken() 获取<p>是否还有其他结果</p>
 * @method void setNextToken(string $NextToken) 设置<p>是否还有其他结果</p>
 * @method string getRowAffectInfo() 获取<p>影响行数</p>
 * @method void setRowAffectInfo(string $RowAffectInfo) 设置<p>影响行数</p>
 * @method string getOutputMessage() 获取<p>输出信息</p>
 * @method void setOutputMessage(string $OutputMessage) 设置<p>输出信息</p>
 * @method string getDisplayFormat() 获取<p>展示 format</p>
 * @method void setDisplayFormat(string $DisplayFormat) 设置<p>展示 format</p>
 * @method boolean getCanDownload() 获取<p>能否下载</p>
 * @method void setCanDownload(boolean $CanDownload) 设置<p>能否下载</p>
 * @method float getQueryResultTime() 获取<p>结果花费时间</p><p>单位：毫秒</p>
 * @method void setQueryResultTime(float $QueryResultTime) 设置<p>结果花费时间</p><p>单位：毫秒</p>
 * @method boolean getIsResultOversize() 获取<p>是否超大</p>
 * @method void setIsResultOversize(boolean $IsResultOversize) 设置<p>是否超大</p>
 */
class MCPTaskResultInfo extends AbstractModel
{
    /**
     * @var string <p>任务 ID</p>
     */
    public $TaskId;

    /**
     * @var integer <p>状态</p>
     */
    public $State;

    /**
     * @var array <p>结果集 Schema</p>
     */
    public $ResultSchema;

    /**
     * @var string <p>结果集</p>
     */
    public $ResultSet;

    /**
     * @var string <p>是否还有其他结果</p>
     */
    public $NextToken;

    /**
     * @var string <p>影响行数</p>
     */
    public $RowAffectInfo;

    /**
     * @var string <p>输出信息</p>
     */
    public $OutputMessage;

    /**
     * @var string <p>展示 format</p>
     */
    public $DisplayFormat;

    /**
     * @var boolean <p>能否下载</p>
     */
    public $CanDownload;

    /**
     * @var float <p>结果花费时间</p><p>单位：毫秒</p>
     */
    public $QueryResultTime;

    /**
     * @var boolean <p>是否超大</p>
     */
    public $IsResultOversize;

    /**
     * @param string $TaskId <p>任务 ID</p>
     * @param integer $State <p>状态</p>
     * @param array $ResultSchema <p>结果集 Schema</p>
     * @param string $ResultSet <p>结果集</p>
     * @param string $NextToken <p>是否还有其他结果</p>
     * @param string $RowAffectInfo <p>影响行数</p>
     * @param string $OutputMessage <p>输出信息</p>
     * @param string $DisplayFormat <p>展示 format</p>
     * @param boolean $CanDownload <p>能否下载</p>
     * @param float $QueryResultTime <p>结果花费时间</p><p>单位：毫秒</p>
     * @param boolean $IsResultOversize <p>是否超大</p>
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("ResultSchema",$param) and $param["ResultSchema"] !== null) {
            $this->ResultSchema = [];
            foreach ($param["ResultSchema"] as $key => $value){
                $obj = new Column();
                $obj->deserialize($value);
                array_push($this->ResultSchema, $obj);
            }
        }

        if (array_key_exists("ResultSet",$param) and $param["ResultSet"] !== null) {
            $this->ResultSet = $param["ResultSet"];
        }

        if (array_key_exists("NextToken",$param) and $param["NextToken"] !== null) {
            $this->NextToken = $param["NextToken"];
        }

        if (array_key_exists("RowAffectInfo",$param) and $param["RowAffectInfo"] !== null) {
            $this->RowAffectInfo = $param["RowAffectInfo"];
        }

        if (array_key_exists("OutputMessage",$param) and $param["OutputMessage"] !== null) {
            $this->OutputMessage = $param["OutputMessage"];
        }

        if (array_key_exists("DisplayFormat",$param) and $param["DisplayFormat"] !== null) {
            $this->DisplayFormat = $param["DisplayFormat"];
        }

        if (array_key_exists("CanDownload",$param) and $param["CanDownload"] !== null) {
            $this->CanDownload = $param["CanDownload"];
        }

        if (array_key_exists("QueryResultTime",$param) and $param["QueryResultTime"] !== null) {
            $this->QueryResultTime = $param["QueryResultTime"];
        }

        if (array_key_exists("IsResultOversize",$param) and $param["IsResultOversize"] !== null) {
            $this->IsResultOversize = $param["IsResultOversize"];
        }
    }
}
