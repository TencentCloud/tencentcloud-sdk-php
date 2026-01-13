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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 参与者信息
 *
 * @method string getMail() 获取座席邮箱
 * @method void setMail(string $Mail) 设置座席邮箱
 * @method string getPhone() 获取座席电话
 * @method void setPhone(string $Phone) 设置座席电话
 * @method integer getRingTimestamp() 获取振铃时间戳，Unix 秒级时间戳
 * @method void setRingTimestamp(integer $RingTimestamp) 设置振铃时间戳，Unix 秒级时间戳
 * @method integer getAcceptTimestamp() 获取接听时间戳，Unix 秒级时间戳
 * @method void setAcceptTimestamp(integer $AcceptTimestamp) 设置接听时间戳，Unix 秒级时间戳
 * @method integer getEndedTimestamp() 获取结束时间戳，Unix 秒级时间戳
 * @method void setEndedTimestamp(integer $EndedTimestamp) 设置结束时间戳，Unix 秒级时间戳
 * @method string getRecordId() 获取录音 ID，能够索引到座席侧的录音
 * @method void setRecordId(string $RecordId) 设置录音 ID，能够索引到座席侧的录音
 * @method string getType() 获取参与者类型，"staffSeat", "outboundSeat", "staffPhoneSeat"
 * @method void setType(string $Type) 设置参与者类型，"staffSeat", "outboundSeat", "staffPhoneSeat"
 * @method string getTransferFrom() 获取转接来源座席信息
 * @method void setTransferFrom(string $TransferFrom) 设置转接来源座席信息
 * @method string getTransferFromType() 获取转接来源参与者类型，取值与 Type 一致
 * @method void setTransferFromType(string $TransferFromType) 设置转接来源参与者类型，取值与 Type 一致
 * @method string getTransferTo() 获取转接去向座席信息
 * @method void setTransferTo(string $TransferTo) 设置转接去向座席信息
 * @method string getTransferToType() 获取转接去向参与者类型，取值与 Type 一致
 * @method void setTransferToType(string $TransferToType) 设置转接去向参与者类型，取值与 Type 一致
 * @method integer getSkillGroupId() 获取技能组 ID
 * @method void setSkillGroupId(integer $SkillGroupId) 设置技能组 ID
 * @method string getEndStatusString() 获取结束状态

