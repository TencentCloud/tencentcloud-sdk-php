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
 * CreateSkillScan返回参数结构体
 *
 * @method string getContentHash() 获取文件的 SHA256 Hash，用于轮询 DescribeSkillScanResult 接口
参数格式：sha256:<64位hex>
 * @method void setContentHash(string $ContentHash) 设置文件的 SHA256 Hash，用于轮询 DescribeSkillScanResult 接口
参数格式：sha256:<64位hex>
 * @method integer getEngineVersion() 获取本次请求实际绑定的引擎版本号。调用方应保存并在后续 DescribeSkillScanResult 时显式传入
 * @method void setEngineVersion(integer $EngineVersion) 设置本次请求实际绑定的引擎版本号。调用方应保存并在后续 DescribeSkillScanResult 时显式传入
 * @method string getStatus() 获取任务状态，固定为 SCANNING，表示任务已接收
 * @method void setStatus(string $Status) 设置任务状态，固定为 SCANNING，表示任务已接收
 * @method string getMessage() 获取可读的操作结果描述
 * @method void setMessage(string $Message) 设置可读的操作结果描述
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class CreateSkillScanResponse extends AbstractModel
{
    /**
     * @var string 文件的 SHA256 Hash，用于轮询 DescribeSkillScanResult 接口
参数格式：sha256:<64位hex>
     */
    public $ContentHash;

    /**
     * @var integer 本次请求实际绑定的引擎版本号。调用方应保存并在后续 DescribeSkillScanResult 时显式传入
     */
    public $EngineVersion;

    /**
     * @var string 任务状态，固定为 SCANNING，表示任务已接收
     */
    public $Status;

    /**
     * @var string 可读的操作结果描述
     */
    public $Message;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $ContentHash 文件的 SHA256 Hash，用于轮询 DescribeSkillScanResult 接口
参数格式：sha256:<64位hex>
     * @param integer $EngineVersion 本次请求实际绑定的引擎版本号。调用方应保存并在后续 DescribeSkillScanResult 时显式传入
     * @param string $Status 任务状态，固定为 SCANNING，表示任务已接收
     * @param string $Message 可读的操作结果描述
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
        if (array_key_exists("ContentHash",$param) and $param["ContentHash"] !== null) {
            $this->ContentHash = $param["ContentHash"];
        }

        if (array_key_exists("EngineVersion",$param) and $param["EngineVersion"] !== null) {
            $this->EngineVersion = $param["EngineVersion"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
