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
namespace TencentCloud\Bh\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SearchTaskResult请求参数结构体
 *
 * @method string getStartTime() 获取<p>搜索区间的开始时间，缺省时取结束时间前7天（含结束时间当日）</p>
 * @method void setStartTime(string $StartTime) 设置<p>搜索区间的开始时间，缺省时取结束时间前7天（含结束时间当日）</p>
 * @method string getEndTime() 获取<p>搜索区间的结束时间。未指定时，默认取当前时间</p>
 * @method void setEndTime(string $EndTime) 设置<p>搜索区间的结束时间。未指定时，默认取当前时间</p>
 * @method string getOperationId() 获取<p>运维任务ID</p>
 * @method void setOperationId(string $OperationId) 设置<p>运维任务ID</p>
 * @method string getName() 获取<p>运维任务名称</p>
 * @method void setName(string $Name) 设置<p>运维任务名称</p>
 * @method string getUserName() 获取<p>用户名，长度不超过20</p>
 * @method void setUserName(string $UserName) 设置<p>用户名，长度不超过20</p>
 * @method string getRealName() 获取<p>姓名，长度不超过20</p>
 * @method void setRealName(string $RealName) 设置<p>姓名，长度不超过20</p>
 * @method array getTaskType() 获取<p>任务类型<br>1 手工运维任务<br>2 定时任务<br>3 账号推送任务</p>
 * @method void setTaskType(array $TaskType) 设置<p>任务类型<br>1 手工运维任务<br>2 定时任务<br>3 账号推送任务</p>
 * @method integer getOffset() 获取<p>查询偏移</p>
 * @method void setOffset(integer $Offset) 设置<p>查询偏移</p>
 * @method integer getLimit() 获取<p>分页的页内记录数，默认为20，最大200</p>
 * @method void setLimit(integer $Limit) 设置<p>分页的页内记录数，默认为20，最大200</p>
 */
class SearchTaskResultRequest extends AbstractModel
{
    /**
     * @var string <p>搜索区间的开始时间，缺省时取结束时间前7天（含结束时间当日）</p>
     */
    public $StartTime;

    /**
     * @var string <p>搜索区间的结束时间。未指定时，默认取当前时间</p>
     */
    public $EndTime;

    /**
     * @var string <p>运维任务ID</p>
     */
    public $OperationId;

    /**
     * @var string <p>运维任务名称</p>
     */
    public $Name;

    /**
     * @var string <p>用户名，长度不超过20</p>
     */
    public $UserName;

    /**
     * @var string <p>姓名，长度不超过20</p>
     */
    public $RealName;

    /**
     * @var array <p>任务类型<br>1 手工运维任务<br>2 定时任务<br>3 账号推送任务</p>
     */
    public $TaskType;

    /**
     * @var integer <p>查询偏移</p>
     */
    public $Offset;

    /**
     * @var integer <p>分页的页内记录数，默认为20，最大200</p>
     */
    public $Limit;

    /**
     * @param string $StartTime <p>搜索区间的开始时间，缺省时取结束时间前7天（含结束时间当日）</p>
     * @param string $EndTime <p>搜索区间的结束时间。未指定时，默认取当前时间</p>
     * @param string $OperationId <p>运维任务ID</p>
     * @param string $Name <p>运维任务名称</p>
     * @param string $UserName <p>用户名，长度不超过20</p>
     * @param string $RealName <p>姓名，长度不超过20</p>
     * @param array $TaskType <p>任务类型<br>1 手工运维任务<br>2 定时任务<br>3 账号推送任务</p>
     * @param integer $Offset <p>查询偏移</p>
     * @param integer $Limit <p>分页的页内记录数，默认为20，最大200</p>
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

        if (array_key_exists("OperationId",$param) and $param["OperationId"] !== null) {
            $this->OperationId = $param["OperationId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("RealName",$param) and $param["RealName"] !== null) {
            $this->RealName = $param["RealName"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
