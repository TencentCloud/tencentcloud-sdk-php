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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateExportComplianceStatusListJob请求参数结构体
 *
 * @method string getAssetType() 获取要导出信息的资产类型
 * @method void setAssetType(string $AssetType) 设置要导出信息的资产类型
 * @method boolean getExportByAsset() 获取按照检测项导出，还是按照资产导出。true: 按照资产导出；false: 按照检测项导出。
 * @method void setExportByAsset(boolean $ExportByAsset) 设置按照检测项导出，还是按照资产导出。true: 按照资产导出；false: 按照检测项导出。
 * @method boolean getExportAll() 获取true, 全部导出；false, 根据IdList来导出数据。
 * @method void setExportAll(boolean $ExportAll) 设置true, 全部导出；false, 根据IdList来导出数据。
 * @method array getIdList() 获取要导出的资产ID列表或检测项ID列表，由ExportByAsset的取值决定。
 * @method void setIdList(array $IdList) 设置要导出的资产ID列表或检测项ID列表，由ExportByAsset的取值决定。
 */
class CreateExportComplianceStatusListJobRequest extends AbstractModel
{
    /**
     * @var string 要导出信息的资产类型
     */
    public $AssetType;

    /**
     * @var boolean 按照检测项导出，还是按照资产导出。true: 按照资产导出；false: 按照检测项导出。
     */
    public $ExportByAsset;

    /**
     * @var boolean true, 全部导出；false, 根据IdList来导出数据。
     */
    public $ExportAll;

    /**
     * @var array 要导出的资产ID列表或检测项ID列表，由ExportByAsset的取值决定。
     */
    public $IdList;

    /**
     * @param string $AssetType 要导出信息的资产类型
     * @param boolean $ExportByAsset 按照检测项导出，还是按照资产导出。true: 按照资产导出；false: 按照检测项导出。
     * @param boolean $ExportAll true, 全部导出；false, 根据IdList来导出数据。
     * @param array $IdList 要导出的资产ID列表或检测项ID列表，由ExportByAsset的取值决定。
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
        if (array_key_exists("AssetType",$param) and $param["AssetType"] !== null) {
            $this->AssetType = $param["AssetType"];
        }

        if (array_key_exists("ExportByAsset",$param) and $param["ExportByAsset"] !== null) {
            $this->ExportByAsset = $param["ExportByAsset"];
        }

        if (array_key_exists("ExportAll",$param) and $param["ExportAll"] !== null) {
            $this->ExportAll = $param["ExportAll"];
        }

        if (array_key_exists("IdList",$param) and $param["IdList"] !== null) {
            $this->IdList = $param["IdList"];
        }
    }
}
