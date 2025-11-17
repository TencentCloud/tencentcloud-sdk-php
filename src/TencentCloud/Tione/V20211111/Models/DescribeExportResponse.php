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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeExport返回参数结构体
 *
 * @method string getExportId() 获取日志下载任务的ID
 * @method void setExportId(string $ExportId) 设置日志下载任务的ID
 * @method string getFileName() 获取日志下载文件名
 * @method void setFileName(string $FileName) 设置日志下载文件名
 * @method string getCosPath() 获取日志导出路径,有效期一个小时，请尽快使用该路径下载。
 * @method void setCosPath(string $CosPath) 设置日志导出路径,有效期一个小时，请尽快使用该路径下载。
 * @method string getCreateTime() 获取下载任务创建时间
 * @method void setCreateTime(string $CreateTime) 设置下载任务创建时间
 * @method string getFileSize() 获取日志文件大小
 * @method void setFileSize(string $FileSize) 设置日志文件大小
 * @method string getStatus() 获取日志下载状态。Processing:导出正在进行中，Completed:导出完成，Failed:导出失败，Expired:日志导出已过期(三天有效期), Queuing 排队中
 * @method void setStatus(string $Status) 设置日志下载状态。Processing:导出正在进行中，Completed:导出完成，Failed:导出失败，Expired:日志导出已过期(三天有效期), Queuing 排队中
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeExportResponse extends AbstractModel
{
    /**
     * @var string 日志下载任务的ID
     */
    public $ExportId;

    /**
     * @var string 日志下载文件名
     */
    public $FileName;

    /**
     * @var string 日志导出路径,有效期一个小时，请尽快使用该路径下载。
     */
    public $CosPath;

    /**
     * @var string 下载任务创建时间
     */
    public $CreateTime;

    /**
     * @var string 日志文件大小
     */
    public $FileSize;

    /**
     * @var string 日志下载状态。Processing:导出正在进行中，Completed:导出完成，Failed:导出失败，Expired:日志导出已过期(三天有效期), Queuing 排队中
     */
    public $Status;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $ExportId 日志下载任务的ID
     * @param string $FileName 日志下载文件名
     * @param string $CosPath 日志导出路径,有效期一个小时，请尽快使用该路径下载。
     * @param string $CreateTime 下载任务创建时间
     * @param string $FileSize 日志文件大小
     * @param string $Status 日志下载状态。Processing:导出正在进行中，Completed:导出完成，Failed:导出失败，Expired:日志导出已过期(三天有效期), Queuing 排队中
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("ExportId",$param) and $param["ExportId"] !== null) {
            $this->ExportId = $param["ExportId"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("CosPath",$param) and $param["CosPath"] !== null) {
            $this->CosPath = $param["CosPath"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("FileSize",$param) and $param["FileSize"] !== null) {
            $this->FileSize = $param["FileSize"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
