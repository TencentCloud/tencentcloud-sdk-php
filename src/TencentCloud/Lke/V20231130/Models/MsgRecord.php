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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 消息详情
 *
 * @method string getContent() 获取内容
 * @method void setContent(string $Content) 设置内容
 * @method string getRecordId() 获取记录ID
 * @method void setRecordId(string $RecordId) 设置记录ID
 * @method string getRelatedRecordId() 获取关联记录ID
 * @method void setRelatedRecordId(string $RelatedRecordId) 设置关联记录ID
 * @method boolean getIsFromSelf() 获取是否来自自己
 * @method void setIsFromSelf(boolean $IsFromSelf) 设置是否来自自己
 * @method string getFromName() 获取发送者名称
 * @method void setFromName(string $FromName) 设置发送者名称
 * @method string getFromAvatar() 获取发送者头像
 * @method void setFromAvatar(string $FromAvatar) 设置发送者头像
 * @method string getTimestamp() 获取时间戳
 * @method void setTimestamp(string $Timestamp) 设置时间戳
 * @method boolean getHasRead() 获取是否已读
 * @method void setHasRead(boolean $HasRead) 设置是否已读
 * @method integer getScore() 获取评价
 * @method void setScore(integer $Score) 设置评价
 * @method boolean getCanRating() 获取是否评分
 * @method void setCanRating(boolean $CanRating) 设置是否评分
 * @method integer getType() 获取记录类型
 * @method void setType(integer $Type) 设置记录类型
 * @method array getReferences() 获取引用来源
 * @method void setReferences(array $References) 设置引用来源
 * @method array getReasons() 获取评价原因
 * @method void setReasons(array $Reasons) 设置评价原因
 * @method boolean getIsLlmGenerated() 获取是否大模型
 * @method void setIsLlmGenerated(boolean $IsLlmGenerated) 设置是否大模型
 */
class MsgRecord extends AbstractModel
{
    /**
     * @var string 内容
     */
    public $Content;

    /**
     * @var string 记录ID
     */
    public $RecordId;

    /**
     * @var string 关联记录ID
     */
    public $RelatedRecordId;

    /**
     * @var boolean 是否来自自己
     */
    public $IsFromSelf;

    /**
     * @var string 发送者名称
     */
    public $FromName;

    /**
     * @var string 发送者头像
     */
    public $FromAvatar;

    /**
     * @var string 时间戳
     */
    public $Timestamp;

    /**
     * @var boolean 是否已读
     */
    public $HasRead;

    /**
     * @var integer 评价
     */
    public $Score;

    /**
     * @var boolean 是否评分
     */
    public $CanRating;

    /**
     * @var integer 记录类型
     */
    public $Type;

    /**
     * @var array 引用来源
     */
    public $References;

    /**
     * @var array 评价原因
     */
    public $Reasons;

    /**
     * @var boolean 是否大模型
     */
    public $IsLlmGenerated;

    /**
     * @param string $Content 内容
     * @param string $RecordId 记录ID
     * @param string $RelatedRecordId 关联记录ID
     * @param boolean $IsFromSelf 是否来自自己
     * @param string $FromName 发送者名称
     * @param string $FromAvatar 发送者头像
     * @param string $Timestamp 时间戳
     * @param boolean $HasRead 是否已读
     * @param integer $Score 评价
     * @param boolean $CanRating 是否评分
     * @param integer $Type 记录类型
     * @param array $References 引用来源
     * @param array $Reasons 评价原因
     * @param boolean $IsLlmGenerated 是否大模型
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
        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("RecordId",$param) and $param["RecordId"] !== null) {
            $this->RecordId = $param["RecordId"];
        }

        if (array_key_exists("RelatedRecordId",$param) and $param["RelatedRecordId"] !== null) {
            $this->RelatedRecordId = $param["RelatedRecordId"];
        }

        if (array_key_exists("IsFromSelf",$param) and $param["IsFromSelf"] !== null) {
            $this->IsFromSelf = $param["IsFromSelf"];
        }

        if (array_key_exists("FromName",$param) and $param["FromName"] !== null) {
            $this->FromName = $param["FromName"];
        }

        if (array_key_exists("FromAvatar",$param) and $param["FromAvatar"] !== null) {
            $this->FromAvatar = $param["FromAvatar"];
        }

        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            $this->Timestamp = $param["Timestamp"];
        }

        if (array_key_exists("HasRead",$param) and $param["HasRead"] !== null) {
            $this->HasRead = $param["HasRead"];
        }

        if (array_key_exists("Score",$param) and $param["Score"] !== null) {
            $this->Score = $param["Score"];
        }

        if (array_key_exists("CanRating",$param) and $param["CanRating"] !== null) {
            $this->CanRating = $param["CanRating"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("References",$param) and $param["References"] !== null) {
            $this->References = [];
            foreach ($param["References"] as $key => $value){
                $obj = new MsgRecordReference();
                $obj->deserialize($value);
                array_push($this->References, $obj);
            }
        }

        if (array_key_exists("Reasons",$param) and $param["Reasons"] !== null) {
            $this->Reasons = $param["Reasons"];
        }

        if (array_key_exists("IsLlmGenerated",$param) and $param["IsLlmGenerated"] !== null) {
            $this->IsLlmGenerated = $param["IsLlmGenerated"];
        }
    }
}
