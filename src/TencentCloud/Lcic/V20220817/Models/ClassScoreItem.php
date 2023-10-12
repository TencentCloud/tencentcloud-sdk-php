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
namespace TencentCloud\Lcic\V20220817\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 课堂评分字段
 *
 * @method integer getRoomId() 获取课堂iD
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRoomId(integer $RoomId) 设置课堂iD
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserId() 获取用户ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserId(string $UserId) 设置用户ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCreateTime() 获取评分时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(integer $CreateTime) 设置评分时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getScore() 获取课堂评分
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScore(integer $Score) 设置课堂评分
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getScoreMsg() 获取课堂评价
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScoreMsg(string $ScoreMsg) 设置课堂评价
注意：此字段可能返回 null，表示取不到有效值。
 */
class ClassScoreItem extends AbstractModel
{
    /**
     * @var integer 课堂iD
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RoomId;

    /**
     * @var string 用户ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserId;

    /**
     * @var integer 评分时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var integer 课堂评分
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Score;

    /**
     * @var string 课堂评价
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScoreMsg;

    /**
     * @param integer $RoomId 课堂iD
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserId 用户ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CreateTime 评分时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Score 课堂评分
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ScoreMsg 课堂评价
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
        if (array_key_exists("RoomId",$param) and $param["RoomId"] !== null) {
            $this->RoomId = $param["RoomId"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Score",$param) and $param["Score"] !== null) {
            $this->Score = $param["Score"];
        }

        if (array_key_exists("ScoreMsg",$param) and $param["ScoreMsg"] !== null) {
            $this->ScoreMsg = $param["ScoreMsg"];
        }
    }
}
