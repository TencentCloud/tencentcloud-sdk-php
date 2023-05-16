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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Rocketmq消息消费track信息
 *
 * @method string getGroup() 获取消费者组
 * @method void setGroup(string $Group) 设置消费者组
 * @method string getConsumeStatus() 获取消费状态
 * @method void setConsumeStatus(string $ConsumeStatus) 设置消费状态
 * @method string getTrackType() 获取消息track类型
 * @method void setTrackType(string $TrackType) 设置消息track类型
 * @method string getExceptionDesc() 获取异常信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExceptionDesc(string $ExceptionDesc) 设置异常信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class RocketMQMessageTrack extends AbstractModel
{
    /**
     * @var string 消费者组
     */
    public $Group;

    /**
     * @var string 消费状态
     */
    public $ConsumeStatus;

    /**
     * @var string 消息track类型
     */
    public $TrackType;

    /**
     * @var string 异常信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExceptionDesc;

    /**
     * @param string $Group 消费者组
     * @param string $ConsumeStatus 消费状态
     * @param string $TrackType 消息track类型
     * @param string $ExceptionDesc 异常信息
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
        if (array_key_exists("Group",$param) and $param["Group"] !== null) {
            $this->Group = $param["Group"];
        }

        if (array_key_exists("ConsumeStatus",$param) and $param["ConsumeStatus"] !== null) {
            $this->ConsumeStatus = $param["ConsumeStatus"];
        }

        if (array_key_exists("TrackType",$param) and $param["TrackType"] !== null) {
            $this->TrackType = $param["TrackType"];
        }

        if (array_key_exists("ExceptionDesc",$param) and $param["ExceptionDesc"] !== null) {
            $this->ExceptionDesc = $param["ExceptionDesc"];
        }
    }
}
