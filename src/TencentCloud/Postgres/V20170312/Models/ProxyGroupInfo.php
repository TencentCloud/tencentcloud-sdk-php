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
 * Proxy 实例（组）详细信息，包含基础信息、节点列表、接入地址列表。
 *
 * @method string getProxyGroupId() 获取<p>Proxy 实例 ID，格式形如：proxygroup-xxxxxxxx</p>
 * @method void setProxyGroupId(string $ProxyGroupId) 设置<p>Proxy 实例 ID，格式形如：proxygroup-xxxxxxxx</p>
 * @method string getStatus() 获取<p>Proxy 状态：running/isolated/offline 等</p>
 * @method void setStatus(string $Status) 设置<p>Proxy 状态：running/isolated/offline 等</p>
 * @method string getTaskStatus() 获取<p>Proxy 任务状态，无任务时为空</p>
 * @method void setTaskStatus(string $TaskStatus) 设置<p>Proxy 任务状态，无任务时为空</p>
 * @method string getDescription() 获取<p>Proxy 描述</p>
 * @method void setDescription(string $Description) 设置<p>Proxy 描述</p>
 * @method string getProxyVersion() 获取<p>Proxy 内核版本号</p>
 * @method void setProxyVersion(string $ProxyVersion) 设置<p>Proxy 内核版本号</p>
 * @method integer getConnectionPoolLimit() 获取<p>连接池阈值（连接数）</p>
 * @method void setConnectionPoolLimit(integer $ConnectionPoolLimit) 设置<p>连接池阈值（连接数）</p>
 * @method array getProxyNodeSet() 获取<p>Proxy 节点列表</p>
 * @method void setProxyNodeSet(array $ProxyNodeSet) 设置<p>Proxy 节点列表</p>
 * @method array getProxyAddressSet() 获取<p>Proxy 接入地址列表</p>
 * @method void setProxyAddressSet(array $ProxyAddressSet) 设置<p>Proxy 接入地址列表</p>
 * @method string getCreateTime() 获取<p>创建时间，格式：YYYY-MM-DD HH:MM:SS</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间，格式：YYYY-MM-DD HH:MM:SS</p>
 */
class ProxyGroupInfo extends AbstractModel
{
    /**
     * @var string <p>Proxy 实例 ID，格式形如：proxygroup-xxxxxxxx</p>
     */
    public $ProxyGroupId;

    /**
     * @var string <p>Proxy 状态：running/isolated/offline 等</p>
     */
    public $Status;

    /**
     * @var string <p>Proxy 任务状态，无任务时为空</p>
     */
    public $TaskStatus;

    /**
     * @var string <p>Proxy 描述</p>
     */
    public $Description;

    /**
     * @var string <p>Proxy 内核版本号</p>
     */
    public $ProxyVersion;

    /**
     * @var integer <p>连接池阈值（连接数）</p>
     */
    public $ConnectionPoolLimit;

    /**
     * @var array <p>Proxy 节点列表</p>
     */
    public $ProxyNodeSet;

    /**
     * @var array <p>Proxy 接入地址列表</p>
     */
    public $ProxyAddressSet;

    /**
     * @var string <p>创建时间，格式：YYYY-MM-DD HH:MM:SS</p>
     */
    public $CreateTime;

    /**
     * @param string $ProxyGroupId <p>Proxy 实例 ID，格式形如：proxygroup-xxxxxxxx</p>
     * @param string $Status <p>Proxy 状态：running/isolated/offline 等</p>
     * @param string $TaskStatus <p>Proxy 任务状态，无任务时为空</p>
     * @param string $Description <p>Proxy 描述</p>
     * @param string $ProxyVersion <p>Proxy 内核版本号</p>
     * @param integer $ConnectionPoolLimit <p>连接池阈值（连接数）</p>
     * @param array $ProxyNodeSet <p>Proxy 节点列表</p>
     * @param array $ProxyAddressSet <p>Proxy 接入地址列表</p>
     * @param string $CreateTime <p>创建时间，格式：YYYY-MM-DD HH:MM:SS</p>
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
        if (array_key_exists("ProxyGroupId",$param) and $param["ProxyGroupId"] !== null) {
            $this->ProxyGroupId = $param["ProxyGroupId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("TaskStatus",$param) and $param["TaskStatus"] !== null) {
            $this->TaskStatus = $param["TaskStatus"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("ProxyVersion",$param) and $param["ProxyVersion"] !== null) {
            $this->ProxyVersion = $param["ProxyVersion"];
        }

        if (array_key_exists("ConnectionPoolLimit",$param) and $param["ConnectionPoolLimit"] !== null) {
            $this->ConnectionPoolLimit = $param["ConnectionPoolLimit"];
        }

        if (array_key_exists("ProxyNodeSet",$param) and $param["ProxyNodeSet"] !== null) {
            $this->ProxyNodeSet = [];
            foreach ($param["ProxyNodeSet"] as $key => $value){
                $obj = new ProxyNode();
                $obj->deserialize($value);
                array_push($this->ProxyNodeSet, $obj);
            }
        }

        if (array_key_exists("ProxyAddressSet",$param) and $param["ProxyAddressSet"] !== null) {
            $this->ProxyAddressSet = [];
            foreach ($param["ProxyAddressSet"] as $key => $value){
                $obj = new ProxyAddress();
                $obj->deserialize($value);
                array_push($this->ProxyAddressSet, $obj);
            }
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
