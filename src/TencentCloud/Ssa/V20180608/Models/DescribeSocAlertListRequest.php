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
namespace TencentCloud\Ssa\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSocAlertList请求参数结构体
 *
 * @method integer getPageSize() 获取页大小
 * @method void setPageSize(integer $PageSize) 设置页大小
 * @method integer getPageIndex() 获取页码
 * @method void setPageIndex(integer $PageIndex) 设置页码
 * @method integer getScenes() 获取1:急需关注 2.重保监控 3.全量告警
 * @method void setScenes(integer $Scenes) 设置1:急需关注 2.重保监控 3.全量告警
 * @method array getFilter() 获取查询参数
 * @method void setFilter(array $Filter) 设置查询参数
 * @method array getSorter() 获取排序参数
 * @method void setSorter(array $Sorter) 设置排序参数
 * @method boolean getExportFlag() 获取是否导出
 * @method void setExportFlag(boolean $ExportFlag) 设置是否导出
 */
class DescribeSocAlertListRequest extends AbstractModel
{
    /**
     * @var integer 页大小
     */
    public $PageSize;

    /**
     * @var integer 页码
     */
    public $PageIndex;

    /**
     * @var integer 1:急需关注 2.重保监控 3.全量告警
     */
    public $Scenes;

    /**
     * @var array 查询参数
     */
    public $Filter;

    /**
     * @var array 排序参数
     */
    public $Sorter;

    /**
     * @var boolean 是否导出
     */
    public $ExportFlag;

    /**
     * @param integer $PageSize 页大小
     * @param integer $PageIndex 页码
     * @param integer $Scenes 1:急需关注 2.重保监控 3.全量告警
     * @param array $Filter 查询参数
     * @param array $Sorter 排序参数
     * @param boolean $ExportFlag 是否导出
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
        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("PageIndex",$param) and $param["PageIndex"] !== null) {
            $this->PageIndex = $param["PageIndex"];
        }

        if (array_key_exists("Scenes",$param) and $param["Scenes"] !== null) {
            $this->Scenes = $param["Scenes"];
        }

        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $this->Filter = [];
            foreach ($param["Filter"] as $key => $value){
                $obj = new QueryFilter();
                $obj->deserialize($value);
                array_push($this->Filter, $obj);
            }
        }

        if (array_key_exists("Sorter",$param) and $param["Sorter"] !== null) {
            $this->Sorter = [];
            foreach ($param["Sorter"] as $key => $value){
                $obj = new QuerySort();
                $obj->deserialize($value);
                array_push($this->Sorter, $obj);
            }
        }

        if (array_key_exists("ExportFlag",$param) and $param["ExportFlag"] !== null) {
            $this->ExportFlag = $param["ExportFlag"];
        }
    }
}
