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
namespace TencentCloud\Bpaas\V20181217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetBpaasApproveDetail返回参数结构体
 *
 * @method integer getApplyUin() 获取申请人uin
 * @method void setApplyUin(integer $ApplyUin) 设置申请人uin
 * @method integer getApplyOwnUin() 获取申请人主账号
 * @method void setApplyOwnUin(integer $ApplyOwnUin) 设置申请人主账号
 * @method string getApplyUinNick() 获取申请人昵称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApplyUinNick(string $ApplyUinNick) 设置申请人昵称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getBpaasId() 获取审批流id
 * @method void setBpaasId(integer $BpaasId) 设置审批流id
 * @method string getBpaasName() 获取审批流名称
 * @method void setBpaasName(string $BpaasName) 设置审批流名称
 * @method array getApplicationParams() 获取申请参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApplicationParams(array $ApplicationParams) 设置申请参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getReason() 获取申请原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReason(string $Reason) 设置申请原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取申请时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置申请时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取申请单状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置申请单状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getNodes() 获取节点信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNodes(array $Nodes) 设置节点信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getApprovingNodeId() 获取正在审批的节点id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApprovingNodeId(string $ApprovingNodeId) 设置正在审批的节点id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class GetBpaasApproveDetailResponse extends AbstractModel
{
    /**
     * @var integer 申请人uin
     */
    public $ApplyUin;

    /**
     * @var integer 申请人主账号
     */
    public $ApplyOwnUin;

    /**
     * @var string 申请人昵称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApplyUinNick;

    /**
     * @var integer 审批流id
     */
    public $BpaasId;

    /**
     * @var string 审批流名称
     */
    public $BpaasName;

    /**
     * @var array 申请参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApplicationParams;

    /**
     * @var string 申请原因
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Reason;

    /**
     * @var string 申请时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var integer 申请单状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var array 节点信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Nodes;

    /**
     * @var string 正在审批的节点id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApprovingNodeId;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $ApplyUin 申请人uin
     * @param integer $ApplyOwnUin 申请人主账号
     * @param string $ApplyUinNick 申请人昵称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $BpaasId 审批流id
     * @param string $BpaasName 审批流名称
     * @param array $ApplicationParams 申请参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Reason 申请原因
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 申请时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 申请单状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Nodes 节点信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ApprovingNodeId 正在审批的节点id
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
        if (array_key_exists("ApplyUin",$param) and $param["ApplyUin"] !== null) {
            $this->ApplyUin = $param["ApplyUin"];
        }

        if (array_key_exists("ApplyOwnUin",$param) and $param["ApplyOwnUin"] !== null) {
            $this->ApplyOwnUin = $param["ApplyOwnUin"];
        }

        if (array_key_exists("ApplyUinNick",$param) and $param["ApplyUinNick"] !== null) {
            $this->ApplyUinNick = $param["ApplyUinNick"];
        }

        if (array_key_exists("BpaasId",$param) and $param["BpaasId"] !== null) {
            $this->BpaasId = $param["BpaasId"];
        }

        if (array_key_exists("BpaasName",$param) and $param["BpaasName"] !== null) {
            $this->BpaasName = $param["BpaasName"];
        }

        if (array_key_exists("ApplicationParams",$param) and $param["ApplicationParams"] !== null) {
            $this->ApplicationParams = [];
            foreach ($param["ApplicationParams"] as $key => $value){
                $obj = new ApplyParam();
                $obj->deserialize($value);
                array_push($this->ApplicationParams, $obj);
            }
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Nodes",$param) and $param["Nodes"] !== null) {
            $this->Nodes = [];
            foreach ($param["Nodes"] as $key => $value){
                $obj = new StatusNode();
                $obj->deserialize($value);
                array_push($this->Nodes, $obj);
            }
        }

        if (array_key_exists("ApprovingNodeId",$param) and $param["ApprovingNodeId"] !== null) {
            $this->ApprovingNodeId = $param["ApprovingNodeId"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
