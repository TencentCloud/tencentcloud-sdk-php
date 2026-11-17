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
 * 视频截图信息
 *
 * @method string getImageId() 获取<p>图片Id</p>
 * @method void setImageId(string $ImageId) 设置<p>图片Id</p>
 * @method string getConfigId() 获取<p>截图配置Id</p>
 * @method void setConfigId(string $ConfigId) 设置<p>截图配置Id</p>
 * @method string getConfigName() 获取<p>截图配置名称</p>
 * @method void setConfigName(string $ConfigName) 设置<p>截图配置名称</p>
 * @method string getChannelId() 获取<p>通道Id</p>
 * @method void setChannelId(string $ChannelId) 设置<p>通道Id</p>
 * @method string getChannelName() 获取<p>通道名称</p>
 * @method void setChannelName(string $ChannelName) 设置<p>通道名称</p>
 * @method integer getType() 获取<p>截图类型</p><p>枚举值：</p><ul><li>1： 实时截帧</li><li>2： 低频截帧</li></ul>
 * @method void setType(integer $Type) 设置<p>截图类型</p><p>枚举值：</p><ul><li>1： 实时截帧</li><li>2： 低频截帧</li></ul>
 * @method string getImageUrl() 获取<p>图片Url</p>
 * @method void setImageUrl(string $ImageUrl) 设置<p>图片Url</p>
 * @method integer getImageUrlExpires() 获取<p>图片Url有效期</p>
 * @method void setImageUrlExpires(integer $ImageUrlExpires) 设置<p>图片Url有效期</p>
 * @method integer getTimestamp() 获取<p>截图时间点</p>
 * @method void setTimestamp(integer $Timestamp) 设置<p>截图时间点</p>
 * @method integer getFileSize() 获取<p>图片大小</p><p>单位：字节</p>
 * @method void setFileSize(integer $FileSize) 设置<p>图片大小</p><p>单位：字节</p>
 */
class VideoSnapshotInfo extends AbstractModel
{
    /**
     * @var string <p>图片Id</p>
     */
    public $ImageId;

    /**
     * @var string <p>截图配置Id</p>
     */
    public $ConfigId;

    /**
     * @var string <p>截图配置名称</p>
     */
    public $ConfigName;

    /**
     * @var string <p>通道Id</p>
     */
    public $ChannelId;

    /**
     * @var string <p>通道名称</p>
     */
    public $ChannelName;

    /**
     * @var integer <p>截图类型</p><p>枚举值：</p><ul><li>1： 实时截帧</li><li>2： 低频截帧</li></ul>
     */
    public $Type;

    /**
     * @var string <p>图片Url</p>
     */
    public $ImageUrl;

    /**
     * @var integer <p>图片Url有效期</p>
     */
    public $ImageUrlExpires;

    /**
     * @var integer <p>截图时间点</p>
     */
    public $Timestamp;

    /**
     * @var integer <p>图片大小</p><p>单位：字节</p>
     */
    public $FileSize;

    /**
     * @param string $ImageId <p>图片Id</p>
     * @param string $ConfigId <p>截图配置Id</p>
     * @param string $ConfigName <p>截图配置名称</p>
     * @param string $ChannelId <p>通道Id</p>
     * @param string $ChannelName <p>通道名称</p>
     * @param integer $Type <p>截图类型</p><p>枚举值：</p><ul><li>1： 实时截帧</li><li>2： 低频截帧</li></ul>
     * @param string $ImageUrl <p>图片Url</p>
     * @param integer $ImageUrlExpires <p>图片Url有效期</p>
     * @param integer $Timestamp <p>截图时间点</p>
     * @param integer $FileSize <p>图片大小</p><p>单位：字节</p>
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
        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }

        if (array_key_exists("ConfigId",$param) and $param["ConfigId"] !== null) {
            $this->ConfigId = $param["ConfigId"];
        }

        if (array_key_exists("ConfigName",$param) and $param["ConfigName"] !== null) {
            $this->ConfigName = $param["ConfigName"];
        }

        if (array_key_exists("ChannelId",$param) and $param["ChannelId"] !== null) {
            $this->ChannelId = $param["ChannelId"];
        }

        if (array_key_exists("ChannelName",$param) and $param["ChannelName"] !== null) {
            $this->ChannelName = $param["ChannelName"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("ImageUrl",$param) and $param["ImageUrl"] !== null) {
            $this->ImageUrl = $param["ImageUrl"];
        }

        if (array_key_exists("ImageUrlExpires",$param) and $param["ImageUrlExpires"] !== null) {
            $this->ImageUrlExpires = $param["ImageUrlExpires"];
        }

        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            $this->Timestamp = $param["Timestamp"];
        }

        if (array_key_exists("FileSize",$param) and $param["FileSize"] !== null) {
            $this->FileSize = $param["FileSize"];
        }
    }
}
