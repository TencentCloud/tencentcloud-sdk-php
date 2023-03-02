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

namespace TencentCloud\Mrs\V20200910;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Mrs\V20200910\Models as Models;

/**
 * @method Models\ImageToClassResponse ImageToClass(Models\ImageToClassRequest $req) 图片分类
 * @method Models\ImageToObjectResponse ImageToObject(Models\ImageToObjectRequest $req) 图片转结构化对象
 * @method Models\TextToClassResponse TextToClass(Models\TextToClassRequest $req) 文本分类
 * @method Models\TextToObjectResponse TextToObject(Models\TextToObjectRequest $req) 文本转结构化对象。

适用场景：经过腾讯医疗专用 OCR 从图片识别之后的文本，可以调用此接口。通过其它 OCR 识别的文本可能不适配。医院的 XML 格式文本也不适配，XML 文件需要经过特殊转换才能直接调用此接口。单次调用传入的文本不宜超过 2000 字。
 */

class MrsClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "mrs.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "mrs";

    /**
     * @var string
     */
    protected $version = "2020-09-10";

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
        $respClass = "TencentCloud"."\\".ucfirst("mrs")."\\"."V20200910\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
