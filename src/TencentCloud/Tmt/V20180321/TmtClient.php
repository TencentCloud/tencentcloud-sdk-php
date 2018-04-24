<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */

namespace TencentCloud\Tmt\V20180321;
use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Tmt\V20180321\Models as Models;

/**
* @method Models\LanguageDetectResponse LanguageDetect(Models\LanguageDetectRequest $req) 可自动识别文本内容的语言种类，轻量高效，无需额外实现判断方式，使面向客户的服务体验更佳。
* @method Models\SpeechTranslateResponse SpeechTranslate(Models\SpeechTranslateRequest $req) 本接口提供音频内文字识别 + 翻译功能，目前开放中到英的语音翻译服务。
待识别和翻译的音频文件可以是 pcm、mp3、amr和speex 格式，音频内语音清晰，采用流式传输和翻译的方式。

* @method Models\TextTranslateResponse TextTranslate(Models\TextTranslateRequest $req) 提供中文到英文、英文到中文的等多种语言的文本内容翻译服务， 经过大数据语料库、多种解码算法、翻译引擎深度优化，在新闻文章、生活口语等不同语言场景中都有深厚积累，翻译结果专业评价处于行业顶级水平。
 */

class TmtClient extends AbstractClient
{
    /**
     * @var string 产品默认域名
     */
    protected $endpoint = "tmt.tencentcloudapi.com";

    /**
     * @var string api版本号
     */
    protected $version = "2018-03-21";

    /**
     * CvmClient constructor.
     * @param Credential $credential 认证类实例
     * @param string $region 地域
     * @param ClientProfile $profile client配置
     */
    function __construct($credential, $region, $profile=null)
    {
        parent::__construct($this->endpoint, $this->version, $credential, $region, $profile);
    }

    public function returnResponse($action, $response)
    {
        $respClass = "TencentCloud"."\\".ucfirst("tmt")."\\"."V20180321\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
