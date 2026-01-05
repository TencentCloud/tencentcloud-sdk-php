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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListTriggerTaskVersions请求参数结构体
 *
 * @method string getProjectId() 获取项目ID
 * @method void setProjectId(string $ProjectId) 设置项目ID
 * @method string getTaskId() 获取任务ID
 * @method void setTaskId(string $TaskId) 设置任务ID
 * @method string getTaskVersionType() 获取保存版本：SAVE
提交版本：SUBMIT
默认为SAVE
 * @method void setTaskVersionType(string $TaskVersionType) 设置保存版本：SAVE
提交版本：SUBMIT
默认为SAVE
 * @method integer getPageNumber() 获取请求的数据页数。默认值为1，取值大于等于1。
 * @method void setPageNumber(integer $PageNumber) 设置请求的数据页数。默认值为1，取值大于等于1。
 * @method integer getPageSize() 获取每页显示的数据条数。默认值为10 ，最小值为10，最大值为200。
 * @method void setPageSize(integer $PageSize) 设置每页显示的数据条数。默认值为10 ，最小值为10，最大值为200。
 */
class ListTriggerTaskVersionsRequest extends AbstractModel
{
    /**
     * @var string 项目ID
     */
    public $ProjectId;

    /**
     * @var string 任务ID
     */
    public $TaskId;

    /**
     * @var string 保存版本：SAVE
提交版本：SUBMIT
默认为SAVE
     */
    public $TaskVersionType;

    /**
     * @var integer 请求的数据页数。默认值为1，取值大于等于1。
     */
    public $PageNumber;

    /**
     * @var integer 每页显示的数据条数。默认值为10 ，最小值为10，最大值为200。
     */
    public $PageSize;

    /**
     * @param string $ProjectId 项目ID
     * @param string $TaskId 任务ID
     * @param string $TaskVersionType 保存版本：SAVE
提交版本：SUBMIT
默认为SAVE
     * @param integer $PageNumber 请求的数据页数。默认值为1，取值大于等于1。
     * @param integer $PageSize 每页显示的数据条数。默认值为10 ，最小值为10，最大值为200。
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

        if (array_key_exists("TaskVersionType",$param) and $param["TaskVersionType"] !== null) {
            $this->TaskVersionType = $param["TaskVersionType"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }
    }
}
