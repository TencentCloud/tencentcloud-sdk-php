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
namespace TencentCloud\Trocket\V20230308\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 消费组路由规格
 *
 * @method string getMatchCondition() 获取<p>路由匹配条件</p>
 * @method void setMatchCondition(string $MatchCondition) 设置<p>路由匹配条件</p>
 * @method string getTargetConsumerLabel() 获取<p>标签</p>
 * @method void setTargetConsumerLabel(string $TargetConsumerLabel) 设置<p>标签</p>
 */
class RouteRule extends AbstractModel
{
    /**
     * @var string <p>路由匹配条件</p>
     */
    public $MatchCondition;

    /**
     * @var string <p>标签</p>
     */
    public $TargetConsumerLabel;

    /**
     * @param string $MatchCondition <p>路由匹配条件</p>
     * @param string $TargetConsumerLabel <p>标签</p>
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
        if (array_key_exists("MatchCondition",$param) and $param["MatchCondition"] !== null) {
            $this->MatchCondition = $param["MatchCondition"];
        }

        if (array_key_exists("TargetConsumerLabel",$param) and $param["TargetConsumerLabel"] !== null) {
            $this->TargetConsumerLabel = $param["TargetConsumerLabel"];
        }
    }
}
