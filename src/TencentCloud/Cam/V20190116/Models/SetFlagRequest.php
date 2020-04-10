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
 * SetFlag请求参数结构体
 *
 * @method integer getOpUin() 获取设置用户的uin
 * @method void setOpUin(integer $OpUin) 设置设置用户的uin
 * @method LoginActionFlag getLoginFlag() 获取登录设置
 * @method void setLoginFlag(LoginActionFlag $LoginFlag) 设置登录设置
 * @method LoginActionFlag getActionFlag() 获取敏感操作设置
 * @method void setActionFlag(LoginActionFlag $ActionFlag) 设置敏感操作设置
 * @method OffsiteFlag getOffsiteFlag() 获取异地登录设置
 * @method void setOffsiteFlag(OffsiteFlag $OffsiteFlag) 设置异地登录设置
 * @method integer getNeedResetMfa() 获取是否需要重置mfa
 * @method void setNeedResetMfa(integer $NeedResetMfa) 设置是否需要重置mfa
 */
class SetFlagRequest extends AbstractModel
{
    /**
     * @var integer 设置用户的uin
     */
    public $OpUin;

    /**
     * @var LoginActionFlag 登录设置
     */
    public $LoginFlag;

    /**
     * @var LoginActionFlag 敏感操作设置
     */
    public $ActionFlag;

    /**
     * @var OffsiteFlag 异地登录设置
     */
    public $OffsiteFlag;

    /**
     * @var integer 是否需要重置mfa
     */
    public $NeedResetMfa;

    /**
     * @param integer $OpUin 设置用户的uin
     * @param LoginActionFlag $LoginFlag 登录设置
     * @param LoginActionFlag $ActionFlag 敏感操作设置
     * @param OffsiteFlag $OffsiteFlag 异地登录设置
     * @param integer $NeedResetMfa 是否需要重置mfa
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
        if (array_key_exists("OpUin",$param) and $param["OpUin"] !== null) {
            $this->OpUin = $param["OpUin"];
        }

        if (array_key_exists("LoginFlag",$param) and $param["LoginFlag"] !== null) {
            $this->LoginFlag = new LoginActionFlag();
            $this->LoginFlag->deserialize($param["LoginFlag"]);
        }

        if (array_key_exists("ActionFlag",$param) and $param["ActionFlag"] !== null) {
            $this->ActionFlag = new LoginActionFlag();
            $this->ActionFlag->deserialize($param["ActionFlag"]);
        }

        if (array_key_exists("OffsiteFlag",$param) and $param["OffsiteFlag"] !== null) {
            $this->OffsiteFlag = new OffsiteFlag();
            $this->OffsiteFlag->deserialize($param["OffsiteFlag"]);
        }

        if (array_key_exists("NeedResetMfa",$param) and $param["NeedResetMfa"] !== null) {
            $this->NeedResetMfa = $param["NeedResetMfa"];
        }
    }
}
