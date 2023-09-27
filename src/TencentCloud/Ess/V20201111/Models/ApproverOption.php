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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 签署人个性化能力信息
 *
 * @method boolean getNoRefuse() 获取签署方是否可以拒签

<ul><li> **false** : ( 默认)可以拒签</li>
<li> **true** :不可以拒签</li></ul>
 * @method void setNoRefuse(boolean $NoRefuse) 设置签署方是否可以拒签

<ul><li> **false** : ( 默认)可以拒签</li>
<li> **true** :不可以拒签</li></ul>
 * @method boolean getNoTransfer() 获取签署方是否可以转他人处理

<ul><li> **false** : ( 默认)可以转他人处理</li>
<li> **true** :不可以转他人处理</li></ul>
 * @method void setNoTransfer(boolean $NoTransfer) 设置签署方是否可以转他人处理

<ul><li> **false** : ( 默认)可以转他人处理</li>
<li> **true** :不可以转他人处理</li></ul>
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
     * @var boolean 签署方是否可以拒签

<ul><li> **false** : ( 默认)可以拒签</li>
<li> **true** :不可以拒签</li></ul>
     */
    public $NoRefuse;

    /**
     * @var boolean 签署方是否可以转他人处理

<ul><li> **false** : ( 默认)可以转他人处理</li>
<li> **true** :不可以转他人处理</li></ul>
     */
    public $NoTransfer;

    /**
     * @var integer 签署人信息补充类型，默认无需补充。

<ul><li> **1** : ( 动态签署人（可发起合同后再补充签署人信息）</li>
</ul>
     */
    public $FillType;

    /**
     * @param boolean $NoRefuse 签署方是否可以拒签

<ul><li> **false** : ( 默认)可以拒签</li>
<li> **true** :不可以拒签</li></ul>
     * @param boolean $NoTransfer 签署方是否可以转他人处理

<ul><li> **false** : ( 默认)可以转他人处理</li>
<li> **true** :不可以转他人处理</li></ul>
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
        if (array_key_exists("NoRefuse",$param) and $param["NoRefuse"] !== null) {
            $this->NoRefuse = $param["NoRefuse"];
        }

        if (array_key_exists("NoTransfer",$param) and $param["NoTransfer"] !== null) {
            $this->NoTransfer = $param["NoTransfer"];
        }

        if (array_key_exists("FillType",$param) and $param["FillType"] !== null) {
            $this->FillType = $param["FillType"];
        }
    }
}
