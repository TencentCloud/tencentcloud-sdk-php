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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateServerlessInstance请求参数结构体
 *
 * @method string getIndexName() 获取索引名，需以-AppId结尾
 * @method void setIndexName(string $IndexName) 设置索引名，需以-AppId结尾
 * @method string getZone() 获取可用区
 * @method void setZone(string $Zone) 设置可用区
 * @method string getVpcId() 获取私有网络ID
 * @method void setVpcId(string $VpcId) 设置私有网络ID
 * @method string getSubnetId() 获取子网ID
 * @method void setSubnetId(string $SubnetId) 设置子网ID
 * @method string getIndexMetaJson() 获取创建的索引元数据JSON，如mappings、settings
 * @method void setIndexMetaJson(string $IndexMetaJson) 设置创建的索引元数据JSON，如mappings、settings
 * @method string getSpaceId() 获取创建索引的空间ID
 * @method void setSpaceId(string $SpaceId) 设置创建索引的空间ID
 * @method string getUsername() 获取创建索引的用户名
 * @method void setUsername(string $Username) 设置创建索引的用户名
 * @method string getPassword() 获取创建索引的密码
 * @method void setPassword(string $Password) 设置创建索引的密码
 * @method ServerlessDi getServerlessDi() 获取创建数据接入
 * @method void setServerlessDi(ServerlessDi $ServerlessDi) 设置创建数据接入
 * @method integer getAutoGetIp() 获取是否自行添加白名单ip
 * @method void setAutoGetIp(integer $AutoGetIp) 设置是否自行添加白名单ip
 * @method array getTagList() 获取标签信息
 * @method void setTagList(array $TagList) 设置标签信息
 * @method array getKibanaWhiteIpList() 获取kibana公网白名单
 * @method void setKibanaWhiteIpList(array $KibanaWhiteIpList) 设置kibana公网白名单
 */
class CreateServerlessInstanceRequest extends AbstractModel
{
    /**
     * @var string 索引名，需以-AppId结尾
     */
    public $IndexName;

    /**
     * @var string 可用区
     */
    public $Zone;

    /**
     * @var string 私有网络ID
     */
    public $VpcId;

    /**
     * @var string 子网ID
     */
    public $SubnetId;

    /**
     * @var string 创建的索引元数据JSON，如mappings、settings
     */
    public $IndexMetaJson;

    /**
     * @var string 创建索引的空间ID
     */
    public $SpaceId;

    /**
     * @var string 创建索引的用户名
     */
    public $Username;

    /**
     * @var string 创建索引的密码
     */
    public $Password;

    /**
     * @var ServerlessDi 创建数据接入
     */
    public $ServerlessDi;

    /**
     * @var integer 是否自行添加白名单ip
     */
    public $AutoGetIp;

    /**
     * @var array 标签信息
     */
    public $TagList;

    /**
     * @var array kibana公网白名单
     */
    public $KibanaWhiteIpList;

    /**
     * @param string $IndexName 索引名，需以-AppId结尾
     * @param string $Zone 可用区
     * @param string $VpcId 私有网络ID
     * @param string $SubnetId 子网ID
     * @param string $IndexMetaJson 创建的索引元数据JSON，如mappings、settings
     * @param string $SpaceId 创建索引的空间ID
     * @param string $Username 创建索引的用户名
     * @param string $Password 创建索引的密码
     * @param ServerlessDi $ServerlessDi 创建数据接入
     * @param integer $AutoGetIp 是否自行添加白名单ip
     * @param array $TagList 标签信息
     * @param array $KibanaWhiteIpList kibana公网白名单
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
        if (array_key_exists("IndexName",$param) and $param["IndexName"] !== null) {
            $this->IndexName = $param["IndexName"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("IndexMetaJson",$param) and $param["IndexMetaJson"] !== null) {
            $this->IndexMetaJson = $param["IndexMetaJson"];
        }

        if (array_key_exists("SpaceId",$param) and $param["SpaceId"] !== null) {
            $this->SpaceId = $param["SpaceId"];
        }

        if (array_key_exists("Username",$param) and $param["Username"] !== null) {
            $this->Username = $param["Username"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("ServerlessDi",$param) and $param["ServerlessDi"] !== null) {
            $this->ServerlessDi = new ServerlessDi();
            $this->ServerlessDi->deserialize($param["ServerlessDi"]);
        }

        if (array_key_exists("AutoGetIp",$param) and $param["AutoGetIp"] !== null) {
            $this->AutoGetIp = $param["AutoGetIp"];
        }

        if (array_key_exists("TagList",$param) and $param["TagList"] !== null) {
            $this->TagList = [];
            foreach ($param["TagList"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->TagList, $obj);
            }
        }

        if (array_key_exists("KibanaWhiteIpList",$param) and $param["KibanaWhiteIpList"] !== null) {
            $this->KibanaWhiteIpList = $param["KibanaWhiteIpList"];
        }
    }
}