中文详情[参考](https://www.tencentcloud.com/zh/document/product/1229/71847)

英文详情[参考](https://www.tencentcloud.com/document/product/1229/71847?lang=en)
 * @method void setEndStatusString(string $EndStatusString) 设置结束状态

中文详情[参考](https://www.tencentcloud.com/zh/document/product/1229/71847)

英文详情[参考](https://www.tencentcloud.com/document/product/1229/71847?lang=en)
 * @method string getRecordURL() 获取录音 URL
 * @method void setRecordURL(string $RecordURL) 设置录音 URL
 * @method integer getSequence() 获取参与者序号，从 0 开始
 * @method void setSequence(integer $Sequence) 设置参与者序号，从 0 开始
 * @method integer getStartTimestamp() 获取开始时间戳，Unix 秒级时间戳
 * @method void setStartTimestamp(integer $StartTimestamp) 设置开始时间戳，Unix 秒级时间戳
 * @method string getSkillGroupName() 获取技能组名称
 * @method void setSkillGroupName(string $SkillGroupName) 设置技能组名称
 * @method string getCustomRecordURL() 获取录音转存第三方COS地址
 * @method void setCustomRecordURL(string $CustomRecordURL) 设置录音转存第三方COS地址
 */
class ServeParticipant extends AbstractModel
{
    /**
     * @var string 座席邮箱
     */
    public $Mail;

    /**
     * @var string 座席电话
     */
    public $Phone;

    /**
     * @var integer 振铃时间戳，Unix 秒级时间戳
     */
    public $RingTimestamp;

    /**
     * @var integer 接听时间戳，Unix 秒级时间戳
     */
    public $AcceptTimestamp;

    /**
     * @var integer 结束时间戳，Unix 秒级时间戳
     */
    public $EndedTimestamp;

    /**
     * @var string 录音 ID，能够索引到座席侧的录音
     */
    public $RecordId;

    /**
     * @var string 参与者类型，"staffSeat", "outboundSeat", "staffPhoneSeat"
     */
    public $Type;

    /**
     * @var string 转接来源座席信息
     */
    public $TransferFrom;

    /**
     * @var string 转接来源参与者类型，取值与 Type 一致
     */
    public $TransferFromType;

    /**
     * @var string 转接去向座席信息
     */
    public $TransferTo;

    /**
     * @var string 转接去向参与者类型，取值与 Type 一致
     */
    public $TransferToType;

    /**
     * @var integer 技能组 ID
     */
    public $SkillGroupId;

    /**
     * @var string 结束状态

中文详情[参考](https://www.tencentcloud.com/zh/document/product/1229/71847)

英文详情[参考](https://www.tencentcloud.com/document/product/1229/71847?lang=en)
     */
    public $EndStatusString;

    /**
     * @var string 录音 URL
     */
    public $RecordURL;

    /**
     * @var integer 参与者序号，从 0 开始
     */
    public $Sequence;

    /**
     * @var integer 开始时间戳，Unix 秒级时间戳
     */
    public $StartTimestamp;

    /**
     * @var string 技能组名称
     */
    public $SkillGroupName;

    /**
     * @var string 录音转存第三方COS地址
     */
    public $CustomRecordURL;

    /**
     * @param string $Mail 座席邮箱
     * @param string $Phone 座席电话
     * @param integer $RingTimestamp 振铃时间戳，Unix 秒级时间戳
     * @param integer $AcceptTimestamp 接听时间戳，Unix 秒级时间戳
     * @param integer $EndedTimestamp 结束时间戳，Unix 秒级时间戳
     * @param string $RecordId 录音 ID，能够索引到座席侧的录音
     * @param string $Type 参与者类型，"staffSeat", "outboundSeat", "staffPhoneSeat"
     * @param string $TransferFrom 转接来源座席信息
     * @param string $TransferFromType 转接来源参与者类型，取值与 Type 一致
     * @param string $TransferTo 转接去向座席信息
     * @param string $TransferToType 转接去向参与者类型，取值与 Type 一致
     * @param integer $SkillGroupId 技能组 ID
     * @param string $EndStatusString 结束状态

中文详情[参考](https://www.tencentcloud.com/zh/document/product/1229/71847)

英文详情[参考](https://www.tencentcloud.com/document/product/1229/71847?lang=en)
     * @param string $RecordURL 录音 URL
     * @param integer $Sequence 参与者序号，从 0 开始
     * @param integer $StartTimestamp 开始时间戳，Unix 秒级时间戳
     * @param string $SkillGroupName 技能组名称
     * @param string $CustomRecordURL 录音转存第三方COS地址
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
        if (array_key_exists("Mail",$param) and $param["Mail"] !== null) {
            $this->Mail = $param["Mail"];
        }

        if (array_key_exists("Phone",$param) and $param["Phone"] !== null) {
            $this->Phone = $param["Phone"];
        }

        if (array_key_exists("RingTimestamp",$param) and $param["RingTimestamp"] !== null) {
            $this->RingTimestamp = $param["RingTimestamp"];
        }

        if (array_key_exists("AcceptTimestamp",$param) and $param["AcceptTimestamp"] !== null) {
            $this->AcceptTimestamp = $param["AcceptTimestamp"];
        }

        if (array_key_exists("EndedTimestamp",$param) and $param["EndedTimestamp"] !== null) {
            $this->EndedTimestamp = $param["EndedTimestamp"];
        }

        if (array_key_exists("RecordId",$param) and $param["RecordId"] !== null) {
            $this->RecordId = $param["RecordId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("TransferFrom",$param) and $param["TransferFrom"] !== null) {
            $this->TransferFrom = $param["TransferFrom"];
        }

        if (array_key_exists("TransferFromType",$param) and $param["TransferFromType"] !== null) {
            $this->TransferFromType = $param["TransferFromType"];
        }

        if (array_key_exists("TransferTo",$param) and $param["TransferTo"] !== null) {
            $this->TransferTo = $param["TransferTo"];
        }

        if (array_key_exists("TransferToType",$param) and $param["TransferToType"] !== null) {
            $this->TransferToType = $param["TransferToType"];
        }

        if (array_key_exists("SkillGroupId",$param) and $param["SkillGroupId"] !== null) {
            $this->SkillGroupId = $param["SkillGroupId"];
        }

        if (array_key_exists("EndStatusString",$param) and $param["EndStatusString"] !== null) {
            $this->EndStatusString = $param["EndStatusString"];
        }

        if (array_key_exists("RecordURL",$param) and $param["RecordURL"] !== null) {
            $this->RecordURL = $param["RecordURL"];
        }

        if (array_key_exists("Sequence",$param) and $param["Sequence"] !== null) {
            $this->Sequence = $param["Sequence"];
        }

        if (array_key_exists("StartTimestamp",$param) and $param["StartTimestamp"] !== null) {
            $this->StartTimestamp = $param["StartTimestamp"];
        }

        if (array_key_exists("SkillGroupName",$param) and $param["SkillGroupName"] !== null) {
            $this->SkillGroupName = $param["SkillGroupName"];
        }

        if (array_key_exists("CustomRecordURL",$param) and $param["CustomRecordURL"] !== null) {
            $this->CustomRecordURL = $param["CustomRecordURL"];
        }
    }
}
