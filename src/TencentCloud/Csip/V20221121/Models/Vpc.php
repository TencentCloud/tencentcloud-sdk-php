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
 * vpc列表数据
 *
 * @method integer getSubnet() 获取子网(只支持32位)
 * @method void setSubnet(integer $Subnet) 设置子网(只支持32位)
 * @method integer getConnectedVpc() 获取互通vpc(只支持32位)
 * @method void setConnectedVpc(integer $ConnectedVpc) 设置互通vpc(只支持32位)
 * @method string getAssetId() 获取资产id
 * @method void setAssetId(string $AssetId) 设置资产id
 * @method string getRegion() 获取region区域
 * @method void setRegion(string $Region) 设置region区域
 * @method integer getCVM() 获取云服务器(只支持32位)
 * @method void setCVM(integer $CVM) 设置云服务器(只支持32位)
 * @method array getTag() 获取标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTag(array $Tag) 设置标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDNS() 获取dns域名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDNS(array $DNS) 设置dns域名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAssetName() 获取资产名称
 * @method void setAssetName(string $AssetName) 设置资产名称
 * @method string getCIDR() 获取cidr网段
 * @method void setCIDR(string $CIDR) 设置cidr网段
 * @method string getCreateTime() 获取资产创建时间
 * @method void setCreateTime(string $CreateTime) 设置资产创建时间
 * @method string getAppId() 获取appid
 * @method void setAppId(string $AppId) 设置appid
 * @method string getUin() 获取uin
 * @method void setUin(string $Uin) 设置uin
 * @method string getNick() 获取昵称
 * @method void setNick(string $Nick) 设置昵称
 */
class Vpc extends AbstractModel
{
    /**
     * @var integer 子网(只支持32位)
     */
    public $Subnet;

    /**
     * @var integer 互通vpc(只支持32位)
     */
    public $ConnectedVpc;

    /**
     * @var string 资产id
     */
    public $AssetId;

    /**
     * @var string region区域
     */
    public $Region;

    /**
     * @var integer 云服务器(只支持32位)
     */
    public $CVM;

    /**
     * @var array 标签
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tag;

    /**
     * @var array dns域名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DNS;

    /**
     * @var string 资产名称
     */
    public $AssetName;

    /**
     * @var string cidr网段
     */
    public $CIDR;

    /**
     * @var string 资产创建时间
     */
    public $CreateTime;

    /**
     * @var string appid
     */
    public $AppId;

    /**
     * @var string uin
     */
    public $Uin;

    /**
     * @var string 昵称
     */
    public $Nick;

    /**
     * @param integer $Subnet 子网(只支持32位)
     * @param integer $ConnectedVpc 互通vpc(只支持32位)
     * @param string $AssetId 资产id
     * @param string $Region region区域
     * @param integer $CVM 云服务器(只支持32位)
     * @param array $Tag 标签
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $DNS dns域名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AssetName 资产名称
     * @param string $CIDR cidr网段
     * @param string $CreateTime 资产创建时间
     * @param string $AppId appid
     * @param string $Uin uin
     * @param string $Nick 昵称
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
        if (array_key_exists("Subnet",$param) and $param["Subnet"] !== null) {
            $this->Subnet = $param["Subnet"];
        }

        if (array_key_exists("ConnectedVpc",$param) and $param["ConnectedVpc"] !== null) {
            $this->ConnectedVpc = $param["ConnectedVpc"];
        }

        if (array_key_exists("AssetId",$param) and $param["AssetId"] !== null) {
            $this->AssetId = $param["AssetId"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("CVM",$param) and $param["CVM"] !== null) {
            $this->CVM = $param["CVM"];
        }

        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = [];
            foreach ($param["Tag"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tag, $obj);
            }
        }

        if (array_key_exists("DNS",$param) and $param["DNS"] !== null) {
            $this->DNS = $param["DNS"];
        }

        if (array_key_exists("AssetName",$param) and $param["AssetName"] !== null) {
            $this->AssetName = $param["AssetName"];
        }

        if (array_key_exists("CIDR",$param) and $param["CIDR"] !== null) {
            $this->CIDR = $param["CIDR"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("Nick",$param) and $param["Nick"] !== null) {
            $this->Nick = $param["Nick"];
        }
    }
}
