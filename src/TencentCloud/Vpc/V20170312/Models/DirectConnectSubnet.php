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
 * IDC子网信息
 *
 * @method string getDirectConnectGatewayId() 获取专线网关ID
 * @method void setDirectConnectGatewayId(string $DirectConnectGatewayId) 设置专线网关ID
 * @method string getCidrBlock() 获取IDC子网网段
 * @method void setCidrBlock(string $CidrBlock) 设置IDC子网网段
 */
class DirectConnectSubnet extends AbstractModel
{
    /**
     * @var string 专线网关ID
     */
    public $DirectConnectGatewayId;

    /**
     * @var string IDC子网网段
     */
    public $CidrBlock;

    /**
     * @param string $DirectConnectGatewayId 专线网关ID
     * @param string $CidrBlock IDC子网网段
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
        if (array_key_exists("DirectConnectGatewayId",$param) and $param["DirectConnectGatewayId"] !== null) {
            $this->DirectConnectGatewayId = $param["DirectConnectGatewayId"];
        }

        if (array_key_exists("CidrBlock",$param) and $param["CidrBlock"] !== null) {
            $this->CidrBlock = $param["CidrBlock"];
        }
    }
}
