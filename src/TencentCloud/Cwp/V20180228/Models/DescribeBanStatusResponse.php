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
 * @method integer getStatus() 获取(已废弃) 阻断开关状态: 0 -- 关闭  1 -- 高级阻断 2 -- 基础阻断(只阻断情报库黑ip)
 * @method void setStatus(integer $Status) 设置(已废弃) 阻断开关状态: 0 -- 关闭  1 -- 高级阻断 2 -- 基础阻断(只阻断情报库黑ip)
 * @method boolean getShowTips() 获取是否弹窗提示信息 false: 关闭，true: 开启
 * @method void setShowTips(boolean $ShowTips) 设置是否弹窗提示信息 false: 关闭，true: 开启
 * @method boolean getOpenSmartMode() 获取是否开启智能过白模式
 * @method void setOpenSmartMode(boolean $OpenSmartMode) 设置是否开启智能过白模式
 * @method boolean getBanBlackIp() 获取是否开启情报IP阻断
 * @method void setBanBlackIp(boolean $BanBlackIp) 设置是否开启情报IP阻断
 * @method boolean getBanVulIp() 获取是否开启漏洞IP阻断
 * @method void setBanVulIp(boolean $BanVulIp) 设置是否开启漏洞IP阻断
 * @method boolean getBanByRule() 获取是否开启规则阻断
 * @method void setBanByRule(boolean $BanByRule) 设置是否开启规则阻断
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeBanStatusResponse extends AbstractModel
{
    /**
     * @var integer (已废弃) 阻断开关状态: 0 -- 关闭  1 -- 高级阻断 2 -- 基础阻断(只阻断情报库黑ip)
     */
    public $Status;

    /**
     * @var boolean 是否弹窗提示信息 false: 关闭，true: 开启
     */
    public $ShowTips;

    /**
     * @var boolean 是否开启智能过白模式
     */
    public $OpenSmartMode;

    /**
     * @var boolean 是否开启情报IP阻断
     */
    public $BanBlackIp;

    /**
     * @var boolean 是否开启漏洞IP阻断
     */
    public $BanVulIp;

    /**
     * @var boolean 是否开启规则阻断
     */
    public $BanByRule;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $Status (已废弃) 阻断开关状态: 0 -- 关闭  1 -- 高级阻断 2 -- 基础阻断(只阻断情报库黑ip)
     * @param boolean $ShowTips 是否弹窗提示信息 false: 关闭，true: 开启
     * @param boolean $OpenSmartMode 是否开启智能过白模式
     * @param boolean $BanBlackIp 是否开启情报IP阻断
     * @param boolean $BanVulIp 是否开启漏洞IP阻断
     * @param boolean $BanByRule 是否开启规则阻断
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
