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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 反查结果数据类型。
 *
 * @method string getType() 获取内网ip类型。“cvm”或“eni”
 * @method void setType(string $Type) 设置内网ip类型。“cvm”或“eni”
 * @method string getPrivateIp() 获取后端实例的内网ip。
 * @method void setPrivateIp(string $PrivateIp) 设置后端实例的内网ip。
 * @method integer getPort() 获取绑定后端实例的端口。
 * @method void setPort(integer $Port) 设置绑定后端实例的端口。
 * @method integer getVpcId() 获取rs的vpcId
 * @method void setVpcId(integer $VpcId) 设置rs的vpcId
 * @method integer getWeight() 获取rs的权重
 * @method void setWeight(integer $Weight) 设置rs的权重
 */
class LbRsTargets extends AbstractModel
{
    /**
     * @var string 内网ip类型。“cvm”或“eni”
     */
    public $Type;

    /**
     * @var string 后端实例的内网ip。
     */
    public $PrivateIp;

    /**
     * @var integer 绑定后端实例的端口。
     */
    public $Port;

    /**
     * @var integer rs的vpcId
     */
    public $VpcId;

    /**
     * @var integer rs的权重
     */
    public $Weight;

    /**
     * @param string $Type 内网ip类型。“cvm”或“eni”
     * @param string $PrivateIp 后端实例的内网ip。
     * @param integer $Port 绑定后端实例的端口。
     * @param integer $VpcId rs的vpcId
     * @param integer $Weight rs的权重
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("PrivateIp",$param) and $param["PrivateIp"] !== null) {
            $this->PrivateIp = $param["PrivateIp"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }
    }
}
