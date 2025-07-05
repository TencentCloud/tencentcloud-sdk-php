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
namespace TencentCloud\Goosefs\V20220519\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 付费信息详情
 *
 * @method string getCurDeadline() 获取到期时间
 * @method void setCurDeadline(string $CurDeadline) 设置到期时间
 * @method string getPayMode() 获取付费方式
 * @method void setPayMode(string $PayMode) 设置付费方式
 * @method integer getAutoRenewFlag() 获取自动付费标识：0:默认未设置 1:自动续费 2 不自动续费
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) 设置自动付费标识：0:默认未设置 1:自动续费 2 不自动续费
 * @method string getResourceId() 获取资源ID
 * @method void setResourceId(string $ResourceId) 设置资源ID
 */
class ChargeAttribute extends AbstractModel
{
    /**
     * @var string 到期时间
     */
    public $CurDeadline;

    /**
     * @var string 付费方式
     */
    public $PayMode;

    /**
     * @var integer 自动付费标识：0:默认未设置 1:自动续费 2 不自动续费
     */
    public $AutoRenewFlag;

    /**
     * @var string 资源ID
     */
    public $ResourceId;

    /**
     * @param string $CurDeadline 到期时间
     * @param string $PayMode 付费方式
     * @param integer $AutoRenewFlag 自动付费标识：0:默认未设置 1:自动续费 2 不自动续费
     * @param string $ResourceId 资源ID
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
        if (array_key_exists("CurDeadline",$param) and $param["CurDeadline"] !== null) {
            $this->CurDeadline = $param["CurDeadline"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }
    }
}
