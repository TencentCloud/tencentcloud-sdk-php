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
 * 任务文件夹信息
 *
 * @method string getProjectId() 获取项目ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectId(string $ProjectId) 设置项目ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskFolderId() 获取文件夹ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskFolderId(string $TaskFolderId) 设置文件夹ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskFolderPath() 获取文件夹绝对路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskFolderPath(string $TaskFolderPath) 设置文件夹绝对路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateUserUin() 获取创建人ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateUserUin(string $CreateUserUin) 设置创建人ID
注意：此字段可能返回 null，表示取不到有效值。
 */
class TaskFolder extends AbstractModel
{
    /**
     * @var string 项目ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectId;

    /**
     * @var string 文件夹ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskFolderId;

    /**
     * @var string 文件夹绝对路径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskFolderPath;

    /**
     * @var string 创建人ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateUserUin;

    /**
     * @param string $ProjectId 项目ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskFolderId 文件夹ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskFolderPath 文件夹绝对路径
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateUserUin 创建人ID
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("TaskFolderId",$param) and $param["TaskFolderId"] !== null) {
            $this->TaskFolderId = $param["TaskFolderId"];
        }

        if (array_key_exists("TaskFolderPath",$param) and $param["TaskFolderPath"] !== null) {
            $this->TaskFolderPath = $param["TaskFolderPath"];
        }

        if (array_key_exists("CreateUserUin",$param) and $param["CreateUserUin"] !== null) {
            $this->CreateUserUin = $param["CreateUserUin"];
        }
    }
}
