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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateCLSDelivery请求参数结构体
 *
 * @method string getInstanceId() 获取实例id
 * @method void setInstanceId(string $InstanceId) 设置实例id
 * @method array getCLSInfoList() 获取日志投递配置
 * @method void setCLSInfoList(array $CLSInfoList) 设置日志投递配置
 * @method string getLogType() 获取日志类型
 * @method void setLogType(string $LogType) 设置日志类型
 * @method string getIsInMaintainPeriod() 获取是否维护时间运行
 * @method void setIsInMaintainPeriod(string $IsInMaintainPeriod) 设置是否维护时间运行
 */
class CreateCLSDeliveryRequest extends AbstractModel
{
    /**
     * @var string 实例id
     */
    public $InstanceId;

    /**
     * @var array 日志投递配置
     */
    public $CLSInfoList;

    /**
     * @var string 日志类型
     */
    public $LogType;

    /**
     * @var string 是否维护时间运行
     */
    public $IsInMaintainPeriod;

    /**
     * @param string $InstanceId 实例id
     * @param array $CLSInfoList 日志投递配置
     * @param string $LogType 日志类型
     * @param string $IsInMaintainPeriod 是否维护时间运行
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

        if (array_key_exists("CLSInfoList",$param) and $param["CLSInfoList"] !== null) {
            $this->CLSInfoList = [];
            foreach ($param["CLSInfoList"] as $key => $value){
                $obj = new CLSInfo();
                $obj->deserialize($value);
                array_push($this->CLSInfoList, $obj);
            }
        }

        if (array_key_exists("LogType",$param) and $param["LogType"] !== null) {
            $this->LogType = $param["LogType"];
        }

        if (array_key_exists("IsInMaintainPeriod",$param) and $param["IsInMaintainPeriod"] !== null) {
            $this->IsInMaintainPeriod = $param["IsInMaintainPeriod"];
        }
    }
}
