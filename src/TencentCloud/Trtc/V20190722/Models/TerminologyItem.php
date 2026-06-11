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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 伴生转录术语表项
 *
 * @method string getTargetLang() 获取<p>翻译目标语言。</p>
 * @method void setTargetLang(string $TargetLang) 设置<p>翻译目标语言。</p>
 * @method array getTerminology() 获取<p>翻译目标语言对应的翻译术语配置。</p>
 * @method void setTerminology(array $Terminology) 设置<p>翻译目标语言对应的翻译术语配置。</p>
 */
class TerminologyItem extends AbstractModel
{
    /**
     * @var string <p>翻译目标语言。</p>
     */
    public $TargetLang;

    /**
     * @var array <p>翻译目标语言对应的翻译术语配置。</p>
     */
    public $Terminology;

    /**
     * @param string $TargetLang <p>翻译目标语言。</p>
     * @param array $Terminology <p>翻译目标语言对应的翻译术语配置。</p>
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
        if (array_key_exists("TargetLang",$param) and $param["TargetLang"] !== null) {
            $this->TargetLang = $param["TargetLang"];
        }

        if (array_key_exists("Terminology",$param) and $param["Terminology"] !== null) {
            $this->Terminology = [];
            foreach ($param["Terminology"] as $key => $value){
                $obj = new TermPair();
                $obj->deserialize($value);
                array_push($this->Terminology, $obj);
            }
        }
    }
}
