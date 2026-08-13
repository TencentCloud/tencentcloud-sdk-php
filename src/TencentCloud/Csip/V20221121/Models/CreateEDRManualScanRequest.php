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
 * CreateEDRManualScan请求参数结构体
 *
 * @method string getAssetSelectionType() 获取<p>资产选择方式：all-全部资产/tag-按标签选择(仅主机)/direct-直接选择</p>
 * @method void setAssetSelectionType(string $AssetSelectionType) 设置<p>资产选择方式：all-全部资产/tag-按标签选择(仅主机)/direct-直接选择</p>
 * @method string getScanType() 获取<p>检测模式：full-全盘检测/quick-快速检测/include-仅检测指定路径/exclude-排除指定路径</p>
 * @method void setScanType(string $ScanType) 设置<p>检测模式：full-全盘检测/quick-快速检测/include-仅检测指定路径/exclude-排除指定路径</p>
 * @method array getMemberId() 获取<p>集团账号的成员id</p>
 * @method void setMemberId(array $MemberId) 设置<p>集团账号的成员id</p>
 * @method array getInstanceIDsWithAppId() 获取<p>直接选择的主机列表（AssetSelectionType=direct或all时使用）</p>
 * @method void setInstanceIDsWithAppId(array $InstanceIDsWithAppId) 设置<p>直接选择的主机列表（AssetSelectionType=direct或all时使用）</p>
 * @method array getExcludeInstanceIDsWithAppId() 获取<p>剔除的主机列表（AssetSelectionType=all时使用）</p>
 * @method void setExcludeInstanceIDsWithAppId(array $ExcludeInstanceIDsWithAppId) 设置<p>剔除的主机列表（AssetSelectionType=all时使用）</p>
 * @method array getTagIds() 获取<p>主机对应的标签ID</p>
 * @method void setTagIds(array $TagIds) 设置<p>主机对应的标签ID</p>
 * @method array getClusterIDsWithAppId() 获取<p>直接选择的集群列表</p>
 * @method void setClusterIDsWithAppId(array $ClusterIDsWithAppId) 设置<p>直接选择的集群列表</p>
 * @method array getExcludeClusterIDsWithAppId() 获取<p>剔除的集群列表（AssetSelectionType=all时使用）</p>
 * @method void setExcludeClusterIDsWithAppId(array $ExcludeClusterIDsWithAppId) 设置<p>剔除的集群列表（AssetSelectionType=all时使用）</p>
 * @method array getCustomPaths() 获取<p>自选路径列表（ScanType=include或exclude时必填，最多100条）</p>
 * @method void setCustomPaths(array $CustomPaths) 设置<p>自选路径列表（ScanType=include或exclude时必填，最多100条）</p>
 * @method integer getTimeout() 获取<p>超时时间（秒），上限7200</p>
 * @method void setTimeout(integer $Timeout) 设置<p>超时时间（秒），上限7200</p>
 * @method integer getEnableMemShellScan() 获取<p>是否开启深度检测：0-否/1-是</p>
 * @method void setEnableMemShellScan(integer $EnableMemShellScan) 设置<p>是否开启深度检测：0-否/1-是</p>
 */
class CreateEDRManualScanRequest extends AbstractModel
{
    /**
     * @var string <p>资产选择方式：all-全部资产/tag-按标签选择(仅主机)/direct-直接选择</p>
     */
    public $AssetSelectionType;

    /**
     * @var string <p>检测模式：full-全盘检测/quick-快速检测/include-仅检测指定路径/exclude-排除指定路径</p>
     */
    public $ScanType;

    /**
     * @var array <p>集团账号的成员id</p>
     */
    public $MemberId;

    /**
     * @var array <p>直接选择的主机列表（AssetSelectionType=direct或all时使用）</p>
     */
    public $InstanceIDsWithAppId;

    /**
     * @var array <p>剔除的主机列表（AssetSelectionType=all时使用）</p>
     */
    public $ExcludeInstanceIDsWithAppId;

    /**
     * @var array <p>主机对应的标签ID</p>
     */
    public $TagIds;

    /**
     * @var array <p>直接选择的集群列表</p>
     */
    public $ClusterIDsWithAppId;

    /**
     * @var array <p>剔除的集群列表（AssetSelectionType=all时使用）</p>
     */
    public $ExcludeClusterIDsWithAppId;

