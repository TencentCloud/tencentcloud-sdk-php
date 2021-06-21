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
 * @method array getInstanceDetails() 获取规则所属的资源实例
 * @method void setInstanceDetails(array $InstanceDetails) 设置规则所属的资源实例
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
     * @var array 规则所属的资源实例
     */
    public $InstanceDetails;

    /**
     * @param string $Domain 域名
     * @param array $ProxyTypeList 转发类型列表
     * @param array $RealServers 源站列表
     * @param array $InstanceDetails 规则所属的资源实例
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
    }
}
