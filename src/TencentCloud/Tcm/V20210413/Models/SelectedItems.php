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
namespace TencentCloud\Tcm\V20210413\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 选中的项目
 *
 * @method string getNamespace() 获取命名空间
 * @method void setNamespace(string $Namespace) 设置命名空间
 * @method string getClusterName() 获取集群名称
 * @method void setClusterName(string $ClusterName) 设置集群名称
 * @method string getItemName() 获取选中项目名字
 * @method void setItemName(string $ItemName) 设置选中项目名字
 * @method array getGateways() 获取ingress gw的名称列表
 * @method void setGateways(array $Gateways) 设置ingress gw的名称列表
 */
class SelectedItems extends AbstractModel
{
    /**
     * @var string 命名空间
     */
    public $Namespace;

    /**
     * @var string 集群名称
     */
    public $ClusterName;

    /**
     * @var string 选中项目名字
     */
    public $ItemName;

    /**
     * @var array ingress gw的名称列表
     */
    public $Gateways;

    /**
     * @param string $Namespace 命名空间
     * @param string $ClusterName 集群名称
     * @param string $ItemName 选中项目名字
     * @param array $Gateways ingress gw的名称列表
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
        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("ItemName",$param) and $param["ItemName"] !== null) {
            $this->ItemName = $param["ItemName"];
        }

        if (array_key_exists("Gateways",$param) and $param["Gateways"] !== null) {
            $this->Gateways = $param["Gateways"];
        }
    }
}
