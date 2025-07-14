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
namespace TencentCloud\Monitor\V20230616\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAlarmNotifyHistories请求参数结构体
 *
 * @method string getMonitorType() 获取监控类型
 * @method void setMonitorType(string $MonitorType) 设置监控类型
 * @method integer getQueryBaseTime() 获取起始时间点，unix秒级时间戳
 * @method void setQueryBaseTime(integer $QueryBaseTime) 设置起始时间点，unix秒级时间戳
 * @method integer getQueryBeforeSeconds() 获取从 QueryBaseTime 开始，需要查询往前多久的时间，单位秒
 * @method void setQueryBeforeSeconds(integer $QueryBeforeSeconds) 设置从 QueryBaseTime 开始，需要查询往前多久的时间，单位秒
 * @method PageByNoParams getPageParams() 获取分页参数
 * @method void setPageParams(PageByNoParams $PageParams) 设置分页参数
 * @method string getNamespace() 获取当监控类型为 MT_QCE 时候需要填写，归属的命名空间
 * @method void setNamespace(string $Namespace) 设置当监控类型为 MT_QCE 时候需要填写，归属的命名空间
 * @method string getModelName() 获取当监控类型为 MT_QCE 时候需要填写， 告警策略类型
 * @method void setModelName(string $ModelName) 设置当监控类型为 MT_QCE 时候需要填写， 告警策略类型
 * @method string getPolicyId() 获取查询某个策略的通知历史
 * @method void setPolicyId(string $PolicyId) 设置查询某个策略的通知历史
 */
class DescribeAlarmNotifyHistoriesRequest extends AbstractModel
{
    /**
     * @var string 监控类型
     */
    public $MonitorType;

    /**
     * @var integer 起始时间点，unix秒级时间戳
     */
    public $QueryBaseTime;

    /**
     * @var integer 从 QueryBaseTime 开始，需要查询往前多久的时间，单位秒
     */
    public $QueryBeforeSeconds;

    /**
     * @var PageByNoParams 分页参数
     */
    public $PageParams;

    /**
     * @var string 当监控类型为 MT_QCE 时候需要填写，归属的命名空间
     */
    public $Namespace;

    /**
     * @var string 当监控类型为 MT_QCE 时候需要填写， 告警策略类型
     */
    public $ModelName;

    /**
     * @var string 查询某个策略的通知历史
     */
    public $PolicyId;

    /**
     * @param string $MonitorType 监控类型
     * @param integer $QueryBaseTime 起始时间点，unix秒级时间戳
     * @param integer $QueryBeforeSeconds 从 QueryBaseTime 开始，需要查询往前多久的时间，单位秒
     * @param PageByNoParams $PageParams 分页参数
     * @param string $Namespace 当监控类型为 MT_QCE 时候需要填写，归属的命名空间
     * @param string $ModelName 当监控类型为 MT_QCE 时候需要填写， 告警策略类型
     * @param string $PolicyId 查询某个策略的通知历史
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
        if (array_key_exists("MonitorType",$param) and $param["MonitorType"] !== null) {
            $this->MonitorType = $param["MonitorType"];
        }

        if (array_key_exists("QueryBaseTime",$param) and $param["QueryBaseTime"] !== null) {
            $this->QueryBaseTime = $param["QueryBaseTime"];
        }

        if (array_key_exists("QueryBeforeSeconds",$param) and $param["QueryBeforeSeconds"] !== null) {
            $this->QueryBeforeSeconds = $param["QueryBeforeSeconds"];
        }

        if (array_key_exists("PageParams",$param) and $param["PageParams"] !== null) {
            $this->PageParams = new PageByNoParams();
            $this->PageParams->deserialize($param["PageParams"]);
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("ModelName",$param) and $param["ModelName"] !== null) {
            $this->ModelName = $param["ModelName"];
        }

        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }
    }
}
