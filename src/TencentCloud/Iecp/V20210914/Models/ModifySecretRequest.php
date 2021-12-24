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
 * ModifySecret请求参数结构体
 *
 * @method integer getEdgeUnitID() 获取边缘单元ID
 * @method void setEdgeUnitID(integer $EdgeUnitID) 设置边缘单元ID
 * @method string getSecretName() 获取Secret名
 * @method void setSecretName(string $SecretName) 设置Secret名
 * @method string getYaml() 获取Secret的Yaml格式
 * @method void setYaml(string $Yaml) 设置Secret的Yaml格式
 * @method string getSecretNamespace() 获取Secret命名空间（默认:default）
 * @method void setSecretNamespace(string $SecretNamespace) 设置Secret命名空间（默认:default）
 */
class ModifySecretRequest extends AbstractModel
{
    /**
     * @var integer 边缘单元ID
     */
    public $EdgeUnitID;

    /**
     * @var string Secret名
     */
    public $SecretName;

    /**
     * @var string Secret的Yaml格式
     */
    public $Yaml;

    /**
     * @var string Secret命名空间（默认:default）
     */
    public $SecretNamespace;

    /**
     * @param integer $EdgeUnitID 边缘单元ID
     * @param string $SecretName Secret名
     * @param string $Yaml Secret的Yaml格式
     * @param string $SecretNamespace Secret命名空间（默认:default）
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
        if (array_key_exists("EdgeUnitID",$param) and $param["EdgeUnitID"] !== null) {
            $this->EdgeUnitID = $param["EdgeUnitID"];
        }

        if (array_key_exists("SecretName",$param) and $param["SecretName"] !== null) {
            $this->SecretName = $param["SecretName"];
        }

        if (array_key_exists("Yaml",$param) and $param["Yaml"] !== null) {
            $this->Yaml = $param["Yaml"];
        }

        if (array_key_exists("SecretNamespace",$param) and $param["SecretNamespace"] !== null) {
            $this->SecretNamespace = $param["SecretNamespace"];
        }
    }
}
