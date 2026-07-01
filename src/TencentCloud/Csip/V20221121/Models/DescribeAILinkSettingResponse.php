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
 * DescribeAILinkSetting返回参数结构体
 *
 * @method integer getAILinkEnable() 获取<p>0 关闭AI-Link智链引擎，1 开启AI-Link智链引擎</p>
 * @method void setAILinkEnable(integer $AILinkEnable) 设置<p>0 关闭AI-Link智链引擎，1 开启AI-Link智链引擎</p>
 * @method integer getRuleScopeDeep() 获取<p>深度模式 0-关闭 1-开启</p>
 * @method void setRuleScopeDeep(integer $RuleScopeDeep) 设置<p>深度模式 0-关闭 1-开启</p>
 * @method integer getRuleScopeBalanced() 获取<p>均衡模式 0-关闭 1-开启</p>
 * @method void setRuleScopeBalanced(integer $RuleScopeBalanced) 设置<p>均衡模式 0-关闭 1-开启</p>
 * @method integer getRuleScopePrecise() 获取<p>精准模式 0-关闭 1-开启</p>
 * @method void setRuleScopePrecise(integer $RuleScopePrecise) 设置<p>精准模式 0-关闭 1-开启</p>
 * @method integer getScope() 获取<p>1 全部专业/旗舰版主机，0 Quuids列表主机</p>
 * @method void setScope(integer $Scope) 设置<p>1 全部专业/旗舰版主机，0 Quuids列表主机</p>
 * @method array getQuuids() 获取<p>自选主机Quuid列表</p>
 * @method void setQuuids(array $Quuids) 设置<p>自选主机Quuid列表</p>
 * @method array getExcludeQuuids() 获取<p>排除主机Quuid列表</p>
 * @method void setExcludeQuuids(array $ExcludeQuuids) 设置<p>排除主机Quuid列表</p>
 * @method integer getAutoInclude() 获取<p>新增资产自动包含 0 不包含 1包含</p>
 * @method void setAutoInclude(integer $AutoInclude) 设置<p>新增资产自动包含 0 不包含 1包含</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeAILinkSettingResponse extends AbstractModel
{
    /**
     * @var integer <p>0 关闭AI-Link智链引擎，1 开启AI-Link智链引擎</p>
     */
    public $AILinkEnable;

    /**
     * @var integer <p>深度模式 0-关闭 1-开启</p>
     */
    public $RuleScopeDeep;

    /**
     * @var integer <p>均衡模式 0-关闭 1-开启</p>
     */
    public $RuleScopeBalanced;

    /**
     * @var integer <p>精准模式 0-关闭 1-开启</p>
     */
    public $RuleScopePrecise;

    /**
     * @var integer <p>1 全部专业/旗舰版主机，0 Quuids列表主机</p>
     */
    public $Scope;

    /**
     * @var array <p>自选主机Quuid列表</p>
     */
    public $Quuids;

    /**
     * @var array <p>排除主机Quuid列表</p>
     */
    public $ExcludeQuuids;

    /**
     * @var integer <p>新增资产自动包含 0 不包含 1包含</p>
     */
    public $AutoInclude;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $AILinkEnable <p>0 关闭AI-Link智链引擎，1 开启AI-Link智链引擎</p>
     * @param integer $RuleScopeDeep <p>深度模式 0-关闭 1-开启</p>
     * @param integer $RuleScopeBalanced <p>均衡模式 0-关闭 1-开启</p>
     * @param integer $RuleScopePrecise <p>精准模式 0-关闭 1-开启</p>
     * @param integer $Scope <p>1 全部专业/旗舰版主机，0 Quuids列表主机</p>
     * @param array $Quuids <p>自选主机Quuid列表</p>
     * @param array $ExcludeQuuids <p>排除主机Quuid列表</p>
     * @param integer $AutoInclude <p>新增资产自动包含 0 不包含 1包含</p>
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
        if (array_key_exists("AILinkEnable",$param) and $param["AILinkEnable"] !== null) {
            $this->AILinkEnable = $param["AILinkEnable"];
        }

        if (array_key_exists("RuleScopeDeep",$param) and $param["RuleScopeDeep"] !== null) {
            $this->RuleScopeDeep = $param["RuleScopeDeep"];
        }

        if (array_key_exists("RuleScopeBalanced",$param) and $param["RuleScopeBalanced"] !== null) {
            $this->RuleScopeBalanced = $param["RuleScopeBalanced"];
        }

        if (array_key_exists("RuleScopePrecise",$param) and $param["RuleScopePrecise"] !== null) {
            $this->RuleScopePrecise = $param["RuleScopePrecise"];
        }

        if (array_key_exists("Scope",$param) and $param["Scope"] !== null) {
            $this->Scope = $param["Scope"];
        }

        if (array_key_exists("Quuids",$param) and $param["Quuids"] !== null) {
            $this->Quuids = $param["Quuids"];
        }

        if (array_key_exists("ExcludeQuuids",$param) and $param["ExcludeQuuids"] !== null) {
            $this->ExcludeQuuids = $param["ExcludeQuuids"];
        }

        if (array_key_exists("AutoInclude",$param) and $param["AutoInclude"] !== null) {
            $this->AutoInclude = $param["AutoInclude"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
