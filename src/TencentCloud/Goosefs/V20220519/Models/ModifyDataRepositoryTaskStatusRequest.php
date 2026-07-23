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
namespace TencentCloud\Goosefs\V20220519\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDataRepositoryTaskStatus请求参数结构体
 *
 * @method string getFileSystemId() 获取<p>文件系统ID</p>
 * @method void setFileSystemId(string $FileSystemId) 设置<p>文件系统ID</p>
 * @method string getTaskId() 获取<p>数据流动任务ID</p>
 * @method void setTaskId(string $TaskId) 设置<p>数据流动任务ID</p>
 * @method string getModifyType() 获取<p>修改数据流动任务目标状态对应的类型，仅支持任务暂停和恢复（暂停对应pause，恢复对应resume）</p><p>枚举值：</p><ul><li>pause： 暂停</li><li>resume： 恢复</li></ul>
 * @method void setModifyType(string $ModifyType) 设置<p>修改数据流动任务目标状态对应的类型，仅支持任务暂停和恢复（暂停对应pause，恢复对应resume）</p><p>枚举值：</p><ul><li>pause： 暂停</li><li>resume： 恢复</li></ul>
 */
class ModifyDataRepositoryTaskStatusRequest extends AbstractModel
{
    /**
     * @var string <p>文件系统ID</p>
     */
    public $FileSystemId;

    /**
     * @var string <p>数据流动任务ID</p>
     */
    public $TaskId;

    /**
     * @var string <p>修改数据流动任务目标状态对应的类型，仅支持任务暂停和恢复（暂停对应pause，恢复对应resume）</p><p>枚举值：</p><ul><li>pause： 暂停</li><li>resume： 恢复</li></ul>
     */
    public $ModifyType;

    /**
     * @param string $FileSystemId <p>文件系统ID</p>
     * @param string $TaskId <p>数据流动任务ID</p>
     * @param string $ModifyType <p>修改数据流动任务目标状态对应的类型，仅支持任务暂停和恢复（暂停对应pause，恢复对应resume）</p><p>枚举值：</p><ul><li>pause： 暂停</li><li>resume： 恢复</li></ul>
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

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("ModifyType",$param) and $param["ModifyType"] !== null) {
            $this->ModifyType = $param["ModifyType"];
        }
    }
}
