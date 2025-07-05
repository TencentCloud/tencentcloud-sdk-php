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
 * CreateModelEvaluationWorkOrder请求参数结构体
 *
 * @method array getModelSet() 获取设备名称及型号
 * @method void setModelSet(array $ModelSet) 设置设备名称及型号
 * @method integer getCampusId() 获取园区ID
 * @method void setCampusId(integer $CampusId) 设置园区ID
 * @method string getDeviceType() 获取只支持传入 server 和 netDevice
 * @method void setDeviceType(string $DeviceType) 设置只支持传入 server 和 netDevice
 * @method string getRemark() 获取备注
 * @method void setRemark(string $Remark) 设置备注
 */
class CreateModelEvaluationWorkOrderRequest extends AbstractModel
{
    /**
     * @var array 设备名称及型号
     */
    public $ModelSet;

    /**
     * @var integer 园区ID
     */
    public $CampusId;

    /**
     * @var string 只支持传入 server 和 netDevice
     */
    public $DeviceType;

    /**
     * @var string 备注
     */
    public $Remark;

    /**
     * @param array $ModelSet 设备名称及型号
     * @param integer $CampusId 园区ID
     * @param string $DeviceType 只支持传入 server 和 netDevice
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
        if (array_key_exists("ModelSet",$param) and $param["ModelSet"] !== null) {
            $this->ModelSet = [];
            foreach ($param["ModelSet"] as $key => $value){
                $obj = new ModelVersion();
                $obj->deserialize($value);
                array_push($this->ModelSet, $obj);
            }
        }

        if (array_key_exists("CampusId",$param) and $param["CampusId"] !== null) {
            $this->CampusId = $param["CampusId"];
        }

        if (array_key_exists("DeviceType",$param) and $param["DeviceType"] !== null) {
            $this->DeviceType = $param["DeviceType"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
