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
namespace TencentCloud\Eis\V20210601\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListDeployableRuntimesMC请求参数结构体
 *
 * @method integer getProjectId() 获取应用id
 * @method void setProjectId(integer $ProjectId) 设置应用id
 * @method integer getInstanceId() 获取实例id
 * @method void setInstanceId(integer $InstanceId) 设置实例id
 * @method integer getPlanType() 获取版本类型 0-pro 1-lite
 * @method void setPlanType(integer $PlanType) 设置版本类型 0-pro 1-lite
 */
class ListDeployableRuntimesMCRequest extends AbstractModel
{
    /**
     * @var integer 应用id
     */
    public $ProjectId;

    /**
     * @var integer 实例id
     */
    public $InstanceId;

    /**
     * @var integer 版本类型 0-pro 1-lite
     */
    public $PlanType;

    /**
     * @param integer $ProjectId 应用id
     * @param integer $InstanceId 实例id
     * @param integer $PlanType 版本类型 0-pro 1-lite
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("PlanType",$param) and $param["PlanType"] !== null) {
            $this->PlanType = $param["PlanType"];
        }
    }
}
