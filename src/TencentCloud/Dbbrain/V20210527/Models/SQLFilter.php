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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例SQL限流任务。
 *
 * @method integer getId() 获取任务ID。
 * @method void setId(integer $Id) 设置任务ID。
 * @method string getStatus() 获取任务状态，取值包括RUNNING - 运行中, FINISHED - 已完成, TERMINATED - 已终止。
 * @method void setStatus(string $Status) 设置任务状态，取值包括RUNNING - 运行中, FINISHED - 已完成, TERMINATED - 已终止。
 * @method string getSqlType() 获取SQL类型，取值包括SELECT, UPDATE, DELETE, INSERT, REPLACE。
 * @method void setSqlType(string $SqlType) 设置SQL类型，取值包括SELECT, UPDATE, DELETE, INSERT, REPLACE。
 * @method string getOriginKeys() 获取筛选SQL的关键词，多个关键词用英文逗号拼接。
 * @method void setOriginKeys(string $OriginKeys) 设置筛选SQL的关键词，多个关键词用英文逗号拼接。
 * @method string getOriginRule() 获取筛选SQL的规则。
 * @method void setOriginRule(string $OriginRule) 设置筛选SQL的规则。
 * @method integer getRejectedSqlCount() 获取已拒绝SQL数目。
 * @method void setRejectedSqlCount(integer $RejectedSqlCount) 设置已拒绝SQL数目。
 * @method integer getCurrentConcurrency() 获取当前并发数。
 * @method void setCurrentConcurrency(integer $CurrentConcurrency) 设置当前并发数。
 * @method integer getMaxConcurrency() 获取最大并发数。
 * @method void setMaxConcurrency(integer $MaxConcurrency) 设置最大并发数。
 * @method string getCreateTime() 获取任务创建时间。
 * @method void setCreateTime(string $CreateTime) 设置任务创建时间。
 * @method string getCurrentTime() 获取当前时间。
 * @method void setCurrentTime(string $CurrentTime) 设置当前时间。
 * @method string getExpireTime() 获取限流过期时间。
 * @method void setExpireTime(string $ExpireTime) 设置限流过期时间。
 */
class SQLFilter extends AbstractModel
{
    /**
     * @var integer 任务ID。
     */
    public $Id;

    /**
     * @var string 任务状态，取值包括RUNNING - 运行中, FINISHED - 已完成, TERMINATED - 已终止。
     */
    public $Status;

    /**
     * @var string SQL类型，取值包括SELECT, UPDATE, DELETE, INSERT, REPLACE。
     */
    public $SqlType;

    /**
     * @var string 筛选SQL的关键词，多个关键词用英文逗号拼接。
     */
    public $OriginKeys;

    /**
     * @var string 筛选SQL的规则。
     */
    public $OriginRule;

    /**
     * @var integer 已拒绝SQL数目。
     */
    public $RejectedSqlCount;

    /**
     * @var integer 当前并发数。
     */
    public $CurrentConcurrency;

    /**
     * @var integer 最大并发数。
     */
    public $MaxConcurrency;

    /**
     * @var string 任务创建时间。
     */
    public $CreateTime;

    /**
     * @var string 当前时间。
     */
    public $CurrentTime;

    /**
     * @var string 限流过期时间。
     */
    public $ExpireTime;

    /**
     * @param integer $Id 任务ID。
     * @param string $Status 任务状态，取值包括RUNNING - 运行中, FINISHED - 已完成, TERMINATED - 已终止。
     * @param string $SqlType SQL类型，取值包括SELECT, UPDATE, DELETE, INSERT, REPLACE。
     * @param string $OriginKeys 筛选SQL的关键词，多个关键词用英文逗号拼接。
     * @param string $OriginRule 筛选SQL的规则。
     * @param integer $RejectedSqlCount 已拒绝SQL数目。
     * @param integer $CurrentConcurrency 当前并发数。
     * @param integer $MaxConcurrency 最大并发数。
     * @param string $CreateTime 任务创建时间。
     * @param string $CurrentTime 当前时间。
     * @param string $ExpireTime 限流过期时间。
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("SqlType",$param) and $param["SqlType"] !== null) {
            $this->SqlType = $param["SqlType"];
        }

        if (array_key_exists("OriginKeys",$param) and $param["OriginKeys"] !== null) {
            $this->OriginKeys = $param["OriginKeys"];
        }

        if (array_key_exists("OriginRule",$param) and $param["OriginRule"] !== null) {
            $this->OriginRule = $param["OriginRule"];
        }

        if (array_key_exists("RejectedSqlCount",$param) and $param["RejectedSqlCount"] !== null) {
            $this->RejectedSqlCount = $param["RejectedSqlCount"];
        }

        if (array_key_exists("CurrentConcurrency",$param) and $param["CurrentConcurrency"] !== null) {
            $this->CurrentConcurrency = $param["CurrentConcurrency"];
        }

        if (array_key_exists("MaxConcurrency",$param) and $param["MaxConcurrency"] !== null) {
            $this->MaxConcurrency = $param["MaxConcurrency"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("CurrentTime",$param) and $param["CurrentTime"] !== null) {
            $this->CurrentTime = $param["CurrentTime"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }
    }
}
