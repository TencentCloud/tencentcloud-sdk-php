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
 * DescribeBackUpSchedules请求参数结构体
 *
 * @method integer getApplicationType() 获取<p>任务类型<br>0-不限制，或使用TypeFilters过滤；<br>1-备份恢复（包括周期备份和一次性备份）；<br>2-数据迁移（包括跨集群迁移和cos迁移）</p>
 * @method void setApplicationType(integer $ApplicationType) 设置<p>任务类型<br>0-不限制，或使用TypeFilters过滤；<br>1-备份恢复（包括周期备份和一次性备份）；<br>2-数据迁移（包括跨集群迁移和cos迁移）</p>
 * @method array getUsersFilters() 获取<p>创建人过滤器</p>
 * @method void setUsersFilters(array $UsersFilters) 设置<p>创建人过滤器</p>
 * @method array getTypeFilters() 获取<p>任务类型过滤器。<br>0-周期；<br>1-一次性；<br>2-数据迁移(即3和4的合集)；<br>3-远端集群迁移；<br>4-COS迁移</p>
 * @method void setTypeFilters(array $TypeFilters) 设置<p>任务类型过滤器。<br>0-周期；<br>1-一次性；<br>2-数据迁移(即3和4的合集)；<br>3-远端集群迁移；<br>4-COS迁移</p>
 * @method array getStatusFilters() 获取<p>任务状态过滤器</p>
 * @method void setStatusFilters(array $StatusFilters) 设置<p>任务状态过滤器</p>
 * @method string getOrderType() 获取<p>排序：<br>DESC-降序<br>ASC-升序</p>
 * @method void setOrderType(string $OrderType) 设置<p>排序：<br>DESC-降序<br>ASC-升序</p>
 * @method string getScheduleNameFilters() 获取<p>任务名过滤器</p>
 * @method void setScheduleNameFilters(string $ScheduleNameFilters) 设置<p>任务名过滤器</p>
 * @method integer getPageSize() 获取<p>分页大小</p>
 * @method void setPageSize(integer $PageSize) 设置<p>分页大小</p>
 * @method integer getPageNum() 获取<p>页号</p>
 * @method void setPageNum(integer $PageNum) 设置<p>页号</p>
 * @method array getEncryptionFilters() 获取<p>0-未加密；1-已加密</p>
 * @method void setEncryptionFilters(array $EncryptionFilters) 设置<p>0-未加密；1-已加密</p>
 * @method integer getScheduleId() 获取<p>调度任务id过滤</p>
 * @method void setScheduleId(integer $ScheduleId) 设置<p>调度任务id过滤</p>
 */
class DescribeBackUpSchedulesRequest extends AbstractModel
{
    /**
     * @var integer <p>任务类型<br>0-不限制，或使用TypeFilters过滤；<br>1-备份恢复（包括周期备份和一次性备份）；<br>2-数据迁移（包括跨集群迁移和cos迁移）</p>
     */
    public $ApplicationType;

    /**
     * @var array <p>创建人过滤器</p>
     */
    public $UsersFilters;

    /**
     * @var array <p>任务类型过滤器。<br>0-周期；<br>1-一次性；<br>2-数据迁移(即3和4的合集)；<br>3-远端集群迁移；<br>4-COS迁移</p>
     */
    public $TypeFilters;

    /**
     * @var array <p>任务状态过滤器</p>
     */
    public $StatusFilters;

    /**
     * @var string <p>排序：<br>DESC-降序<br>ASC-升序</p>
     */
    public $OrderType;

    /**
     * @var string <p>任务名过滤器</p>
     */
    public $ScheduleNameFilters;

    /**
     * @var integer <p>分页大小</p>
     */
    public $PageSize;

    /**
     * @var integer <p>页号</p>
     */
    public $PageNum;

    /**
     * @var array <p>0-未加密；1-已加密</p>
     */
    public $EncryptionFilters;

    /**
     * @var integer <p>调度任务id过滤</p>
     */
    public $ScheduleId;

    /**
     * @param integer $ApplicationType <p>任务类型<br>0-不限制，或使用TypeFilters过滤；<br>1-备份恢复（包括周期备份和一次性备份）；<br>2-数据迁移（包括跨集群迁移和cos迁移）</p>
     * @param array $UsersFilters <p>创建人过滤器</p>
     * @param array $TypeFilters <p>任务类型过滤器。<br>0-周期；<br>1-一次性；<br>2-数据迁移(即3和4的合集)；<br>3-远端集群迁移；<br>4-COS迁移</p>
     * @param array $StatusFilters <p>任务状态过滤器</p>
     * @param string $OrderType <p>排序：<br>DESC-降序<br>ASC-升序</p>
     * @param string $ScheduleNameFilters <p>任务名过滤器</p>
     * @param integer $PageSize <p>分页大小</p>
     * @param integer $PageNum <p>页号</p>
     * @param array $EncryptionFilters <p>0-未加密；1-已加密</p>
     * @param integer $ScheduleId <p>调度任务id过滤</p>
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
        if (array_key_exists("ApplicationType",$param) and $param["ApplicationType"] !== null) {
            $this->ApplicationType = $param["ApplicationType"];
        }

        if (array_key_exists("UsersFilters",$param) and $param["UsersFilters"] !== null) {
            $this->UsersFilters = $param["UsersFilters"];
        }

        if (array_key_exists("TypeFilters",$param) and $param["TypeFilters"] !== null) {
            $this->TypeFilters = $param["TypeFilters"];
        }

        if (array_key_exists("StatusFilters",$param) and $param["StatusFilters"] !== null) {
            $this->StatusFilters = $param["StatusFilters"];
        }

        if (array_key_exists("OrderType",$param) and $param["OrderType"] !== null) {
            $this->OrderType = $param["OrderType"];
        }

        if (array_key_exists("ScheduleNameFilters",$param) and $param["ScheduleNameFilters"] !== null) {
            $this->ScheduleNameFilters = $param["ScheduleNameFilters"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("PageNum",$param) and $param["PageNum"] !== null) {
            $this->PageNum = $param["PageNum"];
        }

        if (array_key_exists("EncryptionFilters",$param) and $param["EncryptionFilters"] !== null) {
            $this->EncryptionFilters = $param["EncryptionFilters"];
        }

        if (array_key_exists("ScheduleId",$param) and $param["ScheduleId"] !== null) {
            $this->ScheduleId = $param["ScheduleId"];
        }
    }
}
