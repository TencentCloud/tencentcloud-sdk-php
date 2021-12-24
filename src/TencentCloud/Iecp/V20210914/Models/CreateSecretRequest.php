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
 * CreateSecret请求参数结构体
 *
 * @method integer getEdgeUnitID() 获取单元ID
 * @method void setEdgeUnitID(integer $EdgeUnitID) 设置单元ID
 * @method string getSecretName() 获取secret名
 * @method void setSecretName(string $SecretName) 设置secret名
 * @method string getSecretNamespace() 获取命名空间（默认:default）
 * @method void setSecretNamespace(string $SecretNamespace) 设置命名空间（默认:default）
 * @method string getSecretType() 获取secret类型(取值范围:DockerConfigJson,Opaque 默认Opaque)
 * @method void setSecretType(string $SecretType) 设置secret类型(取值范围:DockerConfigJson,Opaque 默认Opaque)
 * @method string getDockerConfigJson() 获取DockerConfig的序列化base64编码后的字符串
 * @method void setDockerConfigJson(string $DockerConfigJson) 设置DockerConfig的序列化base64编码后的字符串
 * @method array getCloudData() 获取Opaque类型的Secret内容
 * @method void setCloudData(array $CloudData) 设置Opaque类型的Secret内容
 * @method DockerConfig getDockerConfig() 获取DockerConfig配置
 * @method void setDockerConfig(DockerConfig $DockerConfig) 设置DockerConfig配置
 */
class CreateSecretRequest extends AbstractModel
{
    /**
     * @var integer 单元ID
     */
    public $EdgeUnitID;

    /**
     * @var string secret名
     */
    public $SecretName;

    /**
     * @var string 命名空间（默认:default）
     */
    public $SecretNamespace;

    /**
     * @var string secret类型(取值范围:DockerConfigJson,Opaque 默认Opaque)
     */
    public $SecretType;

    /**
     * @var string DockerConfig的序列化base64编码后的字符串
     */
    public $DockerConfigJson;

    /**
     * @var array Opaque类型的Secret内容
     */
    public $CloudData;

    /**
     * @var DockerConfig DockerConfig配置
     */
    public $DockerConfig;

    /**
     * @param integer $EdgeUnitID 单元ID
     * @param string $SecretName secret名
     * @param string $SecretNamespace 命名空间（默认:default）
     * @param string $SecretType secret类型(取值范围:DockerConfigJson,Opaque 默认Opaque)
     * @param string $DockerConfigJson DockerConfig的序列化base64编码后的字符串
     * @param array $CloudData Opaque类型的Secret内容
     * @param DockerConfig $DockerConfig DockerConfig配置
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

        if (array_key_exists("SecretNamespace",$param) and $param["SecretNamespace"] !== null) {
            $this->SecretNamespace = $param["SecretNamespace"];
        }

        if (array_key_exists("SecretType",$param) and $param["SecretType"] !== null) {
            $this->SecretType = $param["SecretType"];
        }

        if (array_key_exists("DockerConfigJson",$param) and $param["DockerConfigJson"] !== null) {
            $this->DockerConfigJson = $param["DockerConfigJson"];
        }

        if (array_key_exists("CloudData",$param) and $param["CloudData"] !== null) {
            $this->CloudData = [];
            foreach ($param["CloudData"] as $key => $value){
                $obj = new KeyValueObj();
                $obj->deserialize($value);
                array_push($this->CloudData, $obj);
            }
        }

        if (array_key_exists("DockerConfig",$param) and $param["DockerConfig"] !== null) {
            $this->DockerConfig = new DockerConfig();
            $this->DockerConfig->deserialize($param["DockerConfig"]);
        }
    }
}
