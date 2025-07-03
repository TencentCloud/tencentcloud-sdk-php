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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 添加实例到集群的结果
 *
 * @method array getFailedInstanceIds() 获取添加集群失败的节点列表
 * @method void setFailedInstanceIds(array $FailedInstanceIds) 设置添加集群失败的节点列表
 * @method array getSuccInstanceIds() 获取添加集群成功的节点列表
 * @method void setSuccInstanceIds(array $SuccInstanceIds) 设置添加集群成功的节点列表
 * @method array getTimeoutInstanceIds() 获取添加集群超时的节点列表
 * @method void setTimeoutInstanceIds(array $TimeoutInstanceIds) 设置添加集群超时的节点列表
 * @method array getFailedReasons() 获取失败的节点的失败原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFailedReasons(array $FailedReasons) 设置失败的节点的失败原因
注意：此字段可能返回 null，表示取不到有效值。
 */
class AddInstanceResult extends AbstractModel
{
    /**
     * @var array 添加集群失败的节点列表
     */
    public $FailedInstanceIds;

    /**
     * @var array 添加集群成功的节点列表
     */
    public $SuccInstanceIds;

    /**
     * @var array 添加集群超时的节点列表
     */
    public $TimeoutInstanceIds;

    /**
     * @var array 失败的节点的失败原因
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FailedReasons;

    /**
     * @param array $FailedInstanceIds 添加集群失败的节点列表
     * @param array $SuccInstanceIds 添加集群成功的节点列表
     * @param array $TimeoutInstanceIds 添加集群超时的节点列表
     * @param array $FailedReasons 失败的节点的失败原因
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
        if (array_key_exists("FailedInstanceIds",$param) and $param["FailedInstanceIds"] !== null) {
            $this->FailedInstanceIds = $param["FailedInstanceIds"];
        }

        if (array_key_exists("SuccInstanceIds",$param) and $param["SuccInstanceIds"] !== null) {
            $this->SuccInstanceIds = $param["SuccInstanceIds"];
        }

        if (array_key_exists("TimeoutInstanceIds",$param) and $param["TimeoutInstanceIds"] !== null) {
            $this->TimeoutInstanceIds = $param["TimeoutInstanceIds"];
        }

        if (array_key_exists("FailedReasons",$param) and $param["FailedReasons"] !== null) {
            $this->FailedReasons = $param["FailedReasons"];
        }
    }
}
