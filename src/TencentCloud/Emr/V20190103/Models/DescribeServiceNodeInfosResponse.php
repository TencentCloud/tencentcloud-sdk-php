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
 * DescribeServiceNodeInfos返回参数结构体
 *
 * @method integer getTotalCnt() 获取总数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalCnt(integer $TotalCnt) 设置总数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getServiceNodeList() 获取进程信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceNodeList(array $ServiceNodeList) 设置进程信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAliasInfo() 获取集群所有节点的别名序列化
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAliasInfo(string $AliasInfo) 设置集群所有节点的别名序列化
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSupportNodeFlagFilterList() 获取支持的FlagNode列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSupportNodeFlagFilterList(array $SupportNodeFlagFilterList) 设置支持的FlagNode列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeServiceNodeInfosResponse extends AbstractModel
{
    /**
     * @var integer 总数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalCnt;

    /**
     * @var array 进程信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceNodeList;

    /**
     * @var string 集群所有节点的别名序列化
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AliasInfo;

    /**
     * @var array 支持的FlagNode列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SupportNodeFlagFilterList;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TotalCnt 总数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ServiceNodeList 进程信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AliasInfo 集群所有节点的别名序列化
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SupportNodeFlagFilterList 支持的FlagNode列表
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("TotalCnt",$param) and $param["TotalCnt"] !== null) {
            $this->TotalCnt = $param["TotalCnt"];
        }

        if (array_key_exists("ServiceNodeList",$param) and $param["ServiceNodeList"] !== null) {
            $this->ServiceNodeList = [];
            foreach ($param["ServiceNodeList"] as $key => $value){
                $obj = new ServiceNodeDetailInfo();
                $obj->deserialize($value);
                array_push($this->ServiceNodeList, $obj);
            }
        }

        if (array_key_exists("AliasInfo",$param) and $param["AliasInfo"] !== null) {
            $this->AliasInfo = $param["AliasInfo"];
        }

        if (array_key_exists("SupportNodeFlagFilterList",$param) and $param["SupportNodeFlagFilterList"] !== null) {
            $this->SupportNodeFlagFilterList = $param["SupportNodeFlagFilterList"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
