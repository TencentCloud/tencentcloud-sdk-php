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
namespace TencentCloud\Iecp\V20210914\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 单元内的统计信息
 *
 * @method integer getTotal() 获取总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotal(integer $Total) 设置总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getOnline() 获取在线数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOnline(integer $Online) 设置在线数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAbnormal() 获取异常数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAbnormal(integer $Abnormal) 设置异常数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getOffline() 获取离线数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOffline(integer $Offline) 设置离线数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getNotActive() 获取未激活
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNotActive(integer $NotActive) 设置未激活
注意：此字段可能返回 null，表示取不到有效值。
 */
class EdgeUnitStatisticItem extends AbstractModel
{
    /**
     * @var integer 总数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Total;

    /**
     * @var integer 在线数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Online;

    /**
     * @var integer 异常数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Abnormal;

    /**
     * @var integer 离线数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Offline;

    /**
     * @var integer 未激活
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NotActive;

    /**
     * @param integer $Total 总数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Online 在线数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Abnormal 异常数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Offline 离线数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $NotActive 未激活
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
        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("Online",$param) and $param["Online"] !== null) {
            $this->Online = $param["Online"];
        }

        if (array_key_exists("Abnormal",$param) and $param["Abnormal"] !== null) {
            $this->Abnormal = $param["Abnormal"];
        }

        if (array_key_exists("Offline",$param) and $param["Offline"] !== null) {
            $this->Offline = $param["Offline"];
        }

        if (array_key_exists("NotActive",$param) and $param["NotActive"] !== null) {
            $this->NotActive = $param["NotActive"];
        }
    }
}
