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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 托管记录
 *
 * @method integer getTotalCount() 获取总数
 * @method void setTotalCount(integer $TotalCount) 设置总数
 * @method integer getSuccessTotalCount() 获取成功总数
 * @method void setSuccessTotalCount(integer $SuccessTotalCount) 设置成功总数
 * @method integer getFailedTotalCount() 获取失败总数
 * @method void setFailedTotalCount(integer $FailedTotalCount) 设置失败总数
 * @method integer getRunningTotalCount() 获取部署中总数
 * @method void setRunningTotalCount(integer $RunningTotalCount) 设置部署中总数
 * @method integer getType() 获取部署记录类型 0 为部署， 1 为回滚
 * @method void setType(integer $Type) 设置部署记录类型 0 为部署， 1 为回滚
 * @method array getRecordDetailList() 获取部署记录详情列表
 * @method void setRecordDetailList(array $RecordDetailList) 设置部署记录详情列表
 * @method integer getStatus() 获取托管资源部署状态：0 等待部署， 1 部署成功， 2 部署失败 3 部署中， 4 回滚成功， 5 回滚失败
 * @method void setStatus(integer $Status) 设置托管资源部署状态：0 等待部署， 1 部署成功， 2 部署失败 3 部署中， 4 回滚成功， 5 回滚失败
 * @method string getCreateTime() 获取托管资源创建时间
 * @method void setCreateTime(string $CreateTime) 设置托管资源创建时间
 * @method integer getPendingTotalCount() 获取待部署总数
 * @method void setPendingTotalCount(integer $PendingTotalCount) 设置待部署总数
 */
class DeployRecord extends AbstractModel
{
    /**
     * @var integer 总数
     */
    public $TotalCount;

    /**
     * @var integer 成功总数
     */
    public $SuccessTotalCount;

    /**
     * @var integer 失败总数
     */
    public $FailedTotalCount;

    /**
     * @var integer 部署中总数
     */
    public $RunningTotalCount;

    /**
     * @var integer 部署记录类型 0 为部署， 1 为回滚
     */
    public $Type;

    /**
     * @var array 部署记录详情列表
     */
    public $RecordDetailList;

    /**
     * @var integer 托管资源部署状态：0 等待部署， 1 部署成功， 2 部署失败 3 部署中， 4 回滚成功， 5 回滚失败
     */
    public $Status;

    /**
     * @var string 托管资源创建时间
     */
    public $CreateTime;

    /**
     * @var integer 待部署总数
     */
    public $PendingTotalCount;

    /**
     * @param integer $TotalCount 总数
     * @param integer $SuccessTotalCount 成功总数
     * @param integer $FailedTotalCount 失败总数
     * @param integer $RunningTotalCount 部署中总数
     * @param integer $Type 部署记录类型 0 为部署， 1 为回滚
     * @param array $RecordDetailList 部署记录详情列表
     * @param integer $Status 托管资源部署状态：0 等待部署， 1 部署成功， 2 部署失败 3 部署中， 4 回滚成功， 5 回滚失败
     * @param string $CreateTime 托管资源创建时间
     * @param integer $PendingTotalCount 待部署总数
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("SuccessTotalCount",$param) and $param["SuccessTotalCount"] !== null) {
            $this->SuccessTotalCount = $param["SuccessTotalCount"];
        }

        if (array_key_exists("FailedTotalCount",$param) and $param["FailedTotalCount"] !== null) {
            $this->FailedTotalCount = $param["FailedTotalCount"];
        }

        if (array_key_exists("RunningTotalCount",$param) and $param["RunningTotalCount"] !== null) {
            $this->RunningTotalCount = $param["RunningTotalCount"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("RecordDetailList",$param) and $param["RecordDetailList"] !== null) {
            $this->RecordDetailList = [];
            foreach ($param["RecordDetailList"] as $key => $value){
                $obj = new DeployRecordList();
                $obj->deserialize($value);
                array_push($this->RecordDetailList, $obj);
            }
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("PendingTotalCount",$param) and $param["PendingTotalCount"] !== null) {
            $this->PendingTotalCount = $param["PendingTotalCount"];
        }
    }
}
