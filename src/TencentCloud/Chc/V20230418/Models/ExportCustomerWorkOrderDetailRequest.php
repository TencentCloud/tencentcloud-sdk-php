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
namespace TencentCloud\Chc\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ExportCustomerWorkOrderDetail请求参数结构体
 *
 * @method array getWorkOrderType() 获取服务工单类型
 * @method void setWorkOrderType(array $WorkOrderType) 设置服务工单类型
 * @method string getBeginDateTime() 获取要导出的工单的起始时间
 * @method void setBeginDateTime(string $BeginDateTime) 设置要导出的工单的起始时间
 * @method string getEndDateTime() 获取要导出的工单的结束时间
 * @method void setEndDateTime(string $EndDateTime) 设置要导出的工单的结束时间
 */
class ExportCustomerWorkOrderDetailRequest extends AbstractModel
{
    /**
     * @var array 服务工单类型
     */
    public $WorkOrderType;

    /**
     * @var string 要导出的工单的起始时间
     */
    public $BeginDateTime;

    /**
     * @var string 要导出的工单的结束时间
     */
    public $EndDateTime;

    /**
     * @param array $WorkOrderType 服务工单类型
     * @param string $BeginDateTime 要导出的工单的起始时间
     * @param string $EndDateTime 要导出的工单的结束时间
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
        if (array_key_exists("WorkOrderType",$param) and $param["WorkOrderType"] !== null) {
            $this->WorkOrderType = $param["WorkOrderType"];
        }

        if (array_key_exists("BeginDateTime",$param) and $param["BeginDateTime"] !== null) {
            $this->BeginDateTime = $param["BeginDateTime"];
        }

        if (array_key_exists("EndDateTime",$param) and $param["EndDateTime"] !== null) {
            $this->EndDateTime = $param["EndDateTime"];
        }
    }
}
