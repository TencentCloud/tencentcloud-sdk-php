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
 * @method string getSeriesName() 获取<p>os聚合名称</p>
 * @method void setSeriesName(string $SeriesName) 设置<p>os聚合名称</p>
 * @method string getAlias() 获取<p>os别名</p>
 * @method void setAlias(string $Alias) 设置<p>os别名</p>
 * @method string getOsName() 获取<p>os名称</p>
 * @method void setOsName(string $OsName) 设置<p>os名称</p>
 * @method string getOsCustomizeType() 获取<p>操作系统类型(分为定制和非定制，取值分别为:DOCKER_CUSTOMIZE、GENERAL)</p>
 * @method void setOsCustomizeType(string $OsCustomizeType) 设置<p>操作系统类型(分为定制和非定制，取值分别为:DOCKER_CUSTOMIZE、GENERAL)</p>
 * @method string getStatus() 获取<p>os是否下线(online表示在线,offline表示下线)</p>
 * @method void setStatus(string $Status) 设置<p>os是否下线(online表示在线,offline表示下线)</p>
 * @method string getImageId() 获取<p>镜像id</p>
 * @method void setImageId(string $ImageId) 设置<p>镜像id</p>
 * @method string getArch() 获取<p>架构</p>
 * @method void setArch(string $Arch) 设置<p>架构</p>
 */
class OSImage extends AbstractModel
{
    /**
     * @var string <p>os聚合名称</p>
     */
    public $SeriesName;

    /**
     * @var string <p>os别名</p>
     */
    public $Alias;

    /**
     * @var string <p>os名称</p>
     */
    public $OsName;

    /**
     * @var string <p>操作系统类型(分为定制和非定制，取值分别为:DOCKER_CUSTOMIZE、GENERAL)</p>
     */
    public $OsCustomizeType;

    /**
     * @var string <p>os是否下线(online表示在线,offline表示下线)</p>
     */
    public $Status;

    /**
     * @var string <p>镜像id</p>
     */
    public $ImageId;

    /**
     * @var string <p>架构</p>
     */
    public $Arch;

    /**
     * @param string $SeriesName <p>os聚合名称</p>
     * @param string $Alias <p>os别名</p>
     * @param string $OsName <p>os名称</p>
     * @param string $OsCustomizeType <p>操作系统类型(分为定制和非定制，取值分别为:DOCKER_CUSTOMIZE、GENERAL)</p>
     * @param string $Status <p>os是否下线(online表示在线,offline表示下线)</p>
     * @param string $ImageId <p>镜像id</p>
     * @param string $Arch <p>架构</p>
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

        if (array_key_exists("Arch",$param) and $param["Arch"] !== null) {
            $this->Arch = $param["Arch"];
        }
    }
}
