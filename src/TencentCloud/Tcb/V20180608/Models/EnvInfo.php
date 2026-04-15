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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 环境信息
 *
 * @method string getEnvId() 获取<p>账户下该环境唯一标识</p>
 * @method void setEnvId(string $EnvId) 设置<p>账户下该环境唯一标识</p>
 * @method string getSource() 获取<p>环境来源。包含以下取值：</p><li>miniapp：微信小程序</li><li>qcloud ：腾讯云</li>
 * @method void setSource(string $Source) 设置<p>环境来源。包含以下取值：</p><li>miniapp：微信小程序</li><li>qcloud ：腾讯云</li>
 * @method string getAlias() 获取<p>环境别名，要以a-z开头，不能包含 a-zA-z0-9- 以外的字符</p>
 * @method void setAlias(string $Alias) 设置<p>环境别名，要以a-z开头，不能包含 a-zA-z0-9- 以外的字符</p>
 * @method string getCreateTime() 获取<p>创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间</p>
 * @method string getUpdateTime() 获取<p>最后修改时间</p>
 * @method void setUpdateTime(string $UpdateTime) 设置<p>最后修改时间</p>
 * @method string getStatus() 获取<p>环境状态。包含以下取值：</p><li>NORMAL：正常可用</li><li>UNAVAILABLE：服务不可用，可能是尚未初始化或者初始化过程中</li>
 * @method void setStatus(string $Status) 设置<p>环境状态。包含以下取值：</p><li>NORMAL：正常可用</li><li>UNAVAILABLE：服务不可用，可能是尚未初始化或者初始化过程中</li>
 * @method array getDatabases() 获取<p>数据库列表</p>
 * @method void setDatabases(array $Databases) 设置<p>数据库列表</p>
 * @method array getStorages() 获取<p>存储列表</p>
 * @method void setStorages(array $Storages) 设置<p>存储列表</p>
 * @method array getFunctions() 获取<p>函数列表</p>
 * @method void setFunctions(array $Functions) 设置<p>函数列表</p>
 * @method string getPackageId() 获取<p>tcb产品套餐ID，参考DescribePackages接口的返回值。</p>
 * @method void setPackageId(string $PackageId) 设置<p>tcb产品套餐ID，参考DescribePackages接口的返回值。</p>
 * @method string getPackageName() 获取<p>套餐中文名称，参考DescribePackages接口的返回值。</p>
 * @method void setPackageName(string $PackageName) 设置<p>套餐中文名称，参考DescribePackages接口的返回值。</p>
 * @method array getLogServices() 获取<p>云日志服务列表</p>
 * @method void setLogServices(array $LogServices) 设置<p>云日志服务列表</p>
 * @method array getStaticStorages() 获取<p>静态资源信息</p>
 * @method void setStaticStorages(array $StaticStorages) 设置<p>静态资源信息</p>
 * @method boolean getIsAutoDegrade() 获取<p>是否到期自动降为免费版</p>
 * @method void setIsAutoDegrade(boolean $IsAutoDegrade) 设置<p>是否到期自动降为免费版</p>
 * @method string getEnvChannel() 获取<p>环境渠道</p>
 * @method void setEnvChannel(string $EnvChannel) 设置<p>环境渠道</p>
 * @method string getPayMode() 获取<p>支付方式。包含以下取值：</p><li> prepayment：预付费</li><li> postpaid：后付费</li>
 * @method void setPayMode(string $PayMode) 设置<p>支付方式。包含以下取值：</p><li> prepayment：预付费</li><li> postpaid：后付费</li>
 * @method boolean getIsDefault() 获取<p>是否为默认环境</p>
 * @method void setIsDefault(boolean $IsDefault) 设置<p>是否为默认环境</p>
 * @method string getRegion() 获取<p>环境所属地域</p>
 * @method void setRegion(string $Region) 设置<p>环境所属地域</p>
 * @method array getTags() 获取<p>环境标签列表</p>
 * @method void setTags(array $Tags) 设置<p>环境标签列表</p>
 * @method array getCustomLogServices() 获取<p>自定义日志服务</p>
 * @method void setCustomLogServices(array $CustomLogServices) 设置<p>自定义日志服务</p>
 * @method string getEnvType() 获取<p>环境类型：baas, run, hoting, weda</p>
 * @method void setEnvType(string $EnvType) 设置<p>环境类型：baas, run, hoting, weda</p>
 * @method boolean getIsDauPackage() 获取<p>是否是dau新套餐</p>
 * @method void setIsDauPackage(boolean $IsDauPackage) 设置<p>是否是dau新套餐</p>
 * @method string getPackageType() 获取<p>套餐类型:空\baas\tcbr</p>
 * @method void setPackageType(string $PackageType) 设置<p>套餐类型:空\baas\tcbr</p>
 * @method string getArchitectureType() 获取<p>架构类型</p>
 * @method void setArchitectureType(string $ArchitectureType) 设置<p>架构类型</p>
 * @method string getRecycle() 获取<p>回收标志，默认为空</p>
 * @method void setRecycle(string $Recycle) 设置<p>回收标志，默认为空</p>
 */
