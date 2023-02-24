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

namespace TencentCloud\Mna\V20210119;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Mna\V20210119\Models as Models;

/**
 * @method Models\AddDeviceResponse AddDevice(Models\AddDeviceRequest $req) 新建设备记录
 * @method Models\CreateEncryptedKeyResponse CreateEncryptedKey(Models\CreateEncryptedKeyRequest $req) 通过此接口设置和更新预置密钥
 * @method Models\CreateQosResponse CreateQos(Models\CreateQosRequest $req) 移动网络发起Qos加速过程
 * @method Models\DeleteDeviceResponse DeleteDevice(Models\DeleteDeviceRequest $req) 删除设备信息
 * @method Models\DeleteQosResponse DeleteQos(Models\DeleteQosRequest $req) 移动网络停止Qos加速过程
 * @method Models\DescribeQosResponse DescribeQos(Models\DescribeQosRequest $req) 获取Qos加速状态
 * @method Models\GetDeviceResponse GetDevice(Models\GetDeviceRequest $req) 通过指定设备的ID查找设备详细信息
 * @method Models\GetDevicesResponse GetDevices(Models\GetDevicesRequest $req) 获取设备信息列表
 * @method Models\GetFlowStatisticResponse GetFlowStatistic(Models\GetFlowStatisticRequest $req) 获取指定设备Id，指定时间点数据流量使用情况
 * @method Models\GetMultiFlowStatisticResponse GetMultiFlowStatistic(Models\GetMultiFlowStatisticRequest $req) 批量获取设备流量统计曲线
 * @method Models\GetPublicKeyResponse GetPublicKey(Models\GetPublicKeyRequest $req) 获取公钥用于验签
 * @method Models\GetStatisticDataResponse GetStatisticData(Models\GetStatisticDataRequest $req) 在用量统计页面下载流量数据
 * @method Models\UpdateDeviceResponse UpdateDevice(Models\UpdateDeviceRequest $req) 更新设备信息
 */

class MnaClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "mna.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "mna";

    /**
     * @var string
     */
    protected $version = "2021-01-19";

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
        $respClass = "TencentCloud"."\\".ucfirst("mna")."\\"."V20210119\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
