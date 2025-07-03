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
 * 获取不满意回复上下文响
 *
 * @method string getRecordBizId() 获取消息记录ID信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRecordBizId(string $RecordBizId) 设置消息记录ID信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsVisitor() 获取是否为用户
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsVisitor(boolean $IsVisitor) 设置是否为用户
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNickName() 获取昵称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNickName(string $NickName) 设置昵称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAvatar() 获取头像
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAvatar(string $Avatar) 设置头像
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getContent() 获取消息内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContent(string $Content) 设置消息内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getFileInfos() 获取文档信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileInfos(array $FileInfos) 设置文档信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getReplyMethod() 获取回复方式，15：澄清确认回复
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReplyMethod(integer $ReplyMethod) 设置回复方式，15：澄清确认回复
注意：此字段可能返回 null，表示取不到有效值。
 */
class Context extends AbstractModel
{
    /**
     * @var string 消息记录ID信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RecordBizId;

    /**
     * @var boolean 是否为用户
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsVisitor;

    /**
     * @var string 昵称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NickName;

    /**
     * @var string 头像
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Avatar;

    /**
     * @var string 消息内容
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Content;

    /**
     * @var array 文档信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileInfos;

    /**
     * @var integer 回复方式，15：澄清确认回复
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReplyMethod;

    /**
     * @param string $RecordBizId 消息记录ID信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsVisitor 是否为用户
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NickName 昵称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Avatar 头像
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Content 消息内容
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $FileInfos 文档信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ReplyMethod 回复方式，15：澄清确认回复
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
        if (array_key_exists("RecordBizId",$param) and $param["RecordBizId"] !== null) {
            $this->RecordBizId = $param["RecordBizId"];
        }

        if (array_key_exists("IsVisitor",$param) and $param["IsVisitor"] !== null) {
            $this->IsVisitor = $param["IsVisitor"];
        }

        if (array_key_exists("NickName",$param) and $param["NickName"] !== null) {
            $this->NickName = $param["NickName"];
        }

        if (array_key_exists("Avatar",$param) and $param["Avatar"] !== null) {
            $this->Avatar = $param["Avatar"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("FileInfos",$param) and $param["FileInfos"] !== null) {
            $this->FileInfos = [];
            foreach ($param["FileInfos"] as $key => $value){
                $obj = new MsgFileInfo();
                $obj->deserialize($value);
                array_push($this->FileInfos, $obj);
            }
        }

        if (array_key_exists("ReplyMethod",$param) and $param["ReplyMethod"] !== null) {
            $this->ReplyMethod = $param["ReplyMethod"];
        }
    }
}
