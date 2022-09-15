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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyVirusFileStatus请求参数结构体
 *
 * @method array getEventIdSet() 获取处理事件id
 * @method void setEventIdSet(array $EventIdSet) 设置处理事件id
 * @method string getStatus() 获取标记事件的状态，   
    EVENT_DEALED:事件处理
    EVENT_INGNORE"：事件忽略
    EVENT_DEL:事件删除
    EVENT_ADD_WHITE:事件加白
    EVENT_PENDING: 事件待处理
	EVENT_ISOLATE_CONTAINER: 隔离容器
	EVENT_RESOTRE_CONTAINER: 恢复容器
 * @method void setStatus(string $Status) 设置标记事件的状态，   
    EVENT_DEALED:事件处理
    EVENT_INGNORE"：事件忽略
    EVENT_DEL:事件删除
    EVENT_ADD_WHITE:事件加白
    EVENT_PENDING: 事件待处理
	EVENT_ISOLATE_CONTAINER: 隔离容器
	EVENT_RESOTRE_CONTAINER: 恢复容器
 * @method string getRemark() 获取事件备注
 * @method void setRemark(string $Remark) 设置事件备注
 * @method boolean getAutoIsolate() 获取是否后续自动隔离相同MD5文件
 * @method void setAutoIsolate(boolean $AutoIsolate) 设置是否后续自动隔离相同MD5文件
 */
class ModifyVirusFileStatusRequest extends AbstractModel
{
    /**
     * @var array 处理事件id
     */
    public $EventIdSet;

    /**
     * @var string 标记事件的状态，   
    EVENT_DEALED:事件处理
    EVENT_INGNORE"：事件忽略
    EVENT_DEL:事件删除
    EVENT_ADD_WHITE:事件加白
    EVENT_PENDING: 事件待处理
	EVENT_ISOLATE_CONTAINER: 隔离容器
	EVENT_RESOTRE_CONTAINER: 恢复容器
     */
    public $Status;

    /**
     * @var string 事件备注
     */
    public $Remark;

    /**
     * @var boolean 是否后续自动隔离相同MD5文件
     */
    public $AutoIsolate;

    /**
     * @param array $EventIdSet 处理事件id
     * @param string $Status 标记事件的状态，   
    EVENT_DEALED:事件处理
    EVENT_INGNORE"：事件忽略
    EVENT_DEL:事件删除
    EVENT_ADD_WHITE:事件加白
    EVENT_PENDING: 事件待处理
	EVENT_ISOLATE_CONTAINER: 隔离容器
	EVENT_RESOTRE_CONTAINER: 恢复容器
     * @param string $Remark 事件备注
     * @param boolean $AutoIsolate 是否后续自动隔离相同MD5文件
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
        if (array_key_exists("EventIdSet",$param) and $param["EventIdSet"] !== null) {
            $this->EventIdSet = $param["EventIdSet"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("AutoIsolate",$param) and $param["AutoIsolate"] !== null) {
            $this->AutoIsolate = $param["AutoIsolate"];
        }
    }
}
