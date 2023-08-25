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
namespace TencentCloud\Dsgc\V20190723\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDSPACOSDiscoveryTaskResult请求参数结构体
 *
 * @method string getDspaId() 获取DSPA实例ID
 * @method void setDspaId(string $DspaId) 设置DSPA实例ID
 * @method integer getOffset() 获取偏移量，默认值为0
 * @method void setOffset(integer $Offset) 设置偏移量，默认值为0
 * @method integer getLimit() 获取返回数量，默认值为20，最大值为100
 * @method void setLimit(integer $Limit) 设置返回数量，默认值为20，最大值为100
 * @method array getFilters() 获取Array of Filter	此参数对外不可见。过滤数组。支持的Name：
BucketName 对象桶名
TaskID 任务ID，
TaskName 任务名，
DataSourceId：数据源ID，
ResourceRegion：资源所在地域
每项过滤条件最多支持5个。
 * @method void setFilters(array $Filters) 设置Array of Filter	此参数对外不可见。过滤数组。支持的Name：
BucketName 对象桶名
TaskID 任务ID，
TaskName 任务名，
DataSourceId：数据源ID，
ResourceRegion：资源所在地域
每项过滤条件最多支持5个。
 */
class DescribeDSPACOSDiscoveryTaskResultRequest extends AbstractModel
{
    /**
     * @var string DSPA实例ID
     */
    public $DspaId;

    /**
     * @var integer 偏移量，默认值为0
     */
    public $Offset;

    /**
     * @var integer 返回数量，默认值为20，最大值为100
     */
    public $Limit;

    /**
     * @var array Array of Filter	此参数对外不可见。过滤数组。支持的Name：
BucketName 对象桶名
TaskID 任务ID，
TaskName 任务名，
DataSourceId：数据源ID，
ResourceRegion：资源所在地域
每项过滤条件最多支持5个。
     */
    public $Filters;

    /**
     * @param string $DspaId DSPA实例ID
     * @param integer $Offset 偏移量，默认值为0
     * @param integer $Limit 返回数量，默认值为20，最大值为100
     * @param array $Filters Array of Filter	此参数对外不可见。过滤数组。支持的Name：
BucketName 对象桶名
TaskID 任务ID，
TaskName 任务名，
DataSourceId：数据源ID，
ResourceRegion：资源所在地域
每项过滤条件最多支持5个。
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
        if (array_key_exists("DspaId",$param) and $param["DspaId"] !== null) {
            $this->DspaId = $param["DspaId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
