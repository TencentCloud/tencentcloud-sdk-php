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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteExportTask请求参数结构体
 *
 * @method string getLogType() 获取<p>日志类型：auditLog,slowLog,errLog</p>
 * @method void setLogType(string $LogType) 设置<p>日志类型：auditLog,slowLog,errLog</p>
 * @method string getFileName() 获取<p>文件名称</p>
 * @method void setFileName(string $FileName) 设置<p>文件名称</p>
 * @method string getInstanceId() 获取<p>实例ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例ID</p>
 */
class DeleteExportTaskRequest extends AbstractModel
{
    /**
     * @var string <p>日志类型：auditLog,slowLog,errLog</p>
     */
    public $LogType;

    /**
     * @var string <p>文件名称</p>
     */
    public $FileName;

    /**
     * @var string <p>实例ID</p>
     */
    public $InstanceId;

    /**
     * @param string $LogType <p>日志类型：auditLog,slowLog,errLog</p>
     * @param string $FileName <p>文件名称</p>
     * @param string $InstanceId <p>实例ID</p>
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
        if (array_key_exists("LogType",$param) and $param["LogType"] !== null) {
            $this->LogType = $param["LogType"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }
    }
}
