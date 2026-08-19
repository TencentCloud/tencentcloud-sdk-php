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
 * DescribeAgentConfigSetting返回参数结构体
 *
 * @method integer getEnhanceLogMode() 获取<p>增强日志模式开关，0-关闭 1-开启（未配置时为空）</p>
 * @method void setEnhanceLogMode(integer $EnhanceLogMode) 设置<p>增强日志模式开关，0-关闭 1-开启（未配置时为空）</p>
 * @method integer getMalwarePocMode() 获取<p>恶意软件 POC 模式开关，0-关闭 1-开启（未配置时为空）</p>
 * @method void setMalwarePocMode(integer $MalwarePocMode) 设置<p>恶意软件 POC 模式开关，0-关闭 1-开启（未配置时为空）</p>
 * @method integer getReportSourcePort() 获取<p>上报源端口开关（兼容旧版本），0-关闭 1-开启</p>
 * @method void setReportSourcePort(integer $ReportSourcePort) 设置<p>上报源端口开关（兼容旧版本），0-关闭 1-开启</p>
 * @method array getLogCollectSettings() 获取<p>已开启的日志采集类型列表，如 tcp_ingress、tcp_src_port、http_egress、http_ingress、app_access</p>
 * @method void setLogCollectSettings(array $LogCollectSettings) 设置<p>已开启的日志采集类型列表，如 tcp_ingress、tcp_src_port、http_egress、http_ingress、app_access</p>
 * @method string getAssetSelectionType() 获取<p>资产选择方式：all/tag/direct</p>
 * @method void setAssetSelectionType(string $AssetSelectionType) 设置<p>资产选择方式：all/tag/direct</p>
 * @method array getTagIds() 获取<p>按标签选择时的标签ID数组</p>
 * @method void setTagIds(array $TagIds) 设置<p>按标签选择时的标签ID数组</p>
 * @method array getInstanceIDs() 获取<p>直接选择的主机instance_id列表</p>
 * @method void setInstanceIDs(array $InstanceIDs) 设置<p>直接选择的主机instance_id列表</p>
 * @method array getExcludeInstanceIDs() 获取<p>排除的主机instance_id列表</p>
 * @method void setExcludeInstanceIDs(array $ExcludeInstanceIDs) 设置<p>排除的主机instance_id列表</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeAgentConfigSettingResponse extends AbstractModel
{
    /**
     * @var integer <p>增强日志模式开关，0-关闭 1-开启（未配置时为空）</p>
     */
    public $EnhanceLogMode;

    /**
     * @var integer <p>恶意软件 POC 模式开关，0-关闭 1-开启（未配置时为空）</p>
     */
    public $MalwarePocMode;

    /**
     * @var integer <p>上报源端口开关（兼容旧版本），0-关闭 1-开启</p>
     */
    public $ReportSourcePort;

    /**
     * @var array <p>已开启的日志采集类型列表，如 tcp_ingress、tcp_src_port、http_egress、http_ingress、app_access</p>
     */
    public $LogCollectSettings;

    /**
     * @var string <p>资产选择方式：all/tag/direct</p>
     */
    public $AssetSelectionType;

    /**
     * @var array <p>按标签选择时的标签ID数组</p>
     */
    public $TagIds;

    /**
     * @var array <p>直接选择的主机instance_id列表</p>
     */
    public $InstanceIDs;

    /**
     * @var array <p>排除的主机instance_id列表</p>
     */
    public $ExcludeInstanceIDs;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $EnhanceLogMode <p>增强日志模式开关，0-关闭 1-开启（未配置时为空）</p>
     * @param integer $MalwarePocMode <p>恶意软件 POC 模式开关，0-关闭 1-开启（未配置时为空）</p>
     * @param integer $ReportSourcePort <p>上报源端口开关（兼容旧版本），0-关闭 1-开启</p>
     * @param array $LogCollectSettings <p>已开启的日志采集类型列表，如 tcp_ingress、tcp_src_port、http_egress、http_ingress、app_access</p>
     * @param string $AssetSelectionType <p>资产选择方式：all/tag/direct</p>
     * @param array $TagIds <p>按标签选择时的标签ID数组</p>
     * @param array $InstanceIDs <p>直接选择的主机instance_id列表</p>
     * @param array $ExcludeInstanceIDs <p>排除的主机instance_id列表</p>
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
        if (array_key_exists("EnhanceLogMode",$param) and $param["EnhanceLogMode"] !== null) {
            $this->EnhanceLogMode = $param["EnhanceLogMode"];
        }

        if (array_key_exists("MalwarePocMode",$param) and $param["MalwarePocMode"] !== null) {
            $this->MalwarePocMode = $param["MalwarePocMode"];
        }

        if (array_key_exists("ReportSourcePort",$param) and $param["ReportSourcePort"] !== null) {
            $this->ReportSourcePort = $param["ReportSourcePort"];
        }

        if (array_key_exists("LogCollectSettings",$param) and $param["LogCollectSettings"] !== null) {
            $this->LogCollectSettings = $param["LogCollectSettings"];
        }

        if (array_key_exists("AssetSelectionType",$param) and $param["AssetSelectionType"] !== null) {
            $this->AssetSelectionType = $param["AssetSelectionType"];
        }

        if (array_key_exists("TagIds",$param) and $param["TagIds"] !== null) {
            $this->TagIds = $param["TagIds"];
        }

        if (array_key_exists("InstanceIDs",$param) and $param["InstanceIDs"] !== null) {
            $this->InstanceIDs = $param["InstanceIDs"];
        }

        if (array_key_exists("ExcludeInstanceIDs",$param) and $param["ExcludeInstanceIDs"] !== null) {
            $this->ExcludeInstanceIDs = $param["ExcludeInstanceIDs"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
