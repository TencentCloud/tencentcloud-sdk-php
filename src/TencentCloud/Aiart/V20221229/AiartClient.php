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

namespace TencentCloud\Aiart\V20221229;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Aiart\V20221229\Models as Models;

/**
 * @method Models\ImageToImageResponse ImageToImage(Models\ImageToImageRequest $req) 智能图生图接口将根据输入的图片及辅助描述文本，智能生成与之相关的结果图。
输入：单边分辨率小于2000、转成 Base64 字符串后小于 5MB 的图片，建议同时输入描述文本。
输出：对应风格及分辨率的 AI 生成图。
可支持的风格详见 [智能图生图风格列表](https://cloud.tencent.com/document/product/1668/86250)，请将列表中的“风格编号”传入 Styles 数组，建议选择一种风格。

请求频率限制为1次/秒。
 * @method Models\TextToImageResponse TextToImage(Models\TextToImageRequest $req) 智能文生图接口将根据输入的描述文本，智能生成与之相关的结果图。
输入：512个字符以内的描述性文本，推荐使用中文。
输出：对应风格及分辨率的 AI 生成图。
可支持的风格详见 [智能文生图风格列表](https://cloud.tencent.com/document/product/1668/86249)，请将列表中的“风格编号”传入 Styles 数组，建议选择一种风格。

请求频率限制为1次/秒。
 */

class AiartClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "aiart.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "aiart";

    /**
     * @var string
     */
    protected $version = "2022-12-29";

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
        $respClass = "TencentCloud"."\\".ucfirst("aiart")."\\"."V20221229\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
