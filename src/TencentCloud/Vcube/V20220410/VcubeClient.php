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

namespace TencentCloud\Vcube\V20220410;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Vcube\V20220410\Models as Models;

/**
 * @method Models\CreateActivityLicenseResponse CreateActivityLicense(Models\CreateActivityLicenseRequest $req) 创建活动license
 * @method Models\CreateApplicationAndBindLicenseResponse CreateApplicationAndBindLicense(Models\CreateApplicationAndBindLicenseRequest $req) 创建应用并绑定license或者XMagic
 * @method Models\CreateApplicationAndVideoResponse CreateApplicationAndVideo(Models\CreateApplicationAndVideoRequest $req) 创建应用和视频播放license 目前只有国际站可以用
 * @method Models\CreateApplicationAndWebPlayerLicenseResponse CreateApplicationAndWebPlayerLicense(Models\CreateApplicationAndWebPlayerLicenseRequest $req) 创建 web 播放器基础版
 * @method Models\CreateLicenseResponse CreateLicense(Models\CreateLicenseRequest $req) 绑定license
 * @method Models\CreateTestXMagicResponse CreateTestXMagic(Models\CreateTestXMagicRequest $req) 申请开通测试版腾讯特效
 * @method Models\CreateTrialApplicationAndLicenseResponse CreateTrialApplicationAndLicense(Models\CreateTrialApplicationAndLicenseRequest $req) 创建测试应用并开通测试 license
 * @method Models\CreateTrialLicenseResponse CreateTrialLicense(Models\CreateTrialLicenseRequest $req) 开通测试license
 * @method Models\CreateXMagicResponse CreateXMagic(Models\CreateXMagicRequest $req) x08开通正式版优图美视功能，针对已经有Application的情况
 * @method Models\DescribeFeatureListResponse DescribeFeatureList(Models\DescribeFeatureListRequest $req) 查询功能列表
 * @method Models\DescribeLicenseListResponse DescribeLicenseList(Models\DescribeLicenseListRequest $req) 总览页查询临期License列表，和统计数据
 * @method Models\DescribeNewsResponse DescribeNews(Models\DescribeNewsRequest $req) 查询产品动态
 * @method Models\DescribeSTSResponse DescribeSTS(Models\DescribeSTSRequest $req) 获取临时秘钥，用于图片，特效包上传
 * @method Models\DescribeTrialFeatureResponse DescribeTrialFeature(Models\DescribeTrialFeatureRequest $req) 查询测试应用可以开通的功能
 * @method Models\DescribeUserConfigResponse DescribeUserConfig(Models\DescribeUserConfigRequest $req) 查询用户个性配置
 * @method Models\DescribeVcubeApplicationAndLicenseResponse DescribeVcubeApplicationAndLicense(Models\DescribeVcubeApplicationAndLicenseRequest $req) 查询用户license， 按照应用分类
 * @method Models\DescribeVcubeApplicationAndPlayListResponse DescribeVcubeApplicationAndPlayList(Models\DescribeVcubeApplicationAndPlayListRequest $req) 查询用户点播直播等license， 按照应用分类,国际站专用
 * @method Models\DescribeVcubeApplicationAndXMagicListResponse DescribeVcubeApplicationAndXMagicList(Models\DescribeVcubeApplicationAndXMagicListRequest $req) 查询用户优图license， 按照应用分类
 * @method Models\DescribeVcubeResourcesResponse DescribeVcubeResources(Models\DescribeVcubeResourcesRequest $req) 查询视立方 license 资源，所有的资源包
 * @method Models\DescribeVcubeResourcesListResponse DescribeVcubeResourcesList(Models\DescribeVcubeResourcesListRequest $req) 查询视立方 license 资源，包括资源包赠送和直接购买的资源
 * @method Models\DescribeXMagicResourceResponse DescribeXMagicResource(Models\DescribeXMagicResourceRequest $req) 用途美视资源包用于开通正式优图美视
 * @method Models\DescribeXMagicResourceListResponse DescribeXMagicResourceList(Models\DescribeXMagicResourceListRequest $req) 用于优图美视资源列表展示
 * @method Models\ModifyApplicationResponse ModifyApplication(Models\ModifyApplicationRequest $req) 更改测试包名信息
 * @method Models\ModifyFormalApplicationResponse ModifyFormalApplication(Models\ModifyFormalApplicationRequest $req) 修改正式应用的包名称
 * @method Models\ModifyLicenseResponse ModifyLicense(Models\ModifyLicenseRequest $req) 正式license 升降配，点播精简版、基础版
 * @method Models\ModifyPresetApplicationResponse ModifyPresetApplication(Models\ModifyPresetApplicationRequest $req) 修改内置应用包名
 * @method Models\ModifyTrialLicenseResponse ModifyTrialLicense(Models\ModifyTrialLicenseRequest $req) 续期测试license
 * @method Models\ModifyXMagicResponse ModifyXMagic(Models\ModifyXMagicRequest $req) 使用一个腾讯特效资源，更新现在的腾讯特效license，license功能和到期时间会以新的资源为准，老资源会被替换下来
 * @method Models\RenewLicenseResponse RenewLicense(Models\RenewLicenseRequest $req) 正式license 续期与变更有效期
 * @method Models\RenewTestXMagicResponse RenewTestXMagic(Models\RenewTestXMagicRequest $req) 续期测试版优图美视
 * @method Models\RenewVideoResponse RenewVideo(Models\RenewVideoRequest $req) 续期国际站视频播放功能和中国站web基础版
 * @method Models\UpdateTestXMagicResponse UpdateTestXMagic(Models\UpdateTestXMagicRequest $req) 将测试xmagic升级到正式版
 * @method Models\UpdateTrialLicenseResponse UpdateTrialLicense(Models\UpdateTrialLicenseRequest $req) 测试 license 升级为正式 license
 * @method Models\UpdateXMagicResponse UpdateXMagic(Models\UpdateXMagicRequest $req) 更新优图美视的申请信息 Status 为2，3的时候可用
 */

class VcubeClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "vcube.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "vcube";

    /**
     * @var string
     */
    protected $version = "2022-04-10";

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
        $respClass = "TencentCloud"."\\".ucfirst("vcube")."\\"."V20220410\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
