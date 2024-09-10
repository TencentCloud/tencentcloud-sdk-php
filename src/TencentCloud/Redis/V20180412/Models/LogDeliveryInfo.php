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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 日志投递信息
 *
 * @method boolean getEnabled() 获取日志投递开启状态，开启：true，关闭：false
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnabled(boolean $Enabled) 设置日志投递开启状态，开启：true，关闭：false
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLogsetId() 获取日志集ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogsetId(string $LogsetId) 设置日志集ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTopicId() 获取日志主题ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTopicId(string $TopicId) 设置日志主题ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLogRegion() 获取日志集所在地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogRegion(string $LogRegion) 设置日志集所在地域
注意：此字段可能返回 null，表示取不到有效值。
 */
class LogDeliveryInfo extends AbstractModel
{
    /**
     * @var boolean 日志投递开启状态，开启：true，关闭：false
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Enabled;

    /**
     * @var string 日志集ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LogsetId;

    /**
     * @var string 日志主题ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TopicId;

    /**
     * @var string 日志集所在地域
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LogRegion;

    /**
     * @param boolean $Enabled 日志投递开启状态，开启：true，关闭：false
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LogsetId 日志集ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TopicId 日志主题ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LogRegion 日志集所在地域
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
        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("LogsetId",$param) and $param["LogsetId"] !== null) {
            $this->LogsetId = $param["LogsetId"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("LogRegion",$param) and $param["LogRegion"] !== null) {
            $this->LogRegion = $param["LogRegion"];
        }
    }
}
