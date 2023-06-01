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
 * 添加关键词。
 *
 * @method string getContent() 获取关键词内容：最多40个字符，并且符合词类型的规则
 * @method void setContent(string $Content) 设置关键词内容：最多40个字符，并且符合词类型的规则
 * @method string getLabel() 获取关键词类型，取值范围为："Normal","Polity","Porn","Ad","Illegal","Abuse","Terror","Spam"
 * @method void setLabel(string $Label) 设置关键词类型，取值范围为："Normal","Polity","Porn","Ad","Illegal","Abuse","Terror","Spam"
 * @method string getRemark() 获取关键词备注：最多100个字符。
 * @method void setRemark(string $Remark) 设置关键词备注：最多100个字符。
 * @method string getWordType() 获取词类型：Default,Pinyin,English,CompoundWord,ExclusionWord,AffixWord
 * @method void setWordType(string $WordType) 设置词类型：Default,Pinyin,English,CompoundWord,ExclusionWord,AffixWord
 */
class UserKeyword extends AbstractModel
{
    /**
     * @var string 关键词内容：最多40个字符，并且符合词类型的规则
     */
    public $Content;

    /**
     * @var string 关键词类型，取值范围为："Normal","Polity","Porn","Ad","Illegal","Abuse","Terror","Spam"
     */
    public $Label;

    /**
     * @var string 关键词备注：最多100个字符。
     */
    public $Remark;

    /**
     * @var string 词类型：Default,Pinyin,English,CompoundWord,ExclusionWord,AffixWord
     */
    public $WordType;

    /**
     * @param string $Content 关键词内容：最多40个字符，并且符合词类型的规则
     * @param string $Label 关键词类型，取值范围为："Normal","Polity","Porn","Ad","Illegal","Abuse","Terror","Spam"
     * @param string $Remark 关键词备注：最多100个字符。
     * @param string $WordType 词类型：Default,Pinyin,English,CompoundWord,ExclusionWord,AffixWord
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

        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("WordType",$param) and $param["WordType"] !== null) {
            $this->WordType = $param["WordType"];
        }
    }
}
