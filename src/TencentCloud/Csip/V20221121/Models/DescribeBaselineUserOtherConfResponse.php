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
 * DescribeBaselineUserOtherConf返回参数结构体
 *
 * @method BaselineUserOtherConf getUserConf() 获取<p>当前账号的用户级基线配置。</p>
 * @method void setUserConf(BaselineUserOtherConf $UserConf) 设置<p>当前账号的用户级基线配置。</p>
 * @method boolean getIsSync() 获取<p>是否来自同步</p>
 * @method void setIsSync(boolean $IsSync) 设置<p>是否来自同步</p>
 * @method AccountBriefInfo getAdminInfo() 获取<p>同步的账号信息</p>
 * @method void setAdminInfo(AccountBriefInfo $AdminInfo) 设置<p>同步的账号信息</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeBaselineUserOtherConfResponse extends AbstractModel
{
    /**
     * @var BaselineUserOtherConf <p>当前账号的用户级基线配置。</p>
     */
    public $UserConf;

    /**
     * @var boolean <p>是否来自同步</p>
     */
    public $IsSync;

    /**
     * @var AccountBriefInfo <p>同步的账号信息</p>
     */
    public $AdminInfo;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param BaselineUserOtherConf $UserConf <p>当前账号的用户级基线配置。</p>
     * @param boolean $IsSync <p>是否来自同步</p>
     * @param AccountBriefInfo $AdminInfo <p>同步的账号信息</p>
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
        if (array_key_exists("UserConf",$param) and $param["UserConf"] !== null) {
            $this->UserConf = new BaselineUserOtherConf();
            $this->UserConf->deserialize($param["UserConf"]);
        }

        if (array_key_exists("IsSync",$param) and $param["IsSync"] !== null) {
            $this->IsSync = $param["IsSync"];
        }

        if (array_key_exists("AdminInfo",$param) and $param["AdminInfo"] !== null) {
            $this->AdminInfo = new AccountBriefInfo();
            $this->AdminInfo->deserialize($param["AdminInfo"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
