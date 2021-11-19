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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePriceRunInstance请求参数结构体
 *
 * @method string getInstanceType() 获取实例的机型信息
 * @method void setInstanceType(string $InstanceType) 设置实例的机型信息
 * @method SystemDisk getSystemDisk() 获取系统盘信息
 * @method void setSystemDisk(SystemDisk $SystemDisk) 设置系统盘信息
 * @method integer getInstanceCount() 获取实例个数
 * @method void setInstanceCount(integer $InstanceCount) 设置实例个数
 * @method array getDataDisk() 获取数据盘信息
 * @method void setDataDisk(array $DataDisk) 设置数据盘信息
 */
class DescribePriceRunInstanceRequest extends AbstractModel
{
    /**
     * @var string 实例的机型信息
     */
    public $InstanceType;

    /**
     * @var SystemDisk 系统盘信息
     */
    public $SystemDisk;

    /**
     * @var integer 实例个数
     */
    public $InstanceCount;

    /**
     * @var array 数据盘信息
     */
    public $DataDisk;

    /**
     * @param string $InstanceType 实例的机型信息
     * @param SystemDisk $SystemDisk 系统盘信息
     * @param integer $InstanceCount 实例个数
     * @param array $DataDisk 数据盘信息
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
        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("SystemDisk",$param) and $param["SystemDisk"] !== null) {
            $this->SystemDisk = new SystemDisk();
            $this->SystemDisk->deserialize($param["SystemDisk"]);
        }

        if (array_key_exists("InstanceCount",$param) and $param["InstanceCount"] !== null) {
            $this->InstanceCount = $param["InstanceCount"];
        }

        if (array_key_exists("DataDisk",$param) and $param["DataDisk"] !== null) {
            $this->DataDisk = [];
            foreach ($param["DataDisk"] as $key => $value){
                $obj = new DataDisk();
                $obj->deserialize($value);
                array_push($this->DataDisk, $obj);
            }
        }
    }
}
