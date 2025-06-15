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
namespace TencentCloud\Ioa\V20220601\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 业务响应数据
 *
 * @method array getProcessList() 获取分页的具体数据对象
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProcessList(array $ProcessList) 设置分页的具体数据对象
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getNetworkList() 获取分页的具体数据对象
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNetworkList(array $NetworkList) 设置分页的具体数据对象
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getServiceList() 获取分页的具体数据对象
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceList(array $ServiceList) 设置分页的具体数据对象
注意：此字段可能返回 null，表示取不到有效值。
 */
class DescribeDeviceInfoRspData extends AbstractModel
{
    /**
     * @var array 分页的具体数据对象
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProcessList;

    /**
     * @var array 分页的具体数据对象
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NetworkList;

    /**
     * @var array 分页的具体数据对象
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceList;

    /**
     * @param array $ProcessList 分页的具体数据对象
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $NetworkList 分页的具体数据对象
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ServiceList 分页的具体数据对象
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("ProcessList",$param) and $param["ProcessList"] !== null) {
            $this->ProcessList = [];
            foreach ($param["ProcessList"] as $key => $value){
                $obj = new DeviceProcessInfo();
                $obj->deserialize($value);
                array_push($this->ProcessList, $obj);
            }
        }

        if (array_key_exists("NetworkList",$param) and $param["NetworkList"] !== null) {
            $this->NetworkList = [];
            foreach ($param["NetworkList"] as $key => $value){
                $obj = new DeviceNetworkInfo();
                $obj->deserialize($value);
                array_push($this->NetworkList, $obj);
            }
        }

        if (array_key_exists("ServiceList",$param) and $param["ServiceList"] !== null) {
            $this->ServiceList = [];
            foreach ($param["ServiceList"] as $key => $value){
                $obj = new DeviceServiceInfo();
                $obj->deserialize($value);
                array_push($this->ServiceList, $obj);
            }
        }
    }
}
