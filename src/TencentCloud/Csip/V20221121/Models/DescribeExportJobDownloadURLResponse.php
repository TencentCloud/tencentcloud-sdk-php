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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeExportJobDownloadURL返回参数结构体
 *
 * @method string getDownloadURL() 获取下载URL
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDownloadURL(string $DownloadURL) 设置下载URL
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExportStatus() 获取任务状态 RUNNING/SUCCESS/FAILURE
 * @method void setExportStatus(string $ExportStatus) 设置任务状态 RUNNING/SUCCESS/FAILURE
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeExportJobDownloadURLResponse extends AbstractModel
{
    /**
     * @var string 下载URL
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DownloadURL;

    /**
     * @var string 任务状态 RUNNING/SUCCESS/FAILURE
     */
    public $ExportStatus;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $DownloadURL 下载URL
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExportStatus 任务状态 RUNNING/SUCCESS/FAILURE
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
        if (array_key_exists("DownloadURL",$param) and $param["DownloadURL"] !== null) {
            $this->DownloadURL = $param["DownloadURL"];
        }

        if (array_key_exists("ExportStatus",$param) and $param["ExportStatus"] !== null) {
            $this->ExportStatus = $param["ExportStatus"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
