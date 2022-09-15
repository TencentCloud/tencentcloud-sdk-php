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
namespace TencentCloud\Antiddos\V20200309\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 4层转发规则
 *
 * @method integer getBackendPort() 获取源站端口，取值1~65535
 * @method void setBackendPort(integer $BackendPort) 设置源站端口，取值1~65535
 * @method integer getFrontendPort() 获取转发端口，取值1~65535
 * @method void setFrontendPort(integer $FrontendPort) 设置转发端口，取值1~65535
 * @method string getProtocol() 获取转发协议，取值[
TCP(TCP协议)
UDP(UDP协议)
]
 * @method void setProtocol(string $Protocol) 设置转发协议，取值[
TCP(TCP协议)
UDP(UDP协议)
]
 * @method array getRealServers() 获取源站列表
 * @method void setRealServers(array $RealServers) 设置源站列表
 * @method array getInstanceDetails() 获取资源实例
 * @method void setInstanceDetails(array $InstanceDetails) 设置资源实例
 * @method array getInstanceDetailRule() 获取规则所属的资源实例
 * @method void setInstanceDetailRule(array $InstanceDetailRule) 设置规则所属的资源实例
 */
class Layer4Rule extends AbstractModel
{
    /**
     * @var integer 源站端口，取值1~65535
     */
    public $BackendPort;

    /**
     * @var integer 转发端口，取值1~65535
     */
    public $FrontendPort;

    /**
     * @var string 转发协议，取值[
TCP(TCP协议)
UDP(UDP协议)
]
     */
    public $Protocol;

    /**
     * @var array 源站列表
     */
    public $RealServers;

    /**
     * @var array 资源实例
     */
    public $InstanceDetails;

    /**
     * @var array 规则所属的资源实例
     */
    public $InstanceDetailRule;

    /**
     * @param integer $BackendPort 源站端口，取值1~65535
     * @param integer $FrontendPort 转发端口，取值1~65535
     * @param string $Protocol 转发协议，取值[
TCP(TCP协议)
UDP(UDP协议)
]
     * @param array $RealServers 源站列表
     * @param array $InstanceDetails 资源实例
     * @param array $InstanceDetailRule 规则所属的资源实例
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
        if (array_key_exists("BackendPort",$param) and $param["BackendPort"] !== null) {
            $this->BackendPort = $param["BackendPort"];
        }

        if (array_key_exists("FrontendPort",$param) and $param["FrontendPort"] !== null) {
            $this->FrontendPort = $param["FrontendPort"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("RealServers",$param) and $param["RealServers"] !== null) {
            $this->RealServers = [];
            foreach ($param["RealServers"] as $key => $value){
                $obj = new SourceServer();
                $obj->deserialize($value);
                array_push($this->RealServers, $obj);
            }
        }

        if (array_key_exists("InstanceDetails",$param) and $param["InstanceDetails"] !== null) {
            $this->InstanceDetails = [];
            foreach ($param["InstanceDetails"] as $key => $value){
                $obj = new InstanceRelation();
                $obj->deserialize($value);
                array_push($this->InstanceDetails, $obj);
            }
        }

        if (array_key_exists("InstanceDetailRule",$param) and $param["InstanceDetailRule"] !== null) {
            $this->InstanceDetailRule = [];
            foreach ($param["InstanceDetailRule"] as $key => $value){
                $obj = new RuleInstanceRelation();
                $obj->deserialize($value);
                array_push($this->InstanceDetailRule, $obj);
            }
        }
    }
}
