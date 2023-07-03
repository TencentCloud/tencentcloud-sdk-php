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
namespace TencentCloud\Wav\V20210129\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 发生过到店的潜客到店信息
 *
 * @method integer getClueId() 获取线索id
 * @method void setClueId(integer $ClueId) 设置线索id
 * @method integer getCustomerId() 获取客户id
 * @method void setCustomerId(integer $CustomerId) 设置客户id
 * @method string getUserName() 获取客户姓名
 * @method void setUserName(string $UserName) 设置客户姓名
 * @method string getPhone() 获取客户的手机号
 * @method void setPhone(string $Phone) 设置客户的手机号
 * @method integer getFirstArrival() 获取是否首次到店，0否，1是
 * @method void setFirstArrival(integer $FirstArrival) 设置是否首次到店，0否，1是
 * @method integer getArrivalTime() 获取到店时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setArrivalTime(integer $ArrivalTime) 设置到店时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getEventType() 获取发生事件
 * @method void setEventType(integer $EventType) 设置发生事件
 * @method string getEventTypeName() 获取发生事件名称
 * @method void setEventTypeName(string $EventTypeName) 设置发生事件名称
 * @method string getFollowRecord() 获取跟进记录
 * @method void setFollowRecord(string $FollowRecord) 设置跟进记录
 */
class ArrivalInfo extends AbstractModel
{
    /**
     * @var integer 线索id
     */
    public $ClueId;

    /**
     * @var integer 客户id
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
     * @var integer 是否首次到店，0否，1是
     */
    public $FirstArrival;

    /**
     * @var integer 到店时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ArrivalTime;

    /**
     * @var integer 发生事件
     */
    public $EventType;

    /**
     * @var string 发生事件名称
     */
    public $EventTypeName;

    /**
     * @var string 跟进记录
     */
    public $FollowRecord;

    /**
     * @param integer $ClueId 线索id
     * @param integer $CustomerId 客户id
     * @param string $UserName 客户姓名
     * @param string $Phone 客户的手机号
     * @param integer $FirstArrival 是否首次到店，0否，1是
     * @param integer $ArrivalTime 到店时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $EventType 发生事件
     * @param string $EventTypeName 发生事件名称
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

        if (array_key_exists("FirstArrival",$param) and $param["FirstArrival"] !== null) {
            $this->FirstArrival = $param["FirstArrival"];
        }

        if (array_key_exists("ArrivalTime",$param) and $param["ArrivalTime"] !== null) {
            $this->ArrivalTime = $param["ArrivalTime"];
        }

        if (array_key_exists("EventType",$param) and $param["EventType"] !== null) {
            $this->EventType = $param["EventType"];
        }

        if (array_key_exists("EventTypeName",$param) and $param["EventTypeName"] !== null) {
            $this->EventTypeName = $param["EventTypeName"];
        }

        if (array_key_exists("FollowRecord",$param) and $param["FollowRecord"] !== null) {
            $this->FollowRecord = $param["FollowRecord"];
        }
    }
}
