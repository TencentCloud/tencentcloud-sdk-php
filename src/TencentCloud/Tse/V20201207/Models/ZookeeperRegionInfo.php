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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Zookeeper的地域额外信息记录
 *
 * @method string getDeployMode() 获取部署架构信息

- SingleRegion: 普通单地域
- MultiRegion: 普通多地域场景
- MasterSlave: 两地域，主备地域场景
 * @method void setDeployMode(string $DeployMode) 设置部署架构信息

- SingleRegion: 普通单地域
- MultiRegion: 普通多地域场景
- MasterSlave: 两地域，主备地域场景
 * @method ZookeeperRegionMyIdInfo getMainRegion() 获取主地域的额外信息
 * @method void setMainRegion(ZookeeperRegionMyIdInfo $MainRegion) 设置主地域的额外信息
 * @method array getOtherRegions() 获取其他地域的额外信息
 * @method void setOtherRegions(array $OtherRegions) 设置其他地域的额外信息
 */
class ZookeeperRegionInfo extends AbstractModel
{
    /**
     * @var string 部署架构信息

- SingleRegion: 普通单地域
- MultiRegion: 普通多地域场景
- MasterSlave: 两地域，主备地域场景
     */
    public $DeployMode;

    /**
     * @var ZookeeperRegionMyIdInfo 主地域的额外信息
     */
    public $MainRegion;

    /**
     * @var array 其他地域的额外信息
     */
    public $OtherRegions;

    /**
     * @param string $DeployMode 部署架构信息

- SingleRegion: 普通单地域
- MultiRegion: 普通多地域场景
- MasterSlave: 两地域，主备地域场景
     * @param ZookeeperRegionMyIdInfo $MainRegion 主地域的额外信息
     * @param array $OtherRegions 其他地域的额外信息
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
        if (array_key_exists("DeployMode",$param) and $param["DeployMode"] !== null) {
            $this->DeployMode = $param["DeployMode"];
        }

        if (array_key_exists("MainRegion",$param) and $param["MainRegion"] !== null) {
            $this->MainRegion = new ZookeeperRegionMyIdInfo();
            $this->MainRegion->deserialize($param["MainRegion"]);
        }

        if (array_key_exists("OtherRegions",$param) and $param["OtherRegions"] !== null) {
            $this->OtherRegions = [];
            foreach ($param["OtherRegions"] as $key => $value){
                $obj = new ZookeeperRegionMyIdInfo();
                $obj->deserialize($value);
                array_push($this->OtherRegions, $obj);
            }
        }
    }
}
