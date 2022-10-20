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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 安全日志日志投递kafka设置详情
 *
 * @method string getLogType() 获取日志类型
 * @method void setLogType(string $LogType) 设置日志类型
 * @method string getTopicID() 获取主题ID
 * @method void setTopicID(string $TopicID) 设置主题ID
 * @method string getTopicName() 获取主题名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTopicName(string $TopicName) 设置主题名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getState() 获取投递状态(false:关 true:开)
 * @method void setState(boolean $State) 设置投递状态(false:关 true:开)
 */
class SecLogDeliveryKafkaSettingInfo extends AbstractModel
{
    /**
     * @var string 日志类型
     */
    public $LogType;

    /**
     * @var string 主题ID
     */
    public $TopicID;

    /**
     * @var string 主题名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TopicName;

    /**
     * @var boolean 投递状态(false:关 true:开)
     */
    public $State;

    /**
     * @param string $LogType 日志类型
     * @param string $TopicID 主题ID
     * @param string $TopicName 主题名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $State 投递状态(false:关 true:开)
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
        if (array_key_exists("LogType",$param) and $param["LogType"] !== null) {
            $this->LogType = $param["LogType"];
        }

        if (array_key_exists("TopicID",$param) and $param["TopicID"] !== null) {
            $this->TopicID = $param["TopicID"];
        }

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }
    }
}
