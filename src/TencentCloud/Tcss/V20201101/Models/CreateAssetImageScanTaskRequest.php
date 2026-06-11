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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateAssetImageScanTask请求参数结构体
 *
 * @method boolean getAll() 获取<p>是否扫描全部镜像；全部镜像，镜像列表和根据过滤条件筛选三选一。</p>
 * @method void setAll(boolean $All) 设置<p>是否扫描全部镜像；全部镜像，镜像列表和根据过滤条件筛选三选一。</p>
 * @method array getImages() 获取<p>需要扫描的镜像列表；全部镜像，镜像列表和根据过滤条件筛选三选一。</p>
 * @method void setImages(array $Images) 设置<p>需要扫描的镜像列表；全部镜像，镜像列表和根据过滤条件筛选三选一。</p>
 * @method boolean getScanVul() 获取<p>扫描漏洞；漏洞，木马和风险需选其一</p>
 * @method void setScanVul(boolean $ScanVul) 设置<p>扫描漏洞；漏洞，木马和风险需选其一</p>
 * @method boolean getScanVirus() 获取<p>扫描木马；漏洞，木马和风险需选其一</p>
 * @method void setScanVirus(boolean $ScanVirus) 设置<p>扫描木马；漏洞，木马和风险需选其一</p>
 * @method boolean getScanRisk() 获取<p>扫描风险；漏洞，木马和风险需选其一</p>
 * @method void setScanRisk(boolean $ScanRisk) 设置<p>扫描风险；漏洞，木马和风险需选其一</p>
 * @method array getFilters() 获取<p>根据过滤条件筛选出镜像；全部镜像，镜像列表和根据过滤条件筛选三选一。</p>
 * @method void setFilters(array $Filters) 设置<p>根据过滤条件筛选出镜像；全部镜像，镜像列表和根据过滤条件筛选三选一。</p>
 * @method array getExcludeImageIds() 获取<p>根据过滤条件筛选出镜像，再排除个别镜像</p>
 * @method void setExcludeImageIds(array $ExcludeImageIds) 设置<p>根据过滤条件筛选出镜像，再排除个别镜像</p>
 * @method boolean getContainerRunning() 获取<p>镜像是否存在运行中的容器</p>
 * @method void setContainerRunning(boolean $ContainerRunning) 设置<p>镜像是否存在运行中的容器</p>
 * @method integer getScanScope() 获取<p>扫描范围 0 全部授权镜像，1自选镜像，2 推荐扫描 3:集群扫描</p><p>取值范围：[0, 3]</p><p>默认值：0</p>
 * @method void setScanScope(integer $ScanScope) 设置<p>扫描范围 0 全部授权镜像，1自选镜像，2 推荐扫描 3:集群扫描</p><p>取值范围：[0, 3]</p><p>默认值：0</p>
 * @method integer getTimeout() 获取<p>任务超时时长单位秒，默认1小时</p>
 * @method void setTimeout(integer $Timeout) 设置<p>任务超时时长单位秒，默认1小时</p>
 * @method boolean getIsOneClickScanningTask() 获取<p>一键扫描任务。默认false表示非一键扫描，true一键扫描</p>
 * @method void setIsOneClickScanningTask(boolean $IsOneClickScanningTask) 设置<p>一键扫描任务。默认false表示非一键扫描，true一键扫描</p>
 * @method array getClusterIDs() 获取<p>集群id</p>
 * @method void setClusterIDs(array $ClusterIDs) 设置<p>集群id</p>
 */
class CreateAssetImageScanTaskRequest extends AbstractModel
{
    /**
     * @var boolean <p>是否扫描全部镜像；全部镜像，镜像列表和根据过滤条件筛选三选一。</p>
     * @deprecated
     */
    public $All;

    /**
     * @var array <p>需要扫描的镜像列表；全部镜像，镜像列表和根据过滤条件筛选三选一。</p>
     */
    public $Images;

    /**
     * @var boolean <p>扫描漏洞；漏洞，木马和风险需选其一</p>
     */
    public $ScanVul;

    /**
     * @var boolean <p>扫描木马；漏洞，木马和风险需选其一</p>
     */
    public $ScanVirus;

