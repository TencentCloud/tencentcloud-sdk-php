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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTaskMonitorInfos请求参数结构体
 *
 * @method array getTaskIdList() 获取任务ID列表，上限50个
 * @method void setTaskIdList(array $TaskIdList) 设置任务ID列表，上限50个
 * @method string getHouseName() 获取引擎名称
 * @method void setHouseName(string $HouseName) 设置引擎名称
 * @method string getCreateTimeStart() 获取任务创建时间的起始时间
 * @method void setCreateTimeStart(string $CreateTimeStart) 设置任务创建时间的起始时间
 * @method string getCreateTimeEnd() 获取任务创建时间的结束时间
 * @method void setCreateTimeEnd(string $CreateTimeEnd) 设置任务创建时间的结束时间
 * @method integer getLimit() 获取每一页条数
 * @method void setLimit(integer $Limit) 设置每一页条数
 * @method integer getOffset() 获取偏移量
 * @method void setOffset(integer $Offset) 设置偏移量
 */
class DescribeTaskMonitorInfosRequest extends AbstractModel
{
    /**
     * @var array 任务ID列表，上限50个
     */
    public $TaskIdList;

    /**
     * @var string 引擎名称
     */
    public $HouseName;

    /**
     * @var string 任务创建时间的起始时间
     */
    public $CreateTimeStart;

    /**
     * @var string 任务创建时间的结束时间
     */
    public $CreateTimeEnd;

    /**
     * @var integer 每一页条数
     */
    public $Limit;

    /**
     * @var integer 偏移量
     */
    public $Offset;

    /**
     * @param array $TaskIdList 任务ID列表，上限50个
     * @param string $HouseName 引擎名称
     * @param string $CreateTimeStart 任务创建时间的起始时间
     * @param string $CreateTimeEnd 任务创建时间的结束时间
     * @param integer $Limit 每一页条数
     * @param integer $Offset 偏移量
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
        if (array_key_exists("TaskIdList",$param) and $param["TaskIdList"] !== null) {
            $this->TaskIdList = $param["TaskIdList"];
        }

        if (array_key_exists("HouseName",$param) and $param["HouseName"] !== null) {
            $this->HouseName = $param["HouseName"];
        }

        if (array_key_exists("CreateTimeStart",$param) and $param["CreateTimeStart"] !== null) {
            $this->CreateTimeStart = $param["CreateTimeStart"];
        }

        if (array_key_exists("CreateTimeEnd",$param) and $param["CreateTimeEnd"] !== null) {
            $this->CreateTimeEnd = $param["CreateTimeEnd"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
