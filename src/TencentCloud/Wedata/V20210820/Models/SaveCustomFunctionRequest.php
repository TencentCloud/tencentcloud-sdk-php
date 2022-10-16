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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SaveCustomFunction请求参数结构体
 *
 * @method string getFunctionId() 获取函数唯一标识
 * @method void setFunctionId(string $FunctionId) 设置函数唯一标识
 * @method string getKind() 获取分类：窗口函数、聚合函数、日期函数......
 * @method void setKind(string $Kind) 设置分类：窗口函数、聚合函数、日期函数......
 * @method string getClusterIdentifier() 获取集群引擎实例
 * @method void setClusterIdentifier(string $ClusterIdentifier) 设置集群引擎实例
 * @method string getClassName() 获取类名
 * @method void setClassName(string $ClassName) 设置类名
 * @method array getResourceList() 获取资源列表
 * @method void setResourceList(array $ResourceList) 设置资源列表
 * @method string getDescription() 获取函数说明
 * @method void setDescription(string $Description) 设置函数说明
 * @method string getUsage() 获取用法
 * @method void setUsage(string $Usage) 设置用法
 * @method string getParamDesc() 获取参数说明
 * @method void setParamDesc(string $ParamDesc) 设置参数说明
 * @method string getReturnDesc() 获取返回值说明
 * @method void setReturnDesc(string $ReturnDesc) 设置返回值说明
 * @method string getExample() 获取示例
 * @method void setExample(string $Example) 设置示例
 */
class SaveCustomFunctionRequest extends AbstractModel
{
    /**
     * @var string 函数唯一标识
     */
    public $FunctionId;

    /**
     * @var string 分类：窗口函数、聚合函数、日期函数......
     */
    public $Kind;

    /**
     * @var string 集群引擎实例
     */
    public $ClusterIdentifier;

    /**
     * @var string 类名
     */
    public $ClassName;

    /**
     * @var array 资源列表
     */
    public $ResourceList;

    /**
     * @var string 函数说明
     */
    public $Description;

    /**
     * @var string 用法
     */
    public $Usage;

    /**
     * @var string 参数说明
     */
    public $ParamDesc;

    /**
     * @var string 返回值说明
     */
    public $ReturnDesc;

    /**
     * @var string 示例
     */
    public $Example;

    /**
     * @param string $FunctionId 函数唯一标识
     * @param string $Kind 分类：窗口函数、聚合函数、日期函数......
     * @param string $ClusterIdentifier 集群引擎实例
     * @param string $ClassName 类名
     * @param array $ResourceList 资源列表
     * @param string $Description 函数说明
     * @param string $Usage 用法
     * @param string $ParamDesc 参数说明
     * @param string $ReturnDesc 返回值说明
     * @param string $Example 示例
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
        if (array_key_exists("FunctionId",$param) and $param["FunctionId"] !== null) {
            $this->FunctionId = $param["FunctionId"];
        }

        if (array_key_exists("Kind",$param) and $param["Kind"] !== null) {
            $this->Kind = $param["Kind"];
        }

        if (array_key_exists("ClusterIdentifier",$param) and $param["ClusterIdentifier"] !== null) {
            $this->ClusterIdentifier = $param["ClusterIdentifier"];
        }

        if (array_key_exists("ClassName",$param) and $param["ClassName"] !== null) {
            $this->ClassName = $param["ClassName"];
        }

        if (array_key_exists("ResourceList",$param) and $param["ResourceList"] !== null) {
            $this->ResourceList = [];
            foreach ($param["ResourceList"] as $key => $value){
                $obj = new FunctionResource();
                $obj->deserialize($value);
                array_push($this->ResourceList, $obj);
            }
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Usage",$param) and $param["Usage"] !== null) {
            $this->Usage = $param["Usage"];
        }

        if (array_key_exists("ParamDesc",$param) and $param["ParamDesc"] !== null) {
            $this->ParamDesc = $param["ParamDesc"];
        }

        if (array_key_exists("ReturnDesc",$param) and $param["ReturnDesc"] !== null) {
            $this->ReturnDesc = $param["ReturnDesc"];
        }

        if (array_key_exists("Example",$param) and $param["Example"] !== null) {
            $this->Example = $param["Example"];
        }
    }
}
