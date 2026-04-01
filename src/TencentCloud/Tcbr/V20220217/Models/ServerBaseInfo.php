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
namespace TencentCloud\Tcbr\V20220217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 服务基本信息
 *
 * @method string getServerName() 获取<p>服务名</p>
 * @method void setServerName(string $ServerName) 设置<p>服务名</p>
 * @method string getDefaultDomainName() 获取<p>默认服务域名</p>
 * @method void setDefaultDomainName(string $DefaultDomainName) 设置<p>默认服务域名</p>
 * @method string getCustomDomainName() 获取<p>自定义域名</p>
 * @method void setCustomDomainName(string $CustomDomainName) 设置<p>自定义域名</p>
 * @method string getStatus() 获取<p>服务状态：creating/create_failed/freezing/freeze_fail/froze/unfreezing/unfreeze_fail/normal/deleting/delete_failed/abnormal</p><p>枚举值：</p><ul><li>creating： 创建中</li><li>create_failed： 创建失败</li><li>freezing： 冻结中</li><li>freeze_fail： 冻结失败</li><li>froze： 已冻结</li><li>unfreezing： 解冻中</li><li>unfreeze_fail： 解冻失败</li><li>normal： 正常</li><li>deleting： 删除中</li><li>delete_failed： 删除失败</li><li>abnormal： 服务异常</li></ul>
 * @method void setStatus(string $Status) 设置<p>服务状态：creating/create_failed/freezing/freeze_fail/froze/unfreezing/unfreeze_fail/normal/deleting/delete_failed/abnormal</p><p>枚举值：</p><ul><li>creating： 创建中</li><li>create_failed： 创建失败</li><li>freezing： 冻结中</li><li>freeze_fail： 冻结失败</li><li>froze： 已冻结</li><li>unfreezing： 解冻中</li><li>unfreeze_fail： 解冻失败</li><li>normal： 正常</li><li>deleting： 删除中</li><li>delete_failed： 删除失败</li><li>abnormal： 服务异常</li></ul>
 * @method string getUpdateTime() 获取<p>更新时间</p>
 * @method void setUpdateTime(string $UpdateTime) 设置<p>更新时间</p>
 * @method array getAccessTypes() 获取<p>公网访问类型</p>
 * @method void setAccessTypes(array $AccessTypes) 设置<p>公网访问类型</p>
 * @method array getCustomDomainNames() 获取<p>展示自定义域名</p>
 * @method void setCustomDomainNames(array $CustomDomainNames) 设置<p>展示自定义域名</p>
 * @method string getServerType() 获取<p>服务类型: function 云函数2.0；container 容器服务</p>
 * @method void setServerType(string $ServerType) 设置<p>服务类型: function 云函数2.0；container 容器服务</p>
 * @method string getTrafficType() 获取<p>流量类型，目前只有 FLOW</p>
 * @method void setTrafficType(string $TrafficType) 设置<p>流量类型，目前只有 FLOW</p>
 * @method string getCreateTime() 获取<p>创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间</p>
 */
class ServerBaseInfo extends AbstractModel
{
    /**
     * @var string <p>服务名</p>
     */
    public $ServerName;

    /**
     * @var string <p>默认服务域名</p>
     */
    public $DefaultDomainName;

    /**
     * @var string <p>自定义域名</p>
     */
    public $CustomDomainName;

    /**
     * @var string <p>服务状态：creating/create_failed/freezing/freeze_fail/froze/unfreezing/unfreeze_fail/normal/deleting/delete_failed/abnormal</p><p>枚举值：</p><ul><li>creating： 创建中</li><li>create_failed： 创建失败</li><li>freezing： 冻结中</li><li>freeze_fail： 冻结失败</li><li>froze： 已冻结</li><li>unfreezing： 解冻中</li><li>unfreeze_fail： 解冻失败</li><li>normal： 正常</li><li>deleting： 删除中</li><li>delete_failed： 删除失败</li><li>abnormal： 服务异常</li></ul>
     */
    public $Status;

    /**
     * @var string <p>更新时间</p>
     */
    public $UpdateTime;

    /**
     * @var array <p>公网访问类型</p>
     */
    public $AccessTypes;

    /**
     * @var array <p>展示自定义域名</p>
     */
    public $CustomDomainNames;

    /**
     * @var string <p>服务类型: function 云函数2.0；container 容器服务</p>
     */
    public $ServerType;

    /**
     * @var string <p>流量类型，目前只有 FLOW</p>
     */
    public $TrafficType;

    /**
     * @var string <p>创建时间</p>
     */
    public $CreateTime;

    /**
     * @param string $ServerName <p>服务名</p>
     * @param string $DefaultDomainName <p>默认服务域名</p>
     * @param string $CustomDomainName <p>自定义域名</p>
     * @param string $Status <p>服务状态：creating/create_failed/freezing/freeze_fail/froze/unfreezing/unfreeze_fail/normal/deleting/delete_failed/abnormal</p><p>枚举值：</p><ul><li>creating： 创建中</li><li>create_failed： 创建失败</li><li>freezing： 冻结中</li><li>freeze_fail： 冻结失败</li><li>froze： 已冻结</li><li>unfreezing： 解冻中</li><li>unfreeze_fail： 解冻失败</li><li>normal： 正常</li><li>deleting： 删除中</li><li>delete_failed： 删除失败</li><li>abnormal： 服务异常</li></ul>
     * @param string $UpdateTime <p>更新时间</p>
     * @param array $AccessTypes <p>公网访问类型</p>
     * @param array $CustomDomainNames <p>展示自定义域名</p>
     * @param string $ServerType <p>服务类型: function 云函数2.0；container 容器服务</p>
     * @param string $TrafficType <p>流量类型，目前只有 FLOW</p>
     * @param string $CreateTime <p>创建时间</p>
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
        if (array_key_exists("ServerName",$param) and $param["ServerName"] !== null) {
            $this->ServerName = $param["ServerName"];
        }

        if (array_key_exists("DefaultDomainName",$param) and $param["DefaultDomainName"] !== null) {
            $this->DefaultDomainName = $param["DefaultDomainName"];
        }

        if (array_key_exists("CustomDomainName",$param) and $param["CustomDomainName"] !== null) {
            $this->CustomDomainName = $param["CustomDomainName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("AccessTypes",$param) and $param["AccessTypes"] !== null) {
            $this->AccessTypes = $param["AccessTypes"];
        }

        if (array_key_exists("CustomDomainNames",$param) and $param["CustomDomainNames"] !== null) {
            $this->CustomDomainNames = $param["CustomDomainNames"];
        }

        if (array_key_exists("ServerType",$param) and $param["ServerType"] !== null) {
            $this->ServerType = $param["ServerType"];
        }

        if (array_key_exists("TrafficType",$param) and $param["TrafficType"] !== null) {
            $this->TrafficType = $param["TrafficType"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
