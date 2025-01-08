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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeClusterFlowStatusDetail返回参数结构体
 *
 * @method array getStageDetails() 获取任务步骤详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStageDetails(array $StageDetails) 设置任务步骤详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getFlowDesc() 获取任务参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFlowDesc(array $FlowDesc) 设置任务参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFlowName() 获取任务名称
 * @method void setFlowName(string $FlowName) 设置任务名称
 * @method float getFlowTotalProgress() 获取总任务流程进度：
例如：0.8
 * @method void setFlowTotalProgress(float $FlowTotalProgress) 设置总任务流程进度：
例如：0.8
 * @method integer getFlowTotalStatus() 获取定义流程总状态：
0:初始化，
1:运行中，
2:完成，
3:完成（存在跳过步骤），
-1:失败，
-3:阻塞，
 * @method void setFlowTotalStatus(integer $FlowTotalStatus) 设置定义流程总状态：
0:初始化，
1:运行中，
2:完成，
3:完成（存在跳过步骤），
-1:失败，
-3:阻塞，
 * @method array getFlowExtraDetail() 获取流程额外信息
NeedExtraDetail为true时返回
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFlowExtraDetail(array $FlowExtraDetail) 设置流程额外信息
NeedExtraDetail为true时返回
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeClusterFlowStatusDetailResponse extends AbstractModel
{
    /**
     * @var array 任务步骤详情
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StageDetails;

    /**
     * @var array 任务参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FlowDesc;

    /**
     * @var string 任务名称
     */
    public $FlowName;

    /**
     * @var float 总任务流程进度：
例如：0.8
     */
    public $FlowTotalProgress;

    /**
     * @var integer 定义流程总状态：
0:初始化，
1:运行中，
2:完成，
3:完成（存在跳过步骤），
-1:失败，
-3:阻塞，
     */
    public $FlowTotalStatus;

    /**
     * @var array 流程额外信息
NeedExtraDetail为true时返回
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FlowExtraDetail;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $StageDetails 任务步骤详情
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $FlowDesc 任务参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FlowName 任务名称
     * @param float $FlowTotalProgress 总任务流程进度：
例如：0.8
     * @param integer $FlowTotalStatus 定义流程总状态：
0:初始化，
1:运行中，
2:完成，
3:完成（存在跳过步骤），
-1:失败，
-3:阻塞，
     * @param array $FlowExtraDetail 流程额外信息
NeedExtraDetail为true时返回
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("StageDetails",$param) and $param["StageDetails"] !== null) {
            $this->StageDetails = [];
            foreach ($param["StageDetails"] as $key => $value){
                $obj = new StageInfoDetail();
                $obj->deserialize($value);
                array_push($this->StageDetails, $obj);
            }
        }

        if (array_key_exists("FlowDesc",$param) and $param["FlowDesc"] !== null) {
            $this->FlowDesc = [];
            foreach ($param["FlowDesc"] as $key => $value){
                $obj = new FlowParamsDesc();
                $obj->deserialize($value);
                array_push($this->FlowDesc, $obj);
            }
        }

        if (array_key_exists("FlowName",$param) and $param["FlowName"] !== null) {
            $this->FlowName = $param["FlowName"];
        }

        if (array_key_exists("FlowTotalProgress",$param) and $param["FlowTotalProgress"] !== null) {
            $this->FlowTotalProgress = $param["FlowTotalProgress"];
        }

        if (array_key_exists("FlowTotalStatus",$param) and $param["FlowTotalStatus"] !== null) {
            $this->FlowTotalStatus = $param["FlowTotalStatus"];
        }

        if (array_key_exists("FlowExtraDetail",$param) and $param["FlowExtraDetail"] !== null) {
            $this->FlowExtraDetail = [];
            foreach ($param["FlowExtraDetail"] as $key => $value){
                $obj = new FlowExtraDetail();
                $obj->deserialize($value);
                array_push($this->FlowExtraDetail, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
