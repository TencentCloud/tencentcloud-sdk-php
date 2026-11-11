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
 * DescribeAssetBaselineRiskList请求参数结构体
 *
 * @method string getAssetUniqueID() 获取<p>资产唯一标识（UUID），与 AssetType 组合定位具体资产。</p>
 * @method void setAssetUniqueID(string $AssetUniqueID) 设置<p>资产唯一标识（UUID），与 AssetType 组合定位具体资产。</p>
 * @method string getAssetType() 获取<p>资产类型。取值：HOST（主机）、CLUSTER（集群）。</p>
 * @method void setAssetType(string $AssetType) 设置<p>资产类型。取值：HOST（主机）、CLUSTER（集群）。</p>
 * @method integer getAssetAppID() 获取<p>资产所属appid</p>
 * @method void setAssetAppID(integer $AssetAppID) 设置<p>资产所属appid</p>
 * @method array getMemberId() 获取<p>集团账号的成员id</p>
 * @method void setMemberId(array $MemberId) 设置<p>集团账号的成员id</p>
 * @method array getFilters() 获取<p>通用过滤条件。支持字段：ItemName（检测项名称，模糊）、PolicyName（所属基线名称，模糊）、ResultStatus（结果状态）、RiskLevel（风险等级）。不同 Name 之间为且关系，同一 Name 下多个 Values 为或关系。</p>
 * @method void setFilters(array $Filters) 设置<p>通用过滤条件。支持字段：ItemName（检测项名称，模糊）、PolicyName（所属基线名称，模糊）、ResultStatus（结果状态）、RiskLevel（风险等级）。不同 Name 之间为且关系，同一 Name 下多个 Values 为或关系。</p>
 * @method integer getLimit() 获取<p>分页查询每页数量，最大值 100；超过时服务端将自动回退为默认值 10。</p>
 * @method void setLimit(integer $Limit) 设置<p>分页查询每页数量，最大值 100；超过时服务端将自动回退为默认值 10。</p>
 * @method integer getOffset() 获取<p>分页查询起始偏移量，从 0 开始。</p>
 * @method void setOffset(integer $Offset) 设置<p>分页查询起始偏移量，从 0 开始。</p>
 */
class DescribeAssetBaselineRiskListRequest extends AbstractModel
{
    /**
     * @var string <p>资产唯一标识（UUID），与 AssetType 组合定位具体资产。</p>
     */
    public $AssetUniqueID;

    /**
     * @var string <p>资产类型。取值：HOST（主机）、CLUSTER（集群）。</p>
     */
    public $AssetType;

    /**
     * @var integer <p>资产所属appid</p>
     */
    public $AssetAppID;

    /**
     * @var array <p>集团账号的成员id</p>
     */
    public $MemberId;

    /**
     * @var array <p>通用过滤条件。支持字段：ItemName（检测项名称，模糊）、PolicyName（所属基线名称，模糊）、ResultStatus（结果状态）、RiskLevel（风险等级）。不同 Name 之间为且关系，同一 Name 下多个 Values 为或关系。</p>
     */
    public $Filters;

    /**
     * @var integer <p>分页查询每页数量，最大值 100；超过时服务端将自动回退为默认值 10。</p>
     */
    public $Limit;

    /**
     * @var integer <p>分页查询起始偏移量，从 0 开始。</p>
     */
    public $Offset;

    /**
     * @param string $AssetUniqueID <p>资产唯一标识（UUID），与 AssetType 组合定位具体资产。</p>
     * @param string $AssetType <p>资产类型。取值：HOST（主机）、CLUSTER（集群）。</p>
     * @param integer $AssetAppID <p>资产所属appid</p>
     * @param array $MemberId <p>集团账号的成员id</p>
     * @param array $Filters <p>通用过滤条件。支持字段：ItemName（检测项名称，模糊）、PolicyName（所属基线名称，模糊）、ResultStatus（结果状态）、RiskLevel（风险等级）。不同 Name 之间为且关系，同一 Name 下多个 Values 为或关系。</p>
     * @param integer $Limit <p>分页查询每页数量，最大值 100；超过时服务端将自动回退为默认值 10。</p>
     * @param integer $Offset <p>分页查询起始偏移量，从 0 开始。</p>
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
        if (array_key_exists("AssetUniqueID",$param) and $param["AssetUniqueID"] !== null) {
            $this->AssetUniqueID = $param["AssetUniqueID"];
        }

        if (array_key_exists("AssetType",$param) and $param["AssetType"] !== null) {
            $this->AssetType = $param["AssetType"];
        }

        if (array_key_exists("AssetAppID",$param) and $param["AssetAppID"] !== null) {
            $this->AssetAppID = $param["AssetAppID"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filters();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
