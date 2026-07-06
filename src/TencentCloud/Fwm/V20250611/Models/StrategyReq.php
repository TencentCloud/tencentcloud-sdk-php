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
namespace TencentCloud\Fwm\V20250611\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 创建策略的策略数据结构
 *
 * @method string getGroupId() 获取规则组Id
 * @method void setGroupId(string $GroupId) 设置规则组Id
 * @method integer getSequence() 获取优先级
 * @method void setSequence(integer $Sequence) 设置优先级
 */
class StrategyReq extends AbstractModel
{
    /**
     * @var string 规则组Id
     */
    public $GroupId;

    /**
     * @var integer 优先级
     */
    public $Sequence;

    /**
     * @param string $GroupId 规则组Id
     * @param integer $Sequence 优先级
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
        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("Sequence",$param) and $param["Sequence"] !== null) {
            $this->Sequence = $param["Sequence"];
        }
    }
}
