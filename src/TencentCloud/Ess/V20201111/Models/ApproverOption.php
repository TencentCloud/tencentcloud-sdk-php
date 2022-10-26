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
 * @method boolean getNoRefuse() 获取是否可以拒签 false-可以拒签,默认 true-不可以拒签
 * @method void setNoRefuse(boolean $NoRefuse) 设置是否可以拒签 false-可以拒签,默认 true-不可以拒签
 * @method boolean getNoTransfer() 获取是否可以转发 false-可以转发,默认 true-不可以转发
 * @method void setNoTransfer(boolean $NoTransfer) 设置是否可以转发 false-可以转发,默认 true-不可以转发
 */
class ApproverOption extends AbstractModel
{
    /**
     * @var boolean 是否可以拒签 false-可以拒签,默认 true-不可以拒签
     */
    public $NoRefuse;

    /**
     * @var boolean 是否可以转发 false-可以转发,默认 true-不可以转发
     */
    public $NoTransfer;

    /**
     * @param boolean $NoRefuse 是否可以拒签 false-可以拒签,默认 true-不可以拒签
     * @param boolean $NoTransfer 是否可以转发 false-可以转发,默认 true-不可以转发
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
    }
}
