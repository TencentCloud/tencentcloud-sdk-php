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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * OAuth配置信息。
 *
 * @method boolean getOAuthEnable() 获取开启或关闭鉴权。
True: 开启;
False: 关闭
默认为关闭。
 * @method void setOAuthEnable(boolean $OAuthEnable) 设置开启或关闭鉴权。
True: 开启;
False: 关闭
默认为关闭。
 * @method string getOAuthFailureStatus() 获取IAP全部故障后，拒绝请求还是放行。
BYPASS: 通过
REJECT: 拒绝
默认为 BYPASS
 * @method void setOAuthFailureStatus(string $OAuthFailureStatus) 设置IAP全部故障后，拒绝请求还是放行。
BYPASS: 通过
REJECT: 拒绝
默认为 BYPASS
 */
class OAuth extends AbstractModel
{
    /**
     * @var boolean 开启或关闭鉴权。
True: 开启;
False: 关闭
默认为关闭。
     */
    public $OAuthEnable;

    /**
     * @var string IAP全部故障后，拒绝请求还是放行。
BYPASS: 通过
REJECT: 拒绝
默认为 BYPASS
     */
    public $OAuthFailureStatus;

    /**
     * @param boolean $OAuthEnable 开启或关闭鉴权。
True: 开启;
False: 关闭
默认为关闭。
     * @param string $OAuthFailureStatus IAP全部故障后，拒绝请求还是放行。
BYPASS: 通过
REJECT: 拒绝
默认为 BYPASS
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
        if (array_key_exists("OAuthEnable",$param) and $param["OAuthEnable"] !== null) {
            $this->OAuthEnable = $param["OAuthEnable"];
        }

        if (array_key_exists("OAuthFailureStatus",$param) and $param["OAuthFailureStatus"] !== null) {
            $this->OAuthFailureStatus = $param["OAuthFailureStatus"];
        }
    }
}
