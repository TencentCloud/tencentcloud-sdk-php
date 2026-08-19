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
 * DescribeAgentRunMode返回参数结构体
 *
 * @method CustomAgentRunModePolicy getCustomPolicy() 获取<p>自定义模式配置</p>
 * @method void setCustomPolicy(CustomAgentRunModePolicy $CustomPolicy) 设置<p>自定义模式配置</p>
 * @method array getAdvanceModeQuuids() 获取<p>高安全防护模式quuid列表</p>
 * @method void setAdvanceModeQuuids(array $AdvanceModeQuuids) 设置<p>高安全防护模式quuid列表</p>
 * @method array getCustomModeQuuids() 获取<p>自定义模式quuid列表</p>
 * @method void setCustomModeQuuids(array $CustomModeQuuids) 设置<p>自定义模式quuid列表</p>
 * @method integer getEnhanceLogMode() 获取<p>日志增强开关,0：关闭，1：打开</p>
 * @method void setEnhanceLogMode(integer $EnhanceLogMode) 设置<p>日志增强开关,0：关闭，1：打开</p>
 * @method integer getMalwarePocMode() 获取<p>文件查杀自动poc模式开关，0：关闭，1：打开</p>
 * @method void setMalwarePocMode(integer $MalwarePocMode) 设置<p>文件查杀自动poc模式开关，0：关闭，1：打开</p>
 * @method integer getReportSourcePort() 获取<p>五元组日志是否上报源端口，0：不上报，1：上报</p>
 * @method void setReportSourcePort(integer $ReportSourcePort) 设置<p>五元组日志是否上报源端口，0：不上报，1：上报</p>
 * @method CustomAgentRunModePolicy getBasicPolicy() 获取<p>业务优先配置</p>
 * @method void setBasicPolicy(CustomAgentRunModePolicy $BasicPolicy) 设置<p>业务优先配置</p>
 * @method CustomAgentRunModePolicy getAdvancePolicy() 获取<p>安全优先配置</p>
 * @method void setAdvancePolicy(CustomAgentRunModePolicy $AdvancePolicy) 设置<p>安全优先配置</p>
 * @method array getLogCollectSettings() 获取<p>日志采集设置，采集TCP源端口tcp_src_port，TCP入向日志tcp_ingress，HTTP出向连接日志http_egress，HTTP入向连接日志http_ingress，应用访问日志app_access</p>
 * @method void setLogCollectSettings(array $LogCollectSettings) 设置<p>日志采集设置，采集TCP源端口tcp_src_port，TCP入向日志tcp_ingress，HTTP出向连接日志http_egress，HTTP入向连接日志http_ingress，应用访问日志app_access</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeAgentRunModeResponse extends AbstractModel
{
    /**
     * @var CustomAgentRunModePolicy <p>自定义模式配置</p>
     */
    public $CustomPolicy;

    /**
     * @var array <p>高安全防护模式quuid列表</p>
     */
    public $AdvanceModeQuuids;

    /**
     * @var array <p>自定义模式quuid列表</p>
     */
    public $CustomModeQuuids;

    /**
     * @var integer <p>日志增强开关,0：关闭，1：打开</p>
     */
    public $EnhanceLogMode;

    /**
     * @var integer <p>文件查杀自动poc模式开关，0：关闭，1：打开</p>
     */
    public $MalwarePocMode;

    /**
     * @var integer <p>五元组日志是否上报源端口，0：不上报，1：上报</p>
     */
    public $ReportSourcePort;

    /**
     * @var CustomAgentRunModePolicy <p>业务优先配置</p>
     */
    public $BasicPolicy;

    /**
     * @var CustomAgentRunModePolicy <p>安全优先配置</p>
     */
    public $AdvancePolicy;

    /**
     * @var array <p>日志采集设置，采集TCP源端口tcp_src_port，TCP入向日志tcp_ingress，HTTP出向连接日志http_egress，HTTP入向连接日志http_ingress，应用访问日志app_access</p>
     */
    public $LogCollectSettings;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param CustomAgentRunModePolicy $CustomPolicy <p>自定义模式配置</p>
     * @param array $AdvanceModeQuuids <p>高安全防护模式quuid列表</p>
     * @param array $CustomModeQuuids <p>自定义模式quuid列表</p>
     * @param integer $EnhanceLogMode <p>日志增强开关,0：关闭，1：打开</p>
     * @param integer $MalwarePocMode <p>文件查杀自动poc模式开关，0：关闭，1：打开</p>
     * @param integer $ReportSourcePort <p>五元组日志是否上报源端口，0：不上报，1：上报</p>
     * @param CustomAgentRunModePolicy $BasicPolicy <p>业务优先配置</p>
     * @param CustomAgentRunModePolicy $AdvancePolicy <p>安全优先配置</p>
     * @param array $LogCollectSettings <p>日志采集设置，采集TCP源端口tcp_src_port，TCP入向日志tcp_ingress，HTTP出向连接日志http_egress，HTTP入向连接日志http_ingress，应用访问日志app_access</p>
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
        if (array_key_exists("CustomPolicy",$param) and $param["CustomPolicy"] !== null) {
            $this->CustomPolicy = new CustomAgentRunModePolicy();
            $this->CustomPolicy->deserialize($param["CustomPolicy"]);
        }

        if (array_key_exists("AdvanceModeQuuids",$param) and $param["AdvanceModeQuuids"] !== null) {
            $this->AdvanceModeQuuids = $param["AdvanceModeQuuids"];
        }

        if (array_key_exists("CustomModeQuuids",$param) and $param["CustomModeQuuids"] !== null) {
            $this->CustomModeQuuids = $param["CustomModeQuuids"];
        }

        if (array_key_exists("EnhanceLogMode",$param) and $param["EnhanceLogMode"] !== null) {
            $this->EnhanceLogMode = $param["EnhanceLogMode"];
        }

        if (array_key_exists("MalwarePocMode",$param) and $param["MalwarePocMode"] !== null) {
            $this->MalwarePocMode = $param["MalwarePocMode"];
        }

        if (array_key_exists("ReportSourcePort",$param) and $param["ReportSourcePort"] !== null) {
            $this->ReportSourcePort = $param["ReportSourcePort"];
        }

        if (array_key_exists("BasicPolicy",$param) and $param["BasicPolicy"] !== null) {
            $this->BasicPolicy = new CustomAgentRunModePolicy();
            $this->BasicPolicy->deserialize($param["BasicPolicy"]);
        }

        if (array_key_exists("AdvancePolicy",$param) and $param["AdvancePolicy"] !== null) {
            $this->AdvancePolicy = new CustomAgentRunModePolicy();
            $this->AdvancePolicy->deserialize($param["AdvancePolicy"]);
        }

        if (array_key_exists("LogCollectSettings",$param) and $param["LogCollectSettings"] !== null) {
            $this->LogCollectSettings = $param["LogCollectSettings"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
