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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDspmIdentifyInfo返回参数结构体
 *
 * @method string getIdentifyId() 获取身份id
 * @method void setIdentifyId(string $IdentifyId) 设置身份id
 * @method array getIdentifyCount() 获取身份统计信息
 * @method void setIdentifyCount(array $IdentifyCount) 设置身份统计信息
 * @method integer getApplyOrderCount() 获取申请单个数
 * @method void setApplyOrderCount(integer $ApplyOrderCount) 设置申请单个数
 * @method integer getApproveOrderCount() 获取审批单个数
 * @method void setApproveOrderCount(integer $ApproveOrderCount) 设置审批单个数
 * @method integer getApproveHistoryCount() 获取已审批个数
 * @method void setApproveHistoryCount(integer $ApproveHistoryCount) 设置已审批个数
 * @method integer getAssetCount() 获取资产总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAssetCount(integer $AssetCount) 设置资产总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUinAccountCount() 获取云账号总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUinAccountCount(integer $UinAccountCount) 设置云账号总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeDspmIdentifyInfoResponse extends AbstractModel
{
    /**
     * @var string 身份id
     */
    public $IdentifyId;

    /**
     * @var array 身份统计信息
     */
    public $IdentifyCount;

    /**
     * @var integer 申请单个数
     */
    public $ApplyOrderCount;

    /**
     * @var integer 审批单个数
     */
    public $ApproveOrderCount;

    /**
     * @var integer 已审批个数
     */
    public $ApproveHistoryCount;

    /**
     * @var integer 资产总数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AssetCount;

    /**
     * @var integer 云账号总数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UinAccountCount;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $IdentifyId 身份id
     * @param array $IdentifyCount 身份统计信息
     * @param integer $ApplyOrderCount 申请单个数
     * @param integer $ApproveOrderCount 审批单个数
     * @param integer $ApproveHistoryCount 已审批个数
     * @param integer $AssetCount 资产总数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $UinAccountCount 云账号总数
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
        if (array_key_exists("IdentifyId",$param) and $param["IdentifyId"] !== null) {
            $this->IdentifyId = $param["IdentifyId"];
        }

        if (array_key_exists("IdentifyCount",$param) and $param["IdentifyCount"] !== null) {
            $this->IdentifyCount = [];
            foreach ($param["IdentifyCount"] as $key => $value){
                $obj = new DspmIdentifyCount();
                $obj->deserialize($value);
                array_push($this->IdentifyCount, $obj);
            }
        }

        if (array_key_exists("ApplyOrderCount",$param) and $param["ApplyOrderCount"] !== null) {
            $this->ApplyOrderCount = $param["ApplyOrderCount"];
        }

        if (array_key_exists("ApproveOrderCount",$param) and $param["ApproveOrderCount"] !== null) {
            $this->ApproveOrderCount = $param["ApproveOrderCount"];
        }

        if (array_key_exists("ApproveHistoryCount",$param) and $param["ApproveHistoryCount"] !== null) {
            $this->ApproveHistoryCount = $param["ApproveHistoryCount"];
        }

        if (array_key_exists("AssetCount",$param) and $param["AssetCount"] !== null) {
            $this->AssetCount = $param["AssetCount"];
        }

        if (array_key_exists("UinAccountCount",$param) and $param["UinAccountCount"] !== null) {
            $this->UinAccountCount = $param["UinAccountCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
