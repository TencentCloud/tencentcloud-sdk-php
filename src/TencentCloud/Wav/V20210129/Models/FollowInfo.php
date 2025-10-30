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
namespace TencentCloud\Wav\V20210129\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 发生过跟进的潜客信息
 *
 * @method integer getClueId() 获取线索id
 * @method void setClueId(integer $ClueId) 设置线索id
 * @method integer getCustomerId() 获取客户档案id
 * @method void setCustomerId(integer $CustomerId) 设置客户档案id
 * @method string getUserName() 获取客户姓名
 * @method void setUserName(string $UserName) 设置客户姓名
 * @method string getPhone() 获取客户的手机号
 * @method void setPhone(string $Phone) 设置客户的手机号
 * @method integer getIsOverdue() 获取是否逾期
 * @method void setIsOverdue(integer $IsOverdue) 设置是否逾期
 * @method integer getOverdueTime() 获取逾期时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOverdueTime(integer $OverdueTime) 设置逾期时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getEventType() 获取发生事件
 * @method void setEventType(integer $EventType) 设置发生事件
 * @method string getEventTypeName() 获取发生事件名称
 * @method void setEventTypeName(string $EventTypeName) 设置发生事件名称
 * @method string getFollowWayType() 获取跟进方式
 * @method void setFollowWayType(string $FollowWayType) 设置跟进方式
 * @method string getFollowWayName() 获取跟进方式名称
 * @method void setFollowWayName(string $FollowWayName) 设置跟进方式名称
 * @method integer getFollowTime() 获取本次跟进时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFollowTime(integer $FollowTime) 设置本次跟进时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getNextFollowTime() 获取下次跟进时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNextFollowTime(integer $NextFollowTime) 设置下次跟进时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFollowRecord() 获取跟进记录
 * @method void setFollowRecord(string $FollowRecord) 设置跟进记录
 */
class FollowInfo extends AbstractModel
{
    /**
     * @var integer 线索id
     */
    public $ClueId;

    /**
     * @var integer 客户档案id
     */
    public $CustomerId;

    /**
     * @var string 客户姓名
     */
    public $UserName;

    /**
     * @var string 客户的手机号
     */
    public $Phone;

    /**
     * @var integer 是否逾期
     */
    public $IsOverdue;

    /**
     * @var integer 逾期时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OverdueTime;

    /**
     * @var integer 发生事件
     */
    public $EventType;

    /**
     * @var string 发生事件名称
     */
    public $EventTypeName;

    /**
     * @var string 跟进方式
     */
    public $FollowWayType;

    /**
     * @var string 跟进方式名称
     */
    public $FollowWayName;

    /**
     * @var integer 本次跟进时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FollowTime;

    /**
     * @var integer 下次跟进时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NextFollowTime;

    /**
     * @var string 跟进记录
     */
    public $FollowRecord;

    /**
     * @param integer $ClueId 线索id
     * @param integer $CustomerId 客户档案id
     * @param string $UserName 客户姓名
     * @param string $Phone 客户的手机号
     * @param integer $IsOverdue 是否逾期
     * @param integer $OverdueTime 逾期时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $EventType 发生事件
     * @param string $EventTypeName 发生事件名称
     * @param string $FollowWayType 跟进方式
     * @param string $FollowWayName 跟进方式名称
     * @param integer $FollowTime 本次跟进时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $NextFollowTime 下次跟进时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FollowRecord 跟进记录
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
        if (array_key_exists("ClueId",$param) and $param["ClueId"] !== null) {
            $this->ClueId = $param["ClueId"];
        }

        if (array_key_exists("CustomerId",$param) and $param["CustomerId"] !== null) {
            $this->CustomerId = $param["CustomerId"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("Phone",$param) and $param["Phone"] !== null) {
            $this->Phone = $param["Phone"];
        }

        if (array_key_exists("IsOverdue",$param) and $param["IsOverdue"] !== null) {
            $this->IsOverdue = $param["IsOverdue"];
        }

        if (array_key_exists("OverdueTime",$param) and $param["OverdueTime"] !== null) {
            $this->OverdueTime = $param["OverdueTime"];
        }

        if (array_key_exists("EventType",$param) and $param["EventType"] !== null) {
            $this->EventType = $param["EventType"];
        }

        if (array_key_exists("EventTypeName",$param) and $param["EventTypeName"] !== null) {
            $this->EventTypeName = $param["EventTypeName"];
        }

        if (array_key_exists("FollowWayType",$param) and $param["FollowWayType"] !== null) {
            $this->FollowWayType = $param["FollowWayType"];
        }

        if (array_key_exists("FollowWayName",$param) and $param["FollowWayName"] !== null) {
            $this->FollowWayName = $param["FollowWayName"];
        }

        if (array_key_exists("FollowTime",$param) and $param["FollowTime"] !== null) {
            $this->FollowTime = $param["FollowTime"];
        }

        if (array_key_exists("NextFollowTime",$param) and $param["NextFollowTime"] !== null) {
            $this->NextFollowTime = $param["NextFollowTime"];
        }

        if (array_key_exists("FollowRecord",$param) and $param["FollowRecord"] !== null) {
            $this->FollowRecord = $param["FollowRecord"];
        }
    }
}
