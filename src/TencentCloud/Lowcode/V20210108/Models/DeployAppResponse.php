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
namespace TencentCloud\Lowcode\V20210108\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeployApp返回参数结构体
 *
 * @method string getBuildId() 获取构建id
 * @method void setBuildId(string $BuildId) 设置构建id
 * @method integer getDeployErrCode() 获取发布错误code
 * @method void setDeployErrCode(integer $DeployErrCode) 设置发布错误code
 * @method string getDeployErrMsg() 获取发布错误信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeployErrMsg(string $DeployErrMsg) 设置发布错误信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DeployAppResponse extends AbstractModel
{
    /**
     * @var string 构建id
     */
    public $BuildId;

    /**
     * @var integer 发布错误code
     */
    public $DeployErrCode;

    /**
     * @var string 发布错误信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeployErrMsg;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $BuildId 构建id
     * @param integer $DeployErrCode 发布错误code
     * @param string $DeployErrMsg 发布错误信息
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
        if (array_key_exists("BuildId",$param) and $param["BuildId"] !== null) {
            $this->BuildId = $param["BuildId"];
        }

        if (array_key_exists("DeployErrCode",$param) and $param["DeployErrCode"] !== null) {
            $this->DeployErrCode = $param["DeployErrCode"];
        }

        if (array_key_exists("DeployErrMsg",$param) and $param["DeployErrMsg"] !== null) {
            $this->DeployErrMsg = $param["DeployErrMsg"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
