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
namespace TencentCloud\Batch\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 输出映射选项
 *
 * @method string getWorkspace() 获取容器场景下,输出选项从实例映射到容器内的实例侧的工作空间。
BATCH_WORKSPACE: 工作空间为BATCH在实例内定义的工作空间，BATCH侧保证作业之间的隔离。（默认）
GLOBAL_WORKSPACE: 工作空间为实例操作系统空间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkspace(string $Workspace) 设置容器场景下,输出选项从实例映射到容器内的实例侧的工作空间。
BATCH_WORKSPACE: 工作空间为BATCH在实例内定义的工作空间，BATCH侧保证作业之间的隔离。（默认）
GLOBAL_WORKSPACE: 工作空间为实例操作系统空间。
注意：此字段可能返回 null，表示取不到有效值。
 */
class OutputMappingOption extends AbstractModel
{
    /**
     * @var string 容器场景下,输出选项从实例映射到容器内的实例侧的工作空间。
BATCH_WORKSPACE: 工作空间为BATCH在实例内定义的工作空间，BATCH侧保证作业之间的隔离。（默认）
GLOBAL_WORKSPACE: 工作空间为实例操作系统空间。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Workspace;

    /**
     * @param string $Workspace 容器场景下,输出选项从实例映射到容器内的实例侧的工作空间。
BATCH_WORKSPACE: 工作空间为BATCH在实例内定义的工作空间，BATCH侧保证作业之间的隔离。（默认）
GLOBAL_WORKSPACE: 工作空间为实例操作系统空间。
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
        if (array_key_exists("Workspace",$param) and $param["Workspace"] !== null) {
            $this->Workspace = $param["Workspace"];
        }
    }
}
