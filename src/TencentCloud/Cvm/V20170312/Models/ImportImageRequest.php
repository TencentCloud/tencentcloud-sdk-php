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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ImportImage请求参数结构体
 *
 * @method string getArchitecture() 获取导入镜像的操作系统架构。
取值范围包括：`x86_64` 、`i386`、`arm_64`
 * @method void setArchitecture(string $Architecture) 设置导入镜像的操作系统架构。
取值范围包括：`x86_64` 、`i386`、`arm_64`
 * @method string getOsType() 获取导入镜像的操作系统类型 。
可通过 [DescribeImportImageOs](https://cloud.tencent.com/document/api/213/15718) 接口返回值中的`ImportImageOsListSupported`获取。
 * @method void setOsType(string $OsType) 设置导入镜像的操作系统类型 。
可通过 [DescribeImportImageOs](https://cloud.tencent.com/document/api/213/15718) 接口返回值中的`ImportImageOsListSupported`获取。
 * @method string getOsVersion() 获取导入镜像的操作系统版本。
可通过 [DescribeImportImageOs](https://cloud.tencent.com/document/api/213/15718) 接口返回值中的`ImportImageOsVersionSet`获取。
 * @method void setOsVersion(string $OsVersion) 设置导入镜像的操作系统版本。
可通过 [DescribeImportImageOs](https://cloud.tencent.com/document/api/213/15718) 接口返回值中的`ImportImageOsVersionSet`获取。
 * @method string getImageUrl() 获取导入镜像存放的cos地址
 * @method void setImageUrl(string $ImageUrl) 设置导入镜像存放的cos地址
 * @method string getImageName() 获取镜像名称。
最多支持 60 个字符。
 * @method void setImageName(string $ImageName) 设置镜像名称。
最多支持 60 个字符。
 * @method string getImageDescription() 获取镜像描述。
最多支持 256 个字符。
 * @method void setImageDescription(string $ImageDescription) 设置镜像描述。
最多支持 256 个字符。
 * @method boolean getDryRun() 获取只检查参数，不执行任务。
默认值：false
 * @method void setDryRun(boolean $DryRun) 设置只检查参数，不执行任务。
默认值：false
 * @method boolean getForce() 获取是否强制导入，参考[强制导入镜像](https://cloud.tencent.com/document/product/213/12849)
默认值：false
 * @method void setForce(boolean $Force) 设置是否强制导入，参考[强制导入镜像](https://cloud.tencent.com/document/product/213/12849)
默认值：false
 * @method array getTagSpecification() 获取标签描述列表。通过指定该参数可以同时绑定标签到自定义镜像。
 * @method void setTagSpecification(array $TagSpecification) 设置标签描述列表。通过指定该参数可以同时绑定标签到自定义镜像。
 * @method string getLicenseType() 获取导入镜像后，激活操作系统采用的许可证类型。
默认值：TencentCloud
取值范围：
TencentCloud: 腾讯云官方许可
BYOL: 自带许可（Bring Your Own License）
 * @method void setLicenseType(string $LicenseType) 设置导入镜像后，激活操作系统采用的许可证类型。
默认值：TencentCloud
取值范围：
TencentCloud: 腾讯云官方许可
BYOL: 自带许可（Bring Your Own License）
 * @method string getBootMode() 获取启动模式。
取值范围：`Legacy BIOS`、`UEFI`
默认值：Legacy BIOS
 * @method void setBootMode(string $BootMode) 设置启动模式。
取值范围：`Legacy BIOS`、`UEFI`
默认值：Legacy BIOS
 * @method string getImageFamily() 获取 镜像族
 * @method void setImageFamily(string $ImageFamily) 设置 镜像族
 * @method array getImportImageDataDiskList() 获取导入的数据盘列表
 * @method void setImportImageDataDiskList(array $ImportImageDataDiskList) 设置导入的数据盘列表
 */
class ImportImageRequest extends AbstractModel
{
    /**
     * @var string 导入镜像的操作系统架构。
取值范围包括：`x86_64` 、`i386`、`arm_64`
     */
    public $Architecture;

    /**
     * @var string 导入镜像的操作系统类型 。
可通过 [DescribeImportImageOs](https://cloud.tencent.com/document/api/213/15718) 接口返回值中的`ImportImageOsListSupported`获取。
     */
    public $OsType;

    /**
     * @var string 导入镜像的操作系统版本。
可通过 [DescribeImportImageOs](https://cloud.tencent.com/document/api/213/15718) 接口返回值中的`ImportImageOsVersionSet`获取。
     */
    public $OsVersion;

    /**
     * @var string 导入镜像存放的cos地址
     */
    public $ImageUrl;

    /**
     * @var string 镜像名称。
最多支持 60 个字符。
     */
    public $ImageName;

    /**
     * @var string 镜像描述。
最多支持 256 个字符。
     */
    public $ImageDescription;

    /**
     * @var boolean 只检查参数，不执行任务。
默认值：false
     */
    public $DryRun;

    /**
     * @var boolean 是否强制导入，参考[强制导入镜像](https://cloud.tencent.com/document/product/213/12849)
默认值：false
     */
    public $Force;

    /**
     * @var array 标签描述列表。通过指定该参数可以同时绑定标签到自定义镜像。
     */
    public $TagSpecification;

    /**
     * @var string 导入镜像后，激活操作系统采用的许可证类型。
默认值：TencentCloud
取值范围：
TencentCloud: 腾讯云官方许可
BYOL: 自带许可（Bring Your Own License）
     */
    public $LicenseType;

    /**
     * @var string 启动模式。
取值范围：`Legacy BIOS`、`UEFI`
默认值：Legacy BIOS
     */
    public $BootMode;

    /**
     * @var string  镜像族
     */
    public $ImageFamily;

    /**
     * @var array 导入的数据盘列表
     */
    public $ImportImageDataDiskList;

    /**
     * @param string $Architecture 导入镜像的操作系统架构。
取值范围包括：`x86_64` 、`i386`、`arm_64`
     * @param string $OsType 导入镜像的操作系统类型 。
可通过 [DescribeImportImageOs](https://cloud.tencent.com/document/api/213/15718) 接口返回值中的`ImportImageOsListSupported`获取。
     * @param string $OsVersion 导入镜像的操作系统版本。
可通过 [DescribeImportImageOs](https://cloud.tencent.com/document/api/213/15718) 接口返回值中的`ImportImageOsVersionSet`获取。
     * @param string $ImageUrl 导入镜像存放的cos地址
     * @param string $ImageName 镜像名称。
最多支持 60 个字符。
     * @param string $ImageDescription 镜像描述。
最多支持 256 个字符。
     * @param boolean $DryRun 只检查参数，不执行任务。
默认值：false
     * @param boolean $Force 是否强制导入，参考[强制导入镜像](https://cloud.tencent.com/document/product/213/12849)
默认值：false
     * @param array $TagSpecification 标签描述列表。通过指定该参数可以同时绑定标签到自定义镜像。
     * @param string $LicenseType 导入镜像后，激活操作系统采用的许可证类型。
默认值：TencentCloud
取值范围：
TencentCloud: 腾讯云官方许可
BYOL: 自带许可（Bring Your Own License）
     * @param string $BootMode 启动模式。
取值范围：`Legacy BIOS`、`UEFI`
默认值：Legacy BIOS
     * @param string $ImageFamily  镜像族
     * @param array $ImportImageDataDiskList 导入的数据盘列表
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
        if (array_key_exists("Architecture",$param) and $param["Architecture"] !== null) {
            $this->Architecture = $param["Architecture"];
        }

        if (array_key_exists("OsType",$param) and $param["OsType"] !== null) {
            $this->OsType = $param["OsType"];
        }

        if (array_key_exists("OsVersion",$param) and $param["OsVersion"] !== null) {
            $this->OsVersion = $param["OsVersion"];
        }

        if (array_key_exists("ImageUrl",$param) and $param["ImageUrl"] !== null) {
            $this->ImageUrl = $param["ImageUrl"];
        }

        if (array_key_exists("ImageName",$param) and $param["ImageName"] !== null) {
            $this->ImageName = $param["ImageName"];
        }

        if (array_key_exists("ImageDescription",$param) and $param["ImageDescription"] !== null) {
            $this->ImageDescription = $param["ImageDescription"];
        }

        if (array_key_exists("DryRun",$param) and $param["DryRun"] !== null) {
            $this->DryRun = $param["DryRun"];
        }

        if (array_key_exists("Force",$param) and $param["Force"] !== null) {
            $this->Force = $param["Force"];
        }

        if (array_key_exists("TagSpecification",$param) and $param["TagSpecification"] !== null) {
            $this->TagSpecification = [];
            foreach ($param["TagSpecification"] as $key => $value){
                $obj = new TagSpecification();
                $obj->deserialize($value);
                array_push($this->TagSpecification, $obj);
            }
        }

        if (array_key_exists("LicenseType",$param) and $param["LicenseType"] !== null) {
            $this->LicenseType = $param["LicenseType"];
        }

        if (array_key_exists("BootMode",$param) and $param["BootMode"] !== null) {
            $this->BootMode = $param["BootMode"];
        }

        if (array_key_exists("ImageFamily",$param) and $param["ImageFamily"] !== null) {
            $this->ImageFamily = $param["ImageFamily"];
        }

        if (array_key_exists("ImportImageDataDiskList",$param) and $param["ImportImageDataDiskList"] !== null) {
            $this->ImportImageDataDiskList = [];
            foreach ($param["ImportImageDataDiskList"] as $key => $value){
                $obj = new ImportImageDataDisk();
                $obj->deserialize($value);
                array_push($this->ImportImageDataDiskList, $obj);
            }
        }
    }
}
