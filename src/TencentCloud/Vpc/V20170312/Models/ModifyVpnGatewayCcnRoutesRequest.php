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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyVpnGatewayCcnRoutes请求参数结构体
 *
 * @method string getVpnGatewayId() 获取VPN网关实例ID
 * @method void setVpnGatewayId(string $VpnGatewayId) 设置VPN网关实例ID
 * @method array getRoutes() 获取云联网路由（IDC网段）列表
 * @method void setRoutes(array $Routes) 设置云联网路由（IDC网段）列表
 */
class ModifyVpnGatewayCcnRoutesRequest extends AbstractModel
{
    /**
     * @var string VPN网关实例ID
     */
    public $VpnGatewayId;

    /**
     * @var array 云联网路由（IDC网段）列表
     */
    public $Routes;

    /**
     * @param string $VpnGatewayId VPN网关实例ID
     * @param array $Routes 云联网路由（IDC网段）列表
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
        if (array_key_exists('VpnGatewayId',$param) and $param['VpnGatewayId'] !== null) {
            $this->VpnGatewayId = $param['VpnGatewayId'];
        }

        if (array_key_exists('Routes',$param) and $param['Routes'] !== null) {
            $this->Routes = [];
            foreach ($param['Routes'] as $key => $value){
                $obj = new VpngwCcnRoutes();
                $obj->deserialize($value);
                array_push($this->Routes, $obj);
            }
        }
    }
}
