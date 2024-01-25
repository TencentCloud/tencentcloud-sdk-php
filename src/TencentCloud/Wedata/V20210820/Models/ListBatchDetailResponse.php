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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListBatchDetail返回参数结构体
 *
 * @method integer getJobId() 获取批量操作ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setJobId(integer $JobId) 设置批量操作ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRunType() 获取运行类型：
ASYNC-异步
SYNC-同步
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRunType(string $RunType) 设置运行类型：
ASYNC-异步
SYNC-同步
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSuccessResource() 获取成功列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSuccessResource(array $SuccessResource) 设置成功列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getFailResource() 获取失败列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFailResource(array $FailResource) 设置失败列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getJobType() 获取job类型
BATCH_DELETE --批量删除：1、任务名称：ResourceName
BATCH_CREATE_VERSION --批量提交：1、任务名称：ResourceId 2、资源组：GroupId
BATCH_MODIFY_DATASOURCE --批量修改数据源：1、任务名称：ResourceName
BATCH_MODIFY_INCHARGE --批量修改责任人：1、任务名称：ResourceName
BATCH_MODIFY_PARAMETER --批量修改参数：1、任务名称：ResourceName
BATCH_MODIFY_SCHEDULE --批量修改调度计划：1、任务名称：ResourceName
BATCH_MODIFY_GROUPID --批量修改资源组：1、任务名称：ResourceName
BATCH_MODIFY_CONFIG --批量修改高级配置：1、任务名称：ResourceName
BATCH_MODIFY_SCHEDULE_PARAMETER --批量修改调度参数：1、任务名称：ResourceName
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setJobType(string $JobType) 设置job类型
BATCH_DELETE --批量删除：1、任务名称：ResourceName
BATCH_CREATE_VERSION --批量提交：1、任务名称：ResourceId 2、资源组：GroupId
BATCH_MODIFY_DATASOURCE --批量修改数据源：1、任务名称：ResourceName
BATCH_MODIFY_INCHARGE --批量修改责任人：1、任务名称：ResourceName
BATCH_MODIFY_PARAMETER --批量修改参数：1、任务名称：ResourceName
BATCH_MODIFY_SCHEDULE --批量修改调度计划：1、任务名称：ResourceName
BATCH_MODIFY_GROUPID --批量修改资源组：1、任务名称：ResourceName
BATCH_MODIFY_CONFIG --批量修改高级配置：1、任务名称：ResourceName
BATCH_MODIFY_SCHEDULE_PARAMETER --批量修改调度参数：1、任务名称：ResourceName
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getJobStatus() 获取job状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setJobStatus(string $JobStatus) 设置job状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalResource() 获取资源总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalResource(integer $TotalResource) 设置资源总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getNeedApprove() 获取批量提交是是否需要审批，其他的批量操作默认为null
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNeedApprove(boolean $NeedApprove) 设置批量提交是是否需要审批，其他的批量操作默认为null
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class ListBatchDetailResponse extends AbstractModel
{
    /**
     * @var integer 批量操作ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $JobId;

    /**
     * @var string 运行类型：
ASYNC-异步
SYNC-同步
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RunType;

    /**
     * @var array 成功列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SuccessResource;

    /**
     * @var array 失败列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FailResource;

    /**
     * @var string job类型
BATCH_DELETE --批量删除：1、任务名称：ResourceName
BATCH_CREATE_VERSION --批量提交：1、任务名称：ResourceId 2、资源组：GroupId
BATCH_MODIFY_DATASOURCE --批量修改数据源：1、任务名称：ResourceName
BATCH_MODIFY_INCHARGE --批量修改责任人：1、任务名称：ResourceName
BATCH_MODIFY_PARAMETER --批量修改参数：1、任务名称：ResourceName
BATCH_MODIFY_SCHEDULE --批量修改调度计划：1、任务名称：ResourceName
BATCH_MODIFY_GROUPID --批量修改资源组：1、任务名称：ResourceName
BATCH_MODIFY_CONFIG --批量修改高级配置：1、任务名称：ResourceName
BATCH_MODIFY_SCHEDULE_PARAMETER --批量修改调度参数：1、任务名称：ResourceName
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $JobType;

    /**
     * @var string job状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $JobStatus;

    /**
     * @var integer 资源总数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalResource;

    /**
     * @var boolean 批量提交是是否需要审批，其他的批量操作默认为null
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NeedApprove;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $JobId 批量操作ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RunType 运行类型：
ASYNC-异步
SYNC-同步
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SuccessResource 成功列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $FailResource 失败列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $JobType job类型
BATCH_DELETE --批量删除：1、任务名称：ResourceName
BATCH_CREATE_VERSION --批量提交：1、任务名称：ResourceId 2、资源组：GroupId
BATCH_MODIFY_DATASOURCE --批量修改数据源：1、任务名称：ResourceName
BATCH_MODIFY_INCHARGE --批量修改责任人：1、任务名称：ResourceName
BATCH_MODIFY_PARAMETER --批量修改参数：1、任务名称：ResourceName
BATCH_MODIFY_SCHEDULE --批量修改调度计划：1、任务名称：ResourceName
BATCH_MODIFY_GROUPID --批量修改资源组：1、任务名称：ResourceName
BATCH_MODIFY_CONFIG --批量修改高级配置：1、任务名称：ResourceName
BATCH_MODIFY_SCHEDULE_PARAMETER --批量修改调度参数：1、任务名称：ResourceName
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $JobStatus job状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalResource 资源总数
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $NeedApprove 批量提交是是否需要审批，其他的批量操作默认为null
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("RunType",$param) and $param["RunType"] !== null) {
            $this->RunType = $param["RunType"];
        }

        if (array_key_exists("SuccessResource",$param) and $param["SuccessResource"] !== null) {
            $this->SuccessResource = [];
            foreach ($param["SuccessResource"] as $key => $value){
                $obj = new AsyncResourceVO();
                $obj->deserialize($value);
                array_push($this->SuccessResource, $obj);
            }
        }

        if (array_key_exists("FailResource",$param) and $param["FailResource"] !== null) {
            $this->FailResource = [];
            foreach ($param["FailResource"] as $key => $value){
                $obj = new AsyncResourceVO();
                $obj->deserialize($value);
                array_push($this->FailResource, $obj);
            }
        }

        if (array_key_exists("JobType",$param) and $param["JobType"] !== null) {
            $this->JobType = $param["JobType"];
        }

        if (array_key_exists("JobStatus",$param) and $param["JobStatus"] !== null) {
            $this->JobStatus = $param["JobStatus"];
        }

        if (array_key_exists("TotalResource",$param) and $param["TotalResource"] !== null) {
            $this->TotalResource = $param["TotalResource"];
        }

        if (array_key_exists("NeedApprove",$param) and $param["NeedApprove"] !== null) {
            $this->NeedApprove = $param["NeedApprove"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
