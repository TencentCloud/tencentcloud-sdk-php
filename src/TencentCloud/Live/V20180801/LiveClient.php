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

namespace TencentCloud\Live\V20180801;
use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Live\V20180801\Models as Models;

/**
* @method Models\AddDelayLiveStreamResponse AddDelayLiveStream(Models\AddDelayLiveStreamRequest $req) 对流设置延播时间
注意：如果在推流前设置延播，需要提前5分钟设置。

* @method Models\AddLiveWatermarkResponse AddLiveWatermark(Models\AddLiveWatermarkRequest $req) 添加水印
* @method Models\CreateLiveRecordResponse CreateLiveRecord(Models\CreateLiveRecordRequest $req) - 使用前提
  1. 录制文件存放于点播平台，所以用户如需使用录制功能，需首先自行开通点播服务。
  2. 录制文件存放后相关费用（含存储以及下行播放流量）按照点播平台计费方式收取，具体请参考 [对应文档](https://cloud.tencent.com/document/product/266/2838)。

- 模式说明
  该接口支持两种录制模式：
  1. 定时录制模式。
    需要传入开始时间与结束时间，录制任务根据时间自动开始与结束。
  2. 实时视频录制模式。
    忽略传入的开始时间，在录制任务创建后立即开始录制，录制时长支持最大为30分钟，如果传入的结束时间与当前时间差大于30分钟，则按30分钟计算，实时视频录制主要用于录制精彩视频场景，时长建议控制在5分钟以内。

- 注意事项
  1. 调用接口超时设置应大于3秒，小于3秒重试以及频繁调用都有可能产生重复录制任务。
* @method Models\CreatePullStreamConfigResponse CreatePullStreamConfig(Models\CreatePullStreamConfigRequest $req) 添加拉流配置，目前限制添加10条任务。
* @method Models\DeleteLiveRecordResponse DeleteLiveRecord(Models\DeleteLiveRecordRequest $req) 用于删除录制任务
* @method Models\DeleteLiveWatermarkResponse DeleteLiveWatermark(Models\DeleteLiveWatermarkRequest $req) 删除水印
* @method Models\DeletePullStreamConfigResponse DeletePullStreamConfig(Models\DeletePullStreamConfigRequest $req) 删除直播拉流配置
* @method Models\DescribeLivePlayAuthKeyResponse DescribeLivePlayAuthKey(Models\DescribeLivePlayAuthKeyRequest $req) 查询播放鉴权key
* @method Models\DescribeLivePushAuthKeyResponse DescribeLivePushAuthKey(Models\DescribeLivePushAuthKeyRequest $req) 查询直播推流鉴权key
* @method Models\DescribeLiveStreamOnlineInfoResponse DescribeLiveStreamOnlineInfo(Models\DescribeLiveStreamOnlineInfoRequest $req) 查询在线推流信息列表
* @method Models\DescribeLiveStreamOnlineListResponse DescribeLiveStreamOnlineList(Models\DescribeLiveStreamOnlineListRequest $req) 返回正在直播中的流列表
* @method Models\DescribeLiveStreamPublishedListResponse DescribeLiveStreamPublishedList(Models\DescribeLiveStreamPublishedListRequest $req) 返回已经推过流的流列表
* @method Models\DescribeLiveStreamStateResponse DescribeLiveStreamState(Models\DescribeLiveStreamStateRequest $req) 返回直播中、无推流或者禁播等状态
* @method Models\DescribeLiveWatermarksResponse DescribeLiveWatermarks(Models\DescribeLiveWatermarksRequest $req) 查询水印列表
* @method Models\DescribePullStreamConfigsResponse DescribePullStreamConfigs(Models\DescribePullStreamConfigsRequest $req) 查询拉流配置
* @method Models\DropLiveStreamResponse DropLiveStream(Models\DropLiveStreamRequest $req) 断开推流连接，但可以重新推流
* @method Models\ForbidLiveStreamResponse ForbidLiveStream(Models\ForbidLiveStreamRequest $req) 禁止某条流的推送，可以预设某个时刻将流恢复。
* @method Models\ModifyLivePlayAuthKeyResponse ModifyLivePlayAuthKey(Models\ModifyLivePlayAuthKeyRequest $req) 修改播放鉴权key
* @method Models\ModifyLivePushAuthKeyResponse ModifyLivePushAuthKey(Models\ModifyLivePushAuthKeyRequest $req) 修改直播推流鉴权key
* @method Models\ModifyPullStreamConfigResponse ModifyPullStreamConfig(Models\ModifyPullStreamConfigRequest $req) 更新拉流配置
* @method Models\ModifyPullStreamStatusResponse ModifyPullStreamStatus(Models\ModifyPullStreamStatusRequest $req) 修改直播拉流配置状态
* @method Models\ResumeDelayLiveStreamResponse ResumeDelayLiveStream(Models\ResumeDelayLiveStreamRequest $req) 恢复延迟播放设置
* @method Models\ResumeLiveStreamResponse ResumeLiveStream(Models\ResumeLiveStreamRequest $req) 恢复某条流的推送。
* @method Models\SetLiveWatermarkStatusResponse SetLiveWatermarkStatus(Models\SetLiveWatermarkStatusRequest $req) 设置水印是否启用
* @method Models\StopLiveRecordResponse StopLiveRecord(Models\StopLiveRecordRequest $req) 说明：录制后的文件存放于点播平台。用户如需使用录制功能，需首先自行开通点播账号并确保账号可用。录制文件存放后，相关费用（含存储以及下行播放流量）按照点播平台计费方式收取，请参考对应文档。
* @method Models\UpdateLiveWatermarkResponse UpdateLiveWatermark(Models\UpdateLiveWatermarkRequest $req) 更新水印
 */

class LiveClient extends AbstractClient
{
    /**
     * @var string 产品默认域名
     */
    protected $endpoint = "live.tencentcloudapi.com";

    /**
     * @var string api版本号
     */
    protected $version = "2018-08-01";

    /**
     * CvmClient constructor.
     * @param Credential $credential 认证类实例
     * @param string $region 地域
     * @param ClientProfile $profile client配置
     */
    function __construct($credential, $region, $profile=null)
    {
        parent::__construct($this->endpoint, $this->version, $credential, $region, $profile);
    }

    public function returnResponse($action, $response)
    {
        $respClass = "TencentCloud"."\\".ucfirst("live")."\\"."V20180801\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
