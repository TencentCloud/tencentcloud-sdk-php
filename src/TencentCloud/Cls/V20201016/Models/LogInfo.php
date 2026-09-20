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
 * 日志结果信息
 *
 * @method integer getTime() 获取<p>日志时间，单位ms</p>
 * @method void setTime(integer $Time) 设置<p>日志时间，单位ms</p>
 * @method string getTopicId() 获取<p>日志主题ID</p>
 * @method void setTopicId(string $TopicId) 设置<p>日志主题ID</p>
 * @method string getTopicName() 获取<p>日志主题名称</p>
 * @method void setTopicName(string $TopicName) 设置<p>日志主题名称</p>
 * @method string getSource() 获取<p>日志来源IP</p>
 * @method void setSource(string $Source) 设置<p>日志来源IP</p>
 * @method string getFileName() 获取<p>日志文件名称</p>
 * @method void setFileName(string $FileName) 设置<p>日志文件名称</p>
 * @method string getPkgId() 获取<p>日志上报请求包的ID</p>
 * @method void setPkgId(string $PkgId) 设置<p>日志上报请求包的ID</p>
 * @method string getPkgLogId() 获取<p>请求包内日志的ID</p>
 * @method void setPkgLogId(string $PkgLogId) 设置<p>请求包内日志的ID</p>
 * @method array getHighLights() 获取<p>符合检索条件的关键词，一般用于高亮显示。仅支持键值检索，不支持全文检索</p>
 * @method void setHighLights(array $HighLights) 设置<p>符合检索条件的关键词，一般用于高亮显示。仅支持键值检索，不支持全文检索</p>
 * @method string getLogJson() 获取<p>日志内容的Json序列化字符串</p>
 * @method void setLogJson(string $LogJson) 设置<p>日志内容的Json序列化字符串</p>
 * @method string getHostName() 获取<p>日志来源主机名称</p>
 * @method void setHostName(string $HostName) 设置<p>日志来源主机名称</p>
 * @method string getRawLog() 获取<p>原始日志(仅在日志创建索引异常时有值)</p>
 * @method void setRawLog(string $RawLog) 设置<p>原始日志(仅在日志创建索引异常时有值)</p>
 * @method string getIndexStatus() 获取<p>日志创建索引异常原因(仅在日志创建索引异常时有值)</p>
 * @method void setIndexStatus(string $IndexStatus) 设置<p>日志创建索引异常原因(仅在日志创建索引异常时有值)</p>
 * @method integer getTimeNanos() 获取<p>日志时间，单位ns</p><p>单位：纳秒</p>
 * @method void setTimeNanos(integer $TimeNanos) 设置<p>日志时间，单位ns</p><p>单位：纳秒</p>
 */
class LogInfo extends AbstractModel
{
    /**
     * @var integer <p>日志时间，单位ms</p>
     */
    public $Time;

    /**
     * @var string <p>日志主题ID</p>
     */
    public $TopicId;

    /**
     * @var string <p>日志主题名称</p>
     */
    public $TopicName;

    /**
     * @var string <p>日志来源IP</p>
     */
    public $Source;

    /**
     * @var string <p>日志文件名称</p>
     */
    public $FileName;

    /**
     * @var string <p>日志上报请求包的ID</p>
     */
    public $PkgId;

    /**
     * @var string <p>请求包内日志的ID</p>
     */
    public $PkgLogId;

    /**
     * @var array <p>符合检索条件的关键词，一般用于高亮显示。仅支持键值检索，不支持全文检索</p>
     */
    public $HighLights;

    /**
     * @var string <p>日志内容的Json序列化字符串</p>
     */
    public $LogJson;

    /**
     * @var string <p>日志来源主机名称</p>
     */
    public $HostName;

    /**
     * @var string <p>原始日志(仅在日志创建索引异常时有值)</p>
     */
    public $RawLog;

    /**
     * @var string <p>日志创建索引异常原因(仅在日志创建索引异常时有值)</p>
     */
    public $IndexStatus;

    /**
     * @var integer <p>日志时间，单位ns</p><p>单位：纳秒</p>
     */
    public $TimeNanos;

    /**
     * @param integer $Time <p>日志时间，单位ms</p>
     * @param string $TopicId <p>日志主题ID</p>
     * @param string $TopicName <p>日志主题名称</p>
     * @param string $Source <p>日志来源IP</p>
     * @param string $FileName <p>日志文件名称</p>
     * @param string $PkgId <p>日志上报请求包的ID</p>
     * @param string $PkgLogId <p>请求包内日志的ID</p>
     * @param array $HighLights <p>符合检索条件的关键词，一般用于高亮显示。仅支持键值检索，不支持全文检索</p>
     * @param string $LogJson <p>日志内容的Json序列化字符串</p>
     * @param string $HostName <p>日志来源主机名称</p>
     * @param string $RawLog <p>原始日志(仅在日志创建索引异常时有值)</p>
     * @param string $IndexStatus <p>日志创建索引异常原因(仅在日志创建索引异常时有值)</p>
     * @param integer $TimeNanos <p>日志时间，单位ns</p><p>单位：纳秒</p>
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
        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("PkgId",$param) and $param["PkgId"] !== null) {
            $this->PkgId = $param["PkgId"];
        }

        if (array_key_exists("PkgLogId",$param) and $param["PkgLogId"] !== null) {
            $this->PkgLogId = $param["PkgLogId"];
        }

        if (array_key_exists("HighLights",$param) and $param["HighLights"] !== null) {
            $this->HighLights = [];
            foreach ($param["HighLights"] as $key => $value){
                $obj = new HighLightItem();
                $obj->deserialize($value);
                array_push($this->HighLights, $obj);
            }
        }

        if (array_key_exists("LogJson",$param) and $param["LogJson"] !== null) {
            $this->LogJson = $param["LogJson"];
        }

        if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
            $this->HostName = $param["HostName"];
        }

        if (array_key_exists("RawLog",$param) and $param["RawLog"] !== null) {
            $this->RawLog = $param["RawLog"];
        }

        if (array_key_exists("IndexStatus",$param) and $param["IndexStatus"] !== null) {
            $this->IndexStatus = $param["IndexStatus"];
        }

        if (array_key_exists("TimeNanos",$param) and $param["TimeNanos"] !== null) {
            $this->TimeNanos = $param["TimeNanos"];
        }
    }
}
