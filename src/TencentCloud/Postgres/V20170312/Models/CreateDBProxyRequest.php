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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateDBProxy请求参数结构体
 *
 * @method string getDBInstanceId() 获取<p>实例 ID，格式形如：postgres-xxxxxxxx</p>
 * @method void setDBInstanceId(string $DBInstanceId) 设置<p>实例 ID，格式形如：postgres-xxxxxxxx</p>
 * @method string getVpcId() 获取<p>Proxy 所在私有网络 ID，需与主实例所在 VPC 一致</p>
 * @method void setVpcId(string $VpcId) 设置<p>Proxy 所在私有网络 ID，需与主实例所在 VPC 一致</p>
 * @method string getSubnetId() 获取<p>Proxy 所在私有网络子网 ID</p>
 * @method void setSubnetId(string $SubnetId) 设置<p>Proxy 所在私有网络子网 ID</p>
 * @method array getProxyNodeCustom() 获取<p>Proxy 节点自定义规格列表，至少一个元素，按可用区分组</p>
 * @method void setProxyNodeCustom(array $ProxyNodeCustom) 设置<p>Proxy 节点自定义规格列表，至少一个元素，按可用区分组</p>
 * @method array getSecurityGroup() 获取<p>Proxy 关联的安全组 ID 列表</p>
 * @method void setSecurityGroup(array $SecurityGroup) 设置<p>Proxy 关联的安全组 ID 列表</p>
 * @method string getDescription() 获取<p>Proxy 描述信息</p><p>长度范围：[0, 256]</p>
 * @method void setDescription(string $Description) 设置<p>Proxy 描述信息</p><p>长度范围：[0, 256]</p>
 * @method integer getConnectionPoolLimit() 获取<p>连接池阈值（连接数），单位：个</p>
 * @method void setConnectionPoolLimit(integer $ConnectionPoolLimit) 设置<p>连接池阈值（连接数），单位：个</p>
 */
class CreateDBProxyRequest extends AbstractModel
{
    /**
     * @var string <p>实例 ID，格式形如：postgres-xxxxxxxx</p>
     */
    public $DBInstanceId;

    /**
     * @var string <p>Proxy 所在私有网络 ID，需与主实例所在 VPC 一致</p>
     */
    public $VpcId;

    /**
     * @var string <p>Proxy 所在私有网络子网 ID</p>
     */
    public $SubnetId;

    /**
     * @var array <p>Proxy 节点自定义规格列表，至少一个元素，按可用区分组</p>
     */
    public $ProxyNodeCustom;

    /**
     * @var array <p>Proxy 关联的安全组 ID 列表</p>
     */
    public $SecurityGroup;

    /**
     * @var string <p>Proxy 描述信息</p><p>长度范围：[0, 256]</p>
     */
    public $Description;

    /**
     * @var integer <p>连接池阈值（连接数），单位：个</p>
     */
    public $ConnectionPoolLimit;

    /**
     * @param string $DBInstanceId <p>实例 ID，格式形如：postgres-xxxxxxxx</p>
     * @param string $VpcId <p>Proxy 所在私有网络 ID，需与主实例所在 VPC 一致</p>
     * @param string $SubnetId <p>Proxy 所在私有网络子网 ID</p>
     * @param array $ProxyNodeCustom <p>Proxy 节点自定义规格列表，至少一个元素，按可用区分组</p>
     * @param array $SecurityGroup <p>Proxy 关联的安全组 ID 列表</p>
     * @param string $Description <p>Proxy 描述信息</p><p>长度范围：[0, 256]</p>
     * @param integer $ConnectionPoolLimit <p>连接池阈值（连接数），单位：个</p>
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
        if (array_key_exists("DBInstanceId",$param) and $param["DBInstanceId"] !== null) {
            $this->DBInstanceId = $param["DBInstanceId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("ProxyNodeCustom",$param) and $param["ProxyNodeCustom"] !== null) {
            $this->ProxyNodeCustom = [];
            foreach ($param["ProxyNodeCustom"] as $key => $value){
                $obj = new ProxyNodeCustom();
                $obj->deserialize($value);
                array_push($this->ProxyNodeCustom, $obj);
            }
        }

        if (array_key_exists("SecurityGroup",$param) and $param["SecurityGroup"] !== null) {
            $this->SecurityGroup = $param["SecurityGroup"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("ConnectionPoolLimit",$param) and $param["ConnectionPoolLimit"] !== null) {
            $this->ConnectionPoolLimit = $param["ConnectionPoolLimit"];
        }
    }
}
