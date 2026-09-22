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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Notebook 类型任务扩展
 *
 * @method string getSource() 获取<p>脚本来源。取值：SCRIPT_SOURCE_LOCAL（本地）/ SCRIPT_SOURCE_GIT（Git 仓库）/<br>SCRIPT_SOURCE_CFS（CFS 文件系统）/ SCRIPT_SOURCE_COS（COS 对象存储）/<br>SCRIPT_SOURCE_WORKSPACE（工作空间）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSource(string $Source) 设置<p>脚本来源。取值：SCRIPT_SOURCE_LOCAL（本地）/ SCRIPT_SOURCE_GIT（Git 仓库）/<br>SCRIPT_SOURCE_CFS（CFS 文件系统）/ SCRIPT_SOURCE_COS（COS 对象存储）/<br>SCRIPT_SOURCE_WORKSPACE（工作空间）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDisplayPath() 获取<p>前端显示使用，对执行平台无意义</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDisplayPath(string $DisplayPath) 设置<p>前端显示使用，对执行平台无意义</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNotebookPath() 获取<p>Notebook 相对路径</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNotebookPath(string $NotebookPath) 设置<p>Notebook 相对路径</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNotebookAbsolutePath() 获取<p>Notebook 绝对路径</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNotebookAbsolutePath(string $NotebookAbsolutePath) 设置<p>Notebook 绝对路径</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class TaskTypeNotebookExt extends AbstractModel
{
    /**
     * @var string <p>脚本来源。取值：SCRIPT_SOURCE_LOCAL（本地）/ SCRIPT_SOURCE_GIT（Git 仓库）/<br>SCRIPT_SOURCE_CFS（CFS 文件系统）/ SCRIPT_SOURCE_COS（COS 对象存储）/<br>SCRIPT_SOURCE_WORKSPACE（工作空间）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Source;

    /**
     * @var string <p>前端显示使用，对执行平台无意义</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DisplayPath;

    /**
     * @var string <p>Notebook 相对路径</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NotebookPath;

    /**
     * @var string <p>Notebook 绝对路径</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NotebookAbsolutePath;

    /**
     * @param string $Source <p>脚本来源。取值：SCRIPT_SOURCE_LOCAL（本地）/ SCRIPT_SOURCE_GIT（Git 仓库）/<br>SCRIPT_SOURCE_CFS（CFS 文件系统）/ SCRIPT_SOURCE_COS（COS 对象存储）/<br>SCRIPT_SOURCE_WORKSPACE（工作空间）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DisplayPath <p>前端显示使用，对执行平台无意义</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NotebookPath <p>Notebook 相对路径</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NotebookAbsolutePath <p>Notebook 绝对路径</p>
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
        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("DisplayPath",$param) and $param["DisplayPath"] !== null) {
            $this->DisplayPath = $param["DisplayPath"];
        }

        if (array_key_exists("NotebookPath",$param) and $param["NotebookPath"] !== null) {
            $this->NotebookPath = $param["NotebookPath"];
        }

        if (array_key_exists("NotebookAbsolutePath",$param) and $param["NotebookAbsolutePath"] !== null) {
            $this->NotebookAbsolutePath = $param["NotebookAbsolutePath"];
        }
    }
}
