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
namespace TencentCloud\Cfs\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateLifecycleDataTask请求参数结构体
 *
 * @method string getFileSystemId() 获取文件系统唯一 ID
 * @method void setFileSystemId(string $FileSystemId) 设置文件系统唯一 ID
 * @method string getType() 获取生命周期任务类型；archive：沉降；restore：预热；release：数据释放；metaload：元数据加载
 * @method void setType(string $Type) 设置生命周期任务类型；archive：沉降；restore：预热；release：数据释放；metaload：元数据加载
 * @method string getTaskPath() 获取需要沉降的路径或文件，仅支持传入1个路径，不允许为空。
 * @method void setTaskPath(string $TaskPath) 设置需要沉降的路径或文件，仅支持传入1个路径，不允许为空。
 * @method string getTaskName() 获取任务名称
 * @method void setTaskName(string $TaskName) 设置任务名称
 * @method string getDataFlowId() 获取数据流动 ID ，该接口可以通过 DescribeDataFlow 查询
 * @method void setDataFlowId(string $DataFlowId) 设置数据流动 ID ，该接口可以通过 DescribeDataFlow 查询
 * @method boolean getIsOverwrite() 获取	 当CFSTurbo内的文件和外置存储存在同名情况时，是否覆盖。  ture：覆盖  false：不覆盖（同时也不会释放热存数据）  为空时，默认为false
 * @method void setIsOverwrite(boolean $IsOverwrite) 设置	 当CFSTurbo内的文件和外置存储存在同名情况时，是否覆盖。  ture：覆盖  false：不覆盖（同时也不会释放热存数据）  为空时，默认为false
 */
class CreateLifecycleDataTaskRequest extends AbstractModel
{
    /**
     * @var string 文件系统唯一 ID
     */
    public $FileSystemId;

    /**
     * @var string 生命周期任务类型；archive：沉降；restore：预热；release：数据释放；metaload：元数据加载
     */
    public $Type;

    /**
     * @var string 需要沉降的路径或文件，仅支持传入1个路径，不允许为空。
     */
    public $TaskPath;

    /**
     * @var string 任务名称
     */
    public $TaskName;

    /**
     * @var string 数据流动 ID ，该接口可以通过 DescribeDataFlow 查询
     */
    public $DataFlowId;

    /**
     * @var boolean 	 当CFSTurbo内的文件和外置存储存在同名情况时，是否覆盖。  ture：覆盖  false：不覆盖（同时也不会释放热存数据）  为空时，默认为false
     */
    public $IsOverwrite;

    /**
     * @param string $FileSystemId 文件系统唯一 ID
     * @param string $Type 生命周期任务类型；archive：沉降；restore：预热；release：数据释放；metaload：元数据加载
     * @param string $TaskPath 需要沉降的路径或文件，仅支持传入1个路径，不允许为空。
     * @param string $TaskName 任务名称
     * @param string $DataFlowId 数据流动 ID ，该接口可以通过 DescribeDataFlow 查询
     * @param boolean $IsOverwrite 	 当CFSTurbo内的文件和外置存储存在同名情况时，是否覆盖。  ture：覆盖  false：不覆盖（同时也不会释放热存数据）  为空时，默认为false
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
        if (array_key_exists("FileSystemId",$param) and $param["FileSystemId"] !== null) {
            $this->FileSystemId = $param["FileSystemId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("TaskPath",$param) and $param["TaskPath"] !== null) {
            $this->TaskPath = $param["TaskPath"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("DataFlowId",$param) and $param["DataFlowId"] !== null) {
            $this->DataFlowId = $param["DataFlowId"];
        }

        if (array_key_exists("IsOverwrite",$param) and $param["IsOverwrite"] !== null) {
            $this->IsOverwrite = $param["IsOverwrite"];
        }
    }
}
