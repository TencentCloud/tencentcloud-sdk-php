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
namespace TencentCloud\Cmq\V20190304\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getTopicName() 获取TopicName
 * @method void setTopicName(string $TopicName) 设置TopicName
 * @method integer getMaxMsgSize() 获取MaxMsgSize
 * @method void setMaxMsgSize(integer $MaxMsgSize) 设置MaxMsgSize
 * @method integer getFilterType() 获取FilterType
 * @method void setFilterType(integer $FilterType) 设置FilterType
 * @method integer getMsgRetentionSeconds() 获取MsgRetentionSeconds
 * @method void setMsgRetentionSeconds(integer $MsgRetentionSeconds) 设置MsgRetentionSeconds
 * @method boolean getTrace() 获取是否开启消息轨迹标识，true表示开启，false表示不开启，不填表示不开启。
 * @method void setTrace(boolean $Trace) 设置是否开启消息轨迹标识，true表示开启，false表示不开启，不填表示不开启。
 */

/**
 *CreateTopic请求参数结构体
 */
class CreateTopicRequest extends AbstractModel
{
    /**
     * @var string TopicName
     */
    public $TopicName;

    /**
     * @var integer MaxMsgSize
     */
    public $MaxMsgSize;

    /**
     * @var integer FilterType
     */
    public $FilterType;

    /**
     * @var integer MsgRetentionSeconds
     */
    public $MsgRetentionSeconds;

    /**
     * @var boolean 是否开启消息轨迹标识，true表示开启，false表示不开启，不填表示不开启。
     */
    public $Trace;
    /**
     * @param string $TopicName TopicName
     * @param integer $MaxMsgSize MaxMsgSize
     * @param integer $FilterType FilterType
     * @param integer $MsgRetentionSeconds MsgRetentionSeconds
     * @param boolean $Trace 是否开启消息轨迹标识，true表示开启，false表示不开启，不填表示不开启。
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
        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("MaxMsgSize",$param) and $param["MaxMsgSize"] !== null) {
            $this->MaxMsgSize = $param["MaxMsgSize"];
        }

        if (array_key_exists("FilterType",$param) and $param["FilterType"] !== null) {
            $this->FilterType = $param["FilterType"];
        }

        if (array_key_exists("MsgRetentionSeconds",$param) and $param["MsgRetentionSeconds"] !== null) {
            $this->MsgRetentionSeconds = $param["MsgRetentionSeconds"];
        }

        if (array_key_exists("Trace",$param) and $param["Trace"] !== null) {
            $this->Trace = $param["Trace"];
        }
    }
}
