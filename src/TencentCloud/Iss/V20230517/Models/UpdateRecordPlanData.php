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
 * 修改实时上云录像计划的数据
 *
 * @method string getPlanName() 获取上云计划名称，仅支持中文、英文、数字、_、-，长度不超过32个字符，计划名称全局唯一，不能为空，不能重复，不修改名称时，不需要该字段
 * @method void setPlanName(string $PlanName) 设置上云计划名称，仅支持中文、英文、数字、_、-，长度不超过32个字符，计划名称全局唯一，不能为空，不能重复，不修改名称时，不需要该字段
 * @method string getTemplateId() 获取上云模板ID，不修改模板ID时，不需要该字段
 * @method void setTemplateId(string $TemplateId) 设置上云模板ID，不修改模板ID时，不需要该字段
 * @method string getDescribe() 获取上云计划描述，仅支持中文、英文、数字、_、-，长度不超过128个字符， 不修改描述时，不需要该字段
 * @method void setDescribe(string $Describe) 设置上云计划描述，仅支持中文、英文、数字、_、-，长度不超过128个字符， 不修改描述时，不需要该字段
 * @method string getStreamType() 获取码流类型，default:不指定码流类型，以设备默认推送类型为主， main:主码流，sub:子码流，其他根据设备能力集自定义，长度不能超过32个字节
 * @method void setStreamType(string $StreamType) 设置码流类型，default:不指定码流类型，以设备默认推送类型为主， main:主码流，sub:子码流，其他根据设备能力集自定义，长度不能超过32个字节
 * @method LifeCycleData getLifeCycle() 获取生命周期，文件生命周期设置，管理文件冷、热存储的时间，不修改生命周期时，不需要该字段
 * @method void setLifeCycle(LifeCycleData $LifeCycle) 设置生命周期，文件生命周期设置，管理文件冷、热存储的时间，不修改生命周期时，不需要该字段
 * @method array getAdd() 获取要新增的设备通道,Json数组，没有新增时，不需要该字段，一次添加通道总数不超过5000个，包括组织目录下的通道数量
 * @method void setAdd(array $Add) 设置要新增的设备通道,Json数组，没有新增时，不需要该字段，一次添加通道总数不超过5000个，包括组织目录下的通道数量
 * @method array getDel() 获取要删除的设备通道，Json数组，内容为要删除的设备通道id，没有删除设备通道时，不需要该字段
 * @method void setDel(array $Del) 设置要删除的设备通道，Json数组，内容为要删除的设备通道id，没有删除设备通道时，不需要该字段
 * @method array getOrganizationId() 获取组织目录ID，添加组织目录下所有设备通道，Json数组，可以为空，并且通道总数量不超过5000个（包括Add字段通道数量）
 * @method void setOrganizationId(array $OrganizationId) 设置组织目录ID，添加组织目录下所有设备通道，Json数组，可以为空，并且通道总数量不超过5000个（包括Add字段通道数量）
 */
class UpdateRecordPlanData extends AbstractModel
{
    /**
     * @var string 上云计划名称，仅支持中文、英文、数字、_、-，长度不超过32个字符，计划名称全局唯一，不能为空，不能重复，不修改名称时，不需要该字段
     */
    public $PlanName;

    /**
     * @var string 上云模板ID，不修改模板ID时，不需要该字段
     */
    public $TemplateId;

    /**
     * @var string 上云计划描述，仅支持中文、英文、数字、_、-，长度不超过128个字符， 不修改描述时，不需要该字段
     */
    public $Describe;

    /**
     * @var string 码流类型，default:不指定码流类型，以设备默认推送类型为主， main:主码流，sub:子码流，其他根据设备能力集自定义，长度不能超过32个字节
     */
    public $StreamType;

    /**
     * @var LifeCycleData 生命周期，文件生命周期设置，管理文件冷、热存储的时间，不修改生命周期时，不需要该字段
     */
    public $LifeCycle;

    /**
     * @var array 要新增的设备通道,Json数组，没有新增时，不需要该字段，一次添加通道总数不超过5000个，包括组织目录下的通道数量
     */
    public $Add;

    /**
     * @var array 要删除的设备通道，Json数组，内容为要删除的设备通道id，没有删除设备通道时，不需要该字段
     */
    public $Del;

    /**
     * @var array 组织目录ID，添加组织目录下所有设备通道，Json数组，可以为空，并且通道总数量不超过5000个（包括Add字段通道数量）
     */
    public $OrganizationId;

    /**
     * @param string $PlanName 上云计划名称，仅支持中文、英文、数字、_、-，长度不超过32个字符，计划名称全局唯一，不能为空，不能重复，不修改名称时，不需要该字段
     * @param string $TemplateId 上云模板ID，不修改模板ID时，不需要该字段
     * @param string $Describe 上云计划描述，仅支持中文、英文、数字、_、-，长度不超过128个字符， 不修改描述时，不需要该字段
     * @param string $StreamType 码流类型，default:不指定码流类型，以设备默认推送类型为主， main:主码流，sub:子码流，其他根据设备能力集自定义，长度不能超过32个字节
     * @param LifeCycleData $LifeCycle 生命周期，文件生命周期设置，管理文件冷、热存储的时间，不修改生命周期时，不需要该字段
     * @param array $Add 要新增的设备通道,Json数组，没有新增时，不需要该字段，一次添加通道总数不超过5000个，包括组织目录下的通道数量
     * @param array $Del 要删除的设备通道，Json数组，内容为要删除的设备通道id，没有删除设备通道时，不需要该字段
     * @param array $OrganizationId 组织目录ID，添加组织目录下所有设备通道，Json数组，可以为空，并且通道总数量不超过5000个（包括Add字段通道数量）
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

        if (array_key_exists("Describe",$param) and $param["Describe"] !== null) {
            $this->Describe = $param["Describe"];
        }

        if (array_key_exists("StreamType",$param) and $param["StreamType"] !== null) {
            $this->StreamType = $param["StreamType"];
        }

        if (array_key_exists("LifeCycle",$param) and $param["LifeCycle"] !== null) {
            $this->LifeCycle = new LifeCycleData();
            $this->LifeCycle->deserialize($param["LifeCycle"]);
        }

        if (array_key_exists("Add",$param) and $param["Add"] !== null) {
            $this->Add = [];
            foreach ($param["Add"] as $key => $value){
                $obj = new ChannelInfo();
                $obj->deserialize($value);
                array_push($this->Add, $obj);
            }
        }

        if (array_key_exists("Del",$param) and $param["Del"] !== null) {
            $this->Del = $param["Del"];
        }

        if (array_key_exists("OrganizationId",$param) and $param["OrganizationId"] !== null) {
            $this->OrganizationId = $param["OrganizationId"];
        }
    }
}
