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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 运行时风险信息
 *
 * @method integer getCnt() 获取数量
 * @method void setCnt(integer $Cnt) 设置数量
 * @method string getLevel() 获取风险等级：
CRITICAL: 严重
HIGH: 高
MEDIUM：中
LOW: 低
 * @method void setLevel(string $Level) 设置风险等级：
CRITICAL: 严重
HIGH: 高
MEDIUM：中
LOW: 低
 */
class RunTimeRiskInfo extends AbstractModel
{
    /**
     * @var integer 数量
     */
    public $Cnt;

    /**
     * @var string 风险等级：
CRITICAL: 严重
HIGH: 高
MEDIUM：中
LOW: 低
     */
    public $Level;

    /**
     * @param integer $Cnt 数量
     * @param string $Level 风险等级：
CRITICAL: 严重
HIGH: 高
MEDIUM：中
LOW: 低
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
        if (array_key_exists("Cnt",$param) and $param["Cnt"] !== null) {
            $this->Cnt = $param["Cnt"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }
    }
}
