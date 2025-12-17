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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateRejectedQuestion请求参数结构体
 *
 * @method string getBotBizId() 获取应用ID, 获取方式参看如何获取[BotBizId](https://cloud.tencent.com/document/product/1759/109469#4eecb8c1-6ce4-45f5-8fa2-b269449d8efa)
 * @method void setBotBizId(string $BotBizId) 设置应用ID, 获取方式参看如何获取[BotBizId](https://cloud.tencent.com/document/product/1759/109469#4eecb8c1-6ce4-45f5-8fa2-b269449d8efa)
 * @method string getQuestion() 获取拒答问题


 * @method void setQuestion(string $Question) 设置拒答问题


 * @method integer getBusinessSource() 获取拒答问题来源， 1- 来源于不满意回复;  2 - 来源于手动添加
 * @method void setBusinessSource(integer $BusinessSource) 设置拒答问题来源， 1- 来源于不满意回复;  2 - 来源于手动添加
 * @method string getBusinessId() 获取拒答问题来源的数据源唯一id


 * @method void setBusinessId(string $BusinessId) 设置拒答问题来源的数据源唯一id
 */
class CreateRejectedQuestionRequest extends AbstractModel
{
    /**
     * @var string 应用ID, 获取方式参看如何获取[BotBizId](https://cloud.tencent.com/document/product/1759/109469#4eecb8c1-6ce4-45f5-8fa2-b269449d8efa)
     */
    public $BotBizId;

    /**
     * @var string 拒答问题


     */
    public $Question;

    /**
     * @var integer 拒答问题来源， 1- 来源于不满意回复;  2 - 来源于手动添加
     */
    public $BusinessSource;

    /**
     * @var string 拒答问题来源的数据源唯一id


     */
    public $BusinessId;

    /**
     * @param string $BotBizId 应用ID, 获取方式参看如何获取[BotBizId](https://cloud.tencent.com/document/product/1759/109469#4eecb8c1-6ce4-45f5-8fa2-b269449d8efa)
     * @param string $Question 拒答问题


     * @param integer $BusinessSource 拒答问题来源， 1- 来源于不满意回复;  2 - 来源于手动添加
     * @param string $BusinessId 拒答问题来源的数据源唯一id
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
        if (array_key_exists("BotBizId",$param) and $param["BotBizId"] !== null) {
            $this->BotBizId = $param["BotBizId"];
        }

        if (array_key_exists("Question",$param) and $param["Question"] !== null) {
            $this->Question = $param["Question"];
        }

        if (array_key_exists("BusinessSource",$param) and $param["BusinessSource"] !== null) {
            $this->BusinessSource = $param["BusinessSource"];
        }

        if (array_key_exists("BusinessId",$param) and $param["BusinessId"] !== null) {
            $this->BusinessId = $param["BusinessId"];
        }
    }
}
