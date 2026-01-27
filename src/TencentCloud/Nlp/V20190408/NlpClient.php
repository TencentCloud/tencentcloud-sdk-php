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

namespace TencentCloud\Nlp\V20190408;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Nlp\V20190408\Models as Models;

/**
 * @method Models\AnalyzeSentimentResponse AnalyzeSentiment(Models\AnalyzeSentimentRequest $req) 情感分析接口能够对带有情感色彩的主观性文本进行分析、处理、归纳和推理，识别出用户的情感倾向，是积极、中性还是消极，并且提供各自概率。
 * @method Models\ParseWordsResponse ParseWords(Models\ParseWordsRequest $req) 通过精准地对文本进行分词、词性标注、命名实体识别等功能，助您更好地理解文本内容，挖掘出潜在的价值信息。
 * @method Models\SentenceCorrectionResponse SentenceCorrection(Models\SentenceCorrectionRequest $req) 智能识别并纠正句子中的语法、拼写、用词等错误，确保文本的准确性和可读性。
 */

class NlpClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "nlp.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "nlp";

    /**
     * @var string
     */
    protected $version = "2019-04-08";

    /**
     * @param Credential $credential
     * @param string $region
     * @param ClientProfile|null $profile
     * @throws TencentCloudSDKException
     */
    function __construct($credential, $region, $profile=null)
    {
        parent::__construct($this->endpoint, $this->version, $credential, $region, $profile);
    }

    public function returnResponse($action, $response)
    {
        $respClass = "TencentCloud"."\\".ucfirst("nlp")."\\"."V20190408\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
