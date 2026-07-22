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
 * DeleteSecret返回参数结构体
 *
 * @method string getSecretName() 获取<p>指定删除的凭据名称。</p>
 * @method void setSecretName(string $SecretName) 设置<p>指定删除的凭据名称。</p>
 * @method integer getDeleteTime() 获取<p>凭据删除的日期，unix时间戳。</p>
 * @method void setDeleteTime(integer $DeleteTime) 设置<p>凭据删除的日期，unix时间戳。</p>
 * @method integer getFlowID() 获取<p>异步删除任务 ID</p>
 * @method void setFlowID(integer $FlowID) 设置<p>异步删除任务 ID</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DeleteSecretResponse extends AbstractModel
{
    /**
     * @var string <p>指定删除的凭据名称。</p>
     */
    public $SecretName;

    /**
     * @var integer <p>凭据删除的日期，unix时间戳。</p>
     */
    public $DeleteTime;

    /**
     * @var integer <p>异步删除任务 ID</p>
     */
    public $FlowID;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $SecretName <p>指定删除的凭据名称。</p>
     * @param integer $DeleteTime <p>凭据删除的日期，unix时间戳。</p>
     * @param integer $FlowID <p>异步删除任务 ID</p>
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

        if (array_key_exists("DeleteTime",$param) and $param["DeleteTime"] !== null) {
            $this->DeleteTime = $param["DeleteTime"];
        }

        if (array_key_exists("FlowID",$param) and $param["FlowID"] !== null) {
            $this->FlowID = $param["FlowID"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
