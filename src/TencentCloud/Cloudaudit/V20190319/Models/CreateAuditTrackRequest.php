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
namespace TencentCloud\Cloudaudit\V20190319\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateAuditTrack请求参数结构体
 *
 * @method string getName() 获取跟踪集名称，仅支持大小写字母、数字、-以及_的组合，3-48个字符
 * @method void setName(string $Name) 设置跟踪集名称，仅支持大小写字母、数字、-以及_的组合，3-48个字符
 * @method integer getStatus() 获取跟踪集状态（未开启：0；开启：1）
 * @method void setStatus(integer $Status) 设置跟踪集状态（未开启：0；开启：1）
 * @method Storage getStorage() 获取数据投递存储（目前支持 cos、cls）
 * @method void setStorage(Storage $Storage) 设置数据投递存储（目前支持 cos、cls）
 * @method string getActionType() 获取跟踪事件类型（读：Read；写：Write；全部：*）
 * @method void setActionType(string $ActionType) 设置跟踪事件类型（读：Read；写：Write；全部：*）
 * @method string getResourceType() 获取跟踪事件所属产品（支持全部产品或单个产品，如：cos，全部：*）
 * @method void setResourceType(string $ResourceType) 设置跟踪事件所属产品（支持全部产品或单个产品，如：cos，全部：*）
 * @method array getEventNames() 获取跟踪事件接口名列表（ResourceType为 * 时，EventNames必须为全部：["*"]；指定ResourceType时，支持全部接口：["*"]；支持部分接口：["cos", "cls"]，接口列表上限10个）
 * @method void setEventNames(array $EventNames) 设置跟踪事件接口名列表（ResourceType为 * 时，EventNames必须为全部：["*"]；指定ResourceType时，支持全部接口：["*"]；支持部分接口：["cos", "cls"]，接口列表上限10个）
 * @method integer getTrackForAllMembers() 获取是否开启将集团成员操作日志投递到集团管理账号或者可信服务管理账号(0：未开启，1：开启，只能集团管理账号或者可信服务管理账号开启此项功能) 
 * @method void setTrackForAllMembers(integer $TrackForAllMembers) 设置是否开启将集团成员操作日志投递到集团管理账号或者可信服务管理账号(0：未开启，1：开启，只能集团管理账号或者可信服务管理账号开启此项功能) 
 */
class CreateAuditTrackRequest extends AbstractModel
{
    /**
     * @var string 跟踪集名称，仅支持大小写字母、数字、-以及_的组合，3-48个字符
     */
    public $Name;

    /**
     * @var integer 跟踪集状态（未开启：0；开启：1）
     */
    public $Status;

    /**
     * @var Storage 数据投递存储（目前支持 cos、cls）
     */
    public $Storage;

    /**
     * @var string 跟踪事件类型（读：Read；写：Write；全部：*）
     */
    public $ActionType;

    /**
     * @var string 跟踪事件所属产品（支持全部产品或单个产品，如：cos，全部：*）
     */
    public $ResourceType;

    /**
     * @var array 跟踪事件接口名列表（ResourceType为 * 时，EventNames必须为全部：["*"]；指定ResourceType时，支持全部接口：["*"]；支持部分接口：["cos", "cls"]，接口列表上限10个）
     */
    public $EventNames;

    /**
     * @var integer 是否开启将集团成员操作日志投递到集团管理账号或者可信服务管理账号(0：未开启，1：开启，只能集团管理账号或者可信服务管理账号开启此项功能) 
     */
    public $TrackForAllMembers;

    /**
     * @param string $Name 跟踪集名称，仅支持大小写字母、数字、-以及_的组合，3-48个字符
     * @param integer $Status 跟踪集状态（未开启：0；开启：1）
     * @param Storage $Storage 数据投递存储（目前支持 cos、cls）
     * @param string $ActionType 跟踪事件类型（读：Read；写：Write；全部：*）
     * @param string $ResourceType 跟踪事件所属产品（支持全部产品或单个产品，如：cos，全部：*）
     * @param array $EventNames 跟踪事件接口名列表（ResourceType为 * 时，EventNames必须为全部：["*"]；指定ResourceType时，支持全部接口：["*"]；支持部分接口：["cos", "cls"]，接口列表上限10个）
     * @param integer $TrackForAllMembers 是否开启将集团成员操作日志投递到集团管理账号或者可信服务管理账号(0：未开启，1：开启，只能集团管理账号或者可信服务管理账号开启此项功能) 
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
    }
}
