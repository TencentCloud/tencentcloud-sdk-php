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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeHostUpdateRecordDetail返回参数结构体
 *
 * @method integer getTotalCount() 获取总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalCount(integer $TotalCount) 设置总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getRecordDetailList() 获取证书部署记录列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRecordDetailList(array $RecordDetailList) 设置证书部署记录列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSuccessTotalCount() 获取成功总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSuccessTotalCount(integer $SuccessTotalCount) 设置成功总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFailedTotalCount() 获取失败总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFailedTotalCount(integer $FailedTotalCount) 设置失败总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRunningTotalCount() 获取部署中总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRunningTotalCount(integer $RunningTotalCount) 设置部署中总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeHostUpdateRecordDetailResponse extends AbstractModel
{
    /**
     * @var integer 总数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalCount;

    /**
     * @var array 证书部署记录列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RecordDetailList;

    /**
     * @var integer 成功总数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SuccessTotalCount;

    /**
     * @var integer 失败总数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FailedTotalCount;

    /**
     * @var integer 部署中总数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RunningTotalCount;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TotalCount 总数
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $RecordDetailList 证书部署记录列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SuccessTotalCount 成功总数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FailedTotalCount 失败总数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RunningTotalCount 部署中总数
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("RecordDetailList",$param) and $param["RecordDetailList"] !== null) {
            $this->RecordDetailList = [];
            foreach ($param["RecordDetailList"] as $key => $value){
                $obj = new UpdateRecordDetails();
                $obj->deserialize($value);
                array_push($this->RecordDetailList, $obj);
            }
        }

        if (array_key_exists("SuccessTotalCount",$param) and $param["SuccessTotalCount"] !== null) {
            $this->SuccessTotalCount = $param["SuccessTotalCount"];
        }

        if (array_key_exists("FailedTotalCount",$param) and $param["FailedTotalCount"] !== null) {
            $this->FailedTotalCount = $param["FailedTotalCount"];
        }

        if (array_key_exists("RunningTotalCount",$param) and $param["RunningTotalCount"] !== null) {
            $this->RunningTotalCount = $param["RunningTotalCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
