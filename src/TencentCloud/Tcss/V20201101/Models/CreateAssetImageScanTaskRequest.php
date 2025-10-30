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
 * @method boolean getAll() 获取是否扫描全部镜像；全部镜像，镜像列表和根据过滤条件筛选三选一。
 * @method void setAll(boolean $All) 设置是否扫描全部镜像；全部镜像，镜像列表和根据过滤条件筛选三选一。
 * @method array getImages() 获取需要扫描的镜像列表；全部镜像，镜像列表和根据过滤条件筛选三选一。
 * @method void setImages(array $Images) 设置需要扫描的镜像列表；全部镜像，镜像列表和根据过滤条件筛选三选一。
 * @method boolean getScanVul() 获取扫描漏洞；漏洞，木马和风险需选其一
 * @method void setScanVul(boolean $ScanVul) 设置扫描漏洞；漏洞，木马和风险需选其一
 * @method boolean getScanVirus() 获取扫描木马；漏洞，木马和风险需选其一
 * @method void setScanVirus(boolean $ScanVirus) 设置扫描木马；漏洞，木马和风险需选其一
 * @method boolean getScanRisk() 获取扫描风险；漏洞，木马和风险需选其一
 * @method void setScanRisk(boolean $ScanRisk) 设置扫描风险；漏洞，木马和风险需选其一
 * @method array getFilters() 获取根据过滤条件筛选出镜像；全部镜像，镜像列表和根据过滤条件筛选三选一。
 * @method void setFilters(array $Filters) 设置根据过滤条件筛选出镜像；全部镜像，镜像列表和根据过滤条件筛选三选一。
 * @method array getExcludeImageIds() 获取根据过滤条件筛选出镜像，再排除个别镜像
 * @method void setExcludeImageIds(array $ExcludeImageIds) 设置根据过滤条件筛选出镜像，再排除个别镜像
 * @method boolean getContainerRunning() 获取镜像是否存在运行中的容器
 * @method void setContainerRunning(boolean $ContainerRunning) 设置镜像是否存在运行中的容器
 * @method integer getScanScope() 获取扫描范围 0 全部授权镜像，1自选镜像，2 推荐扫描
 * @method void setScanScope(integer $ScanScope) 设置扫描范围 0 全部授权镜像，1自选镜像，2 推荐扫描
 * @method integer getTimeout() 获取任务超时时长单位秒，默认1小时
 * @method void setTimeout(integer $Timeout) 设置任务超时时长单位秒，默认1小时
 * @method boolean getIsOneClickScanningTask() 获取一键扫描任务。默认false表示非一键扫描，true一键扫描
 * @method void setIsOneClickScanningTask(boolean $IsOneClickScanningTask) 设置一键扫描任务。默认false表示非一键扫描，true一键扫描
 */
class CreateAssetImageScanTaskRequest extends AbstractModel
{
    /**
     * @var boolean 是否扫描全部镜像；全部镜像，镜像列表和根据过滤条件筛选三选一。
     * @deprecated
     */
    public $All;

    /**
     * @var array 需要扫描的镜像列表；全部镜像，镜像列表和根据过滤条件筛选三选一。
     */
    public $Images;

    /**
     * @var boolean 扫描漏洞；漏洞，木马和风险需选其一
     */
    public $ScanVul;

    /**
     * @var boolean 扫描木马；漏洞，木马和风险需选其一
     */
    public $ScanVirus;

    /**
     * @var boolean 扫描风险；漏洞，木马和风险需选其一
     */
    public $ScanRisk;

    /**
     * @var array 根据过滤条件筛选出镜像；全部镜像，镜像列表和根据过滤条件筛选三选一。
     */
    public $Filters;

    /**
     * @var array 根据过滤条件筛选出镜像，再排除个别镜像
     */
    public $ExcludeImageIds;

    /**
     * @var boolean 镜像是否存在运行中的容器
     */
    public $ContainerRunning;

    /**
     * @var integer 扫描范围 0 全部授权镜像，1自选镜像，2 推荐扫描
     */
    public $ScanScope;

    /**
     * @var integer 任务超时时长单位秒，默认1小时
     */
    public $Timeout;

    /**
     * @var boolean 一键扫描任务。默认false表示非一键扫描，true一键扫描
     */
    public $IsOneClickScanningTask;

    /**
     * @param boolean $All 是否扫描全部镜像；全部镜像，镜像列表和根据过滤条件筛选三选一。
     * @param array $Images 需要扫描的镜像列表；全部镜像，镜像列表和根据过滤条件筛选三选一。
     * @param boolean $ScanVul 扫描漏洞；漏洞，木马和风险需选其一
     * @param boolean $ScanVirus 扫描木马；漏洞，木马和风险需选其一
     * @param boolean $ScanRisk 扫描风险；漏洞，木马和风险需选其一
     * @param array $Filters 根据过滤条件筛选出镜像；全部镜像，镜像列表和根据过滤条件筛选三选一。
     * @param array $ExcludeImageIds 根据过滤条件筛选出镜像，再排除个别镜像
     * @param boolean $ContainerRunning 镜像是否存在运行中的容器
     * @param integer $ScanScope 扫描范围 0 全部授权镜像，1自选镜像，2 推荐扫描
     * @param integer $Timeout 任务超时时长单位秒，默认1小时
     * @param boolean $IsOneClickScanningTask 一键扫描任务。默认false表示非一键扫描，true一键扫描
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
    }
}
