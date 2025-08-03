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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeContractReviewTask返回参数结构体
 *
 * @method string getChecklistId() 获取用于审查任务的审查清单ID。
 * @method void setChecklistId(string $ChecklistId) 设置用于审查任务的审查清单ID。
 * @method integer getCreatedOn() 获取合同审查任务创建时间。
 * @method void setCreatedOn(integer $CreatedOn) 设置合同审查任务创建时间。
 * @method integer getFinishedOn() 获取合同审查任务完成时间。
 * @method void setFinishedOn(integer $FinishedOn) 设置合同审查任务完成时间。
 * @method integer getPolicyType() 获取合同审查的审查立场方。

审查立场方如下：
<ul>
    <li>**0** - 【严格】以保护己方利益为核心，对合同条款进行严格把控，尽可能争取对己方有利的条款，同时对对方提出的不合理条款可进行坚决修改或删除。</li> 
    <li>**1** - 【中立】以公平合理为原则，平衡双方的权利义务，既不过分强调己方利益，也不过度让步，力求达成双方均可接受的条款。</li>   
    <li>**2** - 【宽松】以促成交易为核心，对合同条款的修改要求较为宽松，倾向于接受对方提出的条款，以尽快达成合作。</li>  
</ul>
 * @method void setPolicyType(integer $PolicyType) 设置合同审查的审查立场方。

审查立场方如下：
<ul>
    <li>**0** - 【严格】以保护己方利益为核心，对合同条款进行严格把控，尽可能争取对己方有利的条款，同时对对方提出的不合理条款可进行坚决修改或删除。</li> 
    <li>**1** - 【中立】以公平合理为原则，平衡双方的权利义务，既不过分强调己方利益，也不过度让步，力求达成双方均可接受的条款。</li>   
    <li>**2** - 【宽松】以促成交易为核心，对合同条款的修改要求较为宽松，倾向于接受对方提出的条款，以尽快达成合作。</li>  
</ul>
 * @method string getResourceId() 获取合同审查的PDF文件资源ID。
 * @method void setResourceId(string $ResourceId) 设置合同审查的PDF文件资源ID。
 * @method array getRisks() 获取合同审查识别出的PDF文件风险信息，如果是空数组表示无风险。

注意：`审查结果由AI生成，仅供参考。请结合相关法律法规和公司制度要求综合判断。`
 * @method void setRisks(array $Risks) 设置合同审查识别出的PDF文件风险信息，如果是空数组表示无风险。

注意：`审查结果由AI生成，仅供参考。请结合相关法律法规和公司制度要求综合判断。`
 * @method RiskIdentificationRoleInfo getRole() 获取合同审查中的角色信息。
 * @method void setRole(RiskIdentificationRoleInfo $Role) 设置合同审查中的角色信息。
 * @method integer getStatus() 获取合同审查任务状态。
状态如下：
<ul>
    <li>**1** - 合同审查任务创建成功</li>   
    <li>**2** - 合同审查任务排队中</li>  
    <li>**3** - 合同审查任务执行中</li>   
    <li>**4** - 合同审查任务执行成功</li>
    <li>**5** - 合同审查任务执行失败</li>
</ul>
 * @method void setStatus(integer $Status) 设置合同审查任务状态。
状态如下：
<ul>
    <li>**1** - 合同审查任务创建成功</li>   
    <li>**2** - 合同审查任务排队中</li>  
    <li>**3** - 合同审查任务执行中</li>   
    <li>**4** - 合同审查任务执行成功</li>
    <li>**5** - 合同审查任务执行失败</li>
