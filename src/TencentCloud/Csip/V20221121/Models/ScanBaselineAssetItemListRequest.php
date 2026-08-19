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
 * ScanBaselineAssetItemList请求参数结构体
 *
 * @method string getPolicyType() 获取<p>基线策略类型。取值：</p><ul><li>SYSTEM：系统策略（CSIP 内置）</li><li>SELF：用户自定义策略</li></ul>
 * @method void setPolicyType(string $PolicyType) 设置<p>基线策略类型。取值：</p><ul><li>SYSTEM：系统策略（CSIP 内置）</li><li>SELF：用户自定义策略</li></ul>
 * @method integer getPolicyID() 获取<p>目标基线策略 ID，必须大于 0。</p>
 * @method void setPolicyID(integer $PolicyID) 设置<p>目标基线策略 ID，必须大于 0。</p>
 * @method integer getParentCategoryID() 获取<p>基线系统父分类 ID。</p>
 * @method void setParentCategoryID(integer $ParentCategoryID) 设置<p>基线系统父分类 ID。</p>
 * @method array getItemIDList() 获取<p>要重新扫描的检测项 ID 列表，仅对该资产生效。</p>
 * @method void setItemIDList(array $ItemIDList) 设置<p>要重新扫描的检测项 ID 列表，仅对该资产生效。</p>
 * @method string getAssetID() 获取<p>目标资产 ID（AssetType=HOST 时为 InstanceID，=CLUSTER 时为集群 ID）。</p>
 * @method void setAssetID(string $AssetID) 设置<p>目标资产 ID（AssetType=HOST 时为 InstanceID，=CLUSTER 时为集群 ID）。</p>
 * @method integer getCategoryID() 获取<p>基线子分类 ID。</p>
 * @method void setCategoryID(integer $CategoryID) 设置<p>基线子分类 ID。</p>
 * @method array getMemberId() 获取<p>集团账号的成员id</p>
 * @method void setMemberId(array $MemberId) 设置<p>集团账号的成员id</p>
 * @method string getAssetType() 获取<p>命中资产的资产类型。取值：</p><ul><li>HOST：主机</li><li>CLUSTER：集群</li><li>POD：Pod</li><li>CONTAINER：容器</li><li>IMAGE：镜像</li></ul>
 * @method void setAssetType(string $AssetType) 设置<p>命中资产的资产类型。取值：</p><ul><li>HOST：主机</li><li>CLUSTER：集群</li><li>POD：Pod</li><li>CONTAINER：容器</li><li>IMAGE：镜像</li></ul>
 */
class ScanBaselineAssetItemListRequest extends AbstractModel
{
    /**
     * @var string <p>基线策略类型。取值：</p><ul><li>SYSTEM：系统策略（CSIP 内置）</li><li>SELF：用户自定义策略</li></ul>
     */
    public $PolicyType;

    /**
     * @var integer <p>目标基线策略 ID，必须大于 0。</p>
     */
    public $PolicyID;

    /**
     * @var integer <p>基线系统父分类 ID。</p>
     */
    public $ParentCategoryID;

    /**
     * @var array <p>要重新扫描的检测项 ID 列表，仅对该资产生效。</p>
     */
    public $ItemIDList;

    /**
     * @var string <p>目标资产 ID（AssetType=HOST 时为 InstanceID，=CLUSTER 时为集群 ID）。</p>
     */
    public $AssetID;

    /**
     * @var integer <p>基线子分类 ID。</p>
     */
    public $CategoryID;

    /**
     * @var array <p>集团账号的成员id</p>
     */
    public $MemberId;

    /**
     * @var string <p>命中资产的资产类型。取值：</p><ul><li>HOST：主机</li><li>CLUSTER：集群</li><li>POD：Pod</li><li>CONTAINER：容器</li><li>IMAGE：镜像</li></ul>
     */
    public $AssetType;

    /**
     * @param string $PolicyType <p>基线策略类型。取值：</p><ul><li>SYSTEM：系统策略（CSIP 内置）</li><li>SELF：用户自定义策略</li></ul>
     * @param integer $PolicyID <p>目标基线策略 ID，必须大于 0。</p>
     * @param integer $ParentCategoryID <p>基线系统父分类 ID。</p>
     * @param array $ItemIDList <p>要重新扫描的检测项 ID 列表，仅对该资产生效。</p>
     * @param string $AssetID <p>目标资产 ID（AssetType=HOST 时为 InstanceID，=CLUSTER 时为集群 ID）。</p>
     * @param integer $CategoryID <p>基线子分类 ID。</p>
     * @param array $MemberId <p>集团账号的成员id</p>
     * @param string $AssetType <p>命中资产的资产类型。取值：</p><ul><li>HOST：主机</li><li>CLUSTER：集群</li><li>POD：Pod</li><li>CONTAINER：容器</li><li>IMAGE：镜像</li></ul>
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
        if (array_key_exists("PolicyType",$param) and $param["PolicyType"] !== null) {
            $this->PolicyType = $param["PolicyType"];
        }

        if (array_key_exists("PolicyID",$param) and $param["PolicyID"] !== null) {
            $this->PolicyID = $param["PolicyID"];
        }

        if (array_key_exists("ParentCategoryID",$param) and $param["ParentCategoryID"] !== null) {
            $this->ParentCategoryID = $param["ParentCategoryID"];
        }

        if (array_key_exists("ItemIDList",$param) and $param["ItemIDList"] !== null) {
            $this->ItemIDList = $param["ItemIDList"];
        }

        if (array_key_exists("AssetID",$param) and $param["AssetID"] !== null) {
            $this->AssetID = $param["AssetID"];
        }

        if (array_key_exists("CategoryID",$param) and $param["CategoryID"] !== null) {
            $this->CategoryID = $param["CategoryID"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("AssetType",$param) and $param["AssetType"] !== null) {
            $this->AssetType = $param["AssetType"];
        }
    }
}