class EnvInfo extends AbstractModel
{
    /**
     * @var string <p>账户下该环境唯一标识</p>
     */
    public $EnvId;

    /**
     * @var string <p>环境来源。包含以下取值：</p><li>miniapp：微信小程序</li><li>qcloud ：腾讯云</li>
     */
    public $Source;

    /**
     * @var string <p>环境别名，要以a-z开头，不能包含 a-zA-z0-9- 以外的字符</p>
     */
    public $Alias;

    /**
     * @var string <p>创建时间</p>
     */
    public $CreateTime;

    /**
     * @var string <p>最后修改时间</p>
     */
    public $UpdateTime;

    /**
     * @var string <p>环境状态。包含以下取值：</p><li>NORMAL：正常可用</li><li>UNAVAILABLE：服务不可用，可能是尚未初始化或者初始化过程中</li>
     */
    public $Status;

    /**
     * @var array <p>数据库列表</p>
     */
    public $Databases;

    /**
     * @var array <p>存储列表</p>
     */
    public $Storages;

    /**
     * @var array <p>函数列表</p>
     */
    public $Functions;

    /**
     * @var string <p>tcb产品套餐ID，参考DescribePackages接口的返回值。</p>
     */
    public $PackageId;

    /**
     * @var string <p>套餐中文名称，参考DescribePackages接口的返回值。</p>
     */
    public $PackageName;

    /**
     * @var array <p>云日志服务列表</p>
     */
    public $LogServices;

    /**
     * @var array <p>静态资源信息</p>
     */
    public $StaticStorages;

    /**
     * @var boolean <p>是否到期自动降为免费版</p>
     */
    public $IsAutoDegrade;

    /**
     * @var string <p>环境渠道</p>
     */
    public $EnvChannel;

    /**
     * @var string <p>支付方式。包含以下取值：</p><li> prepayment：预付费</li><li> postpaid：后付费</li>
     */
    public $PayMode;

    /**
     * @var boolean <p>是否为默认环境</p>
     */
    public $IsDefault;

    /**
     * @var string <p>环境所属地域</p>
     */
    public $Region;

    /**
     * @var array <p>环境标签列表</p>
     */
    public $Tags;

    /**
     * @var array <p>自定义日志服务</p>
     */
    public $CustomLogServices;

    /**
     * @var string <p>环境类型：baas, run, hoting, weda</p>
     */
    public $EnvType;

    /**
     * @var boolean <p>是否是dau新套餐</p>
     */
    public $IsDauPackage;

    /**
     * @var string <p>套餐类型:空\baas\tcbr</p>
     */
    public $PackageType;

    /**
     * @var string <p>架构类型</p>
     */
    public $ArchitectureType;

    /**
     * @var string <p>回收标志，默认为空</p>
     */
    public $Recycle;

