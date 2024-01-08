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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CLS日志主题信息。
 *
 * @method string getTopicId() 获取日志主题 ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTopicId(string $TopicId) 设置日志主题 ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTopicName() 获取日志主题名。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTopicName(string $TopicName) 设置日志主题名。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLogsetId() 获取日志集 ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogsetId(string $LogsetId) 设置日志集 ID。
注意：此字段可能返回 null，表示取不到有效值。
 */
class CLSTopicInfo extends AbstractModel
{
    /**
     * @var string 日志主题 ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TopicId;

    /**
     * @var string 日志主题名。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TopicName;

    /**
     * @var string 日志集 ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LogsetId;

    /**
     * @param string $TopicId 日志主题 ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TopicName 日志主题名。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LogsetId 日志集 ID。
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
        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("LogsetId",$param) and $param["LogsetId"] !== null) {
            $this->LogsetId = $param["LogsetId"];
        }
    }
}
