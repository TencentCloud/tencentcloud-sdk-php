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
namespace TencentCloud\Aca\V20210323\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 危疾重症
 *
 * @method integer getType() 获取危急重症类型 0:文字描述类 1:数值检查类
 * @method void setType(integer $Type) 设置危急重症类型 0:文字描述类 1:数值检查类
 * @method string getTips() 获取提示
 * @method void setTips(string $Tips) 设置提示
 */
class CriticalInfo extends AbstractModel
{
    /**
     * @var integer 危急重症类型 0:文字描述类 1:数值检查类
     */
    public $Type;

    /**
     * @var string 提示
     */
    public $Tips;

    /**
     * @param integer $Type 危急重症类型 0:文字描述类 1:数值检查类
     * @param string $Tips 提示
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

        if (array_key_exists("Tips",$param) and $param["Tips"] !== null) {
            $this->Tips = $param["Tips"];
        }
    }
}
