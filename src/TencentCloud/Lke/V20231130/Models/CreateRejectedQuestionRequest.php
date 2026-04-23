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
 * @method string getBotBizId() 获取<p>应用ID, 获取方式参看如何获取<a href="https://cloud.tencent.com/document/product/1759/109469#4eecb8c1-6ce4-45f5-8fa2-b269449d8efa">BotBizId</a></p>
 * @method void setBotBizId(string $BotBizId) 设置<p>应用ID, 获取方式参看如何获取<a href="https://cloud.tencent.com/document/product/1759/109469#4eecb8c1-6ce4-45f5-8fa2-b269449d8efa">BotBizId</a></p>
 * @method string getQuestion() 获取<p>拒答问题</p>
 * @method void setQuestion(string $Question) 设置<p>拒答问题</p>
 * @method integer getBusinessSource() 获取<p>拒答问题来源， 1- 来源于不满意回复;  2 - 来源于手动添加</p>
 * @method void setBusinessSource(integer $BusinessSource) 设置<p>拒答问题来源， 1- 来源于不满意回复;  2 - 来源于手动添加</p>
 * @method string getBusinessId() 获取<p>拒答问题来源的数据源唯一id</p>
 * @method void setBusinessId(string $BusinessId) 设置<p>拒答问题来源的数据源唯一id</p>
 * @method integer getEnableScope() 获取<p>拒答生效域: 1-不生效；2-仅开发域生效；3-仅发布域生效；4-开发域和发布域均生效 默认值：2。</p>
 * @method void setEnableScope(integer $EnableScope) 设置<p>拒答生效域: 1-不生效；2-仅开发域生效；3-仅发布域生效；4-开发域和发布域均生效 默认值：2。</p>
 */
class CreateRejectedQuestionRequest extends AbstractModel
{
    /**
     * @var string <p>应用ID, 获取方式参看如何获取<a href="https://cloud.tencent.com/document/product/1759/109469#4eecb8c1-6ce4-45f5-8fa2-b269449d8efa">BotBizId</a></p>
     */
    public $BotBizId;

    /**
     * @var string <p>拒答问题</p>
     */
    public $Question;

    /**
     * @var integer <p>拒答问题来源， 1- 来源于不满意回复;  2 - 来源于手动添加</p>
     */
    public $BusinessSource;

    /**
     * @var string <p>拒答问题来源的数据源唯一id</p>
     */
    public $BusinessId;

    /**
     * @var integer <p>拒答生效域: 1-不生效；2-仅开发域生效；3-仅发布域生效；4-开发域和发布域均生效 默认值：2。</p>
     */
    public $EnableScope;

    /**
     * @param string $BotBizId <p>应用ID, 获取方式参看如何获取<a href="https://cloud.tencent.com/document/product/1759/109469#4eecb8c1-6ce4-45f5-8fa2-b269449d8efa">BotBizId</a></p>
     * @param string $Question <p>拒答问题</p>
     * @param integer $BusinessSource <p>拒答问题来源， 1- 来源于不满意回复;  2 - 来源于手动添加</p>
     * @param string $BusinessId <p>拒答问题来源的数据源唯一id</p>
     * @param integer $EnableScope <p>拒答生效域: 1-不生效；2-仅开发域生效；3-仅发布域生效；4-开发域和发布域均生效 默认值：2。</p>
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

        if (array_key_exists("EnableScope",$param) and $param["EnableScope"] !== null) {
            $this->EnableScope = $param["EnableScope"];
        }
    }
}
