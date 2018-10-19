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
namespace TencentCloud\Iot\V20180123\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getField() 获取字段
 * @method void setField(string $Field) 设置字段
 * @method string getCondition() 获取过滤规则
 * @method void setCondition(string $Condition) 设置过滤规则
 * @method string getTopic() 获取Topic
 * @method void setTopic(string $Topic) 设置Topic
 * @method string getProductId() 获取产品Id
 * @method void setProductId(string $ProductId) 设置产品Id
 */

/**
 *查询
 */
class RuleQuery extends AbstractModel
{
    /**
     * @var string 字段
     */
    public $Field;

    /**
     * @var string 过滤规则
     */
    public $Condition;

    /**
     * @var string Topic
     */
    public $Topic;

    /**
     * @var string 产品Id
     */
    public $ProductId;
    /**
     * @param string $Field 字段
     * @param string $Condition 过滤规则
     * @param string $Topic Topic
     * @param string $ProductId 产品Id
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Field",$param) and $param["Field"] !== null) {
            $this->Field = $param["Field"];
        }

        if (array_key_exists("Condition",$param) and $param["Condition"] !== null) {
            $this->Condition = $param["Condition"];
        }

        if (array_key_exists("Topic",$param) and $param["Topic"] !== null) {
            $this->Topic = $param["Topic"];
        }

        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }
    }
}