    /**
     * @param string $EnvId <p>账户下该环境唯一标识</p>
     * @param string $Source <p>环境来源。包含以下取值：</p><li>miniapp：微信小程序</li><li>qcloud ：腾讯云</li>
     * @param string $Alias <p>环境别名，要以a-z开头，不能包含 a-zA-z0-9- 以外的字符</p>
     * @param string $CreateTime <p>创建时间</p>
     * @param string $UpdateTime <p>最后修改时间</p>
     * @param string $Status <p>环境状态。包含以下取值：</p><li>NORMAL：正常可用</li><li>UNAVAILABLE：服务不可用，可能是尚未初始化或者初始化过程中</li>
     * @param array $Databases <p>数据库列表</p>
     * @param array $Storages <p>存储列表</p>
     * @param array $Functions <p>函数列表</p>
     * @param string $PackageId <p>tcb产品套餐ID，参考DescribePackages接口的返回值。</p>
     * @param string $PackageName <p>套餐中文名称，参考DescribePackages接口的返回值。</p>
     * @param array $LogServices <p>云日志服务列表</p>
     * @param array $StaticStorages <p>静态资源信息</p>
     * @param boolean $IsAutoDegrade <p>是否到期自动降为免费版</p>
     * @param string $EnvChannel <p>环境渠道</p>
     * @param string $PayMode <p>支付方式。包含以下取值：</p><li> prepayment：预付费</li><li> postpaid：后付费</li>
     * @param boolean $IsDefault <p>是否为默认环境</p>
     * @param string $Region <p>环境所属地域</p>
     * @param array $Tags <p>环境标签列表</p>
     * @param array $CustomLogServices <p>自定义日志服务</p>
     * @param string $EnvType <p>环境类型：baas, run, hoting, weda</p>
     * @param boolean $IsDauPackage <p>是否是dau新套餐</p>
     * @param string $PackageType <p>套餐类型:空\baas\tcbr</p>
     * @param string $ArchitectureType <p>架构类型</p>
     * @param string $Recycle <p>回收标志，默认为空</p>
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
        if (array_key_exists("EnvId",$param) and $param["EnvId"] !== null) {
            $this->EnvId = $param["EnvId"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("Alias",$param) and $param["Alias"] !== null) {
            $this->Alias = $param["Alias"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Databases",$param) and $param["Databases"] !== null) {
            $this->Databases = [];
            foreach ($param["Databases"] as $key => $value){
                $obj = new DatabasesInfo();
                $obj->deserialize($value);
                array_push($this->Databases, $obj);
            }
        }

        if (array_key_exists("Storages",$param) and $param["Storages"] !== null) {
            $this->Storages = [];
            foreach ($param["Storages"] as $key => $value){
                $obj = new StorageInfo();
                $obj->deserialize($value);
                array_push($this->Storages, $obj);
            }
        }

        if (array_key_exists("Functions",$param) and $param["Functions"] !== null) {
            $this->Functions = [];
            foreach ($param["Functions"] as $key => $value){
                $obj = new FunctionInfo();
                $obj->deserialize($value);
                array_push($this->Functions, $obj);
            }
        }

        if (array_key_exists("PackageId",$param) and $param["PackageId"] !== null) {
            $this->PackageId = $param["PackageId"];
        }

        if (array_key_exists("PackageName",$param) and $param["PackageName"] !== null) {
            $this->PackageName = $param["PackageName"];
        }

        if (array_key_exists("LogServices",$param) and $param["LogServices"] !== null) {
            $this->LogServices = [];
            foreach ($param["LogServices"] as $key => $value){
                $obj = new LogServiceInfo();
                $obj->deserialize($value);
                array_push($this->LogServices, $obj);
            }
        }

        if (array_key_exists("StaticStorages",$param) and $param["StaticStorages"] !== null) {
            $this->StaticStorages = [];
            foreach ($param["StaticStorages"] as $key => $value){
                $obj = new StaticStorageInfo();
                $obj->deserialize($value);
                array_push($this->StaticStorages, $obj);
            }
        }

        if (array_key_exists("IsAutoDegrade",$param) and $param["IsAutoDegrade"] !== null) {
            $this->IsAutoDegrade = $param["IsAutoDegrade"];
        }

        if (array_key_exists("EnvChannel",$param) and $param["EnvChannel"] !== null) {
            $this->EnvChannel = $param["EnvChannel"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("IsDefault",$param) and $param["IsDefault"] !== null) {
            $this->IsDefault = $param["IsDefault"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("CustomLogServices",$param) and $param["CustomLogServices"] !== null) {
            $this->CustomLogServices = [];
            foreach ($param["CustomLogServices"] as $key => $value){
                $obj = new ClsInfo();
                $obj->deserialize($value);
                array_push($this->CustomLogServices, $obj);
            }
        }

        if (array_key_exists("EnvType",$param) and $param["EnvType"] !== null) {
            $this->EnvType = $param["EnvType"];
        }

        if (array_key_exists("IsDauPackage",$param) and $param["IsDauPackage"] !== null) {
            $this->IsDauPackage = $param["IsDauPackage"];
        }

        if (array_key_exists("PackageType",$param) and $param["PackageType"] !== null) {
            $this->PackageType = $param["PackageType"];
        }

        if (array_key_exists("ArchitectureType",$param) and $param["ArchitectureType"] !== null) {
            $this->ArchitectureType = $param["ArchitectureType"];
        }

        if (array_key_exists("Recycle",$param) and $param["Recycle"] !== null) {
            $this->Recycle = $param["Recycle"];
        }
    }
}
