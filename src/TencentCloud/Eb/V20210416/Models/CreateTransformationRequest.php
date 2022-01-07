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
 * CreateTransformation请求参数结构体
 *
 * @method string getEventBusId() 获取事件总线 id
 * @method void setEventBusId(string $EventBusId) 设置事件总线 id
 * @method string getRuleId() 获取规则id
 * @method void setRuleId(string $RuleId) 设置规则id
 * @method array getTransformations() 获取一个转换规则列表，当前仅限定一个
 * @method void setTransformations(array $Transformations) 设置一个转换规则列表，当前仅限定一个
 */
class CreateTransformationRequest extends AbstractModel
{
    /**
     * @var string 事件总线 id
     */
    public $EventBusId;

    /**
     * @var string 规则id
     */
    public $RuleId;

    /**
     * @var array 一个转换规则列表，当前仅限定一个
     */
    public $Transformations;

    /**
     * @param string $EventBusId 事件总线 id
     * @param string $RuleId 规则id
     * @param array $Transformations 一个转换规则列表，当前仅限定一个
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
        if (array_key_exists("EventBusId",$param) and $param["EventBusId"] !== null) {
            $this->EventBusId = $param["EventBusId"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
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
