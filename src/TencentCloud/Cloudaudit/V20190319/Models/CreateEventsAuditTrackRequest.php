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
namespace TencentCloud\Cloudaudit\V20190319\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateEventsAuditTrack请求参数结构体
 *
 * @method string getName() 获取<p>跟踪集名称，仅支持大小写字母、数字、-以及_的组合，3-48个字符</p>
 * @method void setName(string $Name) 设置<p>跟踪集名称，仅支持大小写字母、数字、-以及_的组合，3-48个字符</p>
 * @method integer getStatus() 获取<p>跟踪集状态（未开启：0；开启：1）</p>
 * @method void setStatus(integer $Status) 设置<p>跟踪集状态（未开启：0；开启：1）</p>
 * @method Storage getStorage() 获取<p>数据投递存储（目前支持 cos、cls、ckafka）</p>
 * @method void setStorage(Storage $Storage) 设置<p>数据投递存储（目前支持 cos、cls、ckafka）</p>
 * @method Filter getFilters() 获取<p>数据过滤条件</p>
 * @method void setFilters(Filter $Filters) 设置<p>数据过滤条件</p>
 * @method integer getTrackForAllMembers() 获取<p>是否开启将集团成员操作日志投递到集团管理账号或者可信服务管理账号(0：未开启，1：开启，只能集团管理账号或者可信服务管理账号开启此项功能)</p>
 * @method void setTrackForAllMembers(integer $TrackForAllMembers) 设置<p>是否开启将集团成员操作日志投递到集团管理账号或者可信服务管理账号(0：未开启，1：开启，只能集团管理账号或者可信服务管理账号开启此项功能)</p>
 */
class CreateEventsAuditTrackRequest extends AbstractModel
{
    /**
     * @var string <p>跟踪集名称，仅支持大小写字母、数字、-以及_的组合，3-48个字符</p>
     */
    public $Name;

    /**
     * @var integer <p>跟踪集状态（未开启：0；开启：1）</p>
     */
    public $Status;

    /**
     * @var Storage <p>数据投递存储（目前支持 cos、cls、ckafka）</p>
     */
    public $Storage;

    /**
     * @var Filter <p>数据过滤条件</p>
     */
    public $Filters;

    /**
     * @var integer <p>是否开启将集团成员操作日志投递到集团管理账号或者可信服务管理账号(0：未开启，1：开启，只能集团管理账号或者可信服务管理账号开启此项功能)</p>
     */
    public $TrackForAllMembers;

    /**
     * @param string $Name <p>跟踪集名称，仅支持大小写字母、数字、-以及_的组合，3-48个字符</p>
     * @param integer $Status <p>跟踪集状态（未开启：0；开启：1）</p>
     * @param Storage $Storage <p>数据投递存储（目前支持 cos、cls、ckafka）</p>
     * @param Filter $Filters <p>数据过滤条件</p>
     * @param integer $TrackForAllMembers <p>是否开启将集团成员操作日志投递到集团管理账号或者可信服务管理账号(0：未开启，1：开启，只能集团管理账号或者可信服务管理账号开启此项功能)</p>
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Storage",$param) and $param["Storage"] !== null) {
            $this->Storage = new Storage();
            $this->Storage->deserialize($param["Storage"]);
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = new Filter();
            $this->Filters->deserialize($param["Filters"]);
        }

        if (array_key_exists("TrackForAllMembers",$param) and $param["TrackForAllMembers"] !== null) {
            $this->TrackForAllMembers = $param["TrackForAllMembers"];
        }
    }
}
