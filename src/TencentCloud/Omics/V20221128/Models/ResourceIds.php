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
namespace TencentCloud\Omics\V20221128\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 云资源ID。
 *
 * @method string getVPCId() 获取私有网络ID。
 * @method void setVPCId(string $VPCId) 设置私有网络ID。
 * @method string getSubnetId() 获取子网ID。
 * @method void setSubnetId(string $SubnetId) 设置子网ID。
 * @method string getSecurityGroupId() 获取安全组ID。
 * @method void setSecurityGroupId(string $SecurityGroupId) 设置安全组ID。
 * @method string getTDSQLCId() 获取TDSQL-C Mysql版数据库ID。
 * @method void setTDSQLCId(string $TDSQLCId) 设置TDSQL-C Mysql版数据库ID。
 * @method string getCFSId() 获取文件存储ID。
 * @method void setCFSId(string $CFSId) 设置文件存储ID。
 * @method string getCFSStorageType() 获取文件存储类型：取值范围：
- SD：通用标准型
- HP：通用性能型
- TB：turbo标准型
- TP：turbo性能型
 * @method void setCFSStorageType(string $CFSStorageType) 设置文件存储类型：取值范围：
- SD：通用标准型
- HP：通用性能型
- TB：turbo标准型
- TP：turbo性能型
 * @method string getCVMId() 获取云服务器ID。
 * @method void setCVMId(string $CVMId) 设置云服务器ID。
 * @method string getEKSId() 获取弹性容器集群ID。
 * @method void setEKSId(string $EKSId) 设置弹性容器集群ID。
 * @method string getTKEId() 获取TKE容器集群ID。
 * @method void setTKEId(string $TKEId) 设置TKE容器集群ID。
 * @method string getTKESystemNodePoolId() 获取TKE系统节点池ID。
 * @method void setTKESystemNodePoolId(string $TKESystemNodePoolId) 设置TKE系统节点池ID。
 */
class ResourceIds extends AbstractModel
{
    /**
     * @var string 私有网络ID。
     */
    public $VPCId;

    /**
     * @var string 子网ID。
     */
    public $SubnetId;

    /**
     * @var string 安全组ID。
     */
    public $SecurityGroupId;

    /**
     * @var string TDSQL-C Mysql版数据库ID。
     */
    public $TDSQLCId;

    /**
     * @var string 文件存储ID。
     */
    public $CFSId;

    /**
     * @var string 文件存储类型：取值范围：
- SD：通用标准型
- HP：通用性能型
- TB：turbo标准型
- TP：turbo性能型
     */
    public $CFSStorageType;

    /**
     * @var string 云服务器ID。
     */
    public $CVMId;

    /**
     * @var string 弹性容器集群ID。
     */
    public $EKSId;

    /**
     * @var string TKE容器集群ID。
     */
    public $TKEId;

    /**
     * @var string TKE系统节点池ID。
     */
    public $TKESystemNodePoolId;

    /**
     * @param string $VPCId 私有网络ID。
     * @param string $SubnetId 子网ID。
     * @param string $SecurityGroupId 安全组ID。
     * @param string $TDSQLCId TDSQL-C Mysql版数据库ID。
     * @param string $CFSId 文件存储ID。
     * @param string $CFSStorageType 文件存储类型：取值范围：
- SD：通用标准型
- HP：通用性能型
- TB：turbo标准型
- TP：turbo性能型
     * @param string $CVMId 云服务器ID。
     * @param string $EKSId 弹性容器集群ID。
     * @param string $TKEId TKE容器集群ID。
     * @param string $TKESystemNodePoolId TKE系统节点池ID。
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
        if (array_key_exists("VPCId",$param) and $param["VPCId"] !== null) {
            $this->VPCId = $param["VPCId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("SecurityGroupId",$param) and $param["SecurityGroupId"] !== null) {
            $this->SecurityGroupId = $param["SecurityGroupId"];
        }

        if (array_key_exists("TDSQLCId",$param) and $param["TDSQLCId"] !== null) {
            $this->TDSQLCId = $param["TDSQLCId"];
        }

        if (array_key_exists("CFSId",$param) and $param["CFSId"] !== null) {
            $this->CFSId = $param["CFSId"];
        }

        if (array_key_exists("CFSStorageType",$param) and $param["CFSStorageType"] !== null) {
            $this->CFSStorageType = $param["CFSStorageType"];
        }

        if (array_key_exists("CVMId",$param) and $param["CVMId"] !== null) {
            $this->CVMId = $param["CVMId"];
        }

        if (array_key_exists("EKSId",$param) and $param["EKSId"] !== null) {
            $this->EKSId = $param["EKSId"];
        }

        if (array_key_exists("TKEId",$param) and $param["TKEId"] !== null) {
            $this->TKEId = $param["TKEId"];
        }

        if (array_key_exists("TKESystemNodePoolId",$param) and $param["TKESystemNodePoolId"] !== null) {
            $this->TKESystemNodePoolId = $param["TKESystemNodePoolId"];
        }
    }
}
