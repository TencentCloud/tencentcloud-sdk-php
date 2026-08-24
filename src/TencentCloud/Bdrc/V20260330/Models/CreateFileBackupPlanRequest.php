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
namespace TencentCloud\Bdrc\V20260330\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateFileBackupPlan请求参数结构体
 *
 * @method string getPolicyId() 获取备份策略ID
 * @method void setPolicyId(string $PolicyId) 设置备份策略ID
 * @method string getBackupStorageId() 获取备份库ID
 * @method void setBackupStorageId(string $BackupStorageId) 设置备份库ID
 * @method string getPlanName() 获取计划名称
 * @method void setPlanName(string $PlanName) 设置计划名称
 * @method array getResources() 获取实例配置列表，[1,20]
 * @method void setResources(array $Resources) 设置实例配置列表，[1,20]
 */
class CreateFileBackupPlanRequest extends AbstractModel
{
    /**
     * @var string 备份策略ID
     */
    public $PolicyId;

    /**
     * @var string 备份库ID
     */
    public $BackupStorageId;

    /**
     * @var string 计划名称
     */
    public $PlanName;

    /**
     * @var array 实例配置列表，[1,20]
     */
    public $Resources;

    /**
     * @param string $PolicyId 备份策略ID
     * @param string $BackupStorageId 备份库ID
     * @param string $PlanName 计划名称
     * @param array $Resources 实例配置列表，[1,20]
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
        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("BackupStorageId",$param) and $param["BackupStorageId"] !== null) {
            $this->BackupStorageId = $param["BackupStorageId"];
        }

        if (array_key_exists("PlanName",$param) and $param["PlanName"] !== null) {
            $this->PlanName = $param["PlanName"];
        }

        if (array_key_exists("Resources",$param) and $param["Resources"] !== null) {
            $this->Resources = [];
            foreach ($param["Resources"] as $key => $value){
                $obj = new ResourcePlan();
                $obj->deserialize($value);
                array_push($this->Resources, $obj);
            }
        }
    }
}
