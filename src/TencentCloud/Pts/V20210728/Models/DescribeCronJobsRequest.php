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
namespace TencentCloud\Pts\V20210728\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCronJobs请求参数结构体
 *
 * @method array getProjectIds() 获取项目ID数组
 * @method void setProjectIds(array $ProjectIds) 设置项目ID数组
 * @method integer getOffset() 获取偏移量，默认为0
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0
 * @method integer getLimit() 获取返回数量
 * @method void setLimit(integer $Limit) 设置返回数量
 * @method array getCronJobIds() 获取定时任务ID数组
 * @method void setCronJobIds(array $CronJobIds) 设置定时任务ID数组
 * @method string getCronJobName() 获取定时任务名字，模糊查询
 * @method void setCronJobName(string $CronJobName) 设置定时任务名字，模糊查询
 * @method array getCronJobStatus() 获取定时任务状态数组
 * @method void setCronJobStatus(array $CronJobStatus) 设置定时任务状态数组
 * @method string getOrderBy() 获取排序的列
 * @method void setOrderBy(string $OrderBy) 设置排序的列
 * @method boolean getAscend() 获取是否正序
 * @method void setAscend(boolean $Ascend) 设置是否正序
 */
class DescribeCronJobsRequest extends AbstractModel
{
    /**
     * @var array 项目ID数组
     */
    public $ProjectIds;

    /**
     * @var integer 偏移量，默认为0
     */
    public $Offset;

    /**
     * @var integer 返回数量
     */
    public $Limit;

    /**
     * @var array 定时任务ID数组
     */
    public $CronJobIds;

    /**
     * @var string 定时任务名字，模糊查询
     */
    public $CronJobName;

    /**
     * @var array 定时任务状态数组
     */
    public $CronJobStatus;

    /**
     * @var string 排序的列
     */
    public $OrderBy;

    /**
     * @var boolean 是否正序
     */
    public $Ascend;

    /**
     * @param array $ProjectIds 项目ID数组
     * @param integer $Offset 偏移量，默认为0
     * @param integer $Limit 返回数量
     * @param array $CronJobIds 定时任务ID数组
     * @param string $CronJobName 定时任务名字，模糊查询
     * @param array $CronJobStatus 定时任务状态数组
     * @param string $OrderBy 排序的列
     * @param boolean $Ascend 是否正序
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
        if (array_key_exists("ProjectIds",$param) and $param["ProjectIds"] !== null) {
            $this->ProjectIds = $param["ProjectIds"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("CronJobIds",$param) and $param["CronJobIds"] !== null) {
            $this->CronJobIds = $param["CronJobIds"];
        }

        if (array_key_exists("CronJobName",$param) and $param["CronJobName"] !== null) {
            $this->CronJobName = $param["CronJobName"];
        }

        if (array_key_exists("CronJobStatus",$param) and $param["CronJobStatus"] !== null) {
            $this->CronJobStatus = $param["CronJobStatus"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("Ascend",$param) and $param["Ascend"] !== null) {
            $this->Ascend = $param["Ascend"];
        }
    }
}
