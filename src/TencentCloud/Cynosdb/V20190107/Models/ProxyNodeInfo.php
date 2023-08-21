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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据库代理组节点
 *
 * @method string getProxyNodeId() 获取数据库代理节点ID
 * @method void setProxyNodeId(string $ProxyNodeId) 设置数据库代理节点ID
 * @method integer getProxyNodeConnections() 获取节点当前连接数, DescribeProxyNodes接口此字段值不返回
 * @method void setProxyNodeConnections(integer $ProxyNodeConnections) 设置节点当前连接数, DescribeProxyNodes接口此字段值不返回
 * @method integer getCpu() 获取数据库代理节点cpu
 * @method void setCpu(integer $Cpu) 设置数据库代理节点cpu
 * @method integer getMem() 获取数据库代理节点内存
 * @method void setMem(integer $Mem) 设置数据库代理节点内存
 * @method string getStatus() 获取数据库代理节点状态
 * @method void setStatus(string $Status) 设置数据库代理节点状态
 * @method string getProxyGroupId() 获取数据库代理组ID
 * @method void setProxyGroupId(string $ProxyGroupId) 设置数据库代理组ID
 * @method string getClusterId() 获取集群ID
 * @method void setClusterId(string $ClusterId) 设置集群ID
 * @method integer getAppId() 获取用户AppID
 * @method void setAppId(integer $AppId) 设置用户AppID
 * @method string getRegion() 获取地域
 * @method void setRegion(string $Region) 设置地域
 * @method string getZone() 获取可用区
 * @method void setZone(string $Zone) 设置可用区
 * @method string getOssProxyNodeName() 获取数据库代理节点名字
 * @method void setOssProxyNodeName(string $OssProxyNodeName) 设置数据库代理节点名字
 */
class ProxyNodeInfo extends AbstractModel
{
    /**
     * @var string 数据库代理节点ID
     */
    public $ProxyNodeId;

    /**
     * @var integer 节点当前连接数, DescribeProxyNodes接口此字段值不返回
     */
    public $ProxyNodeConnections;

    /**
     * @var integer 数据库代理节点cpu
     */
    public $Cpu;

    /**
     * @var integer 数据库代理节点内存
     */
    public $Mem;

    /**
     * @var string 数据库代理节点状态
     */
    public $Status;

    /**
     * @var string 数据库代理组ID
     */
    public $ProxyGroupId;

    /**
     * @var string 集群ID
     */
    public $ClusterId;

    /**
     * @var integer 用户AppID
     */
    public $AppId;

    /**
     * @var string 地域
     */
    public $Region;

    /**
     * @var string 可用区
     */
    public $Zone;

    /**
     * @var string 数据库代理节点名字
     */
    public $OssProxyNodeName;

    /**
     * @param string $ProxyNodeId 数据库代理节点ID
     * @param integer $ProxyNodeConnections 节点当前连接数, DescribeProxyNodes接口此字段值不返回
     * @param integer $Cpu 数据库代理节点cpu
     * @param integer $Mem 数据库代理节点内存
     * @param string $Status 数据库代理节点状态
     * @param string $ProxyGroupId 数据库代理组ID
     * @param string $ClusterId 集群ID
     * @param integer $AppId 用户AppID
     * @param string $Region 地域
     * @param string $Zone 可用区
     * @param string $OssProxyNodeName 数据库代理节点名字
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
    }
}
