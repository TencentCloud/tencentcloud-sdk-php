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
namespace TencentCloud\Eb\V20210416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CheckTransformation请求参数结构体
 *
 * @method string getInput() 获取待处理的json字符串
 * @method void setInput(string $Input) 设置待处理的json字符串
 * @method array getTransformations() 获取一个转换规则列表
 * @method void setTransformations(array $Transformations) 设置一个转换规则列表
 */
class CheckTransformationRequest extends AbstractModel
{
    /**
     * @var string 待处理的json字符串
     */
    public $Input;

    /**
     * @var array 一个转换规则列表
     */
    public $Transformations;

    /**
     * @param string $Input 待处理的json字符串
     * @param array $Transformations 一个转换规则列表
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
        if (array_key_exists("Input",$param) and $param["Input"] !== null) {
            $this->Input = $param["Input"];
        }

        if (array_key_exists("Transformations",$param) and $param["Transformations"] !== null) {
            $this->Transformations = [];
            foreach ($param["Transformations"] as $key => $value){
                $obj = new Transformation();
                $obj->deserialize($value);
                array_push($this->Transformations, $obj);
            }
        }
    }
}