</ul>
 * @method string getTaskId() 获取合同审查任务ID
 * @method void setTaskId(string $TaskId) 设置合同审查任务ID
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeContractReviewTaskResponse extends AbstractModel
{
    /**
     * @var string 用于审查任务的审查清单ID。
     */
    public $ChecklistId;

    /**
     * @var integer 合同审查任务创建时间。
     */
    public $CreatedOn;

    /**
     * @var integer 合同审查任务完成时间。
     */
    public $FinishedOn;

    /**
     * @var integer 合同审查的审查立场方。

审查立场方如下：
<ul>
    <li>**0** - 【严格】以保护己方利益为核心，对合同条款进行严格把控，尽可能争取对己方有利的条款，同时对对方提出的不合理条款可进行坚决修改或删除。</li> 
    <li>**1** - 【中立】以公平合理为原则，平衡双方的权利义务，既不过分强调己方利益，也不过度让步，力求达成双方均可接受的条款。</li>   
    <li>**2** - 【宽松】以促成交易为核心，对合同条款的修改要求较为宽松，倾向于接受对方提出的条款，以尽快达成合作。</li>  
</ul>
     */
    public $PolicyType;

    /**
     * @var string 合同审查的PDF文件资源ID。
     */
    public $ResourceId;

    /**
     * @var array 合同审查识别出的PDF文件风险信息，如果是空数组表示无风险。

注意：`审查结果由AI生成，仅供参考。请结合相关法律法规和公司制度要求综合判断。`
     */
    public $Risks;

    /**
     * @var RiskIdentificationRoleInfo 合同审查中的角色信息。
     */
    public $Role;

    /**
     * @var integer 合同审查任务状态。
状态如下：
<ul>
    <li>**1** - 合同审查任务创建成功</li>   
    <li>**2** - 合同审查任务排队中</li>  
    <li>**3** - 合同审查任务执行中</li>   
    <li>**4** - 合同审查任务执行成功</li>
    <li>**5** - 合同审查任务执行失败</li>
</ul>
     */
    public $Status;

    /**
     * @var string 合同审查任务ID
     */
    public $TaskId;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $ChecklistId 用于审查任务的审查清单ID。
     * @param integer $CreatedOn 合同审查任务创建时间。
     * @param integer $FinishedOn 合同审查任务完成时间。
     * @param integer $PolicyType 合同审查的审查立场方。

审查立场方如下：
<ul>
    <li>**0** - 【严格】以保护己方利益为核心，对合同条款进行严格把控，尽可能争取对己方有利的条款，同时对对方提出的不合理条款可进行坚决修改或删除。</li> 
    <li>**1** - 【中立】以公平合理为原则，平衡双方的权利义务，既不过分强调己方利益，也不过度让步，力求达成双方均可接受的条款。</li>   
    <li>**2** - 【宽松】以促成交易为核心，对合同条款的修改要求较为宽松，倾向于接受对方提出的条款，以尽快达成合作。</li>  
</ul>
     * @param string $ResourceId 合同审查的PDF文件资源ID。
     * @param array $Risks 合同审查识别出的PDF文件风险信息，如果是空数组表示无风险。

注意：`审查结果由AI生成，仅供参考。请结合相关法律法规和公司制度要求综合判断。`
     * @param RiskIdentificationRoleInfo $Role 合同审查中的角色信息。
     * @param integer $Status 合同审查任务状态。
状态如下：
<ul>
    <li>**1** - 合同审查任务创建成功</li>   
    <li>**2** - 合同审查任务排队中</li>  
    <li>**3** - 合同审查任务执行中</li>   
    <li>**4** - 合同审查任务执行成功</li>
    <li>**5** - 合同审查任务执行失败</li>
</ul>
     * @param string $TaskId 合同审查任务ID
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
        if (array_key_exists("ChecklistId",$param) and $param["ChecklistId"] !== null) {
            $this->ChecklistId = $param["ChecklistId"];
        }

        if (array_key_exists("CreatedOn",$param) and $param["CreatedOn"] !== null) {
            $this->CreatedOn = $param["CreatedOn"];
        }

        if (array_key_exists("FinishedOn",$param) and $param["FinishedOn"] !== null) {
            $this->FinishedOn = $param["FinishedOn"];
        }

        if (array_key_exists("PolicyType",$param) and $param["PolicyType"] !== null) {
            $this->PolicyType = $param["PolicyType"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("Risks",$param) and $param["Risks"] !== null) {
            $this->Risks = [];
            foreach ($param["Risks"] as $key => $value){
                $obj = new OutputRisk();
                $obj->deserialize($value);
                array_push($this->Risks, $obj);
            }
        }

        if (array_key_exists("Role",$param) and $param["Role"] !== null) {
            $this->Role = new RiskIdentificationRoleInfo();
            $this->Role->deserialize($param["Role"]);
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
