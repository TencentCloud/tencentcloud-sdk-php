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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 日志配置
 *
 * @method string getLogsetId() 获取日志需要投递到cls的日志集
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogsetId(string $LogsetId) 设置日志需要投递到cls的日志集
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTopicId() 获取日志需要投递到cls的主题
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTopicId(string $TopicId) 设置日志需要投递到cls的主题
注意：此字段可能返回 null，表示取不到有效值。
 */
class LogConfig extends AbstractModel
{
    /**
     * @var string 日志需要投递到cls的日志集
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LogsetId;

    /**
     * @var string 日志需要投递到cls的主题
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TopicId;

    /**
     * @param string $LogsetId 日志需要投递到cls的日志集
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TopicId 日志需要投递到cls的主题
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
        if (array_key_exists("LogsetId",$param) and $param["LogsetId"] !== null) {
            $this->LogsetId = $param["LogsetId"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }
    }
}
