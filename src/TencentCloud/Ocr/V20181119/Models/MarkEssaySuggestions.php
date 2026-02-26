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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 作文批改建议
 *
 * @method integer getID() 获取作文批改序号
 * @method void setID(integer $ID) 设置作文批改序号
 * @method string getType() 获取批改类型：主要包括：词汇、语句
 * @method void setType(string $Type) 设置批改类型：主要包括：词汇、语句
 * @method string getSubType() 获取子类型，基于Type返回二级类型

词汇： 错别字、使用拼音、词语误用、词语冗余、词汇贫乏、多字/漏字

语句：语法硬伤、逻辑问题、表达不佳、标点误用、优美句子
 * @method void setSubType(string $SubType) 设置子类型，基于Type返回二级类型

词汇： 错别字、使用拼音、词语误用、词语冗余、词汇贫乏、多字/漏字

语句：语法硬伤、逻辑问题、表达不佳、标点误用、优美句子
 * @method string getOrigin() 获取原文内容
 * @method void setOrigin(string $Origin) 设置原文内容
 * @method string getReplace() 获取批改后的内容
 * @method void setReplace(string $Replace) 设置批改后的内容
 * @method string getMessage() 获取点评内容
 * @method void setMessage(string $Message) 设置点评内容
 * @method array getPositions() 获取array[][]二维数组，原文内容可能存在跨行的句子，会有多组坐标返回

切图区域的4个角点坐标, 是个长度为8的数组

[0,1,2,3,4,5,6,7]

(0,1) 左上角坐标
(2,3) 右上角坐标
(4,5) 右下角坐标
(6,7) 左下角坐标
 * @method void setPositions(array $Positions) 设置array[][]二维数组，原文内容可能存在跨行的句子，会有多组坐标返回

切图区域的4个角点坐标, 是个长度为8的数组

[0,1,2,3,4,5,6,7]

(0,1) 左上角坐标
(2,3) 右上角坐标
(4,5) 右下角坐标
(6,7) 左下角坐标
 */
class MarkEssaySuggestions extends AbstractModel
{
    /**
     * @var integer 作文批改序号
     */
    public $ID;

    /**
     * @var string 批改类型：主要包括：词汇、语句
     */
    public $Type;

    /**
     * @var string 子类型，基于Type返回二级类型

词汇： 错别字、使用拼音、词语误用、词语冗余、词汇贫乏、多字/漏字

语句：语法硬伤、逻辑问题、表达不佳、标点误用、优美句子
     */
    public $SubType;

    /**
     * @var string 原文内容
     */
    public $Origin;

    /**
     * @var string 批改后的内容
     */
    public $Replace;

    /**
     * @var string 点评内容
     */
    public $Message;

    /**
     * @var array array[][]二维数组，原文内容可能存在跨行的句子，会有多组坐标返回

切图区域的4个角点坐标, 是个长度为8的数组

[0,1,2,3,4,5,6,7]

(0,1) 左上角坐标
(2,3) 右上角坐标
(4,5) 右下角坐标
(6,7) 左下角坐标
     */
    public $Positions;

    /**
     * @param integer $ID 作文批改序号
     * @param string $Type 批改类型：主要包括：词汇、语句
     * @param string $SubType 子类型，基于Type返回二级类型

词汇： 错别字、使用拼音、词语误用、词语冗余、词汇贫乏、多字/漏字

语句：语法硬伤、逻辑问题、表达不佳、标点误用、优美句子
     * @param string $Origin 原文内容
     * @param string $Replace 批改后的内容
     * @param string $Message 点评内容
     * @param array $Positions array[][]二维数组，原文内容可能存在跨行的句子，会有多组坐标返回

切图区域的4个角点坐标, 是个长度为8的数组

[0,1,2,3,4,5,6,7]

(0,1) 左上角坐标
(2,3) 右上角坐标
(4,5) 右下角坐标
(6,7) 左下角坐标
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("SubType",$param) and $param["SubType"] !== null) {
            $this->SubType = $param["SubType"];
        }

        if (array_key_exists("Origin",$param) and $param["Origin"] !== null) {
            $this->Origin = $param["Origin"];
        }

        if (array_key_exists("Replace",$param) and $param["Replace"] !== null) {
            $this->Replace = $param["Replace"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("Positions",$param) and $param["Positions"] !== null) {
            $this->Positions = [];
            foreach ($param["Positions"] as $key => $value){
                $obj = new Positions();
                $obj->deserialize($value);
                array_push($this->Positions, $obj);
            }
        }
    }
}
