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
 * DescribeTWeSeeDirectUploadInfo请求参数结构体
 *
 * @method string getProductId() 获取<p>产品 ID</p>
 * @method void setProductId(string $ProductId) 设置<p>产品 ID</p>
 * @method string getDeviceName() 获取<p>设备名称</p>
 * @method void setDeviceName(string $DeviceName) 设置<p>设备名称</p>
 * @method string getServiceType() 获取<p>服务类型。</p><p>枚举值：</p><ul><li>VID_COMP： 视频理解</li><li>IMG_COMP： 图片理解</li></ul>
 * @method void setServiceType(string $ServiceType) 设置<p>服务类型。</p><p>枚举值：</p><ul><li>VID_COMP： 视频理解</li><li>IMG_COMP： 图片理解</li></ul>
 * @method string getUploadMethod() 获取<p>上传方式。</p><p>枚举值：</p><ul><li>single： 单文件上传</li><li>manifest： 上传源文件与 Manifest（先上传多个源文件，然后上传 Manifest JSON 触发分析）</li></ul><p>默认值：single</p>
 * @method void setUploadMethod(string $UploadMethod) 设置<p>上传方式。</p><p>枚举值：</p><ul><li>single： 单文件上传</li><li>manifest： 上传源文件与 Manifest（先上传多个源文件，然后上传 Manifest JSON 触发分析）</li></ul><p>默认值：single</p>
 * @method string getUploadTarget() 获取<p>上传目标，固定取值为 <code>stream</code>，不填时默认为 <code>stream</code></p><p>枚举值：</p><ul><li>stream： 上传到指定设备（加载对应设备的 ComprehensionConfig 等配置）</li></ul><p>默认值：stream</p>
 * @method void setUploadTarget(string $UploadTarget) 设置<p>上传目标，固定取值为 <code>stream</code>，不填时默认为 <code>stream</code></p><p>枚举值：</p><ul><li>stream： 上传到指定设备（加载对应设备的 ComprehensionConfig 等配置）</li></ul><p>默认值：stream</p>
 * @method integer getChannelId() 获取<p>通道 ID，非 NVR 设备不填，NVR 设备必填</p>
 * @method void setChannelId(integer $ChannelId) 设置<p>通道 ID，非 NVR 设备不填，NVR 设备必填</p>
 */
class DescribeTWeSeeDirectUploadInfoRequest extends AbstractModel
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
     * @var string <p>服务类型。</p><p>枚举值：</p><ul><li>VID_COMP： 视频理解</li><li>IMG_COMP： 图片理解</li></ul>
     */
    public $ServiceType;

    /**
     * @var string <p>上传方式。</p><p>枚举值：</p><ul><li>single： 单文件上传</li><li>manifest： 上传源文件与 Manifest（先上传多个源文件，然后上传 Manifest JSON 触发分析）</li></ul><p>默认值：single</p>
     */
    public $UploadMethod;

    /**
     * @var string <p>上传目标，固定取值为 <code>stream</code>，不填时默认为 <code>stream</code></p><p>枚举值：</p><ul><li>stream： 上传到指定设备（加载对应设备的 ComprehensionConfig 等配置）</li></ul><p>默认值：stream</p>
     */
    public $UploadTarget;

    /**
     * @var integer <p>通道 ID，非 NVR 设备不填，NVR 设备必填</p>
     */
    public $ChannelId;

    /**
     * @param string $ProductId <p>产品 ID</p>
     * @param string $DeviceName <p>设备名称</p>
     * @param string $ServiceType <p>服务类型。</p><p>枚举值：</p><ul><li>VID_COMP： 视频理解</li><li>IMG_COMP： 图片理解</li></ul>
     * @param string $UploadMethod <p>上传方式。</p><p>枚举值：</p><ul><li>single： 单文件上传</li><li>manifest： 上传源文件与 Manifest（先上传多个源文件，然后上传 Manifest JSON 触发分析）</li></ul><p>默认值：single</p>
     * @param string $UploadTarget <p>上传目标，固定取值为 <code>stream</code>，不填时默认为 <code>stream</code></p><p>枚举值：</p><ul><li>stream： 上传到指定设备（加载对应设备的 ComprehensionConfig 等配置）</li></ul><p>默认值：stream</p>
     * @param integer $ChannelId <p>通道 ID，非 NVR 设备不填，NVR 设备必填</p>
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

        if (array_key_exists("UploadMethod",$param) and $param["UploadMethod"] !== null) {
            $this->UploadMethod = $param["UploadMethod"];
        }

        if (array_key_exists("UploadTarget",$param) and $param["UploadTarget"] !== null) {
            $this->UploadTarget = $param["UploadTarget"];
        }

        if (array_key_exists("ChannelId",$param) and $param["ChannelId"] !== null) {
            $this->ChannelId = $param["ChannelId"];
        }
    }
}
