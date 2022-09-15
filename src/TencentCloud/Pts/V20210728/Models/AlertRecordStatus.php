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
namespace TencentCloud\Pts\V20210728\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 告警历史项的状态
 *
 * @method integer getAbortJob() 获取停止压测任务成功与否
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAbortJob(integer $AbortJob) 设置停止压测任务成功与否
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSendNotice() 获取发送告警通知成功与否
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSendNotice(integer $SendNotice) 设置发送告警通知成功与否
注意：此字段可能返回 null，表示取不到有效值。
 */
class AlertRecordStatus extends AbstractModel
{
    /**
     * @var integer 停止压测任务成功与否
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AbortJob;

    /**
     * @var integer 发送告警通知成功与否
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SendNotice;

    /**
     * @param integer $AbortJob 停止压测任务成功与否
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SendNotice 发送告警通知成功与否
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
        if (array_key_exists("AbortJob",$param) and $param["AbortJob"] !== null) {
            $this->AbortJob = $param["AbortJob"];
        }

        if (array_key_exists("SendNotice",$param) and $param["SendNotice"] !== null) {
            $this->SendNotice = $param["SendNotice"];
        }
    }
}
