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
 * DescribeVULList返回参数结构体
 *
 * @method integer getTotalCount() 获取总数
 * @method void setTotalCount(integer $TotalCount) 设置总数
 * @method array getData() 获取漏洞列表
 * @method void setData(array $Data) 设置漏洞列表
 * @method array getVULTypeLists() 获取漏洞类型列表
 * @method void setVULTypeLists(array $VULTypeLists) 设置漏洞类型列表
 * @method array getRiskLevels() 获取风险等级列表
 * @method void setRiskLevels(array $RiskLevels) 设置风险等级列表
 * @method array getTags() 获取标签
 * @method void setTags(array $Tags) 设置标签
 * @method array getProductSupport() 获取产品支持情况
 * @method void setProductSupport(array $ProductSupport) 设置产品支持情况
 * @method array getCheckStatus() 获取产品支持情况
 * @method void setCheckStatus(array $CheckStatus) 设置产品支持情况
 * @method array getAttackHeat() 获取攻击热度枚举
 * @method void setAttackHeat(array $AttackHeat) 设置攻击热度枚举
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeVULListResponse extends AbstractModel
{
    /**
     * @var integer 总数
     */
    public $TotalCount;

    /**
     * @var array 漏洞列表
     */
    public $Data;

    /**
     * @var array 漏洞类型列表
     */
    public $VULTypeLists;

    /**
     * @var array 风险等级列表
     */
    public $RiskLevels;

    /**
     * @var array 标签
     */
    public $Tags;

    /**
     * @var array 产品支持情况
     */
    public $ProductSupport;

    /**
     * @var array 产品支持情况
     */
    public $CheckStatus;

    /**
     * @var array 攻击热度枚举
     */
    public $AttackHeat;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TotalCount 总数
     * @param array $Data 漏洞列表
     * @param array $VULTypeLists 漏洞类型列表
     * @param array $RiskLevels 风险等级列表
     * @param array $Tags 标签
     * @param array $ProductSupport 产品支持情况
     * @param array $CheckStatus 产品支持情况
     * @param array $AttackHeat 攻击热度枚举
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

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = [];
            foreach ($param["Data"] as $key => $value){
                $obj = new VULBaseInfo();
                $obj->deserialize($value);
                array_push($this->Data, $obj);
            }
        }

        if (array_key_exists("VULTypeLists",$param) and $param["VULTypeLists"] !== null) {
            $this->VULTypeLists = [];
            foreach ($param["VULTypeLists"] as $key => $value){
                $obj = new FilterDataObject();
                $obj->deserialize($value);
                array_push($this->VULTypeLists, $obj);
            }
        }

        if (array_key_exists("RiskLevels",$param) and $param["RiskLevels"] !== null) {
            $this->RiskLevels = [];
            foreach ($param["RiskLevels"] as $key => $value){
                $obj = new FilterDataObject();
                $obj->deserialize($value);
                array_push($this->RiskLevels, $obj);
            }
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new FilterDataObject();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("ProductSupport",$param) and $param["ProductSupport"] !== null) {
            $this->ProductSupport = [];
            foreach ($param["ProductSupport"] as $key => $value){
                $obj = new FilterDataObject();
                $obj->deserialize($value);
                array_push($this->ProductSupport, $obj);
            }
        }

        if (array_key_exists("CheckStatus",$param) and $param["CheckStatus"] !== null) {
            $this->CheckStatus = [];
            foreach ($param["CheckStatus"] as $key => $value){
                $obj = new FilterDataObject();
                $obj->deserialize($value);
                array_push($this->CheckStatus, $obj);
            }
        }

        if (array_key_exists("AttackHeat",$param) and $param["AttackHeat"] !== null) {
            $this->AttackHeat = [];
            foreach ($param["AttackHeat"] as $key => $value){
                $obj = new FilterDataObject();
                $obj->deserialize($value);
                array_push($this->AttackHeat, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
