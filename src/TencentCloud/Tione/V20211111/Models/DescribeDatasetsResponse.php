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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDatasets返回参数结构体
 *
 * @method integer getTotalCount() 获取数据集总量（名称维度）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalCount(integer $TotalCount) 设置数据集总量（名称维度）
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDatasetGroups() 获取数据集按照数据集名称聚合的分组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatasetGroups(array $DatasetGroups) 设置数据集按照数据集名称聚合的分组
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDatasetIdNums() 获取数据集ID总量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatasetIdNums(integer $DatasetIdNums) 设置数据集ID总量
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getCFSNotReady() 获取若开启了CFSChecking，则检查CFS是否准备完毕。若CFS未准备完毕，则返回true，并且TotalCount为0，DatasetGroups为空。
 * @method void setCFSNotReady(boolean $CFSNotReady) 设置若开启了CFSChecking，则检查CFS是否准备完毕。若CFS未准备完毕，则返回true，并且TotalCount为0，DatasetGroups为空。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeDatasetsResponse extends AbstractModel
{
    /**
     * @var integer 数据集总量（名称维度）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalCount;

    /**
     * @var array 数据集按照数据集名称聚合的分组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatasetGroups;

    /**
     * @var integer 数据集ID总量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatasetIdNums;

    /**
     * @var boolean 若开启了CFSChecking，则检查CFS是否准备完毕。若CFS未准备完毕，则返回true，并且TotalCount为0，DatasetGroups为空。
     */
    public $CFSNotReady;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TotalCount 数据集总量（名称维度）
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $DatasetGroups 数据集按照数据集名称聚合的分组
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DatasetIdNums 数据集ID总量
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $CFSNotReady 若开启了CFSChecking，则检查CFS是否准备完毕。若CFS未准备完毕，则返回true，并且TotalCount为0，DatasetGroups为空。
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("DatasetGroups",$param) and $param["DatasetGroups"] !== null) {
            $this->DatasetGroups = [];
            foreach ($param["DatasetGroups"] as $key => $value){
                $obj = new DatasetGroup();
                $obj->deserialize($value);
                array_push($this->DatasetGroups, $obj);
            }
        }

        if (array_key_exists("DatasetIdNums",$param) and $param["DatasetIdNums"] !== null) {
            $this->DatasetIdNums = $param["DatasetIdNums"];
        }

        if (array_key_exists("CFSNotReady",$param) and $param["CFSNotReady"] !== null) {
            $this->CFSNotReady = $param["CFSNotReady"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
