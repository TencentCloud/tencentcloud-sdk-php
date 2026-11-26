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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateProxy请求参数结构体
 *
 * @method string getClusterId() 获取<p>集群ID</p>
 * @method void setClusterId(string $ClusterId) 设置<p>集群ID</p>
 * @method integer getCpu() 获取<p>cpu核数</p>
 * @method void setCpu(integer $Cpu) 设置<p>cpu核数</p>
 * @method integer getMem() 获取<p>内存</p>
 * @method void setMem(integer $Mem) 设置<p>内存</p>
 * @method string getProxyVersion() 获取<p>代理内核版本。不传时默认使用最新稳定版本（白名单用户以appoint策略为准）；显式指定时将实时校验该版本是否在当前集群支持的代理版本集合内，不在则返回错误。集群存在已开启列存索引的只读实例时，所选版本需不低于列存转发要求的最低版本（如1.4.7）</p>
 * @method void setProxyVersion(string $ProxyVersion) 设置<p>代理内核版本。不传时默认使用最新稳定版本（白名单用户以appoint策略为准）；显式指定时将实时校验该版本是否在当前集群支持的代理版本集合内，不在则返回错误。集群存在已开启列存索引的只读实例时，所选版本需不低于列存转发要求的最低版本（如1.4.7）</p>
 * @method string getUniqueVpcId() 获取<p>私有网络ID，默认与集群私有网络ID保持一致</p>
 * @method void setUniqueVpcId(string $UniqueVpcId) 设置<p>私有网络ID，默认与集群私有网络ID保持一致</p>
 * @method string getUniqueSubnetId() 获取<p>私有网络子网ID，默认与集群子网ID保持一致</p>
 * @method void setUniqueSubnetId(string $UniqueSubnetId) 设置<p>私有网络子网ID，默认与集群子网ID保持一致</p>
 * @method integer getProxyCount() 获取<p>数据库代理组节点个数（该参数不再建议使用，建议使用ProxyZones)</p>
 * @method void setProxyCount(integer $ProxyCount) 设置<p>数据库代理组节点个数（该参数不再建议使用，建议使用ProxyZones)</p>
 * @method string getConnectionPoolType() 获取<p>连接池类型：SessionConnectionPool(会话级别连接池 )</p>
 * @method void setConnectionPoolType(string $ConnectionPoolType) 设置<p>连接池类型：SessionConnectionPool(会话级别连接池 )</p>
 * @method string getOpenConnectionPool() 获取<p>是否开启连接池,yes-开启，no-不开启</p>
 * @method void setOpenConnectionPool(string $OpenConnectionPool) 设置<p>是否开启连接池,yes-开启，no-不开启</p>
 * @method integer getConnectionPoolTimeOut() 获取<p>连接池阈值：单位（秒）</p>
 * @method void setConnectionPoolTimeOut(integer $ConnectionPoolTimeOut) 设置<p>连接池阈值：单位（秒）</p>
 * @method array getSecurityGroupIds() 获取<p>安全组ID数组</p>
 * @method void setSecurityGroupIds(array $SecurityGroupIds) 设置<p>安全组ID数组</p>
 * @method string getDescription() 获取<p>描述说明</p>
 * @method void setDescription(string $Description) 设置<p>描述说明</p>
 * @method array getProxyZones() 获取<p>数据库节点信息（该参数与ProxyCount需要任选一个输入）</p>
 * @method void setProxyZones(array $ProxyZones) 设置<p>数据库节点信息（该参数与ProxyCount需要任选一个输入）</p>
 */
class CreateProxyRequest extends AbstractModel
{
    /**
     * @var string <p>集群ID</p>
     */
    public $ClusterId;

    /**
     * @var integer <p>cpu核数</p>
     */
    public $Cpu;

    /**
     * @var integer <p>内存</p>
     */
    public $Mem;

    /**
     * @var string <p>代理内核版本。不传时默认使用最新稳定版本（白名单用户以appoint策略为准）；显式指定时将实时校验该版本是否在当前集群支持的代理版本集合内，不在则返回错误。集群存在已开启列存索引的只读实例时，所选版本需不低于列存转发要求的最低版本（如1.4.7）</p>
     */
    public $ProxyVersion;

