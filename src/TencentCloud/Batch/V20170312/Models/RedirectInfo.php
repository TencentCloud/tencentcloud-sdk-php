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
 * 重定向信息
 *
 * @method string getStdoutRedirectPath() 获取标准输出重定向路径; 
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStdoutRedirectPath(string $StdoutRedirectPath) 设置标准输出重定向路径; 
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStderrRedirectPath() 获取标准错误重定向路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStderrRedirectPath(string $StderrRedirectPath) 设置标准错误重定向路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStdoutRedirectFileName() 获取标准输出重定向文件名，支持三个占位符${BATCH_JOB_ID}、${BATCH_TASK_NAME}、${BATCH_TASK_INSTANCE_INDEX}
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStdoutRedirectFileName(string $StdoutRedirectFileName) 设置标准输出重定向文件名，支持三个占位符${BATCH_JOB_ID}、${BATCH_TASK_NAME}、${BATCH_TASK_INSTANCE_INDEX}
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStderrRedirectFileName() 获取标准错误重定向文件名，支持三个占位符${BATCH_JOB_ID}、${BATCH_TASK_NAME}、${BATCH_TASK_INSTANCE_INDEX}
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStderrRedirectFileName(string $StderrRedirectFileName) 设置标准错误重定向文件名，支持三个占位符${BATCH_JOB_ID}、${BATCH_TASK_NAME}、${BATCH_TASK_INSTANCE_INDEX}
注意：此字段可能返回 null，表示取不到有效值。
 */
class RedirectInfo extends AbstractModel
{
    /**
     * @var string 标准输出重定向路径; 
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StdoutRedirectPath;

    /**
     * @var string 标准错误重定向路径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StderrRedirectPath;

    /**
     * @var string 标准输出重定向文件名，支持三个占位符${BATCH_JOB_ID}、${BATCH_TASK_NAME}、${BATCH_TASK_INSTANCE_INDEX}
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StdoutRedirectFileName;

    /**
     * @var string 标准错误重定向文件名，支持三个占位符${BATCH_JOB_ID}、${BATCH_TASK_NAME}、${BATCH_TASK_INSTANCE_INDEX}
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StderrRedirectFileName;

    /**
     * @param string $StdoutRedirectPath 标准输出重定向路径; 
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StderrRedirectPath 标准错误重定向路径
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StdoutRedirectFileName 标准输出重定向文件名，支持三个占位符${BATCH_JOB_ID}、${BATCH_TASK_NAME}、${BATCH_TASK_INSTANCE_INDEX}
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StderrRedirectFileName 标准错误重定向文件名，支持三个占位符${BATCH_JOB_ID}、${BATCH_TASK_NAME}、${BATCH_TASK_INSTANCE_INDEX}
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
        if (array_key_exists("StdoutRedirectPath",$param) and $param["StdoutRedirectPath"] !== null) {
            $this->StdoutRedirectPath = $param["StdoutRedirectPath"];
        }

        if (array_key_exists("StderrRedirectPath",$param) and $param["StderrRedirectPath"] !== null) {
            $this->StderrRedirectPath = $param["StderrRedirectPath"];
        }

        if (array_key_exists("StdoutRedirectFileName",$param) and $param["StdoutRedirectFileName"] !== null) {
            $this->StdoutRedirectFileName = $param["StdoutRedirectFileName"];
        }

        if (array_key_exists("StderrRedirectFileName",$param) and $param["StderrRedirectFileName"] !== null) {
            $this->StderrRedirectFileName = $param["StderrRedirectFileName"];
        }
    }
}
