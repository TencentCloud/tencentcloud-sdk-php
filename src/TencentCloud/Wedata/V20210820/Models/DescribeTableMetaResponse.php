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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTableMeta返回参数结构体
 *
 * @method TableMeta getTableMeta() 获取表的元数据信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableMeta(TableMeta $TableMeta) 设置表的元数据信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method LifecycleInfo getLifecycleInfo() 获取生命周期信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLifecycleInfo(LifecycleInfo $LifecycleInfo) 设置生命周期信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method TagVoteSum getTagVoteSumList() 获取标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTagVoteSumList(TagVoteSum $TagVoteSumList) 设置标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeTableMetaResponse extends AbstractModel
{
    /**
     * @var TableMeta 表的元数据信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableMeta;

    /**
     * @var LifecycleInfo 生命周期信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LifecycleInfo;

    /**
     * @var TagVoteSum 标签
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TagVoteSumList;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param TableMeta $TableMeta 表的元数据信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param LifecycleInfo $LifecycleInfo 生命周期信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param TagVoteSum $TagVoteSumList 标签
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
        if (array_key_exists("TableMeta",$param) and $param["TableMeta"] !== null) {
            $this->TableMeta = new TableMeta();
            $this->TableMeta->deserialize($param["TableMeta"]);
        }

        if (array_key_exists("LifecycleInfo",$param) and $param["LifecycleInfo"] !== null) {
            $this->LifecycleInfo = new LifecycleInfo();
            $this->LifecycleInfo->deserialize($param["LifecycleInfo"]);
        }

        if (array_key_exists("TagVoteSumList",$param) and $param["TagVoteSumList"] !== null) {
            $this->TagVoteSumList = new TagVoteSum();
            $this->TagVoteSumList->deserialize($param["TagVoteSumList"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
