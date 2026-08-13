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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSyncJobs请求参数结构体
 *
 * @method string getJobId() 获取<p>同步任务id，如sync-werwfs23，可通过<a href="https://cloud.tencent.com/document/product/571/82103">DescribeSyncJobs</a>接口获取。</p>
 * @method void setJobId(string $JobId) 设置<p>同步任务id，如sync-werwfs23，可通过<a href="https://cloud.tencent.com/document/product/571/82103">DescribeSyncJobs</a>接口获取。</p>
 * @method array getJobIds() 获取<p>同步任务id列表，如[&quot;sync-n3gh7md9&quot;]</p>
 * @method void setJobIds(array $JobIds) 设置<p>同步任务id列表，如[&quot;sync-n3gh7md9&quot;]</p>
 * @method string getJobName() 获取<p>同步任务名</p>
 * @method void setJobName(string $JobName) 设置<p>同步任务名</p>
 * @method string getOrder() 获取<p>排序字段，目前仅支持CreateTime字段排序</p>
 * @method void setOrder(string $Order) 设置<p>排序字段，目前仅支持CreateTime字段排序</p>
 * @method string getOrderSeq() 获取<p>排序方式，升序为ASC，降序为DESC，默认为CreateTime降序</p>
 * @method void setOrderSeq(string $OrderSeq) 设置<p>排序方式，升序为ASC，降序为DESC，默认为CreateTime降序</p>
 * @method integer getOffset() 获取<p>偏移量，默认为0</p>
 * @method void setOffset(integer $Offset) 设置<p>偏移量，默认为0</p>
 * @method integer getLimit() 获取<p>返回同步任务实例数量，默认20，有效区间[1,100]</p>
 * @method void setLimit(integer $Limit) 设置<p>返回同步任务实例数量，默认20，有效区间[1,100]</p>
 * @method array getStatus() 获取<p>状态集合，如Initialized(初始化),CheckPass(校验通过),Running(运行中),ResumableErr(恢复中),Stopped(已结束)</p>
 * @method void setStatus(array $Status) 设置<p>状态集合，如Initialized(初始化),CheckPass(校验通过),Running(运行中),ResumableErr(恢复中),Stopped(已结束)</p>
 * @method string getRunMode() 获取<p>运行模式，如Immediate:立即运行，Timed:定时运行</p>
 * @method void setRunMode(string $RunMode) 设置<p>运行模式，如Immediate:立即运行，Timed:定时运行</p>
 * @method string getJobType() 获取<p>任务类型，如mysql2mysql：msyql同步到mysql;可取值有mysql2mysql、mysql2kafka、tdsqlmysql2kafka、tdsqlmysql2tdsqlmysql、tdsqlmysql2mysql、mysql2tdsqlmysql、mysql2mariadb、mariadb2mariadb、mariadb2kafka、cynosdbmysql2kafka、cynosdbmysql2cynosdbmysql、cynosdbmysql2mysql、mysql2cynosdbmysql、mariadb2tdsqlmysql、tdsqlmysql2cynosdbmysql、cynosdbmysql2tdsqlmysql、tdstore2mysql、tdstore2percona、tdstore2mariadb、tdstore2cynosdbmysql、cynosdbmysql2mariadb、mariadb2cynosdbmysql、tdsqlmysql2mariadb、mariadb2mysql、percona2mariadb、postgresql2postgresql、tdstore2tdsqlmysql、mongodb2mongodb</p>
 * @method void setJobType(string $JobType) 设置<p>任务类型，如mysql2mysql：msyql同步到mysql;可取值有mysql2mysql、mysql2kafka、tdsqlmysql2kafka、tdsqlmysql2tdsqlmysql、tdsqlmysql2mysql、mysql2tdsqlmysql、mysql2mariadb、mariadb2mariadb、mariadb2kafka、cynosdbmysql2kafka、cynosdbmysql2cynosdbmysql、cynosdbmysql2mysql、mysql2cynosdbmysql、mariadb2tdsqlmysql、tdsqlmysql2cynosdbmysql、cynosdbmysql2tdsqlmysql、tdstore2mysql、tdstore2percona、tdstore2mariadb、tdstore2cynosdbmysql、cynosdbmysql2mariadb、mariadb2cynosdbmysql、tdsqlmysql2mariadb、mariadb2mysql、percona2mariadb、postgresql2postgresql、tdstore2tdsqlmysql、mongodb2mongodb</p>
 * @method string getPayMode() 获取<p>付费类型，PrePay：预付费，PostPay：后付费</p>
 * @method void setPayMode(string $PayMode) 设置<p>付费类型，PrePay：预付费，PostPay：后付费</p>
 * @method array getTagFilters() 获取<p>tag</p>
 * @method void setTagFilters(array $TagFilters) 设置<p>tag</p>
 * @method string getSrcInfoPattern() 获取<p>源端数据库连接信息，可以输入实例ID或者IP等</p>
 * @method void setSrcInfoPattern(string $SrcInfoPattern) 设置<p>源端数据库连接信息，可以输入实例ID或者IP等</p>
 * @method string getDstInfoPattern() 获取<p>目标端数据库连接信息，可以输入实例ID或者IP等</p>
 * @method void setDstInfoPattern(string $DstInfoPattern) 设置<p>目标端数据库连接信息，可以输入实例ID或者IP等</p>
 */
