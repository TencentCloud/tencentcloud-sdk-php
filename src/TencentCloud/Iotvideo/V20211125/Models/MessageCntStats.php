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
namespace TencentCloud\Iotvideo\V20211125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 消息数量统计
 *
 * @method string getDate() 获取统计日期
 * @method void setDate(string $Date) 设置统计日期
 * @method integer getUpMsgCnt() 获取物模型上行消息数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpMsgCnt(integer $UpMsgCnt) 设置物模型上行消息数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDownMsgCnt() 获取物模型下行消息数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDownMsgCnt(integer $DownMsgCnt) 设置物模型下行消息数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getNtpMsgCnt() 获取ntp消息数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNtpMsgCnt(integer $NtpMsgCnt) 设置ntp消息数
注意：此字段可能返回 null，表示取不到有效值。
 */
class MessageCntStats extends AbstractModel
{
    /**
     * @var string 统计日期
     */
    public $Date;

    /**
     * @var integer 物模型上行消息数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpMsgCnt;

    /**
     * @var integer 物模型下行消息数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DownMsgCnt;

    /**
     * @var integer ntp消息数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NtpMsgCnt;

    /**
     * @param string $Date 统计日期
     * @param integer $UpMsgCnt 物模型上行消息数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DownMsgCnt 物模型下行消息数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $NtpMsgCnt ntp消息数
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
        if (array_key_exists("Date",$param) and $param["Date"] !== null) {
            $this->Date = $param["Date"];
        }

        if (array_key_exists("UpMsgCnt",$param) and $param["UpMsgCnt"] !== null) {
            $this->UpMsgCnt = $param["UpMsgCnt"];
        }

        if (array_key_exists("DownMsgCnt",$param) and $param["DownMsgCnt"] !== null) {
            $this->DownMsgCnt = $param["DownMsgCnt"];
        }

        if (array_key_exists("NtpMsgCnt",$param) and $param["NtpMsgCnt"] !== null) {
            $this->NtpMsgCnt = $param["NtpMsgCnt"];
        }
    }
}
