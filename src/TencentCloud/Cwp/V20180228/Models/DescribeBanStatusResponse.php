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
 * DescribeBanStatus返回参数结构体
 *
 * @method integer getStatus() 获取<p>(已废弃) 阻断开关状态: 0 -- 关闭  1 -- 高级阻断 2 -- 基础阻断(只阻断情报库黑ip)</p>
 * @method void setStatus(integer $Status) 设置<p>(已废弃) 阻断开关状态: 0 -- 关闭  1 -- 高级阻断 2 -- 基础阻断(只阻断情报库黑ip)</p>
 * @method boolean getShowTips() 获取<p>是否弹窗提示信息 false: 关闭，true: 开启</p>
 * @method void setShowTips(boolean $ShowTips) 设置<p>是否弹窗提示信息 false: 关闭，true: 开启</p>
 * @method boolean getOpenSmartMode() 获取<p>是否开启智能过白模式</p>
 * @method void setOpenSmartMode(boolean $OpenSmartMode) 设置<p>是否开启智能过白模式</p>
 * @method boolean getBanBlackIp() 获取<p>是否开启情报IP阻断</p>
 * @method void setBanBlackIp(boolean $BanBlackIp) 设置<p>是否开启情报IP阻断</p>
 * @method boolean getBanVulIp() 获取<p>是否开启漏洞IP阻断</p>
 * @method void setBanVulIp(boolean $BanVulIp) 设置<p>是否开启漏洞IP阻断</p>
 * @method boolean getBanByRule() 获取<p>是否开启规则阻断</p>
 * @method void setBanByRule(boolean $BanByRule) 设置<p>是否开启规则阻断</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeBanStatusResponse extends AbstractModel
{
    /**
     * @var integer <p>(已废弃) 阻断开关状态: 0 -- 关闭  1 -- 高级阻断 2 -- 基础阻断(只阻断情报库黑ip)</p>
     */
    public $Status;

    /**
     * @var boolean <p>是否弹窗提示信息 false: 关闭，true: 开启</p>
     */
    public $ShowTips;

    /**
     * @var boolean <p>是否开启智能过白模式</p>
     */
    public $OpenSmartMode;

    /**
     * @var boolean <p>是否开启情报IP阻断</p>
     */
    public $BanBlackIp;

    /**
     * @var boolean <p>是否开启漏洞IP阻断</p>
     */
    public $BanVulIp;

    /**
     * @var boolean <p>是否开启规则阻断</p>
     */
    public $BanByRule;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $Status <p>(已废弃) 阻断开关状态: 0 -- 关闭  1 -- 高级阻断 2 -- 基础阻断(只阻断情报库黑ip)</p>
     * @param boolean $ShowTips <p>是否弹窗提示信息 false: 关闭，true: 开启</p>
     * @param boolean $OpenSmartMode <p>是否开启智能过白模式</p>
     * @param boolean $BanBlackIp <p>是否开启情报IP阻断</p>
     * @param boolean $BanVulIp <p>是否开启漏洞IP阻断</p>
     * @param boolean $BanByRule <p>是否开启规则阻断</p>
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ShowTips",$param) and $param["ShowTips"] !== null) {
            $this->ShowTips = $param["ShowTips"];
        }

        if (array_key_exists("OpenSmartMode",$param) and $param["OpenSmartMode"] !== null) {
            $this->OpenSmartMode = $param["OpenSmartMode"];
        }

        if (array_key_exists("BanBlackIp",$param) and $param["BanBlackIp"] !== null) {
            $this->BanBlackIp = $param["BanBlackIp"];
        }

        if (array_key_exists("BanVulIp",$param) and $param["BanVulIp"] !== null) {
            $this->BanVulIp = $param["BanVulIp"];
        }

        if (array_key_exists("BanByRule",$param) and $param["BanByRule"] !== null) {
            $this->BanByRule = $param["BanByRule"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
