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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateImportTask请求参数结构体
 *
 * @method string getInputType() 获取数据来源，cos
 * @method void setInputType(string $InputType) 设置数据来源，cos
 * @method array getInputConf() 获取输入配置
 * @method void setInputConf(array $InputConf) 设置输入配置
 * @method array getOutputConf() 获取输出配置
 * @method void setOutputConf(array $OutputConf) 设置输出配置
 * @method string getOutputType() 获取目标数据源的类型，目前支持导入到托管存储，即lakefsStorage
 * @method void setOutputType(string $OutputType) 设置目标数据源的类型，目前支持导入到托管存储，即lakefsStorage
 */
class CreateImportTaskRequest extends AbstractModel
{
    /**
     * @var string 数据来源，cos
     */
    public $InputType;

    /**
     * @var array 输入配置
     */
    public $InputConf;

    /**
     * @var array 输出配置
     */
    public $OutputConf;

    /**
     * @var string 目标数据源的类型，目前支持导入到托管存储，即lakefsStorage
     */
    public $OutputType;

    /**
     * @param string $InputType 数据来源，cos
     * @param array $InputConf 输入配置
     * @param array $OutputConf 输出配置
     * @param string $OutputType 目标数据源的类型，目前支持导入到托管存储，即lakefsStorage
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
        if (array_key_exists("InputType",$param) and $param["InputType"] !== null) {
            $this->InputType = $param["InputType"];
        }

        if (array_key_exists("InputConf",$param) and $param["InputConf"] !== null) {
            $this->InputConf = [];
            foreach ($param["InputConf"] as $key => $value){
                $obj = new KVPair();
                $obj->deserialize($value);
                array_push($this->InputConf, $obj);
            }
        }

        if (array_key_exists("OutputConf",$param) and $param["OutputConf"] !== null) {
            $this->OutputConf = [];
            foreach ($param["OutputConf"] as $key => $value){
                $obj = new KVPair();
                $obj->deserialize($value);
                array_push($this->OutputConf, $obj);
            }
        }

        if (array_key_exists("OutputType",$param) and $param["OutputType"] !== null) {
            $this->OutputType = $param["OutputType"];
        }
    }
}
