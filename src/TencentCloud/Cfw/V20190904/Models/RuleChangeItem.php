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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 规则顺序变更项，由原始id值变为新的id值。
 *
 * @method integer getOrderIndex() 获取原始sequence 值
 * @method void setOrderIndex(integer $OrderIndex) 设置原始sequence 值
 * @method integer getNewOrderIndex() 获取新的sequence 值
 * @method void setNewOrderIndex(integer $NewOrderIndex) 设置新的sequence 值
 */
class RuleChangeItem extends AbstractModel
{
    /**
     * @var integer 原始sequence 值
     */
    public $OrderIndex;

    /**
     * @var integer 新的sequence 值
     */
    public $NewOrderIndex;

    /**
     * @param integer $OrderIndex 原始sequence 值
     * @param integer $NewOrderIndex 新的sequence 值
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
        if (array_key_exists("OrderIndex",$param) and $param["OrderIndex"] !== null) {
            $this->OrderIndex = $param["OrderIndex"];
        }

        if (array_key_exists("NewOrderIndex",$param) and $param["NewOrderIndex"] !== null) {
            $this->NewOrderIndex = $param["NewOrderIndex"];
        }
    }
}
