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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTWeSeeSubscription请求参数结构体
 *
 * @method string getProductId() 获取<p>产品 ID</p>
 * @method void setProductId(string $ProductId) 设置<p>产品 ID</p>
 * @method string getDeviceName() 获取<p>设备名称</p>
 * @method void setDeviceName(string $DeviceName) 设置<p>设备名称</p>
 * @method string getServiceType() 获取<p>算法类型。可选值：</p><ul><li><code>VID_COMP</code>：视频理解</li></ul>
 * @method void setServiceType(string $ServiceType) 设置<p>算法类型。可选值：</p><ul><li><code>VID_COMP</code>：视频理解</li></ul>
 * @method integer getChannelId() 获取<p>通道 ID</p>
 * @method void setChannelId(integer $ChannelId) 设置<p>通道 ID</p>
 */
class DescribeTWeSeeSubscriptionRequest extends AbstractModel
{
    /**
     * @var string <p>产品 ID</p>
     */
    public $ProductId;

    /**
     * @var string <p>设备名称</p>
     */
    public $DeviceName;

    /**
     * @var string <p>算法类型。可选值：</p><ul><li><code>VID_COMP</code>：视频理解</li></ul>
     */
    public $ServiceType;

    /**
     * @var integer <p>通道 ID</p>
     */
    public $ChannelId;

    /**
     * @param string $ProductId <p>产品 ID</p>
     * @param string $DeviceName <p>设备名称</p>
     * @param string $ServiceType <p>算法类型。可选值：</p><ul><li><code>VID_COMP</code>：视频理解</li></ul>
     * @param integer $ChannelId <p>通道 ID</p>
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("DeviceName",$param) and $param["DeviceName"] !== null) {
            $this->DeviceName = $param["DeviceName"];
        }

        if (array_key_exists("ServiceType",$param) and $param["ServiceType"] !== null) {
            $this->ServiceType = $param["ServiceType"];
        }

        if (array_key_exists("ChannelId",$param) and $param["ChannelId"] !== null) {
            $this->ChannelId = $param["ChannelId"];
        }
    }
}
