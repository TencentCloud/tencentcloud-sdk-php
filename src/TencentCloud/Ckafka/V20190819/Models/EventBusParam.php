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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * EventBus配置
 *
 * @method string getType() 获取资源类型。EB_COS/EB_ES/EB_CLS
 * @method void setType(string $Type) 设置资源类型。EB_COS/EB_ES/EB_CLS
 * @method boolean getSelfBuilt() 获取是否为自建集群
 * @method void setSelfBuilt(boolean $SelfBuilt) 设置是否为自建集群
 * @method string getResource() 获取实例资源
 * @method void setResource(string $Resource) 设置实例资源
 * @method string getNamespace() 获取SCF云函数命名空间
 * @method void setNamespace(string $Namespace) 设置SCF云函数命名空间
 * @method string getFunctionName() 获取SCF云函数函数名
 * @method void setFunctionName(string $FunctionName) 设置SCF云函数函数名
 * @method string getQualifier() 获取SCF云函数版本及别名
 * @method void setQualifier(string $Qualifier) 设置SCF云函数版本及别名
 */
class EventBusParam extends AbstractModel
{
    /**
     * @var string 资源类型。EB_COS/EB_ES/EB_CLS
     */
    public $Type;

    /**
     * @var boolean 是否为自建集群
     */
    public $SelfBuilt;

    /**
     * @var string 实例资源
     */
    public $Resource;

    /**
     * @var string SCF云函数命名空间
     */
    public $Namespace;

    /**
     * @var string SCF云函数函数名
     */
    public $FunctionName;

    /**
     * @var string SCF云函数版本及别名
     */
    public $Qualifier;

    /**
     * @param string $Type 资源类型。EB_COS/EB_ES/EB_CLS
     * @param boolean $SelfBuilt 是否为自建集群
     * @param string $Resource 实例资源
     * @param string $Namespace SCF云函数命名空间
     * @param string $FunctionName SCF云函数函数名
     * @param string $Qualifier SCF云函数版本及别名
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

        if (array_key_exists("SelfBuilt",$param) and $param["SelfBuilt"] !== null) {
            $this->SelfBuilt = $param["SelfBuilt"];
        }

        if (array_key_exists("Resource",$param) and $param["Resource"] !== null) {
            $this->Resource = $param["Resource"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("FunctionName",$param) and $param["FunctionName"] !== null) {
            $this->FunctionName = $param["FunctionName"];
        }

        if (array_key_exists("Qualifier",$param) and $param["Qualifier"] !== null) {
            $this->Qualifier = $param["Qualifier"];
        }
    }
}
