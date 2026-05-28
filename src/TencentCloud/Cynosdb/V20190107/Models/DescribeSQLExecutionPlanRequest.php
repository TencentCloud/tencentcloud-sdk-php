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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSQLExecutionPlan请求参数结构体
 *
 * @method string getClusterId() 获取<p>集群ID</p>
 * @method void setClusterId(string $ClusterId) 设置<p>集群ID</p>
 * @method string getInstanceId() 获取<p>实例ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例ID</p>
 * @method string getTemplateID() 获取<p>SQL模板ID</p>
 * @method void setTemplateID(string $TemplateID) 设置<p>SQL模板ID</p>
 * @method integer getPlanDetailId() 获取<p>计划详情序列号</p>
 * @method void setPlanDetailId(integer $PlanDetailId) 设置<p>计划详情序列号</p>
 */
class DescribeSQLExecutionPlanRequest extends AbstractModel
{
    /**
     * @var string <p>集群ID</p>
     */
    public $ClusterId;

    /**
     * @var string <p>实例ID</p>
     */
    public $InstanceId;

    /**
     * @var string <p>SQL模板ID</p>
     */
    public $TemplateID;

    /**
     * @var integer <p>计划详情序列号</p>
     */
    public $PlanDetailId;

    /**
     * @param string $ClusterId <p>集群ID</p>
     * @param string $InstanceId <p>实例ID</p>
     * @param string $TemplateID <p>SQL模板ID</p>
     * @param integer $PlanDetailId <p>计划详情序列号</p>
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("TemplateID",$param) and $param["TemplateID"] !== null) {
            $this->TemplateID = $param["TemplateID"];
        }

        if (array_key_exists("PlanDetailId",$param) and $param["PlanDetailId"] !== null) {
            $this->PlanDetailId = $param["PlanDetailId"];
        }
    }
}