class DescribeSyncJobsRequest extends AbstractModel
{
    /**
     * @var string <p>同步任务id，如sync-werwfs23，可通过<a href="https://cloud.tencent.com/document/product/571/82103">DescribeSyncJobs</a>接口获取。</p>
     */
    public $JobId;

    /**
     * @var array <p>同步任务id列表，如[&quot;sync-n3gh7md9&quot;]</p>
     */
    public $JobIds;

    /**
     * @var string <p>同步任务名</p>
     */
    public $JobName;

    /**
     * @var string <p>排序字段，目前仅支持CreateTime字段排序</p>
     */
    public $Order;

    /**
     * @var string <p>排序方式，升序为ASC，降序为DESC，默认为CreateTime降序</p>
     */
    public $OrderSeq;

    /**
     * @var integer <p>偏移量，默认为0</p>
     */
    public $Offset;

    /**
     * @var integer <p>返回同步任务实例数量，默认20，有效区间[1,100]</p>
     */
    public $Limit;

    /**
     * @var array <p>状态集合，如Initialized(初始化),CheckPass(校验通过),Running(运行中),ResumableErr(恢复中),Stopped(已结束)</p>
     */
    public $Status;

    /**
     * @var string <p>运行模式，如Immediate:立即运行，Timed:定时运行</p>
     */
    public $RunMode;

    /**
     * @var string <p>任务类型，如mysql2mysql：msyql同步到mysql;可取值有mysql2mysql、mysql2kafka、tdsqlmysql2kafka、tdsqlmysql2tdsqlmysql、tdsqlmysql2mysql、mysql2tdsqlmysql、mysql2mariadb、mariadb2mariadb、mariadb2kafka、cynosdbmysql2kafka、cynosdbmysql2cynosdbmysql、cynosdbmysql2mysql、mysql2cynosdbmysql、mariadb2tdsqlmysql、tdsqlmysql2cynosdbmysql、cynosdbmysql2tdsqlmysql、tdstore2mysql、tdstore2percona、tdstore2mariadb、tdstore2cynosdbmysql、cynosdbmysql2mariadb、mariadb2cynosdbmysql、tdsqlmysql2mariadb、mariadb2mysql、percona2mariadb、postgresql2postgresql、tdstore2tdsqlmysql、mongodb2mongodb</p>
     */
    public $JobType;

    /**
     * @var string <p>付费类型，PrePay：预付费，PostPay：后付费</p>
     */
    public $PayMode;

    /**
     * @var array <p>tag</p>
     */
    public $TagFilters;

