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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 参数修改记录
 *
 * @method string getParamName() 获取参数名称
 * @method void setParamName(string $ParamName) 设置参数名称
 * @method string getCurrentValue() 获取当前值
 * @method void setCurrentValue(string $CurrentValue) 设置当前值
 * @method string getUpdateValue() 获取修改后的值
 * @method void setUpdateValue(string $UpdateValue) 设置修改后的值
 * @method string getStatus() 获取修改状态
 * @method void setStatus(string $Status) 设置修改状态
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getUpdateTime() 获取更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
 * @method string getClusterId() 获取集群ID
 * @method void setClusterId(string $ClusterId) 设置集群ID
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 */
class ClusterParamModifyLog extends AbstractModel
{
    /**
     * @var string 参数名称
     */
    public $ParamName;

    /**
     * @var string 当前值
     */
    public $CurrentValue;

    /**
     * @var string 修改后的值
     */
    public $UpdateValue;

    /**
     * @var string 修改状态
     */
    public $Status;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 更新时间
     */
    public $UpdateTime;

    /**
     * @var string 集群ID
     */
    public $ClusterId;

    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @param string $ParamName 参数名称
     * @param string $CurrentValue 当前值
     * @param string $UpdateValue 修改后的值
     * @param string $Status 修改状态
     * @param string $CreateTime 创建时间
     * @param string $UpdateTime 更新时间
     * @param string $ClusterId 集群ID
     * @param string $InstanceId 实例ID
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
        if (array_key_exists("ParamName",$param) and $param["ParamName"] !== null) {
            $this->ParamName = $param["ParamName"];
        }

        if (array_key_exists("CurrentValue",$param) and $param["CurrentValue"] !== null) {
            $this->CurrentValue = $param["CurrentValue"];
        }

        if (array_key_exists("UpdateValue",$param) and $param["UpdateValue"] !== null) {
            $this->UpdateValue = $param["UpdateValue"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }
    }
}