    /**
     * @var boolean <p>扫描风险；漏洞，木马和风险需选其一</p>
     */
    public $ScanRisk;

    /**
     * @var array <p>根据过滤条件筛选出镜像；全部镜像，镜像列表和根据过滤条件筛选三选一。</p>
     */
    public $Filters;

    /**
     * @var array <p>根据过滤条件筛选出镜像，再排除个别镜像</p>
     */
    public $ExcludeImageIds;

    /**
     * @var boolean <p>镜像是否存在运行中的容器</p>
     */
    public $ContainerRunning;

    /**
     * @var integer <p>扫描范围 0 全部授权镜像，1自选镜像，2 推荐扫描 3:集群扫描</p><p>取值范围：[0, 3]</p><p>默认值：0</p>
     */
    public $ScanScope;

    /**
     * @var integer <p>任务超时时长单位秒，默认1小时</p>
     */
    public $Timeout;

    /**
     * @var boolean <p>一键扫描任务。默认false表示非一键扫描，true一键扫描</p>
     */
    public $IsOneClickScanningTask;

    /**
     * @var array <p>集群id</p>
     */
    public $ClusterIDs;

    /**
     * @param boolean $All <p>是否扫描全部镜像；全部镜像，镜像列表和根据过滤条件筛选三选一。</p>
     * @param array $Images <p>需要扫描的镜像列表；全部镜像，镜像列表和根据过滤条件筛选三选一。</p>
     * @param boolean $ScanVul <p>扫描漏洞；漏洞，木马和风险需选其一</p>
     * @param boolean $ScanVirus <p>扫描木马；漏洞，木马和风险需选其一</p>
     * @param boolean $ScanRisk <p>扫描风险；漏洞，木马和风险需选其一</p>
     * @param array $Filters <p>根据过滤条件筛选出镜像；全部镜像，镜像列表和根据过滤条件筛选三选一。</p>
     * @param array $ExcludeImageIds <p>根据过滤条件筛选出镜像，再排除个别镜像</p>
     * @param boolean $ContainerRunning <p>镜像是否存在运行中的容器</p>
     * @param integer $ScanScope <p>扫描范围 0 全部授权镜像，1自选镜像，2 推荐扫描 3:集群扫描</p><p>取值范围：[0, 3]</p><p>默认值：0</p>
     * @param integer $Timeout <p>任务超时时长单位秒，默认1小时</p>
     * @param boolean $IsOneClickScanningTask <p>一键扫描任务。默认false表示非一键扫描，true一键扫描</p>
     * @param array $ClusterIDs <p>集群id</p>
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
        if (array_key_exists("All",$param) and $param["All"] !== null) {
            $this->All = $param["All"];
        }

        if (array_key_exists("Images",$param) and $param["Images"] !== null) {
            $this->Images = $param["Images"];
        }

        if (array_key_exists("ScanVul",$param) and $param["ScanVul"] !== null) {
            $this->ScanVul = $param["ScanVul"];
        }

        if (array_key_exists("ScanVirus",$param) and $param["ScanVirus"] !== null) {
            $this->ScanVirus = $param["ScanVirus"];
        }

        if (array_key_exists("ScanRisk",$param) and $param["ScanRisk"] !== null) {
            $this->ScanRisk = $param["ScanRisk"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new AssetFilters();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("ExcludeImageIds",$param) and $param["ExcludeImageIds"] !== null) {
            $this->ExcludeImageIds = $param["ExcludeImageIds"];
        }

        if (array_key_exists("ContainerRunning",$param) and $param["ContainerRunning"] !== null) {
            $this->ContainerRunning = $param["ContainerRunning"];
        }

        if (array_key_exists("ScanScope",$param) and $param["ScanScope"] !== null) {
            $this->ScanScope = $param["ScanScope"];
        }

        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            $this->Timeout = $param["Timeout"];
        }

        if (array_key_exists("IsOneClickScanningTask",$param) and $param["IsOneClickScanningTask"] !== null) {
            $this->IsOneClickScanningTask = $param["IsOneClickScanningTask"];
        }

        if (array_key_exists("ClusterIDs",$param) and $param["ClusterIDs"] !== null) {
            $this->ClusterIDs = $param["ClusterIDs"];
        }
    }
}
