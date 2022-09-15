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
 * ModifyConfigMap请求参数结构体
 *
 * @method integer getEdgeUnitID() 获取单元ID
 * @method void setEdgeUnitID(integer $EdgeUnitID) 设置单元ID
 * @method string getConfigMapName() 获取ConfigMap名称
 * @method void setConfigMapName(string $ConfigMapName) 设置ConfigMap名称
 * @method string getYaml() 获取Yaml配置, base64之后的串
 * @method void setYaml(string $Yaml) 设置Yaml配置, base64之后的串
 * @method string getConfigMapNamespace() 获取ConfigMap命名空间
 * @method void setConfigMapNamespace(string $ConfigMapNamespace) 设置ConfigMap命名空间
 */
class ModifyConfigMapRequest extends AbstractModel
{
    /**
     * @var integer 单元ID
     */
    public $EdgeUnitID;

    /**
     * @var string ConfigMap名称
     */
    public $ConfigMapName;

    /**
     * @var string Yaml配置, base64之后的串
     */
    public $Yaml;

    /**
     * @var string ConfigMap命名空间
     */
    public $ConfigMapNamespace;

    /**
     * @param integer $EdgeUnitID 单元ID
     * @param string $ConfigMapName ConfigMap名称
     * @param string $Yaml Yaml配置, base64之后的串
     * @param string $ConfigMapNamespace ConfigMap命名空间
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

        if (array_key_exists("ConfigMapName",$param) and $param["ConfigMapName"] !== null) {
            $this->ConfigMapName = $param["ConfigMapName"];
        }

        if (array_key_exists("Yaml",$param) and $param["Yaml"] !== null) {
            $this->Yaml = $param["Yaml"];
        }

        if (array_key_exists("ConfigMapNamespace",$param) and $param["ConfigMapNamespace"] !== null) {
            $this->ConfigMapNamespace = $param["ConfigMapNamespace"];
        }
    }
}
