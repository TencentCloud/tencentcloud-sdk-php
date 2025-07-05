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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 普罗米修斯打通的vipVport
 *
 * @method string getType() 获取export类型（jmx_export\node_export）
 * @method void setType(string $Type) 设置export类型（jmx_export\node_export）
 * @method string getSourceIp() 获取vip
 * @method void setSourceIp(string $SourceIp) 设置vip
 * @method integer getSourcePort() 获取vport
 * @method void setSourcePort(integer $SourcePort) 设置vport
 * @method string getBrokerIp() 获取broker地址
 * @method void setBrokerIp(string $BrokerIp) 设置broker地址
 * @method string getVpcId() 获取VPC ID信息
 * @method void setVpcId(string $VpcId) 设置VPC ID信息
 * @method string getSubnetId() 获取子网ID信息
 * @method void setSubnetId(string $SubnetId) 设置子网ID信息
 */
class PrometheusDTO extends AbstractModel
{
    /**
     * @var string export类型（jmx_export\node_export）
     */
    public $Type;

    /**
     * @var string vip
     */
    public $SourceIp;

    /**
     * @var integer vport
     */
    public $SourcePort;

    /**
     * @var string broker地址
     */
    public $BrokerIp;

    /**
     * @var string VPC ID信息
     */
    public $VpcId;

    /**
     * @var string 子网ID信息
     */
    public $SubnetId;

    /**
     * @param string $Type export类型（jmx_export\node_export）
     * @param string $SourceIp vip
     * @param integer $SourcePort vport
     * @param string $BrokerIp broker地址
     * @param string $VpcId VPC ID信息
     * @param string $SubnetId 子网ID信息
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

        if (array_key_exists("SourceIp",$param) and $param["SourceIp"] !== null) {
            $this->SourceIp = $param["SourceIp"];
        }

        if (array_key_exists("SourcePort",$param) and $param["SourcePort"] !== null) {
            $this->SourcePort = $param["SourcePort"];
        }

        if (array_key_exists("BrokerIp",$param) and $param["BrokerIp"] !== null) {
            $this->BrokerIp = $param["BrokerIp"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }
    }
}
