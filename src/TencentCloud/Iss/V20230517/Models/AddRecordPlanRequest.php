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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AddRecordPlan请求参数结构体
 *
 * @method string getPlanName() 获取实时上云计划名称，仅支持中文、英文、数字、_、-，长度不超过32个字符，计划名称全局唯一，不能为空，不能重复
 * @method void setPlanName(string $PlanName) 设置实时上云计划名称，仅支持中文、英文、数字、_、-，长度不超过32个字符，计划名称全局唯一，不能为空，不能重复
 * @method string getTemplateId() 获取实时上云模板ID
 * @method void setTemplateId(string $TemplateId) 设置实时上云模板ID
 * @method LifeCycleData getLifeCycle() 获取生命周期
 * @method void setLifeCycle(LifeCycleData $LifeCycle) 设置生命周期
 * @method string getDescribe() 获取上云计划描述，仅支持中文、英文、数字、_、-，长度不超过128个字符 
 * @method void setDescribe(string $Describe) 设置上云计划描述，仅支持中文、英文、数字、_、-，长度不超过128个字符 
 * @method string getStreamType() 获取码流类型，default:不指定码流类型，以设备默认推送类型为主， main:主码流，sub:子码流，其他根据设备能力集自定义，不填按默认类型处理，长度不能超过32个字节
 * @method void setStreamType(string $StreamType) 设置码流类型，default:不指定码流类型，以设备默认推送类型为主， main:主码流，sub:子码流，其他根据设备能力集自定义，不填按默认类型处理，长度不能超过32个字节
 * @method array getChannels() 获取添加录像的设备的通道信息，一次添加通道总数不超过5000个，包括组织目录下的通道数量
 * @method void setChannels(array $Channels) 设置添加录像的设备的通道信息，一次添加通道总数不超过5000个，包括组织目录下的通道数量
 * @method array getOrganizationId() 获取添加组织目录下所有设备通道，Json数组，可以为空，通道总数量不超过5000个（包括Channel字段的数量）
 * @method void setOrganizationId(array $OrganizationId) 设置添加组织目录下所有设备通道，Json数组，可以为空，通道总数量不超过5000个（包括Channel字段的数量）
 */
class AddRecordPlanRequest extends AbstractModel
{
    /**
     * @var string 实时上云计划名称，仅支持中文、英文、数字、_、-，长度不超过32个字符，计划名称全局唯一，不能为空，不能重复
     */
    public $PlanName;

    /**
     * @var string 实时上云模板ID
     */
    public $TemplateId;

    /**
     * @var LifeCycleData 生命周期
     */
    public $LifeCycle;

    /**
     * @var string 上云计划描述，仅支持中文、英文、数字、_、-，长度不超过128个字符 
     */
    public $Describe;

    /**
     * @var string 码流类型，default:不指定码流类型，以设备默认推送类型为主， main:主码流，sub:子码流，其他根据设备能力集自定义，不填按默认类型处理，长度不能超过32个字节
     */
    public $StreamType;

    /**
     * @var array 添加录像的设备的通道信息，一次添加通道总数不超过5000个，包括组织目录下的通道数量
     */
    public $Channels;

    /**
     * @var array 添加组织目录下所有设备通道，Json数组，可以为空，通道总数量不超过5000个（包括Channel字段的数量）
     */
    public $OrganizationId;

    /**
     * @param string $PlanName 实时上云计划名称，仅支持中文、英文、数字、_、-，长度不超过32个字符，计划名称全局唯一，不能为空，不能重复
     * @param string $TemplateId 实时上云模板ID
     * @param LifeCycleData $LifeCycle 生命周期
     * @param string $Describe 上云计划描述，仅支持中文、英文、数字、_、-，长度不超过128个字符 
     * @param string $StreamType 码流类型，default:不指定码流类型，以设备默认推送类型为主， main:主码流，sub:子码流，其他根据设备能力集自定义，不填按默认类型处理，长度不能超过32个字节
     * @param array $Channels 添加录像的设备的通道信息，一次添加通道总数不超过5000个，包括组织目录下的通道数量
     * @param array $OrganizationId 添加组织目录下所有设备通道，Json数组，可以为空，通道总数量不超过5000个（包括Channel字段的数量）
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
        if (array_key_exists("PlanName",$param) and $param["PlanName"] !== null) {
            $this->PlanName = $param["PlanName"];
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("LifeCycle",$param) and $param["LifeCycle"] !== null) {
            $this->LifeCycle = new LifeCycleData();
            $this->LifeCycle->deserialize($param["LifeCycle"]);
        }

        if (array_key_exists("Describe",$param) and $param["Describe"] !== null) {
            $this->Describe = $param["Describe"];
        }

        if (array_key_exists("StreamType",$param) and $param["StreamType"] !== null) {
            $this->StreamType = $param["StreamType"];
        }

        if (array_key_exists("Channels",$param) and $param["Channels"] !== null) {
            $this->Channels = [];
            foreach ($param["Channels"] as $key => $value){
                $obj = new ChannelInfo();
                $obj->deserialize($value);
                array_push($this->Channels, $obj);
            }
        }

        if (array_key_exists("OrganizationId",$param) and $param["OrganizationId"] !== null) {
            $this->OrganizationId = $param["OrganizationId"];
        }
    }
}
