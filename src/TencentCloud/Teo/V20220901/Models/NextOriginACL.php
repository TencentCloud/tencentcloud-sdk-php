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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 当回源 IP 网段发生更新时，该字段会返回下一个版本将要生效的回源 IP 网段，包含与当前生效的回源 IP 网段的对比。
 *
 * @method string getVersion() 获取版本号。
 * @method void setVersion(string $Version) 设置版本号。
 * @method string getPlannedActiveTime() 获取版本生效时间，时间是北京时间 UTC+8， 遵循 ISO 8601 标准的日期和时间格式。
 * @method void setPlannedActiveTime(string $PlannedActiveTime) 设置版本生效时间，时间是北京时间 UTC+8， 遵循 ISO 8601 标准的日期和时间格式。
 * @method Addresses getEntireAddresses() 获取回源 IP 网段详情。
 * @method void setEntireAddresses(Addresses $EntireAddresses) 设置回源 IP 网段详情。
 * @method Addresses getAddedAddresses() 获取最新回源 IP 网段相较于 CurrentOrginACL 中回源 IP 网段新增的部分。
 * @method void setAddedAddresses(Addresses $AddedAddresses) 设置最新回源 IP 网段相较于 CurrentOrginACL 中回源 IP 网段新增的部分。
 * @method Addresses getRemovedAddresses() 获取最新回源 IP 网段相较于 CurrentOrginACL 中回源 IP 网段删减的部分。
 * @method void setRemovedAddresses(Addresses $RemovedAddresses) 设置最新回源 IP 网段相较于 CurrentOrginACL 中回源 IP 网段删减的部分。
 * @method Addresses getNoChangeAddresses() 获取最新回源 IP 网段相较于 CurrentOrginACL 中回源 IP 网段无变化的部分。
 * @method void setNoChangeAddresses(Addresses $NoChangeAddresses) 设置最新回源 IP 网段相较于 CurrentOrginACL 中回源 IP 网段无变化的部分。
 */
class NextOriginACL extends AbstractModel
{
    /**
     * @var string 版本号。
     */
    public $Version;

    /**
     * @var string 版本生效时间，时间是北京时间 UTC+8， 遵循 ISO 8601 标准的日期和时间格式。
     */
    public $PlannedActiveTime;

    /**
     * @var Addresses 回源 IP 网段详情。
     */
    public $EntireAddresses;

    /**
     * @var Addresses 最新回源 IP 网段相较于 CurrentOrginACL 中回源 IP 网段新增的部分。
     */
    public $AddedAddresses;

    /**
     * @var Addresses 最新回源 IP 网段相较于 CurrentOrginACL 中回源 IP 网段删减的部分。
     */
    public $RemovedAddresses;

    /**
     * @var Addresses 最新回源 IP 网段相较于 CurrentOrginACL 中回源 IP 网段无变化的部分。
     */
    public $NoChangeAddresses;

    /**
     * @param string $Version 版本号。
     * @param string $PlannedActiveTime 版本生效时间，时间是北京时间 UTC+8， 遵循 ISO 8601 标准的日期和时间格式。
     * @param Addresses $EntireAddresses 回源 IP 网段详情。
     * @param Addresses $AddedAddresses 最新回源 IP 网段相较于 CurrentOrginACL 中回源 IP 网段新增的部分。
     * @param Addresses $RemovedAddresses 最新回源 IP 网段相较于 CurrentOrginACL 中回源 IP 网段删减的部分。
     * @param Addresses $NoChangeAddresses 最新回源 IP 网段相较于 CurrentOrginACL 中回源 IP 网段无变化的部分。
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
        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("PlannedActiveTime",$param) and $param["PlannedActiveTime"] !== null) {
            $this->PlannedActiveTime = $param["PlannedActiveTime"];
        }

        if (array_key_exists("EntireAddresses",$param) and $param["EntireAddresses"] !== null) {
            $this->EntireAddresses = new Addresses();
            $this->EntireAddresses->deserialize($param["EntireAddresses"]);
        }

        if (array_key_exists("AddedAddresses",$param) and $param["AddedAddresses"] !== null) {
            $this->AddedAddresses = new Addresses();
            $this->AddedAddresses->deserialize($param["AddedAddresses"]);
        }

        if (array_key_exists("RemovedAddresses",$param) and $param["RemovedAddresses"] !== null) {
            $this->RemovedAddresses = new Addresses();
            $this->RemovedAddresses->deserialize($param["RemovedAddresses"]);
        }

        if (array_key_exists("NoChangeAddresses",$param) and $param["NoChangeAddresses"] !== null) {
            $this->NoChangeAddresses = new Addresses();
            $this->NoChangeAddresses->deserialize($param["NoChangeAddresses"]);
        }
    }
}
