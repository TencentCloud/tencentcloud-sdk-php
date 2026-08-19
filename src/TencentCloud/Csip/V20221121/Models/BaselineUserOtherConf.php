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
 * 用户级基线其他配置（同步授权、离线清风险、Agent 扫描超时等）。
 *
 * @method boolean getAllowSync() 获取<p>是否允许集团管理员将基线配置同步到本账号。true 允许，false 不允许。</p>
 * @method void setAllowSync(boolean $AllowSync) 设置<p>是否允许集团管理员将基线配置同步到本账号。true 允许，false 不允许。</p>
 * @method boolean getCleanRiskWhenOffline() 获取<p>资产离线时是否自动清除其历史风险结果。true 清除，false 保留。</p>
 * @method void setCleanRiskWhenOffline(boolean $CleanRiskWhenOffline) 设置<p>资产离线时是否自动清除其历史风险结果。true 清除，false 保留。</p>
 * @method integer getAgentScanTimeout() 获取<p>Agent 单次扫描的超时时间，单位秒。取值范围 [60, 86400]，默认 1800。</p>
 * @method void setAgentScanTimeout(integer $AgentScanTimeout) 设置<p>Agent 单次扫描的超时时间，单位秒。取值范围 [60, 86400]，默认 1800。</p>
 */
class BaselineUserOtherConf extends AbstractModel
{
    /**
     * @var boolean <p>是否允许集团管理员将基线配置同步到本账号。true 允许，false 不允许。</p>
     */
    public $AllowSync;

    /**
     * @var boolean <p>资产离线时是否自动清除其历史风险结果。true 清除，false 保留。</p>
     */
    public $CleanRiskWhenOffline;

    /**
     * @var integer <p>Agent 单次扫描的超时时间，单位秒。取值范围 [60, 86400]，默认 1800。</p>
     */
    public $AgentScanTimeout;

    /**
     * @param boolean $AllowSync <p>是否允许集团管理员将基线配置同步到本账号。true 允许，false 不允许。</p>
     * @param boolean $CleanRiskWhenOffline <p>资产离线时是否自动清除其历史风险结果。true 清除，false 保留。</p>
     * @param integer $AgentScanTimeout <p>Agent 单次扫描的超时时间，单位秒。取值范围 [60, 86400]，默认 1800。</p>
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
        if (array_key_exists("AllowSync",$param) and $param["AllowSync"] !== null) {
            $this->AllowSync = $param["AllowSync"];
        }

        if (array_key_exists("CleanRiskWhenOffline",$param) and $param["CleanRiskWhenOffline"] !== null) {
            $this->CleanRiskWhenOffline = $param["CleanRiskWhenOffline"];
        }

        if (array_key_exists("AgentScanTimeout",$param) and $param["AgentScanTimeout"] !== null) {
            $this->AgentScanTimeout = $param["AgentScanTimeout"];
        }
    }
}
