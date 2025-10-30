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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 地域描述信息
 *
 * @method string getName() 获取地域名称，例如“ap-guangzhou"
 * @method void setName(string $Name) 设置地域名称，例如“ap-guangzhou"
 * @method string getDesc() 获取地域描述，例如"广州”
 * @method void setDesc(string $Desc) 设置地域描述，例如"广州”
 * @method integer getRegionId() 获取地域唯一标记
 * @method void setRegionId(integer $RegionId) 设置地域唯一标记
 * @method array getZones() 获取地域下所有可用区列表
 * @method void setZones(array $Zones) 设置地域下所有可用区列表
 * @method integer getCount() 获取该地域下集群数目
 * @method void setCount(integer $Count) 设置该地域下集群数目
 * @method integer getIsInternationalSite() 获取0代表是国际站 1代表不是
 * @method void setIsInternationalSite(integer $IsInternationalSite) 设置0代表是国际站 1代表不是
 * @method string getBucket() 获取桶
 * @method void setBucket(string $Bucket) 设置桶
 * @method integer getSSCCount() 获取存算分离集群数
 * @method void setSSCCount(integer $SSCCount) 设置存算分离集群数
 * @method boolean getEnableSSC() 获取是否开通存算分离
 * @method void setEnableSSC(boolean $EnableSSC) 设置是否开通存算分离
 */
class RegionInfo extends AbstractModel
{
    /**
     * @var string 地域名称，例如“ap-guangzhou"
     */
    public $Name;

    /**
     * @var string 地域描述，例如"广州”
     */
    public $Desc;

    /**
     * @var integer 地域唯一标记
     */
    public $RegionId;

    /**
     * @var array 地域下所有可用区列表
     */
    public $Zones;

    /**
     * @var integer 该地域下集群数目
     */
    public $Count;

    /**
     * @var integer 0代表是国际站 1代表不是
     */
    public $IsInternationalSite;

    /**
     * @var string 桶
     */
    public $Bucket;

    /**
     * @var integer 存算分离集群数
     */
    public $SSCCount;

    /**
     * @var boolean 是否开通存算分离
     */
    public $EnableSSC;

    /**
     * @param string $Name 地域名称，例如“ap-guangzhou"
     * @param string $Desc 地域描述，例如"广州”
     * @param integer $RegionId 地域唯一标记
     * @param array $Zones 地域下所有可用区列表
     * @param integer $Count 该地域下集群数目
     * @param integer $IsInternationalSite 0代表是国际站 1代表不是
     * @param string $Bucket 桶
     * @param integer $SSCCount 存算分离集群数
     * @param boolean $EnableSSC 是否开通存算分离
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("Zones",$param) and $param["Zones"] !== null) {
            $this->Zones = [];
            foreach ($param["Zones"] as $key => $value){
                $obj = new ZoneInfo();
                $obj->deserialize($value);
                array_push($this->Zones, $obj);
            }
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("IsInternationalSite",$param) and $param["IsInternationalSite"] !== null) {
            $this->IsInternationalSite = $param["IsInternationalSite"];
        }

        if (array_key_exists("Bucket",$param) and $param["Bucket"] !== null) {
            $this->Bucket = $param["Bucket"];
        }

        if (array_key_exists("SSCCount",$param) and $param["SSCCount"] !== null) {
            $this->SSCCount = $param["SSCCount"];
        }

        if (array_key_exists("EnableSSC",$param) and $param["EnableSSC"] !== null) {
            $this->EnableSSC = $param["EnableSSC"];
        }
    }
}
