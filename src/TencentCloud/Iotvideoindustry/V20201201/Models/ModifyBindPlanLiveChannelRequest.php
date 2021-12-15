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
 * ModifyBindPlanLiveChannel请求参数结构体
 *
 * @method string getPlanId() 获取直播录制计划ID
 * @method void setPlanId(string $PlanId) 设置直播录制计划ID
 * @method integer getType() 获取1: 绑定 2: 解绑
 * @method void setType(integer $Type) 设置1: 绑定 2: 解绑
 * @method array getLiveChannelIds() 获取直播频道ID列表
 * @method void setLiveChannelIds(array $LiveChannelIds) 设置直播频道ID列表
 */
class ModifyBindPlanLiveChannelRequest extends AbstractModel
{
    /**
     * @var string 直播录制计划ID
     */
    public $PlanId;

    /**
     * @var integer 1: 绑定 2: 解绑
     */
    public $Type;

    /**
     * @var array 直播频道ID列表
     */
    public $LiveChannelIds;

    /**
     * @param string $PlanId 直播录制计划ID
     * @param integer $Type 1: 绑定 2: 解绑
     * @param array $LiveChannelIds 直播频道ID列表
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
        if (array_key_exists("PlanId",$param) and $param["PlanId"] !== null) {
            $this->PlanId = $param["PlanId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("LiveChannelIds",$param) and $param["LiveChannelIds"] !== null) {
            $this->LiveChannelIds = $param["LiveChannelIds"];
        }
    }
}
