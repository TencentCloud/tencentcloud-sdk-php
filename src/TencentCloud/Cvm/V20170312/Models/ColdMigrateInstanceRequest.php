<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getArchitecture() 获取操作系统架构
 * @method void setArchitecture(string $Architecture) 设置操作系统架构
 * @method string getOsType() 获取操作系统类型
 * @method void setOsType(string $OsType) 设置操作系统类型
 * @method string getOsVersion() 获取操作系统版本
 * @method void setOsVersion(string $OsVersion) 设置操作系统版本
 * @method string getImageUrl() 获取迁移的系统盘镜像COS链接
 * @method void setImageUrl(string $ImageUrl) 设置迁移的系统盘镜像COS链接
 * @method string getInstanceId() 获取迁移目的实例的实例ID
 * @method void setInstanceId(string $InstanceId) 设置迁移目的实例的实例ID
 * @method integer getSnapshotSize() 获取迁移的系统盘大小，用于校验
 * @method void setSnapshotSize(integer $SnapshotSize) 设置迁移的系统盘大小，用于校验
 */

/**
 *ColdMigrateInstance请求参数结构体
 */
class ColdMigrateInstanceRequest extends AbstractModel
{
    /**
     * @var string 操作系统架构
     */
    public $Architecture;

    /**
     * @var string 操作系统类型
     */
    public $OsType;

    /**
     * @var string 操作系统版本
     */
    public $OsVersion;

    /**
     * @var string 迁移的系统盘镜像COS链接
     */
    public $ImageUrl;

    /**
     * @var string 迁移目的实例的实例ID
     */
    public $InstanceId;

    /**
     * @var integer 迁移的系统盘大小，用于校验
     */
    public $SnapshotSize;
    /**
     * @param string $Architecture 操作系统架构
     * @param string $OsType 操作系统类型
     * @param string $OsVersion 操作系统版本
     * @param string $ImageUrl 迁移的系统盘镜像COS链接
     * @param string $InstanceId 迁移目的实例的实例ID
     * @param integer $SnapshotSize 迁移的系统盘大小，用于校验
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
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

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("SnapshotSize",$param) and $param["SnapshotSize"] !== null) {
            $this->SnapshotSize = $param["SnapshotSize"];
        }
    }
}
