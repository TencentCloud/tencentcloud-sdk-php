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
 * 设备评估工单基本信息
 *
 * @method string getCustomerName() 获取客户名称
 * @method void setCustomerName(string $CustomerName) 设置客户名称
 * @method string getDeviceType() 获取server 服务器  netDevice 网络设备
 * @method void setDeviceType(string $DeviceType) 设置server 服务器  netDevice 网络设备
 * @method string getCampusName() 获取园区名称
 * @method void setCampusName(string $CampusName) 设置园区名称
 * @method string getRemark() 获取备注
 * @method void setRemark(string $Remark) 设置备注
 */
class ModelEvaluationBaseInfo extends AbstractModel
{
    /**
     * @var string 客户名称
     */
    public $CustomerName;

    /**
     * @var string server 服务器  netDevice 网络设备
     */
    public $DeviceType;

    /**
     * @var string 园区名称
     */
    public $CampusName;

    /**
     * @var string 备注
     */
    public $Remark;

    /**
     * @param string $CustomerName 客户名称
     * @param string $DeviceType server 服务器  netDevice 网络设备
     * @param string $CampusName 园区名称
     * @param string $Remark 备注
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
        if (array_key_exists("CustomerName",$param) and $param["CustomerName"] !== null) {
            $this->CustomerName = $param["CustomerName"];
        }

        if (array_key_exists("DeviceType",$param) and $param["DeviceType"] !== null) {
            $this->DeviceType = $param["DeviceType"];
        }

        if (array_key_exists("CampusName",$param) and $param["CampusName"] !== null) {
            $this->CampusName = $param["CampusName"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
