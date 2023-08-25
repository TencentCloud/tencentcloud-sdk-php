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
namespace TencentCloud\Dsgc\V20190723\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 风险趋势项
 *
 * @method string getDate() 获取日期
 * @method void setDate(string $Date) 设置日期
 * @method integer getUnhandled() 获取未解决数量
 * @method void setUnhandled(integer $Unhandled) 设置未解决数量
 * @method integer getHandled() 获取已解决数量
 * @method void setHandled(integer $Handled) 设置已解决数量
 * @method integer getNewDiscoveryHandled() 获取新发现
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNewDiscoveryHandled(integer $NewDiscoveryHandled) 设置新发现
注意：此字段可能返回 null，表示取不到有效值。
 */
class RiskDealedTrendItem extends AbstractModel
{
    /**
     * @var string 日期
     */
    public $Date;

    /**
     * @var integer 未解决数量
     */
    public $Unhandled;

    /**
     * @var integer 已解决数量
     */
    public $Handled;

    /**
     * @var integer 新发现
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NewDiscoveryHandled;

    /**
     * @param string $Date 日期
     * @param integer $Unhandled 未解决数量
     * @param integer $Handled 已解决数量
     * @param integer $NewDiscoveryHandled 新发现
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Date",$param) and $param["Date"] !== null) {
            $this->Date = $param["Date"];
        }

        if (array_key_exists("Unhandled",$param) and $param["Unhandled"] !== null) {
            $this->Unhandled = $param["Unhandled"];
        }

        if (array_key_exists("Handled",$param) and $param["Handled"] !== null) {
            $this->Handled = $param["Handled"];
        }

        if (array_key_exists("NewDiscoveryHandled",$param) and $param["NewDiscoveryHandled"] !== null) {
            $this->NewDiscoveryHandled = $param["NewDiscoveryHandled"];
        }
    }
}
