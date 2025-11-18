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
 * DeleteAuditLogFile请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID，格式如：cmgo-test1234，与云数据库控制台页面中显示的实例 ID 相同。
 * @method void setInstanceId(string $InstanceId) 设置实例ID，格式如：cmgo-test1234，与云数据库控制台页面中显示的实例 ID 相同。
 * @method string getFileName() 获取审计日志文件名称，须保证文件名的准确性。
 * @method void setFileName(string $FileName) 设置审计日志文件名称，须保证文件名的准确性。
 */
class DeleteAuditLogFileRequest extends AbstractModel
{
    /**
     * @var string 实例ID，格式如：cmgo-test1234，与云数据库控制台页面中显示的实例 ID 相同。
     */
    public $InstanceId;

    /**
     * @var string 审计日志文件名称，须保证文件名的准确性。
     */
    public $FileName;

    /**
     * @param string $InstanceId 实例ID，格式如：cmgo-test1234，与云数据库控制台页面中显示的实例 ID 相同。
     * @param string $FileName 审计日志文件名称，须保证文件名的准确性。
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }
    }
}
