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
 * OpenReadOnlyInstanceExclusiveAccess请求参数结构体
 *
 * @method string getClusterId() 获取请使用 [集群信息描述](https://cloud.tencent.com/document/api/1003/48086) 获取 clusterId。
 * @method void setClusterId(string $ClusterId) 设置请使用 [集群信息描述](https://cloud.tencent.com/document/api/1003/48086) 获取 clusterId。
 * @method string getInstanceId() 获取请使用 [集群信息描述](https://cloud.tencent.com/document/api/1003/48086) 获取 instanceId。
 * @method void setInstanceId(string $InstanceId) 设置请使用 [集群信息描述](https://cloud.tencent.com/document/api/1003/48086) 获取 instanceId。
 * @method string getVpcId() 获取指定的 vpc ID，请使用 [查询私有网络列表](https://cloud.tencent.com/document/api/215/15778) 获取 vpc ID。
 * @method void setVpcId(string $VpcId) 设置指定的 vpc ID，请使用 [查询私有网络列表](https://cloud.tencent.com/document/api/215/15778) 获取 vpc ID。
 * @method string getSubnetId() 获取指定的子网 ID，如果设置了 vpc ID，则 SubnetId 必填，请使用 [查询子网列表](https://cloud.tencent.com/document/api/215/15784) 获取 SubnetId。
 * @method void setSubnetId(string $SubnetId) 设置指定的子网 ID，如果设置了 vpc ID，则 SubnetId 必填，请使用 [查询子网列表](https://cloud.tencent.com/document/api/215/15784) 获取 SubnetId。
 * @method integer getPort() 获取用户自定义的端口。
 * @method void setPort(integer $Port) 设置用户自定义的端口。
 * @method array getSecurityGroupIds() 获取安全组 ID，请使用 [查看安全组](https://cloud.tencent.com/document/api/215/15808) 获取 SecurityGroupId。
 * @method void setSecurityGroupIds(array $SecurityGroupIds) 设置安全组 ID，请使用 [查看安全组](https://cloud.tencent.com/document/api/215/15808) 获取 SecurityGroupId。
 */
class OpenReadOnlyInstanceExclusiveAccessRequest extends AbstractModel
{
    /**
     * @var string 请使用 [集群信息描述](https://cloud.tencent.com/document/api/1003/48086) 获取 clusterId。
     */
    public $ClusterId;

    /**
     * @var string 请使用 [集群信息描述](https://cloud.tencent.com/document/api/1003/48086) 获取 instanceId。
     */
    public $InstanceId;

    /**
     * @var string 指定的 vpc ID，请使用 [查询私有网络列表](https://cloud.tencent.com/document/api/215/15778) 获取 vpc ID。
     */
    public $VpcId;

    /**
     * @var string 指定的子网 ID，如果设置了 vpc ID，则 SubnetId 必填，请使用 [查询子网列表](https://cloud.tencent.com/document/api/215/15784) 获取 SubnetId。
     */
    public $SubnetId;

    /**
     * @var integer 用户自定义的端口。
     */
    public $Port;

    /**
     * @var array 安全组 ID，请使用 [查看安全组](https://cloud.tencent.com/document/api/215/15808) 获取 SecurityGroupId。
     */
    public $SecurityGroupIds;

    /**
     * @param string $ClusterId 请使用 [集群信息描述](https://cloud.tencent.com/document/api/1003/48086) 获取 clusterId。
     * @param string $InstanceId 请使用 [集群信息描述](https://cloud.tencent.com/document/api/1003/48086) 获取 instanceId。
     * @param string $VpcId 指定的 vpc ID，请使用 [查询私有网络列表](https://cloud.tencent.com/document/api/215/15778) 获取 vpc ID。
     * @param string $SubnetId 指定的子网 ID，如果设置了 vpc ID，则 SubnetId 必填，请使用 [查询子网列表](https://cloud.tencent.com/document/api/215/15784) 获取 SubnetId。
     * @param integer $Port 用户自定义的端口。
     * @param array $SecurityGroupIds 安全组 ID，请使用 [查看安全组](https://cloud.tencent.com/document/api/215/15808) 获取 SecurityGroupId。
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

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
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

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }
    }
}
