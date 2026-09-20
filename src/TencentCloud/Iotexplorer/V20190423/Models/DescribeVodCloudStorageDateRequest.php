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
 * DescribeVodCloudStorageDate请求参数结构体
 *
 * @method string getProductId() 获取<p>产品id</p>
 * @method void setProductId(string $ProductId) 设置<p>产品id</p>
 * @method string getDeviceName() 获取<p>设备名</p>
 * @method void setDeviceName(string $DeviceName) 设置<p>设备名</p>
 * @method string getChannelId() 获取<p>通道id</p>
 * @method void setChannelId(string $ChannelId) 设置<p>通道id</p>
 * @method string getUserId() 获取<p>用户id</p>
 * @method void setUserId(string $UserId) 设置<p>用户id</p>
 * @method string getTimeZone() 获取<p>时区</p>
 * @method void setTimeZone(string $TimeZone) 设置<p>时区</p>
 */
class DescribeVodCloudStorageDateRequest extends AbstractModel
{
    /**
     * @var string <p>产品id</p>
     */
    public $ProductId;

    /**
     * @var string <p>设备名</p>
     */
    public $DeviceName;

    /**
     * @var string <p>通道id</p>
     */
    public $ChannelId;

    /**
     * @var string <p>用户id</p>
     */
    public $UserId;

    /**
     * @var string <p>时区</p>
     */
    public $TimeZone;

    /**
     * @param string $ProductId <p>产品id</p>
     * @param string $DeviceName <p>设备名</p>
     * @param string $ChannelId <p>通道id</p>
     * @param string $UserId <p>用户id</p>
     * @param string $TimeZone <p>时区</p>
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

        if (array_key_exists("ChannelId",$param) and $param["ChannelId"] !== null) {
            $this->ChannelId = $param["ChannelId"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("TimeZone",$param) and $param["TimeZone"] !== null) {
            $this->TimeZone = $param["TimeZone"];
        }
    }
}
