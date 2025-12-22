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
 * @method string getInstanceId() 获取集群id
 * @method void setInstanceId(string $InstanceId) 设置集群id
 * @method integer getApplicationType() 获取任务类型：
0-不限制，或使用TypeFilters过滤；
1-备份恢复（包括周期备份和一次性备份）；
2-数据迁移（包括跨集群迁移和cos迁移）	
 * @method void setApplicationType(integer $ApplicationType) 设置任务类型：
0-不限制，或使用TypeFilters过滤；
1-备份恢复（包括周期备份和一次性备份）；
2-数据迁移（包括跨集群迁移和cos迁移）	
 * @method integer getPageSize() 获取分页大小
 * @method void setPageSize(integer $PageSize) 设置分页大小
 * @method integer getPageNum() 获取页号
 * @method void setPageNum(integer $PageNum) 设置页号
 * @method string getBeginTime() 获取开始时间
 * @method void setBeginTime(string $BeginTime) 设置开始时间
 * @method string getEndTime() 获取结束时间
 * @method void setEndTime(string $EndTime) 设置结束时间
 * @method string getJobIdFiltersStr() 获取jobid的string类型
 * @method void setJobIdFiltersStr(string $JobIdFiltersStr) 设置jobid的string类型
 * @method array getEncryptionFilters() 获取0-未加密；1-已加密
 * @method void setEncryptionFilters(array $EncryptionFilters) 设置0-未加密；1-已加密
 */
class DescribeBackUpJobRequest extends AbstractModel
{
    /**
     * @var string 集群id
     */
    public $InstanceId;

    /**
     * @var integer 任务类型：
0-不限制，或使用TypeFilters过滤；
1-备份恢复（包括周期备份和一次性备份）；
2-数据迁移（包括跨集群迁移和cos迁移）	
     */
    public $ApplicationType;

    /**
     * @var integer 分页大小
     */
    public $PageSize;

    /**
     * @var integer 页号
     */
    public $PageNum;

    /**
     * @var string 开始时间
     */
    public $BeginTime;

    /**
     * @var string 结束时间
     */
    public $EndTime;

    /**
     * @var string jobid的string类型
     */
    public $JobIdFiltersStr;

    /**
     * @var array 0-未加密；1-已加密
     */
    public $EncryptionFilters;

    /**
     * @param string $InstanceId 集群id
     * @param integer $ApplicationType 任务类型：
0-不限制，或使用TypeFilters过滤；
1-备份恢复（包括周期备份和一次性备份）；
2-数据迁移（包括跨集群迁移和cos迁移）	
     * @param integer $PageSize 分页大小
     * @param integer $PageNum 页号
     * @param string $BeginTime 开始时间
     * @param string $EndTime 结束时间
     * @param string $JobIdFiltersStr jobid的string类型
     * @param array $EncryptionFilters 0-未加密；1-已加密
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
