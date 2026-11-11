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
 * 基线忽略策略
 *
 * @method integer getID() 获取<p>忽略策略记录 ID。</p>
 * @method void setID(integer $ID) 设置<p>忽略策略记录 ID。</p>
 * @method string getItemName() 获取<p>检测项名称。</p>
 * @method void setItemName(string $ItemName) 设置<p>检测项名称。</p>
 * @method string getCategoryName() 获取<p>检测项所属分类名称。</p>
 * @method void setCategoryName(string $CategoryName) 设置<p>检测项所属分类名称。</p>
 * @method integer getAppID() 获取<p>用户 AppID。</p>
 * @method void setAppID(integer $AppID) 设置<p>用户 AppID。</p>
 * @method string getScopeType() 获取<p>忽略范围类型</p><p>枚举值：</p><ul><li>ALL： 全部资产</li><li>PICK： 指定资产</li></ul>
 * @method void setScopeType(string $ScopeType) 设置<p>忽略范围类型</p><p>枚举值：</p><ul><li>ALL： 全部资产</li><li>PICK： 指定资产</li></ul>
 * @method array getScopeIncludeList() 获取<p>自选资产 ID 列表，PICK时生效，存储 instance-id 或集群 ID。</p>
 * @method void setScopeIncludeList(array $ScopeIncludeList) 设置<p>自选资产 ID 列表，PICK时生效，存储 instance-id 或集群 ID。</p>
 * @method array getScopeExcludeList() 获取<p>剔除资产 ID 列表，ALL 时生效，存储 instance-id 或集群 ID。</p>
 * @method void setScopeExcludeList(array $ScopeExcludeList) 设置<p>剔除资产 ID 列表，ALL 时生效，存储 instance-id 或集群 ID。</p>
 * @method string getRemark() 获取<p>备注信息。</p>
 * @method void setRemark(string $Remark) 设置<p>备注信息。</p>
 * @method string getCreateTime() 获取<p>创建时间。</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间。</p>
 * @method string getModifyTime() 获取<p>最近修改时间。</p>
 * @method void setModifyTime(string $ModifyTime) 设置<p>最近修改时间。</p>
 * @method string getAssetType() 获取<p>对应资产类型</p><p>枚举值：</p><ul><li>HOST： 主机</li><li>CLUSTER： 集群相关资产</li></ul>
 * @method void setAssetType(string $AssetType) 设置<p>对应资产类型</p><p>枚举值：</p><ul><li>HOST： 主机</li><li>CLUSTER： 集群相关资产</li></ul>
 * @method integer getItemID() 获取<p>检测项ID</p>
 * @method void setItemID(integer $ItemID) 设置<p>检测项ID</p>
 */
class BaselineIgnorePolicy extends AbstractModel
{
    /**
     * @var integer <p>忽略策略记录 ID。</p>
     */
    public $ID;

    /**
     * @var string <p>检测项名称。</p>
     */
    public $ItemName;

    /**
     * @var string <p>检测项所属分类名称。</p>
     */
    public $CategoryName;

    /**
     * @var integer <p>用户 AppID。</p>
     */
    public $AppID;

    /**
     * @var string <p>忽略范围类型</p><p>枚举值：</p><ul><li>ALL： 全部资产</li><li>PICK： 指定资产</li></ul>
     */
    public $ScopeType;

    /**
     * @var array <p>自选资产 ID 列表，PICK时生效，存储 instance-id 或集群 ID。</p>
     */
    public $ScopeIncludeList;

    /**
     * @var array <p>剔除资产 ID 列表，ALL 时生效，存储 instance-id 或集群 ID。</p>
     */
    public $ScopeExcludeList;

    /**
     * @var string <p>备注信息。</p>
     */
    public $Remark;

    /**
     * @var string <p>创建时间。</p>
     */
    public $CreateTime;

    /**
     * @var string <p>最近修改时间。</p>
     */
    public $ModifyTime;

    /**
     * @var string <p>对应资产类型</p><p>枚举值：</p><ul><li>HOST： 主机</li><li>CLUSTER： 集群相关资产</li></ul>
     */
    public $AssetType;

    /**
     * @var integer <p>检测项ID</p>
     */
    public $ItemID;

    /**
     * @param integer $ID <p>忽略策略记录 ID。</p>
     * @param string $ItemName <p>检测项名称。</p>
     * @param string $CategoryName <p>检测项所属分类名称。</p>
     * @param integer $AppID <p>用户 AppID。</p>
     * @param string $ScopeType <p>忽略范围类型</p><p>枚举值：</p><ul><li>ALL： 全部资产</li><li>PICK： 指定资产</li></ul>
     * @param array $ScopeIncludeList <p>自选资产 ID 列表，PICK时生效，存储 instance-id 或集群 ID。</p>
     * @param array $ScopeExcludeList <p>剔除资产 ID 列表，ALL 时生效，存储 instance-id 或集群 ID。</p>
     * @param string $Remark <p>备注信息。</p>
     * @param string $CreateTime <p>创建时间。</p>
     * @param string $ModifyTime <p>最近修改时间。</p>
     * @param string $AssetType <p>对应资产类型</p><p>枚举值：</p><ul><li>HOST： 主机</li><li>CLUSTER： 集群相关资产</li></ul>
     * @param integer $ItemID <p>检测项ID</p>
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("ItemName",$param) and $param["ItemName"] !== null) {
            $this->ItemName = $param["ItemName"];
        }

        if (array_key_exists("CategoryName",$param) and $param["CategoryName"] !== null) {
            $this->CategoryName = $param["CategoryName"];
        }

        if (array_key_exists("AppID",$param) and $param["AppID"] !== null) {
            $this->AppID = $param["AppID"];
        }

        if (array_key_exists("ScopeType",$param) and $param["ScopeType"] !== null) {
            $this->ScopeType = $param["ScopeType"];
        }

        if (array_key_exists("ScopeIncludeList",$param) and $param["ScopeIncludeList"] !== null) {
            $this->ScopeIncludeList = $param["ScopeIncludeList"];
        }

        if (array_key_exists("ScopeExcludeList",$param) and $param["ScopeExcludeList"] !== null) {
            $this->ScopeExcludeList = $param["ScopeExcludeList"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("AssetType",$param) and $param["AssetType"] !== null) {
            $this->AssetType = $param["AssetType"];
        }

        if (array_key_exists("ItemID",$param) and $param["ItemID"] !== null) {
            $this->ItemID = $param["ItemID"];
        }
    }
}