    /**
     * @var string <p>源端数据库连接信息，可以输入实例ID或者IP等</p>
     */
    public $SrcInfoPattern;

    /**
     * @var string <p>目标端数据库连接信息，可以输入实例ID或者IP等</p>
     */
    public $DstInfoPattern;

    /**
     * @param string $JobId <p>同步任务id，如sync-werwfs23，可通过<a href="https://cloud.tencent.com/document/product/571/82103">DescribeSyncJobs</a>接口获取。</p>
     * @param array $JobIds <p>同步任务id列表，如[&quot;sync-n3gh7md9&quot;]</p>
     * @param string $JobName <p>同步任务名</p>
     * @param string $Order <p>排序字段，目前仅支持CreateTime字段排序</p>
     * @param string $OrderSeq <p>排序方式，升序为ASC，降序为DESC，默认为CreateTime降序</p>
     * @param integer $Offset <p>偏移量，默认为0</p>
     * @param integer $Limit <p>返回同步任务实例数量，默认20，有效区间[1,100]</p>
     * @param array $Status <p>状态集合，如Initialized(初始化),CheckPass(校验通过),Running(运行中),ResumableErr(恢复中),Stopped(已结束)</p>
     * @param string $RunMode <p>运行模式，如Immediate:立即运行，Timed:定时运行</p>
     * @param string $JobType <p>任务类型，如mysql2mysql：msyql同步到mysql;可取值有mysql2mysql、mysql2kafka、tdsqlmysql2kafka、tdsqlmysql2tdsqlmysql、tdsqlmysql2mysql、mysql2tdsqlmysql、mysql2mariadb、mariadb2mariadb、mariadb2kafka、cynosdbmysql2kafka、cynosdbmysql2cynosdbmysql、cynosdbmysql2mysql、mysql2cynosdbmysql、mariadb2tdsqlmysql、tdsqlmysql2cynosdbmysql、cynosdbmysql2tdsqlmysql、tdstore2mysql、tdstore2percona、tdstore2mariadb、tdstore2cynosdbmysql、cynosdbmysql2mariadb、mariadb2cynosdbmysql、tdsqlmysql2mariadb、mariadb2mysql、percona2mariadb、postgresql2postgresql、tdstore2tdsqlmysql、mongodb2mongodb</p>
     * @param string $PayMode <p>付费类型，PrePay：预付费，PostPay：后付费</p>
     * @param array $TagFilters <p>tag</p>
     * @param string $SrcInfoPattern <p>源端数据库连接信息，可以输入实例ID或者IP等</p>
     * @param string $DstInfoPattern <p>目标端数据库连接信息，可以输入实例ID或者IP等</p>
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
        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("JobIds",$param) and $param["JobIds"] !== null) {
            $this->JobIds = $param["JobIds"];
        }

        if (array_key_exists("JobName",$param) and $param["JobName"] !== null) {
            $this->JobName = $param["JobName"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("OrderSeq",$param) and $param["OrderSeq"] !== null) {
            $this->OrderSeq = $param["OrderSeq"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("RunMode",$param) and $param["RunMode"] !== null) {
            $this->RunMode = $param["RunMode"];
        }

        if (array_key_exists("JobType",$param) and $param["JobType"] !== null) {
            $this->JobType = $param["JobType"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("TagFilters",$param) and $param["TagFilters"] !== null) {
            $this->TagFilters = [];
            foreach ($param["TagFilters"] as $key => $value){
                $obj = new TagFilter();
                $obj->deserialize($value);
                array_push($this->TagFilters, $obj);
            }
        }

        if (array_key_exists("SrcInfoPattern",$param) and $param["SrcInfoPattern"] !== null) {
            $this->SrcInfoPattern = $param["SrcInfoPattern"];
        }

        if (array_key_exists("DstInfoPattern",$param) and $param["DstInfoPattern"] !== null) {
            $this->DstInfoPattern = $param["DstInfoPattern"];
        }
    }
}
