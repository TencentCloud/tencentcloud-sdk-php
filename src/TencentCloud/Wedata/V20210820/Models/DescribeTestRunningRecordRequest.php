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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTestRunningRecord请求参数结构体
 *
 * @method string getProjectId() 获取项目ID
 * @method void setProjectId(string $ProjectId) 设置项目ID
 * @method string getTaskId() 获取任务id
 * @method void setTaskId(string $TaskId) 设置任务id
 * @method string getSearchWord() 获取搜索关键词
 * @method void setSearchWord(string $SearchWord) 设置搜索关键词
 * @method string getSearchUserUin() 获取搜索用户UIN
 * @method void setSearchUserUin(string $SearchUserUin) 设置搜索用户UIN
 * @method string getCreateTime() 获取试运行记录创建时间
 * @method void setCreateTime(string $CreateTime) 设置试运行记录创建时间
 * @method string getEndTime() 获取试运行记录最大创建结束时间
 * @method void setEndTime(string $EndTime) 设置试运行记录最大创建结束时间
 * @method array getRecordIdList() 获取试运行记录id
 * @method void setRecordIdList(array $RecordIdList) 设置试运行记录id
 */
class DescribeTestRunningRecordRequest extends AbstractModel
{
    /**
     * @var string 项目ID
     */
    public $ProjectId;

    /**
     * @var string 任务id
     */
    public $TaskId;

    /**
     * @var string 搜索关键词
     */
    public $SearchWord;

    /**
     * @var string 搜索用户UIN
     */
    public $SearchUserUin;

    /**
     * @var string 试运行记录创建时间
     */
    public $CreateTime;

    /**
     * @var string 试运行记录最大创建结束时间
     */
    public $EndTime;

    /**
     * @var array 试运行记录id
     */
    public $RecordIdList;

    /**
     * @param string $ProjectId 项目ID
     * @param string $TaskId 任务id
     * @param string $SearchWord 搜索关键词
     * @param string $SearchUserUin 搜索用户UIN
     * @param string $CreateTime 试运行记录创建时间
     * @param string $EndTime 试运行记录最大创建结束时间
     * @param array $RecordIdList 试运行记录id
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("SearchWord",$param) and $param["SearchWord"] !== null) {
            $this->SearchWord = $param["SearchWord"];
        }

        if (array_key_exists("SearchUserUin",$param) and $param["SearchUserUin"] !== null) {
            $this->SearchUserUin = $param["SearchUserUin"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("RecordIdList",$param) and $param["RecordIdList"] !== null) {
            $this->RecordIdList = $param["RecordIdList"];
        }
    }
}
