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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 问卷的问题
 *
 * @method integer getIndex() 获取<p>问题的序号</p>
 * @method void setIndex(integer $Index) 设置<p>问题的序号</p>
 * @method string getQuestion() 获取<p>问题的内容</p>
 * @method void setQuestion(string $Question) 设置<p>问题的内容</p>
 * @method integer getType() 获取<p>问题类型</p>
 * @method void setType(integer $Type) 设置<p>问题类型</p>
 * @method boolean getRequired() 获取<p>是否必选</p>
 * @method void setRequired(boolean $Required) 设置<p>是否必选</p>
 * @method array getOptions() 获取<p>问题的选项</p>
 * @method void setOptions(array $Options) 设置<p>问题的选项</p>
 */
class QuestionnaireQuestion extends AbstractModel
{
    /**
     * @var integer <p>问题的序号</p>
     */
    public $Index;

    /**
     * @var string <p>问题的内容</p>
     */
    public $Question;

    /**
     * @var integer <p>问题类型</p>
     */
    public $Type;

    /**
     * @var boolean <p>是否必选</p>
     */
    public $Required;

    /**
     * @var array <p>问题的选项</p>
     */
    public $Options;

    /**
     * @param integer $Index <p>问题的序号</p>
     * @param string $Question <p>问题的内容</p>
     * @param integer $Type <p>问题类型</p>
     * @param boolean $Required <p>是否必选</p>
     * @param array $Options <p>问题的选项</p>
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
        if (array_key_exists("Index",$param) and $param["Index"] !== null) {
            $this->Index = $param["Index"];
        }

        if (array_key_exists("Question",$param) and $param["Question"] !== null) {
            $this->Question = $param["Question"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Required",$param) and $param["Required"] !== null) {
            $this->Required = $param["Required"];
        }

        if (array_key_exists("Options",$param) and $param["Options"] !== null) {
            $this->Options = [];
            foreach ($param["Options"] as $key => $value){
                $obj = new QuestionOption();
                $obj->deserialize($value);
                array_push($this->Options, $obj);
            }
        }
    }
}
