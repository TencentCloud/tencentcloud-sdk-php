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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyAgentRunPolicy请求参数结构体
 *
 * @method array getMemberId() 获取<p>集团账号的成员id</p>
 * @method void setMemberId(array $MemberId) 设置<p>集团账号的成员id</p>
 * @method CustomAgentRunModePolicy getCustomPolicy() 获取<p>自定义运行策略（CPU/Memory/NetworkPps），不传则不修改</p>
 * @method void setCustomPolicy(CustomAgentRunModePolicy $CustomPolicy) 设置<p>自定义运行策略（CPU/Memory/NetworkPps），不传则不修改</p>
 * @method array getAdvanceModeInstanceIDs() 获取<p>高级模式机器instance_id列表，后台自动转为quuid存储</p>
 * @method void setAdvanceModeInstanceIDs(array $AdvanceModeInstanceIDs) 设置<p>高级模式机器instance_id列表，后台自动转为quuid存储</p>
 * @method array getCustomModeInstanceIDs() 获取<p>自定义模式机器instance_id列表，后台自动转为quuid存储</p>
 * @method void setCustomModeInstanceIDs(array $CustomModeInstanceIDs) 设置<p>自定义模式机器instance_id列表，后台自动转为quuid存储</p>
 */
class ModifyAgentRunPolicyRequest extends AbstractModel
{
    /**
     * @var array <p>集团账号的成员id</p>
     */
    public $MemberId;

    /**
     * @var CustomAgentRunModePolicy <p>自定义运行策略（CPU/Memory/NetworkPps），不传则不修改</p>
     */
    public $CustomPolicy;

    /**
     * @var array <p>高级模式机器instance_id列表，后台自动转为quuid存储</p>
     */
    public $AdvanceModeInstanceIDs;

    /**
     * @var array <p>自定义模式机器instance_id列表，后台自动转为quuid存储</p>
     */
    public $CustomModeInstanceIDs;

    /**
     * @param array $MemberId <p>集团账号的成员id</p>
     * @param CustomAgentRunModePolicy $CustomPolicy <p>自定义运行策略（CPU/Memory/NetworkPps），不传则不修改</p>
     * @param array $AdvanceModeInstanceIDs <p>高级模式机器instance_id列表，后台自动转为quuid存储</p>
     * @param array $CustomModeInstanceIDs <p>自定义模式机器instance_id列表，后台自动转为quuid存储</p>
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
        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("CustomPolicy",$param) and $param["CustomPolicy"] !== null) {
            $this->CustomPolicy = new CustomAgentRunModePolicy();
            $this->CustomPolicy->deserialize($param["CustomPolicy"]);
        }

        if (array_key_exists("AdvanceModeInstanceIDs",$param) and $param["AdvanceModeInstanceIDs"] !== null) {
            $this->AdvanceModeInstanceIDs = $param["AdvanceModeInstanceIDs"];
        }

        if (array_key_exists("CustomModeInstanceIDs",$param) and $param["CustomModeInstanceIDs"] !== null) {
            $this->CustomModeInstanceIDs = $param["CustomModeInstanceIDs"];
        }
    }
}
