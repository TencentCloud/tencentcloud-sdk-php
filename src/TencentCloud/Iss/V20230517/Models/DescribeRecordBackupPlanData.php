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
 * 查询录像上云计划返回数据
 *
 * @method string getPlanId() 获取录像上云计划ID
 * @method void setPlanId(string $PlanId) 设置录像上云计划ID
 * @method string getPlanName() 获取录像上云计划名称
 * @method void setPlanName(string $PlanName) 设置录像上云计划名称
 * @method string getTemplateId() 获取录像上云模板ID
 * @method void setTemplateId(string $TemplateId) 设置录像上云模板ID
 * @method string getDescribe() 获取录像上云计划描述
 * @method void setDescribe(string $Describe) 设置录像上云计划描述
 * @method LifeCycleData getLifeCycle() 获取云文件生命周期
 * @method void setLifeCycle(LifeCycleData $LifeCycle) 设置云文件生命周期
 * @method integer getStatus() 获取录像上云计划状态，1:正常使用中，0:删除中，无法使用
 * @method void setStatus(integer $Status) 设置录像上云计划状态，1:正常使用中，0:删除中，无法使用
 * @method integer getChannelCount() 获取通道数量
 * @method void setChannelCount(integer $ChannelCount) 设置通道数量
 * @method string getCreateAt() 获取创建时间
 * @method void setCreateAt(string $CreateAt) 设置创建时间
 * @method string getUpdateAt() 获取修改时间
 * @method void setUpdateAt(string $UpdateAt) 设置修改时间
 */
class DescribeRecordBackupPlanData extends AbstractModel
{
    /**
     * @var string 录像上云计划ID
     */
    public $PlanId;

    /**
     * @var string 录像上云计划名称
     */
    public $PlanName;

    /**
     * @var string 录像上云模板ID
     */
    public $TemplateId;

    /**
     * @var string 录像上云计划描述
     */
    public $Describe;

    /**
     * @var LifeCycleData 云文件生命周期
     */
    public $LifeCycle;

    /**
     * @var integer 录像上云计划状态，1:正常使用中，0:删除中，无法使用
     */
    public $Status;

    /**
     * @var integer 通道数量
     */
    public $ChannelCount;

    /**
     * @var string 创建时间
     */
    public $CreateAt;

    /**
     * @var string 修改时间
     */
    public $UpdateAt;

    /**
     * @param string $PlanId 录像上云计划ID
     * @param string $PlanName 录像上云计划名称
     * @param string $TemplateId 录像上云模板ID
     * @param string $Describe 录像上云计划描述
     * @param LifeCycleData $LifeCycle 云文件生命周期
     * @param integer $Status 录像上云计划状态，1:正常使用中，0:删除中，无法使用
     * @param integer $ChannelCount 通道数量
     * @param string $CreateAt 创建时间
     * @param string $UpdateAt 修改时间
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

        if (array_key_exists("PlanName",$param) and $param["PlanName"] !== null) {
            $this->PlanName = $param["PlanName"];
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("Describe",$param) and $param["Describe"] !== null) {
            $this->Describe = $param["Describe"];
        }

        if (array_key_exists("LifeCycle",$param) and $param["LifeCycle"] !== null) {
            $this->LifeCycle = new LifeCycleData();
            $this->LifeCycle->deserialize($param["LifeCycle"]);
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ChannelCount",$param) and $param["ChannelCount"] !== null) {
            $this->ChannelCount = $param["ChannelCount"];
        }

        if (array_key_exists("CreateAt",$param) and $param["CreateAt"] !== null) {
            $this->CreateAt = $param["CreateAt"];
        }

        if (array_key_exists("UpdateAt",$param) and $param["UpdateAt"] !== null) {
            $this->UpdateAt = $param["UpdateAt"];
        }
    }
}
