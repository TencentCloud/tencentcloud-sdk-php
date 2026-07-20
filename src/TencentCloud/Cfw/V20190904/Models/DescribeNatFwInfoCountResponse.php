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
 * DescribeNatFwInfoCount返回参数结构体
 *
 * @method string getReturnMsg() 获取<p>返回参数 success 成功 failed 失败</p>
 * @method void setReturnMsg(string $ReturnMsg) 设置<p>返回参数 success 成功 failed 失败</p>
 * @method integer getNatFwInsCount() 获取<p>当前租户的nat防火墙实例个数</p>
 * @method void setNatFwInsCount(integer $NatFwInsCount) 设置<p>当前租户的nat防火墙实例个数</p>
 * @method integer getSubnetCount() 获取<p>当前租户接入防火墙的子网个数</p>
 * @method void setSubnetCount(integer $SubnetCount) 设置<p>当前租户接入防火墙的子网个数</p>
 * @method integer getOpenSwitchCount() 获取<p>打开NAT防火墙开关个数</p>
 * @method void setOpenSwitchCount(integer $OpenSwitchCount) 设置<p>打开NAT防火墙开关个数</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeNatFwInfoCountResponse extends AbstractModel
{
    /**
     * @var string <p>返回参数 success 成功 failed 失败</p>
     */
    public $ReturnMsg;

    /**
     * @var integer <p>当前租户的nat防火墙实例个数</p>
     */
    public $NatFwInsCount;

    /**
     * @var integer <p>当前租户接入防火墙的子网个数</p>
     */
    public $SubnetCount;

    /**
     * @var integer <p>打开NAT防火墙开关个数</p>
     */
    public $OpenSwitchCount;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $ReturnMsg <p>返回参数 success 成功 failed 失败</p>
     * @param integer $NatFwInsCount <p>当前租户的nat防火墙实例个数</p>
     * @param integer $SubnetCount <p>当前租户接入防火墙的子网个数</p>
     * @param integer $OpenSwitchCount <p>打开NAT防火墙开关个数</p>
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
        if (array_key_exists("ReturnMsg",$param) and $param["ReturnMsg"] !== null) {
            $this->ReturnMsg = $param["ReturnMsg"];
        }

        if (array_key_exists("NatFwInsCount",$param) and $param["NatFwInsCount"] !== null) {
            $this->NatFwInsCount = $param["NatFwInsCount"];
        }

        if (array_key_exists("SubnetCount",$param) and $param["SubnetCount"] !== null) {
            $this->SubnetCount = $param["SubnetCount"];
        }

        if (array_key_exists("OpenSwitchCount",$param) and $param["OpenSwitchCount"] !== null) {
            $this->OpenSwitchCount = $param["OpenSwitchCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
