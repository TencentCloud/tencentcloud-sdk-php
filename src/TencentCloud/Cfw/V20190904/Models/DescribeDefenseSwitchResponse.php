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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDefenseSwitch返回参数结构体
 *
 * @method integer getBasicRuleSwitch() 获取<p>基础防御开关</p>
 * @method void setBasicRuleSwitch(integer $BasicRuleSwitch) 设置<p>基础防御开关</p>
 * @method integer getBaselineAllSwitch() 获取<p>安全基线开关</p>
 * @method void setBaselineAllSwitch(integer $BaselineAllSwitch) 设置<p>安全基线开关</p>
 * @method integer getTiSwitch() 获取<p>威胁情报开关</p>
 * @method void setTiSwitch(integer $TiSwitch) 设置<p>威胁情报开关</p>
 * @method integer getVirtualPatchSwitch() 获取<p>虚拟补丁开关</p>
 * @method void setVirtualPatchSwitch(integer $VirtualPatchSwitch) 设置<p>虚拟补丁开关</p>
 * @method integer getHistoryOpen() 获取<p>是否历史开启</p>
 * @method void setHistoryOpen(integer $HistoryOpen) 设置<p>是否历史开启</p>
 * @method integer getReturnCode() 获取<p>状态值，0：查询成功，非0：查询失败</p>
 * @method void setReturnCode(integer $ReturnCode) 设置<p>状态值，0：查询成功，非0：查询失败</p>
 * @method string getReturnMsg() 获取<p>状态信息，success：查询成功，fail：查询失败</p>
 * @method void setReturnMsg(string $ReturnMsg) 设置<p>状态信息，success：查询成功，fail：查询失败</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeDefenseSwitchResponse extends AbstractModel
{
    /**
     * @var integer <p>基础防御开关</p>
     */
    public $BasicRuleSwitch;

    /**
     * @var integer <p>安全基线开关</p>
     */
    public $BaselineAllSwitch;

    /**
     * @var integer <p>威胁情报开关</p>
     */
    public $TiSwitch;

    /**
     * @var integer <p>虚拟补丁开关</p>
     */
    public $VirtualPatchSwitch;

    /**
     * @var integer <p>是否历史开启</p>
     */
    public $HistoryOpen;

    /**
     * @var integer <p>状态值，0：查询成功，非0：查询失败</p>
     */
    public $ReturnCode;

    /**
     * @var string <p>状态信息，success：查询成功，fail：查询失败</p>
     */
    public $ReturnMsg;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $BasicRuleSwitch <p>基础防御开关</p>
     * @param integer $BaselineAllSwitch <p>安全基线开关</p>
     * @param integer $TiSwitch <p>威胁情报开关</p>
     * @param integer $VirtualPatchSwitch <p>虚拟补丁开关</p>
     * @param integer $HistoryOpen <p>是否历史开启</p>
     * @param integer $ReturnCode <p>状态值，0：查询成功，非0：查询失败</p>
     * @param string $ReturnMsg <p>状态信息，success：查询成功，fail：查询失败</p>
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
        if (array_key_exists("BasicRuleSwitch",$param) and $param["BasicRuleSwitch"] !== null) {
            $this->BasicRuleSwitch = $param["BasicRuleSwitch"];
        }

        if (array_key_exists("BaselineAllSwitch",$param) and $param["BaselineAllSwitch"] !== null) {
            $this->BaselineAllSwitch = $param["BaselineAllSwitch"];
        }

        if (array_key_exists("TiSwitch",$param) and $param["TiSwitch"] !== null) {
            $this->TiSwitch = $param["TiSwitch"];
        }

        if (array_key_exists("VirtualPatchSwitch",$param) and $param["VirtualPatchSwitch"] !== null) {
            $this->VirtualPatchSwitch = $param["VirtualPatchSwitch"];
        }

        if (array_key_exists("HistoryOpen",$param) and $param["HistoryOpen"] !== null) {
            $this->HistoryOpen = $param["HistoryOpen"];
        }

        if (array_key_exists("ReturnCode",$param) and $param["ReturnCode"] !== null) {
            $this->ReturnCode = $param["ReturnCode"];
        }

        if (array_key_exists("ReturnMsg",$param) and $param["ReturnMsg"] !== null) {
            $this->ReturnMsg = $param["ReturnMsg"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
