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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 云计划下的设备通道列表返回数据
 *
 * @method integer getPageNumber() 获取第几页
 * @method void setPageNumber(integer $PageNumber) 设置第几页
 * @method integer getPageSize() 获取当前页的设备数量
 * @method void setPageSize(integer $PageSize) 设置当前页的设备数量
 * @method integer getTotalCount() 获取本次查询的设备通道总数
 * @method void setTotalCount(integer $TotalCount) 设置本次查询的设备通道总数
 * @method array getList() 获取设备通道信息列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setList(array $List) 设置设备通道信息列表
注意：此字段可能返回 null，表示取不到有效值。
 */
class ListRecordPlanDevicesData extends AbstractModel
{
    /**
     * @var integer 第几页
     */
    public $PageNumber;

    /**
     * @var integer 当前页的设备数量
     */
    public $PageSize;

    /**
     * @var integer 本次查询的设备通道总数
     */
    public $TotalCount;

    /**
     * @var array 设备通道信息列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $List;

    /**
     * @param integer $PageNumber 第几页
     * @param integer $PageSize 当前页的设备数量
     * @param integer $TotalCount 本次查询的设备通道总数
     * @param array $List 设备通道信息列表
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
        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("List",$param) and $param["List"] !== null) {
            $this->List = [];
            foreach ($param["List"] as $key => $value){
                $obj = new RecordPlanChannelInfo();
                $obj->deserialize($value);
                array_push($this->List, $obj);
            }
        }
    }
}
