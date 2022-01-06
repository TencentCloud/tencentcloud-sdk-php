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
 * ModifyBindRecordingPlan请求参数结构体
 *
 * @method integer getType() 获取操作类型： 1-绑定设备 ；2-解绑设备
 * @method void setType(integer $Type) 设置操作类型： 1-绑定设备 ；2-解绑设备
 * @method string getPlanId() 获取录制计划ID
 * @method void setPlanId(string $PlanId) 设置录制计划ID
 * @method array getChannels() 获取录制通道列表
 * @method void setChannels(array $Channels) 设置录制通道列表
 */
class ModifyBindRecordingPlanRequest extends AbstractModel
{
    /**
     * @var integer 操作类型： 1-绑定设备 ；2-解绑设备
     */
    public $Type;

    /**
     * @var string 录制计划ID
     */
    public $PlanId;

    /**
     * @var array 录制通道列表
     */
    public $Channels;

    /**
     * @param integer $Type 操作类型： 1-绑定设备 ；2-解绑设备
     * @param string $PlanId 录制计划ID
     * @param array $Channels 录制通道列表
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("PlanId",$param) and $param["PlanId"] !== null) {
            $this->PlanId = $param["PlanId"];
        }

        if (array_key_exists("Channels",$param) and $param["Channels"] !== null) {
            $this->Channels = [];
            foreach ($param["Channels"] as $key => $value){
                $obj = new ChannelItem();
                $obj->deserialize($value);
                array_push($this->Channels, $obj);
            }
        }
    }
}
