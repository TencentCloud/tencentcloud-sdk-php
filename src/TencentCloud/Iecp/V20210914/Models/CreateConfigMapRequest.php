<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
 * CreateConfigMap请求参数结构体
 *
 * @method integer getEdgeUnitID() 获取单元ID
 * @method void setEdgeUnitID(integer $EdgeUnitID) 设置单元ID
 * @method string getConfigMapName() 获取ConfigMap名称
 * @method void setConfigMapName(string $ConfigMapName) 设置ConfigMap名称
 * @method array getConfigMapData() 获取ConfigMap内容
 * @method void setConfigMapData(array $ConfigMapData) 设置ConfigMap内容
 * @method string getConfigMapNamespace() 获取ConfigMap命名空间,默认：default
 * @method void setConfigMapNamespace(string $ConfigMapNamespace) 设置ConfigMap命名空间,默认：default
 */
class CreateConfigMapRequest extends AbstractModel
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
     * @var array ConfigMap内容
     */
    public $ConfigMapData;

    /**
     * @var string ConfigMap命名空间,默认：default
     */
    public $ConfigMapNamespace;

    /**
     * @param integer $EdgeUnitID 单元ID
     * @param string $ConfigMapName ConfigMap名称
     * @param array $ConfigMapData ConfigMap内容
     * @param string $ConfigMapNamespace ConfigMap命名空间,默认：default
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

        if (array_key_exists("ConfigMapData",$param) and $param["ConfigMapData"] !== null) {
            $this->ConfigMapData = [];
            foreach ($param["ConfigMapData"] as $key => $value){
                $obj = new KeyValueObj();
                $obj->deserialize($value);
                array_push($this->ConfigMapData, $obj);
            }
        }

        if (array_key_exists("ConfigMapNamespace",$param) and $param["ConfigMapNamespace"] !== null) {
            $this->ConfigMapNamespace = $param["ConfigMapNamespace"];
        }
    }
}
