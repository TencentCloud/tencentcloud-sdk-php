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
namespace TencentCloud\Iotvideoindustry\V20201201\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeChannels请求参数结构体
 *
 * @method string getDeviceId() 获取设备Id
 * @method void setDeviceId(string $DeviceId) 设置设备Id
 * @method integer getLimit() 获取限制，默认0
 * @method void setLimit(integer $Limit) 设置限制，默认0
 * @method integer getOffset() 获取偏移量，默认0
 * @method void setOffset(integer $Offset) 设置偏移量，默认0
 * @method array getChannelTypes() 获取通道类型  0: 未知类型 1: 视频通道 2:  音频通道 3: 告警通道
 * @method void setChannelTypes(array $ChannelTypes) 设置通道类型  0: 未知类型 1: 视频通道 2:  音频通道 3: 告警通道
 * @method string getPlanId() 获取录制计划ID， 当为"null"值时未绑定录制计划
 * @method void setPlanId(string $PlanId) 设置录制计划ID， 当为"null"值时未绑定录制计划
 * @method integer getSceneId() 获取告警联动场景ID， 当为 -1 值时未绑定场景
 * @method void setSceneId(integer $SceneId) 设置告警联动场景ID， 当为 -1 值时未绑定场景
 */
class DescribeChannelsRequest extends AbstractModel
{
    /**
     * @var string 设备Id
     */
    public $DeviceId;

    /**
     * @var integer 限制，默认0
     */
    public $Limit;

    /**
     * @var integer 偏移量，默认0
     */
    public $Offset;

    /**
     * @var array 通道类型  0: 未知类型 1: 视频通道 2:  音频通道 3: 告警通道
     */
    public $ChannelTypes;

    /**
     * @var string 录制计划ID， 当为"null"值时未绑定录制计划
     */
    public $PlanId;

    /**
     * @var integer 告警联动场景ID， 当为 -1 值时未绑定场景
     */
    public $SceneId;

    /**
     * @param string $DeviceId 设备Id
     * @param integer $Limit 限制，默认0
     * @param integer $Offset 偏移量，默认0
     * @param array $ChannelTypes 通道类型  0: 未知类型 1: 视频通道 2:  音频通道 3: 告警通道
     * @param string $PlanId 录制计划ID， 当为"null"值时未绑定录制计划
     * @param integer $SceneId 告警联动场景ID， 当为 -1 值时未绑定场景
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
        if (array_key_exists("DeviceId",$param) and $param["DeviceId"] !== null) {
            $this->DeviceId = $param["DeviceId"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("ChannelTypes",$param) and $param["ChannelTypes"] !== null) {
            $this->ChannelTypes = $param["ChannelTypes"];
        }

        if (array_key_exists("PlanId",$param) and $param["PlanId"] !== null) {
            $this->PlanId = $param["PlanId"];
        }

        if (array_key_exists("SceneId",$param) and $param["SceneId"] !== null) {
            $this->SceneId = $param["SceneId"];
        }
    }
}
