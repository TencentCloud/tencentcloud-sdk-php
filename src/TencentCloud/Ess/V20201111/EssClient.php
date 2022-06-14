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

namespace TencentCloud\Ess\V20201111;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Ess\V20201111\Models as Models;

/**
 * @method Models\CancelFlowResponse CancelFlow(Models\CancelFlowRequest $req) 用于撤销流程
 * @method Models\CancelMultiFlowSignQRCodeResponse CancelMultiFlowSignQRCode(Models\CancelMultiFlowSignQRCodeRequest $req) 此接口（CancelMultiFlowSignQRCode）用于取消一码多扫二维码。该接口对传入的二维码ID，若还在有效期内，可以提前失效。
 * @method Models\CreateDocumentResponse CreateDocument(Models\CreateDocumentRequest $req) 创建电子文档
 * @method Models\CreateFlowResponse CreateFlow(Models\CreateFlowRequest $req) 创建签署流程
 * @method Models\CreateFlowByFilesResponse CreateFlowByFiles(Models\CreateFlowByFilesRequest $req) 此接口（CreateFlowByFiles）用来通过上传后的pdf资源编号来创建流程。
 * @method Models\CreateMultiFlowSignQRCodeResponse CreateMultiFlowSignQRCode(Models\CreateMultiFlowSignQRCodeRequest $req) 此接口（CreateMultiFlowSignQRCode）用于创建一码多扫流程签署二维码。
适用的模板仅限于B2C（1、无序签署，2、顺序签署时B静默签署，3、顺序签署时B非首位签署）、单C的模板，且模板中发起方没有填写控件。
 * @method Models\CreateSchemeUrlResponse CreateSchemeUrl(Models\CreateSchemeUrlRequest $req) 获取小程序跳转链接

跳转到小程序的实现，参考官方文档（分为<a href="https://developers.weixin.qq.com/miniprogram/dev/api/navigate/wx.navigateToMiniProgram.html">全屏</a>、<a href="https://developers.weixin.qq.com/miniprogram/dev/framework/open-ability/openEmbeddedMiniProgram.html">半屏</a>两种方式）


如您需要自主配置小程序跳转链接，请参考: <a href="https://tcloud-doc.isd.com/document/product/1323/74774">跳转小程序链接配置说明</a>
 * @method Models\DescribeFileUrlsResponse DescribeFileUrls(Models\DescribeFileUrlsRequest $req) 查询文件下载URL
 * @method Models\DescribeFlowBriefsResponse DescribeFlowBriefs(Models\DescribeFlowBriefsRequest $req) 查询流程摘要
 * @method Models\DescribeFlowTemplatesResponse DescribeFlowTemplates(Models\DescribeFlowTemplatesRequest $req) 二期接口-查询模板
 * @method Models\DescribeThirdPartyAuthCodeResponse DescribeThirdPartyAuthCode(Models\DescribeThirdPartyAuthCodeRequest $req) 通过AuthCode查询用户是否实名
 * @method Models\StartFlowResponse StartFlow(Models\StartFlowRequest $req) 此接口用于发起流程
 * @method Models\UploadFilesResponse UploadFiles(Models\UploadFilesRequest $req) 此接口（UploadFiles）用于文件上传。
调用时需要设置Domain 为 file.ess.tencent.cn，设置Version为2020-12-22
 */

class EssClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "ess.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "ess";

    /**
     * @var string
     */
    protected $version = "2020-11-11";

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
        $respClass = "TencentCloud"."\\".ucfirst("ess")."\\"."V20201111\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