    /**
     * @var array <p>自选路径列表（ScanType=include或exclude时必填，最多100条）</p>
     */
    public $CustomPaths;

    /**
     * @var integer <p>超时时间（秒），上限7200</p>
     */
    public $Timeout;

    /**
     * @var integer <p>是否开启深度检测：0-否/1-是</p>
     */
    public $EnableMemShellScan;

    /**
     * @param string $AssetSelectionType <p>资产选择方式：all-全部资产/tag-按标签选择(仅主机)/direct-直接选择</p>
     * @param string $ScanType <p>检测模式：full-全盘检测/quick-快速检测/include-仅检测指定路径/exclude-排除指定路径</p>
     * @param array $MemberId <p>集团账号的成员id</p>
     * @param array $InstanceIDsWithAppId <p>直接选择的主机列表（AssetSelectionType=direct或all时使用）</p>
     * @param array $ExcludeInstanceIDsWithAppId <p>剔除的主机列表（AssetSelectionType=all时使用）</p>
     * @param array $TagIds <p>主机对应的标签ID</p>
     * @param array $ClusterIDsWithAppId <p>直接选择的集群列表</p>
     * @param array $ExcludeClusterIDsWithAppId <p>剔除的集群列表（AssetSelectionType=all时使用）</p>
     * @param array $CustomPaths <p>自选路径列表（ScanType=include或exclude时必填，最多100条）</p>
     * @param integer $Timeout <p>超时时间（秒），上限7200</p>
     * @param integer $EnableMemShellScan <p>是否开启深度检测：0-否/1-是</p>
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
        if (array_key_exists("AssetSelectionType",$param) and $param["AssetSelectionType"] !== null) {
            $this->AssetSelectionType = $param["AssetSelectionType"];
        }

        if (array_key_exists("ScanType",$param) and $param["ScanType"] !== null) {
            $this->ScanType = $param["ScanType"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("InstanceIDsWithAppId",$param) and $param["InstanceIDsWithAppId"] !== null) {
            $this->InstanceIDsWithAppId = [];
            foreach ($param["InstanceIDsWithAppId"] as $key => $value){
                $obj = new InstanceIDWithAppIdItem();
                $obj->deserialize($value);
                array_push($this->InstanceIDsWithAppId, $obj);
            }
        }

        if (array_key_exists("ExcludeInstanceIDsWithAppId",$param) and $param["ExcludeInstanceIDsWithAppId"] !== null) {
            $this->ExcludeInstanceIDsWithAppId = [];
            foreach ($param["ExcludeInstanceIDsWithAppId"] as $key => $value){
                $obj = new InstanceIDWithAppIdItem();
                $obj->deserialize($value);
                array_push($this->ExcludeInstanceIDsWithAppId, $obj);
            }
        }

        if (array_key_exists("TagIds",$param) and $param["TagIds"] !== null) {
            $this->TagIds = $param["TagIds"];
        }

        if (array_key_exists("ClusterIDsWithAppId",$param) and $param["ClusterIDsWithAppId"] !== null) {
            $this->ClusterIDsWithAppId = [];
            foreach ($param["ClusterIDsWithAppId"] as $key => $value){
                $obj = new ClusterWithAppIdItem();
                $obj->deserialize($value);
                array_push($this->ClusterIDsWithAppId, $obj);
            }
        }

        if (array_key_exists("ExcludeClusterIDsWithAppId",$param) and $param["ExcludeClusterIDsWithAppId"] !== null) {
            $this->ExcludeClusterIDsWithAppId = [];
            foreach ($param["ExcludeClusterIDsWithAppId"] as $key => $value){
                $obj = new ClusterWithAppIdItem();
                $obj->deserialize($value);
                array_push($this->ExcludeClusterIDsWithAppId, $obj);
            }
        }

        if (array_key_exists("CustomPaths",$param) and $param["CustomPaths"] !== null) {
            $this->CustomPaths = $param["CustomPaths"];
        }

        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            $this->Timeout = $param["Timeout"];
        }

        if (array_key_exists("EnableMemShellScan",$param) and $param["EnableMemShellScan"] !== null) {
            $this->EnableMemShellScan = $param["EnableMemShellScan"];
        }
    }
}
