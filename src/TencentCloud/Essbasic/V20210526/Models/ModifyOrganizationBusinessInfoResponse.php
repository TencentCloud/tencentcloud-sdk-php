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
namespace TencentCloud\Essbasic\V20210526\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyOrganizationBusinessInfo返回参数结构体
 *
 * @method integer getErrorCode() 获取<p>业务状态码。<br>0 表示正常（无阻断）；非 0 表示存在阻断，例如企业名称变更且存在未完结合同时返回 1。</p><p>枚举值：</p><ul><li>0： 正常（无阻断）</li><li>1： 存在未完结合同</li></ul>
 * @method void setErrorCode(integer $ErrorCode) 设置<p>业务状态码。<br>0 表示正常（无阻断）；非 0 表示存在阻断，例如企业名称变更且存在未完结合同时返回 1。</p><p>枚举值：</p><ul><li>0： 正常（无阻断）</li><li>1： 存在未完结合同</li></ul>
 * @method string getErrorMessage() 获取<p>提示文案。<br>例如企业名称变更且存在未完结合同时返回「存在 X 份未完结的合同，请先撤销或者完成合同」。</p>
 * @method void setErrorMessage(string $ErrorMessage) 设置<p>提示文案。<br>例如企业名称变更且存在未完结合同时返回「存在 X 份未完结的合同，请先撤销或者完成合同」。</p>
 * @method integer getUnfinishedCount() 获取<p>未完结合同总数。<br>仅当企业名称变更且存在未完结合同时有值。</p>
 * @method void setUnfinishedCount(integer $UnfinishedCount) 设置<p>未完结合同总数。<br>仅当企业名称变更且存在未完结合同时有值。</p>
 * @method array getFlowIds() 获取<p>SaaS 企业下未完结合同的 flowId 列表。注:<code>SaaS企业下的合同ID可能无法查询，可通知子客企业去处理相应的合同</code></p>
 * @method void setFlowIds(array $FlowIds) 设置<p>SaaS 企业下未完结合同的 flowId 列表。注:<code>SaaS企业下的合同ID可能无法查询，可通知子客企业去处理相应的合同</code></p>
 * @method array getChannelFlowIds() 获取<p>渠道子客企业下未完结合同的 flowId 列表。注：<code>子客企业在其他渠道下的合同ID可能无法查询，可通知子客企业去处理其他渠道下相应的合同</code></p>
 * @method void setChannelFlowIds(array $ChannelFlowIds) 设置<p>渠道子客企业下未完结合同的 flowId 列表。注：<code>子客企业在其他渠道下的合同ID可能无法查询，可通知子客企业去处理其他渠道下相应的合同</code></p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class ModifyOrganizationBusinessInfoResponse extends AbstractModel
{
    /**
     * @var integer <p>业务状态码。<br>0 表示正常（无阻断）；非 0 表示存在阻断，例如企业名称变更且存在未完结合同时返回 1。</p><p>枚举值：</p><ul><li>0： 正常（无阻断）</li><li>1： 存在未完结合同</li></ul>
     */
    public $ErrorCode;

    /**
     * @var string <p>提示文案。<br>例如企业名称变更且存在未完结合同时返回「存在 X 份未完结的合同，请先撤销或者完成合同」。</p>
     */
    public $ErrorMessage;

    /**
     * @var integer <p>未完结合同总数。<br>仅当企业名称变更且存在未完结合同时有值。</p>
     */
    public $UnfinishedCount;

    /**
     * @var array <p>SaaS 企业下未完结合同的 flowId 列表。注:<code>SaaS企业下的合同ID可能无法查询，可通知子客企业去处理相应的合同</code></p>
     */
    public $FlowIds;

    /**
     * @var array <p>渠道子客企业下未完结合同的 flowId 列表。注：<code>子客企业在其他渠道下的合同ID可能无法查询，可通知子客企业去处理其他渠道下相应的合同</code></p>
     */
    public $ChannelFlowIds;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $ErrorCode <p>业务状态码。<br>0 表示正常（无阻断）；非 0 表示存在阻断，例如企业名称变更且存在未完结合同时返回 1。</p><p>枚举值：</p><ul><li>0： 正常（无阻断）</li><li>1： 存在未完结合同</li></ul>
     * @param string $ErrorMessage <p>提示文案。<br>例如企业名称变更且存在未完结合同时返回「存在 X 份未完结的合同，请先撤销或者完成合同」。</p>
     * @param integer $UnfinishedCount <p>未完结合同总数。<br>仅当企业名称变更且存在未完结合同时有值。</p>
     * @param array $FlowIds <p>SaaS 企业下未完结合同的 flowId 列表。注:<code>SaaS企业下的合同ID可能无法查询，可通知子客企业去处理相应的合同</code></p>
     * @param array $ChannelFlowIds <p>渠道子客企业下未完结合同的 flowId 列表。注：<code>子客企业在其他渠道下的合同ID可能无法查询，可通知子客企业去处理其他渠道下相应的合同</code></p>
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
        if (array_key_exists("ErrorCode",$param) and $param["ErrorCode"] !== null) {
            $this->ErrorCode = $param["ErrorCode"];
        }

        if (array_key_exists("ErrorMessage",$param) and $param["ErrorMessage"] !== null) {
            $this->ErrorMessage = $param["ErrorMessage"];
        }

        if (array_key_exists("UnfinishedCount",$param) and $param["UnfinishedCount"] !== null) {
            $this->UnfinishedCount = $param["UnfinishedCount"];
        }

        if (array_key_exists("FlowIds",$param) and $param["FlowIds"] !== null) {
            $this->FlowIds = $param["FlowIds"];
        }

        if (array_key_exists("ChannelFlowIds",$param) and $param["ChannelFlowIds"] !== null) {
            $this->ChannelFlowIds = $param["ChannelFlowIds"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
