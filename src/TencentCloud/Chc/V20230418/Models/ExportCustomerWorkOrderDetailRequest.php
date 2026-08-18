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
namespace TencentCloud\Chc\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ExportCustomerWorkOrderDetail请求参数结构体
 *
 * @method string getBeginDateTime() 获取<p>要导出的工单的起始时间</p>
 * @method void setBeginDateTime(string $BeginDateTime) 设置<p>要导出的工单的起始时间</p>
 * @method string getEndDateTime() 获取<p>要导出的工单的结束时间</p>
 * @method void setEndDateTime(string $EndDateTime) 设置<p>要导出的工单的结束时间</p>
 * @method array getWorkOrderType() 获取<p>服务工单类型</p>
 * @method void setWorkOrderType(array $WorkOrderType) 设置<p>服务工单类型</p>
 */
class ExportCustomerWorkOrderDetailRequest extends AbstractModel
{
    /**
     * @var string <p>要导出的工单的起始时间</p>
     */
    public $BeginDateTime;

    /**
     * @var string <p>要导出的工单的结束时间</p>
     */
    public $EndDateTime;

    /**
     * @var array <p>服务工单类型</p>
     */
    public $WorkOrderType;

    /**
     * @param string $BeginDateTime <p>要导出的工单的起始时间</p>
     * @param string $EndDateTime <p>要导出的工单的结束时间</p>
     * @param array $WorkOrderType <p>服务工单类型</p>
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
        if (array_key_exists("BeginDateTime",$param) and $param["BeginDateTime"] !== null) {
            $this->BeginDateTime = $param["BeginDateTime"];
        }

        if (array_key_exists("EndDateTime",$param) and $param["EndDateTime"] !== null) {
            $this->EndDateTime = $param["EndDateTime"];
        }

        if (array_key_exists("WorkOrderType",$param) and $param["WorkOrderType"] !== null) {
            $this->WorkOrderType = $param["WorkOrderType"];
        }
    }
}
