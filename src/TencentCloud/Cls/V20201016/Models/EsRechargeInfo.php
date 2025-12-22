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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * es导入配置信息
 *
 * @method string getTaskId() 获取任务id。
 * @method void setTaskId(string $TaskId) 设置任务id。
 * @method integer getUin() 获取主账号id。
 * @method void setUin(integer $Uin) 设置主账号id。
 * @method string getTopicId() 获取日志主题id。
- 通过 [获取日志主题列表](https://cloud.tencent.com/document/product/614/56454) 获取日志主题Id。
- 通过 [创建日志主题](https://cloud.tencent.com/document/product/614/56456) 获取日志主题Id。
 * @method void setTopicId(string $TopicId) 设置日志主题id。
- 通过 [获取日志主题列表](https://cloud.tencent.com/document/product/614/56454) 获取日志主题Id。
- 通过 [创建日志主题](https://cloud.tencent.com/document/product/614/56456) 获取日志主题Id。
 * @method string getName() 获取配置名称。
 * @method void setName(string $Name) 设置配置名称。
 * @method string getIndex() 获取es索引。
 * @method void setIndex(string $Index) 设置es索引。
 * @method string getQuery() 获取es查询语句。
 * @method void setQuery(string $Query) 设置es查询语句。
 * @method EsInfo getEsInfo() 获取es集群信息。
 * @method void setEsInfo(EsInfo $EsInfo) 设置es集群信息。
 * @method EsImportInfo getImportInfo() 获取es导入信息。
 * @method void setImportInfo(EsImportInfo $ImportInfo) 设置es导入信息。
 * @method EsTimeInfo getTimeInfo() 获取es导入时间配置信息。
 * @method void setTimeInfo(EsTimeInfo $TimeInfo) 设置es导入时间配置信息。
 * @method integer getStatus() 获取任务状态。
1. 运行中
2. 暂停
3. 完成
4. 异常
 * @method void setStatus(integer $Status) 设置任务状态。
1. 运行中
2. 暂停
3. 完成
4. 异常
 * @method integer getProgress() 获取任务进度 0~100 百分比。100：表示完成。
 * @method void setProgress(integer $Progress) 设置任务进度 0~100 百分比。100：表示完成。
 * @method integer getSubUin() 获取子账号id。
 * @method void setSubUin(integer $SubUin) 设置子账号id。
 * @method integer getCreateTime() 获取创建时间。
 * @method void setCreateTime(integer $CreateTime) 设置创建时间。
 * @method integer getUpdateTime() 获取修改时间。
 * @method void setUpdateTime(integer $UpdateTime) 设置修改时间。
 * @method integer getHasServicesLog() 获取是否开启投递服务日志。1：关闭，2：开启。
 * @method void setHasServicesLog(integer $HasServicesLog) 设置是否开启投递服务日志。1：关闭，2：开启。
 */
class EsRechargeInfo extends AbstractModel
{
    /**
     * @var string 任务id。
     */
    public $TaskId;

    /**
     * @var integer 主账号id。
     */
    public $Uin;

    /**
     * @var string 日志主题id。
- 通过 [获取日志主题列表](https://cloud.tencent.com/document/product/614/56454) 获取日志主题Id。
- 通过 [创建日志主题](https://cloud.tencent.com/document/product/614/56456) 获取日志主题Id。
     */
    public $TopicId;

    /**
     * @var string 配置名称。
     */
    public $Name;

    /**
     * @var string es索引。
     */
    public $Index;

    /**
     * @var string es查询语句。
     */
    public $Query;

    /**
     * @var EsInfo es集群信息。
     */
    public $EsInfo;

    /**
     * @var EsImportInfo es导入信息。
     */
    public $ImportInfo;

    /**
     * @var EsTimeInfo es导入时间配置信息。
     */
    public $TimeInfo;

    /**
     * @var integer 任务状态。
1. 运行中
2. 暂停
3. 完成
4. 异常
     */
    public $Status;

    /**
     * @var integer 任务进度 0~100 百分比。100：表示完成。
     */
    public $Progress;

    /**
     * @var integer 子账号id。
     */
    public $SubUin;

    /**
     * @var integer 创建时间。
     */
    public $CreateTime;

    /**
     * @var integer 修改时间。
     */
    public $UpdateTime;

    /**
     * @var integer 是否开启投递服务日志。1：关闭，2：开启。
     */
    public $HasServicesLog;

    /**
     * @param string $TaskId 任务id。
     * @param integer $Uin 主账号id。
     * @param string $TopicId 日志主题id。
- 通过 [获取日志主题列表](https://cloud.tencent.com/document/product/614/56454) 获取日志主题Id。
- 通过 [创建日志主题](https://cloud.tencent.com/document/product/614/56456) 获取日志主题Id。
     * @param string $Name 配置名称。
     * @param string $Index es索引。
     * @param string $Query es查询语句。
     * @param EsInfo $EsInfo es集群信息。
     * @param EsImportInfo $ImportInfo es导入信息。
     * @param EsTimeInfo $TimeInfo es导入时间配置信息。
     * @param integer $Status 任务状态。
1. 运行中
2. 暂停
3. 完成
4. 异常
     * @param integer $Progress 任务进度 0~100 百分比。100：表示完成。
     * @param integer $SubUin 子账号id。
     * @param integer $CreateTime 创建时间。
     * @param integer $UpdateTime 修改时间。
     * @param integer $HasServicesLog 是否开启投递服务日志。1：关闭，2：开启。
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

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Index",$param) and $param["Index"] !== null) {
            $this->Index = $param["Index"];
        }

        if (array_key_exists("Query",$param) and $param["Query"] !== null) {
            $this->Query = $param["Query"];
        }

        if (array_key_exists("EsInfo",$param) and $param["EsInfo"] !== null) {
            $this->EsInfo = new EsInfo();
            $this->EsInfo->deserialize($param["EsInfo"]);
        }

        if (array_key_exists("ImportInfo",$param) and $param["ImportInfo"] !== null) {
            $this->ImportInfo = new EsImportInfo();
            $this->ImportInfo->deserialize($param["ImportInfo"]);
        }

        if (array_key_exists("TimeInfo",$param) and $param["TimeInfo"] !== null) {
            $this->TimeInfo = new EsTimeInfo();
            $this->TimeInfo->deserialize($param["TimeInfo"]);
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("SubUin",$param) and $param["SubUin"] !== null) {
            $this->SubUin = $param["SubUin"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("HasServicesLog",$param) and $param["HasServicesLog"] !== null) {
            $this->HasServicesLog = $param["HasServicesLog"];
        }
    }
}
