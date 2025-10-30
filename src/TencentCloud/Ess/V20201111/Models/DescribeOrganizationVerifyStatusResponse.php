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
 * DescribeOrganizationVerifyStatus返回参数结构体
 *
 * @method integer getVerifyStatus() 获取当前企业认证状态
<ul>
<li> <b>0 </b>:未认证</li>
<li> <b>1 </b> : 认证中</li>
<li> <b>2 </b> : 已认证</li>
</ul>
 * @method void setVerifyStatus(integer $VerifyStatus) 设置当前企业认证状态
<ul>
<li> <b>0 </b>:未认证</li>
<li> <b>1 </b> : 认证中</li>
<li> <b>2 </b> : 已认证</li>
</ul>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeOrganizationVerifyStatusResponse extends AbstractModel
{
    /**
     * @var integer 当前企业认证状态
<ul>
<li> <b>0 </b>:未认证</li>
<li> <b>1 </b> : 认证中</li>
<li> <b>2 </b> : 已认证</li>
</ul>
     */
    public $VerifyStatus;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $VerifyStatus 当前企业认证状态
<ul>
<li> <b>0 </b>:未认证</li>
<li> <b>1 </b> : 认证中</li>
<li> <b>2 </b> : 已认证</li>
</ul>
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
        if (array_key_exists("VerifyStatus",$param) and $param["VerifyStatus"] !== null) {
            $this->VerifyStatus = $param["VerifyStatus"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
