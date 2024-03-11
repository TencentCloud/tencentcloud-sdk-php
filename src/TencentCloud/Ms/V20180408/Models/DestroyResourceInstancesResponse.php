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
namespace TencentCloud\Ms\V20180408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DestroyResourceInstances返回参数结构体
 *
 * @method string getResourceId() 获取资源id
 * @method void setResourceId(string $ResourceId) 设置资源id
 * @method string getResult() 获取返回状态
 * @method void setResult(string $Result) 设置返回状态
 * @method integer getPlatformType() 获取平台类型  1.android安卓加固   2.ios源码混淆  3.sdk加固  4.applet小程序加固
 * @method void setPlatformType(integer $PlatformType) 设置平台类型  1.android安卓加固   2.ios源码混淆  3.sdk加固  4.applet小程序加固
 * @method integer getOrderType() 获取订单采购类型 1-免费试用 2-按年收费 3-按次收费  
 * @method void setOrderType(integer $OrderType) 设置订单采购类型 1-免费试用 2-按年收费 3-按次收费  
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DestroyResourceInstancesResponse extends AbstractModel
{
    /**
     * @var string 资源id
     */
    public $ResourceId;

    /**
     * @var string 返回状态
     */
    public $Result;

    /**
     * @var integer 平台类型  1.android安卓加固   2.ios源码混淆  3.sdk加固  4.applet小程序加固
     */
    public $PlatformType;

    /**
     * @var integer 订单采购类型 1-免费试用 2-按年收费 3-按次收费  
     */
    public $OrderType;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $ResourceId 资源id
     * @param string $Result 返回状态
     * @param integer $PlatformType 平台类型  1.android安卓加固   2.ios源码混淆  3.sdk加固  4.applet小程序加固
     * @param integer $OrderType 订单采购类型 1-免费试用 2-按年收费 3-按次收费  
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
        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }

        if (array_key_exists("PlatformType",$param) and $param["PlatformType"] !== null) {
            $this->PlatformType = $param["PlatformType"];
        }

        if (array_key_exists("OrderType",$param) and $param["OrderType"] !== null) {
            $this->OrderType = $param["OrderType"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
