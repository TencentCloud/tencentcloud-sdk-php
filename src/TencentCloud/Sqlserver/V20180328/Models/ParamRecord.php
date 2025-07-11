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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例参数修改记录
 *
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getParamName() 获取参数名称
 * @method void setParamName(string $ParamName) 设置参数名称
 * @method string getOldValue() 获取参数修改前的值
 * @method void setOldValue(string $OldValue) 设置参数修改前的值
 * @method string getNewValue() 获取参数修改后的值
 * @method void setNewValue(string $NewValue) 设置参数修改后的值
 * @method integer getStatus() 获取参数修改状态，1-初始化等待被执行，2-执行成功，3-执行失败，4-参数修改中
 * @method void setStatus(integer $Status) 设置参数修改状态，1-初始化等待被执行，2-执行成功，3-执行失败，4-参数修改中
 * @method string getModifyTime() 获取修改时间
 * @method void setModifyTime(string $ModifyTime) 设置修改时间
 */
class ParamRecord extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var string 参数名称
     */
    public $ParamName;

    /**
     * @var string 参数修改前的值
     */
    public $OldValue;

    /**
     * @var string 参数修改后的值
     */
    public $NewValue;

    /**
     * @var integer 参数修改状态，1-初始化等待被执行，2-执行成功，3-执行失败，4-参数修改中
     */
    public $Status;

    /**
     * @var string 修改时间
     */
    public $ModifyTime;

    /**
     * @param string $InstanceId 实例ID
     * @param string $ParamName 参数名称
     * @param string $OldValue 参数修改前的值
     * @param string $NewValue 参数修改后的值
     * @param integer $Status 参数修改状态，1-初始化等待被执行，2-执行成功，3-执行失败，4-参数修改中
     * @param string $ModifyTime 修改时间
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ParamName",$param) and $param["ParamName"] !== null) {
            $this->ParamName = $param["ParamName"];
        }

        if (array_key_exists("OldValue",$param) and $param["OldValue"] !== null) {
            $this->OldValue = $param["OldValue"];
        }

        if (array_key_exists("NewValue",$param) and $param["NewValue"] !== null) {
            $this->NewValue = $param["NewValue"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }
    }
}
