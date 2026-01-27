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
 * CreateAuditTrack请求参数结构体
 *
 * @method string getName() 获取<p>跟踪集名称，仅支持大小写字母、数字、-以及_的组合，3-48个字符</p>
 * @method void setName(string $Name) 设置<p>跟踪集名称，仅支持大小写字母、数字、-以及_的组合，3-48个字符</p>
 * @method integer getStatus() 获取<p>跟踪集状态（未开启：0；开启：1）</p>
 * @method void setStatus(integer $Status) 设置<p>跟踪集状态（未开启：0；开启：1）</p>
 * @method Storage getStorage() 获取<p>数据投递存储（目前支持 cos、cls 、ckafka）</p>
 * @method void setStorage(Storage $Storage) 设置<p>数据投递存储（目前支持 cos、cls 、ckafka）</p>
 * @method string getActionType() 获取<p>跟踪事件类型（读：Read；写：Write；全部：*）</p>
 * @method void setActionType(string $ActionType) 设置<p>跟踪事件类型（读：Read；写：Write；全部：*）</p>
 * @method string getResourceType() 获取<p>跟踪事件所属产品（支持全部产品或单个产品，如：cos，全部：*）</p>
 * @method void setResourceType(string $ResourceType) 设置<p>跟踪事件所属产品（支持全部产品或单个产品，如：cos，全部：*）</p>
 * @method array getEventNames() 获取<p>跟踪事件接口名列表（ResourceType为 * 时，EventNames必须为全部：[&quot;*&quot;]；指定ResourceType时，支持全部接口：[&quot;*&quot;]；支持部分接口：[&quot;cos&quot;, &quot;cls&quot;]，接口列表上限10个）</p>
 * @method void setEventNames(array $EventNames) 设置<p>跟踪事件接口名列表（ResourceType为 * 时，EventNames必须为全部：[&quot;*&quot;]；指定ResourceType时，支持全部接口：[&quot;*&quot;]；支持部分接口：[&quot;cos&quot;, &quot;cls&quot;]，接口列表上限10个）</p>
 * @method integer getTrackForAllMembers() 获取<p>是否开启将集团成员操作日志投递到集团管理账号或者可信服务管理账号(0：未开启，1：开启，只能集团管理账号或者可信服务管理账号开启此项功能)</p>
 * @method void setTrackForAllMembers(integer $TrackForAllMembers) 设置<p>是否开启将集团成员操作日志投递到集团管理账号或者可信服务管理账号(0：未开启，1：开启，只能集团管理账号或者可信服务管理账号开启此项功能)</p>
 * @method string getExportId() 获取<p>任务ID</p>
 * @method void setExportId(string $ExportId) 设置<p>任务ID</p>
 */
class CreateAuditTrackRequest extends AbstractModel
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
     * @var Storage <p>数据投递存储（目前支持 cos、cls 、ckafka）</p>
     */
    public $Storage;

    /**
     * @var string <p>跟踪事件类型（读：Read；写：Write；全部：*）</p>
     */
    public $ActionType;

    /**
     * @var string <p>跟踪事件所属产品（支持全部产品或单个产品，如：cos，全部：*）</p>
     */
    public $ResourceType;

    /**
     * @var array <p>跟踪事件接口名列表（ResourceType为 * 时，EventNames必须为全部：[&quot;*&quot;]；指定ResourceType时，支持全部接口：[&quot;*&quot;]；支持部分接口：[&quot;cos&quot;, &quot;cls&quot;]，接口列表上限10个）</p>
     */
    public $EventNames;

    /**
     * @var integer <p>是否开启将集团成员操作日志投递到集团管理账号或者可信服务管理账号(0：未开启，1：开启，只能集团管理账号或者可信服务管理账号开启此项功能)</p>
     */
    public $TrackForAllMembers;

    /**
     * @var string <p>任务ID</p>
     */
    public $ExportId;

    /**
     * @param string $Name <p>跟踪集名称，仅支持大小写字母、数字、-以及_的组合，3-48个字符</p>
     * @param integer $Status <p>跟踪集状态（未开启：0；开启：1）</p>
     * @param Storage $Storage <p>数据投递存储（目前支持 cos、cls 、ckafka）</p>
     * @param string $ActionType <p>跟踪事件类型（读：Read；写：Write；全部：*）</p>
     * @param string $ResourceType <p>跟踪事件所属产品（支持全部产品或单个产品，如：cos，全部：*）</p>
     * @param array $EventNames <p>跟踪事件接口名列表（ResourceType为 * 时，EventNames必须为全部：[&quot;*&quot;]；指定ResourceType时，支持全部接口：[&quot;*&quot;]；支持部分接口：[&quot;cos&quot;, &quot;cls&quot;]，接口列表上限10个）</p>
     * @param integer $TrackForAllMembers <p>是否开启将集团成员操作日志投递到集团管理账号或者可信服务管理账号(0：未开启，1：开启，只能集团管理账号或者可信服务管理账号开启此项功能)</p>
     * @param string $ExportId <p>任务ID</p>
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

        if (array_key_exists("ActionType",$param) and $param["ActionType"] !== null) {
            $this->ActionType = $param["ActionType"];
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("EventNames",$param) and $param["EventNames"] !== null) {
            $this->EventNames = $param["EventNames"];
        }

        if (array_key_exists("TrackForAllMembers",$param) and $param["TrackForAllMembers"] !== null) {
            $this->TrackForAllMembers = $param["TrackForAllMembers"];
        }

        if (array_key_exists("ExportId",$param) and $param["ExportId"] !== null) {
            $this->ExportId = $param["ExportId"];
        }
    }
}
