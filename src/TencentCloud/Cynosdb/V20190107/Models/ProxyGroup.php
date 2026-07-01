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
 * proxy组
 *
 * @method string getProxyGroupId() 获取<p>数据库代理组ID</p>
 * @method void setProxyGroupId(string $ProxyGroupId) 设置<p>数据库代理组ID</p>
 * @method integer getProxyNodeCount() 获取<p>数据库代理组节点个数</p>
 * @method void setProxyNodeCount(integer $ProxyNodeCount) 设置<p>数据库代理组节点个数</p>
 * @method string getStatus() 获取<p>数据库代理组状态</p>
 * @method void setStatus(string $Status) 设置<p>数据库代理组状态</p>
 * @method string getRegion() 获取<p>地域</p>
 * @method void setRegion(string $Region) 设置<p>地域</p>
 * @method string getZone() 获取<p>可用区</p>
 * @method void setZone(string $Zone) 设置<p>可用区</p>
 * @method string getCurrentProxyVersion() 获取<p>当前代理版本</p>
 * @method void setCurrentProxyVersion(string $CurrentProxyVersion) 设置<p>当前代理版本</p>
 * @method string getClusterId() 获取<p>集群ID</p>
 * @method void setClusterId(string $ClusterId) 设置<p>集群ID</p>
 * @method integer getAppId() 获取<p>用户AppId</p>
 * @method void setAppId(integer $AppId) 设置<p>用户AppId</p>
 * @method string getOpenRw() 获取<p>读写节点开通数据库代理</p>
 * @method void setOpenRw(string $OpenRw) 设置<p>读写节点开通数据库代理</p>
 * @method string getCreateTime() 获取<p>创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间</p>
 * @method string getUpdateTime() 获取<p>更新时间</p>
 * @method void setUpdateTime(string $UpdateTime) 设置<p>更新时间</p>
 */
class ProxyGroup extends AbstractModel
{
    /**
     * @var string <p>数据库代理组ID</p>
     */
    public $ProxyGroupId;

    /**
     * @var integer <p>数据库代理组节点个数</p>
     */
    public $ProxyNodeCount;

    /**
     * @var string <p>数据库代理组状态</p>
     */
    public $Status;

    /**
     * @var string <p>地域</p>
     */
    public $Region;

    /**
     * @var string <p>可用区</p>
     */
    public $Zone;

    /**
     * @var string <p>当前代理版本</p>
     */
    public $CurrentProxyVersion;

    /**
     * @var string <p>集群ID</p>
     */
    public $ClusterId;

    /**
     * @var integer <p>用户AppId</p>
     */
    public $AppId;

    /**
     * @var string <p>读写节点开通数据库代理</p>
     */
    public $OpenRw;

    /**
     * @var string <p>创建时间</p>
     */
    public $CreateTime;

    /**
     * @var string <p>更新时间</p>
     */
    public $UpdateTime;

    /**
     * @param string $ProxyGroupId <p>数据库代理组ID</p>
     * @param integer $ProxyNodeCount <p>数据库代理组节点个数</p>
     * @param string $Status <p>数据库代理组状态</p>
     * @param string $Region <p>地域</p>
     * @param string $Zone <p>可用区</p>
     * @param string $CurrentProxyVersion <p>当前代理版本</p>
     * @param string $ClusterId <p>集群ID</p>
     * @param integer $AppId <p>用户AppId</p>
     * @param string $OpenRw <p>读写节点开通数据库代理</p>
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
        if (array_key_exists("ProxyGroupId",$param) and $param["ProxyGroupId"] !== null) {
            $this->ProxyGroupId = $param["ProxyGroupId"];
        }

        if (array_key_exists("ProxyNodeCount",$param) and $param["ProxyNodeCount"] !== null) {
            $this->ProxyNodeCount = $param["ProxyNodeCount"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("CurrentProxyVersion",$param) and $param["CurrentProxyVersion"] !== null) {
            $this->CurrentProxyVersion = $param["CurrentProxyVersion"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("OpenRw",$param) and $param["OpenRw"] !== null) {
            $this->OpenRw = $param["OpenRw"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
