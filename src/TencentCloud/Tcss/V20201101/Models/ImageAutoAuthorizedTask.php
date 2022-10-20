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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 镜像自动授权任务信息
 *
 * @method integer getTaskId() 获取任务id
 * @method void setTaskId(integer $TaskId) 设置任务id
 * @method string getType() 获取授权方式，AUTO:自动授权，MANUAL:手动授权
 * @method void setType(string $Type) 设置授权方式，AUTO:自动授权，MANUAL:手动授权
 * @method string getAuthorizedDate() 获取任务日期
 * @method void setAuthorizedDate(string $AuthorizedDate) 设置任务日期
 * @method string getSource() 获取镜像来源，LOCAL:本地镜像，REGISTRY:仓库镜像
 * @method void setSource(string $Source) 设置镜像来源，LOCAL:本地镜像，REGISTRY:仓库镜像
 * @method string getLastAuthorizedTime() 获取最近授权时间
 * @method void setLastAuthorizedTime(string $LastAuthorizedTime) 设置最近授权时间
 * @method integer getSuccessCount() 获取自动授权成功数
 * @method void setSuccessCount(integer $SuccessCount) 设置自动授权成功数
 * @method integer getFailCount() 获取自动授权失败数
 * @method void setFailCount(integer $FailCount) 设置自动授权失败数
 * @method string getLatestFailCode() 获取最近任务失败码，REACH_LIMIT:达到授权上限，LICENSE_INSUFFICIENT:授权数不足
 * @method void setLatestFailCode(string $LatestFailCode) 设置最近任务失败码，REACH_LIMIT:达到授权上限，LICENSE_INSUFFICIENT:授权数不足
 */
class ImageAutoAuthorizedTask extends AbstractModel
{
    /**
     * @var integer 任务id
     */
    public $TaskId;

    /**
     * @var string 授权方式，AUTO:自动授权，MANUAL:手动授权
     */
    public $Type;

    /**
     * @var string 任务日期
     */
    public $AuthorizedDate;

    /**
     * @var string 镜像来源，LOCAL:本地镜像，REGISTRY:仓库镜像
     */
    public $Source;

    /**
     * @var string 最近授权时间
     */
    public $LastAuthorizedTime;

    /**
     * @var integer 自动授权成功数
     */
    public $SuccessCount;

    /**
     * @var integer 自动授权失败数
     */
    public $FailCount;

    /**
     * @var string 最近任务失败码，REACH_LIMIT:达到授权上限，LICENSE_INSUFFICIENT:授权数不足
     */
    public $LatestFailCode;

    /**
     * @param integer $TaskId 任务id
     * @param string $Type 授权方式，AUTO:自动授权，MANUAL:手动授权
     * @param string $AuthorizedDate 任务日期
     * @param string $Source 镜像来源，LOCAL:本地镜像，REGISTRY:仓库镜像
     * @param string $LastAuthorizedTime 最近授权时间
     * @param integer $SuccessCount 自动授权成功数
     * @param integer $FailCount 自动授权失败数
     * @param string $LatestFailCode 最近任务失败码，REACH_LIMIT:达到授权上限，LICENSE_INSUFFICIENT:授权数不足
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("AuthorizedDate",$param) and $param["AuthorizedDate"] !== null) {
            $this->AuthorizedDate = $param["AuthorizedDate"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("LastAuthorizedTime",$param) and $param["LastAuthorizedTime"] !== null) {
            $this->LastAuthorizedTime = $param["LastAuthorizedTime"];
        }

        if (array_key_exists("SuccessCount",$param) and $param["SuccessCount"] !== null) {
            $this->SuccessCount = $param["SuccessCount"];
        }

        if (array_key_exists("FailCount",$param) and $param["FailCount"] !== null) {
            $this->FailCount = $param["FailCount"];
        }

        if (array_key_exists("LatestFailCode",$param) and $param["LatestFailCode"] !== null) {
            $this->LatestFailCode = $param["LatestFailCode"];
        }
    }
}
