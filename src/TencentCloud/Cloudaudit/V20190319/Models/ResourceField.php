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
 * 资源筛选条件
 *
 * @method string getResourceType() 获取跟踪事件所属产品（支持全部产品或单个产品，如：cam，全部：*）
 * @method void setResourceType(string $ResourceType) 设置跟踪事件所属产品（支持全部产品或单个产品，如：cam，全部：*）
 * @method string getActionType() 获取跟踪事件类型（读：Read；写：Write；全部：*）
 * @method void setActionType(string $ActionType) 设置跟踪事件类型（读：Read；写：Write；全部：*）
 * @method array getEventNames() 获取跟踪事件接口名列表（ResourceType为 * 时，EventNames必须为全部：[""]；指定ResourceType时，支持全部接口：[""]；支持部分接口：["cos", "cls"]，接口列表上限10个）
 * @method void setEventNames(array $EventNames) 设置跟踪事件接口名列表（ResourceType为 * 时，EventNames必须为全部：[""]；指定ResourceType时，支持全部接口：[""]；支持部分接口：["cos", "cls"]，接口列表上限10个）
 */
class ResourceField extends AbstractModel
{
    /**
     * @var string 跟踪事件所属产品（支持全部产品或单个产品，如：cam，全部：*）
     */
    public $ResourceType;

    /**
     * @var string 跟踪事件类型（读：Read；写：Write；全部：*）
     */
    public $ActionType;

    /**
     * @var array 跟踪事件接口名列表（ResourceType为 * 时，EventNames必须为全部：[""]；指定ResourceType时，支持全部接口：[""]；支持部分接口：["cos", "cls"]，接口列表上限10个）
     */
    public $EventNames;

    /**
     * @param string $ResourceType 跟踪事件所属产品（支持全部产品或单个产品，如：cam，全部：*）
     * @param string $ActionType 跟踪事件类型（读：Read；写：Write；全部：*）
     * @param array $EventNames 跟踪事件接口名列表（ResourceType为 * 时，EventNames必须为全部：[""]；指定ResourceType时，支持全部接口：[""]；支持部分接口：["cos", "cls"]，接口列表上限10个）
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
        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("ActionType",$param) and $param["ActionType"] !== null) {
            $this->ActionType = $param["ActionType"];
        }

        if (array_key_exists("EventNames",$param) and $param["EventNames"] !== null) {
            $this->EventNames = $param["EventNames"];
        }
    }
}
