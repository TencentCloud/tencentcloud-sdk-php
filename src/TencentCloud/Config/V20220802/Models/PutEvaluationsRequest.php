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
namespace TencentCloud\Config\V20220802\Models;
use TencentCloud\Common\AbstractModel;

/**
 * PutEvaluations请求参数结构体
 *
 * @method string getResultToken() 获取回调令牌。从自定义规则所选的scf云函数Context中取参数ResultToken值
 * @method void setResultToken(string $ResultToken) 设置回调令牌。从自定义规则所选的scf云函数Context中取参数ResultToken值
 * @method array getEvaluations() 获取自定义规则评估结果信息。
 * @method void setEvaluations(array $Evaluations) 设置自定义规则评估结果信息。
 */
class PutEvaluationsRequest extends AbstractModel
{
    /**
     * @var string 回调令牌。从自定义规则所选的scf云函数Context中取参数ResultToken值
     */
    public $ResultToken;

    /**
     * @var array 自定义规则评估结果信息。
     */
    public $Evaluations;

    /**
     * @param string $ResultToken 回调令牌。从自定义规则所选的scf云函数Context中取参数ResultToken值
     * @param array $Evaluations 自定义规则评估结果信息。
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
        if (array_key_exists("ResultToken",$param) and $param["ResultToken"] !== null) {
            $this->ResultToken = $param["ResultToken"];
        }

        if (array_key_exists("Evaluations",$param) and $param["Evaluations"] !== null) {
            $this->Evaluations = [];
            foreach ($param["Evaluations"] as $key => $value){
                $obj = new Evaluation();
                $obj->deserialize($value);
                array_push($this->Evaluations, $obj);
            }
        }
    }
}
