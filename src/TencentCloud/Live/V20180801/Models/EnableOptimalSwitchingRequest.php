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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * EnableOptimalSwitching请求参数结构体
 *
 * @method string getStreamName() 获取针对该流 ID 启用择优调度。
 * @method void setStreamName(string $StreamName) 设置针对该流 ID 启用择优调度。
 * @method integer getEnableSwitch() 获取启用开关，默认为启用。
0 - 禁用。
1 - 启用。
 * @method void setEnableSwitch(integer $EnableSwitch) 设置启用开关，默认为启用。
0 - 禁用。
1 - 启用。
 * @method string getHostGroupName() 获取要启用自动择优的流所属的域名分组名称。
 * @method void setHostGroupName(string $HostGroupName) 设置要启用自动择优的流所属的域名分组名称。
 */
class EnableOptimalSwitchingRequest extends AbstractModel
{
    /**
     * @var string 针对该流 ID 启用择优调度。
     */
    public $StreamName;

    /**
     * @var integer 启用开关，默认为启用。
0 - 禁用。
1 - 启用。
     */
    public $EnableSwitch;

    /**
     * @var string 要启用自动择优的流所属的域名分组名称。
     */
    public $HostGroupName;

    /**
     * @param string $StreamName 针对该流 ID 启用择优调度。
     * @param integer $EnableSwitch 启用开关，默认为启用。
0 - 禁用。
1 - 启用。
     * @param string $HostGroupName 要启用自动择优的流所属的域名分组名称。
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
        if (array_key_exists("StreamName",$param) and $param["StreamName"] !== null) {
            $this->StreamName = $param["StreamName"];
        }

        if (array_key_exists("EnableSwitch",$param) and $param["EnableSwitch"] !== null) {
            $this->EnableSwitch = $param["EnableSwitch"];
        }

        if (array_key_exists("HostGroupName",$param) and $param["HostGroupName"] !== null) {
            $this->HostGroupName = $param["HostGroupName"];
        }
    }
}
