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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateIotVideoCloudStorage请求参数结构体
 *
 * @method string getProductId() 获取产品ID
 * @method void setProductId(string $ProductId) 设置产品ID
 * @method string getDeviceName() 获取设备名称
 * @method void setDeviceName(string $DeviceName) 设置设备名称
 * @method string getPackageId() 获取云存套餐ID：
yc1m3d ： 全时3天存储月套餐。
yc1m7d ： 全时7天存储月套餐。
yc1m30d ：全时30天存储月套餐。
yc1y3d ：全时3天存储年套餐。
yc1y7d ：全时7天存储年套餐。
yc1y30d ：全时30天存储年套餐。
ye1m3d ：事件3天存储月套餐。
ye1m7d ：事件7天存储月套餐。
ye1m30d ：事件30天存储月套餐 。
ye1y3d ：事件3天存储年套餐。
ye1y7d ：事件7天存储年套餐。
ye1y30d ：事件30天存储年套餐。
yc1w7d : 全时7天存储周套餐。
ye1w7d : 事件7天存储周套餐。
lye1m3d：低功耗事件3天月套餐。
lye1m7d：低功耗事件7天月套餐。
lye1m30d：低功耗事件30天月套餐。
lye1y3d：低功耗事件3天年套餐。
lye1y7d：低功耗事件7天年套餐。
lye1y30d：低功耗事件30天年套餐。
 * @method void setPackageId(string $PackageId) 设置云存套餐ID：
yc1m3d ： 全时3天存储月套餐。
yc1m7d ： 全时7天存储月套餐。
yc1m30d ：全时30天存储月套餐。
yc1y3d ：全时3天存储年套餐。
yc1y7d ：全时7天存储年套餐。
yc1y30d ：全时30天存储年套餐。
ye1m3d ：事件3天存储月套餐。
ye1m7d ：事件7天存储月套餐。
ye1m30d ：事件30天存储月套餐 。
ye1y3d ：事件3天存储年套餐。
ye1y7d ：事件7天存储年套餐。
ye1y30d ：事件30天存储年套餐。
yc1w7d : 全时7天存储周套餐。
ye1w7d : 事件7天存储周套餐。
lye1m3d：低功耗事件3天月套餐。
lye1m7d：低功耗事件7天月套餐。
lye1m30d：低功耗事件30天月套餐。
lye1y3d：低功耗事件3天年套餐。
lye1y7d：低功耗事件7天年套餐。
lye1y30d：低功耗事件30天年套餐。
 * @method integer getOverride() 获取如果当前设备已开启云存套餐，Override=1会使用新套餐覆盖原有套餐。不传此参数则默认为0。
 * @method void setOverride(integer $Override) 设置如果当前设备已开启云存套餐，Override=1会使用新套餐覆盖原有套餐。不传此参数则默认为0。
 * @method string getPackageQueue() 获取套餐列表顺序：PackageQueue=front会立即使用新购买的套餐，新购套餐结束后，列表中下一个未过期的套餐继续生效；PackageQueue=end会等设备当前所有已购买套餐过期后才会生效新购套餐。与Override参数不能同时使用。
 * @method void setPackageQueue(string $PackageQueue) 设置套餐列表顺序：PackageQueue=front会立即使用新购买的套餐，新购套餐结束后，列表中下一个未过期的套餐继续生效；PackageQueue=end会等设备当前所有已购买套餐过期后才会生效新购套餐。与Override参数不能同时使用。
 * @method string getOrderId() 获取订单id
 * @method void setOrderId(string $OrderId) 设置订单id
 * @method integer getChannelId() 获取通道ID
 * @method void setChannelId(integer $ChannelId) 设置通道ID
 * @method string getStorageRegion() 获取云存视频存储区域，国内默认为ap-guangzhou。海外默认为东南亚ap-singapore，可选美东na-ashburn、欧洲eu-frankfurt。
 * @method void setStorageRegion(string $StorageRegion) 设置云存视频存储区域，国内默认为ap-guangzhou。海外默认为东南亚ap-singapore，可选美东na-ashburn、欧洲eu-frankfurt。
 */
class CreateIotVideoCloudStorageRequest extends AbstractModel
{
    /**
     * @var string 产品ID
     */
    public $ProductId;

    /**
     * @var string 设备名称
     */
    public $DeviceName;

