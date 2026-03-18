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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 邮箱登录配置
 *
 * @method EmailSmtpConfig getSmtpConfig() 获取smtp配置
 * @method void setSmtpConfig(EmailSmtpConfig $SmtpConfig) 设置smtp配置
 * @method string getOn() 获取可选：TRUE，FALSE，如果On为TRUE，则表示采用默认代发。
 * @method void setOn(string $On) 设置可选：TRUE，FALSE，如果On为TRUE，则表示采用默认代发。
 */
class EmailProviderConfig extends AbstractModel
{
    /**
     * @var EmailSmtpConfig smtp配置
     */
    public $SmtpConfig;

    /**
     * @var string 可选：TRUE，FALSE，如果On为TRUE，则表示采用默认代发。
     */
    public $On;

    /**
     * @param EmailSmtpConfig $SmtpConfig smtp配置
     * @param string $On 可选：TRUE，FALSE，如果On为TRUE，则表示采用默认代发。
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
        if (array_key_exists("SmtpConfig",$param) and $param["SmtpConfig"] !== null) {
            $this->SmtpConfig = new EmailSmtpConfig();
            $this->SmtpConfig->deserialize($param["SmtpConfig"]);
        }

        if (array_key_exists("On",$param) and $param["On"] !== null) {
            $this->On = $param["On"];
        }
    }
}
