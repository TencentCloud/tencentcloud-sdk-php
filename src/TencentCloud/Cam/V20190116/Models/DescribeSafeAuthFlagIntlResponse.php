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
namespace TencentCloud\Cam\V20190116\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSafeAuthFlagIntl返回参数结构体
 *
 * @method LoginActionFlagIntl getLoginFlag() 获取登录保护设置
 * @method void setLoginFlag(LoginActionFlagIntl $LoginFlag) 设置登录保护设置
 * @method LoginActionFlagIntl getActionFlag() 获取敏感操作保护设置
 * @method void setActionFlag(LoginActionFlagIntl $ActionFlag) 设置敏感操作保护设置
 * @method OffsiteFlag getOffsiteFlag() 获取异地登录保护设置
 * @method void setOffsiteFlag(OffsiteFlag $OffsiteFlag) 设置异地登录保护设置
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeSafeAuthFlagIntlResponse extends AbstractModel
{
    /**
     * @var LoginActionFlagIntl 登录保护设置
     */
    public $LoginFlag;

    /**
     * @var LoginActionFlagIntl 敏感操作保护设置
     */
    public $ActionFlag;

    /**
     * @var OffsiteFlag 异地登录保护设置
     */
    public $OffsiteFlag;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param LoginActionFlagIntl $LoginFlag 登录保护设置
     * @param LoginActionFlagIntl $ActionFlag 敏感操作保护设置
     * @param OffsiteFlag $OffsiteFlag 异地登录保护设置
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("LoginFlag",$param) and $param["LoginFlag"] !== null) {
            $this->LoginFlag = new LoginActionFlagIntl();
            $this->LoginFlag->deserialize($param["LoginFlag"]);
        }

        if (array_key_exists("ActionFlag",$param) and $param["ActionFlag"] !== null) {
            $this->ActionFlag = new LoginActionFlagIntl();
            $this->ActionFlag->deserialize($param["ActionFlag"]);
        }

        if (array_key_exists("OffsiteFlag",$param) and $param["OffsiteFlag"] !== null) {
            $this->OffsiteFlag = new OffsiteFlag();
            $this->OffsiteFlag->deserialize($param["OffsiteFlag"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