    /**
     * @var string <p>私有网络ID，默认与集群私有网络ID保持一致</p>
     */
    public $UniqueVpcId;

    /**
     * @var string <p>私有网络子网ID，默认与集群子网ID保持一致</p>
     */
    public $UniqueSubnetId;

    /**
     * @var integer <p>数据库代理组节点个数（该参数不再建议使用，建议使用ProxyZones)</p>
     */
    public $ProxyCount;

    /**
     * @var string <p>连接池类型：SessionConnectionPool(会话级别连接池 )</p>
     */
    public $ConnectionPoolType;

    /**
     * @var string <p>是否开启连接池,yes-开启，no-不开启</p>
     */
    public $OpenConnectionPool;

    /**
     * @var integer <p>连接池阈值：单位（秒）</p>
     */
    public $ConnectionPoolTimeOut;

    /**
     * @var array <p>安全组ID数组</p>
     */
    public $SecurityGroupIds;

    /**
     * @var string <p>描述说明</p>
     */
    public $Description;

    /**
     * @var array <p>数据库节点信息（该参数与ProxyCount需要任选一个输入）</p>
     */
    public $ProxyZones;

    /**
     * @param string $ClusterId <p>集群ID</p>
     * @param integer $Cpu <p>cpu核数</p>
     * @param integer $Mem <p>内存</p>
     * @param string $ProxyVersion <p>代理内核版本。不传时默认使用最新稳定版本（白名单用户以appoint策略为准）；显式指定时将实时校验该版本是否在当前集群支持的代理版本集合内，不在则返回错误。集群存在已开启列存索引的只读实例时，所选版本需不低于列存转发要求的最低版本（如1.4.7）</p>
     * @param string $UniqueVpcId <p>私有网络ID，默认与集群私有网络ID保持一致</p>
     * @param string $UniqueSubnetId <p>私有网络子网ID，默认与集群子网ID保持一致</p>
     * @param integer $ProxyCount <p>数据库代理组节点个数（该参数不再建议使用，建议使用ProxyZones)</p>
     * @param string $ConnectionPoolType <p>连接池类型：SessionConnectionPool(会话级别连接池 )</p>
     * @param string $OpenConnectionPool <p>是否开启连接池,yes-开启，no-不开启</p>
     * @param integer $ConnectionPoolTimeOut <p>连接池阈值：单位（秒）</p>
     * @param array $SecurityGroupIds <p>安全组ID数组</p>
     * @param string $Description <p>描述说明</p>
     * @param array $ProxyZones <p>数据库节点信息（该参数与ProxyCount需要任选一个输入）</p>
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Mem",$param) and $param["Mem"] !== null) {
            $this->Mem = $param["Mem"];
        }

        if (array_key_exists("ProxyVersion",$param) and $param["ProxyVersion"] !== null) {
            $this->ProxyVersion = $param["ProxyVersion"];
        }

        if (array_key_exists("UniqueVpcId",$param) and $param["UniqueVpcId"] !== null) {
            $this->UniqueVpcId = $param["UniqueVpcId"];
        }

        if (array_key_exists("UniqueSubnetId",$param) and $param["UniqueSubnetId"] !== null) {
            $this->UniqueSubnetId = $param["UniqueSubnetId"];
        }

        if (array_key_exists("ProxyCount",$param) and $param["ProxyCount"] !== null) {
            $this->ProxyCount = $param["ProxyCount"];
        }

        if (array_key_exists("ConnectionPoolType",$param) and $param["ConnectionPoolType"] !== null) {
            $this->ConnectionPoolType = $param["ConnectionPoolType"];
        }

        if (array_key_exists("OpenConnectionPool",$param) and $param["OpenConnectionPool"] !== null) {
            $this->OpenConnectionPool = $param["OpenConnectionPool"];
        }

        if (array_key_exists("ConnectionPoolTimeOut",$param) and $param["ConnectionPoolTimeOut"] !== null) {
            $this->ConnectionPoolTimeOut = $param["ConnectionPoolTimeOut"];
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("ProxyZones",$param) and $param["ProxyZones"] !== null) {
            $this->ProxyZones = [];
            foreach ($param["ProxyZones"] as $key => $value){
                $obj = new ProxyZone();
                $obj->deserialize($value);
                array_push($this->ProxyZones, $obj);
            }
        }
    }
}
