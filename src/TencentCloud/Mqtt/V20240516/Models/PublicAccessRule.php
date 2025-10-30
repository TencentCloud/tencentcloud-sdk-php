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
namespace TencentCloud\Mqtt\V20240516\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 公网访问安全规则
 *
 * @method string getIpRule() 获取ip网段信息
 * @method void setIpRule(string $IpRule) 设置ip网段信息
 * @method boolean getAllow() 获取当前仅支持允许，默认允许（allow）
 * @method void setAllow(boolean $Allow) 设置当前仅支持允许，默认允许（allow）
 * @method string getRemark() 获取备注信息，最多64个字符。
 * @method void setRemark(string $Remark) 设置备注信息，最多64个字符。
 */
class PublicAccessRule extends AbstractModel
{
    /**
     * @var string ip网段信息
     */
    public $IpRule;

    /**
     * @var boolean 当前仅支持允许，默认允许（allow）
     */
    public $Allow;

    /**
     * @var string 备注信息，最多64个字符。
     */
    public $Remark;

    /**
     * @param string $IpRule ip网段信息
     * @param boolean $Allow 当前仅支持允许，默认允许（allow）
     * @param string $Remark 备注信息，最多64个字符。
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
        if (array_key_exists("IpRule",$param) and $param["IpRule"] !== null) {
            $this->IpRule = $param["IpRule"];
        }

        if (array_key_exists("Allow",$param) and $param["Allow"] !== null) {
            $this->Allow = $param["Allow"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
