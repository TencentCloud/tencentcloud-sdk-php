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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDraftContractByPromptsTask返回参数结构体
 *
 * @method integer getStatus() 获取任务状态，枚举，0 已创建，1 执行中，2 成功，3 失败
 * @method void setStatus(integer $Status) 设置任务状态，枚举，0 已创建，1 执行中，2 成功，3 失败
 * @method string getMessage() 获取任务错误信息，仅在失败时返回
 * @method void setMessage(string $Message) 设置任务错误信息，仅在失败时返回
 * @method string getContractName() 获取生成的合同名称
 * @method void setContractName(string $ContractName) 设置生成的合同名称
 * @method string getResourceId() 获取生成的合同文件资源id
 * @method void setResourceId(string $ResourceId) 设置生成的合同文件资源id
 * @method string getContractUrl() 获取生成的合同文件下载链接，有效期2小时
 * @method void setContractUrl(string $ContractUrl) 设置生成的合同文件下载链接，有效期2小时
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeDraftContractByPromptsTaskResponse extends AbstractModel
{
    /**
     * @var integer 任务状态，枚举，0 已创建，1 执行中，2 成功，3 失败
     */
    public $Status;

    /**
     * @var string 任务错误信息，仅在失败时返回
     */
    public $Message;

    /**
     * @var string 生成的合同名称
     */
    public $ContractName;

    /**
     * @var string 生成的合同文件资源id
     */
    public $ResourceId;

    /**
     * @var string 生成的合同文件下载链接，有效期2小时
     */
    public $ContractUrl;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $Status 任务状态，枚举，0 已创建，1 执行中，2 成功，3 失败
     * @param string $Message 任务错误信息，仅在失败时返回
     * @param string $ContractName 生成的合同名称
     * @param string $ResourceId 生成的合同文件资源id
     * @param string $ContractUrl 生成的合同文件下载链接，有效期2小时
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("ContractName",$param) and $param["ContractName"] !== null) {
            $this->ContractName = $param["ContractName"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("ContractUrl",$param) and $param["ContractUrl"] !== null) {
            $this->ContractUrl = $param["ContractUrl"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
