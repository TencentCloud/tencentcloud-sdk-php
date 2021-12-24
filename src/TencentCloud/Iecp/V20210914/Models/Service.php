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
namespace TencentCloud\Iecp\V20210914\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 服务配置
 *
 * @method string getName() 获取名称
 * @method void setName(string $Name) 设置名称
 * @method string getType() 获取类型 (ClusterIP|NodePort)
 * @method void setType(string $Type) 设置类型 (ClusterIP|NodePort)
 * @method array getPorts() 获取端口配置
 * @method void setPorts(array $Ports) 设置端口配置
 * @method array getLabels() 获取标签
 * @method void setLabels(array $Labels) 设置标签
 * @method string getNamespace() 获取命名空间默认default
 * @method void setNamespace(string $Namespace) 设置命名空间默认default
 * @method string getClusterIP() 获取服务IP
 * @method void setClusterIP(string $ClusterIP) 设置服务IP
 */
class Service extends AbstractModel
{
    /**
     * @var string 名称
     */
    public $Name;

    /**
     * @var string 类型 (ClusterIP|NodePort)
     */
    public $Type;

    /**
     * @var array 端口配置
     */
    public $Ports;

    /**
     * @var array 标签
     */
    public $Labels;

    /**
     * @var string 命名空间默认default
     */
    public $Namespace;

    /**
     * @var string 服务IP
     */
    public $ClusterIP;

    /**
     * @param string $Name 名称
     * @param string $Type 类型 (ClusterIP|NodePort)
     * @param array $Ports 端口配置
     * @param array $Labels 标签
     * @param string $Namespace 命名空间默认default
     * @param string $ClusterIP 服务IP
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Ports",$param) and $param["Ports"] !== null) {
            $this->Ports = [];
            foreach ($param["Ports"] as $key => $value){
                $obj = new PortConfig();
                $obj->deserialize($value);
                array_push($this->Ports, $obj);
            }
        }

        if (array_key_exists("Labels",$param) and $param["Labels"] !== null) {
            $this->Labels = [];
            foreach ($param["Labels"] as $key => $value){
                $obj = new Label();
                $obj->deserialize($value);
                array_push($this->Labels, $obj);
            }
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("ClusterIP",$param) and $param["ClusterIP"] !== null) {
            $this->ClusterIP = $param["ClusterIP"];
        }
    }
}
