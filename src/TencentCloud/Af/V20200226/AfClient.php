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

namespace TencentCloud\Af\V20200226;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Af\V20200226\Models as Models;

/**
 * @method Models\DescribeAntiFraudResponse DescribeAntiFraud(Models\DescribeAntiFraudRequest $req) 该接口未在使用，后端地址已无法访问，经查近60天日志无正常业务访问记录，申请预下线。

天御反欺诈服务，主要应用于银行、证券、保险、消费金融等金融行业客户，通过腾讯的大数据风控能力，
可以准确识别恶意用户信息，解决客户在支付、活动、理财，风控等业务环节遇到的欺诈威胁，降低企业
的损失。
 * @method Models\GetAntiFraudResponse GetAntiFraud(Models\GetAntiFraudRequest $req) 反欺诈评分接口
 * @method Models\QueryAntiFraudResponse QueryAntiFraud(Models\QueryAntiFraudRequest $req) 天御反欺诈服务，主要应用于银行、证券、保险、消费金融等金融行业客户，通过腾讯的大数据风控能力，
可以准确识别恶意用户信息，解决客户在支付、活动、理财，风控等业务环节遇到的欺诈威胁，降低企业
的损失。
 */

class AfClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "af.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "af";

    /**
     * @var string
     */
    protected $version = "2020-02-26";

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
        $respClass = "TencentCloud"."\\".ucfirst("af")."\\"."V20200226\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
