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
namespace TencentCloud\Omics\V20221128\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 环境配置。
 *
 * @method VPCOption getVPCOption() 获取私有网络配置。
 * @method void setVPCOption(VPCOption $VPCOption) 设置私有网络配置。
 * @method ClusterOption getClusterOption() 获取计算集群配置。
 * @method void setClusterOption(ClusterOption $ClusterOption) 设置计算集群配置。
 * @method DatabaseOption getDatabaseOption() 获取数据库配置。
 * @method void setDatabaseOption(DatabaseOption $DatabaseOption) 设置数据库配置。
 * @method StorageOption getStorageOption() 获取存储配置。
 * @method void setStorageOption(StorageOption $StorageOption) 设置存储配置。
 * @method CVMOption getCVMOption() 获取云服务器配置。
 * @method void setCVMOption(CVMOption $CVMOption) 设置云服务器配置。
 */
class EnvironmentConfig extends AbstractModel
{
    /**
     * @var VPCOption 私有网络配置。
     */
    public $VPCOption;

    /**
     * @var ClusterOption 计算集群配置。
     */
    public $ClusterOption;

    /**
     * @var DatabaseOption 数据库配置。
     */
    public $DatabaseOption;

    /**
     * @var StorageOption 存储配置。
     */
    public $StorageOption;

    /**
     * @var CVMOption 云服务器配置。
     */
    public $CVMOption;

    /**
     * @param VPCOption $VPCOption 私有网络配置。
     * @param ClusterOption $ClusterOption 计算集群配置。
     * @param DatabaseOption $DatabaseOption 数据库配置。
     * @param StorageOption $StorageOption 存储配置。
     * @param CVMOption $CVMOption 云服务器配置。
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
        if (array_key_exists("VPCOption",$param) and $param["VPCOption"] !== null) {
            $this->VPCOption = new VPCOption();
            $this->VPCOption->deserialize($param["VPCOption"]);
        }

        if (array_key_exists("ClusterOption",$param) and $param["ClusterOption"] !== null) {
            $this->ClusterOption = new ClusterOption();
            $this->ClusterOption->deserialize($param["ClusterOption"]);
        }

        if (array_key_exists("DatabaseOption",$param) and $param["DatabaseOption"] !== null) {
            $this->DatabaseOption = new DatabaseOption();
            $this->DatabaseOption->deserialize($param["DatabaseOption"]);
        }

        if (array_key_exists("StorageOption",$param) and $param["StorageOption"] !== null) {
            $this->StorageOption = new StorageOption();
            $this->StorageOption->deserialize($param["StorageOption"]);
        }

        if (array_key_exists("CVMOption",$param) and $param["CVMOption"] !== null) {
            $this->CVMOption = new CVMOption();
            $this->CVMOption->deserialize($param["CVMOption"]);
        }
    }
}
