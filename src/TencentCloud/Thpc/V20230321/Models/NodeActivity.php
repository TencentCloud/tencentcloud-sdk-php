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
namespace TencentCloud\Thpc\V20230321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 节点活动信息。
 *
 * @method string getNodeInstanceId() 获取节点活动所在的实例ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNodeInstanceId(string $NodeInstanceId) 设置节点活动所在的实例ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNodeActivityStatus() 获取节点活动状态。取值范围：<br><li>RUNNING：运行中<br><li>SUCCESSFUL：活动成功<br><li>FAILED：活动失败
 * @method void setNodeActivityStatus(string $NodeActivityStatus) 设置节点活动状态。取值范围：<br><li>RUNNING：运行中<br><li>SUCCESSFUL：活动成功<br><li>FAILED：活动失败
 * @method string getNodeActivityStatusCode() 获取节点活动状态码。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNodeActivityStatusCode(string $NodeActivityStatusCode) 设置节点活动状态码。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNodeActivityStatusReason() 获取节点活动状态原因。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNodeActivityStatusReason(string $NodeActivityStatusReason) 设置节点活动状态原因。
注意：此字段可能返回 null，表示取不到有效值。
 */
class NodeActivity extends AbstractModel
{
    /**
     * @var string 节点活动所在的实例ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NodeInstanceId;

    /**
     * @var string 节点活动状态。取值范围：<br><li>RUNNING：运行中<br><li>SUCCESSFUL：活动成功<br><li>FAILED：活动失败
     */
    public $NodeActivityStatus;

    /**
     * @var string 节点活动状态码。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NodeActivityStatusCode;

    /**
     * @var string 节点活动状态原因。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NodeActivityStatusReason;

    /**
     * @param string $NodeInstanceId 节点活动所在的实例ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NodeActivityStatus 节点活动状态。取值范围：<br><li>RUNNING：运行中<br><li>SUCCESSFUL：活动成功<br><li>FAILED：活动失败
     * @param string $NodeActivityStatusCode 节点活动状态码。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NodeActivityStatusReason 节点活动状态原因。
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
        if (array_key_exists("NodeInstanceId",$param) and $param["NodeInstanceId"] !== null) {
            $this->NodeInstanceId = $param["NodeInstanceId"];
        }

        if (array_key_exists("NodeActivityStatus",$param) and $param["NodeActivityStatus"] !== null) {
            $this->NodeActivityStatus = $param["NodeActivityStatus"];
        }

        if (array_key_exists("NodeActivityStatusCode",$param) and $param["NodeActivityStatusCode"] !== null) {
            $this->NodeActivityStatusCode = $param["NodeActivityStatusCode"];
        }

        if (array_key_exists("NodeActivityStatusReason",$param) and $param["NodeActivityStatusReason"] !== null) {
            $this->NodeActivityStatusReason = $param["NodeActivityStatusReason"];
        }
    }
}
