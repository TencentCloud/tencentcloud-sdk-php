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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 升级任务
 *
 * @method integer getID() 获取任务ID
 * @method void setID(integer $ID) 设置任务ID
 * @method string getName() 获取任务名称
 * @method void setName(string $Name) 设置任务名称
 * @method string getComponent() 获取组件名称
 * @method void setComponent(string $Component) 设置组件名称
 * @method array getRelatedResources() 获取关联资源
 * @method void setRelatedResources(array $RelatedResources) 设置关联资源
 * @method string getUpgradeImpact() 获取升级影响
 * @method void setUpgradeImpact(string $UpgradeImpact) 设置升级影响
 * @method string getPlanedStartAt() 获取预计开始时间
 * @method void setPlanedStartAt(string $PlanedStartAt) 设置预计开始时间
 * @method string getCreatedAt() 获取创建时间
 * @method void setCreatedAt(string $CreatedAt) 设置创建时间
 */
class UpgradeTask extends AbstractModel
{
    /**
     * @var integer 任务ID
     */
    public $ID;

    /**
     * @var string 任务名称
     */
    public $Name;

    /**
     * @var string 组件名称
     */
    public $Component;

    /**
     * @var array 关联资源
     */
    public $RelatedResources;

    /**
     * @var string 升级影响
     */
    public $UpgradeImpact;

    /**
     * @var string 预计开始时间
     */
    public $PlanedStartAt;

    /**
     * @var string 创建时间
     */
    public $CreatedAt;

    /**
     * @param integer $ID 任务ID
     * @param string $Name 任务名称
     * @param string $Component 组件名称
     * @param array $RelatedResources 关联资源
     * @param string $UpgradeImpact 升级影响
     * @param string $PlanedStartAt 预计开始时间
     * @param string $CreatedAt 创建时间
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Component",$param) and $param["Component"] !== null) {
            $this->Component = $param["Component"];
        }

        if (array_key_exists("RelatedResources",$param) and $param["RelatedResources"] !== null) {
            $this->RelatedResources = $param["RelatedResources"];
        }

        if (array_key_exists("UpgradeImpact",$param) and $param["UpgradeImpact"] !== null) {
            $this->UpgradeImpact = $param["UpgradeImpact"];
        }

        if (array_key_exists("PlanedStartAt",$param) and $param["PlanedStartAt"] !== null) {
            $this->PlanedStartAt = $param["PlanedStartAt"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }
    }
}
