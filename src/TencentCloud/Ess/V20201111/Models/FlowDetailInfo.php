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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 此结构体(FlowDetailInfo)描述的是合同(流程)的详细信息
 *
 * @method string getFlowId() 获取合同(流程)的Id
 * @method void setFlowId(string $FlowId) 设置合同(流程)的Id
 * @method string getFlowName() 获取合同(流程)的名字
 * @method void setFlowName(string $FlowName) 设置合同(流程)的名字
 * @method string getFlowType() 获取合同(流程)的类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFlowType(string $FlowType) 设置合同(流程)的类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFlowStatus() 获取合同(流程)的状态
1：未签署
2：部分签署
3：已退回
4：完成签署
5：已过期
6：已取消
 * @method void setFlowStatus(integer $FlowStatus) 设置合同(流程)的状态
1：未签署
2：部分签署
3：已退回
4：完成签署
5：已过期
6：已取消
 * @method string getFlowMessage() 获取合同(流程)的信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFlowMessage(string $FlowMessage) 设置合同(流程)的信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFlowDescription() 获取流程的描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFlowDescription(string $FlowDescription) 设置流程的描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCreatedOn() 获取合同(流程)的创建时间戳
 * @method void setCreatedOn(integer $CreatedOn) 设置合同(流程)的创建时间戳
 * @method array getFlowApproverInfos() 获取合同(流程)的签署人数组
 * @method void setFlowApproverInfos(array $FlowApproverInfos) 设置合同(流程)的签署人数组
 */
class FlowDetailInfo extends AbstractModel
{
    /**
     * @var string 合同(流程)的Id
     */
    public $FlowId;

    /**
     * @var string 合同(流程)的名字
     */
    public $FlowName;

    /**
     * @var string 合同(流程)的类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FlowType;

    /**
     * @var integer 合同(流程)的状态
1：未签署
2：部分签署
3：已退回
4：完成签署
5：已过期
6：已取消
     */
    public $FlowStatus;

    /**
     * @var string 合同(流程)的信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FlowMessage;

    /**
     * @var string 流程的描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FlowDescription;

    /**
     * @var integer 合同(流程)的创建时间戳
     */
    public $CreatedOn;

    /**
     * @var array 合同(流程)的签署人数组
     */
    public $FlowApproverInfos;

    /**
     * @param string $FlowId 合同(流程)的Id
     * @param string $FlowName 合同(流程)的名字
     * @param string $FlowType 合同(流程)的类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FlowStatus 合同(流程)的状态
1：未签署
2：部分签署
3：已退回
4：完成签署
5：已过期
6：已取消
     * @param string $FlowMessage 合同(流程)的信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FlowDescription 流程的描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CreatedOn 合同(流程)的创建时间戳
     * @param array $FlowApproverInfos 合同(流程)的签署人数组
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
        if (array_key_exists("FlowId",$param) and $param["FlowId"] !== null) {
            $this->FlowId = $param["FlowId"];
        }

        if (array_key_exists("FlowName",$param) and $param["FlowName"] !== null) {
            $this->FlowName = $param["FlowName"];
        }

        if (array_key_exists("FlowType",$param) and $param["FlowType"] !== null) {
            $this->FlowType = $param["FlowType"];
        }

        if (array_key_exists("FlowStatus",$param) and $param["FlowStatus"] !== null) {
            $this->FlowStatus = $param["FlowStatus"];
        }

        if (array_key_exists("FlowMessage",$param) and $param["FlowMessage"] !== null) {
            $this->FlowMessage = $param["FlowMessage"];
        }

        if (array_key_exists("FlowDescription",$param) and $param["FlowDescription"] !== null) {
            $this->FlowDescription = $param["FlowDescription"];
        }

        if (array_key_exists("CreatedOn",$param) and $param["CreatedOn"] !== null) {
            $this->CreatedOn = $param["CreatedOn"];
        }

        if (array_key_exists("FlowApproverInfos",$param) and $param["FlowApproverInfos"] !== null) {
            $this->FlowApproverInfos = [];
            foreach ($param["FlowApproverInfos"] as $key => $value){
                $obj = new FlowApproverDetail();
                $obj->deserialize($value);
                array_push($this->FlowApproverInfos, $obj);
            }
        }
    }
}
