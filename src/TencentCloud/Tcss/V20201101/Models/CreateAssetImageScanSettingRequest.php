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
 * CreateAssetImageScanSetting请求参数结构体
 *
 * @method boolean getEnable() 获取<p>开关</p>
 * @method void setEnable(boolean $Enable) 设置<p>开关</p>
 * @method string getScanTime() 获取<p>扫描开始时间<br>01:00 时分</p>
 * @method void setScanTime(string $ScanTime) 设置<p>扫描开始时间<br>01:00 时分</p>
 * @method integer getScanPeriod() 获取<p>扫描周期</p>
 * @method void setScanPeriod(integer $ScanPeriod) 设置<p>扫描周期</p>
 * @method boolean getScanVirus() 获取<p>扫描木马</p>
 * @method void setScanVirus(boolean $ScanVirus) 设置<p>扫描木马</p>
 * @method boolean getScanRisk() 获取<p>扫描敏感信息</p>
 * @method void setScanRisk(boolean $ScanRisk) 设置<p>扫描敏感信息</p>
 * @method boolean getScanVul() 获取<p>扫描漏洞</p>
 * @method void setScanVul(boolean $ScanVul) 设置<p>扫描漏洞</p>
 * @method boolean getAll() 获取<p>全部镜像</p>
 * @method void setAll(boolean $All) 设置<p>全部镜像</p>
 * @method array getImages() 获取<p>自定义镜像</p>
 * @method void setImages(array $Images) 设置<p>自定义镜像</p>
 * @method boolean getContainerRunning() 获取<p>镜像是否存在运行中的容器</p>
 * @method void setContainerRunning(boolean $ContainerRunning) 设置<p>镜像是否存在运行中的容器</p>
 * @method integer getScanScope() 获取<p>扫描范围 0 全部授权镜像，1自选镜像，2 推荐扫描 , 3:集群筛选扫描</p><p>取值范围：[0, 3]</p><p>默认值：0</p>
 * @method void setScanScope(integer $ScanScope) 设置<p>扫描范围 0 全部授权镜像，1自选镜像，2 推荐扫描 , 3:集群筛选扫描</p><p>取值范围：[0, 3]</p><p>默认值：0</p>
 * @method string getScanEndTime() 获取<p>扫描结束时间<br>02:00 时分</p>
 * @method void setScanEndTime(string $ScanEndTime) 设置<p>扫描结束时间<br>02:00 时分</p>
 * @method array getExcludeImages() 获取<p>排除扫描的镜像</p>
 * @method void setExcludeImages(array $ExcludeImages) 设置<p>排除扫描的镜像</p>
 * @method array getClusterIDs() 获取<p>集群id</p>
 * @method void setClusterIDs(array $ClusterIDs) 设置<p>集群id</p>
 */
class CreateAssetImageScanSettingRequest extends AbstractModel
{
    /**
     * @var boolean <p>开关</p>
     */
    public $Enable;

    /**
     * @var string <p>扫描开始时间<br>01:00 时分</p>
     */
    public $ScanTime;

    /**
     * @var integer <p>扫描周期</p>
     */
    public $ScanPeriod;

    /**
     * @var boolean <p>扫描木马</p>
     */
    public $ScanVirus;

    /**
     * @var boolean <p>扫描敏感信息</p>
     */
    public $ScanRisk;

    /**
     * @var boolean <p>扫描漏洞</p>
     */
    public $ScanVul;

    /**
     * @var boolean <p>全部镜像</p>
     * @deprecated
     */
    public $All;

    /**
     * @var array <p>自定义镜像</p>
     */
    public $Images;

    /**
     * @var boolean <p>镜像是否存在运行中的容器</p>
     */
    public $ContainerRunning;

    /**
     * @var integer <p>扫描范围 0 全部授权镜像，1自选镜像，2 推荐扫描 , 3:集群筛选扫描</p><p>取值范围：[0, 3]</p><p>默认值：0</p>
     */
    public $ScanScope;

    /**
     * @var string <p>扫描结束时间<br>02:00 时分</p>
     */
    public $ScanEndTime;

    /**
     * @var array <p>排除扫描的镜像</p>
     */
    public $ExcludeImages;

    /**
     * @var array <p>集群id</p>
     */
    public $ClusterIDs;

    /**
     * @param boolean $Enable <p>开关</p>
     * @param string $ScanTime <p>扫描开始时间<br>01:00 时分</p>
     * @param integer $ScanPeriod <p>扫描周期</p>
     * @param boolean $ScanVirus <p>扫描木马</p>
     * @param boolean $ScanRisk <p>扫描敏感信息</p>
     * @param boolean $ScanVul <p>扫描漏洞</p>
     * @param boolean $All <p>全部镜像</p>
     * @param array $Images <p>自定义镜像</p>
     * @param boolean $ContainerRunning <p>镜像是否存在运行中的容器</p>
     * @param integer $ScanScope <p>扫描范围 0 全部授权镜像，1自选镜像，2 推荐扫描 , 3:集群筛选扫描</p><p>取值范围：[0, 3]</p><p>默认值：0</p>
     * @param string $ScanEndTime <p>扫描结束时间<br>02:00 时分</p>
     * @param array $ExcludeImages <p>排除扫描的镜像</p>
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
        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("ScanTime",$param) and $param["ScanTime"] !== null) {
            $this->ScanTime = $param["ScanTime"];
        }

        if (array_key_exists("ScanPeriod",$param) and $param["ScanPeriod"] !== null) {
            $this->ScanPeriod = $param["ScanPeriod"];
        }

        if (array_key_exists("ScanVirus",$param) and $param["ScanVirus"] !== null) {
            $this->ScanVirus = $param["ScanVirus"];
        }

        if (array_key_exists("ScanRisk",$param) and $param["ScanRisk"] !== null) {
            $this->ScanRisk = $param["ScanRisk"];
        }

        if (array_key_exists("ScanVul",$param) and $param["ScanVul"] !== null) {
            $this->ScanVul = $param["ScanVul"];
        }

        if (array_key_exists("All",$param) and $param["All"] !== null) {
            $this->All = $param["All"];
        }

        if (array_key_exists("Images",$param) and $param["Images"] !== null) {
            $this->Images = $param["Images"];
        }

        if (array_key_exists("ContainerRunning",$param) and $param["ContainerRunning"] !== null) {
            $this->ContainerRunning = $param["ContainerRunning"];
        }

        if (array_key_exists("ScanScope",$param) and $param["ScanScope"] !== null) {
            $this->ScanScope = $param["ScanScope"];
        }

        if (array_key_exists("ScanEndTime",$param) and $param["ScanEndTime"] !== null) {
            $this->ScanEndTime = $param["ScanEndTime"];
        }

        if (array_key_exists("ExcludeImages",$param) and $param["ExcludeImages"] !== null) {
            $this->ExcludeImages = $param["ExcludeImages"];
        }

        if (array_key_exists("ClusterIDs",$param) and $param["ClusterIDs"] !== null) {
            $this->ClusterIDs = $param["ClusterIDs"];
        }
    }
}
