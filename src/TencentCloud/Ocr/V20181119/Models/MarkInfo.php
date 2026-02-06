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
 * 整张试卷所有题目批改信息
 *
 * @method string getMarkItemTitle() 获取题目的题干信息 


 * @method void setMarkItemTitle(string $MarkItemTitle) 设置题目的题干信息 


 * @method array getAnswerInfos() 获取批改答案列表（每个小题存在多个答案，比如多个填空区域答案，循序按照从左到右，从上到下排列）
 * @method void setAnswerInfos(array $AnswerInfos) 设置批改答案列表（每个小题存在多个答案，比如多个填空区域答案，循序按照从左到右，从上到下排列）
 * @method array getMarkInfos() 获取嵌套题目结构（如果有多层嵌套则会返回子题信息，如果没有嵌套题目则返回空）
 * @method void setMarkInfos(array $MarkInfos) 设置嵌套题目结构（如果有多层嵌套则会返回子题信息，如果没有嵌套题目则返回空）
 */
class MarkInfo extends AbstractModel
{
    /**
     * @var string 题目的题干信息 


     */
    public $MarkItemTitle;

    /**
     * @var array 批改答案列表（每个小题存在多个答案，比如多个填空区域答案，循序按照从左到右，从上到下排列）
     */
    public $AnswerInfos;

    /**
     * @var array 嵌套题目结构（如果有多层嵌套则会返回子题信息，如果没有嵌套题目则返回空）
     */
    public $MarkInfos;

    /**
     * @param string $MarkItemTitle 题目的题干信息 


     * @param array $AnswerInfos 批改答案列表（每个小题存在多个答案，比如多个填空区域答案，循序按照从左到右，从上到下排列）
     * @param array $MarkInfos 嵌套题目结构（如果有多层嵌套则会返回子题信息，如果没有嵌套题目则返回空）
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
        if (array_key_exists("MarkItemTitle",$param) and $param["MarkItemTitle"] !== null) {
            $this->MarkItemTitle = $param["MarkItemTitle"];
        }

        if (array_key_exists("AnswerInfos",$param) and $param["AnswerInfos"] !== null) {
            $this->AnswerInfos = [];
            foreach ($param["AnswerInfos"] as $key => $value){
                $obj = new AnswerInfo();
                $obj->deserialize($value);
                array_push($this->AnswerInfos, $obj);
            }
        }

        if (array_key_exists("MarkInfos",$param) and $param["MarkInfos"] !== null) {
            $this->MarkInfos = [];
            foreach ($param["MarkInfos"] as $key => $value){
                $obj = new MarkInfo();
                $obj->deserialize($value);
                array_push($this->MarkInfos, $obj);
            }
        }
    }
}
