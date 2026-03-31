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
namespace TencentCloud\Asr\V20190614\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateAsrVocab请求参数结构体
 *
 * @method string getName() 获取<p>热词表名称，长度在1-255之间, 注意: 仅允许中英文、数字、下划线、中英文标点、空格、横线</p>
 * @method void setName(string $Name) 设置<p>热词表名称，长度在1-255之间, 注意: 仅允许中英文、数字、下划线、中英文标点、空格、横线</p>
 * @method string getDescription() 获取<p>热词表描述，长度在0-1000之间</p>
 * @method void setDescription(string $Description) 设置<p>热词表描述，长度在0-1000之间</p>
 * @method array getWordWeights() 获取<p>词权重数组，包含全部的热词和对应的权重。每个热词的长度不大于10个汉字或30个英文字符，权重为[1,11]之间整数或者100，数组长度不大于1000<br>注意: </p><ul><li>热词权重设置为11时，当前热词将升级为超级热词，建议仅将重要且必须生效的热词设置到11，设置过多权重为11的热词将影响整体字准率。</li><li>热词权重设置为100时，当前热词开启热词增强同音替换功能（仅支持8k_zh,16k_zh），举例：热词配置“蜜制|100”时，与“蜜制”同拼音（mizhi）的“秘制”的识别结果会被强制替换成“蜜制”。因此建议客户根据自己的实际情况开启该功能。建议仅将重要且必须生效的热词设置到100，设置过多权重为100的热词将影响整体字准率。</li></ul>
 * @method void setWordWeights(array $WordWeights) 设置<p>词权重数组，包含全部的热词和对应的权重。每个热词的长度不大于10个汉字或30个英文字符，权重为[1,11]之间整数或者100，数组长度不大于1000<br>注意: </p><ul><li>热词权重设置为11时，当前热词将升级为超级热词，建议仅将重要且必须生效的热词设置到11，设置过多权重为11的热词将影响整体字准率。</li><li>热词权重设置为100时，当前热词开启热词增强同音替换功能（仅支持8k_zh,16k_zh），举例：热词配置“蜜制|100”时，与“蜜制”同拼音（mizhi）的“秘制”的识别结果会被强制替换成“蜜制”。因此建议客户根据自己的实际情况开启该功能。建议仅将重要且必须生效的热词设置到100，设置过多权重为100的热词将影响整体字准率。</li></ul>
 * @method string getWordWeightStr() 获取<p>词权重文件（纯文本文件）的二进制base64编码，以行分隔，每行的格式为word|weight，即以英文符号|为分割，左边为词，右边为权重，如：你好|5。<br>当用户传此参数（参数长度大于0），即以此参数解析词权重，WordWeights会被忽略</p>
 * @method void setWordWeightStr(string $WordWeightStr) 设置<p>词权重文件（纯文本文件）的二进制base64编码，以行分隔，每行的格式为word|weight，即以英文符号|为分割，左边为词，右边为权重，如：你好|5。<br>当用户传此参数（参数长度大于0），即以此参数解析词权重，WordWeights会被忽略</p>
 */
class CreateAsrVocabRequest extends AbstractModel
{
    /**
     * @var string <p>热词表名称，长度在1-255之间, 注意: 仅允许中英文、数字、下划线、中英文标点、空格、横线</p>
     */
    public $Name;

    /**
     * @var string <p>热词表描述，长度在0-1000之间</p>
     */
    public $Description;

    /**
     * @var array <p>词权重数组，包含全部的热词和对应的权重。每个热词的长度不大于10个汉字或30个英文字符，权重为[1,11]之间整数或者100，数组长度不大于1000<br>注意: </p><ul><li>热词权重设置为11时，当前热词将升级为超级热词，建议仅将重要且必须生效的热词设置到11，设置过多权重为11的热词将影响整体字准率。</li><li>热词权重设置为100时，当前热词开启热词增强同音替换功能（仅支持8k_zh,16k_zh），举例：热词配置“蜜制|100”时，与“蜜制”同拼音（mizhi）的“秘制”的识别结果会被强制替换成“蜜制”。因此建议客户根据自己的实际情况开启该功能。建议仅将重要且必须生效的热词设置到100，设置过多权重为100的热词将影响整体字准率。</li></ul>
     */
    public $WordWeights;

    /**
     * @var string <p>词权重文件（纯文本文件）的二进制base64编码，以行分隔，每行的格式为word|weight，即以英文符号|为分割，左边为词，右边为权重，如：你好|5。<br>当用户传此参数（参数长度大于0），即以此参数解析词权重，WordWeights会被忽略</p>
     */
    public $WordWeightStr;

    /**
     * @param string $Name <p>热词表名称，长度在1-255之间, 注意: 仅允许中英文、数字、下划线、中英文标点、空格、横线</p>
     * @param string $Description <p>热词表描述，长度在0-1000之间</p>
     * @param array $WordWeights <p>词权重数组，包含全部的热词和对应的权重。每个热词的长度不大于10个汉字或30个英文字符，权重为[1,11]之间整数或者100，数组长度不大于1000<br>注意: </p><ul><li>热词权重设置为11时，当前热词将升级为超级热词，建议仅将重要且必须生效的热词设置到11，设置过多权重为11的热词将影响整体字准率。</li><li>热词权重设置为100时，当前热词开启热词增强同音替换功能（仅支持8k_zh,16k_zh），举例：热词配置“蜜制|100”时，与“蜜制”同拼音（mizhi）的“秘制”的识别结果会被强制替换成“蜜制”。因此建议客户根据自己的实际情况开启该功能。建议仅将重要且必须生效的热词设置到100，设置过多权重为100的热词将影响整体字准率。</li></ul>
     * @param string $WordWeightStr <p>词权重文件（纯文本文件）的二进制base64编码，以行分隔，每行的格式为word|weight，即以英文符号|为分割，左边为词，右边为权重，如：你好|5。<br>当用户传此参数（参数长度大于0），即以此参数解析词权重，WordWeights会被忽略</p>
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("WordWeights",$param) and $param["WordWeights"] !== null) {
            $this->WordWeights = [];
            foreach ($param["WordWeights"] as $key => $value){
                $obj = new HotWord();
                $obj->deserialize($value);
                array_push($this->WordWeights, $obj);
            }
        }

        if (array_key_exists("WordWeightStr",$param) and $param["WordWeightStr"] !== null) {
            $this->WordWeightStr = $param["WordWeightStr"];
        }
    }
}
