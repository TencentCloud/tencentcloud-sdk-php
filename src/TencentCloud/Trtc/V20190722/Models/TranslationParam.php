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
 * 翻译相关的参数
 *
 * @method array getTargetLang() 获取<p>翻译的目标语言，示例值[&quot;en&quot;, &quot;ja&quot;]。目标语种列表[中文 &quot;zh&quot;，英语 &quot;en&quot;，越南语 &quot;vi&quot;，日语 &quot;ja&quot;，韩语 &quot;ko&quot;，印度尼西亚语 &quot;id&quot;，泰语 &quot;th&quot;，葡萄牙语 &quot;pt&quot;，阿拉伯语 &quot;ar&quot;，西班牙语 &quot;es&quot;，法语 &quot;fr&quot;，马来语 &quot;ms&quot;，德语 &quot;de&quot;，意大利语 &quot;it&quot;，俄语 &quot;ru&quot;]。</p>
 * @method void setTargetLang(array $TargetLang) 设置<p>翻译的目标语言，示例值[&quot;en&quot;, &quot;ja&quot;]。目标语种列表[中文 &quot;zh&quot;，英语 &quot;en&quot;，越南语 &quot;vi&quot;，日语 &quot;ja&quot;，韩语 &quot;ko&quot;，印度尼西亚语 &quot;id&quot;，泰语 &quot;th&quot;，葡萄牙语 &quot;pt&quot;，阿拉伯语 &quot;ar&quot;，西班牙语 &quot;es&quot;，法语 &quot;fr&quot;，马来语 &quot;ms&quot;，德语 &quot;de&quot;，意大利语 &quot;it&quot;，俄语 &quot;ru&quot;]。</p>
 * @method array getTerminologies() 获取<p>翻译术语表配置。</p>
 * @method void setTerminologies(array $Terminologies) 设置<p>翻译术语表配置。</p>
 */
class TranslationParam extends AbstractModel
{
    /**
     * @var array <p>翻译的目标语言，示例值[&quot;en&quot;, &quot;ja&quot;]。目标语种列表[中文 &quot;zh&quot;，英语 &quot;en&quot;，越南语 &quot;vi&quot;，日语 &quot;ja&quot;，韩语 &quot;ko&quot;，印度尼西亚语 &quot;id&quot;，泰语 &quot;th&quot;，葡萄牙语 &quot;pt&quot;，阿拉伯语 &quot;ar&quot;，西班牙语 &quot;es&quot;，法语 &quot;fr&quot;，马来语 &quot;ms&quot;，德语 &quot;de&quot;，意大利语 &quot;it&quot;，俄语 &quot;ru&quot;]。</p>
     */
    public $TargetLang;

    /**
     * @var array <p>翻译术语表配置。</p>
     */
    public $Terminologies;

    /**
     * @param array $TargetLang <p>翻译的目标语言，示例值[&quot;en&quot;, &quot;ja&quot;]。目标语种列表[中文 &quot;zh&quot;，英语 &quot;en&quot;，越南语 &quot;vi&quot;，日语 &quot;ja&quot;，韩语 &quot;ko&quot;，印度尼西亚语 &quot;id&quot;，泰语 &quot;th&quot;，葡萄牙语 &quot;pt&quot;，阿拉伯语 &quot;ar&quot;，西班牙语 &quot;es&quot;，法语 &quot;fr&quot;，马来语 &quot;ms&quot;，德语 &quot;de&quot;，意大利语 &quot;it&quot;，俄语 &quot;ru&quot;]。</p>
     * @param array $Terminologies <p>翻译术语表配置。</p>
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

        if (array_key_exists("Terminologies",$param) and $param["Terminologies"] !== null) {
            $this->Terminologies = [];
            foreach ($param["Terminologies"] as $key => $value){
                $obj = new TerminologyItem();
                $obj->deserialize($value);
                array_push($this->Terminologies, $obj);
            }
        }
    }
}
