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
 * 流程信息摘要
 *
 * @method string getFlowId() 获取流程的编号
 * @method void setFlowId(string $FlowId) 设置流程的编号
 * @method string getFlowName() 获取流程的名称
 * @method void setFlowName(string $FlowName) 设置流程的名称
 * @method string getFlowDescription() 获取流程的描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFlowDescription(string $FlowDescription) 设置流程的描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFlowType() 获取流程的类型
 * @method void setFlowType(string $FlowType) 设置流程的类型
 * @method integer getFlowStatus() 获取流程状态
- `0`  还没有发起
- `1`  未签署
- `2`  部分签署
- `3`  已退回
- `4`  完成签署
- `5`  已过期
- `6`  已取消
- `7`  还没有预发起
- `8`  等待填写
- `9`  部分填写
- `10`  拒填
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFlowStatus(integer $FlowStatus) 设置流程状态
- `0`  还没有发起
- `1`  未签署
- `2`  部分签署
- `3`  已退回
- `4`  完成签署
- `5`  已过期
- `6`  已取消
- `7`  还没有预发起
- `8`  等待填写
- `9`  部分填写
- `10`  拒填
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCreatedOn() 获取流程创建的时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatedOn(integer $CreatedOn) 设置流程创建的时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFlowMessage() 获取拒签或者取消的原因描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFlowMessage(string $FlowMessage) 设置拒签或者取消的原因描述
注意：此字段可能返回 null，表示取不到有效值。
 */
class FlowBrief extends AbstractModel
{
    /**
     * @var string 流程的编号
     */
    public $FlowId;

    /**
     * @var string 流程的名称
     */
    public $FlowName;

    /**
     * @var string 流程的描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FlowDescription;

    /**
     * @var string 流程的类型
     */
    public $FlowType;

    /**
     * @var integer 流程状态
- `0`  还没有发起
- `1`  未签署
- `2`  部分签署
- `3`  已退回
- `4`  完成签署
- `5`  已过期
- `6`  已取消
- `7`  还没有预发起
- `8`  等待填写
- `9`  部分填写
- `10`  拒填
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FlowStatus;

    /**
     * @var integer 流程创建的时间戳
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatedOn;

    /**
     * @var string 拒签或者取消的原因描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FlowMessage;

    /**
     * @param string $FlowId 流程的编号
     * @param string $FlowName 流程的名称
     * @param string $FlowDescription 流程的描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FlowType 流程的类型
     * @param integer $FlowStatus 流程状态
- `0`  还没有发起
- `1`  未签署
- `2`  部分签署
- `3`  已退回
- `4`  完成签署
- `5`  已过期
- `6`  已取消
- `7`  还没有预发起
- `8`  等待填写
- `9`  部分填写
- `10`  拒填
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CreatedOn 流程创建的时间戳
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FlowMessage 拒签或者取消的原因描述
注意：此字段可能返回 null，表示取不到有效值。
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

        if (array_key_exists("FlowDescription",$param) and $param["FlowDescription"] !== null) {
            $this->FlowDescription = $param["FlowDescription"];
        }

        if (array_key_exists("FlowType",$param) and $param["FlowType"] !== null) {
            $this->FlowType = $param["FlowType"];
        }

        if (array_key_exists("FlowStatus",$param) and $param["FlowStatus"] !== null) {
            $this->FlowStatus = $param["FlowStatus"];
        }

        if (array_key_exists("CreatedOn",$param) and $param["CreatedOn"] !== null) {
            $this->CreatedOn = $param["CreatedOn"];
        }

        if (array_key_exists("FlowMessage",$param) and $param["FlowMessage"] !== null) {
            $this->FlowMessage = $param["FlowMessage"];
        }
    }
}
