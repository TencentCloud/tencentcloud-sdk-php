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
namespace TencentCloud\Mqtt\V20240516\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 查询共享订阅组（带订阅）
 *
 * @method string getSharedName() 获取<p>共享组名</p>
 * @method void setSharedName(string $SharedName) 设置<p>共享组名</p>
 * @method integer getCreateTime() 获取<p>创建时间</p><p>单位：毫秒级时间戳</p>
 * @method void setCreateTime(integer $CreateTime) 设置<p>创建时间</p><p>单位：毫秒级时间戳</p>
 * @method integer getUpdateTime() 获取<p>更新时间</p><p>单位：毫秒级时间戳</p>
 * @method void setUpdateTime(integer $UpdateTime) 设置<p>更新时间</p><p>单位：毫秒级时间戳</p>
 * @method array getTopicFilters() 获取<p>订阅表达式</p>
 * @method void setTopicFilters(array $TopicFilters) 设置<p>订阅表达式</p>
 */
class SharedSubscriptionGroupWithSubscriptions extends AbstractModel
{
    /**
     * @var string <p>共享组名</p>
     */
    public $SharedName;

    /**
     * @var integer <p>创建时间</p><p>单位：毫秒级时间戳</p>
     */
    public $CreateTime;

    /**
     * @var integer <p>更新时间</p><p>单位：毫秒级时间戳</p>
     */
    public $UpdateTime;

    /**
     * @var array <p>订阅表达式</p>
     */
    public $TopicFilters;

    /**
     * @param string $SharedName <p>共享组名</p>
     * @param integer $CreateTime <p>创建时间</p><p>单位：毫秒级时间戳</p>
     * @param integer $UpdateTime <p>更新时间</p><p>单位：毫秒级时间戳</p>
     * @param array $TopicFilters <p>订阅表达式</p>
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
        if (array_key_exists("SharedName",$param) and $param["SharedName"] !== null) {
            $this->SharedName = $param["SharedName"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("TopicFilters",$param) and $param["TopicFilters"] !== null) {
            $this->TopicFilters = $param["TopicFilters"];
        }
    }
}
