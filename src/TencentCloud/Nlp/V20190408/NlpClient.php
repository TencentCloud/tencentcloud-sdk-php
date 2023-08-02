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

namespace TencentCloud\Nlp\V20190408;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Nlp\V20190408\Models as Models;

/**
 * @method Models\AnalyzeSentimentResponse AnalyzeSentiment(Models\AnalyzeSentimentRequest $req) 情感分析接口能够对带有情感色彩的主观性文本进行分析、处理、归纳和推理，识别出用户的情感倾向，是积极、中性还是消极，并且提供各自概率。
 * @method Models\ClassifyContentResponse ClassifyContent(Models\ClassifyContentRequest $req) 文本分类接口能够对用户输入的文章进行自动分类，将其映射到具体的类目上，用户只需要提供待分类的文本，而无需关注具体实现。该功能定义了一套较为完备的[三级分类体系](https://cloud.tencent.com/document/product/271/94286)，积累了数百万的语料，经过多轮迭代优化打造了较先进的深度学习模型，以保证效果不断提升。
 * @method Models\ComposeCoupletResponse ComposeCouplet(Models\ComposeCoupletRequest $req) 对联生成接口根据用户输入的命题关键词，智能生成一副完整的春联，包括上联、下联和横批。该接口利用先进的自然语言处理技术，确保生成的春联既符合传统对仗、对韵、对义的要求，又具有新意和创意，为用户提供独特的春节祝福。
 * @method Models\ComposePoetryResponse ComposePoetry(Models\ComposePoetryRequest $req) 诗词生成接口利用现代的自然语言处理和深度学习技术，模仿了古代著名诗人的风格，为用户产生独特的诗词。用户只需输入的命题关键词，接口就能自动生成一首七言律诗或五言律诗。
 * @method Models\EvaluateSentenceSimilarityResponse EvaluateSentenceSimilarity(Models\EvaluateSentenceSimilarityRequest $req) 通过计算句子间的语义相似性，帮助您快速找到文本中重复或相似的句子，用于文本聚类、相似问题检索等应用场景。
 * @method Models\EvaluateWordSimilarityResponse EvaluateWordSimilarity(Models\EvaluateWordSimilarityRequest $req) 评估两个词语在语义空间的相似程度，为您的场景应用提供有力支持，如关键词过滤、热门话题挖掘等。（目前仅支持中文）
 * @method Models\GenerateKeywordSentenceResponse GenerateKeywordSentence(Models\GenerateKeywordSentenceRequest $req) 提取文本中的关键信息，生成简洁明了的关键句子，便于用户快速获取核心观点。
 * @method Models\ParseWordsResponse ParseWords(Models\ParseWordsRequest $req) 通过精准地对文本进行分词、词性标注、命名实体识别等功能，助您更好地理解文本内容，挖掘出潜在的价值信息。
 * @method Models\RetrieveSimilarWordsResponse RetrieveSimilarWords(Models\RetrieveSimilarWordsRequest $req) 基于大数据和深度学习技术，可以快速地找到与给定词语高度相似的其他词语，有助于提高搜索和推荐的准确性。（目前仅支持中文）
 * @method Models\SentenceCorrectionResponse SentenceCorrection(Models\SentenceCorrectionRequest $req) 智能识别并纠正句子中的语法、拼写、用词等错误，确保文本的准确性和可读性。
 * @method Models\TextEmbellishResponse TextEmbellish(Models\TextEmbellishRequest $req) 运用先进的自然语言处理技术，对原始文本进行优化润色，提升文本的通顺性、表达力和语言质量。
 * @method Models\TextWritingResponse TextWriting(Models\TextWritingRequest $req) 通过自动补全文本片段，帮助用户快速生成高质量、连贯的完整文本，提高创作效率。
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
