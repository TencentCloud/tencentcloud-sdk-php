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
namespace TencentCloud\Ssa\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeComplianceAssetList返回参数结构体
 *
 * @method array getCheckAssetsList() 获取资产组列表
 * @method void setCheckAssetsList(array $CheckAssetsList) 设置资产组列表
 * @method integer getTotal() 获取资产组列表总数
 * @method void setTotal(integer $Total) 设置资产组列表总数
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeComplianceAssetListResponse extends AbstractModel
{
    /**
     * @var array 资产组列表
     */
    public $CheckAssetsList;

    /**
     * @var integer 资产组列表总数
     */
    public $Total;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $CheckAssetsList 资产组列表
     * @param integer $Total 资产组列表总数
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
        if (array_key_exists("CheckAssetsList",$param) and $param["CheckAssetsList"] !== null) {
            $this->CheckAssetsList = [];
            foreach ($param["CheckAssetsList"] as $key => $value){
                $obj = new CheckAssetItem();
                $obj->deserialize($value);
                array_push($this->CheckAssetsList, $obj);
            }
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
