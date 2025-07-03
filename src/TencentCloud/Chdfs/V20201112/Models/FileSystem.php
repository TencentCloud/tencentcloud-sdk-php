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
namespace TencentCloud\Chdfs\V20201112\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 文件系统
 *
 * @method integer getAppId() 获取资源所属用户AppId
 * @method void setAppId(integer $AppId) 设置资源所属用户AppId
 * @method string getFileSystemName() 获取文件系统名称
 * @method void setFileSystemName(string $FileSystemName) 设置文件系统名称
 * @method string getDescription() 获取文件系统描述
 * @method void setDescription(string $Description) 设置文件系统描述
 * @method string getRegion() 获取地域
 * @method void setRegion(string $Region) 设置地域
 * @method string getFileSystemId() 获取文件系统ID
 * @method void setFileSystemId(string $FileSystemId) 设置文件系统ID
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method integer getBlockSize() 获取文件系统块大小（byte）
 * @method void setBlockSize(integer $BlockSize) 设置文件系统块大小（byte）
 * @method integer getCapacityQuota() 获取文件系统容量（byte）
 * @method void setCapacityQuota(integer $CapacityQuota) 设置文件系统容量（byte）
 * @method integer getStatus() 获取文件系统状态（1：创建中；2：创建成功；3：创建失败）
 * @method void setStatus(integer $Status) 设置文件系统状态（1：创建中；2：创建成功；3：创建失败）
 * @method array getSuperUsers() 获取超级用户名列表
 * @method void setSuperUsers(array $SuperUsers) 设置超级用户名列表
 * @method boolean getPosixAcl() 获取POSIX权限控制
 * @method void setPosixAcl(boolean $PosixAcl) 设置POSIX权限控制
 * @method boolean getEnableRanger() 获取是否打开Ranger地址校验
 * @method void setEnableRanger(boolean $EnableRanger) 设置是否打开Ranger地址校验
 * @method array getRangerServiceAddresses() 获取Ranger地址列表
 * @method void setRangerServiceAddresses(array $RangerServiceAddresses) 设置Ranger地址列表
 */
class FileSystem extends AbstractModel
{
    /**
     * @var integer 资源所属用户AppId
     */
    public $AppId;

    /**
     * @var string 文件系统名称
     */
    public $FileSystemName;

    /**
     * @var string 文件系统描述
     */
    public $Description;

    /**
     * @var string 地域
     */
    public $Region;

    /**
     * @var string 文件系统ID
     */
    public $FileSystemId;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var integer 文件系统块大小（byte）
     */
    public $BlockSize;

    /**
     * @var integer 文件系统容量（byte）
     */
    public $CapacityQuota;

    /**
     * @var integer 文件系统状态（1：创建中；2：创建成功；3：创建失败）
     */
    public $Status;

    /**
     * @var array 超级用户名列表
     */
    public $SuperUsers;

    /**
     * @var boolean POSIX权限控制
     */
    public $PosixAcl;

    /**
     * @var boolean 是否打开Ranger地址校验
     */
    public $EnableRanger;

    /**
     * @var array Ranger地址列表
     */
    public $RangerServiceAddresses;

    /**
     * @param integer $AppId 资源所属用户AppId
     * @param string $FileSystemName 文件系统名称
     * @param string $Description 文件系统描述
     * @param string $Region 地域
     * @param string $FileSystemId 文件系统ID
     * @param string $CreateTime 创建时间
     * @param integer $BlockSize 文件系统块大小（byte）
     * @param integer $CapacityQuota 文件系统容量（byte）
     * @param integer $Status 文件系统状态（1：创建中；2：创建成功；3：创建失败）
     * @param array $SuperUsers 超级用户名列表
     * @param boolean $PosixAcl POSIX权限控制
     * @param boolean $EnableRanger 是否打开Ranger地址校验
     * @param array $RangerServiceAddresses Ranger地址列表
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("FileSystemName",$param) and $param["FileSystemName"] !== null) {
            $this->FileSystemName = $param["FileSystemName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("FileSystemId",$param) and $param["FileSystemId"] !== null) {
            $this->FileSystemId = $param["FileSystemId"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("BlockSize",$param) and $param["BlockSize"] !== null) {
            $this->BlockSize = $param["BlockSize"];
        }

        if (array_key_exists("CapacityQuota",$param) and $param["CapacityQuota"] !== null) {
            $this->CapacityQuota = $param["CapacityQuota"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("SuperUsers",$param) and $param["SuperUsers"] !== null) {
            $this->SuperUsers = $param["SuperUsers"];
        }

        if (array_key_exists("PosixAcl",$param) and $param["PosixAcl"] !== null) {
            $this->PosixAcl = $param["PosixAcl"];
        }

        if (array_key_exists("EnableRanger",$param) and $param["EnableRanger"] !== null) {
            $this->EnableRanger = $param["EnableRanger"];
        }

        if (array_key_exists("RangerServiceAddresses",$param) and $param["RangerServiceAddresses"] !== null) {
            $this->RangerServiceAddresses = $param["RangerServiceAddresses"];
        }
    }
}
