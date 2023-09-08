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
 * 开启、关闭 防火墙互联网边界开关
 *
 * @method string getPublicIp() 获取公网IP
 * @method void setPublicIp(string $PublicIp) 设置公网IP
 * @method string getSubnetId() 获取vpc 中第一个EIP开关打开，需要指定子网创建私有连接
 * @method void setSubnetId(string $SubnetId) 设置vpc 中第一个EIP开关打开，需要指定子网创建私有连接
 * @method string getEndpointIp() 获取创建私有连接指定IP
 * @method void setEndpointIp(string $EndpointIp) 设置创建私有连接指定IP
 * @method integer getSwitchMode() 获取0 : 旁路 1 : 串行
 * @method void setSwitchMode(integer $SwitchMode) 设置0 : 旁路 1 : 串行
 */
class EdgeIpSwitch extends AbstractModel
{
    /**
     * @var string 公网IP
     */
    public $PublicIp;

    /**
     * @var string vpc 中第一个EIP开关打开，需要指定子网创建私有连接
     */
    public $SubnetId;

    /**
     * @var string 创建私有连接指定IP
     */
    public $EndpointIp;

    /**
     * @var integer 0 : 旁路 1 : 串行
     */
    public $SwitchMode;

    /**
     * @param string $PublicIp 公网IP
     * @param string $SubnetId vpc 中第一个EIP开关打开，需要指定子网创建私有连接
     * @param string $EndpointIp 创建私有连接指定IP
     * @param integer $SwitchMode 0 : 旁路 1 : 串行
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
        if (array_key_exists("PublicIp",$param) and $param["PublicIp"] !== null) {
            $this->PublicIp = $param["PublicIp"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("EndpointIp",$param) and $param["EndpointIp"] !== null) {
            $this->EndpointIp = $param["EndpointIp"];
        }

        if (array_key_exists("SwitchMode",$param) and $param["SwitchMode"] !== null) {
            $this->SwitchMode = $param["SwitchMode"];
        }
    }
}
