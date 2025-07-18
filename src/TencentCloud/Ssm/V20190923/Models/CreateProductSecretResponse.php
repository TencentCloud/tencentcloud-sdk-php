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
namespace TencentCloud\Ssm\V20190923\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateProductSecret返回参数结构体
 *
 * @method string getSecretName() 获取创建的凭据名称。
 * @method void setSecretName(string $SecretName) 设置创建的凭据名称。
 * @method integer getTagCode() 获取标签操作的返回码. 0: 成功；1: 内部错误；2: 业务处理错误。
 * @method void setTagCode(integer $TagCode) 设置标签操作的返回码. 0: 成功；1: 内部错误；2: 业务处理错误。
 * @method string getTagMsg() 获取标签操作的返回信息。
 * @method void setTagMsg(string $TagMsg) 设置标签操作的返回信息。
 * @method integer getFlowID() 获取创建云产品凭据异步任务ID号。
 * @method void setFlowID(integer $FlowID) 设置创建云产品凭据异步任务ID号。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class CreateProductSecretResponse extends AbstractModel
{
    /**
     * @var string 创建的凭据名称。
     */
    public $SecretName;

    /**
     * @var integer 标签操作的返回码. 0: 成功；1: 内部错误；2: 业务处理错误。
     */
    public $TagCode;

    /**
     * @var string 标签操作的返回信息。
     */
    public $TagMsg;

    /**
     * @var integer 创建云产品凭据异步任务ID号。
     */
    public $FlowID;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $SecretName 创建的凭据名称。
     * @param integer $TagCode 标签操作的返回码. 0: 成功；1: 内部错误；2: 业务处理错误。
     * @param string $TagMsg 标签操作的返回信息。
     * @param integer $FlowID 创建云产品凭据异步任务ID号。
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
        if (array_key_exists("SecretName",$param) and $param["SecretName"] !== null) {
            $this->SecretName = $param["SecretName"];
        }

        if (array_key_exists("TagCode",$param) and $param["TagCode"] !== null) {
            $this->TagCode = $param["TagCode"];
        }

        if (array_key_exists("TagMsg",$param) and $param["TagMsg"] !== null) {
            $this->TagMsg = $param["TagMsg"];
        }

        if (array_key_exists("FlowID",$param) and $param["FlowID"] !== null) {
            $this->FlowID = $param["FlowID"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
