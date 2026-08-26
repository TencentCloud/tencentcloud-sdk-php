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
 * @method string getPolicyId() 获取<p>备份策略ID</p>
 * @method void setPolicyId(string $PolicyId) 设置<p>备份策略ID</p>
 * @method string getBackupStorageId() 获取<p>备份库ID</p>
 * @method void setBackupStorageId(string $BackupStorageId) 设置<p>备份库ID</p>
 * @method string getPlanName() 获取<p>计划名称</p>
 * @method void setPlanName(string $PlanName) 设置<p>计划名称</p>
 * @method array getResources() 获取<p>实例配置列表，[1,20]</p>
 * @method void setResources(array $Resources) 设置<p>实例配置列表，[1,20]</p>
 * @method string getResourceType() 获取<p>资源类型</p><p>枚举值：</p><ul><li>CVM_AGENT： CVM文件备份</li><li>CFS_AGENT： 文件系统备份</li><li>COS_AGENT： COS备份</li></ul><p>默认值：CVM_AGENT</p>
 * @method void setResourceType(string $ResourceType) 设置<p>资源类型</p><p>枚举值：</p><ul><li>CVM_AGENT： CVM文件备份</li><li>CFS_AGENT： 文件系统备份</li><li>COS_AGENT： COS备份</li></ul><p>默认值：CVM_AGENT</p>
 */
class CreateFileBackupPlanRequest extends AbstractModel
{
    /**
     * @var string <p>备份策略ID</p>
     */
    public $PolicyId;

    /**
     * @var string <p>备份库ID</p>
     */
    public $BackupStorageId;

    /**
     * @var string <p>计划名称</p>
     */
    public $PlanName;

    /**
     * @var array <p>实例配置列表，[1,20]</p>
     */
    public $Resources;

    /**
     * @var string <p>资源类型</p><p>枚举值：</p><ul><li>CVM_AGENT： CVM文件备份</li><li>CFS_AGENT： 文件系统备份</li><li>COS_AGENT： COS备份</li></ul><p>默认值：CVM_AGENT</p>
     */
    public $ResourceType;

    /**
     * @param string $PolicyId <p>备份策略ID</p>
     * @param string $BackupStorageId <p>备份库ID</p>
     * @param string $PlanName <p>计划名称</p>
     * @param array $Resources <p>实例配置列表，[1,20]</p>
     * @param string $ResourceType <p>资源类型</p><p>枚举值：</p><ul><li>CVM_AGENT： CVM文件备份</li><li>CFS_AGENT： 文件系统备份</li><li>COS_AGENT： COS备份</li></ul><p>默认值：CVM_AGENT</p>
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

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }
    }
}
