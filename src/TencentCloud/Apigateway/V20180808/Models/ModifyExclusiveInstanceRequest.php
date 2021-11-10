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
 * ModifyExclusiveInstance请求参数结构体
 *
 * @method string getInstanceId() 获取独享实例唯一id
 * @method void setInstanceId(string $InstanceId) 设置独享实例唯一id
 * @method string getInstanceName() 获取独享实例name
 * @method void setInstanceName(string $InstanceName) 设置独享实例name
 * @method string getInstanceDescription() 获取独享实例描述
 * @method void setInstanceDescription(string $InstanceDescription) 设置独享实例描述
 * @method array getParameters() 获取独享实例参数配置
 * @method void setParameters(array $Parameters) 设置独享实例参数配置
 */
class ModifyExclusiveInstanceRequest extends AbstractModel
{
    /**
     * @var string 独享实例唯一id
     */
    public $InstanceId;

    /**
     * @var string 独享实例name
     */
    public $InstanceName;

    /**
     * @var string 独享实例描述
     */
    public $InstanceDescription;

    /**
     * @var array 独享实例参数配置
     */
    public $Parameters;

    /**
     * @param string $InstanceId 独享实例唯一id
     * @param string $InstanceName 独享实例name
     * @param string $InstanceDescription 独享实例描述
     * @param array $Parameters 独享实例参数配置
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("InstanceDescription",$param) and $param["InstanceDescription"] !== null) {
            $this->InstanceDescription = $param["InstanceDescription"];
        }

        if (array_key_exists("Parameters",$param) and $param["Parameters"] !== null) {
            $this->Parameters = [];
            foreach ($param["Parameters"] as $key => $value){
                $obj = new InstanceParameterInput();
                $obj->deserialize($value);
                array_push($this->Parameters, $obj);
            }
        }
    }
}
