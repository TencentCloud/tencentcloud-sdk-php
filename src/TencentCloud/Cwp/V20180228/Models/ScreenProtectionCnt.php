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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 大屏可视化主机安全返回态势数据
 *
 * @method string getType() 获取cloud：云查杀引擎，detect：检测引擎，defend：攻击防御，threat：威胁情报，analysis：异常分析，ai：AI引擎
 * @method void setType(string $Type) 设置cloud：云查杀引擎，detect：检测引擎，defend：攻击防御，threat：威胁情报，analysis：异常分析，ai：AI引擎
 * @method string getName() 获取cloud：云查杀引擎，detect：检测引擎，defend：攻击防御，threat：威胁情报，analysis：异常分析，ai：AI引擎
 * @method void setName(string $Name) 设置cloud：云查杀引擎，detect：检测引擎，defend：攻击防御，threat：威胁情报，analysis：异常分析，ai：AI引擎
 * @method integer getCount() 获取总数
 * @method void setCount(integer $Count) 设置总数
 */
class ScreenProtectionCnt extends AbstractModel
{
    /**
     * @var string cloud：云查杀引擎，detect：检测引擎，defend：攻击防御，threat：威胁情报，analysis：异常分析，ai：AI引擎
     */
    public $Type;

    /**
     * @var string cloud：云查杀引擎，detect：检测引擎，defend：攻击防御，threat：威胁情报，analysis：异常分析，ai：AI引擎
     */
    public $Name;

    /**
     * @var integer 总数
     */
    public $Count;

    /**
     * @param string $Type cloud：云查杀引擎，detect：检测引擎，defend：攻击防御，threat：威胁情报，analysis：异常分析，ai：AI引擎
     * @param string $Name cloud：云查杀引擎，detect：检测引擎，defend：攻击防御，threat：威胁情报，analysis：异常分析，ai：AI引擎
     * @param integer $Count 总数
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }
    }
}
