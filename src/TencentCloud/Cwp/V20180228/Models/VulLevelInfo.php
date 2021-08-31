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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 漏洞数量按等级分布统计结果实体
 *
 * @method integer getVulLevel() 获取// 危害等级：1-低危；2-中危；3-高危；4-严重
 * @method void setVulLevel(integer $VulLevel) 设置// 危害等级：1-低危；2-中危；3-高危；4-严重
 * @method integer getCount() 获取数量
 * @method void setCount(integer $Count) 设置数量
 */
class VulLevelInfo extends AbstractModel
{
    /**
     * @var integer // 危害等级：1-低危；2-中危；3-高危；4-严重
     */
    public $VulLevel;

    /**
     * @var integer 数量
     */
    public $Count;

    /**
     * @param integer $VulLevel // 危害等级：1-低危；2-中危；3-高危；4-严重
     * @param integer $Count 数量
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
        if (array_key_exists("VulLevel",$param) and $param["VulLevel"] !== null) {
            $this->VulLevel = $param["VulLevel"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }
    }
}
