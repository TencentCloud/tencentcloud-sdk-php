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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Host Header 重写配置参数。
 *
 * @method string getAction() 获取执行动作，取值有：
<li>followOrigin：跟随源站域名；</li>
<li>custom：自定义。</li>
 * @method void setAction(string $Action) 设置执行动作，取值有：
<li>followOrigin：跟随源站域名；</li>
<li>custom：自定义。</li>
 * @method string getServerName() 获取Host Header 重写，需要填写完整域名。<br>注意：当 Switch 为 on 时，此字段必填；当 Switch 为 off 时，无需填写此字段，若填写则不生效。
 * @method void setServerName(string $ServerName) 设置Host Header 重写，需要填写完整域名。<br>注意：当 Switch 为 on 时，此字段必填；当 Switch 为 off 时，无需填写此字段，若填写则不生效。
 */
class HostHeaderParameters extends AbstractModel
{
    /**
     * @var string 执行动作，取值有：
<li>followOrigin：跟随源站域名；</li>
<li>custom：自定义。</li>
     */
    public $Action;

    /**
     * @var string Host Header 重写，需要填写完整域名。<br>注意：当 Switch 为 on 时，此字段必填；当 Switch 为 off 时，无需填写此字段，若填写则不生效。
     */
    public $ServerName;

    /**
     * @param string $Action 执行动作，取值有：
<li>followOrigin：跟随源站域名；</li>
<li>custom：自定义。</li>
     * @param string $ServerName Host Header 重写，需要填写完整域名。<br>注意：当 Switch 为 on 时，此字段必填；当 Switch 为 off 时，无需填写此字段，若填写则不生效。
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
        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("ServerName",$param) and $param["ServerName"] !== null) {
            $this->ServerName = $param["ServerName"];
        }
    }
}
