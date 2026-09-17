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
namespace TencentCloud\Cfs\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCfsFileSystems请求参数结构体
 *
 * @method string getFileSystemId() 获取<p>文件系统 ID</p>
 * @method void setFileSystemId(string $FileSystemId) 设置<p>文件系统 ID</p>
 * @method string getVpcId() 获取<p>私有网络（VPC） ID</p>
 * @method void setVpcId(string $VpcId) 设置<p>私有网络（VPC） ID</p>
 * @method string getSubnetId() 获取<p>子网 ID</p>
 * @method void setSubnetId(string $SubnetId) 设置<p>子网 ID</p>
 * @method integer getOffset() 获取<p>Offset 分页码,默认0</p>
 * @method void setOffset(integer $Offset) 设置<p>Offset 分页码,默认0</p>
 * @method integer getLimit() 获取<p>Limit 页面大小，默认10</p>
 * @method void setLimit(integer $Limit) 设置<p>Limit 页面大小，默认10</p>
 * @method string getCreationToken() 获取<p>用户自定义名称</p>
 * @method void setCreationToken(string $CreationToken) 设置<p>用户自定义名称</p>
 * @method array getFilters() 获取<p>过滤条件。<br><br><li>Protocol - Array of String - 是否必填：否 -（过滤条件）按协议过滤。(NFS | CIFS | TURBO) </li><br><br><li>StorageType - Array of String - 是否必填：否 -（过滤条件）按存储类型过滤。(SD | HP | TB | TP | THP) </li><br><br><li>LifeCycleState - Array of String - 是否必填：否 -（过滤条件）按生命周期过滤。(creating | create_failed | available | deleting | delete_failed | upgrading | unserviced | expanding) </li><br><br><li>Zone - Array of String - 是否必填：否 -（过滤条件）按可用区过滤。(例如：ap-guangzhou-3) </li><br><br><li>IpAddress - Array of String - 是否必填：否 -（过滤条件）按导出点IP地址过滤。(例如：10.0.0.3) </li><br><br><li>PGroupId - Array of String - 是否必填：否 -（过滤条件）按权限组ID过滤。(例如：pgroup-xxxxxrxt) </li><br><br><li>PGroupName - Array of String - 是否必填：否 -（过滤条件）按权限组名称过滤。(例如：默认权限组) </li><br><br><li>Scenario- Array of String - 是否必填：否 -（过滤条件）按权限组名称过滤。(例如：AgentSandbox) </li></p>
 * @method void setFilters(array $Filters) 设置<p>过滤条件。<br><br><li>Protocol - Array of String - 是否必填：否 -（过滤条件）按协议过滤。(NFS | CIFS | TURBO) </li><br><br><li>StorageType - Array of String - 是否必填：否 -（过滤条件）按存储类型过滤。(SD | HP | TB | TP | THP) </li><br><br><li>LifeCycleState - Array of String - 是否必填：否 -（过滤条件）按生命周期过滤。(creating | create_failed | available | deleting | delete_failed | upgrading | unserviced | expanding) </li><br><br><li>Zone - Array of String - 是否必填：否 -（过滤条件）按可用区过滤。(例如：ap-guangzhou-3) </li><br><br><li>IpAddress - Array of String - 是否必填：否 -（过滤条件）按导出点IP地址过滤。(例如：10.0.0.3) </li><br><br><li>PGroupId - Array of String - 是否必填：否 -（过滤条件）按权限组ID过滤。(例如：pgroup-xxxxxrxt) </li><br><br><li>PGroupName - Array of String - 是否必填：否 -（过滤条件）按权限组名称过滤。(例如：默认权限组) </li><br><br><li>Scenario- Array of String - 是否必填：否 -（过滤条件）按权限组名称过滤。(例如：AgentSandbox) </li></p>
 * @method array getTags() 获取<p>标签</p>
 * @method void setTags(array $Tags) 设置<p>标签</p>
 */
