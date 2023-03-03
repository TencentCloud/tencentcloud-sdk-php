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
namespace TencentCloud\Mariadb\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateHourDBInstance请求参数结构体
 *
 * @method array getZones() 获取节点可用区分布，最多可填两个可用区。
 * @method void setZones(array $Zones) 设置节点可用区分布，最多可填两个可用区。
 * @method integer getNodeCount() 获取节点个数
 * @method void setNodeCount(integer $NodeCount) 设置节点个数
 * @method integer getMemory() 获取内存大小，单位：GB
 * @method void setMemory(integer $Memory) 设置内存大小，单位：GB
 * @method integer getStorage() 获取储存大小，单位：GB
 * @method void setStorage(integer $Storage) 设置储存大小，单位：GB
 * @method integer getCount() 获取购买实例数量
 * @method void setCount(integer $Count) 设置购买实例数量
 * @method integer getProjectId() 获取项目ID，不传表示默认项目
 * @method void setProjectId(integer $ProjectId) 设置项目ID，不传表示默认项目
 * @method string getVpcId() 获取统一网络ID，不传表示基础网络
 * @method void setVpcId(string $VpcId) 设置统一网络ID，不传表示基础网络
 * @method string getSubnetId() 获取统一子网ID，VpcId有值时需填写
 * @method void setSubnetId(string $SubnetId) 设置统一子网ID，VpcId有值时需填写
 * @method string getDbVersionId() 获取数据库引擎版本，当前可选：8.0，5.7，10.1，10.0。
 * @method void setDbVersionId(string $DbVersionId) 设置数据库引擎版本，当前可选：8.0，5.7，10.1，10.0。
 * @method string getInstanceName() 获取自定义实例名称
 * @method void setInstanceName(string $InstanceName) 设置自定义实例名称
 * @method array getSecurityGroupIds() 获取安全组ID，不传表示不绑定安全组
 * @method void setSecurityGroupIds(array $SecurityGroupIds) 设置安全组ID，不传表示不绑定安全组
 * @method integer getIpv6Flag() 获取是否支持IPv6
 * @method void setIpv6Flag(integer $Ipv6Flag) 设置是否支持IPv6
 * @method array getResourceTags() 获取标签键值对数组
 * @method void setResourceTags(array $ResourceTags) 设置标签键值对数组
 * @method string getDcnRegion() 获取DCN源地域
 * @method void setDcnRegion(string $DcnRegion) 设置DCN源地域
 * @method string getDcnInstanceId() 获取DCN源实例ID
 * @method void setDcnInstanceId(string $DcnInstanceId) 设置DCN源实例ID
 * @method array getInitParams() 获取参数列表。本接口的可选值为：
character_set_server（字符集，必传），lower_case_table_names（表名大小写敏感，必传，0 - 敏感；1-不敏感），
innodb_page_size（innodb数据页，默认16K），sync_mode（同步模式：0 - 异步； 1 - 强同步；2 - 强同步可退化，默认为强同步可退化）。
 * @method void setInitParams(array $InitParams) 设置参数列表。本接口的可选值为：
character_set_server（字符集，必传），lower_case_table_names（表名大小写敏感，必传，0 - 敏感；1-不敏感），
innodb_page_size（innodb数据页，默认16K），sync_mode（同步模式：0 - 异步； 1 - 强同步；2 - 强同步可退化，默认为强同步可退化）。
 * @method string getRollbackInstanceId() 获取回档源实例ID
 * @method void setRollbackInstanceId(string $RollbackInstanceId) 设置回档源实例ID
 * @method string getRollbackTime() 获取回档时间
 * @method void setRollbackTime(string $RollbackTime) 设置回档时间
 */
class CreateHourDBInstanceRequest extends AbstractModel
{
    /**
     * @var array 节点可用区分布，最多可填两个可用区。
     */
    public $Zones;

    /**
     * @var integer 节点个数
     */
    public $NodeCount;

    /**
     * @var integer 内存大小，单位：GB
     */
    public $Memory;

    /**
     * @var integer 储存大小，单位：GB
     */
    public $Storage;

    /**
     * @var integer 购买实例数量
     */
    public $Count;

    /**
     * @var integer 项目ID，不传表示默认项目
     */
    public $ProjectId;

    /**
     * @var string 统一网络ID，不传表示基础网络
     */
    public $VpcId;

    /**
     * @var string 统一子网ID，VpcId有值时需填写
     */
    public $SubnetId;

    /**
     * @var string 数据库引擎版本，当前可选：8.0，5.7，10.1，10.0。
     */
    public $DbVersionId;

