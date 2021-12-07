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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCompliancePolicyItemAffectedAssetList返回参数结构体
 *
 * @method array getAffectedAssetList() 获取返回各检测项所影响的资产的列表。
 * @method void setAffectedAssetList(array $AffectedAssetList) 设置返回各检测项所影响的资产的列表。
 * @method integer getTotalCount() 获取检测项影响的资产的总数。
 * @method void setTotalCount(integer $TotalCount) 设置检测项影响的资产的总数。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeCompliancePolicyItemAffectedAssetListResponse extends AbstractModel
{
    /**
     * @var array 返回各检测项所影响的资产的列表。
     */
    public $AffectedAssetList;

    /**
     * @var integer 检测项影响的资产的总数。
     */
    public $TotalCount;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $AffectedAssetList 返回各检测项所影响的资产的列表。
     * @param integer $TotalCount 检测项影响的资产的总数。
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
        if (array_key_exists("AffectedAssetList",$param) and $param["AffectedAssetList"] !== null) {
            $this->AffectedAssetList = [];
            foreach ($param["AffectedAssetList"] as $key => $value){
                $obj = new ComplianceAffectedAsset();
                $obj->deserialize($value);
                array_push($this->AffectedAssetList, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
