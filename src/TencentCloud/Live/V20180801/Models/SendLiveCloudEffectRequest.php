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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SendLiveCloudEffect请求参数结构体
 *
 * @method string getAppName() 获取推流路径，与推流和播放地址中的AppName保持一致，默认为 live。
 * @method void setAppName(string $AppName) 设置推流路径，与推流和播放地址中的AppName保持一致，默认为 live。
 * @method string getPushDomainName() 获取您的推流域名。
 * @method void setPushDomainName(string $PushDomainName) 设置您的推流域名。
 * @method string getStreamName() 获取流名称。
 * @method void setStreamName(string $StreamName) 设置流名称。
 * @method string getId() 获取云端特效 ID。
 * @method void setId(string $Id) 设置云端特效 ID。
 * @method integer getLoopTimes() 获取默认随系统配置，云端特效循环 少于5次。可自定义指定礼物循环次数，不超过100次。
 * @method void setLoopTimes(integer $LoopTimes) 设置默认随系统配置，云端特效循环 少于5次。可自定义指定礼物循环次数，不超过100次。
 * @method string getOperator() 获取操作人备注信息。
 * @method void setOperator(string $Operator) 设置操作人备注信息。
 * @method integer getZoomFactor() 获取缩小比例，默认0 不缩放。
可选值：0-9， 值越大，越缩小。
 * @method void setZoomFactor(integer $ZoomFactor) 设置缩小比例，默认0 不缩放。
可选值：0-9， 值越大，越缩小。
 * @method string getXPosition() 获取指定云端特效渲染位置百分比。默认居中显示。
原点为画面左上角，该参数指定特效渲染离原点的横向比例，可选值 0 - 100。
 * @method void setXPosition(string $XPosition) 设置指定云端特效渲染位置百分比。默认居中显示。
原点为画面左上角，该参数指定特效渲染离原点的横向比例，可选值 0 - 100。
 * @method string getYPosition() 获取指定云端特效渲染位置百分比。默认居中显示。
原点为画面左上角，该参数指定特效渲染离原点的纵向比例，可选值 0 - 100。
 * @method void setYPosition(string $YPosition) 设置指定云端特效渲染位置百分比。默认居中显示。
原点为画面左上角，该参数指定特效渲染离原点的纵向比例，可选值 0 - 100。
 */
class SendLiveCloudEffectRequest extends AbstractModel
{
    /**
     * @var string 推流路径，与推流和播放地址中的AppName保持一致，默认为 live。
     */
    public $AppName;

    /**
     * @var string 您的推流域名。
     */
    public $PushDomainName;

    /**
     * @var string 流名称。
     */
    public $StreamName;

    /**
     * @var string 云端特效 ID。
     */
    public $Id;

    /**
     * @var integer 默认随系统配置，云端特效循环 少于5次。可自定义指定礼物循环次数，不超过100次。
     */
    public $LoopTimes;

    /**
     * @var string 操作人备注信息。
     */
    public $Operator;

    /**
     * @var integer 缩小比例，默认0 不缩放。
可选值：0-9， 值越大，越缩小。
     */
    public $ZoomFactor;

    /**
     * @var string 指定云端特效渲染位置百分比。默认居中显示。
原点为画面左上角，该参数指定特效渲染离原点的横向比例，可选值 0 - 100。
     */
    public $XPosition;

    /**
     * @var string 指定云端特效渲染位置百分比。默认居中显示。
原点为画面左上角，该参数指定特效渲染离原点的纵向比例，可选值 0 - 100。
     */
    public $YPosition;

    /**
     * @param string $AppName 推流路径，与推流和播放地址中的AppName保持一致，默认为 live。
     * @param string $PushDomainName 您的推流域名。
     * @param string $StreamName 流名称。
     * @param string $Id 云端特效 ID。
     * @param integer $LoopTimes 默认随系统配置，云端特效循环 少于5次。可自定义指定礼物循环次数，不超过100次。
     * @param string $Operator 操作人备注信息。
     * @param integer $ZoomFactor 缩小比例，默认0 不缩放。
可选值：0-9， 值越大，越缩小。
     * @param string $XPosition 指定云端特效渲染位置百分比。默认居中显示。
原点为画面左上角，该参数指定特效渲染离原点的横向比例，可选值 0 - 100。
     * @param string $YPosition 指定云端特效渲染位置百分比。默认居中显示。
原点为画面左上角，该参数指定特效渲染离原点的纵向比例，可选值 0 - 100。
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
        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }

        if (array_key_exists("PushDomainName",$param) and $param["PushDomainName"] !== null) {
            $this->PushDomainName = $param["PushDomainName"];
        }

        if (array_key_exists("StreamName",$param) and $param["StreamName"] !== null) {
            $this->StreamName = $param["StreamName"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("LoopTimes",$param) and $param["LoopTimes"] !== null) {
            $this->LoopTimes = $param["LoopTimes"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("ZoomFactor",$param) and $param["ZoomFactor"] !== null) {
            $this->ZoomFactor = $param["ZoomFactor"];
        }

        if (array_key_exists("XPosition",$param) and $param["XPosition"] !== null) {
            $this->XPosition = $param["XPosition"];
        }

        if (array_key_exists("YPosition",$param) and $param["YPosition"] !== null) {
            $this->YPosition = $param["YPosition"];
        }
    }
}
