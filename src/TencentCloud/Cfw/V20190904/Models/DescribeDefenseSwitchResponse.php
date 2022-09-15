<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * @method integer getBasicRuleSwitch() 获取基础防御开关
 * @method void setBasicRuleSwitch(integer $BasicRuleSwitch) 设置基础防御开关
 * @method integer getBaselineAllSwitch() 获取安全基线开关
 * @method void setBaselineAllSwitch(integer $BaselineAllSwitch) 设置安全基线开关
 * @method integer getTiSwitch() 获取威胁情报开关
 * @method void setTiSwitch(integer $TiSwitch) 设置威胁情报开关
 * @method integer getVirtualPatchSwitch() 获取虚拟补丁开关
 * @method void setVirtualPatchSwitch(integer $VirtualPatchSwitch) 设置虚拟补丁开关
 * @method integer getHistoryOpen() 获取是否历史开启
 * @method void setHistoryOpen(integer $HistoryOpen) 设置是否历史开启
 * @method integer getReturnCode() 获取状态值，0：查询成功，非0：查询失败
 * @method void setReturnCode(integer $ReturnCode) 设置状态值，0：查询成功，非0：查询失败
 * @method string getReturnMsg() 获取状态信息，success：查询成功，fail：查询失败
 * @method void setReturnMsg(string $ReturnMsg) 设置状态信息，success：查询成功，fail：查询失败
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeDefenseSwitchResponse extends AbstractModel
{
    /**
     * @var integer 基础防御开关
     */
    public $BasicRuleSwitch;

    /**
     * @var integer 安全基线开关
     */
    public $BaselineAllSwitch;

    /**
     * @var integer 威胁情报开关
     */
    public $TiSwitch;

    /**
     * @var integer 虚拟补丁开关
     */
    public $VirtualPatchSwitch;

    /**
     * @var integer 是否历史开启
     */
    public $HistoryOpen;

    /**
     * @var integer 状态值，0：查询成功，非0：查询失败
     */
    public $ReturnCode;

    /**
     * @var string 状态信息，success：查询成功，fail：查询失败
     */
    public $ReturnMsg;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $BasicRuleSwitch 基础防御开关
     * @param integer $BaselineAllSwitch 安全基线开关
     * @param integer $TiSwitch 威胁情报开关
     * @param integer $VirtualPatchSwitch 虚拟补丁开关
     * @param integer $HistoryOpen 是否历史开启
     * @param integer $ReturnCode 状态值，0：查询成功，非0：查询失败
     * @param string $ReturnMsg 状态信息，success：查询成功，fail：查询失败
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
