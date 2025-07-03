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
 * DescribeNatFwInfoCount返回参数结构体
 *
 * @method string getReturnMsg() 获取返回参数 success 成功 failed 失败
 * @method void setReturnMsg(string $ReturnMsg) 设置返回参数 success 成功 failed 失败
 * @method integer getNatFwInsCount() 获取当前租户的nat防火墙实例个数
 * @method void setNatFwInsCount(integer $NatFwInsCount) 设置当前租户的nat防火墙实例个数
 * @method integer getSubnetCount() 获取当前租户接入防火墙的子网个数
 * @method void setSubnetCount(integer $SubnetCount) 设置当前租户接入防火墙的子网个数
 * @method integer getOpenSwitchCount() 获取打开NAT防火墙开关个数
 * @method void setOpenSwitchCount(integer $OpenSwitchCount) 设置打开NAT防火墙开关个数
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeNatFwInfoCountResponse extends AbstractModel
{
    /**
     * @var string 返回参数 success 成功 failed 失败
     */
    public $ReturnMsg;

    /**
     * @var integer 当前租户的nat防火墙实例个数
     */
    public $NatFwInsCount;

    /**
     * @var integer 当前租户接入防火墙的子网个数
     */
    public $SubnetCount;

    /**
     * @var integer 打开NAT防火墙开关个数
     */
    public $OpenSwitchCount;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $ReturnMsg 返回参数 success 成功 failed 失败
     * @param integer $NatFwInsCount 当前租户的nat防火墙实例个数
     * @param integer $SubnetCount 当前租户接入防火墙的子网个数
     * @param integer $OpenSwitchCount 打开NAT防火墙开关个数
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
