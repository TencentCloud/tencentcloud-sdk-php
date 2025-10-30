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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 地域列表详情
 *
 * @method string getMachineType() 获取机器类型
CVM 腾讯云云服务器
LH 腾讯云轻量服务器
ECM 腾讯云边缘计算服务器
BM 腾讯云黑石1.0 服务器
Other  其他服务器(非腾讯云)
 * @method void setMachineType(string $MachineType) 设置机器类型
CVM 腾讯云云服务器
LH 腾讯云轻量服务器
ECM 腾讯云边缘计算服务器
BM 腾讯云黑石1.0 服务器
Other  其他服务器(非腾讯云)
 * @method integer getCloudFrom() 获取0 腾讯云
1 IDC机房
2 阿里云
3 华为云
4 亚马逊
5 微软
6 Google
7 Oracle
8 Digital Ocean
 * @method void setCloudFrom(integer $CloudFrom) 设置0 腾讯云
1 IDC机房
2 阿里云
3 华为云
4 亚马逊
5 微软
6 Google
7 Oracle
8 Digital Ocean
 * @method array getRegionList() 获取地域列表
 * @method void setRegionList(array $RegionList) 设置地域列表
 */
class RegionListDetail extends AbstractModel
{
    /**
     * @var string 机器类型
CVM 腾讯云云服务器
LH 腾讯云轻量服务器
ECM 腾讯云边缘计算服务器
BM 腾讯云黑石1.0 服务器
Other  其他服务器(非腾讯云)
     */
    public $MachineType;

    /**
     * @var integer 0 腾讯云
1 IDC机房
2 阿里云
3 华为云
4 亚马逊
5 微软
6 Google
7 Oracle
8 Digital Ocean
     */
    public $CloudFrom;

    /**
     * @var array 地域列表
     */
    public $RegionList;

    /**
     * @param string $MachineType 机器类型
CVM 腾讯云云服务器
LH 腾讯云轻量服务器
ECM 腾讯云边缘计算服务器
BM 腾讯云黑石1.0 服务器
Other  其他服务器(非腾讯云)
     * @param integer $CloudFrom 0 腾讯云
1 IDC机房
2 阿里云
3 华为云
4 亚马逊
5 微软
6 Google
7 Oracle
8 Digital Ocean
     * @param array $RegionList 地域列表
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
        if (array_key_exists("MachineType",$param) and $param["MachineType"] !== null) {
            $this->MachineType = $param["MachineType"];
        }

        if (array_key_exists("CloudFrom",$param) and $param["CloudFrom"] !== null) {
            $this->CloudFrom = $param["CloudFrom"];
        }

        if (array_key_exists("RegionList",$param) and $param["RegionList"] !== null) {
            $this->RegionList = [];
            foreach ($param["RegionList"] as $key => $value){
                $obj = new RegionInfo();
                $obj->deserialize($value);
                array_push($this->RegionList, $obj);
            }
        }
    }
}
