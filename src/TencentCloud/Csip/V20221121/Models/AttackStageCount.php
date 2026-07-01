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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * EDR-攻击阶段对应数量
 *
 * @method string getAttackStage() 获取<p>攻击阶段</p>
 * @method void setAttackStage(string $AttackStage) 设置<p>攻击阶段</p>
 * @method integer getCount() 获取<p>策略数量</p>
 * @method void setCount(integer $Count) 设置<p>策略数量</p>
 */
class AttackStageCount extends AbstractModel
{
    /**
     * @var string <p>攻击阶段</p>
     */
    public $AttackStage;

    /**
     * @var integer <p>策略数量</p>
     */
    public $Count;

    /**
     * @param string $AttackStage <p>攻击阶段</p>
     * @param integer $Count <p>策略数量</p>
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
        if (array_key_exists("AttackStage",$param) and $param["AttackStage"] !== null) {
            $this->AttackStage = $param["AttackStage"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }
    }
}
