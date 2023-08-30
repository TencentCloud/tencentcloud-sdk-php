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

namespace TencentCloud\Ms\V20180408;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Ms\V20180408\Models as Models;

/**
 * @method Models\CancelEncryptTaskResponse CancelEncryptTask(Models\CancelEncryptTaskRequest $req) 该接口供渠道合作应用加固使用，接口调用有白名单用户限制，取消渠道合作加固中的任务。
 * @method Models\CreateBindInstanceResponse CreateBindInstance(Models\CreateBindInstanceRequest $req) 将应用和资源进行绑定。（注意：根据国家互联网用户实名制相关要求，使用该产品前，需先完成实名认证。）
 * @method Models\CreateCosSecKeyInstanceResponse CreateCosSecKeyInstance(Models\CreateCosSecKeyInstanceRequest $req) 获取云COS文件存储临时密钥，密钥仅限于临时上传文件，有访问限制和时效性，请保管好临时密钥。
 * @method Models\CreateEncryptInstanceResponse CreateEncryptInstance(Models\CreateEncryptInstanceRequest $req) 该接口供渠道合作应用加固使用，接口调用有白名单用户限制，用于创建加固任务。
 * @method Models\CreateOrderInstanceResponse CreateOrderInstance(Models\CreateOrderInstanceRequest $req) 该接口供渠道合作应用加固使用，接口调用有白名单用户限制。
订单类型有：免费试用、按年收费、按次收费。
应用加固支持的平台类型有：android加固 、ios源码混淆 、sdk加固、applet小程序加固
 * @method Models\CreateResourceInstancesResponse CreateResourceInstances(Models\CreateResourceInstancesRequest $req) 用户可以使用该接口自建资源，只支持白名单用户
 * @method Models\CreateShieldInstanceResponse CreateShieldInstance(Models\CreateShieldInstanceRequest $req) 用户通过该接口提交应用进行应用加固，加固后需通过DescribeShieldResult接口查询加固结果。（注意：根据国家互联网用户实名制相关要求，使用该产品前，需先完成实名认证。）
 * @method Models\CreateShieldPlanInstanceResponse CreateShieldPlanInstance(Models\CreateShieldPlanInstanceRequest $req) 对资源进行策略新增。（注意：根据国家互联网用户实名制相关要求，使用该产品前，需先完成实名认证。）
 * @method Models\DeleteShieldInstancesResponse DeleteShieldInstances(Models\DeleteShieldInstancesRequest $req) 删除一个或者多个app加固信息。（注意：根据国家互联网用户实名制相关要求，使用该产品前，需先完成实名认证。）
 * @method Models\DescribeApkDetectionResultResponse DescribeApkDetectionResult(Models\DescribeApkDetectionResultRequest $req) 该接口采用同步模式请求腾讯APK云检测服务，即时返回检测数据，需要用户用轮询的方式调用本接口来进行样本送检并获取检测结果(每隔60s发送一次请求，传相同的参数，重试30次)，一般情况下0.5h内会出检测结果，最长时间是3h。当Result为ok并且ResultList数组非空有值时，代表检测完毕，若长时间获取不到检测结果，请联系客服。
 * @method Models\DescribeEncryptInstancesResponse DescribeEncryptInstances(Models\DescribeEncryptInstancesRequest $req) 该接口供渠道合作应用加固使用，接口调用有白名单用户限制，用于查询加固任务，入参中的条件过滤字段均为精准匹配。支持功能点：1. 多任务分页查询  2.根据任务Id唯一值查询单记录
 * @method Models\DescribeEncryptPlanResponse DescribeEncryptPlan(Models\DescribeEncryptPlanRequest $req) 该接口供渠道合作应用加固使用，接口调用有白名单用户限制。入参中的条件过滤字段均为精准匹配。
 * @method Models\DescribeOrderInstancesResponse DescribeOrderInstances(Models\DescribeOrderInstancesRequest $req) 该接口供渠道合作应用加固使用，接口调用有白名单用户限制。 接口返回的结果为：创建订单后，订单审批状态信息，以及与订单关联的资源状态等信息，入参中的条件过滤字段均为精准匹配。
接口功能点：
1.支持多订单分页查询；
2.支持唯一订单号精准匹配查询；
3.支持唯一资源号精准匹配查询；
 * @method Models\DescribeResourceInstancesResponse DescribeResourceInstances(Models\DescribeResourceInstancesRequest $req) 获取某个用户的所有资源信息。（注意：根据国家互联网用户实名制相关要求，使用该产品前，需先完成实名认证。）
 * @method Models\DescribeShieldInstancesResponse DescribeShieldInstances(Models\DescribeShieldInstancesRequest $req) 本接口用于查看app列表。
可以通过指定任务唯一标识ItemId来查询指定app的详细信息，或通过设定过滤器来查询满足过滤条件的app的详细信息。 指定偏移(Offset)和限制(Limit)来选择结果中的一部分，默认返回满足条件的前20个app信息。（注意：根据国家互联网用户实名制相关要求，使用该产品前，需先完成实名认证。）

 * @method Models\DescribeShieldPlanInstanceResponse DescribeShieldPlanInstance(Models\DescribeShieldPlanInstanceRequest $req) 查询加固策略。（注意：根据国家互联网用户实名制相关要求，使用该产品前，需先完成实名认证。）
 * @method Models\DescribeShieldResultResponse DescribeShieldResult(Models\DescribeShieldResultRequest $req) 通过唯一标识获取加固的结果。（注意：根据国家互联网用户实名制相关要求，使用该产品前，需先完成实名认证。）
 * @method Models\DescribeUrlDetectionResultResponse DescribeUrlDetectionResult(Models\DescribeUrlDetectionResultRequest $req) 移动安全-网址检测服务
 * @method Models\DescribeUserBaseInfoInstanceResponse DescribeUserBaseInfoInstance(Models\DescribeUserBaseInfoInstanceRequest $req) 获取用户基础信息
 * @method Models\RequestLocalTaskResponse RequestLocalTask(Models\RequestLocalTaskRequest $req) client任务请求
 * @method Models\UpdateClientStateResponse UpdateClientState(Models\UpdateClientStateRequest $req) 更新client状态，需要白名单
 * @method Models\UpdateLocalTaskResultResponse UpdateLocalTaskResult(Models\UpdateLocalTaskResultRequest $req) 更新本地任务执行结果
 */

class MsClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "ms.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "ms";

    /**
     * @var string
     */
    protected $version = "2018-04-08";

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
        $respClass = "TencentCloud"."\\".ucfirst("ms")."\\"."V20180408\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
