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
 * CreateRecognizeVocabV3请求参数结构体
 *
 * @method string getName() 获取<p>词表名称（同 SdkAppId 下唯一）</p>
 * @method void setName(string $Name) 设置<p>词表名称（同 SdkAppId 下唯一）</p>
 * @method integer getSdkAppId() 获取<p>客户维度唯一标识</p>
 * @method void setSdkAppId(integer $SdkAppId) 设置<p>客户维度唯一标识</p>
 * @method string getDescription() 获取<p>描述</p>
 * @method void setDescription(string $Description) 设置<p>描述</p>
 * @method array getWordWeights() 获取<p>热词+权重数组</p>
 * @method void setWordWeights(array $WordWeights) 设置<p>热词+权重数组</p>
 * @method string getWordWeightStr() 获取<p>文本形式热词</p>
 * @method void setWordWeightStr(string $WordWeightStr) 设置<p>文本形式热词</p>
 */
class CreateRecognizeVocabV3Request extends AbstractModel
{
    /**
     * @var string <p>词表名称（同 SdkAppId 下唯一）</p>
     */
    public $Name;

    /**
     * @var integer <p>客户维度唯一标识</p>
     */
    public $SdkAppId;

    /**
     * @var string <p>描述</p>
     */
    public $Description;

    /**
     * @var array <p>热词+权重数组</p>
     */
    public $WordWeights;

    /**
     * @var string <p>文本形式热词</p>
     */
    public $WordWeightStr;

    /**
     * @param string $Name <p>词表名称（同 SdkAppId 下唯一）</p>
     * @param integer $SdkAppId <p>客户维度唯一标识</p>
     * @param string $Description <p>描述</p>
     * @param array $WordWeights <p>热词+权重数组</p>
     * @param string $WordWeightStr <p>文本形式热词</p>
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

        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
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
