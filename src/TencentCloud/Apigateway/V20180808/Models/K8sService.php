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
namespace TencentCloud\Apigateway\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * k8s 服务的配置
 *
 * @method integer getWeight() 获取权重
 * @method void setWeight(integer $Weight) 设置权重
 * @method string getClusterId() 获取k8s集群ID
 * @method void setClusterId(string $ClusterId) 设置k8s集群ID
 * @method string getNamespace() 获取容器命名空间
 * @method void setNamespace(string $Namespace) 设置容器命名空间
 * @method string getServiceName() 获取容器服务的名字
 * @method void setServiceName(string $ServiceName) 设置容器服务的名字
 * @method integer getPort() 获取服务的端口
 * @method void setPort(integer $Port) 设置服务的端口
 * @method array getExtraLabels() 获取额外选择的Pod的Label
 * @method void setExtraLabels(array $ExtraLabels) 设置额外选择的Pod的Label
 * @method string getName() 获取自定义的服务名字，可选
 * @method void setName(string $Name) 设置自定义的服务名字，可选
 */
class K8sService extends AbstractModel
{
    /**
     * @var integer 权重
     */
    public $Weight;

    /**
     * @var string k8s集群ID
     */
    public $ClusterId;

    /**
     * @var string 容器命名空间
     */
    public $Namespace;

    /**
     * @var string 容器服务的名字
     */
    public $ServiceName;

    /**
     * @var integer 服务的端口
     */
    public $Port;

    /**
     * @var array 额外选择的Pod的Label
     */
    public $ExtraLabels;

    /**
     * @var string 自定义的服务名字，可选
     */
    public $Name;

    /**
     * @param integer $Weight 权重
     * @param string $ClusterId k8s集群ID
     * @param string $Namespace 容器命名空间
     * @param string $ServiceName 容器服务的名字
     * @param integer $Port 服务的端口
     * @param array $ExtraLabels 额外选择的Pod的Label
     * @param string $Name 自定义的服务名字，可选
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
        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("ExtraLabels",$param) and $param["ExtraLabels"] !== null) {
            $this->ExtraLabels = [];
            foreach ($param["ExtraLabels"] as $key => $value){
                $obj = new K8sLabel();
                $obj->deserialize($value);
                array_push($this->ExtraLabels, $obj);
            }
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}
