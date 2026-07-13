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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 查询策略输出的用户回调信息
 *
 * @method string getCallbackUrl() 获取<p>用户回调接口地址</p>
 * @method void setCallbackUrl(string $CallbackUrl) 设置<p>用户回调接口地址</p>
 * @method integer getValidFlag() 获取<p>用户回调接口状态，0表示未验证，1表示已验证，2表示存在url但没有通过验证</p>
 * @method void setValidFlag(integer $ValidFlag) 设置<p>用户回调接口状态，0表示未验证，1表示已验证，2表示存在url但没有通过验证</p>
 * @method string getVerifyCode() 获取<p>用户回调接口验证码</p>
 * @method void setVerifyCode(string $VerifyCode) 设置<p>用户回调接口验证码</p>
 */
class DescribePolicyGroupInfoCallback extends AbstractModel
{
    /**
     * @var string <p>用户回调接口地址</p>
     */
    public $CallbackUrl;

    /**
     * @var integer <p>用户回调接口状态，0表示未验证，1表示已验证，2表示存在url但没有通过验证</p>
     */
    public $ValidFlag;

    /**
     * @var string <p>用户回调接口验证码</p>
     */
    public $VerifyCode;

    /**
     * @param string $CallbackUrl <p>用户回调接口地址</p>
     * @param integer $ValidFlag <p>用户回调接口状态，0表示未验证，1表示已验证，2表示存在url但没有通过验证</p>
     * @param string $VerifyCode <p>用户回调接口验证码</p>
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
        if (array_key_exists("CallbackUrl",$param) and $param["CallbackUrl"] !== null) {
            $this->CallbackUrl = $param["CallbackUrl"];
        }

        if (array_key_exists("ValidFlag",$param) and $param["ValidFlag"] !== null) {
            $this->ValidFlag = $param["ValidFlag"];
        }

        if (array_key_exists("VerifyCode",$param) and $param["VerifyCode"] !== null) {
            $this->VerifyCode = $param["VerifyCode"];
        }
    }
}
