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
 * CheckIsUltimateVersion返回参数结构体
 *
 * @method boolean getIsUltimateVersion() 获取<p>是否旗舰版用户</p>
 * @method void setIsUltimateVersion(boolean $IsUltimateVersion) 设置<p>是否旗舰版用户</p>
 * @method boolean getIsNewUltimateVersion() 获取<p>是否新版旗舰版用户</p>
 * @method void setIsNewUltimateVersion(boolean $IsNewUltimateVersion) 设置<p>是否新版旗舰版用户</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class CheckIsUltimateVersionResponse extends AbstractModel
{
    /**
     * @var boolean <p>是否旗舰版用户</p>
     */
    public $IsUltimateVersion;

    /**
     * @var boolean <p>是否新版旗舰版用户</p>
     */
    public $IsNewUltimateVersion;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param boolean $IsUltimateVersion <p>是否旗舰版用户</p>
     * @param boolean $IsNewUltimateVersion <p>是否新版旗舰版用户</p>
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
        if (array_key_exists("IsUltimateVersion",$param) and $param["IsUltimateVersion"] !== null) {
            $this->IsUltimateVersion = $param["IsUltimateVersion"];
        }

        if (array_key_exists("IsNewUltimateVersion",$param) and $param["IsNewUltimateVersion"] !== null) {
            $this->IsNewUltimateVersion = $param["IsNewUltimateVersion"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
