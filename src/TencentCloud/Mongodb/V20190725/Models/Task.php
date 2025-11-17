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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 日志下载任务描述
 *
 * @method integer getTaskType() 获取下载任务类型，0:慢日志，1:错误日志
 * @method void setTaskType(integer $TaskType) 设置下载任务类型，0:慢日志，1:错误日志
 * @method string getTaskId() 获取任务ID
 * @method void setTaskId(string $TaskId) 设置任务ID
 * @method string getCreateTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFileSize() 获取文件大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileSize(integer $FileSize) 设置文件大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取任务状态，0:初始化，1:运行中，2:成功，3:失败
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置任务状态，0:初始化，1:运行中，2:成功，3:失败
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPercent() 获取百分比
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPercent(integer $Percent) 设置百分比
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUrl() 获取下载链接
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUrl(string $Url) 设置下载链接
注意：此字段可能返回 null，表示取不到有效值。
 */
class Task extends AbstractModel
{
    /**
     * @var integer 下载任务类型，0:慢日志，1:错误日志
     */
    public $TaskType;

    /**
     * @var string 任务ID
     */
    public $TaskId;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var integer 文件大小
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileSize;

    /**
     * @var integer 任务状态，0:初始化，1:运行中，2:成功，3:失败
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var integer 百分比
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Percent;

    /**
     * @var string 下载链接
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Url;

    /**
     * @param integer $TaskType 下载任务类型，0:慢日志，1:错误日志
     * @param string $TaskId 任务ID
     * @param string $CreateTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FileSize 文件大小
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 任务状态，0:初始化，1:运行中，2:成功，3:失败
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Percent 百分比
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Url 下载链接
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("FileSize",$param) and $param["FileSize"] !== null) {
            $this->FileSize = $param["FileSize"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Percent",$param) and $param["Percent"] !== null) {
            $this->Percent = $param["Percent"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }
    }
}
