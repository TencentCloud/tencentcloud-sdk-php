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
 * DescribeDatasetDetailStructured请求参数结构体
 *
 * @method string getDatasetId() 获取数据集ID
 * @method void setDatasetId(string $DatasetId) 设置数据集ID
 * @method integer getOffset() 获取偏移值
 * @method void setOffset(integer $Offset) 设置偏移值
 * @method integer getLimit() 获取返回数据条数，默认20，目前最大支持2000条数据
 * @method void setLimit(integer $Limit) 设置返回数据条数，默认20，目前最大支持2000条数据
 */
class DescribeDatasetDetailStructuredRequest extends AbstractModel
{
    /**
     * @var string 数据集ID
     */
    public $DatasetId;

    /**
     * @var integer 偏移值
     */
    public $Offset;

    /**
     * @var integer 返回数据条数，默认20，目前最大支持2000条数据
     */
    public $Limit;

    /**
     * @param string $DatasetId 数据集ID
     * @param integer $Offset 偏移值
     * @param integer $Limit 返回数据条数，默认20，目前最大支持2000条数据
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
    }
}
