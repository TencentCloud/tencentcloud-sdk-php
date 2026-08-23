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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyImageRegistry请求参数结构体
 *
 * @method array getMemberId() 获取<p>集团账号的成员id</p>
 * @method void setMemberId(array $MemberId) 设置<p>集团账号的成员id</p>
 * @method string getName() 获取<p>镜像仓库名</p>
 * @method void setName(string $Name) 设置<p>镜像仓库名</p>
 * @method string getUsername() 获取<p>账号</p>
 * @method void setUsername(string $Username) 设置<p>账号</p>
 * @method string getPassword() 获取<p>密码</p>
 * @method void setPassword(string $Password) 设置<p>密码</p>
 * @method string getUrl() 获取<p>镜像仓库url</p>
 * @method void setUrl(string $Url) 设置<p>镜像仓库url</p>
 * @method string getRegistryType() 获取<p>镜像仓库类型</p>
 * @method void setRegistryType(string $RegistryType) 设置<p>镜像仓库类型</p>
 * @method string getNetType() 获取<p>网络类型</p>
 * @method void setNetType(string $NetType) 设置<p>网络类型</p>
 * @method string getRegistryVersion() 获取<p>镜像仓库版本</p>
 * @method void setRegistryVersion(string $RegistryVersion) 设置<p>镜像仓库版本</p>
 * @method string getRegistryRegion() 获取<p>镜像仓库所属region</p>
 * @method void setRegistryRegion(string $RegistryRegion) 设置<p>镜像仓库所属region</p>
 * @method integer getSpeedLimit() 获取<p>限速值</p>
 * @method void setSpeedLimit(integer $SpeedLimit) 设置<p>限速值</p>
 * @method integer getInsecure() 获取<p>安全模式（证书校验）</p><p>枚举值：</p><ul><li>0： 安全模式</li><li>1： 非安全模式</li></ul>
 * @method void setInsecure(integer $Insecure) 设置<p>安全模式（证书校验）</p><p>枚举值：</p><ul><li>0： 安全模式</li><li>1： 非安全模式</li></ul>
 * @method boolean getNeedScan() 获取<p>是否自动扫描</p>
 * @method void setNeedScan(boolean $NeedScan) 设置<p>是否自动扫描</p>
 * @method integer getSyncMode() 获取<p>同步方式</p><p>枚举值：</p><ul><li>0： 全量同步</li><li>1： 增量同步</li></ul>
 * @method void setSyncMode(integer $SyncMode) 设置<p>同步方式</p><p>枚举值：</p><ul><li>0： 全量同步</li><li>1： 增量同步</li></ul>
 * @method string getInstanceId() 获取<p>镜像仓库实例id</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>镜像仓库实例id</p>
 * @method array getConnectivityDetectConfig() 获取<p>联通性检测配置</p>
 * @method void setConnectivityDetectConfig(array $ConnectivityDetectConfig) 设置<p>联通性检测配置</p>
 * @method integer getId() 获取<p>镜像仓库id</p>
 * @method void setId(integer $Id) 设置<p>镜像仓库id</p>
 */
class ModifyImageRegistryRequest extends AbstractModel
{
    /**
     * @var array <p>集团账号的成员id</p>
     */
    public $MemberId;

    /**
     * @var string <p>镜像仓库名</p>
     */
    public $Name;

    /**
     * @var string <p>账号</p>
     */
    public $Username;

    /**
     * @var string <p>密码</p>
     */
    public $Password;

    /**
     * @var string <p>镜像仓库url</p>
     */
    public $Url;

    /**
     * @var string <p>镜像仓库类型</p>
     */
    public $RegistryType;

    /**
     * @var string <p>网络类型</p>
     */
    public $NetType;

    /**
     * @var string <p>镜像仓库版本</p>
     */
    public $RegistryVersion;

    /**
     * @var string <p>镜像仓库所属region</p>
     */
    public $RegistryRegion;

    /**
     * @var integer <p>限速值</p>
     */
    public $SpeedLimit;

    /**
     * @var integer <p>安全模式（证书校验）</p><p>枚举值：</p><ul><li>0： 安全模式</li><li>1： 非安全模式</li></ul>
     */
    public $Insecure;

    /**
     * @var boolean <p>是否自动扫描</p>
     */
    public $NeedScan;

    /**
     * @var integer <p>同步方式</p><p>枚举值：</p><ul><li>0： 全量同步</li><li>1： 增量同步</li></ul>
     */
    public $SyncMode;

    /**
     * @var string <p>镜像仓库实例id</p>
     */
    public $InstanceId;

    /**
     * @var array <p>联通性检测配置</p>
     */
    public $ConnectivityDetectConfig;

    /**
     * @var integer <p>镜像仓库id</p>
     */
    public $Id;

    /**
     * @param array $MemberId <p>集团账号的成员id</p>
     * @param string $Name <p>镜像仓库名</p>
     * @param string $Username <p>账号</p>
     * @param string $Password <p>密码</p>
     * @param string $Url <p>镜像仓库url</p>
     * @param string $RegistryType <p>镜像仓库类型</p>
     * @param string $NetType <p>网络类型</p>
     * @param string $RegistryVersion <p>镜像仓库版本</p>
     * @param string $RegistryRegion <p>镜像仓库所属region</p>
     * @param integer $SpeedLimit <p>限速值</p>
     * @param integer $Insecure <p>安全模式（证书校验）</p><p>枚举值：</p><ul><li>0： 安全模式</li><li>1： 非安全模式</li></ul>
     * @param boolean $NeedScan <p>是否自动扫描</p>
     * @param integer $SyncMode <p>同步方式</p><p>枚举值：</p><ul><li>0： 全量同步</li><li>1： 增量同步</li></ul>
     * @param string $InstanceId <p>镜像仓库实例id</p>
     * @param array $ConnectivityDetectConfig <p>联通性检测配置</p>
     * @param integer $Id <p>镜像仓库id</p>
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
        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Username",$param) and $param["Username"] !== null) {
            $this->Username = $param["Username"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("RegistryType",$param) and $param["RegistryType"] !== null) {
            $this->RegistryType = $param["RegistryType"];
        }

        if (array_key_exists("NetType",$param) and $param["NetType"] !== null) {
            $this->NetType = $param["NetType"];
        }

        if (array_key_exists("RegistryVersion",$param) and $param["RegistryVersion"] !== null) {
            $this->RegistryVersion = $param["RegistryVersion"];
        }

        if (array_key_exists("RegistryRegion",$param) and $param["RegistryRegion"] !== null) {
            $this->RegistryRegion = $param["RegistryRegion"];
        }

        if (array_key_exists("SpeedLimit",$param) and $param["SpeedLimit"] !== null) {
            $this->SpeedLimit = $param["SpeedLimit"];
        }

        if (array_key_exists("Insecure",$param) and $param["Insecure"] !== null) {
            $this->Insecure = $param["Insecure"];
        }

        if (array_key_exists("NeedScan",$param) and $param["NeedScan"] !== null) {
            $this->NeedScan = $param["NeedScan"];
        }

        if (array_key_exists("SyncMode",$param) and $param["SyncMode"] !== null) {
            $this->SyncMode = $param["SyncMode"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ConnectivityDetectConfig",$param) and $param["ConnectivityDetectConfig"] !== null) {
            $this->ConnectivityDetectConfig = [];
            foreach ($param["ConnectivityDetectConfig"] as $key => $value){
                $obj = new ConnectivityDetectConfig();
                $obj->deserialize($value);
                array_push($this->ConnectivityDetectConfig, $obj);
            }
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }
    }
}
