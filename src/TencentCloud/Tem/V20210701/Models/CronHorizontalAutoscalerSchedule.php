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
namespace TencentCloud\Tem\V20210701\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 定时伸缩策略明细
 *
 * @method string getStartAt() 获取触发事件，小时分钟，用:分割
例如
00:00（零点零分触发）
 * @method void setStartAt(string $StartAt) 设置触发事件，小时分钟，用:分割
例如
00:00（零点零分触发）
 * @method integer getTargetReplicas() 获取目标实例数（不大于50）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetReplicas(integer $TargetReplicas) 设置目标实例数（不大于50）
注意：此字段可能返回 null，表示取不到有效值。
 */
class CronHorizontalAutoscalerSchedule extends AbstractModel
{
    /**
     * @var string 触发事件，小时分钟，用:分割
例如
00:00（零点零分触发）
     */
    public $StartAt;

    /**
     * @var integer 目标实例数（不大于50）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetReplicas;

    /**
     * @param string $StartAt 触发事件，小时分钟，用:分割
例如
00:00（零点零分触发）
     * @param integer $TargetReplicas 目标实例数（不大于50）
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
        if (array_key_exists("StartAt",$param) and $param["StartAt"] !== null) {
            $this->StartAt = $param["StartAt"];
        }

        if (array_key_exists("TargetReplicas",$param) and $param["TargetReplicas"] !== null) {
            $this->TargetReplicas = $param["TargetReplicas"];
        }
    }
}
