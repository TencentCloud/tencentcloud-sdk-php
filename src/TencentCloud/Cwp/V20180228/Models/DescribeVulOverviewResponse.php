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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeVulOverview返回参数结构体
 *
 * @method VulOverview getFollowVul() 获取重点关注漏洞统计
 * @method void setFollowVul(VulOverview $FollowVul) 设置重点关注漏洞统计
 * @method VulOverview getAllVul() 获取全部漏洞统计
 * @method void setAllVul(VulOverview $AllVul) 设置全部漏洞统计
 * @method VulOverview getEffectHost() 获取影响主机统计
 * @method void setEffectHost(VulOverview $EffectHost) 设置影响主机统计
 * @method VulOverview getVulAttackEvent() 获取漏洞攻击事件（近1月）统计
 * @method void setVulAttackEvent(VulOverview $VulAttackEvent) 设置漏洞攻击事件（近1月）统计
 * @method VulOverview getVulDefenceEvent() 获取已防御攻击（近1月）统计
 * @method void setVulDefenceEvent(VulOverview $VulDefenceEvent) 设置已防御攻击（近1月）统计
 * @method VulOverview getVulStore() 获取漏洞库统计
 * @method void setVulStore(VulOverview $VulStore) 设置漏洞库统计
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeVulOverviewResponse extends AbstractModel
{
    /**
     * @var VulOverview 重点关注漏洞统计
     */
    public $FollowVul;

    /**
     * @var VulOverview 全部漏洞统计
     */
    public $AllVul;

    /**
     * @var VulOverview 影响主机统计
     */
    public $EffectHost;

    /**
     * @var VulOverview 漏洞攻击事件（近1月）统计
     */
    public $VulAttackEvent;

    /**
     * @var VulOverview 已防御攻击（近1月）统计
     */
    public $VulDefenceEvent;

    /**
     * @var VulOverview 漏洞库统计
     */
    public $VulStore;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param VulOverview $FollowVul 重点关注漏洞统计
     * @param VulOverview $AllVul 全部漏洞统计
     * @param VulOverview $EffectHost 影响主机统计
     * @param VulOverview $VulAttackEvent 漏洞攻击事件（近1月）统计
     * @param VulOverview $VulDefenceEvent 已防御攻击（近1月）统计
     * @param VulOverview $VulStore 漏洞库统计
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("FollowVul",$param) and $param["FollowVul"] !== null) {
            $this->FollowVul = new VulOverview();
            $this->FollowVul->deserialize($param["FollowVul"]);
        }

        if (array_key_exists("AllVul",$param) and $param["AllVul"] !== null) {
            $this->AllVul = new VulOverview();
            $this->AllVul->deserialize($param["AllVul"]);
        }

        if (array_key_exists("EffectHost",$param) and $param["EffectHost"] !== null) {
            $this->EffectHost = new VulOverview();
            $this->EffectHost->deserialize($param["EffectHost"]);
        }

        if (array_key_exists("VulAttackEvent",$param) and $param["VulAttackEvent"] !== null) {
            $this->VulAttackEvent = new VulOverview();
            $this->VulAttackEvent->deserialize($param["VulAttackEvent"]);
        }

        if (array_key_exists("VulDefenceEvent",$param) and $param["VulDefenceEvent"] !== null) {
            $this->VulDefenceEvent = new VulOverview();
            $this->VulDefenceEvent->deserialize($param["VulDefenceEvent"]);
        }

        if (array_key_exists("VulStore",$param) and $param["VulStore"] !== null) {
            $this->VulStore = new VulOverview();
            $this->VulStore->deserialize($param["VulStore"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
