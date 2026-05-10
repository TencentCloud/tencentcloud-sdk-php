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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateRocketMQRouterRule请求参数结构体
 *
 * @method boolean getStartNow() 获取<p>true: 立即启动任务<br>false: 创建任务后不立即启动，可以在控制台操作启动</p>
 * @method void setStartNow(boolean $StartNow) 设置<p>true: 立即启动任务<br>false: 创建任务后不立即启动，可以在控制台操作启动</p>
 * @method RocketMQRouterRuleInfo getRule() 获取<p>规则数据结构</p>
 * @method void setRule(RocketMQRouterRuleInfo $Rule) 设置<p>规则数据结构</p>
 * @method string getSyncType() 获取<p>数据同步类型。<br>Topic：按照topic维度同步</p>
 * @method void setSyncType(string $SyncType) 设置<p>数据同步类型。<br>Topic：按照topic维度同步</p>
 */
class CreateRocketMQRouterRuleRequest extends AbstractModel
{
    /**
     * @var boolean <p>true: 立即启动任务<br>false: 创建任务后不立即启动，可以在控制台操作启动</p>
     */
    public $StartNow;

    /**
     * @var RocketMQRouterRuleInfo <p>规则数据结构</p>
     */
    public $Rule;

    /**
     * @var string <p>数据同步类型。<br>Topic：按照topic维度同步</p>
     */
    public $SyncType;

    /**
     * @param boolean $StartNow <p>true: 立即启动任务<br>false: 创建任务后不立即启动，可以在控制台操作启动</p>
     * @param RocketMQRouterRuleInfo $Rule <p>规则数据结构</p>
     * @param string $SyncType <p>数据同步类型。<br>Topic：按照topic维度同步</p>
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
        if (array_key_exists("StartNow",$param) and $param["StartNow"] !== null) {
            $this->StartNow = $param["StartNow"];
        }

        if (array_key_exists("Rule",$param) and $param["Rule"] !== null) {
            $this->Rule = new RocketMQRouterRuleInfo();
            $this->Rule->deserialize($param["Rule"]);
        }

        if (array_key_exists("SyncType",$param) and $param["SyncType"] !== null) {
            $this->SyncType = $param["SyncType"];
        }
    }
}
