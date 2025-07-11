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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SCF云函数（Serverless Cloud Function）作为后端服务
 *
 * @method FunctionInfo getFunction() 获取云函数相关信息
 * @method void setFunction(FunctionInfo $Function) 设置云函数相关信息
 * @method integer getWeight() 获取权重
 * @method void setWeight(integer $Weight) 设置权重
 */
class FunctionTarget extends AbstractModel
{
    /**
     * @var FunctionInfo 云函数相关信息
     */
    public $Function;

    /**
     * @var integer 权重
     */
    public $Weight;

    /**
     * @param FunctionInfo $Function 云函数相关信息
     * @param integer $Weight 权重
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
        if (array_key_exists("Function",$param) and $param["Function"] !== null) {
            $this->Function = new FunctionInfo();
            $this->Function->deserialize($param["Function"]);
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }
    }
}
