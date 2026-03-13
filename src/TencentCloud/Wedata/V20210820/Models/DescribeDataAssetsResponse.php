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
 * DescribeDataAssets返回参数结构体
 *
 * @method array getDataSetRecords() 获取数据资产记录列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataSetRecords(array $DataSetRecords) 设置数据资产记录列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalCount() 获取总数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalCount(integer $TotalCount) 设置总数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPageNumber() 获取页码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPageNumber(integer $PageNumber) 设置页码
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPageSize() 获取每页数目
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPageSize(integer $PageSize) 设置每页数目
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getIndicatorRecords() 获取指标列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIndicatorRecords(array $IndicatorRecords) 设置指标列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeDataAssetsResponse extends AbstractModel
{
    /**
     * @var array 数据资产记录列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataSetRecords;

    /**
     * @var integer 总数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalCount;

    /**
     * @var integer 页码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PageNumber;

    /**
     * @var integer 每页数目
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PageSize;

    /**
     * @var array 指标列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IndicatorRecords;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $DataSetRecords 数据资产记录列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalCount 总数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PageNumber 页码
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PageSize 每页数目
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $IndicatorRecords 指标列表
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
        if (array_key_exists("DataSetRecords",$param) and $param["DataSetRecords"] !== null) {
            $this->DataSetRecords = [];
            foreach ($param["DataSetRecords"] as $key => $value){
                $obj = new DataSetRecord();
                $obj->deserialize($value);
                array_push($this->DataSetRecords, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("IndicatorRecords",$param) and $param["IndicatorRecords"] !== null) {
            $this->IndicatorRecords = [];
            foreach ($param["IndicatorRecords"] as $key => $value){
                $obj = new IndicatorBaseInfo();
                $obj->deserialize($value);
                array_push($this->IndicatorRecords, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
