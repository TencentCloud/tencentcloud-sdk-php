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
namespace TencentCloud\Advisor\V20200721\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 评估项警告条件
 *
 * @method integer getConditionId() 获取警告条件ID
 * @method void setConditionId(integer $ConditionId) 设置警告条件ID
 * @method integer getLevel() 获取警告级别，2:中风险，3:高风险
 * @method void setLevel(integer $Level) 设置警告级别，2:中风险，3:高风险
 * @method string getLevelDesc() 获取警告级别描述
 * @method void setLevelDesc(string $LevelDesc) 设置警告级别描述
 * @method string getDesc() 获取警告条件描述
 * @method void setDesc(string $Desc) 设置警告条件描述
 */
class Conditions extends AbstractModel
{
    /**
     * @var integer 警告条件ID
     */
    public $ConditionId;

    /**
     * @var integer 警告级别，2:中风险，3:高风险
     */
    public $Level;

    /**
     * @var string 警告级别描述
     */
    public $LevelDesc;

    /**
     * @var string 警告条件描述
     */
    public $Desc;

    /**
     * @param integer $ConditionId 警告条件ID
     * @param integer $Level 警告级别，2:中风险，3:高风险
     * @param string $LevelDesc 警告级别描述
     * @param string $Desc 警告条件描述
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
        if (array_key_exists("ConditionId",$param) and $param["ConditionId"] !== null) {
            $this->ConditionId = $param["ConditionId"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("LevelDesc",$param) and $param["LevelDesc"] !== null) {
            $this->LevelDesc = $param["LevelDesc"];
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }
    }
}
