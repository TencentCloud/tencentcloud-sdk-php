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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSlaveZones请求参数结构体
 *
 * @method string getZone() 获取可用区
 * @method void setZone(string $Zone) 设置可用区
 * @method integer getOssClusterId() 获取云架集群ID
 * @method void setOssClusterId(integer $OssClusterId) 设置云架集群ID
 * @method string getStorageVersion() 获取存储架构类型。枚举值：1.0/2.0  默认值：1.0
 * @method void setStorageVersion(string $StorageVersion) 设置存储架构类型。枚举值：1.0/2.0  默认值：1.0
 */
class DescribeSlaveZonesRequest extends AbstractModel
{
    /**
     * @var string 可用区
     */
    public $Zone;

    /**
     * @var integer 云架集群ID
     */
    public $OssClusterId;

    /**
     * @var string 存储架构类型。枚举值：1.0/2.0  默认值：1.0
     */
    public $StorageVersion;

    /**
     * @param string $Zone 可用区
     * @param integer $OssClusterId 云架集群ID
     * @param string $StorageVersion 存储架构类型。枚举值：1.0/2.0  默认值：1.0
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
        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("OssClusterId",$param) and $param["OssClusterId"] !== null) {
            $this->OssClusterId = $param["OssClusterId"];
        }

        if (array_key_exists("StorageVersion",$param) and $param["StorageVersion"] !== null) {
            $this->StorageVersion = $param["StorageVersion"];
        }
    }
}
