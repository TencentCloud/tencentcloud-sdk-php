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
 * @method string getFileSystemId() 获取<p>文件系统唯一 ID</p>
 * @method void setFileSystemId(string $FileSystemId) 设置<p>文件系统唯一 ID</p>
 * @method string getType() 获取<p>生命周期任务类型；archive：沉降；restore：预热；release：数据释放；metaload：元数据加载</p>
 * @method void setType(string $Type) 设置<p>生命周期任务类型；archive：沉降；restore：预热；release：数据释放；metaload：元数据加载</p>
 * @method string getTaskName() 获取<p>任务名称</p>
 * @method void setTaskName(string $TaskName) 设置<p>任务名称</p>
 * @method string getTaskPath() 获取<p>需要沉降的路径或文件，仅支持传入1个路径，不允许为空。</p>
 * @method void setTaskPath(string $TaskPath) 设置<p>需要沉降的路径或文件，仅支持传入1个路径，不允许为空。</p>
 * @method string getDataFlowId() 获取<p>数据流动 ID ，该接口可以通过 DescribeDataFlow 查询</p>
 * @method void setDataFlowId(string $DataFlowId) 设置<p>数据流动 ID ，该接口可以通过 DescribeDataFlow 查询</p>
 * @method boolean getIsOverwrite() 获取<p>当CFSTurbo内的文件和外置存储存在同名情况时，是否覆盖。  ture：覆盖  false：不覆盖（同时也不会释放热存数据）  为空时，默认为false</p>
 * @method void setIsOverwrite(boolean $IsOverwrite) 设置<p>当CFSTurbo内的文件和外置存储存在同名情况时，是否覆盖。  ture：覆盖  false：不覆盖（同时也不会释放热存数据）  为空时，默认为false</p>
 * @method string getListPath() 获取<p>【新增】数据清单文件路径，清单文件内每行一条待处理文件的完整路径。与 TaskPath 二选一。路径必须以 /cfs 开头，且必须为 CFS 文件系统内已存在的文件。示例值：/cfs/lists/archive_list.txt</p>
 * @method void setListPath(string $ListPath) 设置<p>【新增】数据清单文件路径，清单文件内每行一条待处理文件的完整路径。与 TaskPath 二选一。路径必须以 /cfs 开头，且必须为 CFS 文件系统内已存在的文件。示例值：/cfs/lists/archive_list.txt</p>
 */
class CreateLifecycleDataTaskRequest extends AbstractModel
{
    /**
     * @var string <p>文件系统唯一 ID</p>
     */
    public $FileSystemId;

    /**
     * @var string <p>生命周期任务类型；archive：沉降；restore：预热；release：数据释放；metaload：元数据加载</p>
     */
    public $Type;

    /**
     * @var string <p>任务名称</p>
     */
    public $TaskName;

    /**
     * @var string <p>需要沉降的路径或文件，仅支持传入1个路径，不允许为空。</p>
     */
    public $TaskPath;

    /**
     * @var string <p>数据流动 ID ，该接口可以通过 DescribeDataFlow 查询</p>
     */
    public $DataFlowId;

    /**
     * @var boolean <p>当CFSTurbo内的文件和外置存储存在同名情况时，是否覆盖。  ture：覆盖  false：不覆盖（同时也不会释放热存数据）  为空时，默认为false</p>
     */
    public $IsOverwrite;

    /**
     * @var string <p>【新增】数据清单文件路径，清单文件内每行一条待处理文件的完整路径。与 TaskPath 二选一。路径必须以 /cfs 开头，且必须为 CFS 文件系统内已存在的文件。示例值：/cfs/lists/archive_list.txt</p>
     */
    public $ListPath;

    /**
     * @param string $FileSystemId <p>文件系统唯一 ID</p>
     * @param string $Type <p>生命周期任务类型；archive：沉降；restore：预热；release：数据释放；metaload：元数据加载</p>
     * @param string $TaskName <p>任务名称</p>
     * @param string $TaskPath <p>需要沉降的路径或文件，仅支持传入1个路径，不允许为空。</p>
     * @param string $DataFlowId <p>数据流动 ID ，该接口可以通过 DescribeDataFlow 查询</p>
     * @param boolean $IsOverwrite <p>当CFSTurbo内的文件和外置存储存在同名情况时，是否覆盖。  ture：覆盖  false：不覆盖（同时也不会释放热存数据）  为空时，默认为false</p>
     * @param string $ListPath <p>【新增】数据清单文件路径，清单文件内每行一条待处理文件的完整路径。与 TaskPath 二选一。路径必须以 /cfs 开头，且必须为 CFS 文件系统内已存在的文件。示例值：/cfs/lists/archive_list.txt</p>
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

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("TaskPath",$param) and $param["TaskPath"] !== null) {
            $this->TaskPath = $param["TaskPath"];
        }

        if (array_key_exists("DataFlowId",$param) and $param["DataFlowId"] !== null) {
            $this->DataFlowId = $param["DataFlowId"];
        }

        if (array_key_exists("IsOverwrite",$param) and $param["IsOverwrite"] !== null) {
            $this->IsOverwrite = $param["IsOverwrite"];
        }

        if (array_key_exists("ListPath",$param) and $param["ListPath"] !== null) {
            $this->ListPath = $param["ListPath"];
        }
    }
}
