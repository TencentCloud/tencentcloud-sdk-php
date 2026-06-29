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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 日志检索结果
 *
 * @method integer getTime() 获取<p>时间</p>
 * @method void setTime(integer $Time) 设置<p>时间</p>
 * @method string getTopicId() 获取<p>主题</p>
 * @method void setTopicId(string $TopicId) 设置<p>主题</p>
 * @method string getTopicName() 获取<p>主题名</p>
 * @method void setTopicName(string $TopicName) 设置<p>主题名</p>
 * @method string getSource() 获取<p>源</p>
 * @method void setSource(string $Source) 设置<p>源</p>
 * @method string getFileName() 获取<p>文件名</p>
 * @method void setFileName(string $FileName) 设置<p>文件名</p>
 * @method string getPkgId() 获取<p>pkgid</p>
 * @method void setPkgId(string $PkgId) 设置<p>pkgid</p>
 * @method string getPkgLogId() 获取<p>pkglogid</p>
 * @method void setPkgLogId(string $PkgLogId) 设置<p>pkglogid</p>
 * @method string getLogJson() 获取<p>json数据</p>
 * @method void setLogJson(string $LogJson) 设置<p>json数据</p>
 * @method string getHostName() 获取<p>主机名</p>
 * @method void setHostName(string $HostName) 设置<p>主机名</p>
 * @method string getRawLog() 获取<p>log信息</p>
 * @method void setRawLog(string $RawLog) 设置<p>log信息</p>
 * @method string getIndexStatus() 获取<p>索引状态</p>
 * @method void setIndexStatus(string $IndexStatus) 设置<p>索引状态</p>
 * @method array getHighLights() 获取<p>高亮信息</p>
 * @method void setHighLights(array $HighLights) 设置<p>高亮信息</p>
 */
class LogSearchResult extends AbstractModel
{
    /**
     * @var integer <p>时间</p>
     */
    public $Time;

    /**
     * @var string <p>主题</p>
     */
    public $TopicId;

    /**
     * @var string <p>主题名</p>
     */
    public $TopicName;

    /**
     * @var string <p>源</p>
     */
    public $Source;

    /**
     * @var string <p>文件名</p>
     */
    public $FileName;

    /**
     * @var string <p>pkgid</p>
     */
    public $PkgId;

    /**
     * @var string <p>pkglogid</p>
     */
    public $PkgLogId;

    /**
     * @var string <p>json数据</p>
     */
    public $LogJson;

    /**
     * @var string <p>主机名</p>
     */
    public $HostName;

    /**
     * @var string <p>log信息</p>
     */
    public $RawLog;

    /**
     * @var string <p>索引状态</p>
     */
    public $IndexStatus;

    /**
     * @var array <p>高亮信息</p>
     */
    public $HighLights;

    /**
     * @param integer $Time <p>时间</p>
     * @param string $TopicId <p>主题</p>
     * @param string $TopicName <p>主题名</p>
     * @param string $Source <p>源</p>
     * @param string $FileName <p>文件名</p>
     * @param string $PkgId <p>pkgid</p>
     * @param string $PkgLogId <p>pkglogid</p>
     * @param string $LogJson <p>json数据</p>
     * @param string $HostName <p>主机名</p>
     * @param string $RawLog <p>log信息</p>
     * @param string $IndexStatus <p>索引状态</p>
     * @param array $HighLights <p>高亮信息</p>
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

        if (array_key_exists("HighLights",$param) and $param["HighLights"] !== null) {
            $this->HighLights = [];
            foreach ($param["HighLights"] as $key => $value){
                $obj = new LogHighLightItem();
                $obj->deserialize($value);
                array_push($this->HighLights, $obj);
            }
        }
    }
}
