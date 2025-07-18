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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 通知模板ID及通知等级列表，["Remind","Serious"]表示该通知模板仅接收提醒和严重类别的告警
 *
 * @method string getNoticeId() 获取通知模板ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNoticeId(string $NoticeId) 设置通知模板ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getClassification() 获取通知等级列表，["Remind","Serious"]表示该通知模板仅接收提醒和严重类别的告警
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClassification(array $Classification) 设置通知等级列表，["Remind","Serious"]表示该通知模板仅接收提醒和严重类别的告警
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPolicyId() 获取模板对应的策略id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPolicyId(string $PolicyId) 设置模板对应的策略id
注意：此字段可能返回 null，表示取不到有效值。
 */
class AlarmHierarchicalNotice extends AbstractModel
{
    /**
     * @var string 通知模板ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NoticeId;

    /**
     * @var array 通知等级列表，["Remind","Serious"]表示该通知模板仅接收提醒和严重类别的告警
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Classification;

    /**
     * @var string 模板对应的策略id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PolicyId;

    /**
     * @param string $NoticeId 通知模板ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Classification 通知等级列表，["Remind","Serious"]表示该通知模板仅接收提醒和严重类别的告警
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PolicyId 模板对应的策略id
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
        if (array_key_exists("NoticeId",$param) and $param["NoticeId"] !== null) {
            $this->NoticeId = $param["NoticeId"];
        }

        if (array_key_exists("Classification",$param) and $param["Classification"] !== null) {
            $this->Classification = $param["Classification"];
        }

        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }
    }
}
