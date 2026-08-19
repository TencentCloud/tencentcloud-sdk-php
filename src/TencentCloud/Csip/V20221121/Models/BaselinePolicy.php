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
 * 基线策略
 *
 * @method CycleScanConf getCycleScanConf() 获取<p>周期扫描配置（开关、间隔类型、扫描时段等）。</p>
 * @method void setCycleScanConf(CycleScanConf $CycleScanConf) 设置<p>周期扫描配置（开关、间隔类型、扫描时段等）。</p>
 * @method string getCheckAssetType() 获取<p>检测资产大类，区分主机基线与容器集群基线。取值：</p><ul><li>HOST：主机</li><li>CLUSTER：容器集群</li></ul>
 * @method void setCheckAssetType(string $CheckAssetType) 设置<p>检测资产大类，区分主机基线与容器集群基线。取值：</p><ul><li>HOST：主机</li><li>CLUSTER：容器集群</li></ul>
 * @method boolean getAutoSyncItem() 获取<p>是否在系统新增内置检测项时自动加入本策略。true 自动加入，false 不加入。</p>
 * @method void setAutoSyncItem(boolean $AutoSyncItem) 设置<p>是否在系统新增内置检测项时自动加入本策略。true 自动加入，false 不加入。</p>
 * @method string getType() 获取<p>基线策略类型。取值：</p><ul><li>SYSTEM：系统策略（CSIP 内置）</li><li>SELF：用户自定义策略</li></ul>
 * @method void setType(string $Type) 设置<p>基线策略类型。取值：</p><ul><li>SYSTEM：系统策略（CSIP 内置）</li><li>SELF：用户自定义策略</li></ul>
 * @method string getName() 获取<p>策略名称（自定义策略由用户填写，系统策略为内置分类名）。</p>
 * @method void setName(string $Name) 设置<p>策略名称（自定义策略由用户填写，系统策略为内置分类名）。</p>
 * @method string getDescription() 获取<p>策略描述。</p>
 * @method void setDescription(string $Description) 设置<p>策略描述。</p>
 * @method string getConfHostType() 获取<p>主机生效范围。取值：</p><ul><li>ALL：全部主机（可配合 ConfHostExcludeList 剔除）</li><li>TAG_MATCH：按标签匹配，配合 ConfHostTagValue</li><li>PICK：仅在 ConfHostIncludeList 指定的主机生效</li><li>NONE：未配置</li></ul>
 * @method void setConfHostType(string $ConfHostType) 设置<p>主机生效范围。取值：</p><ul><li>ALL：全部主机（可配合 ConfHostExcludeList 剔除）</li><li>TAG_MATCH：按标签匹配，配合 ConfHostTagValue</li><li>PICK：仅在 ConfHostIncludeList 指定的主机生效</li><li>NONE：未配置</li></ul>
 * @method array getConfHostIncludeList() 获取<p>主机 InstanceID 白名单，在 ConfHostType=PICK / TAG_MATCH 时使用。</p>
 * @method void setConfHostIncludeList(array $ConfHostIncludeList) 设置<p>主机 InstanceID 白名单，在 ConfHostType=PICK / TAG_MATCH 时使用。</p>
 * @method array getConfHostExcludeList() 获取<p>主机 InstanceID 剔除名单，在 ConfHostType=ALL 时使用。</p>
 * @method void setConfHostExcludeList(array $ConfHostExcludeList) 设置<p>主机 InstanceID 剔除名单，在 ConfHostType=ALL 时使用。</p>
 * @method boolean getEnable() 获取<p>策略启用状态。0 停用，1 启用；停用后该策略不参与扫描与统计。</p>
 * @method void setEnable(boolean $Enable) 设置<p>策略启用状态。0 停用，1 启用；停用后该策略不参与扫描与统计。</p>
 * @method string getConfClusterType() 获取<p>集群生效范围。取值：</p><ul><li>ALL：全部集群（可配合 ConfClusterExcludeList 剔除）</li><li>PICK：仅在 ConfClusterIncludeList 指定的集群生效</li><li>NONE：未配置</li></ul>
 * @method void setConfClusterType(string $ConfClusterType) 设置<p>集群生效范围。取值：</p><ul><li>ALL：全部集群（可配合 ConfClusterExcludeList 剔除）</li><li>PICK：仅在 ConfClusterIncludeList 指定的集群生效</li><li>NONE：未配置</li></ul>
 * @method array getConfClusterIncludeList() 获取<p>集群 ID 白名单，在 ConfClusterType=PICK 时使用。</p>
 * @method void setConfClusterIncludeList(array $ConfClusterIncludeList) 设置<p>集群 ID 白名单，在 ConfClusterType=PICK 时使用。</p>
 * @method array getConfClusterExcludeList() 获取<p>集群 ID 剔除名单，在 ConfClusterType=ALL 时使用。</p>
 * @method void setConfClusterExcludeList(array $ConfClusterExcludeList) 设置<p>集群 ID 剔除名单，在 ConfClusterType=ALL 时使用。</p>
 * @method array getCategoryConf() 获取<p>系统分类 / 子分类 / 检测项的命中配置（仅系统策略生效）。</p>
 * @method void setCategoryConf(array $CategoryConf) 设置<p>系统分类 / 子分类 / 检测项的命中配置（仅系统策略生效）。</p>
 * @method array getCustomItemConf() 获取<p>自定义检测项的取值配置列表（在系统检测项基础上覆盖判定值）。</p>
 * @method void setCustomItemConf(array $CustomItemConf) 设置<p>自定义检测项的取值配置列表（在系统检测项基础上覆盖判定值）。</p>
 * @method integer getAppid() 获取<p>策略所属租户 Appid。</p>
 * @method void setAppid(integer $Appid) 设置<p>策略所属租户 Appid。</p>
 * @method integer getID() 获取<p>基线策略 ID。</p>
 * @method void setID(integer $ID) 设置<p>基线策略 ID。</p>
 * @method integer getConfItemCount() 获取<p>当前策略已配置的检测项数量。</p>
 * @method void setConfItemCount(integer $ConfItemCount) 设置<p>当前策略已配置的检测项数量。</p>
 * @method integer getConfHostCount() 获取<p>当前策略命中的主机数量。</p>
 * @method void setConfHostCount(integer $ConfHostCount) 设置<p>当前策略命中的主机数量。</p>
 * @method integer getConfClusterCount() 获取<p>当前策略命中的集群数量。</p>
 * @method void setConfClusterCount(integer $ConfClusterCount) 设置<p>当前策略命中的集群数量。</p>
 * @method integer getScanningTaskID() 获取<p>策略当前进行中的扫描主任务 ID；未在扫描时为 0。</p>
 * @method void setScanningTaskID(integer $ScanningTaskID) 设置<p>策略当前进行中的扫描主任务 ID；未在扫描时为 0。</p>
 * @method string getLatestScanTime() 获取<p>最近一次扫描完成时间（含手动 / 周期）。</p>
 * @method void setLatestScanTime(string $LatestScanTime) 设置<p>最近一次扫描完成时间（含手动 / 周期）。</p>
 * @method string getLatestCycleScanTime() 获取<p>最近一次周期性扫描完成时间。</p>
 * @method void setLatestCycleScanTime(string $LatestCycleScanTime) 设置<p>最近一次周期性扫描完成时间。</p>
 * @method array getTagIDList() 获取<p>安全中心标签ID列表</p>
 * @method void setTagIDList(array $TagIDList) 设置<p>安全中心标签ID列表</p>
 * @method array getCloudTagList() 获取<p>云标签列表</p>
 * @method void setCloudTagList(array $CloudTagList) 设置<p>云标签列表</p>
 */
