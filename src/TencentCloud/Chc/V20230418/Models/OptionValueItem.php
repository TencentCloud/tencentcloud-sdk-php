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
namespace TencentCloud\Chc\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 型号选项下拉框中的选项值
 *
 * @method string getOptionValue() 获取选项的值
 * @method void setOptionValue(string $OptionValue) 设置选项的值
 * @method boolean getSelected() 获取是否默认选中
 * @method void setSelected(boolean $Selected) 设置是否默认选中
 */
class OptionValueItem extends AbstractModel
{
    /**
     * @var string 选项的值
     */
    public $OptionValue;

    /**
     * @var boolean 是否默认选中
     */
    public $Selected;

    /**
     * @param string $OptionValue 选项的值
     * @param boolean $Selected 是否默认选中
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
        if (array_key_exists("OptionValue",$param) and $param["OptionValue"] !== null) {
            $this->OptionValue = $param["OptionValue"];
        }

        if (array_key_exists("Selected",$param) and $param["Selected"] !== null) {
            $this->Selected = $param["Selected"];
        }
    }
}