    /**
     * @var string 自定义实例名称
     */
    public $InstanceName;

    /**
     * @var array 安全组ID，不传表示不绑定安全组
     */
    public $SecurityGroupIds;

    /**
     * @var integer 是否支持IPv6
     */
    public $Ipv6Flag;

    /**
     * @var array 标签键值对数组
     */
    public $ResourceTags;

    /**
     * @var string DCN源地域
     */
    public $DcnRegion;

    /**
     * @var string DCN源实例ID
     */
    public $DcnInstanceId;

    /**
     * @var array 参数列表。本接口的可选值为：
character_set_server（字符集，必传），lower_case_table_names（表名大小写敏感，必传，0 - 敏感；1-不敏感），
innodb_page_size（innodb数据页，默认16K），sync_mode（同步模式：0 - 异步； 1 - 强同步；2 - 强同步可退化，默认为强同步可退化）。
     */
    public $InitParams;

    /**
     * @var string 回档源实例ID
     */
    public $RollbackInstanceId;

    /**
     * @var string 回档时间
     */
    public $RollbackTime;

    /**
     * @param array $Zones 节点可用区分布，最多可填两个可用区。
     * @param integer $NodeCount 节点个数
     * @param integer $Memory 内存大小，单位：GB
     * @param integer $Storage 储存大小，单位：GB
     * @param integer $Count 购买实例数量
     * @param integer $ProjectId 项目ID，不传表示默认项目
     * @param string $VpcId 统一网络ID，不传表示基础网络
     * @param string $SubnetId 统一子网ID，VpcId有值时需填写
     * @param string $DbVersionId 数据库引擎版本，当前可选：8.0，5.7，10.1，10.0。
     * @param string $InstanceName 自定义实例名称
     * @param array $SecurityGroupIds 安全组ID，不传表示不绑定安全组
     * @param integer $Ipv6Flag 是否支持IPv6
     * @param array $ResourceTags 标签键值对数组
     * @param string $DcnRegion DCN源地域
     * @param string $DcnInstanceId DCN源实例ID
     * @param array $InitParams 参数列表。本接口的可选值为：
character_set_server（字符集，必传），lower_case_table_names（表名大小写敏感，必传，0 - 敏感；1-不敏感），
innodb_page_size（innodb数据页，默认16K），sync_mode（同步模式：0 - 异步； 1 - 强同步；2 - 强同步可退化，默认为强同步可退化）。
     * @param string $RollbackInstanceId 回档源实例ID
     * @param string $RollbackTime 回档时间
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
        if (array_key_exists("Zones",$param) and $param["Zones"] !== null) {
            $this->Zones = $param["Zones"];
        }

        if (array_key_exists("NodeCount",$param) and $param["NodeCount"] !== null) {
            $this->NodeCount = $param["NodeCount"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Storage",$param) and $param["Storage"] !== null) {
            $this->Storage = $param["Storage"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("DbVersionId",$param) and $param["DbVersionId"] !== null) {
            $this->DbVersionId = $param["DbVersionId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }

        if (array_key_exists("Ipv6Flag",$param) and $param["Ipv6Flag"] !== null) {
            $this->Ipv6Flag = $param["Ipv6Flag"];
        }

        if (array_key_exists("ResourceTags",$param) and $param["ResourceTags"] !== null) {
            $this->ResourceTags = [];
            foreach ($param["ResourceTags"] as $key => $value){
                $obj = new ResourceTag();
                $obj->deserialize($value);
                array_push($this->ResourceTags, $obj);
            }
        }

        if (array_key_exists("DcnRegion",$param) and $param["DcnRegion"] !== null) {
            $this->DcnRegion = $param["DcnRegion"];
        }

        if (array_key_exists("DcnInstanceId",$param) and $param["DcnInstanceId"] !== null) {
            $this->DcnInstanceId = $param["DcnInstanceId"];
        }

        if (array_key_exists("InitParams",$param) and $param["InitParams"] !== null) {
            $this->InitParams = [];
            foreach ($param["InitParams"] as $key => $value){
                $obj = new DBParamValue();
                $obj->deserialize($value);
                array_push($this->InitParams, $obj);
            }
        }

        if (array_key_exists("RollbackInstanceId",$param) and $param["RollbackInstanceId"] !== null) {
            $this->RollbackInstanceId = $param["RollbackInstanceId"];
        }

        if (array_key_exists("RollbackTime",$param) and $param["RollbackTime"] !== null) {
            $this->RollbackTime = $param["RollbackTime"];
        }
    }
}
