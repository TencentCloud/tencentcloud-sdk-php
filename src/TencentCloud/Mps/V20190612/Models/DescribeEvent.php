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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 查询Event的配置信息。
 *
 * @method string getEventName() 获取Event的名称。
 * @method void setEventName(string $EventName) 设置Event的名称。
 * @method string getEventId() 获取Event的Id，唯一标识一个event。
 * @method void setEventId(string $EventId) 设置Event的Id，唯一标识一个event。
 * @method string getCreateTime() 获取Event创建时间，格式为yyyy-MM-ddTHH:mm:ssZ。
 * @method void setCreateTime(string $CreateTime) 设置Event创建时间，格式为yyyy-MM-ddTHH:mm:ssZ。
 * @method string getDescription() 获取Event的描述。
 * @method void setDescription(string $Description) 设置Event的描述。
 * @method integer getStatus() 获取Event的状态信息
0：未运行
1：运行中
 * @method void setStatus(integer $Status) 设置Event的状态信息
0：未运行
1：运行中
 * @method array getAttachedFlowGroup() 获取Event关联的Flow列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAttachedFlowGroup(array $AttachedFlowGroup) 设置Event关联的Flow列表。
注意：此字段可能返回 null，表示取不到有效值。
 */
class DescribeEvent extends AbstractModel
{
    /**
     * @var string Event的名称。
     */
    public $EventName;

    /**
     * @var string Event的Id，唯一标识一个event。
     */
    public $EventId;

    /**
     * @var string Event创建时间，格式为yyyy-MM-ddTHH:mm:ssZ。
     */
    public $CreateTime;

    /**
     * @var string Event的描述。
     */
    public $Description;

    /**
     * @var integer Event的状态信息
0：未运行
1：运行中
     */
    public $Status;

    /**
     * @var array Event关联的Flow列表。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AttachedFlowGroup;

    /**
     * @param string $EventName Event的名称。
     * @param string $EventId Event的Id，唯一标识一个event。
     * @param string $CreateTime Event创建时间，格式为yyyy-MM-ddTHH:mm:ssZ。
     * @param string $Description Event的描述。
     * @param integer $Status Event的状态信息
0：未运行
1：运行中
     * @param array $AttachedFlowGroup Event关联的Flow列表。
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
        if (array_key_exists("EventName",$param) and $param["EventName"] !== null) {
            $this->EventName = $param["EventName"];
        }

        if (array_key_exists("EventId",$param) and $param["EventId"] !== null) {
            $this->EventId = $param["EventId"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("AttachedFlowGroup",$param) and $param["AttachedFlowGroup"] !== null) {
            $this->AttachedFlowGroup = [];
            foreach ($param["AttachedFlowGroup"] as $key => $value){
                $obj = new DescribeFlowId();
                $obj->deserialize($value);
                array_push($this->AttachedFlowGroup, $obj);
            }
        }
    }
}
