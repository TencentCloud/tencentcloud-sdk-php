<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * ExportImages请求参数结构体
 *
 * @method string getBucketName() 获取COS存储桶名称
 * @method void setBucketName(string $BucketName) 设置COS存储桶名称
 * @method array getImageIds() 获取镜像ID列表
 * @method void setImageIds(array $ImageIds) 设置镜像ID列表
 * @method string getExportFormat() 获取镜像文件导出格式。取值范围：RAW，QCOW2，VHD，VMDK。默认为RAW
 * @method void setExportFormat(string $ExportFormat) 设置镜像文件导出格式。取值范围：RAW，QCOW2，VHD，VMDK。默认为RAW
 * @method array getFileNamePrefixList() 获取导出文件的名称前缀列表
 * @method void setFileNamePrefixList(array $FileNamePrefixList) 设置导出文件的名称前缀列表
 * @method boolean getOnlyExportRootDisk() 获取是否只导出系统盘
 * @method void setOnlyExportRootDisk(boolean $OnlyExportRootDisk) 设置是否只导出系统盘
 * @method boolean getDryRun() 获取检测镜像是否支持导出
 * @method void setDryRun(boolean $DryRun) 设置检测镜像是否支持导出
 * @method string getRoleName() 获取角色名称。默认为CVM_QcsRole，发起请求前请确认是否存在该角色，以及是否已正确配置COS写入权限。
 * @method void setRoleName(string $RoleName) 设置角色名称。默认为CVM_QcsRole，发起请求前请确认是否存在该角色，以及是否已正确配置COS写入权限。
 */
class ExportImagesRequest extends AbstractModel
{
    /**
     * @var string COS存储桶名称
     */
    public $BucketName;

    /**
     * @var array 镜像ID列表
     */
    public $ImageIds;

    /**
     * @var string 镜像文件导出格式。取值范围：RAW，QCOW2，VHD，VMDK。默认为RAW
     */
    public $ExportFormat;

    /**
     * @var array 导出文件的名称前缀列表
     */
    public $FileNamePrefixList;

    /**
     * @var boolean 是否只导出系统盘
     */
    public $OnlyExportRootDisk;

    /**
     * @var boolean 检测镜像是否支持导出
     */
    public $DryRun;

    /**
     * @var string 角色名称。默认为CVM_QcsRole，发起请求前请确认是否存在该角色，以及是否已正确配置COS写入权限。
     */
    public $RoleName;

    /**
     * @param string $BucketName COS存储桶名称
     * @param array $ImageIds 镜像ID列表
     * @param string $ExportFormat 镜像文件导出格式。取值范围：RAW，QCOW2，VHD，VMDK。默认为RAW
     * @param array $FileNamePrefixList 导出文件的名称前缀列表
     * @param boolean $OnlyExportRootDisk 是否只导出系统盘
     * @param boolean $DryRun 检测镜像是否支持导出
     * @param string $RoleName 角色名称。默认为CVM_QcsRole，发起请求前请确认是否存在该角色，以及是否已正确配置COS写入权限。
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
        if (array_key_exists("BucketName",$param) and $param["BucketName"] !== null) {
            $this->BucketName = $param["BucketName"];
        }

        if (array_key_exists("ImageIds",$param) and $param["ImageIds"] !== null) {
            $this->ImageIds = $param["ImageIds"];
        }

        if (array_key_exists("ExportFormat",$param) and $param["ExportFormat"] !== null) {
            $this->ExportFormat = $param["ExportFormat"];
        }

        if (array_key_exists("FileNamePrefixList",$param) and $param["FileNamePrefixList"] !== null) {
            $this->FileNamePrefixList = $param["FileNamePrefixList"];
        }

        if (array_key_exists("OnlyExportRootDisk",$param) and $param["OnlyExportRootDisk"] !== null) {
            $this->OnlyExportRootDisk = $param["OnlyExportRootDisk"];
        }

        if (array_key_exists("DryRun",$param) and $param["DryRun"] !== null) {
            $this->DryRun = $param["DryRun"];
        }

        if (array_key_exists("RoleName",$param) and $param["RoleName"] !== null) {
            $this->RoleName = $param["RoleName"];
        }
    }
}