class BaselinePolicy extends AbstractModel
{
    /**
     * @var CycleScanConf <p>周期扫描配置（开关、间隔类型、扫描时段等）。</p>
     */
    public $CycleScanConf;

    /**
     * @var string <p>检测资产大类，区分主机基线与容器集群基线。取值：</p><ul><li>HOST：主机</li><li>CLUSTER：容器集群</li></ul>
     */
    public $CheckAssetType;

    /**
     * @var boolean <p>是否在系统新增内置检测项时自动加入本策略。true 自动加入，false 不加入。</p>
     */
    public $AutoSyncItem;

    /**
     * @var string <p>基线策略类型。取值：</p><ul><li>SYSTEM：系统策略（CSIP 内置）</li><li>SELF：用户自定义策略</li></ul>
     */
    public $Type;

    /**
     * @var string <p>策略名称（自定义策略由用户填写，系统策略为内置分类名）。</p>
     */
    public $Name;

    /**
     * @var string <p>策略描述。</p>
     */
    public $Description;

    /**
     * @var string <p>主机生效范围。取值：</p><ul><li>ALL：全部主机（可配合 ConfHostExcludeList 剔除）</li><li>TAG_MATCH：按标签匹配，配合 ConfHostTagValue</li><li>PICK：仅在 ConfHostIncludeList 指定的主机生效</li><li>NONE：未配置</li></ul>
     */
    public $ConfHostType;

    /**
     * @var array <p>主机 InstanceID 白名单，在 ConfHostType=PICK / TAG_MATCH 时使用。</p>
     */
    public $ConfHostIncludeList;

    /**
     * @var array <p>主机 InstanceID 剔除名单，在 ConfHostType=ALL 时使用。</p>
     */
    public $ConfHostExcludeList;

