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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 日志详情
 *
 * @method integer getTime() 获取日志时间戳，毫秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTime(integer $Time) 设置日志时间戳，毫秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTopicId() 获取日志topic id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTopicId(string $TopicId) 设置日志topic id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTopicName() 获取日志topic name
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTopicName(string $TopicName) 设置日志topic name
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLogJson() 获取日志内容，json字符串
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogJson(string $LogJson) 设置日志内容，json字符串
注意：此字段可能返回 null，表示取不到有效值。
 */
class JobLogResult extends AbstractModel
{
    /**
     * @var integer 日志时间戳，毫秒
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Time;

    /**
     * @var string 日志topic id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TopicId;

    /**
     * @var string 日志topic name
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TopicName;

    /**
     * @var string 日志内容，json字符串
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LogJson;

    /**
     * @param integer $Time 日志时间戳，毫秒
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TopicId 日志topic id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TopicName 日志topic name
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LogJson 日志内容，json字符串
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
        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("LogJson",$param) and $param["LogJson"] !== null) {
            $this->LogJson = $param["LogJson"];
        }
    }
}
