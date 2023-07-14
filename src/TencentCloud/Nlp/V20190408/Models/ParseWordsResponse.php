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
namespace TencentCloud\Nlp\V20190408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ParseWords返回参数结构体
 *
 * @method string getNormalText() 获取输入文本正则化的结果。（包括对英文文本中的开头和实体进行大写等）
 * @method void setNormalText(string $NormalText) 设置输入文本正则化的结果。（包括对英文文本中的开头和实体进行大写等）
 * @method array getBasicParticiples() 获取基础粒度分词和词性标注的结果。（请参见附录[词性表](https://cloud.tencent.com/document/product/271/36460)）
 * @method void setBasicParticiples(array $BasicParticiples) 设置基础粒度分词和词性标注的结果。（请参见附录[词性表](https://cloud.tencent.com/document/product/271/36460)）
 * @method array getCompoundParticiples() 获取复合粒度分词和词性标注的结果。（请参见附录[词性表](https://cloud.tencent.com/document/product/271/36460)）
 * @method void setCompoundParticiples(array $CompoundParticiples) 设置复合粒度分词和词性标注的结果。（请参见附录[词性表](https://cloud.tencent.com/document/product/271/36460)）
 * @method array getEntities() 获取实体识别结果。（请参见附录[实体类型数据](https://cloud.tencent.com/document/product/271/90592)）

 * @method void setEntities(array $Entities) 设置实体识别结果。（请参见附录[实体类型数据](https://cloud.tencent.com/document/product/271/90592)）

 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class ParseWordsResponse extends AbstractModel
{
    /**
     * @var string 输入文本正则化的结果。（包括对英文文本中的开头和实体进行大写等）
     */
    public $NormalText;

    /**
     * @var array 基础粒度分词和词性标注的结果。（请参见附录[词性表](https://cloud.tencent.com/document/product/271/36460)）
     */
    public $BasicParticiples;

    /**
     * @var array 复合粒度分词和词性标注的结果。（请参见附录[词性表](https://cloud.tencent.com/document/product/271/36460)）
     */
    public $CompoundParticiples;

    /**
     * @var array 实体识别结果。（请参见附录[实体类型数据](https://cloud.tencent.com/document/product/271/90592)）

     */
    public $Entities;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $NormalText 输入文本正则化的结果。（包括对英文文本中的开头和实体进行大写等）
     * @param array $BasicParticiples 基础粒度分词和词性标注的结果。（请参见附录[词性表](https://cloud.tencent.com/document/product/271/36460)）
     * @param array $CompoundParticiples 复合粒度分词和词性标注的结果。（请参见附录[词性表](https://cloud.tencent.com/document/product/271/36460)）
     * @param array $Entities 实体识别结果。（请参见附录[实体类型数据](https://cloud.tencent.com/document/product/271/90592)）

     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("NormalText",$param) and $param["NormalText"] !== null) {
            $this->NormalText = $param["NormalText"];
        }

        if (array_key_exists("BasicParticiples",$param) and $param["BasicParticiples"] !== null) {
            $this->BasicParticiples = [];
            foreach ($param["BasicParticiples"] as $key => $value){
                $obj = new BasicParticiple();
                $obj->deserialize($value);
                array_push($this->BasicParticiples, $obj);
            }
        }

        if (array_key_exists("CompoundParticiples",$param) and $param["CompoundParticiples"] !== null) {
            $this->CompoundParticiples = [];
            foreach ($param["CompoundParticiples"] as $key => $value){
                $obj = new CompoundParticiple();
                $obj->deserialize($value);
                array_push($this->CompoundParticiples, $obj);
            }
        }

        if (array_key_exists("Entities",$param) and $param["Entities"] !== null) {
            $this->Entities = [];
            foreach ($param["Entities"] as $key => $value){
                $obj = new Entity();
                $obj->deserialize($value);
                array_push($this->Entities, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