    /**
     * @var boolean <p>策略启用状态。0 停用，1 启用；停用后该策略不参与扫描与统计。</p>
     */
    public $Enable;

    /**
     * @var string <p>集群生效范围。取值：</p><ul><li>ALL：全部集群（可配合 ConfClusterExcludeList 剔除）</li><li>PICK：仅在 ConfClusterIncludeList 指定的集群生效</li><li>NONE：未配置</li></ul>
     */
    public $ConfClusterType;

    /**
     * @var array <p>集群 ID 白名单，在 ConfClusterType=PICK 时使用。</p>
     */
    public $ConfClusterIncludeList;

    /**
     * @var array <p>集群 ID 剔除名单，在 ConfClusterType=ALL 时使用。</p>
     */
    public $ConfClusterExcludeList;

    /**
     * @var array <p>系统分类 / 子分类 / 检测项的命中配置（仅系统策略生效）。</p>
     */
    public $CategoryConf;

    /**
     * @var array <p>自定义检测项的取值配置列表（在系统检测项基础上覆盖判定值）。</p>
     */
    public $CustomItemConf;

    /**
     * @var integer <p>策略所属租户 Appid。</p>
     */
    public $Appid;

    /**
     * @var integer <p>基线策略 ID。</p>
     */
    public $ID;

    /**
     * @var integer <p>当前策略已配置的检测项数量。</p>
     */
    public $ConfItemCount;

    /**
     * @var integer <p>当前策略命中的主机数量。</p>
     */
    public $ConfHostCount;

    /**
     * @var integer <p>当前策略命中的集群数量。</p>
     */
    public $ConfClusterCount;

    /**
     * @var integer <p>策略当前进行中的扫描主任务 ID；未在扫描时为 0。</p>
     */
    public $ScanningTaskID;

    /**
     * @var string <p>最近一次扫描完成时间（含手动 / 周期）。</p>
     */
    public $LatestScanTime;

    /**
     * @var string <p>最近一次周期性扫描完成时间。</p>
     */
    public $LatestCycleScanTime;

    /**
     * @var array <p>安全中心标签ID列表</p>
     */
    public $TagIDList;

    /**
     * @var array <p>云标签列表</p>
     */
    public $CloudTagList;

