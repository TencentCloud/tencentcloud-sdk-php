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
 * ImportTWeSeeFaces请求参数结构体
 *
 * @method string getProductId() 获取产品 ID
 * @method void setProductId(string $ProductId) 设置产品 ID
 * @method string getDeviceName() 获取设备名称
 * @method void setDeviceName(string $DeviceName) 设置设备名称
 * @method string getImageURL() 获取图片 URL，支持 HTTP(S) URL 或 JPG、PNG、BMP 格式的 data URL，图片大小不超过 5 MiB
 * @method void setImageURL(string $ImageURL) 设置图片 URL，支持 HTTP(S) URL 或 JPG、PNG、BMP 格式的 data URL，图片大小不超过 5 MiB
 * @method integer getChannelId() 获取通道 ID，默认值为 0
 * @method void setChannelId(integer $ChannelId) 设置通道 ID，默认值为 0
 */
class ImportTWeSeeFacesRequest extends AbstractModel
{
    /**
     * @var string 产品 ID
     */
    public $ProductId;

    /**
     * @var string 设备名称
     */
    public $DeviceName;

    /**
     * @var string 图片 URL，支持 HTTP(S) URL 或 JPG、PNG、BMP 格式的 data URL，图片大小不超过 5 MiB
     */
    public $ImageURL;

    /**
     * @var integer 通道 ID，默认值为 0
     */
    public $ChannelId;

    /**
     * @param string $ProductId 产品 ID
     * @param string $DeviceName 设备名称
     * @param string $ImageURL 图片 URL，支持 HTTP(S) URL 或 JPG、PNG、BMP 格式的 data URL，图片大小不超过 5 MiB
     * @param integer $ChannelId 通道 ID，默认值为 0
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

        if (array_key_exists("ImageURL",$param) and $param["ImageURL"] !== null) {
            $this->ImageURL = $param["ImageURL"];
        }

        if (array_key_exists("ChannelId",$param) and $param["ChannelId"] !== null) {
            $this->ChannelId = $param["ChannelId"];
        }
    }
}
