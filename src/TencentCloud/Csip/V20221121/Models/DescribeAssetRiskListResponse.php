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
 * DescribeAssetRiskList返回参数结构体
 *
 * @method integer getTotalCount() 获取资产视角下风险数量
 * @method void setTotalCount(integer $TotalCount) 设置资产视角下风险数量
 * @method array getAssetRiskList() 获取资产视角下风险列表
 * @method void setAssetRiskList(array $AssetRiskList) 设置资产视角下风险列表
 * @method array getStandardNameList() 获取等保规范名称集合
 * @method void setStandardNameList(array $StandardNameList) 设置等保规范名称集合
 * @method array getAssetTypeList() 获取资产类型集合
 * @method void setAssetTypeList(array $AssetTypeList) 设置资产类型集合
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeAssetRiskListResponse extends AbstractModel
{
    /**
     * @var integer 资产视角下风险数量
     */
    public $TotalCount;

    /**
     * @var array 资产视角下风险列表
     */
    public $AssetRiskList;

    /**
     * @var array 等保规范名称集合
     */
    public $StandardNameList;

    /**
     * @var array 资产类型集合
     */
    public $AssetTypeList;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TotalCount 资产视角下风险数量
     * @param array $AssetRiskList 资产视角下风险列表
     * @param array $StandardNameList 等保规范名称集合
     * @param array $AssetTypeList 资产类型集合
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

        if (array_key_exists("AssetRiskList",$param) and $param["AssetRiskList"] !== null) {
            $this->AssetRiskList = [];
            foreach ($param["AssetRiskList"] as $key => $value){
                $obj = new AssetRiskItem();
                $obj->deserialize($value);
                array_push($this->AssetRiskList, $obj);
            }
        }

        if (array_key_exists("StandardNameList",$param) and $param["StandardNameList"] !== null) {
            $this->StandardNameList = [];
            foreach ($param["StandardNameList"] as $key => $value){
                $obj = new StandardItem();
                $obj->deserialize($value);
                array_push($this->StandardNameList, $obj);
            }
        }

        if (array_key_exists("AssetTypeList",$param) and $param["AssetTypeList"] !== null) {
            $this->AssetTypeList = [];
            foreach ($param["AssetTypeList"] as $key => $value){
                $obj = new AttributeOptionSet();
                $obj->deserialize($value);
                array_push($this->AssetTypeList, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
