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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeFirmwareUpdateStatus返回参数结构体
 *
 * @method string getOriVersion() 获取升级任务源版本。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOriVersion(string $OriVersion) 设置升级任务源版本。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDstVersion() 获取升级任务目标版本。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDstVersion(string $DstVersion) 设置升级任务目标版本。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取升级状态：- 0：设备离线。- 1：待处理。- 2：消息下发成功。- 3：下载中。- 4：烧录中。- 5：失败。- 6：升级完成。- 7：正在处理中。- 8：等待用户确认。- 10：升级超时。- 20：下载完成。
 * @method void setStatus(integer $Status) 设置升级状态：- 0：设备离线。- 1：待处理。- 2：消息下发成功。- 3：下载中。- 4：烧录中。- 5：失败。- 6：升级完成。- 7：正在处理中。- 8：等待用户确认。- 10：升级超时。- 20：下载完成。
 * @method integer getPercent() 获取进度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPercent(integer $Percent) 设置进度
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeFirmwareUpdateStatusResponse extends AbstractModel
{
    /**
     * @var string 升级任务源版本。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OriVersion;

    /**
     * @var string 升级任务目标版本。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DstVersion;

    /**
     * @var integer 升级状态：- 0：设备离线。- 1：待处理。- 2：消息下发成功。- 3：下载中。- 4：烧录中。- 5：失败。- 6：升级完成。- 7：正在处理中。- 8：等待用户确认。- 10：升级超时。- 20：下载完成。
     */
    public $Status;

    /**
     * @var integer 进度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Percent;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $OriVersion 升级任务源版本。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DstVersion 升级任务目标版本。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 升级状态：- 0：设备离线。- 1：待处理。- 2：消息下发成功。- 3：下载中。- 4：烧录中。- 5：失败。- 6：升级完成。- 7：正在处理中。- 8：等待用户确认。- 10：升级超时。- 20：下载完成。
     * @param integer $Percent 进度
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("OriVersion",$param) and $param["OriVersion"] !== null) {
            $this->OriVersion = $param["OriVersion"];
        }

        if (array_key_exists("DstVersion",$param) and $param["DstVersion"] !== null) {
            $this->DstVersion = $param["DstVersion"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Percent",$param) and $param["Percent"] !== null) {
            $this->Percent = $param["Percent"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
