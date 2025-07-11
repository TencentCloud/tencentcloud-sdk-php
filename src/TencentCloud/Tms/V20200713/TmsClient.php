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

namespace TencentCloud\Tms\V20200713;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Tms\V20200713\Models as Models;

/**
 * @method Models\AccountTipoffAccessResponse AccountTipoffAccess(Models\AccountTipoffAccessRequest $req) 举报恶意账号
 * @method Models\DescribeTextLibResponse DescribeTextLib(Models\DescribeTextLibRequest $req) 控制台获取用户词库列表
 * @method Models\DescribeTextStatResponse DescribeTextStat(Models\DescribeTextStatRequest $req) 控制台识别统计
 * @method Models\TextModerationResponse TextModeration(Models\TextModerationRequest $req) 文本内容检测（Text Moderation）服务使用了深度学习技术，识别可能令人反感、不安全或不适宜的文本内容，同时支持用户配置词库黑白名单，打击自定义识别类型的图片。
 */

class TmsClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "tms.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "tms";

    /**
     * @var string
     */
    protected $version = "2020-07-13";

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
        $respClass = "TencentCloud"."\\".ucfirst("tms")."\\"."V20200713\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
