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
 * DescribeImageRegistryTimingScanTask返回参数结构体
 *
 * @method boolean getEnable() 获取定时扫描开关
 * @method void setEnable(boolean $Enable) 设置定时扫描开关
 * @method string getScanTime() 获取定时任务扫描时间
 * @method void setScanTime(string $ScanTime) 设置定时任务扫描时间
 * @method integer getScanPeriod() 获取定时扫描间隔
 * @method void setScanPeriod(integer $ScanPeriod) 设置定时扫描间隔
 * @method array getScanType() 获取扫描类型数组
 * @method void setScanType(array $ScanType) 设置扫描类型数组
 * @method boolean getAll() 获取扫描全部镜像
 * @method void setAll(boolean $All) 设置扫描全部镜像
 * @method array getImages() 获取自定义扫描镜像
 * @method void setImages(array $Images) 设置自定义扫描镜像
 * @method array getId() 获取自动以扫描镜像Id
 * @method void setId(array $Id) 设置自动以扫描镜像Id
 * @method boolean getLatest() 获取是否扫描最新版本镜像
 * @method void setLatest(boolean $Latest) 设置是否扫描最新版本镜像
 * @method string getScanEndTime() 获取扫描结束时间
 * @method void setScanEndTime(string $ScanEndTime) 设置扫描结束时间
 * @method array getRegistryType() 获取仓库类型 tcr,ccr,harbor	
 * @method void setRegistryType(array $RegistryType) 设置仓库类型 tcr,ccr,harbor	
 * @method boolean getContainerRunning() 获取是否存在运行中的容器	
 * @method void setContainerRunning(boolean $ContainerRunning) 设置是否存在运行中的容器	
 * @method integer getScanScope() 获取扫描范围 0全部镜像，1自选镜像，2推荐扫描镜像
 * @method void setScanScope(integer $ScanScope) 设置扫描范围 0全部镜像，1自选镜像，2推荐扫描镜像
 * @method array getNamespace() 获取命名空间
 * @method void setNamespace(array $Namespace) 设置命名空间
 * @method array getExcludeImageAssetIds() 获取排除的镜像资产id
 * @method void setExcludeImageAssetIds(array $ExcludeImageAssetIds) 设置排除的镜像资产id
 * @method string getLastScanTime() 获取最近扫描时间
 * @method void setLastScanTime(string $LastScanTime) 设置最近扫描时间
 * @method string getScanResult() 获取扫描结果(Success|InsufficientLicense|ImageNeedIsEmpty|InternalError)
 * @method void setScanResult(string $ScanResult) 设置扫描结果(Success|InsufficientLicense|ImageNeedIsEmpty|InternalError)
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeImageRegistryTimingScanTaskResponse extends AbstractModel
{
    /**
     * @var boolean 定时扫描开关
     */
    public $Enable;

    /**
     * @var string 定时任务扫描时间
     */
    public $ScanTime;

    /**
     * @var integer 定时扫描间隔
     */
    public $ScanPeriod;

    /**
     * @var array 扫描类型数组
     */
    public $ScanType;

    /**
     * @var boolean 扫描全部镜像
     * @deprecated
     */
    public $All;

    /**
     * @var array 自定义扫描镜像
     */
    public $Images;

    /**
     * @var array 自动以扫描镜像Id
     */
    public $Id;

    /**
     * @var boolean 是否扫描最新版本镜像
     */
    public $Latest;

    /**
     * @var string 扫描结束时间
     */
    public $ScanEndTime;

    /**
     * @var array 仓库类型 tcr,ccr,harbor	
     */
    public $RegistryType;

    /**
     * @var boolean 是否存在运行中的容器	
     */
    public $ContainerRunning;

    /**
     * @var integer 扫描范围 0全部镜像，1自选镜像，2推荐扫描镜像
     */
    public $ScanScope;

    /**
     * @var array 命名空间
     */
    public $Namespace;

    /**
     * @var array 排除的镜像资产id
     */
    public $ExcludeImageAssetIds;

    /**
     * @var string 最近扫描时间
     */
    public $LastScanTime;

    /**
     * @var string 扫描结果(Success|InsufficientLicense|ImageNeedIsEmpty|InternalError)
     */
    public $ScanResult;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param boolean $Enable 定时扫描开关
     * @param string $ScanTime 定时任务扫描时间
     * @param integer $ScanPeriod 定时扫描间隔
     * @param array $ScanType 扫描类型数组
     * @param boolean $All 扫描全部镜像
     * @param array $Images 自定义扫描镜像
     * @param array $Id 自动以扫描镜像Id
     * @param boolean $Latest 是否扫描最新版本镜像
     * @param string $ScanEndTime 扫描结束时间
     * @param array $RegistryType 仓库类型 tcr,ccr,harbor	
     * @param boolean $ContainerRunning 是否存在运行中的容器	
     * @param integer $ScanScope 扫描范围 0全部镜像，1自选镜像，2推荐扫描镜像
     * @param array $Namespace 命名空间
     * @param array $ExcludeImageAssetIds 排除的镜像资产id
     * @param string $LastScanTime 最近扫描时间
     * @param string $ScanResult 扫描结果(Success|InsufficientLicense|ImageNeedIsEmpty|InternalError)
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
        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("ScanTime",$param) and $param["ScanTime"] !== null) {
            $this->ScanTime = $param["ScanTime"];
        }

        if (array_key_exists("ScanPeriod",$param) and $param["ScanPeriod"] !== null) {
            $this->ScanPeriod = $param["ScanPeriod"];
        }

        if (array_key_exists("ScanType",$param) and $param["ScanType"] !== null) {
            $this->ScanType = $param["ScanType"];
        }

        if (array_key_exists("All",$param) and $param["All"] !== null) {
            $this->All = $param["All"];
        }

        if (array_key_exists("Images",$param) and $param["Images"] !== null) {
            $this->Images = [];
            foreach ($param["Images"] as $key => $value){
                $obj = new ImageInfo();
                $obj->deserialize($value);
                array_push($this->Images, $obj);
            }
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Latest",$param) and $param["Latest"] !== null) {
            $this->Latest = $param["Latest"];
        }

        if (array_key_exists("ScanEndTime",$param) and $param["ScanEndTime"] !== null) {
            $this->ScanEndTime = $param["ScanEndTime"];
        }

        if (array_key_exists("RegistryType",$param) and $param["RegistryType"] !== null) {
            $this->RegistryType = $param["RegistryType"];
        }

        if (array_key_exists("ContainerRunning",$param) and $param["ContainerRunning"] !== null) {
            $this->ContainerRunning = $param["ContainerRunning"];
        }

        if (array_key_exists("ScanScope",$param) and $param["ScanScope"] !== null) {
            $this->ScanScope = $param["ScanScope"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("ExcludeImageAssetIds",$param) and $param["ExcludeImageAssetIds"] !== null) {
            $this->ExcludeImageAssetIds = $param["ExcludeImageAssetIds"];
        }

        if (array_key_exists("LastScanTime",$param) and $param["LastScanTime"] !== null) {
            $this->LastScanTime = $param["LastScanTime"];
        }

        if (array_key_exists("ScanResult",$param) and $param["ScanResult"] !== null) {
            $this->ScanResult = $param["ScanResult"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
