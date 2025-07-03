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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * db资产详情
 *
 * @method integer getCFWStatus() 获取云防状态
 * @method void setCFWStatus(integer $CFWStatus) 设置云防状态
 * @method string getAssetId() 获取资产id
 * @method void setAssetId(string $AssetId) 设置资产id
 * @method string getVpcName() 获取vpc信息
 * @method void setVpcName(string $VpcName) 设置vpc信息
 * @method string getAssetType() 获取资产类型
 * @method void setAssetType(string $AssetType) 设置资产类型
 * @method string getPublicIp() 获取公网ip
 * @method void setPublicIp(string $PublicIp) 设置公网ip
 * @method string getPrivateIp() 获取私网ip
 * @method void setPrivateIp(string $PrivateIp) 设置私网ip
 * @method string getRegion() 获取地域
 * @method void setRegion(string $Region) 设置地域
 * @method string getVpcId() 获取vpc信息
 * @method void setVpcId(string $VpcId) 设置vpc信息
 * @method string getAssetName() 获取资产名
 * @method void setAssetName(string $AssetName) 设置资产名
 * @method integer getCFWProtectLevel() 获取云防保护版本
 * @method void setCFWProtectLevel(integer $CFWProtectLevel) 设置云防保护版本
 * @method array getTag() 获取tag信息
 * @method void setTag(array $Tag) 设置tag信息
 */
class DbAssetInfo extends AbstractModel
{
    /**
     * @var integer 云防状态
     */
    public $CFWStatus;

    /**
     * @var string 资产id
     */
    public $AssetId;

    /**
     * @var string vpc信息
     */
    public $VpcName;

    /**
     * @var string 资产类型
     */
    public $AssetType;

    /**
     * @var string 公网ip
     */
    public $PublicIp;

    /**
     * @var string 私网ip
     */
    public $PrivateIp;

    /**
     * @var string 地域
     */
    public $Region;

    /**
     * @var string vpc信息
     */
    public $VpcId;

    /**
     * @var string 资产名
     */
    public $AssetName;

    /**
     * @var integer 云防保护版本
     */
    public $CFWProtectLevel;

    /**
     * @var array tag信息
     */
    public $Tag;

    /**
     * @param integer $CFWStatus 云防状态
     * @param string $AssetId 资产id
     * @param string $VpcName vpc信息
     * @param string $AssetType 资产类型
     * @param string $PublicIp 公网ip
     * @param string $PrivateIp 私网ip
     * @param string $Region 地域
     * @param string $VpcId vpc信息
     * @param string $AssetName 资产名
     * @param integer $CFWProtectLevel 云防保护版本
     * @param array $Tag tag信息
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
        if (array_key_exists("CFWStatus",$param) and $param["CFWStatus"] !== null) {
            $this->CFWStatus = $param["CFWStatus"];
        }

        if (array_key_exists("AssetId",$param) and $param["AssetId"] !== null) {
            $this->AssetId = $param["AssetId"];
        }

        if (array_key_exists("VpcName",$param) and $param["VpcName"] !== null) {
            $this->VpcName = $param["VpcName"];
        }

        if (array_key_exists("AssetType",$param) and $param["AssetType"] !== null) {
            $this->AssetType = $param["AssetType"];
        }

        if (array_key_exists("PublicIp",$param) and $param["PublicIp"] !== null) {
            $this->PublicIp = $param["PublicIp"];
        }

        if (array_key_exists("PrivateIp",$param) and $param["PrivateIp"] !== null) {
            $this->PrivateIp = $param["PrivateIp"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("AssetName",$param) and $param["AssetName"] !== null) {
            $this->AssetName = $param["AssetName"];
        }

        if (array_key_exists("CFWProtectLevel",$param) and $param["CFWProtectLevel"] !== null) {
            $this->CFWProtectLevel = $param["CFWProtectLevel"];
        }

        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = [];
            foreach ($param["Tag"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tag, $obj);
            }
        }
    }
}
