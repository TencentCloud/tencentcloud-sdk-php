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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDatasetDetailUnstructured请求参数结构体
 *
 * @method string getDatasetId() 获取数据集ID
 * @method void setDatasetId(string $DatasetId) 设置数据集ID
 * @method integer getOffset() 获取偏移量
 * @method void setOffset(integer $Offset) 设置偏移量
 * @method integer getLimit() 获取返回个数，默认20，目前最大支持2000条数据
 * @method void setLimit(integer $Limit) 设置返回个数，默认20，目前最大支持2000条数据
 * @method array getLabelList() 获取标签过滤参数，对应标签值
 * @method void setLabelList(array $LabelList) 设置标签过滤参数，对应标签值
 * @method string getAnnotationStatus() 获取标注状态过滤参数:
STATUS_ANNOTATED，已标注
STATUS_NON_ANNOTATED，未标注
STATUS_ALL，全部
默认为STATUS_ALL
 * @method void setAnnotationStatus(string $AnnotationStatus) 设置标注状态过滤参数:
STATUS_ANNOTATED，已标注
STATUS_NON_ANNOTATED，未标注
STATUS_ALL，全部
默认为STATUS_ALL
 * @method array getDatasetIds() 获取数据集ID列表
 * @method void setDatasetIds(array $DatasetIds) 设置数据集ID列表
 * @method array getTextClassificationLabels() 获取要筛选的文本分类场景标签信息
 * @method void setTextClassificationLabels(array $TextClassificationLabels) 设置要筛选的文本分类场景标签信息
 */
class DescribeDatasetDetailUnstructuredRequest extends AbstractModel
{
    /**
     * @var string 数据集ID
     */
    public $DatasetId;

    /**
     * @var integer 偏移量
     */
    public $Offset;

    /**
     * @var integer 返回个数，默认20，目前最大支持2000条数据
     */
    public $Limit;

    /**
     * @var array 标签过滤参数，对应标签值
     */
    public $LabelList;

    /**
     * @var string 标注状态过滤参数:
STATUS_ANNOTATED，已标注
STATUS_NON_ANNOTATED，未标注
STATUS_ALL，全部
默认为STATUS_ALL
     */
    public $AnnotationStatus;

    /**
     * @var array 数据集ID列表
     */
    public $DatasetIds;

    /**
     * @var array 要筛选的文本分类场景标签信息
     */
    public $TextClassificationLabels;

    /**
     * @param string $DatasetId 数据集ID
     * @param integer $Offset 偏移量
     * @param integer $Limit 返回个数，默认20，目前最大支持2000条数据
     * @param array $LabelList 标签过滤参数，对应标签值
     * @param string $AnnotationStatus 标注状态过滤参数:
STATUS_ANNOTATED，已标注
STATUS_NON_ANNOTATED，未标注
STATUS_ALL，全部
默认为STATUS_ALL
     * @param array $DatasetIds 数据集ID列表
     * @param array $TextClassificationLabels 要筛选的文本分类场景标签信息
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
        if (array_key_exists("DatasetId",$param) and $param["DatasetId"] !== null) {
            $this->DatasetId = $param["DatasetId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("LabelList",$param) and $param["LabelList"] !== null) {
            $this->LabelList = $param["LabelList"];
        }

        if (array_key_exists("AnnotationStatus",$param) and $param["AnnotationStatus"] !== null) {
            $this->AnnotationStatus = $param["AnnotationStatus"];
        }

        if (array_key_exists("DatasetIds",$param) and $param["DatasetIds"] !== null) {
            $this->DatasetIds = $param["DatasetIds"];
        }

        if (array_key_exists("TextClassificationLabels",$param) and $param["TextClassificationLabels"] !== null) {
            $this->TextClassificationLabels = [];
            foreach ($param["TextClassificationLabels"] as $key => $value){
                $obj = new TextLabelDistributionInfo();
                $obj->deserialize($value);
                array_push($this->TextClassificationLabels, $obj);
            }
        }
    }
}