class DescribeCfsFileSystemsRequest extends AbstractModel
{
    /**
     * @var string <p>文件系统 ID</p>
     */
    public $FileSystemId;

    /**
     * @var string <p>私有网络（VPC） ID</p>
     */
    public $VpcId;

    /**
     * @var string <p>子网 ID</p>
     */
    public $SubnetId;

    /**
     * @var integer <p>Offset 分页码,默认0</p>
     */
    public $Offset;

    /**
     * @var integer <p>Limit 页面大小，默认10</p>
     */
    public $Limit;

    /**
     * @var string <p>用户自定义名称</p>
     */
    public $CreationToken;

    /**
     * @var array <p>过滤条件。<br><br><li>Protocol - Array of String - 是否必填：否 -（过滤条件）按协议过滤。(NFS | CIFS | TURBO) </li><br><br><li>StorageType - Array of String - 是否必填：否 -（过滤条件）按存储类型过滤。(SD | HP | TB | TP | THP) </li><br><br><li>LifeCycleState - Array of String - 是否必填：否 -（过滤条件）按生命周期过滤。(creating | create_failed | available | deleting | delete_failed | upgrading | unserviced | expanding) </li><br><br><li>Zone - Array of String - 是否必填：否 -（过滤条件）按可用区过滤。(例如：ap-guangzhou-3) </li><br><br><li>IpAddress - Array of String - 是否必填：否 -（过滤条件）按导出点IP地址过滤。(例如：10.0.0.3) </li><br><br><li>PGroupId - Array of String - 是否必填：否 -（过滤条件）按权限组ID过滤。(例如：pgroup-xxxxxrxt) </li><br><br><li>PGroupName - Array of String - 是否必填：否 -（过滤条件）按权限组名称过滤。(例如：默认权限组) </li><br><br><li>Scenario- Array of String - 是否必填：否 -（过滤条件）按权限组名称过滤。(例如：AgentSandbox) </li></p>
     */
    public $Filters;

    /**
     * @var array <p>标签</p>
     */
    public $Tags;

    /**
     * @param string $FileSystemId <p>文件系统 ID</p>
     * @param string $VpcId <p>私有网络（VPC） ID</p>
     * @param string $SubnetId <p>子网 ID</p>
     * @param integer $Offset <p>Offset 分页码,默认0</p>
     * @param integer $Limit <p>Limit 页面大小，默认10</p>
     * @param string $CreationToken <p>用户自定义名称</p>
     * @param array $Filters <p>过滤条件。<br><br><li>Protocol - Array of String - 是否必填：否 -（过滤条件）按协议过滤。(NFS | CIFS | TURBO) </li><br><br><li>StorageType - Array of String - 是否必填：否 -（过滤条件）按存储类型过滤。(SD | HP | TB | TP | THP) </li><br><br><li>LifeCycleState - Array of String - 是否必填：否 -（过滤条件）按生命周期过滤。(creating | create_failed | available | deleting | delete_failed | upgrading | unserviced | expanding) </li><br><br><li>Zone - Array of String - 是否必填：否 -（过滤条件）按可用区过滤。(例如：ap-guangzhou-3) </li><br><br><li>IpAddress - Array of String - 是否必填：否 -（过滤条件）按导出点IP地址过滤。(例如：10.0.0.3) </li><br><br><li>PGroupId - Array of String - 是否必填：否 -（过滤条件）按权限组ID过滤。(例如：pgroup-xxxxxrxt) </li><br><br><li>PGroupName - Array of String - 是否必填：否 -（过滤条件）按权限组名称过滤。(例如：默认权限组) </li><br><br><li>Scenario- Array of String - 是否必填：否 -（过滤条件）按权限组名称过滤。(例如：AgentSandbox) </li></p>
     * @param array $Tags <p>标签</p>
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
        if (array_key_exists("FileSystemId",$param) and $param["FileSystemId"] !== null) {
            $this->FileSystemId = $param["FileSystemId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("CreationToken",$param) and $param["CreationToken"] !== null) {
            $this->CreationToken = $param["CreationToken"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
