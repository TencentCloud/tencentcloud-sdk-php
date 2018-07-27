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
 * @method string getImageId() 获取镜像ID
 * @method void setImageId(string $ImageId) 设置镜像ID
 * @method string getOsName() 获取镜像操作系统
 * @method void setOsName(string $OsName) 设置镜像操作系统
 * @method string getImageType() 获取镜像类型
 * @method void setImageType(string $ImageType) 设置镜像类型
 * @method string getCreatedTime() 获取镜像创建时间
 * @method void setCreatedTime(string $CreatedTime) 设置镜像创建时间
 * @method string getImageName() 获取镜像名称
 * @method void setImageName(string $ImageName) 设置镜像名称
 * @method string getImageDescription() 获取镜像描述
 * @method void setImageDescription(string $ImageDescription) 设置镜像描述
 * @method integer getImageSize() 获取镜像大小
 * @method void setImageSize(integer $ImageSize) 设置镜像大小
 * @method string getArchitecture() 获取镜像架构
 * @method void setArchitecture(string $Architecture) 设置镜像架构
 * @method string getImageState() 获取镜像状态
 * @method void setImageState(string $ImageState) 设置镜像状态
 * @method string getPlatform() 获取镜像来源平台
 * @method void setPlatform(string $Platform) 设置镜像来源平台
 * @method string getImageCreator() 获取镜像创建者
 * @method void setImageCreator(string $ImageCreator) 设置镜像创建者
 * @method string getImageSource() 获取镜像来源
 * @method void setImageSource(string $ImageSource) 设置镜像来源
 */

/**
 *一个关于镜像详细信息的结构体，主要包括镜像的主要状态与属性。
 */
class Image extends AbstractModel
{
    /**
     * @var string 镜像ID
     */
    public $ImageId;

    /**
     * @var string 镜像操作系统
     */
    public $OsName;

    /**
     * @var string 镜像类型
     */
    public $ImageType;

    /**
     * @var string 镜像创建时间
     */
    public $CreatedTime;

    /**
     * @var string 镜像名称
     */
    public $ImageName;

    /**
     * @var string 镜像描述
     */
    public $ImageDescription;

    /**
     * @var integer 镜像大小
     */
    public $ImageSize;

    /**
     * @var string 镜像架构
     */
    public $Architecture;

    /**
     * @var string 镜像状态
     */
    public $ImageState;

    /**
     * @var string 镜像来源平台
     */
    public $Platform;

    /**
     * @var string 镜像创建者
     */
    public $ImageCreator;

    /**
     * @var string 镜像来源
     */
    public $ImageSource;
    /**
     * @param string $ImageId 镜像ID
     * @param string $OsName 镜像操作系统
     * @param string $ImageType 镜像类型
     * @param string $CreatedTime 镜像创建时间
     * @param string $ImageName 镜像名称
     * @param string $ImageDescription 镜像描述
     * @param integer $ImageSize 镜像大小
     * @param string $Architecture 镜像架构
     * @param string $ImageState 镜像状态
     * @param string $Platform 镜像来源平台
     * @param string $ImageCreator 镜像创建者
     * @param string $ImageSource 镜像来源
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
        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }

        if (array_key_exists("OsName",$param) and $param["OsName"] !== null) {
            $this->OsName = $param["OsName"];
        }

        if (array_key_exists("ImageType",$param) and $param["ImageType"] !== null) {
            $this->ImageType = $param["ImageType"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("ImageName",$param) and $param["ImageName"] !== null) {
            $this->ImageName = $param["ImageName"];
        }

        if (array_key_exists("ImageDescription",$param) and $param["ImageDescription"] !== null) {
            $this->ImageDescription = $param["ImageDescription"];
        }

        if (array_key_exists("ImageSize",$param) and $param["ImageSize"] !== null) {
            $this->ImageSize = $param["ImageSize"];
        }

        if (array_key_exists("Architecture",$param) and $param["Architecture"] !== null) {
            $this->Architecture = $param["Architecture"];
        }

        if (array_key_exists("ImageState",$param) and $param["ImageState"] !== null) {
            $this->ImageState = $param["ImageState"];
        }

        if (array_key_exists("Platform",$param) and $param["Platform"] !== null) {
            $this->Platform = $param["Platform"];
        }

        if (array_key_exists("ImageCreator",$param) and $param["ImageCreator"] !== null) {
            $this->ImageCreator = $param["ImageCreator"];
        }

        if (array_key_exists("ImageSource",$param) and $param["ImageSource"] !== null) {
            $this->ImageSource = $param["ImageSource"];
        }
    }
}
