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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 流程详情
 *
 * @method integer getFlowId() 获取<p>流程ID（数据库主键）</p>
 * @method void setFlowId(integer $FlowId) 设置<p>流程ID（数据库主键）</p>
 * @method string getWorkFlowId() 获取<p>Temporal Workflow ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkFlowId(string $WorkFlowId) 设置<p>Temporal Workflow ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkFlowCode() 获取<p>流程编码</p>
 * @method void setWorkFlowCode(string $WorkFlowCode) 设置<p>流程编码</p>
 * @method integer getProgress() 获取<p>流程进度，0~100</p>
 * @method void setProgress(integer $Progress) 设置<p>流程进度，0~100</p>
 * @method integer getStatus() 获取<p>流程状态</p>
 * @method void setStatus(integer $Status) 设置<p>流程状态</p>
 * @method string getCreateTime() 获取<p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getActivities() 获取<p>流程活动列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setActivities(array $Activities) 设置<p>流程活动列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class FlowDetail extends AbstractModel
{
    /**
     * @var integer <p>流程ID（数据库主键）</p>
     */
    public $FlowId;

    /**
     * @var string <p>Temporal Workflow ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkFlowId;

    /**
     * @var string <p>流程编码</p>
     */
    public $WorkFlowCode;

    /**
     * @var integer <p>流程进度，0~100</p>
     */
    public $Progress;

    /**
     * @var integer <p>流程状态</p>
     */
    public $Status;

    /**
     * @var string <p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var array <p>流程活动列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Activities;

    /**
     * @param integer $FlowId <p>流程ID（数据库主键）</p>
     * @param string $WorkFlowId <p>Temporal Workflow ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkFlowCode <p>流程编码</p>
     * @param integer $Progress <p>流程进度，0~100</p>
     * @param integer $Status <p>流程状态</p>
     * @param string $CreateTime <p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Activities <p>流程活动列表</p>
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

        if (array_key_exists("WorkFlowId",$param) and $param["WorkFlowId"] !== null) {
            $this->WorkFlowId = $param["WorkFlowId"];
        }

        if (array_key_exists("WorkFlowCode",$param) and $param["WorkFlowCode"] !== null) {
            $this->WorkFlowCode = $param["WorkFlowCode"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Activities",$param) and $param["Activities"] !== null) {
            $this->Activities = [];
            foreach ($param["Activities"] as $key => $value){
                $obj = new FlowActivityDetail();
                $obj->deserialize($value);
                array_push($this->Activities, $obj);
            }
        }
    }
}
