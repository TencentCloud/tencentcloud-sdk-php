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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteAuditLogFile请求参数结构体
 *
 * @method string getFileName() 获取审计日志文件名称。可通过 [DescribeAuditLogFiles](https://cloud.tencent.com/document/api/236/45454) 接口获取。
 * @method void setFileName(string $FileName) 设置审计日志文件名称。可通过 [DescribeAuditLogFiles](https://cloud.tencent.com/document/api/236/45454) 接口获取。
 * @method string getInstanceId() 获取实例 ID。可通过 [DescribeDBInstances](https://cloud.tencent.com/document/product/236/15872) 接口获取。
 * @method void setInstanceId(string $InstanceId) 设置实例 ID。可通过 [DescribeDBInstances](https://cloud.tencent.com/document/product/236/15872) 接口获取。
 */
class DeleteAuditLogFileRequest extends AbstractModel
{
    /**
     * @var string 审计日志文件名称。可通过 [DescribeAuditLogFiles](https://cloud.tencent.com/document/api/236/45454) 接口获取。
     */
    public $FileName;

    /**
     * @var string 实例 ID。可通过 [DescribeDBInstances](https://cloud.tencent.com/document/product/236/15872) 接口获取。
     */
    public $InstanceId;

    /**
     * @param string $FileName 审计日志文件名称。可通过 [DescribeAuditLogFiles](https://cloud.tencent.com/document/api/236/45454) 接口获取。
     * @param string $InstanceId 实例 ID。可通过 [DescribeDBInstances](https://cloud.tencent.com/document/product/236/15872) 接口获取。
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
        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }
    }
}
