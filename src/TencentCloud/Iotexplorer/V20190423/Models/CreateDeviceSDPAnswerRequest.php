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
 * CreateDeviceSDPAnswer请求参数结构体
 *
 * @method string getProductId() 获取<p>产品ID</p>
 * @method void setProductId(string $ProductId) 设置<p>产品ID</p>
 * @method string getDeviceName() 获取<p>设备名称</p>
 * @method void setDeviceName(string $DeviceName) 设置<p>设备名称</p>
 * @method string getSDPOffer() 获取<p>SDP提议</p>
 * @method void setSDPOffer(string $SDPOffer) 设置<p>SDP提议</p>
 * @method string getRequesterTag() 获取<p>客户自定义拉流标识</p>
 * @method void setRequesterTag(string $RequesterTag) 设置<p>客户自定义拉流标识</p>
 * @method integer getEnableSubPub() 获取<p>默认值：0，如果需要webrtc推流拉流在同一个SDP中，需要值为1，常用于单PC模式</p><p>枚举值：</p><ul><li>0： 默认值，传统多pc推流模式</li><li>1： 单pc模式，如果需要webrtc单pc推拉流，采用此模式，此模式下注意SDP需要包含推拉流全部信息</li></ul><p>默认值：0</p>
 * @method void setEnableSubPub(integer $EnableSubPub) 设置<p>默认值：0，如果需要webrtc推流拉流在同一个SDP中，需要值为1，常用于单PC模式</p><p>枚举值：</p><ul><li>0： 默认值，传统多pc推流模式</li><li>1： 单pc模式，如果需要webrtc单pc推拉流，采用此模式，此模式下注意SDP需要包含推拉流全部信息</li></ul><p>默认值：0</p>
 */
class CreateDeviceSDPAnswerRequest extends AbstractModel
{
    /**
     * @var string <p>产品ID</p>
     */
    public $ProductId;

    /**
     * @var string <p>设备名称</p>
     */
    public $DeviceName;

    /**
     * @var string <p>SDP提议</p>
     */
    public $SDPOffer;

    /**
     * @var string <p>客户自定义拉流标识</p>
     */
    public $RequesterTag;

    /**
     * @var integer <p>默认值：0，如果需要webrtc推流拉流在同一个SDP中，需要值为1，常用于单PC模式</p><p>枚举值：</p><ul><li>0： 默认值，传统多pc推流模式</li><li>1： 单pc模式，如果需要webrtc单pc推拉流，采用此模式，此模式下注意SDP需要包含推拉流全部信息</li></ul><p>默认值：0</p>
     */
    public $EnableSubPub;

    /**
     * @param string $ProductId <p>产品ID</p>
     * @param string $DeviceName <p>设备名称</p>
     * @param string $SDPOffer <p>SDP提议</p>
     * @param string $RequesterTag <p>客户自定义拉流标识</p>
     * @param integer $EnableSubPub <p>默认值：0，如果需要webrtc推流拉流在同一个SDP中，需要值为1，常用于单PC模式</p><p>枚举值：</p><ul><li>0： 默认值，传统多pc推流模式</li><li>1： 单pc模式，如果需要webrtc单pc推拉流，采用此模式，此模式下注意SDP需要包含推拉流全部信息</li></ul><p>默认值：0</p>
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

        if (array_key_exists("SDPOffer",$param) and $param["SDPOffer"] !== null) {
            $this->SDPOffer = $param["SDPOffer"];
        }

        if (array_key_exists("RequesterTag",$param) and $param["RequesterTag"] !== null) {
            $this->RequesterTag = $param["RequesterTag"];
        }

        if (array_key_exists("EnableSubPub",$param) and $param["EnableSubPub"] !== null) {
            $this->EnableSubPub = $param["EnableSubPub"];
        }
    }
}
