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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTopicSubscribeGroup接口出参
 *
 * @method integer getTotalCount() 获取总数
 * @method void setTotalCount(integer $TotalCount) 设置总数
 * @method string getStatusCountInfo() 获取消费分组状态数量信息
 * @method void setStatusCountInfo(string $StatusCountInfo) 设置消费分组状态数量信息
 * @method array getGroupsInfo() 获取消费分组信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupsInfo(array $GroupsInfo) 设置消费分组信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取此次请求是否异步的状态。实例里分组较少的会直接返回结果,Status为1。当分组较多时,会异步更新缓存，Status为0时不会返回分组信息，直至Status为1更新完毕返回结果。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置此次请求是否异步的状态。实例里分组较少的会直接返回结果,Status为1。当分组较多时,会异步更新缓存，Status为0时不会返回分组信息，直至Status为1更新完毕返回结果。
注意：此字段可能返回 null，表示取不到有效值。
 */
class TopicSubscribeGroup extends AbstractModel
{
    /**
     * @var integer 总数
     */
    public $TotalCount;

    /**
     * @var string 消费分组状态数量信息
     */
    public $StatusCountInfo;

    /**
     * @var array 消费分组信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GroupsInfo;

    /**
     * @var integer 此次请求是否异步的状态。实例里分组较少的会直接返回结果,Status为1。当分组较多时,会异步更新缓存，Status为0时不会返回分组信息，直至Status为1更新完毕返回结果。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @param integer $TotalCount 总数
     * @param string $StatusCountInfo 消费分组状态数量信息
     * @param array $GroupsInfo 消费分组信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 此次请求是否异步的状态。实例里分组较少的会直接返回结果,Status为1。当分组较多时,会异步更新缓存，Status为0时不会返回分组信息，直至Status为1更新完毕返回结果。
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("StatusCountInfo",$param) and $param["StatusCountInfo"] !== null) {
            $this->StatusCountInfo = $param["StatusCountInfo"];
        }

        if (array_key_exists("GroupsInfo",$param) and $param["GroupsInfo"] !== null) {
            $this->GroupsInfo = [];
            foreach ($param["GroupsInfo"] as $key => $value){
                $obj = new GroupInfoResponse();
                $obj->deserialize($value);
                array_push($this->GroupsInfo, $obj);
            }
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
