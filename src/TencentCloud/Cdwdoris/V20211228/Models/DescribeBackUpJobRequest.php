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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBackUpJob请求参数结构体
 *
 * @method string getInstanceId() 获取<p>集群id</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>集群id</p>
 * @method integer getApplicationType() 获取<p>任务类型：<br>0-不限制，或使用TypeFilters过滤；<br>1-备份恢复（包括周期备份和一次性备份）；<br>2-数据迁移（包括跨集群迁移和cos迁移）</p>
 * @method void setApplicationType(integer $ApplicationType) 设置<p>任务类型：<br>0-不限制，或使用TypeFilters过滤；<br>1-备份恢复（包括周期备份和一次性备份）；<br>2-数据迁移（包括跨集群迁移和cos迁移）</p>
 * @method array getTypeFilters() 获取<p>任务类型过滤器</p>
 * @method void setTypeFilters(array $TypeFilters) 设置<p>任务类型过滤器</p>
 * @method array getStatusFilters() 获取<p>实例状态过滤器</p>
 * @method void setStatusFilters(array $StatusFilters) 设置<p>实例状态过滤器</p>
 * @method string getScheduleNameFilters() 获取<p>任务名称过滤器</p>
 * @method void setScheduleNameFilters(string $ScheduleNameFilters) 设置<p>任务名称过滤器</p>
 * @method string getOrderType() 获取<p>按照快照生成时间排序，默认DESC：<br>ASC-升序<br>DESC-降序</p>
 * @method void setOrderType(string $OrderType) 设置<p>按照快照生成时间排序，默认DESC：<br>ASC-升序<br>DESC-降序</p>
 * @method integer getPageSize() 获取<p>分页大小</p>
 * @method void setPageSize(integer $PageSize) 设置<p>分页大小</p>
 * @method integer getPageNum() 获取<p>页号</p>
 * @method void setPageNum(integer $PageNum) 设置<p>页号</p>
 * @method string getBeginTime() 获取<p>开始时间</p>
 * @method void setBeginTime(string $BeginTime) 设置<p>开始时间</p>
 * @method string getEndTime() 获取<p>结束时间</p>
 * @method void setEndTime(string $EndTime) 设置<p>结束时间</p>
 * @method string getJobIdFiltersStr() 获取<p>jobid的string类型</p>
 * @method void setJobIdFiltersStr(string $JobIdFiltersStr) 设置<p>jobid的string类型</p>
 * @method array getEncryptionFilters() 获取<p>0-未加密；1-已加密</p>
 * @method void setEncryptionFilters(array $EncryptionFilters) 设置<p>0-未加密；1-已加密</p>
 */
class DescribeBackUpJobRequest extends AbstractModel
{
    /**
     * @var string <p>集群id</p>
     */
    public $InstanceId;

    /**
     * @var integer <p>任务类型：<br>0-不限制，或使用TypeFilters过滤；<br>1-备份恢复（包括周期备份和一次性备份）；<br>2-数据迁移（包括跨集群迁移和cos迁移）</p>
     */
    public $ApplicationType;

    /**
     * @var array <p>任务类型过滤器</p>
     */
    public $TypeFilters;

    /**
     * @var array <p>实例状态过滤器</p>
     */
    public $StatusFilters;

    /**
     * @var string <p>任务名称过滤器</p>
     */
    public $ScheduleNameFilters;

    /**
     * @var string <p>按照快照生成时间排序，默认DESC：<br>ASC-升序<br>DESC-降序</p>
     */
    public $OrderType;

    /**
     * @var integer <p>分页大小</p>
     */
    public $PageSize;

    /**
     * @var integer <p>页号</p>
     */
    public $PageNum;

    /**
     * @var string <p>开始时间</p>
     */
    public $BeginTime;

    /**
     * @var string <p>结束时间</p>
     */
    public $EndTime;

    /**
     * @var string <p>jobid的string类型</p>
     */
    public $JobIdFiltersStr;

    /**
     * @var array <p>0-未加密；1-已加密</p>
     */
    public $EncryptionFilters;

    /**
     * @param string $InstanceId <p>集群id</p>
     * @param integer $ApplicationType <p>任务类型：<br>0-不限制，或使用TypeFilters过滤；<br>1-备份恢复（包括周期备份和一次性备份）；<br>2-数据迁移（包括跨集群迁移和cos迁移）</p>
     * @param array $TypeFilters <p>任务类型过滤器</p>
     * @param array $StatusFilters <p>实例状态过滤器</p>
     * @param string $ScheduleNameFilters <p>任务名称过滤器</p>
     * @param string $OrderType <p>按照快照生成时间排序，默认DESC：<br>ASC-升序<br>DESC-降序</p>
     * @param integer $PageSize <p>分页大小</p>
     * @param integer $PageNum <p>页号</p>
     * @param string $BeginTime <p>开始时间</p>
     * @param string $EndTime <p>结束时间</p>
     * @param string $JobIdFiltersStr <p>jobid的string类型</p>
     * @param array $EncryptionFilters <p>0-未加密；1-已加密</p>
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ApplicationType",$param) and $param["ApplicationType"] !== null) {
            $this->ApplicationType = $param["ApplicationType"];
        }

        if (array_key_exists("TypeFilters",$param) and $param["TypeFilters"] !== null) {
            $this->TypeFilters = $param["TypeFilters"];
        }

        if (array_key_exists("StatusFilters",$param) and $param["StatusFilters"] !== null) {
            $this->StatusFilters = $param["StatusFilters"];
        }

        if (array_key_exists("ScheduleNameFilters",$param) and $param["ScheduleNameFilters"] !== null) {
            $this->ScheduleNameFilters = $param["ScheduleNameFilters"];
        }

        if (array_key_exists("OrderType",$param) and $param["OrderType"] !== null) {
            $this->OrderType = $param["OrderType"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("PageNum",$param) and $param["PageNum"] !== null) {
            $this->PageNum = $param["PageNum"];
        }

        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("JobIdFiltersStr",$param) and $param["JobIdFiltersStr"] !== null) {
            $this->JobIdFiltersStr = $param["JobIdFiltersStr"];
        }

        if (array_key_exists("EncryptionFilters",$param) and $param["EncryptionFilters"] !== null) {
            $this->EncryptionFilters = $param["EncryptionFilters"];
        }
    }
}
