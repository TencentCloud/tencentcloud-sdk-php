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
namespace TencentCloud\Essbasic\V20210526\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 签署人个性化能力信息
 *
 * @method boolean getHideOneKeySign() 获取是否隐藏一键签署 默认false-不隐藏true-隐藏
 * @method void setHideOneKeySign(boolean $HideOneKeySign) 设置是否隐藏一键签署 默认false-不隐藏true-隐藏
 * @method integer getFillType() 获取签署人信息补充类型，默认无需补充。

<ul><li> **1** : ( 动态签署人（可发起合同后再补充签署人信息）</li>
</ul>
 * @method void setFillType(integer $FillType) 设置签署人信息补充类型，默认无需补充。

<ul><li> **1** : ( 动态签署人（可发起合同后再补充签署人信息）</li>
</ul>
 */
class ApproverOption extends AbstractModel
{
    /**
     * @var boolean 是否隐藏一键签署 默认false-不隐藏true-隐藏
     */
    public $HideOneKeySign;

    /**
     * @var integer 签署人信息补充类型，默认无需补充。

<ul><li> **1** : ( 动态签署人（可发起合同后再补充签署人信息）</li>
</ul>
     */
    public $FillType;

    /**
     * @param boolean $HideOneKeySign 是否隐藏一键签署 默认false-不隐藏true-隐藏
     * @param integer $FillType 签署人信息补充类型，默认无需补充。

<ul><li> **1** : ( 动态签署人（可发起合同后再补充签署人信息）</li>
</ul>
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
        if (array_key_exists("HideOneKeySign",$param) and $param["HideOneKeySign"] !== null) {
            $this->HideOneKeySign = $param["HideOneKeySign"];
        }

        if (array_key_exists("FillType",$param) and $param["FillType"] !== null) {
            $this->FillType = $param["FillType"];
        }
    }
}
