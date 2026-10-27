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
namespace TencentCloud\Cvd\V20201104\Models;
use TencentCloud\Common\AbstractModel;

/**
 * StopSession请求参数结构体
 *
 * @method string getInstanceRegion() 获取<p>机器所在区域</p>
 * @method void setInstanceRegion(string $InstanceRegion) 设置<p>机器所在区域</p>
 * @method string getHostName() 获取<p>机器hostname</p>
 * @method void setHostName(string $HostName) 设置<p>机器hostname</p>
 * @method boolean getIsDisconnect() 获取<p>IsDisconnect为true，表示断开当前会话<br>IsDisconnect为false，表示注销当前会话</p>
 * @method void setIsDisconnect(boolean $IsDisconnect) 设置<p>IsDisconnect为true，表示断开当前会话<br>IsDisconnect为false，表示注销当前会话</p>
 * @method string getUserId() 获取<p>选填，为多会话预留字段</p>
 * @method void setUserId(string $UserId) 设置<p>选填，为多会话预留字段</p>
 */
class StopSessionRequest extends AbstractModel
{
    /**
     * @var string <p>机器所在区域</p>
     */
    public $InstanceRegion;

    /**
     * @var string <p>机器hostname</p>
     */
    public $HostName;

    /**
     * @var boolean <p>IsDisconnect为true，表示断开当前会话<br>IsDisconnect为false，表示注销当前会话</p>
     */
    public $IsDisconnect;

    /**
     * @var string <p>选填，为多会话预留字段</p>
     */
    public $UserId;

    /**
     * @param string $InstanceRegion <p>机器所在区域</p>
     * @param string $HostName <p>机器hostname</p>
     * @param boolean $IsDisconnect <p>IsDisconnect为true，表示断开当前会话<br>IsDisconnect为false，表示注销当前会话</p>
     * @param string $UserId <p>选填，为多会话预留字段</p>
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
        if (array_key_exists("InstanceRegion",$param) and $param["InstanceRegion"] !== null) {
            $this->InstanceRegion = $param["InstanceRegion"];
        }

        if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
            $this->HostName = $param["HostName"];
        }

        if (array_key_exists("IsDisconnect",$param) and $param["IsDisconnect"] !== null) {
            $this->IsDisconnect = $param["IsDisconnect"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }
    }
}
