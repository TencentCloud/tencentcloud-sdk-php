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
namespace TencentCloud\Chdfs\V20201112\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 生命周期规则转换属性
 *
 * @method integer getDays() 获取触发时间（单位天）
 * @method void setDays(integer $Days) 设置触发时间（单位天）
 * @method integer getType() 获取转换类型（1：归档；2：删除；3：低频；4：深度归档；5：智能分层）
 * @method void setType(integer $Type) 设置转换类型（1：归档；2：删除；3：低频；4：深度归档；5：智能分层）
 */
class Transition extends AbstractModel
{
    /**
     * @var integer 触发时间（单位天）
     */
    public $Days;

    /**
     * @var integer 转换类型（1：归档；2：删除；3：低频；4：深度归档；5：智能分层）
     */
    public $Type;

    /**
     * @param integer $Days 触发时间（单位天）
     * @param integer $Type 转换类型（1：归档；2：删除；3：低频；4：深度归档；5：智能分层）
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
        if (array_key_exists("Days",$param) and $param["Days"] !== null) {
            $this->Days = $param["Days"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
