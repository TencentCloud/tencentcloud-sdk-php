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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 操作系统描述
 *
 * @method string getSeriesName() 获取os聚合名称
 * @method void setSeriesName(string $SeriesName) 设置os聚合名称
 * @method string getAlias() 获取os别名
 * @method void setAlias(string $Alias) 设置os别名
 * @method string getOsName() 获取os名称
 * @method void setOsName(string $OsName) 设置os名称
 * @method string getOsCustomizeType() 获取操作系统类型(分为定制和非定制，取值分别为:DOCKER_CUSTOMIZE、GENERAL)
 * @method void setOsCustomizeType(string $OsCustomizeType) 设置操作系统类型(分为定制和非定制，取值分别为:DOCKER_CUSTOMIZE、GENERAL)
 * @method string getStatus() 获取os是否下线(online表示在线,offline表示下线)
 * @method void setStatus(string $Status) 设置os是否下线(online表示在线,offline表示下线)
 * @method string getImageId() 获取镜像id
 * @method void setImageId(string $ImageId) 设置镜像id
 */
class OSImage extends AbstractModel
{
    /**
     * @var string os聚合名称
     */
    public $SeriesName;

    /**
     * @var string os别名
     */
    public $Alias;

    /**
     * @var string os名称
     */
    public $OsName;

    /**
     * @var string 操作系统类型(分为定制和非定制，取值分别为:DOCKER_CUSTOMIZE、GENERAL)
     */
    public $OsCustomizeType;

    /**
     * @var string os是否下线(online表示在线,offline表示下线)
     */
    public $Status;

    /**
     * @var string 镜像id
     */
    public $ImageId;

    /**
     * @param string $SeriesName os聚合名称
     * @param string $Alias os别名
     * @param string $OsName os名称
     * @param string $OsCustomizeType 操作系统类型(分为定制和非定制，取值分别为:DOCKER_CUSTOMIZE、GENERAL)
     * @param string $Status os是否下线(online表示在线,offline表示下线)
     * @param string $ImageId 镜像id
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
        if (array_key_exists("SeriesName",$param) and $param["SeriesName"] !== null) {
            $this->SeriesName = $param["SeriesName"];
        }

        if (array_key_exists("Alias",$param) and $param["Alias"] !== null) {
            $this->Alias = $param["Alias"];
        }

        if (array_key_exists("OsName",$param) and $param["OsName"] !== null) {
            $this->OsName = $param["OsName"];
        }

        if (array_key_exists("OsCustomizeType",$param) and $param["OsCustomizeType"] !== null) {
            $this->OsCustomizeType = $param["OsCustomizeType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }
    }
}