    /**
     * @param CycleScanConf $CycleScanConf <p>周期扫描配置（开关、间隔类型、扫描时段等）。</p>
     * @param string $CheckAssetType <p>检测资产大类，区分主机基线与容器集群基线。取值：</p><ul><li>HOST：主机</li><li>CLUSTER：容器集群</li></ul>
     * @param boolean $AutoSyncItem <p>是否在系统新增内置检测项时自动加入本策略。true 自动加入，false 不加入。</p>
     * @param string $Type <p>基线策略类型。取值：</p><ul><li>SYSTEM：系统策略（CSIP 内置）</li><li>SELF：用户自定义策略</li></ul>
     * @param string $Name <p>策略名称（自定义策略由用户填写，系统策略为内置分类名）。</p>
     * @param string $Description <p>策略描述。</p>
     * @param string $ConfHostType <p>主机生效范围。取值：</p><ul><li>ALL：全部主机（可配合 ConfHostExcludeList 剔除）</li><li>TAG_MATCH：按标签匹配，配合 ConfHostTagValue</li><li>PICK：仅在 ConfHostIncludeList 指定的主机生效</li><li>NONE：未配置</li></ul>
     * @param array $ConfHostIncludeList <p>主机 InstanceID 白名单，在 ConfHostType=PICK / TAG_MATCH 时使用。</p>
     * @param array $ConfHostExcludeList <p>主机 InstanceID 剔除名单，在 ConfHostType=ALL 时使用。</p>
     * @param boolean $Enable <p>策略启用状态。0 停用，1 启用；停用后该策略不参与扫描与统计。</p>
     * @param string $ConfClusterType <p>集群生效范围。取值：</p><ul><li>ALL：全部集群（可配合 ConfClusterExcludeList 剔除）</li><li>PICK：仅在 ConfClusterIncludeList 指定的集群生效</li><li>NONE：未配置</li></ul>
     * @param array $ConfClusterIncludeList <p>集群 ID 白名单，在 ConfClusterType=PICK 时使用。</p>
     * @param array $ConfClusterExcludeList <p>集群 ID 剔除名单，在 ConfClusterType=ALL 时使用。</p>
     * @param array $CategoryConf <p>系统分类 / 子分类 / 检测项的命中配置（仅系统策略生效）。</p>
     * @param array $CustomItemConf <p>自定义检测项的取值配置列表（在系统检测项基础上覆盖判定值）。</p>
     * @param integer $Appid <p>策略所属租户 Appid。</p>
     * @param integer $ID <p>基线策略 ID。</p>
     * @param integer $ConfItemCount <p>当前策略已配置的检测项数量。</p>
     * @param integer $ConfHostCount <p>当前策略命中的主机数量。</p>
     * @param integer $ConfClusterCount <p>当前策略命中的集群数量。</p>
     * @param integer $ScanningTaskID <p>策略当前进行中的扫描主任务 ID；未在扫描时为 0。</p>
     * @param string $LatestScanTime <p>最近一次扫描完成时间（含手动 / 周期）。</p>
     * @param string $LatestCycleScanTime <p>最近一次周期性扫描完成时间。</p>
     * @param array $TagIDList <p>安全中心标签ID列表</p>
     * @param array $CloudTagList <p>云标签列表</p>
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
        if (array_key_exists("CycleScanConf",$param) and $param["CycleScanConf"] !== null) {
            $this->CycleScanConf = new CycleScanConf();
            $this->CycleScanConf->deserialize($param["CycleScanConf"]);
        }

        if (array_key_exists("CheckAssetType",$param) and $param["CheckAssetType"] !== null) {
            $this->CheckAssetType = $param["CheckAssetType"];
        }

        if (array_key_exists("AutoSyncItem",$param) and $param["AutoSyncItem"] !== null) {
            $this->AutoSyncItem = $param["AutoSyncItem"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("ConfHostType",$param) and $param["ConfHostType"] !== null) {
            $this->ConfHostType = $param["ConfHostType"];
        }

        if (array_key_exists("ConfHostIncludeList",$param) and $param["ConfHostIncludeList"] !== null) {
            $this->ConfHostIncludeList = $param["ConfHostIncludeList"];
        }

        if (array_key_exists("ConfHostExcludeList",$param) and $param["ConfHostExcludeList"] !== null) {
            $this->ConfHostExcludeList = $param["ConfHostExcludeList"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("ConfClusterType",$param) and $param["ConfClusterType"] !== null) {
            $this->ConfClusterType = $param["ConfClusterType"];
        }

        if (array_key_exists("ConfClusterIncludeList",$param) and $param["ConfClusterIncludeList"] !== null) {
            $this->ConfClusterIncludeList = $param["ConfClusterIncludeList"];
        }

        if (array_key_exists("ConfClusterExcludeList",$param) and $param["ConfClusterExcludeList"] !== null) {
            $this->ConfClusterExcludeList = $param["ConfClusterExcludeList"];
        }

        if (array_key_exists("CategoryConf",$param) and $param["CategoryConf"] !== null) {
            $this->CategoryConf = [];
            foreach ($param["CategoryConf"] as $key => $value){
                $obj = new BaselinePolicySystemCategoryConf();
                $obj->deserialize($value);
                array_push($this->CategoryConf, $obj);
            }
        }

        if (array_key_exists("CustomItemConf",$param) and $param["CustomItemConf"] !== null) {
            $this->CustomItemConf = [];
            foreach ($param["CustomItemConf"] as $key => $value){
                $obj = new BaselineCustomItemConf();
                $obj->deserialize($value);
                array_push($this->CustomItemConf, $obj);
            }
        }

        if (array_key_exists("Appid",$param) and $param["Appid"] !== null) {
            $this->Appid = $param["Appid"];
        }

        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("ConfItemCount",$param) and $param["ConfItemCount"] !== null) {
            $this->ConfItemCount = $param["ConfItemCount"];
        }

        if (array_key_exists("ConfHostCount",$param) and $param["ConfHostCount"] !== null) {
            $this->ConfHostCount = $param["ConfHostCount"];
        }

        if (array_key_exists("ConfClusterCount",$param) and $param["ConfClusterCount"] !== null) {
            $this->ConfClusterCount = $param["ConfClusterCount"];
        }

        if (array_key_exists("ScanningTaskID",$param) and $param["ScanningTaskID"] !== null) {
            $this->ScanningTaskID = $param["ScanningTaskID"];
        }

        if (array_key_exists("LatestScanTime",$param) and $param["LatestScanTime"] !== null) {
            $this->LatestScanTime = $param["LatestScanTime"];
        }

        if (array_key_exists("LatestCycleScanTime",$param) and $param["LatestCycleScanTime"] !== null) {
            $this->LatestCycleScanTime = $param["LatestCycleScanTime"];
        }

        if (array_key_exists("TagIDList",$param) and $param["TagIDList"] !== null) {
            $this->TagIDList = $param["TagIDList"];
        }

        if (array_key_exists("CloudTagList",$param) and $param["CloudTagList"] !== null) {
            $this->CloudTagList = $param["CloudTagList"];
        }
    }
}