    /**
     * @var string 云存套餐ID：
yc1m3d ： 全时3天存储月套餐。
yc1m7d ： 全时7天存储月套餐。
yc1m30d ：全时30天存储月套餐。
yc1y3d ：全时3天存储年套餐。
yc1y7d ：全时7天存储年套餐。
yc1y30d ：全时30天存储年套餐。
ye1m3d ：事件3天存储月套餐。
ye1m7d ：事件7天存储月套餐。
ye1m30d ：事件30天存储月套餐 。
ye1y3d ：事件3天存储年套餐。
ye1y7d ：事件7天存储年套餐。
ye1y30d ：事件30天存储年套餐。
yc1w7d : 全时7天存储周套餐。
ye1w7d : 事件7天存储周套餐。
lye1m3d：低功耗事件3天月套餐。
lye1m7d：低功耗事件7天月套餐。
lye1m30d：低功耗事件30天月套餐。
lye1y3d：低功耗事件3天年套餐。
lye1y7d：低功耗事件7天年套餐。
lye1y30d：低功耗事件30天年套餐。
     */
    public $PackageId;

    /**
     * @var integer 如果当前设备已开启云存套餐，Override=1会使用新套餐覆盖原有套餐。不传此参数则默认为0。
     */
    public $Override;

    /**
     * @var string 套餐列表顺序：PackageQueue=front会立即使用新购买的套餐，新购套餐结束后，列表中下一个未过期的套餐继续生效；PackageQueue=end会等设备当前所有已购买套餐过期后才会生效新购套餐。与Override参数不能同时使用。
     */
    public $PackageQueue;

    /**
     * @var string 订单id
     */
    public $OrderId;

    /**
     * @var integer 通道ID
     */
    public $ChannelId;

    /**
     * @var string 云存视频存储区域，国内默认为ap-guangzhou。海外默认为东南亚ap-singapore，可选美东na-ashburn、欧洲eu-frankfurt。
     */
    public $StorageRegion;

    /**
     * @param string $ProductId 产品ID
     * @param string $DeviceName 设备名称
     * @param string $PackageId 云存套餐ID：
yc1m3d ： 全时3天存储月套餐。
yc1m7d ： 全时7天存储月套餐。
yc1m30d ：全时30天存储月套餐。
yc1y3d ：全时3天存储年套餐。
yc1y7d ：全时7天存储年套餐。
yc1y30d ：全时30天存储年套餐。
ye1m3d ：事件3天存储月套餐。
ye1m7d ：事件7天存储月套餐。
ye1m30d ：事件30天存储月套餐 。
ye1y3d ：事件3天存储年套餐。
ye1y7d ：事件7天存储年套餐。
ye1y30d ：事件30天存储年套餐。
yc1w7d : 全时7天存储周套餐。
ye1w7d : 事件7天存储周套餐。
lye1m3d：低功耗事件3天月套餐。
lye1m7d：低功耗事件7天月套餐。
lye1m30d：低功耗事件30天月套餐。
lye1y3d：低功耗事件3天年套餐。
lye1y7d：低功耗事件7天年套餐。
lye1y30d：低功耗事件30天年套餐。
     * @param integer $Override 如果当前设备已开启云存套餐，Override=1会使用新套餐覆盖原有套餐。不传此参数则默认为0。
     * @param string $PackageQueue 套餐列表顺序：PackageQueue=front会立即使用新购买的套餐，新购套餐结束后，列表中下一个未过期的套餐继续生效；PackageQueue=end会等设备当前所有已购买套餐过期后才会生效新购套餐。与Override参数不能同时使用。
     * @param string $OrderId 订单id
     * @param integer $ChannelId 通道ID
     * @param string $StorageRegion 云存视频存储区域，国内默认为ap-guangzhou。海外默认为东南亚ap-singapore，可选美东na-ashburn、欧洲eu-frankfurt。
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
        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("DeviceName",$param) and $param["DeviceName"] !== null) {
            $this->DeviceName = $param["DeviceName"];
        }

        if (array_key_exists("PackageId",$param) and $param["PackageId"] !== null) {
            $this->PackageId = $param["PackageId"];
        }

        if (array_key_exists("Override",$param) and $param["Override"] !== null) {
            $this->Override = $param["Override"];
        }

        if (array_key_exists("PackageQueue",$param) and $param["PackageQueue"] !== null) {
            $this->PackageQueue = $param["PackageQueue"];
        }

        if (array_key_exists("OrderId",$param) and $param["OrderId"] !== null) {
            $this->OrderId = $param["OrderId"];
        }

        if (array_key_exists("ChannelId",$param) and $param["ChannelId"] !== null) {
            $this->ChannelId = $param["ChannelId"];
        }

        if (array_key_exists("StorageRegion",$param) and $param["StorageRegion"] !== null) {
            $this->StorageRegion = $param["StorageRegion"];
        }
    }
}
