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
namespace TencentCloud\Antiddos\V20200309\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 水印配置相关信息
 *
 * @method WaterPrintConfig getWaterPrintConfig() 获取水印配置
 * @method void setWaterPrintConfig(WaterPrintConfig $WaterPrintConfig) 设置水印配置
 * @method array getInstanceDetailList() 获取水印配置所属的资源实例
 * @method void setInstanceDetailList(array $InstanceDetailList) 设置水印配置所属的资源实例
 */
class WaterPrintRelation extends AbstractModel
{
    /**
     * @var WaterPrintConfig 水印配置
     */
    public $WaterPrintConfig;

    /**
     * @var array 水印配置所属的资源实例
     */
    public $InstanceDetailList;

    /**
     * @param WaterPrintConfig $WaterPrintConfig 水印配置
     * @param array $InstanceDetailList 水印配置所属的资源实例
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
        if (array_key_exists("WaterPrintConfig",$param) and $param["WaterPrintConfig"] !== null) {
            $this->WaterPrintConfig = new WaterPrintConfig();
            $this->WaterPrintConfig->deserialize($param["WaterPrintConfig"]);
        }

        if (array_key_exists("InstanceDetailList",$param) and $param["InstanceDetailList"] !== null) {
            $this->InstanceDetailList = [];
            foreach ($param["InstanceDetailList"] as $key => $value){
                $obj = new InstanceRelation();
                $obj->deserialize($value);
                array_push($this->InstanceDetailList, $obj);
            }
        }
    }
}
