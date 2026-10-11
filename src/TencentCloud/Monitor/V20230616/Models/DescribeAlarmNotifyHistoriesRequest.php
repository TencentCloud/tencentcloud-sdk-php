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
 * @method string getMonitorType() 获取<p>监控类型</p>
 * @method void setMonitorType(string $MonitorType) 设置<p>监控类型</p>
 * @method integer getQueryBaseTime() 获取<p>起始时间点，unix秒级时间戳</p>
 * @method void setQueryBaseTime(integer $QueryBaseTime) 设置<p>起始时间点，unix秒级时间戳</p>
 * @method integer getQueryBeforeSeconds() 获取<p>从 QueryBaseTime 开始，需要查询往前多久的时间，单位秒</p>
 * @method void setQueryBeforeSeconds(integer $QueryBeforeSeconds) 设置<p>从 QueryBaseTime 开始，需要查询往前多久的时间，单位秒</p>
 * @method PageByNoParams getPageParams() 获取<p>分页参数</p>
 * @method void setPageParams(PageByNoParams $PageParams) 设置<p>分页参数</p>
 * @method string getNamespace() 获取<p>当监控类型为 MT_QCE 时候需要填写，归属的命名空间</p>
 * @method void setNamespace(string $Namespace) 设置<p>当监控类型为 MT_QCE 时候需要填写，归属的命名空间</p>
 * @method string getModelName() 获取<p>当监控类型为 MT_QCE 时候需要填写， 告警策略类型</p>
 * @method void setModelName(string $ModelName) 设置<p>当监控类型为 MT_QCE 时候需要填写， 告警策略类型</p>
 * @method string getPolicyId() 获取<p>查询某个策略的通知历史</p>
 * @method void setPolicyId(string $PolicyId) 设置<p>查询某个策略的通知历史</p>
 * @method string getNotifyId() 获取<p>详情页展示所需id</p>
 * @method void setNotifyId(string $NotifyId) 设置<p>详情页展示所需id</p>
 */
class DescribeAlarmNotifyHistoriesRequest extends AbstractModel
{
    /**
     * @var string <p>监控类型</p>
     */
    public $MonitorType;

    /**
     * @var integer <p>起始时间点，unix秒级时间戳</p>
     */
    public $QueryBaseTime;

    /**
     * @var integer <p>从 QueryBaseTime 开始，需要查询往前多久的时间，单位秒</p>
     */
    public $QueryBeforeSeconds;

    /**
     * @var PageByNoParams <p>分页参数</p>
     */
    public $PageParams;

    /**
     * @var string <p>当监控类型为 MT_QCE 时候需要填写，归属的命名空间</p>
     */
    public $Namespace;

    /**
     * @var string <p>当监控类型为 MT_QCE 时候需要填写， 告警策略类型</p>
     */
    public $ModelName;

    /**
     * @var string <p>查询某个策略的通知历史</p>
     */
    public $PolicyId;

    /**
     * @var string <p>详情页展示所需id</p>
     */
    public $NotifyId;

    /**
     * @param string $MonitorType <p>监控类型</p>
     * @param integer $QueryBaseTime <p>起始时间点，unix秒级时间戳</p>
     * @param integer $QueryBeforeSeconds <p>从 QueryBaseTime 开始，需要查询往前多久的时间，单位秒</p>
     * @param PageByNoParams $PageParams <p>分页参数</p>
     * @param string $Namespace <p>当监控类型为 MT_QCE 时候需要填写，归属的命名空间</p>
     * @param string $ModelName <p>当监控类型为 MT_QCE 时候需要填写， 告警策略类型</p>
     * @param string $PolicyId <p>查询某个策略的通知历史</p>
     * @param string $NotifyId <p>详情页展示所需id</p>
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

        if (array_key_exists("NotifyId",$param) and $param["NotifyId"] !== null) {
            $this->NotifyId = $param["NotifyId"];
        }
    }
}
