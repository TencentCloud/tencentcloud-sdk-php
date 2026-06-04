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
 * DescribeNatCcnFwSwitch返回参数结构体
 *
 * @method integer getSwitchMode() 获取<p>开关接入模式，1-自动接入，2-手动接入</p><p>枚举值：</p><ul><li>1： 自动接入</li><li>2： 手动接入</li></ul>
 * @method void setSwitchMode(integer $SwitchMode) 设置<p>开关接入模式，1-自动接入，2-手动接入</p><p>枚举值：</p><ul><li>1： 自动接入</li><li>2： 手动接入</li></ul>
 * @method integer getRoutingMode() 获取<p>引流路由方法，0-多路由表，1-策略路由</p><p>枚举值：</p><ul><li>0： 多路由表</li><li>1： 策略路由</li></ul>
 * @method void setRoutingMode(integer $RoutingMode) 设置<p>引流路由方法，0-多路由表，1-策略路由</p><p>枚举值：</p><ul><li>0： 多路由表</li><li>1： 策略路由</li></ul>
 * @method integer getBypass() 获取<p>Bypass状态，0-关闭，1-开启</p><p>枚举值：</p><ul><li>0： 关闭</li><li>1： 开启</li></ul>
 * @method void setBypass(integer $Bypass) 设置<p>Bypass状态，0-关闭，1-开启</p><p>枚举值：</p><ul><li>0： 关闭</li><li>1： 开启</li></ul>
 * @method string getCcnId() 获取<p>云联网实例ID</p>
 * @method void setCcnId(string $CcnId) 设置<p>云联网实例ID</p>
 * @method array getAccessInstanceList() 获取<p>接入的实例列表</p>
 * @method void setAccessInstanceList(array $AccessInstanceList) 设置<p>接入的实例列表</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeNatCcnFwSwitchResponse extends AbstractModel
{
    /**
     * @var integer <p>开关接入模式，1-自动接入，2-手动接入</p><p>枚举值：</p><ul><li>1： 自动接入</li><li>2： 手动接入</li></ul>
     */
    public $SwitchMode;

    /**
     * @var integer <p>引流路由方法，0-多路由表，1-策略路由</p><p>枚举值：</p><ul><li>0： 多路由表</li><li>1： 策略路由</li></ul>
     */
    public $RoutingMode;

    /**
     * @var integer <p>Bypass状态，0-关闭，1-开启</p><p>枚举值：</p><ul><li>0： 关闭</li><li>1： 开启</li></ul>
     */
    public $Bypass;

    /**
     * @var string <p>云联网实例ID</p>
     */
    public $CcnId;

    /**
     * @var array <p>接入的实例列表</p>
     */
    public $AccessInstanceList;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $SwitchMode <p>开关接入模式，1-自动接入，2-手动接入</p><p>枚举值：</p><ul><li>1： 自动接入</li><li>2： 手动接入</li></ul>
     * @param integer $RoutingMode <p>引流路由方法，0-多路由表，1-策略路由</p><p>枚举值：</p><ul><li>0： 多路由表</li><li>1： 策略路由</li></ul>
     * @param integer $Bypass <p>Bypass状态，0-关闭，1-开启</p><p>枚举值：</p><ul><li>0： 关闭</li><li>1： 开启</li></ul>
     * @param string $CcnId <p>云联网实例ID</p>
     * @param array $AccessInstanceList <p>接入的实例列表</p>
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
        if (array_key_exists("SwitchMode",$param) and $param["SwitchMode"] !== null) {
            $this->SwitchMode = $param["SwitchMode"];
        }

        if (array_key_exists("RoutingMode",$param) and $param["RoutingMode"] !== null) {
            $this->RoutingMode = $param["RoutingMode"];
        }

        if (array_key_exists("Bypass",$param) and $param["Bypass"] !== null) {
            $this->Bypass = $param["Bypass"];
        }

        if (array_key_exists("CcnId",$param) and $param["CcnId"] !== null) {
            $this->CcnId = $param["CcnId"];
        }

        if (array_key_exists("AccessInstanceList",$param) and $param["AccessInstanceList"] !== null) {
            $this->AccessInstanceList = [];
            foreach ($param["AccessInstanceList"] as $key => $value){
                $obj = new AccessInstanceInfo();
                $obj->deserialize($value);
                array_push($this->AccessInstanceList, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
