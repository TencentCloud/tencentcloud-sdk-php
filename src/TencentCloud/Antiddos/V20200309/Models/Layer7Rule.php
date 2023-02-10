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
 * 7层转发规则
 *
 * @method string getDomain() 获取域名
 * @method void setDomain(string $Domain) 设置域名
 * @method array getProxyTypeList() 获取转发类型列表
 * @method void setProxyTypeList(array $ProxyTypeList) 设置转发类型列表
 * @method array getRealServers() 获取源站列表
 * @method void setRealServers(array $RealServers) 设置源站列表
 * @method array getInstanceDetails() 获取资源实例
 * @method void setInstanceDetails(array $InstanceDetails) 设置资源实例
 * @method array getInstanceDetailRule() 获取规则所属的资源实例
 * @method void setInstanceDetailRule(array $InstanceDetailRule) 设置规则所属的资源实例
 * @method string getProtocol() 获取协议
 * @method void setProtocol(string $Protocol) 设置协议
 * @method integer getVport() 获取端口号
 * @method void setVport(integer $Vport) 设置端口号
 */
class Layer7Rule extends AbstractModel
{
    /**
     * @var string 域名
     */
    public $Domain;

    /**
     * @var array 转发类型列表
     */
    public $ProxyTypeList;

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
     * @var string 协议
     */
    public $Protocol;

    /**
     * @var integer 端口号
     */
    public $Vport;

    /**
     * @param string $Domain 域名
     * @param array $ProxyTypeList 转发类型列表
     * @param array $RealServers 源站列表
     * @param array $InstanceDetails 资源实例
     * @param array $InstanceDetailRule 规则所属的资源实例
     * @param string $Protocol 协议
     * @param integer $Vport 端口号
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("ProxyTypeList",$param) and $param["ProxyTypeList"] !== null) {
            $this->ProxyTypeList = [];
            foreach ($param["ProxyTypeList"] as $key => $value){
                $obj = new ProxyTypeInfo();
                $obj->deserialize($value);
                array_push($this->ProxyTypeList, $obj);
            }
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

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->Vport = $param["Vport"];
        }
    }
}
