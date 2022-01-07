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
 * DeleteTransformation请求参数结构体
 *
 * @method string getEventBusId() 获取事件集ID
 * @method void setEventBusId(string $EventBusId) 设置事件集ID
 * @method string getRuleId() 获取规则ID
 * @method void setRuleId(string $RuleId) 设置规则ID
 * @method string getTransformationId() 获取转换器id
 * @method void setTransformationId(string $TransformationId) 设置转换器id
 */
class DeleteTransformationRequest extends AbstractModel
{
    /**
     * @var string 事件集ID
     */
    public $EventBusId;

    /**
     * @var string 规则ID
     */
    public $RuleId;

    /**
     * @var string 转换器id
     */
    public $TransformationId;

    /**
     * @param string $EventBusId 事件集ID
     * @param string $RuleId 规则ID
     * @param string $TransformationId 转换器id
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

        if (array_key_exists("TransformationId",$param) and $param["TransformationId"] !== null) {
            $this->TransformationId = $param["TransformationId"];
        }
    }
}
