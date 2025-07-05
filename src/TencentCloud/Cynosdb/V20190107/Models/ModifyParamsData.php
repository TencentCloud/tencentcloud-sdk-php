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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 修改参数信息
 *
 * @method string getName() 获取参数名
 * @method void setName(string $Name) 设置参数名
 * @method string getOldValue() 获取修改前参数值
 * @method void setOldValue(string $OldValue) 设置修改前参数值
 * @method string getCurValue() 获取修改后参数值
 * @method void setCurValue(string $CurValue) 设置修改后参数值
 */
class ModifyParamsData extends AbstractModel
{
    /**
     * @var string 参数名
     */
    public $Name;

    /**
     * @var string 修改前参数值
     */
    public $OldValue;

    /**
     * @var string 修改后参数值
     */
    public $CurValue;

    /**
     * @param string $Name 参数名
     * @param string $OldValue 修改前参数值
     * @param string $CurValue 修改后参数值
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("OldValue",$param) and $param["OldValue"] !== null) {
            $this->OldValue = $param["OldValue"];
        }

        if (array_key_exists("CurValue",$param) and $param["CurValue"] !== null) {
            $this->CurValue = $param["CurValue"];
        }
    }
}
