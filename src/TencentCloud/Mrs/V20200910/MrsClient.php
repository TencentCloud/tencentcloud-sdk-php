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

namespace TencentCloud\Mrs\V20200910;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Mrs\V20200910\Models as Models;

/**
 * @method Models\DrugInstructionObjectResponse DrugInstructionObject(Models\DrugInstructionObjectRequest $req) 药品说明书PDF文件结构化
 * @method Models\ImageMaskResponse ImageMask(Models\ImageMaskRequest $req) 医疗报告图片脱敏接口
 * @method Models\ImageMaskAsyncResponse ImageMaskAsync(Models\ImageMaskAsyncRequest $req) 图片脱敏-异步接口
短时间大批量调用（例如>100上传/10分钟），如果遇到错误码“FalledOperation.AsyncQueueFullError”，请于数分钟后再次尝试提交。
 * @method Models\ImageMaskAsyncGetResultResponse ImageMaskAsyncGetResult(Models\ImageMaskAsyncGetResultRequest $req) 图片脱敏-异步获取结果接口
请于上传请求后24小时内获取结果。
 * @method Models\ImageToClassResponse ImageToClass(Models\ImageToClassRequest $req) 图片分类
 * @method Models\ImageToObjectResponse ImageToObject(Models\ImageToObjectRequest $req) 图片转结构化对象
 * @method Models\TextToClassResponse TextToClass(Models\TextToClassRequest $req) 文本分类

适用场景：经过腾讯医疗专用 OCR 从图片识别之后的文本，并且需要加上每个字符的坐标信息，才可以调用此接口。通过其它 OCR 识别的文本可能不适配。医院的 XML 格式文本也不适配，XML 文件需要经过特殊转换才能直接调用此接口。单次调用传入的文本不宜超过 2000 字。如有需要调用此接口，建议先咨询产品团队。
 * @method Models\TextToObjectResponse TextToObject(Models\TextToObjectRequest $req) 文本转结构化对象。

适用场景：经过腾讯医疗专用 OCR 从图片识别之后的文本，可以调用此接口。通过其它 OCR 识别的文本可能不适配。医院的 XML 格式文本也不适配，XML 文件需要经过特殊转换才能直接调用此接口。单次调用传入的文本不宜超过 2000 字。
 * @method Models\TurnPDFToObjectResponse TurnPDFToObject(Models\TurnPDFToObjectRequest $req) 将PDF格式的体检报告文件结构化，解析关键信息。
注意：该接口是按照体检报告 PDF 页面数量统计次数，不是按照 PDF 文件数量统计次数。通过该接口传入的报告必须是体检报告，非体检报告可能无法正确解析。
 * @method Models\TurnPDFToObjectAsyncResponse TurnPDFToObjectAsync(Models\TurnPDFToObjectAsyncRequest $req) 体检报告PDF文件结构化-异步接口
 * @method Models\TurnPDFToObjectAsyncGetResultResponse TurnPDFToObjectAsyncGetResult(Models\TurnPDFToObjectAsyncGetResultRequest $req) 体检报告PDF文件结构化异步获取结果接口
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
