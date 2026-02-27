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
 * ModifyDBInstanceSecurityGroups请求参数结构体
 *
 * @method string getInstanceId() 获取网络组id(cynosdbmysql-grp-前缀开头)或集群id（例如 cynosdbmysql-xxxxxxxx前缀）,当通过实例IP地址三元组（UniqVpcId、Vip、Vport）配置安全组时，该字段必须设置为集群ID（例如 cynosdbmysql-xxxxxxxx前缀）。
 * @method void setInstanceId(string $InstanceId) 设置网络组id(cynosdbmysql-grp-前缀开头)或集群id（例如 cynosdbmysql-xxxxxxxx前缀）,当通过实例IP地址三元组（UniqVpcId、Vip、Vport）配置安全组时，该字段必须设置为集群ID（例如 cynosdbmysql-xxxxxxxx前缀）。
 * @method array getSecurityGroupIds() 获取要修改的安全组ID列表，一个或者多个安全组ID组成的数组。
注意：该入参会全量替换存量已有集合，非增量更新。修改需传入预期的全量集合。
 * @method void setSecurityGroupIds(array $SecurityGroupIds) 设置要修改的安全组ID列表，一个或者多个安全组ID组成的数组。
注意：该入参会全量替换存量已有集合，非增量更新。修改需传入预期的全量集合。
 * @method string getZone() 获取可用区
 * @method void setZone(string $Zone) 设置可用区
 * @method string getUniqVpcId() 获取实例所属VPC网络ID,（UniqVpcId、Vip 和 Vport 三个参数需同时指定，用于唯一标识网络实例）
 * @method void setUniqVpcId(string $UniqVpcId) 设置实例所属VPC网络ID,（UniqVpcId、Vip 和 Vport 三个参数需同时指定，用于唯一标识网络实例）
 * @method string getVip() 获取实例IP地址,实例IP地址三元组UniqVpcId、Vip 和 Vport) 三个参数需同时指定，用于唯一标识网络实实例
 * @method void setVip(string $Vip) 设置实例IP地址,实例IP地址三元组UniqVpcId、Vip 和 Vport) 三个参数需同时指定，用于唯一标识网络实实例
 * @method integer getVport() 获取实例端口,实例IP地址三元组UniqVpcId、Vip 和 Vport) 三个参数需同时指定，用于唯一标识网络实实例
 * @method void setVport(integer $Vport) 设置实例端口,实例IP地址三元组UniqVpcId、Vip 和 Vport) 三个参数需同时指定，用于唯一标识网络实实例
 */
class ModifyDBInstanceSecurityGroupsRequest extends AbstractModel
{
    /**
     * @var string 网络组id(cynosdbmysql-grp-前缀开头)或集群id（例如 cynosdbmysql-xxxxxxxx前缀）,当通过实例IP地址三元组（UniqVpcId、Vip、Vport）配置安全组时，该字段必须设置为集群ID（例如 cynosdbmysql-xxxxxxxx前缀）。
     */
    public $InstanceId;

    /**
     * @var array 要修改的安全组ID列表，一个或者多个安全组ID组成的数组。
注意：该入参会全量替换存量已有集合，非增量更新。修改需传入预期的全量集合。
     */
    public $SecurityGroupIds;

    /**
     * @var string 可用区
     */
    public $Zone;

    /**
     * @var string 实例所属VPC网络ID,（UniqVpcId、Vip 和 Vport 三个参数需同时指定，用于唯一标识网络实例）
     */
    public $UniqVpcId;

    /**
     * @var string 实例IP地址,实例IP地址三元组UniqVpcId、Vip 和 Vport) 三个参数需同时指定，用于唯一标识网络实实例
     */
    public $Vip;

    /**
     * @var integer 实例端口,实例IP地址三元组UniqVpcId、Vip 和 Vport) 三个参数需同时指定，用于唯一标识网络实实例
     */
    public $Vport;

    /**
     * @param string $InstanceId 网络组id(cynosdbmysql-grp-前缀开头)或集群id（例如 cynosdbmysql-xxxxxxxx前缀）,当通过实例IP地址三元组（UniqVpcId、Vip、Vport）配置安全组时，该字段必须设置为集群ID（例如 cynosdbmysql-xxxxxxxx前缀）。
     * @param array $SecurityGroupIds 要修改的安全组ID列表，一个或者多个安全组ID组成的数组。
注意：该入参会全量替换存量已有集合，非增量更新。修改需传入预期的全量集合。
     * @param string $Zone 可用区
     * @param string $UniqVpcId 实例所属VPC网络ID,（UniqVpcId、Vip 和 Vport 三个参数需同时指定，用于唯一标识网络实例）
     * @param string $Vip 实例IP地址,实例IP地址三元组UniqVpcId、Vip 和 Vport) 三个参数需同时指定，用于唯一标识网络实实例
     * @param integer $Vport 实例端口,实例IP地址三元组UniqVpcId、Vip 和 Vport) 三个参数需同时指定，用于唯一标识网络实实例
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("UniqVpcId",$param) and $param["UniqVpcId"] !== null) {
            $this->UniqVpcId = $param["UniqVpcId"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->Vport = $param["Vport"];
        }
    }
}
