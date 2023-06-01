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
namespace TencentCloud\Cms\V20190321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 关键词信息
 *
 * @method string getID() 获取关键词条ID
 * @method void setID(string $ID) 设置关键词条ID
 * @method string getContent() 获取关键词内容
 * @method void setContent(string $Content) 设置关键词内容
 * @method string getLabel() 获取关键词标签；取值范围为："Normal","Polity","Porn","Sexy","Ad","Illegal","Abuse","Terror","Spam","Moan"
 * @method void setLabel(string $Label) 设置关键词标签；取值范围为："Normal","Polity","Porn","Sexy","Ad","Illegal","Abuse","Terror","Spam","Moan"
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getRemark() 获取备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemark(string $Remark) 设置备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWordType() 获取词类型：Default,Pinyin,English,CompoundWord,ExclusionWord,AffixWord
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWordType(string $WordType) 设置词类型：Default,Pinyin,English,CompoundWord,ExclusionWord,AffixWord
注意：此字段可能返回 null，表示取不到有效值。
 */
class UserKeywordInfo extends AbstractModel
{
    /**
     * @var string 关键词条ID
     */
    public $ID;

    /**
     * @var string 关键词内容
     */
    public $Content;

    /**
     * @var string 关键词标签；取值范围为："Normal","Polity","Porn","Sexy","Ad","Illegal","Abuse","Terror","Spam","Moan"
     */
    public $Label;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 备注
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Remark;

    /**
     * @var string 词类型：Default,Pinyin,English,CompoundWord,ExclusionWord,AffixWord
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WordType;

    /**
     * @param string $ID 关键词条ID
     * @param string $Content 关键词内容
     * @param string $Label 关键词标签；取值范围为："Normal","Polity","Porn","Sexy","Ad","Illegal","Abuse","Terror","Spam","Moan"
     * @param string $CreateTime 创建时间
     * @param string $Remark 备注
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WordType 词类型：Default,Pinyin,English,CompoundWord,ExclusionWord,AffixWord
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("WordType",$param) and $param["WordType"] !== null) {
            $this->WordType = $param["WordType"];
        }
    }
}
