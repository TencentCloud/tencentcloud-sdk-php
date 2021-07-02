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
namespace TencentCloud\Mrs\V20200910\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 检查报告结论，常见于病理检查报告
 *
 * @method string getText() 获取原文文本内容
 * @method void setText(string $Text) 设置原文文本内容
 * @method array getSymptomList() 获取病症列表
 * @method void setSymptomList(array $SymptomList) 设置病症列表
 */
class Conclusion extends AbstractModel
{
    /**
     * @var string 原文文本内容
     */
    public $Text;

    /**
     * @var array 病症列表
     */
    public $SymptomList;

    /**
     * @param string $Text 原文文本内容
     * @param array $SymptomList 病症列表
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
        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }

        if (array_key_exists("SymptomList",$param) and $param["SymptomList"] !== null) {
            $this->SymptomList = [];
            foreach ($param["SymptomList"] as $key => $value){
                $obj = new Symptom();
                $obj->deserialize($value);
                array_push($this->SymptomList, $obj);
            }
        }
    }
}
