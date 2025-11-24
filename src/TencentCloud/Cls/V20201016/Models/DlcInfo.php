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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据湖计算服务（Data Lake Compute，简称DLC）导入配置信息
 *
 * @method DlcTableInfo getTableInfo() 获取dlc表信息
 * @method void setTableInfo(DlcTableInfo $TableInfo) 设置dlc表信息
 * @method array getFieldInfos() 获取dlc数据字段信息
 * @method void setFieldInfos(array $FieldInfos) 设置dlc数据字段信息
 * @method array getPartitionInfos() 获取dlc分区信息
 * @method void setPartitionInfos(array $PartitionInfos) 设置dlc分区信息
 * @method DlcPartitionExtra getPartitionExtra() 获取dlc分区额外信息
 * @method void setPartitionExtra(DlcPartitionExtra $PartitionExtra) 设置dlc分区额外信息
 */
class DlcInfo extends AbstractModel
{
    /**
     * @var DlcTableInfo dlc表信息
     */
    public $TableInfo;

    /**
     * @var array dlc数据字段信息
     */
    public $FieldInfos;

    /**
     * @var array dlc分区信息
     */
    public $PartitionInfos;

    /**
     * @var DlcPartitionExtra dlc分区额外信息
     */
    public $PartitionExtra;

    /**
     * @param DlcTableInfo $TableInfo dlc表信息
     * @param array $FieldInfos dlc数据字段信息
     * @param array $PartitionInfos dlc分区信息
     * @param DlcPartitionExtra $PartitionExtra dlc分区额外信息
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
        if (array_key_exists("TableInfo",$param) and $param["TableInfo"] !== null) {
            $this->TableInfo = new DlcTableInfo();
            $this->TableInfo->deserialize($param["TableInfo"]);
        }

        if (array_key_exists("FieldInfos",$param) and $param["FieldInfos"] !== null) {
            $this->FieldInfos = [];
            foreach ($param["FieldInfos"] as $key => $value){
                $obj = new DlcFiledInfo();
                $obj->deserialize($value);
                array_push($this->FieldInfos, $obj);
            }
        }

        if (array_key_exists("PartitionInfos",$param) and $param["PartitionInfos"] !== null) {
            $this->PartitionInfos = [];
            foreach ($param["PartitionInfos"] as $key => $value){
                $obj = new DlcPartitionInfo();
                $obj->deserialize($value);
                array_push($this->PartitionInfos, $obj);
            }
        }

        if (array_key_exists("PartitionExtra",$param) and $param["PartitionExtra"] !== null) {
            $this->PartitionExtra = new DlcPartitionExtra();
            $this->PartitionExtra->deserialize($param["PartitionExtra"]);
        }
    }
}
