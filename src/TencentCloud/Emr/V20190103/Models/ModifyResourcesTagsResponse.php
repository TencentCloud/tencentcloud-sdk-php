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
 * ModifyResourcesTags返回参数结构体
 *
 * @method array getSuccessList() 获取成功的资源id列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSuccessList(array $SuccessList) 设置成功的资源id列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getFailList() 获取失败的资源id列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFailList(array $FailList) 设置失败的资源id列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPartSuccessList() 获取部分成功的资源id列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPartSuccessList(array $PartSuccessList) 设置部分成功的资源id列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getClusterToFlowIdList() 获取集群id与流程id的映射列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterToFlowIdList(array $ClusterToFlowIdList) 设置集群id与流程id的映射列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class ModifyResourcesTagsResponse extends AbstractModel
{
    /**
     * @var array 成功的资源id列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SuccessList;

    /**
     * @var array 失败的资源id列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FailList;

    /**
     * @var array 部分成功的资源id列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PartSuccessList;

    /**
     * @var array 集群id与流程id的映射列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterToFlowIdList;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $SuccessList 成功的资源id列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $FailList 失败的资源id列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $PartSuccessList 部分成功的资源id列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ClusterToFlowIdList 集群id与流程id的映射列表
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
        if (array_key_exists("SuccessList",$param) and $param["SuccessList"] !== null) {
            $this->SuccessList = $param["SuccessList"];
        }

        if (array_key_exists("FailList",$param) and $param["FailList"] !== null) {
            $this->FailList = $param["FailList"];
        }

        if (array_key_exists("PartSuccessList",$param) and $param["PartSuccessList"] !== null) {
            $this->PartSuccessList = $param["PartSuccessList"];
        }

        if (array_key_exists("ClusterToFlowIdList",$param) and $param["ClusterToFlowIdList"] !== null) {
            $this->ClusterToFlowIdList = [];
            foreach ($param["ClusterToFlowIdList"] as $key => $value){
                $obj = new ClusterIDToFlowID();
                $obj->deserialize($value);
                array_push($this->ClusterToFlowIdList, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
