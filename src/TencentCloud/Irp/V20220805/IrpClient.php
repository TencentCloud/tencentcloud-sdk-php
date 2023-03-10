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

namespace TencentCloud\Irp\V20220805;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Irp\V20220805\Models as Models;

/**
 * @method Models\DescribeGoodsRecommendResponse DescribeGoodsRecommend(Models\DescribeGoodsRecommendRequest $req) 获取电商类推荐结果
 * @method Models\FeedRecommendResponse FeedRecommend(Models\FeedRecommendRequest $req) 获取信息流推荐结果
 * @method Models\ReportFeedBehaviorResponse ReportFeedBehavior(Models\ReportFeedBehaviorRequest $req) 上报信息流场景内的行为数据，随着数据的积累，模型的效果会逐渐稳定。
 * @method Models\ReportFeedItemResponse ReportFeedItem(Models\ReportFeedItemRequest $req) 上报被用于推荐的信息流内容信息
 * @method Models\ReportFeedUserResponse ReportFeedUser(Models\ReportFeedUserRequest $req) 上报信息流用户信息，请务必确认用户的唯一性，并在请求推荐结果时指定用户的唯一标识信息（UserId），否则将无法进行千人千面的推荐
 * @method Models\ReportGoodsBehaviorResponse ReportGoodsBehavior(Models\ReportGoodsBehaviorRequest $req) 上报电商类行为数据
 * @method Models\ReportGoodsInfoResponse ReportGoodsInfo(Models\ReportGoodsInfoRequest $req) 上报电商类商品信息
 */

class IrpClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "irp.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "irp";

    /**
     * @var string
     */
    protected $version = "2022-08-05";

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
        $respClass = "TencentCloud"."\\".ucfirst("irp")."\\"."V20220805\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
