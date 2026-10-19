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

namespace TencentCloud\Wsa\V20250508;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Wsa\V20250508\Models as Models;

/**
 * @method Models\SearchProResponse SearchPro(Models\SearchProRequest $req) 元宝搜索（Tencent Yuanbao Search，wsa）以互联网全网公开资源为基础，叠加腾讯优质内容生态，结合元宝 App 联网搜索应用实践，从数据收录到智能检索召回，全链路构建 AI 友好搜索引擎。合作伙伴通过检索词发起请求，接口以 JSON 形式返回搜索结果对应的排序信息、数据字段，合作伙伴可在业务场景中结合搜索结果的内容，扩充信息内容源，丰富展现效果，提升用户的查询满意度。
 */

class WsaClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "wsa.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "wsa";

    /**
     * @var string
     */
    protected $version = "2025-05-08";

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
        $respClass = "TencentCloud"."\\".ucfirst("wsa")."\\"."V20250508\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
