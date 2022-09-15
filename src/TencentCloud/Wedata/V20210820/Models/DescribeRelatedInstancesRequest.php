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
 * DescribeRelatedInstances请求参数结构体
 *
 * @method string getProjectId() 获取项目id
 * @method void setProjectId(string $ProjectId) 设置项目id
 * @method string getCurRunDate() 获取数据时间，格式yyyy-MM-dd HH:mm:ss
 * @method void setCurRunDate(string $CurRunDate) 设置数据时间，格式yyyy-MM-dd HH:mm:ss
 * @method integer getTaskId() 获取任务id
 * @method void setTaskId(integer $TaskId) 设置任务id
 * @method integer getDepth() 获取距离当前任务的层级距离，-1表示取父节点，1表示子节点
 * @method void setDepth(integer $Depth) 设置距离当前任务的层级距离，-1表示取父节点，1表示子节点
 * @method integer getPageNumber() 获取页号，默认为1
 * @method void setPageNumber(integer $PageNumber) 设置页号，默认为1
 * @method integer getPageSize() 获取页大小，默认为10，最大不超过200
 * @method void setPageSize(integer $PageSize) 设置页大小，默认为10，最大不超过200
 */
class DescribeRelatedInstancesRequest extends AbstractModel
{
    /**
     * @var string 项目id
     */
    public $ProjectId;

    /**
     * @var string 数据时间，格式yyyy-MM-dd HH:mm:ss
     */
    public $CurRunDate;

    /**
     * @var integer 任务id
     */
    public $TaskId;

    /**
     * @var integer 距离当前任务的层级距离，-1表示取父节点，1表示子节点
     */
    public $Depth;

    /**
     * @var integer 页号，默认为1
     */
    public $PageNumber;

    /**
     * @var integer 页大小，默认为10，最大不超过200
     */
    public $PageSize;

    /**
     * @param string $ProjectId 项目id
     * @param string $CurRunDate 数据时间，格式yyyy-MM-dd HH:mm:ss
     * @param integer $TaskId 任务id
     * @param integer $Depth 距离当前任务的层级距离，-1表示取父节点，1表示子节点
     * @param integer $PageNumber 页号，默认为1
     * @param integer $PageSize 页大小，默认为10，最大不超过200
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

        if (array_key_exists("CurRunDate",$param) and $param["CurRunDate"] !== null) {
            $this->CurRunDate = $param["CurRunDate"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("Depth",$param) and $param["Depth"] !== null) {
            $this->Depth = $param["Depth"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }
    }
}
