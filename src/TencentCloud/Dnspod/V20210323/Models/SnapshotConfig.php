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
namespace TencentCloud\Dnspod\V20210323\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 域名解析快照配置
 *
 * @method string getConfig() 获取配置类型：空字符串-不备份，half_hour-每半小时，hourly-每小时，daily-每天，monthly-每月
 * @method void setConfig(string $Config) 设置配置类型：空字符串-不备份，half_hour-每半小时，hourly-每小时，daily-每天，monthly-每月
 * @method string getCreatedOn() 获取添加时间
 * @method void setCreatedOn(string $CreatedOn) 设置添加时间
 * @method string getDomainId() 获取所属域名 ID
 * @method void setDomainId(string $DomainId) 设置所属域名 ID
 * @method string getId() 获取配置 ID
 * @method void setId(string $Id) 设置配置 ID
 * @method integer getSnapshotCount() 获取快照数量
 * @method void setSnapshotCount(integer $SnapshotCount) 设置快照数量
 * @method string getStatus() 获取状态：enable-启用，disable-禁用
 * @method void setStatus(string $Status) 设置状态：enable-启用，disable-禁用
 * @method string getUpdatedOn() 获取更新时间
 * @method void setUpdatedOn(string $UpdatedOn) 设置更新时间
 */
class SnapshotConfig extends AbstractModel
{
    /**
     * @var string 配置类型：空字符串-不备份，half_hour-每半小时，hourly-每小时，daily-每天，monthly-每月
     */
    public $Config;

    /**
     * @var string 添加时间
     */
    public $CreatedOn;

    /**
     * @var string 所属域名 ID
     */
    public $DomainId;

    /**
     * @var string 配置 ID
     */
    public $Id;

    /**
     * @var integer 快照数量
     */
    public $SnapshotCount;

    /**
     * @var string 状态：enable-启用，disable-禁用
     */
    public $Status;

    /**
     * @var string 更新时间
     */
    public $UpdatedOn;

    /**
     * @param string $Config 配置类型：空字符串-不备份，half_hour-每半小时，hourly-每小时，daily-每天，monthly-每月
     * @param string $CreatedOn 添加时间
     * @param string $DomainId 所属域名 ID
     * @param string $Id 配置 ID
     * @param integer $SnapshotCount 快照数量
     * @param string $Status 状态：enable-启用，disable-禁用
     * @param string $UpdatedOn 更新时间
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
        if (array_key_exists("Config",$param) and $param["Config"] !== null) {
            $this->Config = $param["Config"];
        }

        if (array_key_exists("CreatedOn",$param) and $param["CreatedOn"] !== null) {
            $this->CreatedOn = $param["CreatedOn"];
        }

        if (array_key_exists("DomainId",$param) and $param["DomainId"] !== null) {
            $this->DomainId = $param["DomainId"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("SnapshotCount",$param) and $param["SnapshotCount"] !== null) {
            $this->SnapshotCount = $param["SnapshotCount"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("UpdatedOn",$param) and $param["UpdatedOn"] !== null) {
            $this->UpdatedOn = $param["UpdatedOn"];
        }
    }
}
