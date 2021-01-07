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

namespace TencentCloud\Ame\V20190916;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Ame\V20190916\Models as Models;

/**
 * @method Models\DescribeAuthInfoResponse DescribeAuthInfo(Models\DescribeAuthInfoRequest $req) 获取授权项目信息列表
 * @method Models\DescribeCloudMusicResponse DescribeCloudMusic(Models\DescribeCloudMusicRequest $req) 获取云音乐播放信息接口
 * @method Models\DescribeCloudMusicPurchasedResponse DescribeCloudMusicPurchased(Models\DescribeCloudMusicPurchasedRequest $req) 获取授权项目下已购云音乐列表
 * @method Models\DescribeItemByIdResponse DescribeItemById(Models\DescribeItemByIdRequest $req) 根据歌曲ID查询歌曲信息
 * @method Models\DescribeItemsResponse DescribeItems(Models\DescribeItemsRequest $req) 该服务后续会停用，不再建议使用
 * @method Models\DescribeLyricResponse DescribeLyric(Models\DescribeLyricRequest $req) 根据接口的模式及歌曲ID来取得歌词信息。
 * @method Models\DescribeMusicResponse DescribeMusic(Models\DescribeMusicRequest $req) 获取曲库包歌曲播放信息接口
 * @method Models\DescribePackageItemsResponse DescribePackageItems(Models\DescribePackageItemsRequest $req) 获取曲库包下已核销歌曲列表接口
 * @method Models\DescribePackagesResponse DescribePackages(Models\DescribePackagesRequest $req) 获取已购曲库包列表接口
 * @method Models\DescribeStationsResponse DescribeStations(Models\DescribeStationsRequest $req) 该服务后续会停用，不再建议使用
 * @method Models\ReportDataResponse ReportData(Models\ReportDataRequest $req) 客户上报用户数据功能，为了更好地为用户提供优质服务
 */

class AmeClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "ame.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "ame";

    /**
     * @var string
     */
    protected $version = "2019-09-16";

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
        $respClass = "TencentCloud"."\\".ucfirst("ame")."\\"."V20190916\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
