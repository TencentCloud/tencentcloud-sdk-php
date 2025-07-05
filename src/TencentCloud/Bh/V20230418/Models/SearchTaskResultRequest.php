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
 * @method string getStartTime() 获取搜索区间的开始时间
 * @method void setStartTime(string $StartTime) 设置搜索区间的开始时间
 * @method string getEndTime() 获取搜索区间的结束时间
 * @method void setEndTime(string $EndTime) 设置搜索区间的结束时间
 * @method string getOperationId() 获取运维任务ID
 * @method void setOperationId(string $OperationId) 设置运维任务ID
 * @method string getName() 获取运维任务名称
 * @method void setName(string $Name) 设置运维任务名称
 * @method string getUserName() 获取用户名，长度不超过20
 * @method void setUserName(string $UserName) 设置用户名，长度不超过20
 * @method string getRealName() 获取姓名，长度不超过20
 * @method void setRealName(string $RealName) 设置姓名，长度不超过20
 * @method array getTaskType() 获取任务类型
1 手工运维任务
2 定时任务
3 账号推送任务
 * @method void setTaskType(array $TaskType) 设置任务类型
1 手工运维任务
2 定时任务
3 账号推送任务
 * @method integer getOffset() 获取查询偏移
 * @method void setOffset(integer $Offset) 设置查询偏移
 * @method integer getLimit() 获取分页的页内记录数，默认为20，最大200
 * @method void setLimit(integer $Limit) 设置分页的页内记录数，默认为20，最大200
 */
class SearchTaskResultRequest extends AbstractModel
{
    /**
     * @var string 搜索区间的开始时间
     */
    public $StartTime;

    /**
     * @var string 搜索区间的结束时间
     */
    public $EndTime;

    /**
     * @var string 运维任务ID
     */
    public $OperationId;

    /**
     * @var string 运维任务名称
     */
    public $Name;

    /**
     * @var string 用户名，长度不超过20
     */
    public $UserName;

    /**
     * @var string 姓名，长度不超过20
     */
    public $RealName;

    /**
     * @var array 任务类型
1 手工运维任务
2 定时任务
3 账号推送任务
     */
    public $TaskType;

    /**
     * @var integer 查询偏移
     */
    public $Offset;

    /**
     * @var integer 分页的页内记录数，默认为20，最大200
     */
    public $Limit;

    /**
     * @param string $StartTime 搜索区间的开始时间
     * @param string $EndTime 搜索区间的结束时间
     * @param string $OperationId 运维任务ID
     * @param string $Name 运维任务名称
     * @param string $UserName 用户名，长度不超过20
     * @param string $RealName 姓名，长度不超过20
     * @param array $TaskType 任务类型
1 手工运维任务
2 定时任务
3 账号推送任务
     * @param integer $Offset 查询偏移
     * @param integer $Limit 分页的页内记录数，默认为20，最大200
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
