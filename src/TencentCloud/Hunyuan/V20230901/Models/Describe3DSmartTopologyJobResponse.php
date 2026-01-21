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
namespace TencentCloud\Hunyuan\V20230901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Describe3DSmartTopologyJob返回参数结构体
 *
 * @method string getStatus() 获取任务状态。WAIT：等待中，RUN：执行中，FAIL：任务失败，DONE：任务成功 示例值：RUN。	
 * @method void setStatus(string $Status) 设置任务状态。WAIT：等待中，RUN：执行中，FAIL：任务失败，DONE：任务成功 示例值：RUN。	
 * @method string getErrorCode() 获取错误码。	
 * @method void setErrorCode(string $ErrorCode) 设置错误码。	
 * @method string getErrorMessage() 获取错误信息。	
 * @method void setErrorMessage(string $ErrorMessage) 设置错误信息。	
 * @method array getResultFile3Ds() 获取生成文件的URL地址，有效期1天。	
 * @method void setResultFile3Ds(array $ResultFile3Ds) 设置生成文件的URL地址，有效期1天。	
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class Describe3DSmartTopologyJobResponse extends AbstractModel
{
    /**
     * @var string 任务状态。WAIT：等待中，RUN：执行中，FAIL：任务失败，DONE：任务成功 示例值：RUN。	
     */
    public $Status;

    /**
     * @var string 错误码。	
     */
    public $ErrorCode;

    /**
     * @var string 错误信息。	
     */
    public $ErrorMessage;

    /**
     * @var array 生成文件的URL地址，有效期1天。	
     */
    public $ResultFile3Ds;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Status 任务状态。WAIT：等待中，RUN：执行中，FAIL：任务失败，DONE：任务成功 示例值：RUN。	
     * @param string $ErrorCode 错误码。	
     * @param string $ErrorMessage 错误信息。	
     * @param array $ResultFile3Ds 生成文件的URL地址，有效期1天。	
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

        if (array_key_exists("ErrorCode",$param) and $param["ErrorCode"] !== null) {
            $this->ErrorCode = $param["ErrorCode"];
        }

        if (array_key_exists("ErrorMessage",$param) and $param["ErrorMessage"] !== null) {
            $this->ErrorMessage = $param["ErrorMessage"];
        }

        if (array_key_exists("ResultFile3Ds",$param) and $param["ResultFile3Ds"] !== null) {
            $this->ResultFile3Ds = [];
            foreach ($param["ResultFile3Ds"] as $key => $value){
                $obj = new File3D();
                $obj->deserialize($value);
                array_push($this->ResultFile3Ds, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
