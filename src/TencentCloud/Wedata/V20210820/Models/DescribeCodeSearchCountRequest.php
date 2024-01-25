<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * DescribeCodeSearchCount请求参数结构体
 *
 * @method string getKeyword() 获取搜索关键词
 * @method void setKeyword(string $Keyword) 设置搜索关键词
 * @method array getSearchScopes() 获取搜索范围列表
 * @method void setSearchScopes(array $SearchScopes) 设置搜索范围列表
 * @method string getProjectId() 获取项目ID
 * @method void setProjectId(string $ProjectId) 设置项目ID
 * @method array getOwnerIds() 获取责任人ID列表
 * @method void setOwnerIds(array $OwnerIds) 设置责任人ID列表
 * @method array getFileTypes() 获取文件类型列表
 * @method void setFileTypes(array $FileTypes) 设置文件类型列表
 * @method array getTaskTypes() 获取任务类型列表
 * @method void setTaskTypes(array $TaskTypes) 设置任务类型列表
 * @method string getStartTime() 获取更新时间范围：开始时间
 * @method void setStartTime(string $StartTime) 设置更新时间范围：开始时间
 * @method string getEndTime() 获取更新时间范围：结束时间
 * @method void setEndTime(string $EndTime) 设置更新时间范围：结束时间
 * @method string getStatus() 获取任务状态
 * @method void setStatus(string $Status) 设置任务状态
 */
class DescribeCodeSearchCountRequest extends AbstractModel
{
    /**
     * @var string 搜索关键词
     */
    public $Keyword;

    /**
     * @var array 搜索范围列表
     */
    public $SearchScopes;

    /**
     * @var string 项目ID
     */
    public $ProjectId;

    /**
     * @var array 责任人ID列表
     */
    public $OwnerIds;

    /**
     * @var array 文件类型列表
     */
    public $FileTypes;

    /**
     * @var array 任务类型列表
     */
    public $TaskTypes;

    /**
     * @var string 更新时间范围：开始时间
     */
    public $StartTime;

    /**
     * @var string 更新时间范围：结束时间
     */
    public $EndTime;

    /**
     * @var string 任务状态
     */
    public $Status;

    /**
     * @param string $Keyword 搜索关键词
     * @param array $SearchScopes 搜索范围列表
     * @param string $ProjectId 项目ID
     * @param array $OwnerIds 责任人ID列表
     * @param array $FileTypes 文件类型列表
     * @param array $TaskTypes 任务类型列表
     * @param string $StartTime 更新时间范围：开始时间
     * @param string $EndTime 更新时间范围：结束时间
     * @param string $Status 任务状态
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
        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }

        if (array_key_exists("SearchScopes",$param) and $param["SearchScopes"] !== null) {
            $this->SearchScopes = $param["SearchScopes"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("OwnerIds",$param) and $param["OwnerIds"] !== null) {
            $this->OwnerIds = $param["OwnerIds"];
        }

        if (array_key_exists("FileTypes",$param) and $param["FileTypes"] !== null) {
            $this->FileTypes = $param["FileTypes"];
        }

        if (array_key_exists("TaskTypes",$param) and $param["TaskTypes"] !== null) {
            $this->TaskTypes = $param["TaskTypes"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
