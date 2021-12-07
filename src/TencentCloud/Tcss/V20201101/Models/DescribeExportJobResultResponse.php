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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeExportJobResult返回参数结构体
 *
 * @method string getExportStatus() 获取导出的状态。取值为, SUCCESS:成功、FAILURE:失败，RUNNING: 进行中。
 * @method void setExportStatus(string $ExportStatus) 设置导出的状态。取值为, SUCCESS:成功、FAILURE:失败，RUNNING: 进行中。
 * @method string getDownloadURL() 获取返回下载URL
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDownloadURL(string $DownloadURL) 设置返回下载URL
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getExportProgress() 获取当ExportStatus为RUNNING时，返回导出进度。0~100范围的浮点数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExportProgress(float $ExportProgress) 设置当ExportStatus为RUNNING时，返回导出进度。0~100范围的浮点数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFailureMsg() 获取失败原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFailureMsg(string $FailureMsg) 设置失败原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeExportJobResultResponse extends AbstractModel
{
    /**
     * @var string 导出的状态。取值为, SUCCESS:成功、FAILURE:失败，RUNNING: 进行中。
     */
    public $ExportStatus;

    /**
     * @var string 返回下载URL
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DownloadURL;

    /**
     * @var float 当ExportStatus为RUNNING时，返回导出进度。0~100范围的浮点数。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExportProgress;

    /**
     * @var string 失败原因
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FailureMsg;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $ExportStatus 导出的状态。取值为, SUCCESS:成功、FAILURE:失败，RUNNING: 进行中。
     * @param string $DownloadURL 返回下载URL
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $ExportProgress 当ExportStatus为RUNNING时，返回导出进度。0~100范围的浮点数。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FailureMsg 失败原因
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("ExportStatus",$param) and $param["ExportStatus"] !== null) {
            $this->ExportStatus = $param["ExportStatus"];
        }

        if (array_key_exists("DownloadURL",$param) and $param["DownloadURL"] !== null) {
            $this->DownloadURL = $param["DownloadURL"];
        }

        if (array_key_exists("ExportProgress",$param) and $param["ExportProgress"] !== null) {
            $this->ExportProgress = $param["ExportProgress"];
        }

        if (array_key_exists("FailureMsg",$param) and $param["FailureMsg"] !== null) {
            $this->FailureMsg = $param["FailureMsg"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
