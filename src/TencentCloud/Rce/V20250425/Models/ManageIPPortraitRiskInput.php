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
namespace TencentCloud\Rce\V20250425\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 业务入参
 *
 * @method string getUserIp() 获取<p>用户公网ip（仅支持IPv4）</p>
 * @method void setUserIp(string $UserIp) 设置<p>用户公网ip（仅支持IPv4）</p>
 * @method integer getChannel() 获取<p>渠道号<br>1：pc<br>2：H5<br>3：app<br>4：ott</p>
 * @method void setChannel(integer $Channel) 设置<p>渠道号<br>1：pc<br>2：H5<br>3：app<br>4：ott</p>
 */
class ManageIPPortraitRiskInput extends AbstractModel
{
    /**
     * @var string <p>用户公网ip（仅支持IPv4）</p>
     */
    public $UserIp;

    /**
     * @var integer <p>渠道号<br>1：pc<br>2：H5<br>3：app<br>4：ott</p>
     */
    public $Channel;

    /**
     * @param string $UserIp <p>用户公网ip（仅支持IPv4）</p>
     * @param integer $Channel <p>渠道号<br>1：pc<br>2：H5<br>3：app<br>4：ott</p>
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
        if (array_key_exists("UserIp",$param) and $param["UserIp"] !== null) {
            $this->UserIp = $param["UserIp"];
        }

        if (array_key_exists("Channel",$param) and $param["Channel"] !== null) {
            $this->Channel = $param["Channel"];
        }
    }
}
