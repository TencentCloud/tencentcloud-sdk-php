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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 抓拍结果信息
 *
 * @method string getFileName() 获取文件名称
 * @method void setFileName(string $FileName) 设置文件名称
 * @method string getDownloadUrl() 获取下载地址，空值表示存储图片过期
 * @method void setDownloadUrl(string $DownloadUrl) 设置下载地址，空值表示存储图片过期
 * @method integer getImageSize() 获取图片大小，单位B
 * @method void setImageSize(integer $ImageSize) 设置图片大小，单位B
 * @method string getCreatedTime() 获取文件的创建时间
 * @method void setCreatedTime(string $CreatedTime) 设置文件的创建时间
 * @method string getReceivedTime() 获取图片的接收时间
 * @method void setReceivedTime(string $ReceivedTime) 设置图片的接收时间
 * @method string getPreviewUrl() 获取预览地址，空值表示存储图片过期
 * @method void setPreviewUrl(string $PreviewUrl) 设置预览地址，空值表示存储图片过期
 * @method string getSessionId() 获取国标信令会话ID，同时对应控制设备抓拍 ( ControlDeviceSnapshot )接口返回的request_id
 * @method void setSessionId(string $SessionId) 设置国标信令会话ID，同时对应控制设备抓拍 ( ControlDeviceSnapshot )接口返回的request_id
 */
class GBDeviceSnapInfo extends AbstractModel
{
    /**
     * @var string 文件名称
     */
    public $FileName;

    /**
     * @var string 下载地址，空值表示存储图片过期
     */
    public $DownloadUrl;

    /**
     * @var integer 图片大小，单位B
     */
    public $ImageSize;

    /**
     * @var string 文件的创建时间
     */
    public $CreatedTime;

    /**
     * @var string 图片的接收时间
     */
    public $ReceivedTime;

    /**
     * @var string 预览地址，空值表示存储图片过期
     */
    public $PreviewUrl;

    /**
     * @var string 国标信令会话ID，同时对应控制设备抓拍 ( ControlDeviceSnapshot )接口返回的request_id
     */
    public $SessionId;

    /**
     * @param string $FileName 文件名称
     * @param string $DownloadUrl 下载地址，空值表示存储图片过期
     * @param integer $ImageSize 图片大小，单位B
     * @param string $CreatedTime 文件的创建时间
     * @param string $ReceivedTime 图片的接收时间
     * @param string $PreviewUrl 预览地址，空值表示存储图片过期
     * @param string $SessionId 国标信令会话ID，同时对应控制设备抓拍 ( ControlDeviceSnapshot )接口返回的request_id
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
        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("DownloadUrl",$param) and $param["DownloadUrl"] !== null) {
            $this->DownloadUrl = $param["DownloadUrl"];
        }

        if (array_key_exists("ImageSize",$param) and $param["ImageSize"] !== null) {
            $this->ImageSize = $param["ImageSize"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("ReceivedTime",$param) and $param["ReceivedTime"] !== null) {
            $this->ReceivedTime = $param["ReceivedTime"];
        }

        if (array_key_exists("PreviewUrl",$param) and $param["PreviewUrl"] !== null) {
            $this->PreviewUrl = $param["PreviewUrl"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }
    }
}
