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
 * CreateLibraDBClusters请求参数结构体
 *
 * @method integer getCount() 获取数量
 * @method void setCount(integer $Count) 设置数量
 * @method string getZone() 获取可用区
 * @method void setZone(string $Zone) 设置可用区
 * @method array getInstanceInitInfos() 获取实例初始化信息
 * @method void setInstanceInitInfos(array $InstanceInitInfos) 设置实例初始化信息
 * @method string getAdminPassword() 获取用户密码
 * @method void setAdminPassword(string $AdminPassword) 设置用户密码
 * @method integer getAutoRenewFlag() 获取是否自动续费
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) 设置是否自动续费
 * @method integer getAutoVoucher() 获取是否自动选择代金券
 * @method void setAutoVoucher(integer $AutoVoucher) 设置是否自动选择代金券
 * @method string getClusterName() 获取集群名称
 * @method void setClusterName(string $ClusterName) 设置集群名称
 * @method string getDealMode() 获取下单模式
 * @method void setDealMode(string $DealMode) 设置下单模式
 * @method string getEncryptMethod() 获取加密方法
 * @method void setEncryptMethod(string $EncryptMethod) 设置加密方法
 * @method string getLibraDBVersion() 获取LibraDBVersion 版本，缺省为最新版本
 * @method void setLibraDBVersion(string $LibraDBVersion) 设置LibraDBVersion 版本，缺省为最新版本
 * @method string getOrderSource() 获取订单来源
 * @method void setOrderSource(string $OrderSource) 设置订单来源
 * @method integer getPayMode() 获取付费模式
 * @method void setPayMode(integer $PayMode) 设置付费模式
 * @method string getProjectId() 获取项目id
 * @method void setProjectId(string $ProjectId) 设置项目id
 * @method array getSecurityGroupIds() 获取安全组
 * @method void setSecurityGroupIds(array $SecurityGroupIds) 设置安全组
 * @method integer getTimeSpan() 获取时长
 * @method void setTimeSpan(integer $TimeSpan) 设置时长
 * @method string getTimeUnit() 获取时间单位
 * @method void setTimeUnit(string $TimeUnit) 设置时间单位
 * @method array getResourceTags() 获取实例创建绑定Tag数组信息
 * @method void setResourceTags(array $ResourceTags) 设置实例创建绑定Tag数组信息
 * @method string getVpcId() 获取集群所在vpcId
 * @method void setVpcId(string $VpcId) 设置集群所在vpcId
 * @method string getSubnetId() 获取集群所在SubnetId
 * @method void setSubnetId(string $SubnetId) 设置集群所在SubnetId
 * @method string getPort() 获取端口
 * @method void setPort(string $Port) 设置端口
 */
class CreateLibraDBClustersRequest extends AbstractModel
{
    /**
     * @var integer 数量
     */
    public $Count;

    /**
     * @var string 可用区
     */
    public $Zone;

    /**
     * @var array 实例初始化信息
     */
    public $InstanceInitInfos;

    /**
     * @var string 用户密码
     */
    public $AdminPassword;

    /**
     * @var integer 是否自动续费
     */
    public $AutoRenewFlag;

    /**
     * @var integer 是否自动选择代金券
     */
    public $AutoVoucher;

    /**
     * @var string 集群名称
     */
    public $ClusterName;

    /**
     * @var string 下单模式
     */
    public $DealMode;

    /**
     * @var string 加密方法
     */
    public $EncryptMethod;

    /**
     * @var string LibraDBVersion 版本，缺省为最新版本
     */
    public $LibraDBVersion;

    /**
     * @var string 订单来源
     */
    public $OrderSource;

    /**
     * @var integer 付费模式
     */
    public $PayMode;

    /**
     * @var string 项目id
     */
    public $ProjectId;

    /**
     * @var array 安全组
     */
    public $SecurityGroupIds;

    /**
     * @var integer 时长
     */
    public $TimeSpan;

    /**
     * @var string 时间单位
     */
    public $TimeUnit;

    /**
     * @var array 实例创建绑定Tag数组信息
     */
    public $ResourceTags;

    /**
     * @var string 集群所在vpcId
     */
    public $VpcId;

    /**
     * @var string 集群所在SubnetId
     */
    public $SubnetId;

    /**
     * @var string 端口
     */
    public $Port;

    /**
     * @param integer $Count 数量
     * @param string $Zone 可用区
     * @param array $InstanceInitInfos 实例初始化信息
     * @param string $AdminPassword 用户密码
     * @param integer $AutoRenewFlag 是否自动续费
     * @param integer $AutoVoucher 是否自动选择代金券
     * @param string $ClusterName 集群名称
     * @param string $DealMode 下单模式
     * @param string $EncryptMethod 加密方法
     * @param string $LibraDBVersion LibraDBVersion 版本，缺省为最新版本
     * @param string $OrderSource 订单来源
     * @param integer $PayMode 付费模式
     * @param string $ProjectId 项目id
     * @param array $SecurityGroupIds 安全组
     * @param integer $TimeSpan 时长
     * @param string $TimeUnit 时间单位
     * @param array $ResourceTags 实例创建绑定Tag数组信息
     * @param string $VpcId 集群所在vpcId
     * @param string $SubnetId 集群所在SubnetId
     * @param string $Port 端口
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
        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("InstanceInitInfos",$param) and $param["InstanceInitInfos"] !== null) {
            $this->InstanceInitInfos = [];
            foreach ($param["InstanceInitInfos"] as $key => $value){
                $obj = new LibraDBInstanceInitInfo();
                $obj->deserialize($value);
                array_push($this->InstanceInitInfos, $obj);
            }
        }

        if (array_key_exists("AdminPassword",$param) and $param["AdminPassword"] !== null) {
            $this->AdminPassword = $param["AdminPassword"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("AutoVoucher",$param) and $param["AutoVoucher"] !== null) {
            $this->AutoVoucher = $param["AutoVoucher"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("DealMode",$param) and $param["DealMode"] !== null) {
            $this->DealMode = $param["DealMode"];
        }

        if (array_key_exists("EncryptMethod",$param) and $param["EncryptMethod"] !== null) {
            $this->EncryptMethod = $param["EncryptMethod"];
        }

        if (array_key_exists("LibraDBVersion",$param) and $param["LibraDBVersion"] !== null) {
            $this->LibraDBVersion = $param["LibraDBVersion"];
        }

        if (array_key_exists("OrderSource",$param) and $param["OrderSource"] !== null) {
            $this->OrderSource = $param["OrderSource"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }

        if (array_key_exists("TimeSpan",$param) and $param["TimeSpan"] !== null) {
            $this->TimeSpan = $param["TimeSpan"];
        }

        if (array_key_exists("TimeUnit",$param) and $param["TimeUnit"] !== null) {
            $this->TimeUnit = $param["TimeUnit"];
        }

        if (array_key_exists("ResourceTags",$param) and $param["ResourceTags"] !== null) {
            $this->ResourceTags = [];
            foreach ($param["ResourceTags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->ResourceTags, $obj);
            }
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }
    }
}
