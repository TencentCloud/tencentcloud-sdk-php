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
 * 数据库代理组节点
 *
 * @method string getProxyNodeId() 获取<p>数据库代理节点ID</p>
 * @method void setProxyNodeId(string $ProxyNodeId) 设置<p>数据库代理节点ID</p>
 * @method integer getProxyNodeConnections() 获取<p>节点当前连接数, DescribeProxyNodes接口此字段值不返回</p>
 * @method void setProxyNodeConnections(integer $ProxyNodeConnections) 设置<p>节点当前连接数, DescribeProxyNodes接口此字段值不返回</p>
 * @method integer getCpu() 获取<p>数据库代理节点cpu</p>
 * @method void setCpu(integer $Cpu) 设置<p>数据库代理节点cpu</p>
 * @method integer getMem() 获取<p>数据库代理节点内存</p>
 * @method void setMem(integer $Mem) 设置<p>数据库代理节点内存</p>
 * @method string getStatus() 获取<p>数据库代理节点状态</p>
 * @method void setStatus(string $Status) 设置<p>数据库代理节点状态</p>
 * @method string getProxyGroupId() 获取<p>数据库代理组ID</p>
 * @method void setProxyGroupId(string $ProxyGroupId) 设置<p>数据库代理组ID</p>
 * @method string getClusterId() 获取<p>集群ID</p>
 * @method void setClusterId(string $ClusterId) 设置<p>集群ID</p>
 * @method integer getAppId() 获取<p>用户AppID</p>
 * @method void setAppId(integer $AppId) 设置<p>用户AppID</p>
 * @method string getRegion() 获取<p>地域</p>
 * @method void setRegion(string $Region) 设置<p>地域</p>
 * @method string getZone() 获取<p>可用区</p>
 * @method void setZone(string $Zone) 设置<p>可用区</p>
 * @method string getOssProxyNodeName() 获取<p>数据库代理节点名字</p>
 * @method void setOssProxyNodeName(string $OssProxyNodeName) 设置<p>数据库代理节点名字</p>
 * @method string getCreateTime() 获取<p>创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间</p>
 * @method string getUpdateTime() 获取<p>更新时间</p>
 * @method void setUpdateTime(string $UpdateTime) 设置<p>更新时间</p>
 */
class ProxyNodeInfo extends AbstractModel
{
    /**
     * @var string <p>数据库代理节点ID</p>
     */
    public $ProxyNodeId;

    /**
     * @var integer <p>节点当前连接数, DescribeProxyNodes接口此字段值不返回</p>
     */
    public $ProxyNodeConnections;

    /**
     * @var integer <p>数据库代理节点cpu</p>
     */
    public $Cpu;

    /**
     * @var integer <p>数据库代理节点内存</p>
     */
    public $Mem;

    /**
     * @var string <p>数据库代理节点状态</p>
     */
    public $Status;

    /**
     * @var string <p>数据库代理组ID</p>
     */
    public $ProxyGroupId;

    /**
     * @var string <p>集群ID</p>
     */
    public $ClusterId;

    /**
     * @var integer <p>用户AppID</p>
     */
    public $AppId;

    /**
     * @var string <p>地域</p>
     */
    public $Region;

    /**
     * @var string <p>可用区</p>
     */
    public $Zone;

    /**
     * @var string <p>数据库代理节点名字</p>
     */
    public $OssProxyNodeName;

    /**
     * @var string <p>创建时间</p>
     */
    public $CreateTime;

    /**
     * @var string <p>更新时间</p>
     */
    public $UpdateTime;

    /**
     * @param string $ProxyNodeId <p>数据库代理节点ID</p>
     * @param integer $ProxyNodeConnections <p>节点当前连接数, DescribeProxyNodes接口此字段值不返回</p>
     * @param integer $Cpu <p>数据库代理节点cpu</p>
     * @param integer $Mem <p>数据库代理节点内存</p>
     * @param string $Status <p>数据库代理节点状态</p>
     * @param string $ProxyGroupId <p>数据库代理组ID</p>
     * @param string $ClusterId <p>集群ID</p>
     * @param integer $AppId <p>用户AppID</p>
     * @param string $Region <p>地域</p>
     * @param string $Zone <p>可用区</p>
     * @param string $OssProxyNodeName <p>数据库代理节点名字</p>
     * @param string $CreateTime <p>创建时间</p>
     * @param string $UpdateTime <p>更新时间</p>
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
        if (array_key_exists("ProxyNodeId",$param) and $param["ProxyNodeId"] !== null) {
            $this->ProxyNodeId = $param["ProxyNodeId"];
        }

        if (array_key_exists("ProxyNodeConnections",$param) and $param["ProxyNodeConnections"] !== null) {
            $this->ProxyNodeConnections = $param["ProxyNodeConnections"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Mem",$param) and $param["Mem"] !== null) {
            $this->Mem = $param["Mem"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ProxyGroupId",$param) and $param["ProxyGroupId"] !== null) {
            $this->ProxyGroupId = $param["ProxyGroupId"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("OssProxyNodeName",$param) and $param["OssProxyNodeName"] !== null) {
            $this->OssProxyNodeName = $param["OssProxyNodeName"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
